<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Contact;
use App\Info\Info;
use App\Question;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;
use App\Translate\ArticleTitleTranslate;

class PageController extends Controller
{
    /**
     * Index
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $request = file_get_contents("http://api.sypexgeo.net/json/".$_SERVER['REMOTE_ADDR']);
        $geo = json_decode($request);

        if(!$geo->city){
            $city = 'Санкт-Петербург';
        }else{
            $city = $geo->city->name_ru;
        }

        setcookie("city", $city);

        $info = new Info();
        $info = $info->getInfoIndex();

        return view( 'pages.index', compact( 'info' ) );
    }


    /**
     * News
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function news()
    {
        $category = Category::where( 'name', Category::NEWS )->first();

        $articles = $category->articles;

        $translate = new ArticleTitleTranslate();
        $articles = $translate->articleTitleTranslate($articles);

        return view( 'pages.news', compact( 'articles' ) );
    }


    /**
     * About
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view( 'pages.about' );
    }


    /**
     * Contacts
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contacts()
    {
        $contacts = Contact::where('city',$_COOKIE['city'])->first();

        if(!$contacts){
            $contacts = Contact::where('city','Санкт-Петербург')->first();
        }


        return view( 'pages.contacts',compact('contacts') );
    }


    /**
     * Questions
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function questions()
    {
        $questions = Question::all();

        return view( 'pages.questions', compact( 'questions' ) );
    }


    /**
     * Search
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search( Request $request )
    {
        $title = $request->get( 'search' );

        $articles = Article::where( 'title', 'LIKE', '%' . $title . '%' )->limit( 40 )->get();

        $translate = new ArticleTitleTranslate();
        $articles = $translate->articleTitleTranslate($articles);

        return view( 'pages.search', compact( 'articles', 'title' ) );
    }


    /**
     * Search
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function article()
    {
        return view( 'pages.article' );
    }
}

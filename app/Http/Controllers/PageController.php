<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Contact;
use App\Info\Info;
use App\Question;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Index
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
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
        $contacts = Contact::all();


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

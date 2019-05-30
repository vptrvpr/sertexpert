<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class ArticleController extends Controller
{
    /**
     * show Articles
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showArticle( $category,$title,$id )
    {
        $article = Article::where( 'id', $id )->get();

        return view( 'pages.article', compact( 'article' ) );
    }


    /**
     * Создание статьи
     *
     * @param Request $request
     */
    public function createArticle( Request $request )
    {
        $article = $request->get( 'article' );

        if($article[ 'page' ] === 'Новости'){
            $article[ 'category' ] = 'Новости';
        }

        $category = Category::where( 'name', $article[ 'category' ] )->first();

        $newArticle                   = new Article();
        $newArticle->title            = $article[ 'title' ];
        $newArticle->description      = $article[ 'description' ];
        $newArticle->text             = $article[ 'text' ];
        $newArticle->img              = $article[ 'image' ] ? 'images/articles/' . $article[ 'image' ] : NULL;
        $newArticle->title_page       = $article[ 'title_page' ];
        $newArticle->description_page = $article[ 'description_page' ];
        $newArticle->categories_id    = $category->id;
        $newArticle->save();
    }


    /**
     *
     *
     *
     * @param Request $request
     *
     * @return string
     */
    public function loadImageArticle( Request $request )
    {
        if( $request->hasFile( 'file' ) ) {
            $image    = $request->file( 'file' );
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make( $image )->save( public_path( 'images/articles/' . $filename ) );

            return $filename;
        }
    }


    /**
     * Выбрать все статьи
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getArticles( Request $request )
    {
        $search         = $request->get( 'search' );
        $articles       = Article::all();
        $searchArticles = [];

        foreach( $articles as $article ) {
            $article->page_name     = $article->category->page->name;
            $article->category_name = $article->category->name;
        }

        if( $search[ 'page' ] || $search[ 'category' ] ) {
            foreach( $articles as $article ) {
                if( $article->page_name === $search[ 'page' ] ) {

                    if( $search[ 'category' ] ) {
                        if( $article->category_name === $search[ 'category' ] ) {
                            $searchArticles[] = $article;
                        }
                    } else {
                        $searchArticles[] = $article;
                    }

                }
            }

            return response()->json( $searchArticles );
        }

        return response()->json( $articles );
    }


    /**
     * Удаляет статью
     *
     * @param $id
     */
    public function deleteArticles( $id )
    {
        Article::where( 'id', $id )->delete();
    }


    /**
     * @param Request $request
     *
     * @return string
     */
    public function saveArticles( Request $request )
    {
        $editArticle = $request->get( 'article' );

        $article                   = Article::where( 'id', $editArticle[ 'id' ] )->first();
        $article->text             = $editArticle[ 'text' ];
        $article->title_page       = $editArticle[ 'title_page' ];
        $article->description_page = $editArticle[ 'description_page' ];
        $article->save();
    }
}

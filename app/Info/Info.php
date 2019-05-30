<?php

namespace App\Info;


use App\Page;
use App\Translate\ArticleTitleTranslate;

class Info
{
    /**
     *  Собирает всю информацию для главной
     *
     * @return Page[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getInfoIndex(){
        $pages = Page::all();

        foreach( $pages as $page ) {
            $page->category = $page->categories()->get();

            foreach($page->category as $category){
                $translate = new ArticleTitleTranslate();
                $articles = $translate->articleTitleTranslate($category->articles()->get());
                $category->article = $articles;
            }
        }

        return $pages;
    }


    public function getInfoArticles(){

    }
}

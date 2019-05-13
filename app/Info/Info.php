<?php

namespace App\Info;


use App\Page;

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
                $category->article = $category->articles()->get();
            }
        }

        return $pages;
    }


    public function getInfoArticles(){

    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 30.05.2019
 * Time: 15:44
 */

namespace App\Translate;
use App\Translate\Translate;


class ArticleTitleTranslate
{
    public function articleTitleTranslate($articles){
        $translate = new Translate();
        foreach($articles as $article){
            $article->trans_title =  $translate->strUrlCHPU($article->title).'_'.$article->id;
            $article->trans_title_category =  $translate->strUrlCHPU($article->category->name);
        }

        return $articles;
    }
}

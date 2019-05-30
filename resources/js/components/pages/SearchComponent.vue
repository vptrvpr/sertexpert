<template>
    <div class="main">
        <header-component :isGeneral="false"></header-component>
        <div class="wrapper">
            <section class="titlebar">
                <h1 class="page-title"><span>Поиск</span></h1>
            </section>

            <hr class="col-md-6 bottom_60">
            <h3 class="text-center" v-if="!articles.length">По запросу 	&laquo;{{title}}&raquo; ничего не найдено</h3>
            <hr class="col-md-6 top_60 bottom_60" v-if="!articles.length">

            <div class="cont">
                <section class="our-news">
                    <div class="row" v-if="articles.length">
                        <!-- a news -->
                        <a class="col-md-12 news-list bottom_60" v-for="article in articles" :href="article.trans_title_category+'/'+article.trans_title">
                            <article class="news-box row">
                                <figure class="col-md-4" v-if="article.img">
                                    <img  :src="url+article.img" alt="">
                                </figure>
                                <div class="col-md-4 article-logo" v-else >
                                    <img class="img-article-logo" :src="url+'images/logo-light.png'">
                                </div>
                                <div class="col-md-8 left-list">
                                    <h4 class="title">{{article.title}}</h4>
                                    <div class="article-text" v-html="article.description">

                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>


                </section>

            </div> <!-- cont end -->
        </div>
        <questions-section-component></questions-section-component>
        <footer-component></footer-component>
    </div>
</template>

<script>
    export default {
        props: ['articles','url','title'],
        mounted() {
            console.log(this.articles);
        }
    }
</script>

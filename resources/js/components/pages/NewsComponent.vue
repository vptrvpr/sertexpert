<template>
    <div class="main">
        <header-component :addDecorationTopMenu="'/news'" :isGeneral="false"></header-component>
        <div class="wrapper">
            <section class="titlebar">
                <h1 class="page-title"><span>Новости</span></h1>
            </section>

            <hr class="col-md-6 bottom_60">

            <div class="cont">
                <section class="our-news">
                    <div class="row">
                        <!-- a news -->
                        <a class="col-md-12 news-list bottom_60" v-for="article in news" :href="'article/'+article.id">
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
        props: ['news','url']
    }
</script>

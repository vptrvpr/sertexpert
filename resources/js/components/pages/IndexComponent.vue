<template>
    <div class="main">
        <header-component :isGeneral="true"></header-component>
        <!-- SITE CONTENT -->
        <div class="wrapper">
            <section class="home">
                <!--<div id="particles-js"></div>-->
                <div class="home-content">
                    <div class="row">
                        <div class="col-md-6 col-9">
                            <h1 class="hero-title banner-animation-start-page">Быстро.<br><span>Качественно. Надежно.</span>
                            </h1>
                            <p class="top_45 banner-animation-start-page">Компания SERTEXPERT оказывает услуги<br> по оформлению
                                пакетов
                                разрешительной документации.<br>
                                <span class="element" data-text1="Сертификация и декларирование."
                                      data-text2="Гигиенические документы."
                                      data-text3="Пожарная безопасность." data-loop="true" data-backdelay="1500"></span></p>
                        </div>
                        <div class="col-md-6 col-3"></div>

                    </div>

                    <div class="social animate-right">
                        <a class="text">социальные сети</a>
                        <div class="line"></div>
                        <a href="https://www.facebook.com/sertexpert" target="_blank"><i
                            class="fab fa-facebook"></i> </a>
                        <a href="https://www.instagram.com/sertexpert/" target="_blank"><i
                            class="fab fa-instagram" aria-hidden="true"></i> </a>
                        <a href="https://vk.com/sertexpert" target="_blank"><i class="fab fa-vk" aria-hidden="true"></i> </a>
                        <a href="https://www.youtube.com/channel/UCRPY3ZSj3bKYaI3rcolOG-Q?guided_help_flow=3"
                           target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i> </a>
                    </div>
                </div>
            </section>

            <div class="cont">
                <section id="portfolio" class="portfolio">
                    <div class="container"><a name="services"></a>
                        <hr class="top_45 bottom_45 col-md-12">
                        <div class="block2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row ">
                                        <div class="title-widget col-12 animate-first">
                                            <h3 class="text-center title-services mb-4 scroll-services"
                                                id="scroll-services">Услуги</h3>
                                        </div>
                                        <div class="col-cxs-12 col-sm-6 col-md-4 card_wrap pb-2 pr-2"
                                             v-for="category in data[0].category">
                                            <div class="btn__submit">
                                                <a class="animation-border"
                                                   :data-remodal-target="'modal-'+category.id"><i class="fa fa-envelope-o"></i>
                                                    <h4 v-html="category.name_html"></h4>
                                                </a>

                                                <div class="line__wrap">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="remodal" :data-remodal-id="'modal-'+category.id">
                                                <button data-remodal-action="close" class="remodal-close"></button>
                                                <h3 class="articles-title">{{category.name}}</h3>
                                                <hr class="top_15 bottom_15 col-md-12">
                                                <div class="article-link" v-for="article in category.article">
                                                    <a :href="article.trans_title_category+'/'+article.trans_title">{{article.title}}</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="top_45 bottom_45 col-md-12">
                        <div class="block2">

                            <div class="branches ">
                                <div class="row">
                                    <div class="title-widget col-12">
                                        <h3 class="text-center title-services mb-5 animate-second scroll-sertification"
                                            id="scroll-sertification">Сертификация по
                                            отраслям</h3>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-2 col-6 card_wrap industry-general mb-5" v-for="category in data[1].category">
                                        <a class="industry-div" :data-remodal-target="'modal-'+category.id">
                                            <div class="li">
                                                <div class="front">
                                                    <img class="industry-img"
                                                         :src="'images/specification-icons/default/'+category.img_front">
                                                </div>
                                                <div class="back">
                                                    <img class="industry-img"
                                                         :src="'images/specification-icons/default/'+category.img_back">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="remodal" :data-remodal-id="'modal-'+category.id">
                                            <button data-remodal-action="close" class="remodal-close"></button>
                                            <h3 class="articles-title">{{category.name}}</h3>
                                            <hr class="top_15 bottom_15 col-md-12">
                                            <div class="article-link" v-for="article in category.article">
                                                <a :href="article.trans_title_category+'/'+article.trans_title">{{article.title}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="top_45 bottom_45 col-md-12">
                        <div class="block2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row ">
                                        <div class="title-widget col-12">
                                            <h3 class="text-center title-services mb-4 animate-third scroll-base"
                                                id="scroll-base">Нормативная
                                                база</h3>
                                        </div>
                                        <div class="col-cxs-12 col-sm-6 col-md-4 card_wrap pb-2 pr-2"
                                             v-for="category in data[2].category">
                                            <div class="btn__submit">
                                                <a class="animation-border"
                                                   :data-remodal-target="'modal-'+category.id"><i class="fa fa-envelope-o"></i>
                                                    <h4 v-html="category.name_html"></h4>
                                                </a>

                                                <div class="line__wrap">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="remodal" :data-remodal-id="'modal-'+category.id">
                                                <button data-remodal-action="close" class="remodal-close"></button>
                                                <h3 class="articles-title">{{category.name}}</h3>
                                                <hr class="top_15 bottom_15 col-md-12">
                                                <div class="article-link" v-for="article in category.article">
                                                    <a :href="article.trans_title_category+'/'+article.trans_title">{{article.title}}</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <hr class="top_90 bottom_90 col-md-8">
            </div> <!-- cont end -->
        </div> <!-- wrapper end -->
        <questions-section-component></questions-section-component>
        <footer-component></footer-component>

    </div>
</template>

<script>
    export default {
        props: [ 'data' ],
        mounted() {
        }
    }
</script>

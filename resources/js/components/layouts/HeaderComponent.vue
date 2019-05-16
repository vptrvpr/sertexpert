<template>
    <div class="main">
        <!-- PRELOADER -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-inner"></div>
            </div>
        </div>

        <!-- HEADER -->
        <header>
            <div class="row">
                <div class="col-2">
                    <a href="/" v-if="url">
                        <img class="logo animate-left"
                             :src="url+'images/logo-light.png'"
                             alt="">
                    </a>
                    <a href="/" v-else>
                        <img class="logo animate-left"
                             src="images/logo-light.png"
                             alt="">
                    </a>

                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-8">
                    <div class="nav-top-menu d-none d-sm-none d-md-none d-lg-none d-xl-flex">
                        <ul>
                            <li class="top-menu-li d-inline-flex" v-if="isGeneral"><a id="btn-services" scroll=".scroll-services" href="#">Услуги</a></li>
                            <li class="top-menu-li d-inline-flex" v-if="isGeneral"><a id="btn-sertification" scroll=".scroll-sertification" href="#">Сертификация по отраслям</a></li>
                            <li class="top-menu-li d-inline-flex" v-if="isGeneral"><a id="btn-base" scroll=".scroll-base" href="#">Нормативная база</a></li>
                            <li class="top-menu-li d-inline-flex" v-if="!isGeneral"><a id="btn-services-not-general" scroll=".scroll-services" href="/">Услуги</a></li>
                            <li class="top-menu-li d-inline-flex" v-if="!isGeneral"><a id="btn-sertification-not-general" scroll=".scroll-sertification" href="/">Сертификация по отраслям</a></li>
                            <li class="top-menu-li d-inline-flex" v-if="!isGeneral"><a id="btn-base-not-general" scroll=".scroll-base" href="/">Нормативная база</a></li>
                            <li class="top-menu-li d-inline-flex"><a href="/news">Новости</a></li>
                            <li class="top-menu-li d-inline-flex"><a href="/questions">Вопросы</a></li>
                            <li class="top-menu-li d-inline-flex"><a href="/about">О компании</a></li>
                            <li class="top-menu-li d-inline-flex"><a href="/contacts">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1 d-block d-sm-block d-md-block d-lg-flex d-xl-none">
                    <div class="nav-icon animate-right">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-2 search-1 animate-right-search d-none d-sm-none d-md-none d-lg-none d-xl-flex">
                    <form method="GET" action="/search">
                        <input class="search-input d-inline-flex" name="search" type="text">
                        <button type="submit" id="completed-task" class="btn-search d-inline-flex">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <!-- FULL MENU -->
        <div class="full-menu">
            <div class="full-inner row">
                <nav class="col-md-8">
                    <ul>
                        <li v-if="isGeneral"><a id="btn-services-mobile"  scroll=".scroll-services" href="#">Услуги</a></li>
                        <li v-if="isGeneral"><a id="btn-sertification-mobile" scroll=".scroll-sertification" href="#">Сертификация по отраслям</a></li>
                        <li v-if="isGeneral"><a id="btn-base-mobile" scroll=".scroll-base" href="#">Нормативная база</a></li>
                        <li v-if="!isGeneral"><a id="btn-services-mobile-not-general"  scroll=".scroll-services" href="/">Услуги</a></li>
                        <li v-if="!isGeneral"><a id="btn-sertification-mobile-not-general" scroll=".scroll-sertification" href="/">Сертификация по отраслям</a></li>
                        <li v-if="!isGeneral"><a id="btn-base-mobile-not-general" scroll=".scroll-base" href="/">Нормативная база</a></li>
                        <li><a href="/news">Новости</a></li>
                        <li><a href="/questions">Вопросы</a></li>
                        <li><a href="/about">О компании</a></li>
                        <li><a href="/contacts">Контакты</a></li>
                    </ul>
                </nav>
                <div class="col-md-4 full-contact">
                    <ul>
                        <li class="title">Контакты</li>
                        <li><a>info@sertlab.com</a><br>
                            <a>+7 499 348 16 88</a></li>
                        <li>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook"></i> </a>
                                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i> </a>
                                <a href="#"><i class="fab fa-vk" aria-hidden="true"></i> </a>
                                <a href="#"><i class="fab fa-google" aria-hidden="true"></i> </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [ 'addDecorationTopMenu','isGeneral','url' ],
        mounted() {
            this.addDecorationTopMenuFunc();
        },
        methods: {
            addDecorationTopMenuFunc: function () {
                var url = this.addDecorationTopMenu;

                $( ".top-menu-li" ).each( function ( index ) {
                    var isThisUrl = $( this ).children( 'a' ).attr( 'href' );

                    if ( isThisUrl === url ) {
                        $( this ).children( 'a' ).addClass( 'top-menu-active' );
                    }
                } );
            }
        }
    }
</script>

<template>
    <div class="main">
        <header-component :addDecorationTopMenu="'/contacts'" :isGeneral="false"></header-component>
        <div class="wrapper">
            <section class="titlebar">
                <h1 class="page-title"><span>Контакты</span></h1>
            </section>

            <hr class="col-md-6 bottom_60">

            <div class="cont">
                <section class="our-news">
                    <div class="row">
                        <!-- a news -->
                        <div class="col-md-12 news-list bottom_60">
                            <article class="news-box row">
                                <figure class="col-xl-5 col-lg-7 col-md-7 col-sm-12 col-xs-12"  v-html="contacts.map">

                                </figure>
                                <div class="col-xl-7 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <h6>Город: {{contacts.city}}</h6>
                                    <h6>Адрес: {{contacts.address}}</h6>
                                    <h6>Почта: <a class="contacts-info" :href="'tel:'+contacts.phone">{{contacts.phone}}</a></h6>
                                    <h6>Телефон: <a class="contacts-info" :href="'mailto:'+contacts.email">{{contacts.email}}</a></h6>
                                </div>
                                <hr class="col-md-12 bottom_30 top_30">
                            </article>
                        </div>
                    </div>
                </section>
            </div> <!-- cont end -->
        </div>
        <questions-section-2-component></questions-section-2-component>
        <footer-component></footer-component>

    </div>
</template>

<script>
    export default {
        props: ['contacts']
    }
</script>

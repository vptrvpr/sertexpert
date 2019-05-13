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
                            <article class="news-box row" v-for="contact in contacts">
                                <figure class="col-md-5" v-html="contact.map">

                                </figure>
                                <div class="col-md-7" v-html="contact.text">

                                </div>
                                <hr class="col-md-12 bottom_30 top_30">
                            </article>
                        </div>
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
        props: ['contacts']
    }
</script>

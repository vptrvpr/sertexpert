<template>
    <div class="main">
        <header-component :isGeneral="false" :url="url"></header-component>

        <div class="wrapper">
            <div class="cont">
                <section class="news-article top_90">
                    <article>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <figure class="article-image bottom_30" v-if="article[0].img">
                                    <img :src="url+article[0].img" class="" alt="">
                                </figure>
                                <h1 class="title text-center">{{article[0].title}}</h1>
                                <div class="text-article top_30" v-html="article[0].text" style="font-size: 15px">

                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                    </article>


                </section>

            </div> <!-- cont end -->
        </div> <!-- wrapper end -->
        <questions-section-component></questions-section-component>
        <footer-component></footer-component>

    </div>
</template>

<script>
    export default {
        props: ['article','url'],
        mounted() {

        }
    }
</script>

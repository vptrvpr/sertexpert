<template>

    <div class="main">
        <header-component :addDecorationTopMenu="'/questions'" :isGeneral="false"></header-component>

        <div class="wrapper">
            <section class="titlebar">
                <h1 class="page-title"><span>Вопросы</span></h1>
            </section>

            <hr class="col-md-6 bottom_15">

            <div class="cont">
                <section class="news-article top_90">
                    <article class="bottom_45" v-for="question in questions">
                        <div class="question-and-answer">
                            <div class="question">
                                <h4>{{question.question}}</h4>
                            </div>
                            <div class="answer">
                                <div v-html="question.answer"></div>
                            </div>
                        </div>
                        <hr class="col-md-12 bottom_15 top_45">
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
        props: ['questions']
    }
</script>

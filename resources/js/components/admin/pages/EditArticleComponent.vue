<template>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2 text-center">
                <i class="mdi mdi-calendar-multiple-check"></i>
              </span>
                    Редакторование статьи
                </h3>
            </div>
            <div class="row">
                <div class="col-md-12 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Редакторование статьи - {{article.description}}</h4>
                            <div class="row">
                                <div class="container">
                                    <div class="form-group w-100 mt-3">
                                        <label class="font-admin">Title (для страницы)</label>
                                        <textarea type="text" v-model="article.title_page"
                                                  class="form-control font-admin"
                                                  placeholder="Title (для страницы)"></textarea>
                                    </div>

                                    <div class="form-group w-100 mt-3">
                                        <label class="font-admin">Description (для страницы)</label>
                                        <textarea type="text" v-model="article.description_page"
                                                  class="form-control font-admin"
                                                  placeholder="Description (для страницы)"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <editor v-model="article.text"
                                                    api-key="f5b040i73ebkt63xkw5q3t2eycahtfyij48m616q4ezjyg4v"
                                                    plugins="advlist autolink link image lists charmap print preview"
                                                    custom_colors="true" s
                                                    toolbar="forecolor backcolor | undo redo | styleselect | bold italic | link image | numlist bullist"
                                                    :init="{height: 600,color_map: [
                                                    '1E1A1A','c3a993', 'Default',
                                                    ]}"
                                            ></editor>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-12 mt-3">
                                            <div v-if="saveSuccess"
                                                 class="alert alert-success d-flex justify-content-center"
                                                 role="alert">
                                                Изменения успешно сохранены!
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn btn-success"
                                                        @click="saveArticle()">Сохранить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a
                            href="https://www.cps-company.ru/"
                            target="_blank">CPS Company</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                    class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->


</template>

<script>
    export default {
        props: ['article_id'],
        data: function () {
            return {
                article: {},
                saveSuccess: false,
                intervalid1: null
            }
        },
        mounted() {
            this.getArticleById();
        },
        methods: {
            /**
             * Get all Articles
             */
            getArticleById: function () {
                axios({
                    method: 'get',
                    url: '/article/get/' + this.article_id,
                    data: {search: this.search}
                }).then((response) => {
                    this.article = response.data;
                });
            },


            saveArticle: function () {
                axios({
                    method: 'post',
                    url: '/articles/save',
                    data: {article: this.article}
                }).then((response) => {
                    const self = this;
                    this.saveSuccess = true;

                    this.getArticleById();

                    this.intervalid1 = setInterval(function () {
                        self.saveSuccess = false;
                    }, 3000);
                });
            }

        }
    }
</script>

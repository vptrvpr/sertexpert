<template>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-calendar-text"></i>
              </span>
                    Статьи
                </h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Поиск</h4>
                            <div class="table-responsive">
                                <div class="form-group w-100 mt-3">
                                    <label class="font-admin">Выберите страницу</label>
                                    <select v-model="search.page" @change="getArticles"
                                            class="form-control form-control-lg w-100 font-admin">
                                        <option disabled>Выберите страницу</option>
                                        <template v-for="page in data">
                                            <option>{{page.name}}</option>
                                        </template>
                                    </select>
                                </div>
                                <div class="form-group w-100 mt-3">
                                    <label class="font-admin">Выберите категорию</label>
                                    <select v-model="search.category" @change="getArticles"
                                            class="form-control form-control-lg w-100 font-admin">
                                        <option disabled>Выберите категорию</option>
                                        <template v-for="page in data">
                                            <template v-if="search.page === page.name"
                                                      v-for="category in page.category">
                                                <option>{{category.name}}</option>
                                            </template>
                                        </template>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Статьи</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>
                                            Название
                                        </th>
                                        <th>
                                            Страница
                                        </th>
                                        <th>
                                            Категория
                                        </th>
                                        <th>
                                            Действия
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(article,index) in articles">
                                        <td>
                                            {{article.title}}
                                        </td>
                                        <td>
                                            {{article.page_name}}
                                        </td>
                                        <td>
                                            {{article.category_name}}
                                        </td>
                                        <td>
                                            <a class="btn btn-success btn-with-icon"
                                               :href="'/article/edit/show/'+article.id"><i
                                                class="mdi mdi-border-color"
                                                style="color:white;"></i></a>
                                            <a class="btn btn-danger btn-with-icon" @click="destroyArticle(article.id)"><i
                                                class="mdi mdi-delete-forever" style="color:white;"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
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
                            href="https://www.bootstrapdash.com/" target="_blank">CPS Company</a>. All rights reserved.</span>
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
        props: ['data'],
        data: function () {
            return {
                articles: {},
                saveSuccess: false,
                search: {
                    page: '',
                    category: ''
                }
            }
        },
        mounted() {
            this.getArticles();
        },
        methods: {
            /**
             * Get all Articles
             */
            getArticles: function () {
                axios({
                    method: 'post',
                    url: '/articles/get',
                    data: {search: this.search}
                }).then((response) => {
                    this.articles = response.data;
                });
            },


            /**
             * Destroy article
             *
             * @param id
             */
            destroyArticle: function (id) {
                axios({
                    method: 'get',
                    url: '/articles/delete/' + id
                }).then((response) => {
                    this.getArticles();
                });
            },


            saveArticle: function (index) {
                axios({
                    method: 'post',
                    url: '/articles/save',
                    data: {article: this.articles[index]}
                }).then((response) => {
                    const self = this;
                    this.saveSuccess = true;

                    this.getArticles();

                    this.intervalid1 = setInterval(function () {
                        self.saveSuccess = false;
                    }, 3000);
                });
            }

        }
    }
</script>

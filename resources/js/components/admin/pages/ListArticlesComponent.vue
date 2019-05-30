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
                                            <a class="btn btn-success btn-with-icon"><i
                                                class="mdi mdi-border-color" data-toggle="modal"
                                                :data-target="'.bd-example-modal-lg-'+article.id"
                                                style="color:white;"></i></a>
                                            <a class="btn btn-danger btn-with-icon" @click="destroyArticle(article.id)"><i
                                                class="mdi mdi-delete-forever" style="color:white;"></i></a>
                                        </td>
                                        <div :class="'modal fade bd-example-modal-lg-'+article.id" tabindex="-1"
                                             role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" style="margin-top: 100px">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title" id="exampleModalLongTitle">
                                                            Редактирование статьи - {{article.title}}</h2>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>

                                                    </div>
                                                    <div class="container">
                                                        <div class="form-group w-100 mt-3">
                                                            <label class="font-admin">Title (для страницы)</label>
                                                            <textarea type="text" v-model="article.title_page" class="form-control font-admin" placeholder="Title (для страницы)"></textarea>
                                                        </div>

                                                        <div class="form-group w-100 mt-3">
                                                            <label class="font-admin">Description (для страницы)</label>
                                                            <textarea type="text" v-model="article.description_page" class="form-control font-admin" placeholder="Description (для страницы)"></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-10">
                                                                <editor v-model="article.text"
                                                                        api-key="f5b040i73ebkt63xkw5q3t2eycahtfyij48m616q4ezjyg4v"
                                                                        plugins="advlist autolink link image lists charmap print preview"
                                                                        custom_colors="true"
                                                                        dialog_type="modal"
                                                                        selector="textarea"
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
                                                                            @click="saveArticle(index)">Сохранить
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Закрыть
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        props: [ 'data' ],
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
                axios( {
                    method: 'post',
                    url: '/articles/get',
                    data: { search: this.search }
                } ).then( ( response ) => {
                    this.articles = response.data;
                } );
            },


            /**
             * Destroy article
             *
             * @param id
             */
            destroyArticle: function ( id ) {
                axios( {
                    method: 'get',
                    url: '/articles/delete/' + id
                } ).then( ( response ) => {
                    this.getArticles();
                } );
            },


            saveArticle: function ( index ) {
                axios( {
                    method: 'post',
                    url: '/articles/save',
                    data: { article: this.articles[ index ] }
                } ).then( ( response ) => {
                    const self = this;
                    this.saveSuccess = true;

                    this.getArticles();

                    this.intervalid1 = setInterval( function () {
                        self.saveSuccess = false;
                    }, 3000 );
                } );
            }

        }
    }
</script>

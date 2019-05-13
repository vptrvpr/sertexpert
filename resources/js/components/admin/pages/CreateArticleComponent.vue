<template>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2 text-center">
                <i class="mdi mdi-calendar-multiple-check"></i>
              </span>
                    Новая статья
                </h3>
            </div>
            <div class="row">
                <div class="col-md-12 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Новая статья</h4>
                            <div class="row">
                                <div class="form-group w-100 mt-3">
                                    <label class="font-admin">Выберите страницу</label>
                                    <select v-model="newArticle.page"
                                            class="form-control form-control-lg w-100 font-admin">
                                        <option disabled>Выберите страницу</option>
                                        <template v-for="page in data">
                                            <option>{{page.name}}</option>
                                        </template>
                                    </select>
                                </div>
                                <div class="form-group w-100 mt-3" v-if="newArticle.page !== 'Новости'">
                                    <label class="font-admin">Выберите категорию</label>
                                    <select v-model="newArticle.category"
                                            class="form-control form-control-lg w-100 font-admin">
                                        <option disabled>Выберите категорию</option>
                                        <template v-for="page in data">
                                            <template v-if="newArticle.page === page.name"
                                                      v-for="category in page.category">
                                                <option>{{category.name}}</option>
                                            </template>
                                        </template>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group w-100 mt-3">
                                        <label class="font-admin">Название</label>
                                        <input type="text" v-model="newArticle.title" class="form-control font-admin" placeholder="Название">
                                    </div>

                                    <div class="form-group w-100 mt-3">
                                        <label class="font-admin">Описание</label>
                                        <textarea type="text" v-model="newArticle.description" class="form-control font-admin" placeholder="Описание"></textarea>
                                    </div>

                                    <div class="input-group col-xs-12">
                                        <div class="file-upload">
                                            <label>Выберите фото</label><br>
                                            <input type="file" id="file" ref="myFilesProduct"
                                                   @change="loadImageArticle()">
                                        </div>
                                    </div>

                                    <div class="form-group w-100 mt-3">
                                        <label class="font-admin"><h6>Текст</h6></label>
                                        <editor v-model="newArticle.text"
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
                                    <div class="form-group w-100 mt-3">
                                        <div v-if="saveSuccess" class="alert alert-success" role="alert">
                                            Статья успешно сохранена!
                                        </div>
                                        <button type="button" class="btn btn-dribbble" @click="createArticle">Сохранить</button>
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
                            href="https://www.cps-company.ru/" target="_blank">CPS Company</a>. All rights reserved.</span>
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
                newArticle: {
                    page: '',
                    category: '',
                    title: '',
                    description: '',
                    text: '',
                    image: ''


                },
                saveSuccess: false,
                intervalid1: null
            }
        },
        mounted() {

        },
        methods: {
            /**
             * Render all visits
             */
            ExampleAxios: function () {
                axios( {
                    method: 'get',
                    url: '/admin',
                } ).then( ( response ) => {

                } );
            },


            createArticle: function () {
                axios( {
                    method: 'post',
                    url: '/articles/create',
                    data: {article: this.newArticle}
                } ).then( ( response ) => {
                    const self = this;
                    this.saveSuccess = true;

                    this.newArticle = {
                        page: '',
                        category: '',
                        title: '',
                        description: '',
                        text: '',
                        image: ''
                    };

                    this.intervalid1 = setInterval(function(){
                        self.saveSuccess = false;
                    }, 3000);
                } );
            },


            /**
             * Load image article
             */
            loadImageArticle: function () {
                let app = this;
                let data = new FormData();
                data.append( 'file', document.getElementById( 'file' ).files[ 0 ] );
                axios.post( '/articles/load-image', data ).then( function ( response ) {
                    app.newArticle.image = response.data;

                } );
            },

        }
    }
</script>

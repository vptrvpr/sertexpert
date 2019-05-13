<template>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-help"></i>
              </span>
                    Вопросы
                </h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Вопросы</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>
                                            Вопрос
                                        </th>
                                        <th>
                                            Действия
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(question,index) in questions">
                                        <td>
                                            {{question.question}}
                                        </td>
                                        <td>
                                            <a class="btn btn-success btn-with-icon"><i
                                                class="mdi mdi-border-color" data-toggle="modal"
                                                :data-target="'.bd-example-modal-lg-'+question.id"
                                                style="color:white;"></i></a>
                                            <a class="btn btn-danger btn-with-icon" @click="destroyQuestion(question.id)"><i
                                                class="mdi mdi-delete-forever" style="color:white;"></i></a>
                                        </td>
                                        <div :class="'modal fade bd-example-modal-lg-'+question.id" tabindex="-1"
                                             role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" style="margin-top: 100px">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title" id="exampleModalLongTitle">
                                                            Редактирование вопроса - "{{question.question}}"</h2>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>

                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-10">
                                                                <div class="form-group w-100 mt-3">
                                                                    <label class="font-admin">Вопрос</label>
                                                                    <input type="text" v-model="question.question" class="form-control font-admin" placeholder="Вопрос">
                                                                </div>
                                                                <label class="font-admin">Ответ</label>
                                                                <editor v-model="question.answer"
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
                                                                            @click="editQuestion(index)">Сохранить
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
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Новый вопрос</h4>
                            <div class="row">
                                <div class="form-group w-100 mt-3">
                                    <label class="font-admin">Вопрос</label>
                                    <input type="text" v-model="newQuestions.question" class="form-control font-admin" placeholder="Вопрос">
                                </div>
                                <div class="form-group w-100 mt-3">
                                    <label class="font-admin"><h6>Ответ</h6></label>
                                    <editor v-model="newQuestions.answer"
                                            api-key="f5b040i73ebkt63xkw5q3t2eycahtfyij48m616q4ezjyg4v"
                                            plugins="advlist autolink link image lists charmap print preview"
                                            custom_colors="true"
                                            dialog_type="modal"
                                            selector="textarea"
                                            toolbar="forecolor backcolor | undo redo | styleselect | bold italic | link image | numlist bullist"
                                            :init="{height: 600,color_map: [
                                                    '1E1A1A','c3a993','Default'
                                                    ]}"
                                    ></editor>
                                </div>
                                <div class="form-group w-100 mt-3">
                                    <div v-if="saveSuccess" class="alert alert-success" role="alert">
                                        Статья успешно сохранена!
                                    </div>
                                    <button type="button" class="btn btn-dribbble" @click="createQuestion">Сохранить</button>
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
                questions: {},
                saveSuccess: false,
                newQuestions: {
                    question: '',
                    answer: ''
                }
            }
        },
        mounted() {
            this.getQuestions();
        },
        methods: {
            /**
             * Get all Articles
             */
            getQuestions: function () {
                axios( {
                    method: 'get',
                    url: '/questions/get',
                } ).then( ( response ) => {
                    this.questions = response.data;
                } );
            },


            /**
             * Destroy article
             *
             * @param id
             */
            destroyQuestion: function ( id ) {
                axios( {
                    method: 'delete',
                    url: '/questions/' + id
                } ).then( ( response ) => {
                    this.getQuestions();
                } );
            },


            editQuestion: function ( index ) {
                axios( {
                    method: 'post',
                    url: '/questions/edit',
                    data: { question: this.questions[ index ] }
                } ).then( ( response ) => {
                    const self = this;
                    this.saveSuccess = true;

                    this.getQuestions();

                    this.intervalid1 = setInterval( function () {
                        self.saveSuccess = false;
                    }, 3000 );
                } );
            },


            createQuestion: function ( index ) {
                axios( {
                    method: 'post',
                    url: '/questions/create',
                    data: { question: this.newQuestions }
                } ).then( ( response ) => {
                    const self = this;
                    this.saveSuccess = true;

                    this.newQuestions = {
                        question: '',
                        answer: ''
                    };
                    this.getQuestions();

                    this.intervalid1 = setInterval( function () {
                        self.saveSuccess = false;
                    }, 3000 );
                } );
            }

        }
    }
</script>

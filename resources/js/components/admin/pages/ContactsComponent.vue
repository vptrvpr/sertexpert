<template>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-help"></i>
              </span>
                    Контакты
                </h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Контакты</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>
                                            Город (для Админ-панели)
                                        </th>
                                        <th>
                                            Действия
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(contact,index) in contacts">
                                        <td>
                                            {{contact.city}}
                                        </td>
                                        <td>
                                            <a class="btn btn-success btn-with-icon"><i
                                                class="mdi mdi-border-color" data-toggle="modal"
                                                :data-target="'.bd-example-modal-lg-'+contact.id"
                                                style="color:white;"></i></a>
                                            <a class="btn btn-danger btn-with-icon" @click="destroyContact(contact.id)"><i
                                                class="mdi mdi-delete-forever" style="color:white;"></i></a>
                                        </td>
                                        <div :class="'modal fade bd-example-modal-lg-'+contact.id" tabindex="-1"
                                             role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" style="margin-top: 100px">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title" id="exampleModalLongTitle">
                                                            Редактирование контакта - "{{contact.city}}"</h2>
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
                                                                    <label class="font-admin">Город</label>
                                                                    <input type="text" v-model="contact.city"
                                                                           class="form-control font-admin"
                                                                           placeholder="Город">
                                                                </div>
                                                                <div class="form-group w-100 mt-3">
                                                                    <label class="font-admin">Яндекс Карта</label>
                                                                    <textarea type="text" v-model="contact.map"
                                                                           class="form-control font-admin"
                                                                              placeholder="Яндекс Карта" rows="4"></textarea>
                                                                </div>
                                                                <div class="form-group w-100 mt-3">
                                                                    <label class="font-admin">Адрес</label>
                                                                    <input type="text" v-model="contact.address" class="form-control font-admin"
                                                                           placeholder="Город">
                                                                </div>
                                                                <div class="form-group w-100 mt-3">
                                                                    <label class="font-admin">Телефон</label>
                                                                    <input type="text" v-model="contact.phone" class="form-control font-admin"
                                                                           placeholder="Город">
                                                                </div>
                                                                <div class="form-group w-100 mt-3">
                                                                    <label class="font-admin">Почта</label>
                                                                    <input type="text" v-model="contact.email" class="form-control font-admin"
                                                                           placeholder="Город">
                                                                </div>
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
                                                                            @click="editContact(index)">Сохранить
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
                            <h4 class="card-title">Новый контакт</h4>
                            <div class="row">
                                <div class="form-group w-100 mt-3">
                                <label class="font-admin">Город (для Админ-панели)</label>
                                <input type="text" v-model="newContact.city" class="form-control font-admin"
                                       placeholder="Город">
                            </div>
                                <div class="form-group w-100 mt-3">
                                    <label class="font-admin">Яндекс Карта</label>
                                    <textarea rows="4" type="text" v-model="newContact.map"
                                              class="form-control font-admin"
                                              placeholder="Яндекс Карта"></textarea>
                                </div>
                                <div class="form-group w-100 mt-3">
                                    <label class="font-admin">Адрес</label>
                                    <input type="text" v-model="newContact.address" class="form-control font-admin"
                                           placeholder="Город">
                                </div>
                                <div class="form-group w-100 mt-3">
                                    <label class="font-admin">Телефон</label>
                                    <input type="text" v-model="newContact.phone" class="form-control font-admin"
                                           placeholder="Город">
                                </div>
                                <div class="form-group w-100 mt-3">
                                    <label class="font-admin">Почта</label>
                                    <input type="text" v-model="newContact.email" class="form-control font-admin"
                                           placeholder="Город">
                                </div>
                                <div class="form-group w-100 mt-3">
                                    <div v-if="saveSuccess" class="alert alert-success" role="alert">
                                        Статья успешно сохранена!
                                    </div>
                                    <button type="button" class="btn btn-dribbble" @click="createContact">Сохранить
                                    </button>
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
                contacts: {},
                saveSuccess: false,
                newContact: {
                    city: '',
                    map: '',
                    address: '',
                    phone: '',
                    email: ''

                }
            }
        },
        mounted() {
            this.getContact();
        },
        methods: {
            /**
             * Get all Contact
             */
            getContact: function () {
                axios( {
                    method: 'get',
                    url: '/contacts/get',
                } ).then( ( response ) => {
                    this.contacts = response.data;
                } );
            },


            /**
             * Destroy Contact
             *
             * @param id
             */
            destroyContact: function ( id ) {
                axios( {
                    method: 'delete',
                    url: '/contacts/' + id
                } ).then( ( response ) => {
                    this.getContact();
                } );
            },


            editContact: function ( index ) {
                axios( {
                    method: 'post',
                    url: '/contacts/edit',
                    data: { contact: this.contacts[ index ] }
                } ).then( ( response ) => {
                    const self = this;
                    this.saveSuccess = true;

                    this.getContact();

                    this.intervalid1 = setInterval( function () {
                        self.saveSuccess = false;
                    }, 3000 );
                } );
            },


            createContact: function ( index ) {
                axios( {
                    method: 'post',
                    url: '/contacts/create',
                    data: { contact: this.newContact }
                } ).then( ( response ) => {
                    const self = this;
                    this.saveSuccess = true;

                    this.newContact = {
                        city: '',
                        map: '',
                        address: '',
                        phone: '',
                        email: ''
                    };
                    this.getContact();

                    this.intervalid1 = setInterval( function () {
                        self.saveSuccess = false;
                    }, 3000 );
                } );
            }

        }
    }
</script>

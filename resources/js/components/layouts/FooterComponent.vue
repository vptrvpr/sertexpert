<template>
    <div class="footer-main">
        <footer>
            <div class="cont">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 copyright">
                        <img v-if="url" class="logo"
                             :src="url+'images/logo-light.png'"
                             alt="">
                        <img v-else class="logo"
                             src="images/logo-light.png"
                             alt="">

                        <p class="ml-1 copyright-p">© 2019 SertExpert</p>

                    </div>
                    <div class="col-md-4 d-sm-none d-md-block">
                        <div class="social">
                            <a href="https://www.facebook.com/sertexpert" target="_blank"><i
                                class="fab fa-facebook"></i> </a>
                            <a href="https://www.instagram.com/sertexpert/" target="_blank"><i
                                class="fab fa-instagram" aria-hidden="true"></i> </a>
                            <a href="https://vk.com/sertexpert" target="_blank"><i class="fab fa-vk"
                                                                                   aria-hidden="true"></i> </a>
                            <a href="https://www.youtube.com/channel/UCRPY3ZSj3bKYaI3rcolOG-Q?guided_help_flow=3"
                               target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i> </a>
                        </div>
                        <div class="develop-cps">
                            <p class="mt-3"><i class="fas fa-code"></i> Разработанно <a href="http://cps-company.ru?visit=5"
                                                                                        target="_blank">&laquo;CPS Company&raquo;</a>
                            </p>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 d-none d-sm-block getintouch">
                        <a href="#">
                            <strong>Контакты</strong><br>
                            <a :href="'mailto:'+contact.email">{{contact.email}}</a><br>
                            <a :href="'tel:'+contact.phone">{{contact.phone}}</a>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
    export default {
        props: ['url'],
        data: function() {
            return{
                contact: ''
            }

        },
        mounted() {
            this.getContactByCity();
        },
        methods: {
            getContactByCity: function (  ) {
                axios({
                    method: 'get',
                    url: '/contacts/by-city'
                }).then( (response) => {
                    this.contact = response.data;
                });

            }
        }

    }
</script>

<template>

    <section class="background bg-deep-sert sert2">
        <div class="container">
            <div class="row position-relative">
                <!-- counter -->
                <div class="col-md-4 ml-auto col-sm-6 bottom-margin">

                </div>
                <div class="col-md-4 ml-auto col-sm-6 bottom-margin text-center mb-3">
                    <span class="counter-title white-text questions-section-title"> Не знаете какой документ нужен именно
                    вам?</span><br>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-4 ml-auto col-sm-6 text-center counter-section wow fadeInUp sm-margin-bottom-ten">
                    <transition name="out-left-notif" mode="out-in">
                        <div v-if="!successSend" key="adasdaaaa">
                            <input id="name" class="txt2" v-model="contacts.name" name="name" placeholder="Имя"
                                   type="name"
                                   value="" required>
                            <input id="phone" class="txt2" v-model="contacts.number" name="phone"
                                   placeholder="Телефон или email" type="phone" value="" required>
                            <button class="forma2button btn" @click="sendSlackNotification"
                                    :disabled="contacts.name !== '' || contacts.number !== '' ? disabled : ''">
                                Узнать сейчас
                            </button>
                            <br>
                            <h6 class="text-white">Данные конфиденциальны
                                и не передаются третьим лицам
                            </h6>
                        </div>
                        <div class="alert alert-light" role="alert" v-else key="adasdaa"
                             style="margin-top: 20px;">
                            <h3 class="notify-success-text-alert">Спасибо,
                                ваша заявка принята!</h3>
                            <h4 class="notify-success-text-alert">Мы свяжемся с вами в ближайшее время.</h4>
                        </div>
                    </transition>
                </div>
            </div>
        </div>

        <!-- end counter -->

    </section>
</template>

<script>
    export default {
        data: function () {
            return {
                contacts: {
                    name: '',
                    number: '',
                },
                successSend: false,
                errorSend: false
            }
        },

        methods: {
            sendSlackNotification: function () {
                yaCounter53728564.reachGoal('order');
                gtag('event', 'send', {'event_category': 'order','event_label': 'form'});
                this.successSend = true;
                axios( {
                    method: 'post',
                    url: '/sender/contact-send',
                    data: { contacts: this.contacts }
                } ).then( ( response ) => {
                    this.successSend = true;
                } );
            },
        }
    }
</script>

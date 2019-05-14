<template>
    <b-row>
        <b-col cols="8">
            <b-card footer-bg-variant="light" footer-border-variant="dark" title="Conversación Activa" class="h-100">
                
                <message-conversation-component 
                    v-for="message in messages"
                    :key ="message.id"
                    :written-by-me = "message.written_by_me">
                    {{ message.content }}
                </message-conversation-component>
               
                
                <div slot="footer">
                    <b-form class="mb-0" 
                    @submit.prevent="postMessage"
                    autocomplete="off">
                        <b-input-group>
                            <b-form-input 
                            class="text-center" 
                            type="text" 
                            placeholder="Escribe un mensaje..."
                            v-model="newMessage">
                            </b-form-input>
                            <b-input-group-append>
                                <b-button type="submit" variant="info">Enviar</b-button>
                            </b-input-group-append>
                        </b-input-group>
                    </b-form>
                </div>
            </b-card>
        </b-col>
        <b-col cols="4">
            <b-img v-bind="mainProps" rounded="circle" alt="Circle image"></b-img>
            <p>Usuario seleccionado</p>
            <hr>
            <b-form-checkbox>
                Desactivar notificaciones
            </b-form-checkbox>
        </b-col>
    </b-row>
</template>

<script>
    export default {
        data() {
            return {
                messages   : [],
                newMessage : '',
                contactId  : 2
            };
        },
        mounted() {
            this.getMessages();
            
        },
        methods: {
            getMessages(){
                axios.get(`/api/messages?contact_id=${this.contactId}`)
                .then((res) => {
                    console.log(res.data)
                    this.messages = res.data;
                });
            },
            postMessage(){
                const params = {
                    to_id  : this.contactId,
                    content: this.newMessage
                };
                axios.post('/api/messages', params)
                .then((res) => {
                    if(res.data.success)
                    {
                        this.newMessage = "";
                        this.getMessages();
                    }
                });
            }
        }
    }
</script>
<template>
<div>
    <b-form class="mx-3 my-3">
        <b-form-input class="text-center" type="text" placeholder="Buscar Contacto...">
        </b-form-input>
    </b-form>

    <b-list-group>
        <contact-component 
        v-for="conversation in conversations"
        :key="conversation.id"
        :conversation="conversation"
        @click.native="selectConversation(conversation)">
        
        </contact-component>
        <!-- <contact-component variant="dark"></contact-component>
        <contact-component variant=""></contact-component>
        <contact-component variant="secondary"></contact-component>-->
    </b-list-group>
</div>
</template>

<script>
    export default {

        data() {
            return {
                conversations: []
            };
        },
        mounted() {
            this.getConversations();
        },
        methods : {
            getConversations(){
                axios.get('/api/conversations')
                .then((response) => {
                    this.conversations = response.data;
                });

            },
            selectConversation(conversation){
                //console.log(conversation);
                this.$emit('conversationSelected', conversation);
            }
        }
    }
</script>
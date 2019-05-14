<template>

    <b-container fluid style="height: calc(100vh - 56px);">
        <b-row  align-h="center" no-gutters>
            <b-col cols="4">            
                <contact-list-component v-on:conversationSelected="changeActiveConversation($event)">
                    </contact-list-component>  
            </b-col>
            <b-col cols="8">
                <active-conversation-component
                    v-if="selectedConversation"
                    :contact-id="selectedConversation.contact_id"
                    :contact-name = "selectedConversation.contact_name">

                </active-conversation-component>
            </b-col>
        </b-row>
    </b-container>
    
</template>

<script>
    export default {
        props: {
    },
        data() {
            return {
                selectedConversation : null
            };
        },
        mounted() {
        },
        methods: {
            changeActiveConversation(conversation){
                //console.log(conversation);
                this.selectedConversation = conversation;   
            }

        }
    }
</script>
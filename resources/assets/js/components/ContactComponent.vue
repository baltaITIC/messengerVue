<template>
    <b-list-group-item :variant="variant">
        <b-row>
            <b-col cols="3">
                <b-img v-bind="mainProps" rounded="circle" alt="Circle image" blank-color="#777">
                </b-img>
            </b-col>
            <b-col cols="6">
                <p class="mb-1">{{ conversation.contact_name }}</p>
                <p class="text-muted small">{{ conversation.last_message }}</p>
            </b-col>
            <b-col cols="3">
                <p class="text-muted small">{{ conversation.last_time }}</p>
            </b-col>
        </b-row>
    </b-list-group-item>
</template>

<script>
    export default {
        props : 
            {
                variant : String,
                conversation : Object
                }
        ,
        data(){
            return {
            };
        },
        mounted() {
        }
    }
</script>
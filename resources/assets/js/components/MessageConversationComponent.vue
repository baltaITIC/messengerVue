<template>
    <b-media :right-align="writtenByMe" vertical-align="center" class="mb-3">
        <b-img slot="aside" blank blank-color="#ccc" width="48" alt="placeholder" rounded="circle"></b-img>
        <b-card>
            <slot></slot> 
        </b-card>
    </b-media>               
</template>

<script>
    export default {
        props: {
            'writtenByMe' : Boolean
    },
        data() {
            return {
                content : 'abc'
            };
        },
        mounted() {
            console.log('Valor de writenByMe ', this.writtenByMe)
        }
    }
</script>
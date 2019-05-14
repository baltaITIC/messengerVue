<template>
<div>
    <b-form class="mx-3 my-3">
        <b-form-input class="text-center" type="text" placeholder="Buscar Contacto...">
        </b-form-input>
    </b-form>

    <b-list-group>
        <contact-component variant="dark"></contact-component>
        <contact-component variant=""></contact-component>
        <contact-component variant="secondary"></contact-component>
    </b-list-group>
</div>
</template>

<script>
    export default {

        data() {
            return {
                name: "Juan Ramos",
                lastMessage: "Tu: Hasta Luego",
                lastTime: "1:37 p.m."
            };
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
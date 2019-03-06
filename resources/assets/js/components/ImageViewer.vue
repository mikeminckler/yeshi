<template>

    <div class="image-viewer" v-if="img" @click="img = ''">
        <div class="close" @click="img = ''">
            <i class="fas fa-times"></i>
        </div>
        <img :src="'/images/gallery/' + img + '.jpg'">
    </div>

</template>

<script>
    export default {

        props: ['image'],

        data() {
            return {
                img: '',
            }
        },

        computed: {
        
        },

        watch: {
            image() {
                this.img = this.image;
            }
        },

        mounted() {
        
        },

        methods: {
        
        },

    }
</script>

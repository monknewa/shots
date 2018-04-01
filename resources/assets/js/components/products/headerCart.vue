<template>
    <div>

    </div>
</template>

<script>
    export default {
        name: "cart",
        data() {
            return {
                cartProducts: []
            }
        },
        mounted() {
            this.fetchCart();

            app.$on("cartUpdate",function () {

            })
        },

        methods: {
            fetchCart() {
                let cart1 = JSON.parse(localStorage.getItem('cart'));
                this.cartProducts = cart1;
            },
           ,

        }
    }
</script>

<style scoped>

</style>
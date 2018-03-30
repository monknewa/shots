<template>
    <div>
        <div class="block-cart">
            <div class="shopping_cart" style="position: relative">
                <a title="View my shopping cart" rel="nofollow" @click="toggleHide">
                    <b>shopping cart</b>
                    <span class="quantity-first"><span
                            class="ajax_cart_quantity unvisible">{{cartProducts.length}}</span></span>

                    <!-- 	<span class="ajax_cart_no_product">(0)</span> -->
                </a>

                <div class="cart_overlay">
                    <div v-if="(cartProducts.length ==0)"><span style="padding:10px">No items in cart</span></div>
                    <div v-else>
                        <table id="cartTable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tr v-for="product in cartProducts">
                                <td>{{product.name}}</td>
                                <td>{{product.price}}</td>
                                <td>{{product.times}}</td>
                                <td>
                                    <button class="btn" title="Remove from cart"
                                            @click="deleteFromCart(product.id,product.name)">x
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
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
        },

        methods: {
            fetchCart() {
                let cart1 = JSON.parse(localStorage.getItem('cart'));
                this.cartProducts = cart1;
            },
            deleteFromCart(productid, productName) {
                let localCart = JSON.parse(localStorage.getItem("cart"));
                let productToDelete = _.find(localCart, {id: productid});

                if (productToDelete === undefined) {
                    alert(productName + " does not exist in cart");
                } else {
                    _.remove(localCart, {id: productid});
                    localStorage.setItem('cart', JSON.stringify(localCart));
                    alert(productToDelete.name + " has been removed from cart");
                    this.fetchCart();
                }
            },
            toggleHide() {
                $(function () {
                    $('.cart_overlay').slideToggle()
                });
            },
        }
    }
</script>

<style scoped>

</style>
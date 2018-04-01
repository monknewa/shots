<template>
    <div>

    </div>

</template>

<script>

    export default {
        name: "products",
        data() {
            return {
                categories: [],
                products: [],
                pagination: {},
                min: '', max: '',
                path: Laravel.path,
                basename: Laravel.basename
            }
        },
        mounted() {
            this.fetchProducts();
        },
        methods: {
            fetchProducts(page_url) {
                page_url = page_url || '/ajax/' + this.path;

                axios.post(page_url)
                    .then(res => {
                        this.products = res.data.data;
                        this.makePagination(res.data);
                    });
            },
            makePagination(links) {
                var pagination = {
                    current_page: links.current_page,
                    last_page: links.last_page,
                    next_page_url: links.next_page_url,
                    prev_page_url: links.prev_page_url
                }
                this.pagination = pagination;
            },
            addToCart(id, name, price) { // using parameters to get the data

                var productToCart = {
                    id: id, name: name, price: price, times: 1
                }; //get item from DOM

                var arrayOfProducts = [productToCart]; // add the item to array <init>

                if (localStorage.getItem('cart') === null) { //if there is no localstorage initialized, we create 'cart' storage
                    localStorage.setItem('cart', JSON.stringify(arrayOfProducts)); // convert to JSON and store in localstorage
                    alert(productToCart.name + ' has been added to cart');
                } else {
                    // if localStorage exists
                    var localProduct = JSON.parse(localStorage.getItem('cart'));

                    if (this.checkExists(productToCart)) { // checking  if items exists in the localstorage
                        //if exists  we  update its times attribute by +1
                        for (var x in localProduct) {
                            if (localProduct[x].id === productToCart.id) {
                                localProduct[x].times += 1;
                            }
                        }
                        localStorage.setItem('cart', JSON.stringify(localProduct)); // and set the data to the localStorage

                        alert(productToCart.name + ' \'s quantity has been updated');
                    } else {
                        // if the value doesnot exist we simply add it to the localStorage
                        localProduct.push(productToCart);
                        localStorage.setItem('cart', JSON.stringify(localProduct));

                        alert(productToCart.name + ' has been added to cart');
                    }
                }


            },
            checkExists(product) { // checking if selected item exists in the  localStorage
                var localcart = JSON.parse(localStorage.getItem('cart'));
                for (var x in localcart) {
                    if (localcart[x].id === product.id)
                        return true
                }
            }
        }
    }
</script>

<style scoped>

</style>
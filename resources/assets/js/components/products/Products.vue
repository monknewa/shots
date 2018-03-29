<template>
    <div>
        <h1 class="page-heading product-listing"><span class="cat-name">{{basename}}&nbsp;</span>
        </h1>

        <!-- Products list -->
        <ul class="product_list grid row">

            <li v-for="product in products" class=" ajax_block_product  col-xs-12   col-sm-6    col-md-4">
                <div class="product-container">
                    <div class="left-block">
                        <div class="product-image-container">
                            <div class="products-inner">
                                <a class="product_img_link"
                                   :href="`/product/${product.id}`"
                                   title="Faded Short Sleeves T-shirt" itemprop="url">
                                    <img class="replace-2x img-responsive"
                                         :src="product.image"
                                         :alt="product.name"
                                         :title="product.name"
                                         width="400" height="519" itemprop="image">
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="right-block">
                        <div class="product-contents">
                            <h5 itemprop="name" class="product-name">
                                <a class="product-name"
                                   :href="`/product/${product.id}`">
                                    {{product.name}}
                                </a>
                            </h5>
                            <p class="product-desc" itemprop="description">
                                {{product.description}}
                            </p>
                            <div class="price-box">
								<span class="price product-price">
									<i class="fa fa-rupee"></i>	{{product.price}}</span>
                            </div>
                            <div class="actions">
                                <div class="actions-inner">

                                    <ul class="add-to-links">
                                        <li class="cart1">
                                            <a class="button ajax_add_to_cart_button btn btn-default"
                                               :href="'/product/'+ product.id"
                                                title="Add to cart" data-id-product="1">
                                                <span>Add to cart</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div><!-- .product-container> -->
            </li>

        </ul>

        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li v-bind:class="[{disabled: ! pagination.prev_page_url}]" class="page-item ">
                    <a class="page-link"
                       href="#"
                       @click="fetchProducts(pagination.prev_page_url)"
                       aria-label="Previous">Previous </a>
                </li>

                <li class="page-item disabled "><a href="#" class="page-link text-dark"
                                                   style="background: #f3f3f3">Page {{pagination.current_page}}
                    of {{pagination.last_page}}</a></li>

                <li v-bind:class="[{disabled: ! pagination.next_page_url}]" class="page-item">
                    <a class="page-link" href="#"
                       @click="fetchProducts(pagination.next_page_url)"
                       aria-label="Next">Next </a></li>
            </ul>
        </nav>

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
                path:Laravel.path,
                basename: Laravel.basename
            }
        },
        created() {
            this.fetchProducts();
        },
        methods: {

            fetchProducts(page_url) {
                page_url = page_url || '/ajax/'+this.path;

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

        }
    }
</script>

<style scoped>

</style>
<template>
    <ul id="ul_layered_category_0" class="col-lg-12 layered_filter_ul">
        <li v-for="category in categories" class="nomargin hiddable col-lg-12">
            <div class="checker" id="uniform-layered_category_13"><span><input
                    type="checkbox" class="checkbox" name="layered_category_13"
                    id="layered_category_13" value="13"></span></div>
            <label for="layered_category_13">
                <a :href="'/products/'+ category.type.toLowerCase()"
                   data-rel="nofollow">{{category.type}}</a>
            </label>
        </li>

    </ul>
</template>

<script>
    export default {
        name: "category",
        data() {
            return {
                categories: [],
            }
        },
        created() {
            this.fetchCategories();

        },
        methods: {
            fetchCategories() {
                axios.post("/ajax/category").then(res => {
                    this.categories = res.data;
                }).catch(err => {
                    console.log(err);
                });

            },
        }
    }
</script>

<style scoped>

</style>
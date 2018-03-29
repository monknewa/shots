<template>
    <div>
        <div id="ul_layered_price_0" class="col-lg-12 layered_filter_ul">
            <label>
                Range:
            </label>
            <span id="layered_price_range">£<span id="uiMin"></span>- £ <span  id="uiMax"></span></span>
            <div id="uislider"></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "slider",
        mounted() {
            var slider = document.getElementById("uislider");
            noUiSlider.create(slider, {
                start: [20, 80],
                connect: true,
                range: {
                    'min': 0,
                    'max': 100
                },
                step:1
            });
        },
    }
</script>

<style scoped>

</style>
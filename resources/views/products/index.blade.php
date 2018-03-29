@extends("layouts.master")

@section("extra")
    <script>
        window.Laravel.path = "{{request()->path()}}";
        window.Laravel.basename = "{{basename(request()->path())}}";
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/11.0.3/nouislider.css">


    <div class="pos_breadcrumb" style="background: #f3f3f3">
        <div class="container">

            <!-- Breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="http://demo.posthemes.com/pos_fobe/" title="Return to Home"><i
                            class="icon-home"></i></a>
                <span class="navigation-pipe">&gt;</span>
                @if(count($breadCrumbs) === 1)
                    <a href="/{{$breadCrumbs[0]}}">{{$breadCrumbs[0]}}</a>
                @else
                    <a href="/{{$breadCrumbs[0]}}">{{$breadCrumbs[0]}}</a> <span class="navigation-pipe">&gt;</span>
                    <a href="/{{$breadCrumbs[0]}}/{{$breadCrumbs[1]}}">{{$breadCrumbs[1]}}</a>
                @endif
            </div>
            <!-- /Breadcrumb -->
        </div>
    </div>

    <div class="container" id="columns">
        <div id="app">
            <div class="row">
                <div id="left_column" class="column col-xs-12 col-sm-3">
                    <div id="layered_block_left" class="block">
                        <p class="title_block">Catalog</p>
                        <div class="block_content" style="">
                            <form action="#" id="layered_form">
                                <div>
                                    <div class="layered_filter">
                                        <div class="layered_subtitle_heading" style="margin-bottom: 20px">
                                            <h3 class="layered_subtitle">Categories</h3>
                                        </div>
                                        <categories></categories>
                                    </div>
                                    <div class="layered_price" style="">
                                        <div class="layered_subtitle_heading">
                                            <span class="layered_subtitle">Price</span>
                                        </div>
                                        <slider></slider>
                                    </div>

                                </div>
                                <input type="hidden" name="id_category_layered" value="12">
                            </form>
                        </div>
                        <div id="layered_ajax_loader" style="display: none;">
                            <p>
                                <img src="http://demo.posthemes.com/pos_fobe/img/loader.gif" alt="">
                                <br>Loading...
                            </p>
                        </div>
                    </div>

                </div>
                <div id="center_column" class="center_column col-xs-12 col-sm-9">
                    <products></products>
                </div><!-- #center_column -->


            </div>
        </div>
    </div>


    <script src="{{asset("js/app.js")}}"></script>
    <script>
        var slider = document.getElementById("uislider");

        slider.noUiSlider.on('update', function () {
            var data = this.get();
            document.getElementById("uiMin").innerHTML = data[0];
            document.getElementById("uiMax").innerHTML = data[1];
        });
    </script>
@endsection

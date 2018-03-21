@extends('dash.partials.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">

                <img src="/{{$hl }}" alt="No image" class="img-responsive"
                     style="width: 100%;max-height:400px;">

                <form action="/dash/changeimage/hl" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="file" class="form-control"
                               onchange="document.getElementById('previewhl').src= window.URL.createObjectURL(this.files[0]);
                               document.getElementById('previewhl').style.display = 'block'"
                               name="hl">
                        <img height="100" width="100" style="display: none" alt="" id="previewhl">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Change left image</button>
                    </div>
                    <div>
                        @if($errors->has('hl'))
                            @include('dash.partials.errors')
                        @endif
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <img src="/{{$hr}}" alt="No image" class="img-responsive" style="width: 100%;max-height:400px;">
                <form action="/dash/changeimage/hr" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="file" class="form-control" name="hr"
                               onchange="document.getElementById('previewhr').src= window.URL.createObjectURL(this.files[0]);
                               document.getElementById('previewhr').style.display = 'block'">
                        <div>
                            <img alt="" id="previewhr" style="display: none" height="100" width="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info">Change right image</button>
                    </div>
                    <div>
                        @if($errors->has('hr'))
                            @include('dash.partials.errors')
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


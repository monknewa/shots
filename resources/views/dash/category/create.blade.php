@extends('dash.partials.app')

@section('content')
    <?php $category_name = isset($category) ? $category->alias : "" ?>

    <section>
        <div class="container">
            <header>
                <h3 class="display"><strong> {{isset($category)?"Edit":"Add "}} Category</strong></h3>
                <div>
                    <a href="/dash/category"><h4 class="text-primary"><i class="fa fa-backward"></i> Back</h4></a>
                </div>
            </header>
            <div class="row">

                <div class="col-md-6 col-sm-12 col-lg-6">
                    <form method="POST" action="{{isset($category)?"/dash/category/$category->id":"/dash/category"}}">
                        {{csrf_field()}}
                        @if(isset($category))
                            {{method_field('put')}}
                        @endif
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" name="category_name" id="category_name" value="{{$category_name}}"
                                   class="form-control" required maxlength="255">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">{{isset($category)?"Edit":"Add"}} Category</button>
                        </div>

                        <div class="form-group">
                            @include('dash.partials.errors')
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </section>
@endsection


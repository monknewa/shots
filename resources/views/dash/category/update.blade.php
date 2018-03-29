@extends('dash.partials.app')

@section('content')

    <section>
        <div class="container">
            <header>
                <h3 class="display"><strong> Edit Category</strong></h3>
                <div>
                    <a href="/dash/category"><h4 class="text-primary"><i class="fa fa-backward"></i> Back</h4></a>
                </div>
            </header>
            <div class="row">

                <div class="col-md-6 col-sm-12 col-lg-6">
                    <form method="POST" action="/dash/category/{{$category->id}}/edit" onsubmit="return confirm('Do you want to update?')">
                        {{csrf_field()}}
                        @if(isset($category))
                            {{method_field('put')}}
                        @endif
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" name="type" id="type" value="{{$category->type}}"
                                   class="form-control" required maxlength="255">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Edit Category</button>
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


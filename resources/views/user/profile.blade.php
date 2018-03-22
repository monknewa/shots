@extends("layouts.master")

@section("content")

    <div class="container">
        <div id="" class="center_column col-xs-12 col-sm-12">

            <h1 class="page-heading"></h1>
            <!---->
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <img src="https://placeimg.com/640/480/any" alt="No images">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <form action="/user/{{encrypt(auth()->id())}}" method="post"
                          id="create-" class="box">
                        {{csrf_field()}}
                        {{method_field('put')}}

                        <h3 class="page-subheading">Profile Update</h3>
                        <div class="form_content clearfix">
                            <p>Please enter your email address to create an account.</p>

                            @include("auth.updateprofile")
                            <div class="submit">
                                <input type="hidden" class="hidden" name="back" value="my-account">
                                <button class="btn btn-default button button-medium exclusive" type="submit"
                                        id="SubmitCreate" name="SubmitCreate">
							<span>
								<i class="icon-user left"></i>
								Edit Account
							</span>
                                </button>
                            </div>
                            <div class="form-group">
                                @if(! $errors->has('login'))
                                    @include("layouts.errors")
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if(session()->has('successProfileUpdate') )
        <script>alert('Profile updated')</script>
        <?php session()->pull("successProfileUpdate")?>
    @endif
@endsection
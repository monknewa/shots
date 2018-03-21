@extends('layouts.master')

@section('content')
    <div id="columns" class="container">

        <div id="slider_row" class="row">
        </div>
        <div class="row">
            <div id="" class="center_column col-xs-12 col-sm-12">

                <h1 class="page-heading">Authentication</h1>
                <!---->
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <form action="{{route("register")}}" method="post"
                              id="create-" class="box">
                            {{csrf_field()}}
                            <h3 class="page-subheading">Create an account</h3>
                            <div class="form_content clearfix">
                                <p>Please enter your email address to create an account.</p>

                                @include("auth.register")
                                <div class="submit">
                                    <input type="hidden" class="hidden" name="back" value="my-account">
                                    <button class="btn btn-default button button-medium exclusive" type="submit"
                                            id="SubmitCreate" name="SubmitCreate">
							<span>
								<i class="icon-user left"></i>
								Create an account
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
                    <div class="col-xs-12 col-sm-6">
                        <form action="{{route("login")}}" method="post" id="login_form" class="box">
                            {{csrf_field()}}
                            <h3 class="page-subheading">Already registered?</h3>
                            <div class="form_content clearfix">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input class="  form-control"
                                           type="email" id="email" name="login_email" value="{{old("login_email")}}">
                                </div>
                                <div class="form-group">
                                    <label for="passwd">Password</label>
                                    <input class="  form-control" type="password"
                                           name="login_password" value="">
                                </div>
                                <p class="lost_password form-group"><a href="password-recovery.html"
                                                                       title="Recover your forgotten password"
                                                                       rel="nofollow">Forgot your password?</a></p>
                                <p class="submit">
                                    <input type="hidden" class="hidden" name="back" value="my-account">
                                    <button type="submit" id="SubmitLogin" name="SubmitLogin"
                                            class="button btn btn-default button-medium">
							<span>
								<i class="icon-lock left"></i>
								Sign in
							</span>
                                    </button>
                                </p>
                                <div class="form-group">
                                    @if($errors->has('login'))
                                        @include("layouts.errors")
                                    @endif
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- #center_column -->
        </div><!-- .row -->

    </div>
@endsection

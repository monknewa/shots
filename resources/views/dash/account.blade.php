@extends('dash.partials.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">

                <h3>Change Email</h3>
                <form action="/dash/account/changeEmail" method="post">
                    {{csrf_field()}}
                    {{method_field('put')}}

                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email"
                               class="form-control" name="email" id="email" value="{{$email}}" maxlength="255">
                    </div>
                    <div class="form-group">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modelId"
                                onclick="$('#newemail').html($('#email').val())">
                            Change Email Address
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modelTitleId">Change your current email</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Do you want to change your email from <span class="text-info">{{$email}}</span>
                                        to <span class="text-success" id="newemail"></span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Change Email Address
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        @if($errors->has('email'))
                            @include('dash.partials.errors')
                        @endif
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">

                <form action="/dash/account/changepwd" method="post">
                    {{csrf_field()}}
                    {{method_field('put')}}

                    <div class="form-group">
                        <label for=""> Change Password</label>
                        <input type="password" name="pwd" class="form-control" required maxlength="255" minlength="5">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" name="pwd_confirmation" class="form-control" required minlength="5"
                               maxlength="255">
                    </div>

                    <div class="form-group">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning "
                                onclick="$('#newpwd').html($('[name=pwd]').val())"
                                data-toggle="modal" data-target="#changePwd">
                            Change Password
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="changePwd" tabindex="-1" role="dialog"
                             aria-labelledby="modelTitleId"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modelTitleId">Change your password</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Do you want to change your password to <span id="newpwd"></span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        @if($errors->has('pwd'))
                            @include('dash.partials.errors')
                        @endif
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection


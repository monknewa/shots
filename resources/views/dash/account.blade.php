@extends('dash.partials.app')

@section('content')

    @if(session()->has('successAdmin') )
        <script>alert('Profile updated')</script>
        <?php session()->forget("successAdmin")?>
    @endif

    <div class="container">
        <form action="/dash/account" method="post" onsubmit=" return confirm('Do you want to change the details')">
            {{csrf_field()}}
            {{method_field('put')}}
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6">

                    <h3>Change Email</h3>

                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email"
                               class="form-control" name="email" id="email" value="{{auth()->user()->email}}"
                               maxlength="255" required>
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text"
                               class="form-control" name="name" id="name" value="{{auth()->user()->name}}"
                               maxlength="255" required>
                    </div>
                    <div class="form-group">
                        <label for=""> Address</label>
                        <input type="text"
                               class="form-control" name="address" id="address" value="{{auth()->user()->address}}"
                               maxlength="255" required>
                    </div>
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="number"
                               class="form-control" name="phoneNumber" id="phoneNumber"
                               value="{{auth()->user()->phoneNumber}}" maxlength="255" required>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">

                    <div class="form-group">
                        <label for=""> Change Password</label>
                        <input type="password" name="password" class="form-control" required maxlength="255"
                               minlength="5">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required minlength="5"
                               maxlength="255">
                    </div>

                    <div class="form-group">
                        <!-- Button trigger modal -->
                        <button class="btn btn-warning " >
                            Change Password
                        </button>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            @include('dash.partials.errors')
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection


@if(session()->has('successProfileUpdate') )
    <script>alert('Profile updated')</script>
    <?php session()->forget("successProfileUpdate")?>
@endif

<div class="form-group">
    <label for="email_create">Email address</label>
    <input type="email" class="form-control"
           name="email" value="{{$user->email }}" disabled>
</div>
<h3 class="page-subheading">Your personal information</h3>

<div class=" form-group">
    <label for="customer_firstname">Name <sup>*</sup></label>
    <input type="text" class="  form-control" name="name" value="{{$user->name }}" required>
</div>
<div class=" form-group">
    <label for="customer_firstname">Address <sup>*</sup></label>
    <input type="text" class="  form-control" name="address" value="{{isset($user)?$user->address:old("address")}}"
           required>
</div>
<div class=" form-group">
    <label for="customer_firstname">Phone Number<sup>*</sup></label>
    <input type="number" class="form-control" name="phoneNumber"
           value="{{isset($user)?$user->phoneNumber:old("phoneNumber")}}" required>
</div>


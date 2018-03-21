<div class="form-group">
    <label for="email_create">Email address</label>
    <input type="email" class="form-control"
           name="email" value="{{old('email')}}" required>
</div>
<h3 class="page-subheading">Your personal information</h3>

<div class=" form-group">
    <label for="customer_firstname">Name <sup>*</sup></label>
    <input type="text" class="  form-control" name="name" value="{{old("name")}}" required>
</div>
<div class=" form-group">
    <label for="customer_firstname">Address <sup>*</sup></label>
    <input type="text" class="  form-control" name="address" value="{{old("address")}}" required>
</div>
<div class=" form-group">
    <label for="customer_firstname">Phone Number<sup>*</sup></label>
    <input type="number" class="  form-control" name="phoneNumber" value="{{old("phoneNumber")}}" required>
</div>

<div class=" password form-group">
    <label for="passwd">Password <sup>*</sup></label>
    <input type="password" class="form-control" name="password" required>
</div>
<div class="password form-group">
    <label for="passwd">Confirm Password <sup>*</sup></label>
    <input type="password" class="form-control" name="password_confirmation" required>
</div>
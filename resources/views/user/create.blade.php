<form action="/profile/user/{{auth()->user()->id}}" method="post">

    {{csrf_field()}}
    {{method_field("put")}}

    <input type="text" name="address" required>
    <input type="number" name="phoneNumber" required>

    <button>Edit User</button>

</form>
@extends('dash.partials.app')

@section('content')

    @if(session()->has('successAdmin') )
        <script>alert('Profile updated')</script>
        <?php session()->forget("successAdmin")?>
    @endif

    <div class="container">
        <section>
            <h2 class="display-4" style="margin-bottom: 20px;">Orders</h2>

            <div class="row">
                <div class=" col-xs-12 col-md-12 col-lg-12 col-sm-12">
                    <table class="table table-responsive " id="orders1">

                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Order id</th>
                            <th>Product Name</th>
                            <th>User Name</th>
                            <th>Quantity</th>
                            <th>Address</th>
                            <th>Total</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($orderDetails as $order )
                            <tr>

                                <td>{{$order->created_at}}</td>
                                <td>{{$order->id}}</td>
                                <td>{{$order->product_name}}</td>
                                <td>{{$order->user_name}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->total}}</td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>

        </section>

    </div>
@endsection

@section('scripts')

    <script>
        $("#orders1").DataTable({info: false});
    </script>
@endsection


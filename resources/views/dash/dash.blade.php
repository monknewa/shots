@extends('dash.partials.app')

@section('content')
    <section class="dashboard-counts ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-user"></i></div>
                        <div class="name"><strong class="text-uppercase">Users</strong><span> &nbsp;</span>
                            <div class="count-number">{{$users}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-padnote"></i></div>
                        <div class="name"><strong class="text-uppercase"> Orders </strong><span>&nbsp;</span>
                            <div class="count-number">{{$orders}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-check"></i></div>
                        <div class="name"><strong class="text-uppercase">Products</strong><span>&nbsp;</span>
                            <div class="count-number">{{$products}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-bill"></i></div>
                        <div class="name"><strong class="text-uppercase">Stock</strong><span>&nbsp;</span>
                            <div class="count-number">{{$stock}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-list"></i></div>
                        <div class="name"><strong class="text-uppercase">Total Sales</strong> <span><i
                                        class="fa fa-rupee"></i></span>
                            <div class="count-number"> {{$sales}}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <hr>

    <section>
        <h2 class="display-4" style="margin-bottom: 20px;">Orders</h2>

        <div class="row">
            <div class=" col-xs-12 col-md-12 col-lg-12 col-sm-12">
                <table class="table table-responsive " id="orders">

                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Order id</th>
                        <th>User ID</th>
                        <th>Address</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($orderDetails as $order )
                        <tr>
                            <td>{{$order->created_at}}</td>
                            <td>{{$order->id}}</td>
                            <td>{{$order->user_name}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->total}}</td>
                            <td>
                                <select name="" id="status" onchange="changeStatus({{$order->id}})">
                                    <option value="pending" {{ ($order->status == 'pending' )?'selected':'' }} >
                                        Pending
                                    </option>
                                    <option value="approved" {{ ($order->status == 'approved' )?'selected':'' }} >
                                        Approved
                                    </option>
                                    <option value="canceled" {{ ($order->status == 'canceled' )?'selected':'' }} >
                                        Canceled
                                    </option>
                                </select>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </section>

@endsection

@section('scripts')
    <script>
        $("#orders").DataTable({info: false});

        function changeStatus(orderid) {
            var val = document.querySelector("#status").value;

            console.log(val);
            console.log(orderid);
            $.post("/dash/order/status",
                {
                    orderid: orderid,
                    status: val
                }, function (success) {
                   alert("Status changed to " + success);
                });

        }

    </script>
@endsection

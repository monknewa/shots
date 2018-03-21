@extends('dash.partials.app')

@section('content')

    <div class="row">
        <div class="col-12 col-md-12 col-sm-12">
            <h3>Inquiries</h3>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                Click Me !!
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modelTitleId">Clear Deleted Items</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            You can delete the inquiries for all the items that have been removed,
                            Keep in mind you may lose the records for the deleted items in the process,
                            Proceed with care!!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <table class="table table-responsive" id="inquiry">
                <thead>
                <tr>
                    <th>S no</th>
                    <th>Inquired On</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Item Name</th>
                </tr>
                </thead>
                <?php $count = 1;?>

                @foreach($inquiries as $inquiry)
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$inquiry->created_at}}</td>
                        <td>
                            <span id="inquriy-email">{{$inquiry->email}}</span>
                        </td>
                        <td>{{$inquiry->phone_no}}</td>
                        <td>
                            <span id="inquiry-item-name">{{\App\Http\Controllers\InquiryController::getItem($inquiry->item_id) ->name}}</span>
                        </td>

                    </tr>
                    <?php $count++ ?>
                @endforeach
            </table>
        </div>
    </div>



@endsection

@section('scripts')
    <script>
        $("#inquiry").DataTable({info: false});
    </script>
@endsection

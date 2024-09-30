@extends('backend.layouts.master')

@section('main-content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-md-12">
                @include('backend.layouts.notification')
            </div>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">Return Requests</h6>
            {{--            <a href="{{route('return.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add Order"><i class="fas fa-plus"></i> Add Order</a>--}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if(count($returns)>0)
                    <table class="table table-bordered" id="order-dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Order Number</th>
                            <th>Customer</th>
                            <th>Total Amount</th>
                            <th>Payment Status</th>
                            <th>Order Status</th>
                            <th>Order Date</th>
                            <th>Return Request</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>S.N.</th>
                            <th>Order Number</th>
                            <th>Customer</th>
                            <th>Total Amount</th>
                            <th>Payment Status</th>
                            <th>Order Status</th>
                            <th>Order Date</th>
                            <th>Return Request</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($returns as $return)
                            <tr>
                                <td>{{$return->id}}</td>
                                <td>{{$return->order->order_number}}</td>
                                <td>{{$return->order->user->name()}}</td>
                                <td>Rs. {{$return->order->total_amount}} /-</td>
                                <td>{{ $return->order->payment_status == 'paid' ? 'Paid' : 'Unpaid' }}</td>
                                <td>{{$return->status}}</td>
                                <td>{{$return->order->created_at->format('d M Y')}}</td>
                                <td>{{$return->created_at->format('d M Y')}}</td>
                                <td>
                                    <form action="{{route('return.status', ['return' => $return->id])}}" method="post">
                                        @csrf
                                        <div class="form-group d-flex align-items-center">
                                            <select name="status" class="form-control form-control-sm mr-2" style="width: 150px;">
                                                <option value="">Select status</option>
                                                <option value="pending" {{$return->status == 'pending' ? 'selected' : ''}}>Pending</option>
                                                <option value="approved" {{$return->status == 'approved' ? 'selected' : ''}}>Approved</option>
                                                <option value="rejected" {{$return->status == 'rejected' ? 'selected' : ''}}>Rejected</option>
                                                <option value="processed" {{$return->status == 'processed' ? 'selected' : ''}}>Processed</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary btn-sm d-flex align-items-center justify-content-center" style="height:35px; width:35px; border-radius:50%;" data-toggle="tooltip" data-placement="bottom" title="Submit">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--                    <span style="float:right">{{$returns->links()}}</span>--}}
                @else
                    <h6 class="text-center">No Orders found!!! Please create Order</h6>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <style>
        div.dataTables_wrapper div.dataTables_paginate{
            display: none;
        }
        .zoom {
            transition: transform .2s; /* Animation */
        }

        .zoom:hover {
            transform: scale(5);
        }
    </style>
@endpush

@push('scripts')

    <!-- Page level plugins -->
    <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
    <script>

        $('#return-dataTable').DataTable( {
            "scrollX": false,
            "columnDefs":[
                {
                    "returnable":false,
                    "targets":[7]
                }
            ]
        } );

        // Sweet alert

        function deleteData(id){

        }
    </script>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.dltBtn').click(function(e){
                var form=$(this).closest('form');
                var dataID=$(this).data('id');
                e.preventDefault();
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this return data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        } else {
                            swal("Your return data is safe!");
                        }
                    });
            })
        })
    </script>
@endpush

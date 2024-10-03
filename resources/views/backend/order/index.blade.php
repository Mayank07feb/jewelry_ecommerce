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
            <h6 class="m-0 font-weight-bold text-primary float-left">Order Lists</h6>
{{--            <a href="{{route('order.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add Order"><i class="fas fa-plus"></i> Add Order</a>--}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if(count($orders)>0)
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
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->order_number}}</td>
                                <td>{{$order->user->name()}}</td>
                                <td>Rs. {{$order->total_amount}} /-</td>
                                <td>{{ $order->payment_status == 'paid' ? 'Paid' : 'Unpaid' }}</td>
                                <td>{{$order->status}}</td>
                                <td>{{$order->created_at->format('d M Y')}}</td>
                                <td>
                                    <form action="{{route('orders.status', ['order' => $order->id])}}" method="post">
                                        @csrf
                                        <div class="form-group d-flex align-items-center">
                                            <select name="status" class="form-control form-control-sm mr-2" style="width: 150px;">
                                                <option value="">Select status</option>
                                                <option value="new" {{$order->status == 'new' ? 'selected' : ''}}>New</option>
                                                <option value="process" {{$order->status == 'process' ? 'selected' : ''}}>Process</option>
                                                <option value="delivered" {{$order->status == 'delivered' ? 'selected' : ''}}>Delivered</option>
                                                <option value="cancel" {{$order->status == 'cancel' ? 'selected' : ''}}>Cancel</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary btn-sm d-flex align-items-center justify-content-center" style="height:35px; width:35px; border-radius:50%;" data-toggle="tooltip" data-placement="bottom" title="Submit">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <a href="{{route('orders.items', ['order' => $order->id])}}" class="btn btn-primary">Order Items</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--                    <span style="float:right">{{$orders->links()}}</span>--}}
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

        $('#order-dataTable').DataTable( {
            "scrollX": false,
            "columnDefs":[
                {
                    "orderable":false,
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
                    text: "Once deleted, you will not be able to recover this order data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        } else {
                            swal("Your order data is safe!");
                        }
                    });
            })
        })
    </script>
@endpush

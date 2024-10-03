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
            <h6 class="m-0 font-weight-bold text-primary float-left">Order Items {{$order->order_number}}</h6>
            {{--            <a href="{{route('order.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add Order"><i class="fas fa-plus"></i> Add Order</a>--}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if(count($items)>0)
                    <table class="table table-bordered" id="order-dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>S.N.</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->product->title .' '. $item->variation->carat.'K'}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>Rs. {{$item->variation->price * $item->quantity}} /-</td>


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

    </script>

@endpush

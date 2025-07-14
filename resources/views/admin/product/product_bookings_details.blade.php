@extends('admin.layouts.layout')
@section('content')
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <h5 class="text-dark font-weight-bold my-1 mr-5">
                            View {{ Config('constants.PRODUCT_BOOKING.PRODUCT_BOOKING_TITLE') }}

                        </h5>
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}" class="text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route($model . '.bookings') }}" class="text-muted">
                                    {{ Config('constants.PRODUCT_BOOKING.PRODUCT_BOOKING_TITLES') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @include('admin.elements.quick_links')
            </div>
        </div>
        <div class="d-flex flex-column-fluid">
            <div class=" container ">
                <div class="card card-custom gutter-b">
                    <div class="card-header card-header-tabs-line">
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active hide_me" data-toggle="tab"
                                        href="#kt_apps_contacts_view_tab_1">
                                        <span class="nav-text">
                                            {{ Config('constants.PRODUCT_BOOKING.PRODUCT_BOOKING_TITLE') }} Information
                                        </span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link hide_me" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
                                        <span class="nav-text">
                                            Product Items
                                        </span>
                                    </a>
                                </li>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div class="tab-content px-10">
                            <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Booking Number:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder">{{ $modelDetails->booking_number ?? '' }}</span>
                                    </div>
                                </div>

                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Booking Amount:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">₹
                                            {{ $modelDetails->booking_amount ?? '' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">User Name:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder">{{ $modelDetails->name ?? '' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Email Address:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder">{{ $modelDetails->email ?? '' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Phone Number:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">+91
                                            {{ $modelDetails->phone_number ?? '' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">City:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder">{{ $modelDetails->city ?? '' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">State:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder">{{ $modelDetails->state ?? '' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Country:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder">{{ $modelDetails->country ?? '' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Zip Code:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder">{{ $modelDetails->zip_code ?? '' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Address:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder">{{ $modelDetails->address ?? '' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Delivery Date & Time:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder">{{ date('j M Y g:i A', strtotime($modelDetails->datetime)) }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Booking Date:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder">{{ $modelDetails->created_at ?? '' }}</span>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                                <div class="dataTables_wrapper ">
                                    <div class="table-responsive">
                                        <table
                                            class="table dataTable table-head-custom table-head-bg table-borderless table-vertical-center"
                                            id="taskTable">
                                            <thead>
                                                <tr class="text-uppercase">

                                                    <th class="">
                                                        Product Image
                                                    </th>

                                                    <th class="">
                                                        Product Name
                                                    </th>

                                                    <th class="">
                                                        Product Category
                                                    </th>

                                                    <th class="">
                                                        Price   
                                                    </th>

                                                    <th class="">
                                                      Quantity
                                                    </th>

                                                    <th class="">
                                                      Total Price
                                                    </th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $results = json_decode($modelDetails->booking_items, true); @endphp
                                                @if (isset($results['product_id']) && !empty($results['product_id']))
                                                        @php
                                                          $product = productDetails($results['product_id']);
                                                        @endphp
                                                    <tr>
                                                        <td>
                                                            <div class="text-dark-75 mb-1 font-size-lg">
                                                                <a class="fancybox-buttons" data-fancybox-group="button" href="{{$product['image']??''}}">
                                                                    <img height="50" width="50" src="{{$product['image']??''}}" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-dark-75 mb-1 font-size-lg">
                                                                {{$product['name']??''}}
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class="text-dark-75 mb-1 font-size-lg">
                                                                {{$product->product_category['name']??''}}
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <div class="text-dark-75 mb-1 font-size-lg">
                                                                ₹ {{ $results['price'] ?? '' }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-dark-75 mb-1 font-size-lg">
                                                                {{$results['qty']??''}}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-dark-75 mb-1 font-size-lg">
                                                                ₹ {{ $results['total_price'] ?? '' }}
                                                            </div>
                                                        </td> 
                                                    </tr>
                                                    @else
                                                    @if (!empty($results) && count($results) > 0)
                                                    @foreach ($results as $data)
                                                            @php
                                                                $product = productDetails($data['product_id']);
                                                            @endphp

                                                            <tr>
                                                                <td>
                                                                    <div class="text-dark-75 mb-1 font-size-lg">
                                                                        <a class="fancybox-buttons" data-fancybox-group="button" href="{{$product['image']??''}}">
                                                                            <img height="50" width="50" src="{{$product['image']??''}}" />
                                                                        </a>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-dark-75 mb-1 font-size-lg">
                                                                        {{$product['name']??''}}
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="text-dark-75 mb-1 font-size-lg">
                                                                        {{$product->product_category['name']??''}}
                                                                    </div>
                                                                </td>
                                                                
                                                                <td>
                                                                    <div class="text-dark-75 mb-1 font-size-lg">
                                                                        ₹ {{ $product['price'] ?? '' }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark-75 mb-1 font-size-lg">
                                                                        {{ $data['qty'] ?? '' }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark-75 mb-1 font-size-lg">
                                                                        ₹ {{ $data['total_price'] ?? '' }}
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@stop

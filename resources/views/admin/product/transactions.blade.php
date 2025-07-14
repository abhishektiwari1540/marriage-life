@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center flex-wrap mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h5 class="text-dark font-weight-bold my-1 mr-5">
						{{Config('constants.PRODUCT_TRANSACTION.PRODUCT_TRANSACTION_TITLES')}}
					</h5>
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
						<li class="breadcrumb-item">
							<a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
						</li>
					</ul>
				</div>
			</div>
			@include("admin.elements.quick_links")
		</div>
	</div>


	<div class="d-flex flex-column-fluid">
		<div class=" container ">
			{{ Form::open(['method' => 'get','role' => 'form','route' => "$model.bookingsTransactions",'class' => 'kt-form kt-form--fit mb-0','autocomplete'=>"off"]) }}
			{{ Form::hidden('display') }}
			<div class="row">
				<div class="col-12">
					<div class="card card-custom card-stretch card-shadowless">
						<div class="card-header">
							<div class="card-title">
							</div>
							<div class="card-toolbar">
								<a href="{{route('product.transactionsExport')}}" class="btn btn-primary mr-2">
									Export
								</a>
								<a href="javascript:void(0);" class="btn btn-primary dropdown-toggle mr-2" data-toggle="collapse" data-target="#collapseOne6">
									Search
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
								<div id="collapseOne6" class="collapse <?php echo !empty($searchVariable) ? 'show' : ''; ?>" data-parent="#accordionExample6">
									<div>
										<div class="row mb-6">
											<div class="col-lg-3 mb-lg-5 mb-6">
												<label>Payment Status</label>
												<select name="payment_status" class="form-control select2init" value="{{$searchVariable['payment_status'] ?? ''}}">
													<option value="">All</option>
                                                     <option value="">All</option>
                                                        <option value="SUCCESS"
                                                            {{ isset($searchVariable['payment_status']) && $searchVariable['payment_status'] == 'SUCCESS' ? 'selected' : '' }}>
                                                            Success</option>
                                                        <option value="PENDING"
                                                            {{ isset($searchVariable['payment_status']) && $searchVariable['payment_status'] == 'PENDING' ? 'selected' : '' }}>
                                                            PENDING</option>
                                                        <option value="FAILED"
                                                            {{ isset($searchVariable['payment_status']) && $searchVariable['payment_status'] == 'FAILED' ? 'selected' : '' }}>
                                                            Failed</option>
                                                        <option value="INCOMPLETE"
                                                            {{ isset($searchVariable['payment_status']) && $searchVariable['payment_status'] == 'INCOMPLETE' ? 'selected' : '' }}>
                                                            Incomplete</option>
                                                        <option value="FLAGGED"
                                                            {{ isset($searchVariable['payment_status']) && $searchVariable['payment_status'] == 'FLAGGED' ? 'selected' : '' }}>
                                                            Flagged</option>
                                                        <option value="CANCELLED"
                                                            {{ isset($searchVariable['payment_status']) && $searchVariable['payment_status'] == 'CANCELLED' ? 'selected' : '' }}>
                                                            Cancelled</option>
                                                        <option value="VOID"
                                                            {{ isset($searchVariable['payment_status']) && $searchVariable['payment_status'] == 'VOID' ? 'selected' : '' }}>
                                                            Void</option>
                                                        <option value="USER_DROPPED"
                                                            {{ isset($searchVariable['payment_status']) && $searchVariable['payment_status'] == 'USER_DROPPED' ? 'selected' : '' }}>
                                                            User Dropped</option>
														<option value="NOT_ATTEMPTED"
                                                            {{ isset($searchVariable['payment_status']) && $searchVariable['payment_status'] == 'NOT_ATTEMPTED' ? 'selected' : '' }}>
                                                            Not Attempted</option>
												</select>
											</div>
											<div class="col-lg-3 mb-lg-5 mb-6">
												<label>Transaction Id</label>
												<input type="text" class="form-control" name="transaction_id" placeholder="Transaction Id" value="{{$searchVariable['transaction_id'] ?? '' }}">
											</div>
											<div class="col-lg-3 mb-lg-5 mb-6">
												<label>User Name</label>
												<input type="text" class="form-control" name="user_name" placeholder="User Name" value="{{$searchVariable['user_name'] ?? '' }}">
											</div>

											<div class="col-lg-3 mb-lg-5 mb-6">
												<label>Amount</label>
												<input type="text" class="form-control" name="amount" placeholder="Amount" value="{{$searchVariable['amount'] ?? '' }}">
											</div>
											<div class="col-lg-3 mb-lg-5 mb-6">
												<label>Date From</label>
												<div class="input-group date" id="datepickerfrom" data-target-input="nearest">
													{{ Form::text('date_from',((isset($searchVariable['date_from'])) ? $searchVariable['date_from'] : ''), ['class' => ' form-control datetimepicker-input','placeholder'=>'Date To','data-target'=>'#datepickerfrom','data-toggle'=>'datetimepicker']) }}
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="ki ki-calendar"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="col-lg-3 mb-lg-5 mb-6">
												<label>Date To</label>
												<div class="input-group date" id="datepickerto" data-target-input="nearest">
													{{ Form::text('date_to',((isset($searchVariable['date_to'])) ? $searchVariable['date_to'] : ''), ['class' => ' form-control  datetimepicker-input','placeholder'=>'Date To','data-target'=>'#datepickerto','data-toggle'=>'datetimepicker']) }}
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="ki ki-calendar"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="row mt-8">
											<div class="col-lg-12">
												<button class="btn btn-primary btn-primary--icon" id="kt_search">
													<span>
														<i class="la la-search"></i>
														<span>Search</span>
													</span>
												</button>
												&nbsp;&nbsp;
												<a href='{{ route("$model.bookingsTransactions")}}' class="btn btn-secondary btn-secondary--icon">
													<span>
														<i class="la la-close"></i>
														<span>Clear Search</span>
													</span>
												</a>
											</div>
										</div>
										<hr>
									</div>
								</div>
							</div>
							<div class="dataTables_wrapper ">
								<div class="table-responsive">
									<table class="table dataTable table-head-custom table-head-bg table-borderless table-vertical-center" id="taskTable">
										<thead>
											<tr class="text-uppercase">
												{{-- <th class="{{(($sortBy == 'transaction_id' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'transaction_id' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
													<a href="#">Product Name</a>
													</th> --}}
																								
												<th class="{{(($sortBy == 'transaction_id' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'transaction_id' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
													<a href="{{route($model.'.bookingsTransactions',array(	'sortBy' => 'transaction_id',
														'order' => ($sortBy == 'transaction_id' && $order == 'desc') ? 'asc' : 'desc',	
														$query_string))}}">Transaction Id</a>
													</th>

													<th class="{{(($sortBy == 'booking_amount' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'booking_amount' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
														<a href="javascript:void(0)">User Name</a>
													</th>


													<th class="{{(($sortBy == 'payment_mode' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'payment_mode' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
														<a href="{{route($model.'.bookingsTransactions',array(	'sortBy' => 'payment_mode',
														 'order' => ($sortBy == 'payment_mode' && $order == 'desc') ? 'asc' : 'desc',	
														 $query_string))}}">Payments Method</a>
												  </th>
														<th class="{{(($sortBy == 'amount' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'amount' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
															<a href="{{route($model.'.bookingsTransactions',array(	'sortBy' => 'amount',
																'order' => ($sortBy == 'amount' && $order == 'desc') ? 'asc' : 'desc',	
																$query_string))}}">Amount</a>
															</th>
															<th class="{{(($sortBy == 'payment_status' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'payment_status' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
																<a href="{{route($model.'.bookingsTransactions',array(	'sortBy' => 'payment_status',
																	'order' => ($sortBy == 'payment_status' && $order == 'desc') ? 'asc' : 'desc',	
																	$query_string))}}">Payment Status</a>
																</th>
																<th class="{{(($sortBy == 'created_at' && $order == 'desc') ? 'sorting_desc' : (($sortBy == 'created_at' && $order == 'asc') ? 'sorting_asc' : 'sorting'))}}">
																	<a href="{{route($model.'.bookingsTransactions',array(	'sortBy' => 'created_at',
																		'order' => ($sortBy == 'created_at' && $order == 'desc') ? 'asc' : 'desc',	
																		$query_string))}}">Booking Date</a>
																	</th>
																</tr>
															</thead>
															<tbody>

																@if(!$results->isEmpty())
																@foreach($results as $result)
																<tr>
																	{{-- <td>
																		
																		<div class="text-dark-75 mb-1 font-size-lg">
																			<a href="{{ url('adminpnlx/product/' . base64_encode($result->products_id)) }}" target="_blank" rel="noopener noreferrer">
																				{{ $result?->name ?? '' }}
																			</a>                                                                    
																		</div>
																	</td> --}}
																	<td>
																		<div class="text-dark-75 mb-1 font-size-lg">
																			{{$result?->transaction_id ?? '' }}
																		</div>
																	</td>
																	<td>
																		<div class="text-dark-75 mb-1 font-size-lg">
																			{{ucfirst($result?->userDetail->name ?? '')}}
																		</div>
																	</td>
																	<td>
																		<div class="text-dark-75 mb-1 font-size-lg">
																			@if($result->payment_mode == "debit_card")
																			Debit Card
																		@elseif ($result->payment_mode == "Cash")
																			Cash
																		@elseif ($result->payment_mode == "credit_card")
																			Credit Card
																		@elseif ($result->payment_mode == "prepaid_card")
																			Prepaid Card
																		@elseif ($result->payment_mode == "credit_card_emi")
																			Credit Card EMI
																		@elseif ($result->payment_mode == "net_banking")
																			Internet Banking
																		@elseif ($result->payment_mode == "upi")
																			UPI
																		@elseif ($result->payment_mode == "paypal")
																			PayPal
																		@elseif ($result->payment_mode == "phonepay")
																			PhonePe
																		@elseif ($result->payment_mode == "paytm")
																			Paytm
																		@elseif ($result->payment_mode == "amazon_pay")
																			Amazon Pay
																		@elseif ($result->payment_mode == "wallet")
																		Wallet Pay
																		@elseif ($result->payment_mode == "airtel_money")
																			Airtel Money Wallet
																		@elseif ($result->payment_mode == "freecharge")
																			Freecharge Wallet
																		@elseif ($result->payment_mode == "mobikwik")
																			MobiKwik Wallet
																		@elseif ($result->payment_mode == "ola")
																			Ola Wallet
																		@elseif ($result->payment_mode == "jiomoney")
																			JioMoney Wallet
																		@elseif ($result->payment_mode == "zestmoney")
																			ZestMoney
																		@elseif ($result->payment_mode == "instacred")
																			Instacred
																		@elseif ($result->payment_mode == "lazy_pay")
																			LazyPay
																		@elseif ($result->payment_mode == "ola_postpaid")
																			Ola Postpaid
																		@else
																		N/A

																		@endif
																		</div>
																	</td>                                                                                                                   
																	<td>
																		<div class="text-dark-75 mb-1 font-size-lg">
																			₹ {{$result->amount ?? '' }}
																		</div>
																	</td>
																	<td>
																		<div class="text-dark-75 mb-1 font-size-lg">
																			@if($result->payment_status=='PENDING')
																			<span class="label label-lg label-light-warning label-inline">
																				PENDING	
																			</span>
																			@elseif($result->payment_status == "SUCCESS")
																			<span class="label label-lg label-light-success label-inline">
																			SUCCESS
																			</span>
																			@elseif($result->payment_status == "FAILED")
																			<span class="label label-lg label-light-danger label-inline">
																			FAILED
																			</span>
																			@elseif($result->payment_status == "INCOMPLETE")
																			<span class="label label-lg label-light-danger label-inline">
																			INCOMPLETE
																			</span>
																			@elseif($result->payment_status == "FLAGGED")
																			<span class="label label-lg label-light-warning label-inline">
																			FLAGGED
																			</span>
																			@elseif($result->payment_status == "CANCELLED")
																			<span class="label label-lg label-light-danger label-inline">
																			CANCELLED
																			</span>
																			@elseif($result->payment_status == "VOID")
																			<span class="label label-lg label-light-warning label-inline">
																			VOID
																			</span>
																			@elseif($result->payment_status == "USER_DROPPED")
																			<span class="label label-lg label-light-warning label-inline">
																			USER DROPPED
																			</span>
																			@elseif($result->payment_status == 'NOT_ATTEMPTED')
                                                                        <span
                                                                            class="label label-lg label-light-warning label-inline">
                                                                            NOT ATTEMPTED
                                                                        </span>
																			@else

																			
																			@endif
																		</div>
																	</td>
																	<td>
																		<div class="text-dark-75 mb-1 font-size-lg">
																			{{$result->created_at??''}}
																		</div>
																	</td>
																</tr>
																@endforeach
																@else
																<tr>
																	<td colspan="6" style="text-align:center;"> {{ trans("Record not found.") }}</td>
																</tr>
																@endif
															</tbody>
														</table>
													</div>
													@include('pagination.default', ['results' => $results])
												</div>
											</div>
										</div>
									</div>
								</div>
								{{ Form::close() }}
							</div>
						</div>
					</div>
					@stop
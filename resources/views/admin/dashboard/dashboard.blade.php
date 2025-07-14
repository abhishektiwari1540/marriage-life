

@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
		<div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center flex-wrap mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h5 class="text-dark font-weight-bold my-1 mr-5">
					Dashboard </h5>
				</div>
			</div>
			@include("admin.elements.quick_links")
		</div>
	</div>
	<div class="d-flex flex-column-fluid">
		<div class=" container ">
			<div class="row">
				<div class="col-lg-3">
					<a href="{{ route('users.index')}}" class="card card-custom bg-info bg-hover-state-info card-stretch gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
									</g>
								</svg>
							</span>
							<div class="card-title font-weight-bolder text-light font-size-h2 mb-0 mt-6 d-block">
								{{$totalUsers}} 
							</div>
							<div class="font-weight-bold text-light  font-size-sm">Total Active Users</div>

						</div>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="{{ route('pooja-services.bookings')}}" class="card card-custom bg-dark bg-hover-state-info card-stretch gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
								{{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3" />
										<path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000" />
									</g>
								</svg>  --}}
								<svg id="Layer_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512"  style="fill: white;" xmlns="http://www.w3.org/2000/svg"><g id="XMLID_1_"><g id="XMLID_3173_"><g id="XMLID_342_"><path id="XMLID_2543_" d="m335.1 512h-158.2c-1.5 0-3-.7-3.9-1.9-2.9-3.7-72-91.3-72-160.1 0-29.2 12.7-56 36.7-77.4 12.9-11.5 25.6-18.5 32.1-21.6l-8.5-24.3c-.5-1.5-.3-3.2.6-4.5s2.5-2.1 4.1-2.1h180c1.6 0 3.1.8 4.1 2.1.9 1.3 1.2 3 .6 4.5l-8.5 24.3c6.5 3.2 19.2 10.2 32.1 21.6 24 21.4 36.7 48.1 36.7 77.4 0 68.9-69 156.4-72 160.1-.9 1.2-2.4 1.9-3.9 1.9zm-155.7-10h153.3c10-13.1 68.4-92 68.4-152 0-63.8-66.2-91.5-66.9-91.7-2.5-1-3.7-3.8-2.8-6.3l7.7-22h-166.1l7.7 22c.9 2.5-.4 5.3-2.8 6.3-.2.1-17.1 7.1-33.8 22-22 19.7-33.1 43.1-33.1 69.7 0 60.1 58.3 138.9 68.4 152z"/></g><g id="XMLID_652_"><path id="XMLID_2537_" d="m164 229.6c-1.7-.8-42.5-19.5-62.8-85.8-14.2-46.6-42.5-64.4-42.8-64.5-1.9-1.2-2.8-3.5-2.2-5.6s2.6-3.7 4.8-3.7c49.6 0 60.9 23.5 68.4 39 1.5 3.1 2.8 5.8 4.2 7.8 1.9 2.8 8 7.5 15.1 13 19.5 15 48.9 37.6 64.9 73.2l-9.1 4.1c-15-33.2-43.2-55-61.9-69.3-8.4-6.5-14.4-11.1-17.3-15.2-1.8-2.7-3.3-5.8-4.9-9.1-6.3-13-13.9-28.7-44.5-32.5 10.6 10.4 25.5 29.4 34.8 60 18.9 62 56.9 79.4 57.2 79.6z"/></g><g id="XMLID_193_"><path id="XMLID_2536_" d="m181 159h-10c0-68 22.4-107.7 41.3-128.8 20.6-23.2 41.3-29.8 42.2-30.1 1-.3 2-.3 3 0 .8.2 19.3 6.3 38.9 26.5 17.8 18.5 39.9 53 43.9 112.3l-10 .7c-3.9-55.9-24.3-88.3-40.7-105.6-14.7-15.5-29-22-33.6-23.8-4.9 1.9-20.9 9.1-36.7 27-17.5 20-38.3 57.8-38.3 121.8z"/></g><g id="XMLID_346_"><path id="XMLID_2533_" d="m276 230h-40c-.6 0-1.3-.1-1.9-.4-.9-.4-23.1-9.9-23.1-58 0-46.4 39.4-97.6 41.1-99.7.9-1.2 2.4-1.9 3.9-1.9s3 .7 3.9 1.9c1.7 2.2 41.1 53.3 41.1 99.7 0 48-22.2 57.6-23.1 58-.6.3-1.3.4-1.9.4zm-38.8-10h37.5c3.1-2 16.2-12.4 16.2-48.3 0-34.7-25.1-74-35-88.1-9.9 14.2-35 53.5-35 88.1.1 36 13.2 46.4 16.3 48.3z"/></g><g id="XMLID_336_"><path id="XMLID_2529_" d="m346 230h-50c-1.5 0-3-.7-3.9-1.9s-1.3-2.8-.9-4.3c11.9-47.6 49.6-76.6 72.2-94 7.1-5.4 13.2-10.1 15.1-13 1.4-2 2.7-4.7 4.2-7.8 7.5-15.5 18.8-39 68.4-39 2.2 0 4.2 1.5 4.8 3.7s-.3 4.5-2.2 5.6c-.3.2-28.6 18-42.8 64.5-20.3 66.3-61 85-62.8 85.8-.7.3-1.4.4-2.1.4zm-43.4-10h42.2c5.8-3 39.1-22.7 56.4-79.1 9.4-30.6 24.3-49.6 34.8-60-30.6 3.8-38.2 19.5-44.5 32.5-1.6 3.3-3.1 6.5-4.9 9.1-2.8 4.1-8.9 8.8-17.3 15.2-20.4 15.8-54 41.7-66.7 82.3z"/></g><g id="XMLID_335_"><path id="XMLID_2528_" d="m220.8 85-9.5-3.1c13-39.7 31.9-55 32.7-55.6l6.2 7.8-3.1-3.9 3.1 3.9c-.2.1-17.5 14.4-29.4 50.9z"/></g><g id="XMLID_337_"><path id="XMLID_2523_" d="m302.7 115.7c-5.3-36.9-24.1-55.1-24.3-55.3l6.9-7.3c.9.8 21.5 20.8 27.3 61.1z"/></g><g id="XMLID_334_"><path id="XMLID_2522_" d="m251 122h10v103h-10z"/></g><g id="XMLID_338_"><path id="XMLID_2521_" d="m201 426h-10c0-13.8 11.2-25 25-25h35v-75c0-2.8 2.2-5 5-5h40c8.3 0 15-6.7 15-15h10c0 13.8-11.2 25-25 25h-35v75c0 2.8-2.2 5-5 5h-40c-8.3 0-15 6.8-15 15z"/></g><g id="XMLID_339_"><path id="XMLID_2520_" d="m316 431c-13.8 0-25-11.2-25-25v-35h-75c-2.8 0-5-2.2-5-5v-40c0-8.3-6.7-15-15-15v-10c13.8 0 25 11.2 25 25v35h75c2.8 0 5 2.2 5 5v40c0 8.3 6.7 15 15 15z"/></g><g id="XMLID_340_"><path id="XMLID_2519_" d="m271 341h10v10h-10z"/></g><g id="XMLID_194_"><path id="XMLID_2518_" d="m271 381h10v10h-10z"/></g><g id="XMLID_343_"><path id="XMLID_2517_" d="m231 381h10v10h-10z"/></g><g id="XMLID_341_"><path id="XMLID_2516_" d="m231 341h10v10h-10z" fill="#FFFFFF"/></g></g></g></svg>
							</span>
							<div class="card-title font-weight-bolder text-light font-size-h2 mb-0 mt-6 d-block">
								{{$poojaBookingCount}} 
							</div>
							<div class="font-weight-bold text-light  font-size-sm">Total Pooja Bookings</div>

						</div>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="{{ route('consultation.bookings')}}" class="card card-custom bg-danger bg-hover-state-info card-stretch gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
								{{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3" />
										<path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000" />
									</g>
								</svg>  --}}
								<!-- icon666.com - MILLIONS vector ICONS FREE --><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  style="fill: white;" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"><g><g><path d="M502.278,204.819c-0.974,0.202-24.103,5.007-43.64,10.863c-26.141,7.835-41.134,24.336-41.134,45.267v94.486h-66.178 c-16.344,0-29.642,13.297-29.642,29.642v122.88h16.167v-122.88c0-7.43,6.044-13.474,13.474-13.474h82.347V260.95 c0-18.19,18.551-26.466,29.608-29.78c11.235-3.367,24.011-6.439,32.551-8.383v157.037c0,19.316-15.715,35.032-35.032,35.032 h-89.503l-11.684,93.103h16.036l9.874-76.935h75.279c28.231,0,51.2-22.969,51.2-51.2V202.808L502.278,204.819z"/></g></g><g><g><path d="M465.116,78.556h-0.009c-25.264,0-45.925,20.083-46.852,45.124l-22.614,51.887h22.582v26.947h44.733 c27.043,0,49.044-22.001,49.044-49.044v-28.03C512,99.588,490.967,78.556,465.116,78.556z M495.832,153.47 c0,18.128-14.749,32.876-32.876,32.876h-28.564v-26.948h-14.067l14.067-32.272v-1.685c0-16.937,13.779-30.716,30.716-30.716h0.009 c16.937,0,30.716,13.779,30.716,30.716V153.47z"/></g></g><g><g><path d="M160.674,355.436H94.496V260.95c0-20.932-14.992-37.431-41.134-45.267c-19.537-5.856-42.665-10.661-43.64-10.863 L0,202.808v177.016c0,28.231,22.969,51.2,51.2,51.2h75.279l9.873,76.935h16.036l-11.684-93.103H51.2 c-19.317,0-35.032-15.716-35.032-35.032V222.787c8.536,1.941,21.308,5.013,32.551,8.383c11.057,3.315,29.608,11.591,29.608,29.78 v110.654h82.347c7.43,0,13.474,6.044,13.474,13.474v122.88h16.168v-122.88C190.316,368.733,177.018,355.436,160.674,355.436z"/></g></g><g><g><path d="M93.745,123.68c-0.928-25.041-21.588-45.124-46.852-45.124h-0.009C21.033,78.556,0,99.588,0,125.44v28.03 c0,27.043,22.001,49.044,49.044,49.044h44.733v-26.947h22.582L93.745,123.68z M77.608,159.398v26.947H49.044 c-18.127,0-32.876-14.748-32.876-32.876v-28.03c0-16.937,13.779-30.716,30.716-30.716h0.009c16.937,0,30.716,13.779,30.716,30.716 v1.685l14.067,32.273H77.608z"/></g></g><g><g><path d="M121.263,273.516v48.505h113.447v185.937h16.168V322.021h16.168v185.937h16.168V322.021h107.521v-48.505H121.263z M374.568,305.853H137.432v-16.168h237.137V305.853z"/></g></g><g><g><path d="M365.406,88.198v-41.04h-45.272V4.042H131.503v41.04L92.321,92.968h39.183V128h33.774v-16.168h-17.605V76.8h-21.23 l21.23-25.946V20.21h156.295v26.947H176.775v123.958h188.632v-35.032h39.183L365.406,88.198z M349.238,119.916v35.032H192.943V128 h127.192V73.709h-16.168v38.123H192.943V63.326h156.295V93.97l21.23,25.946H349.238z"/></g></g><g><g><g><rect x="202.644" y="215.309" width="16.168" height="16.168"/><rect x="247.916" y="215.309" width="16.168" height="16.168"/><rect x="293.187" y="215.309" width="16.168" height="16.168"/></g></g></g></svg>
							</span>
							<div class="card-title font-weight-bolder text-light font-size-h2 mb-0 mt-6 d-block">
								{{$consultationBookingCount}} 
							</div>
							<div class="font-weight-bold text-light  font-size-sm">Total Consultation Bookings</div>

						</div>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="{{ route('courses.bookings')}}" class="card card-success bg-warning bg-hover-state-info card-stretch gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
								{{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3" />
										<path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000" />
									</g>
								</svg>  --}}
								<!-- icon666.com - MILLIONS vector ICONS FREE --><svg id="Layer_1" viewBox="0 0 500 500"  style="fill: white;" xmlns="http://www.w3.org/2000/svg"><path d="m471.069 413.564h-442.138c-2.17 0-3.93-1.76-3.93-3.93v-24.551c0-2.172 1.76-3.932 3.93-3.932h442.139c2.171 0 3.931 1.76 3.931 3.932v24.551c-.001 2.171-1.761 3.93-3.932 3.93zm-438.209-7.859h434.28v-16.691h-434.28z"/><path d="m262.283 143.38h-24.559c-1.042 0-2.042-.414-2.778-1.15l-12.284-12.276c-1.125-1.124-1.461-2.814-.853-4.284.608-1.468 2.042-2.427 3.631-2.427h49.118c1.59 0 3.022.958 3.631 2.426.608 1.469.272 3.159-.852 4.283l-12.273 12.276c-.739.738-1.739 1.152-2.781 1.152zm-22.931-7.86h21.304l4.415-4.416h-30.137z"/><path d="m108.758 389.023h-24.555c-2.17 0-3.93-1.76-3.93-3.93v-12.285c0-2.17 1.76-3.93 3.93-3.93h24.555c2.17 0 3.93 1.76 3.93 3.93v12.285c0 2.171-1.76 3.93-3.93 3.93zm-20.625-7.859h16.694v-4.424h-16.694z"/><path d="m415.802 389.023h-24.557c-2.171 0-3.931-1.76-3.931-3.93v-12.285c0-2.17 1.76-3.93 3.931-3.93h24.557c2.171 0 3.931 1.76 3.931 3.93v12.285c-.001 2.171-1.76 3.93-3.931 3.93zm-20.627-7.859h16.697v-4.424h-16.697z"/><path d="m446.512 425.865h-393.011c-.611 0-1.213-.143-1.759-.416l-24.571-12.295c-1.63-.816-2.485-2.645-2.066-4.418s2.002-3.027 3.825-3.027h442.139c1.822 0 3.405 1.254 3.825 3.027.419 1.773-.436 3.602-2.065 4.418l-24.558 12.295c-.545.274-1.148.416-1.759.416zm-392.082-7.861h391.153l8.858-4.434h-408.874z"/><path d="m152.432 202.75h-43.669c-2.17 0-3.93-1.759-3.93-3.93v-16.383c0-2.17 1.76-3.93 3.93-3.93h43.669c2.17 0 3.93 1.76 3.93 3.93v16.383c0 2.17-1.759 3.93-3.93 3.93zm-39.739-7.86h35.809v-8.523h-35.809z"/><path d="m261.593 202.75h-87.326c-2.17 0-3.93-1.759-3.93-3.93v-16.383c0-2.17 1.76-3.93 3.93-3.93h87.326c2.17 0 3.93 1.76 3.93 3.93v16.383c-.001 2.17-1.76 3.93-3.93 3.93zm-83.397-7.86h79.466v-8.523h-79.466z"/><path d="m239.77 235.5h-87.332c-2.17 0-3.93-1.76-3.93-3.93v-16.38c0-2.17 1.759-3.93 3.93-3.93h87.332c2.17 0 3.93 1.76 3.93 3.93v16.38c0 2.171-1.76 3.93-3.93 3.93zm-83.402-7.86h79.472v-8.521h-79.472z"/><path d="m174.267 268.246h-21.829c-2.17 0-3.93-1.76-3.93-3.932v-16.369c0-2.17 1.759-3.93 3.93-3.93h21.829c2.17 0 3.93 1.76 3.93 3.93v16.369c-.001 2.172-1.76 3.932-3.93 3.932zm-17.899-7.861h13.969v-8.51h-13.969z"/><path d="m305.262 268.246h-109.158c-2.17 0-3.93-1.76-3.93-3.932v-16.369c0-2.17 1.759-3.93 3.93-3.93h109.158c2.17 0 3.93 1.76 3.93 3.93v16.369c-.001 2.172-1.76 3.932-3.93 3.932zm-105.228-7.861h101.297v-8.51h-101.297z"/><path d="m217.936 300.996h-65.498c-2.17 0-3.93-1.76-3.93-3.932v-16.363c0-2.17 1.759-3.93 3.93-3.93h65.498c2.17 0 3.93 1.76 3.93 3.93v16.363c-.001 2.172-1.761 3.932-3.93 3.932zm-61.568-7.861h57.638v-8.504h-57.638z"/><path d="m348.931 300.996h-109.161c-2.17 0-3.93-1.76-3.93-3.932v-16.363c0-2.17 1.76-3.93 3.93-3.93h109.161c2.17 0 3.93 1.76 3.93 3.93v16.363c-.001 2.172-1.76 3.932-3.93 3.932zm-105.231-7.861h101.3v-8.504h-101.3z"/><path d="m130.595 333.734h-21.832c-2.17 0-3.93-1.76-3.93-3.93v-16.365c0-2.17 1.76-3.93 3.93-3.93h21.832c2.17 0 3.93 1.76 3.93 3.93v16.365c0 2.171-1.76 3.93-3.93 3.93zm-17.902-7.859h13.971v-8.506h-13.971z"/><path d="m261.604 333.734h-109.166c-2.17 0-3.93-1.76-3.93-3.93v-16.365c0-2.17 1.759-3.93 3.93-3.93h109.167c2.17 0 3.93 1.76 3.93 3.93v16.365c-.001 2.171-1.761 3.93-3.931 3.93zm-105.236-7.859h101.306v-8.506h-101.306z"/><path d="m305.262 333.734h-21.832c-2.17 0-3.93-1.76-3.93-3.93v-16.365c0-2.17 1.76-3.93 3.93-3.93h21.832c2.17 0 3.93 1.76 3.93 3.93v16.365c-.001 2.171-1.76 3.93-3.93 3.93zm-17.902-7.859h13.971v-8.506h-13.971z"/><path d="m360.471 210.34c-.001 0-.001 0 0 0-7.824-.001-13.079-6.228-13.079-15.496v-55.451c0-9.268 5.256-15.495 13.081-15.495 2.875 0 5.875.855 8.916 2.544l50.875 28.257c5.596 3.115 8.678 7.521 8.681 12.407.002 4.89-3.078 9.302-8.675 12.423l-50.881 28.263c-3.042 1.691-6.043 2.548-8.918 2.548zm.002-78.582c-4.712 0-5.221 5.34-5.221 7.635v55.451c0 2.296.509 7.635 5.218 7.635h.001c1.502 0 3.266-.539 5.102-1.558l50.875-28.26c2.945-1.643 4.638-3.667 4.637-5.551-.001-1.881-1.692-3.9-4.64-5.541l-50.872-28.255c-1.834-1.018-3.598-1.556-5.1-1.556z"/><path d="m382.037 260.063c-51.266 0-92.973-41.703-92.973-92.962 0-51.261 41.707-92.965 92.973-92.965 51.26 0 92.963 41.704 92.963 92.965 0 51.259-41.703 92.962-92.963 92.962zm0-178.067c-46.931 0-85.112 38.178-85.112 85.104s38.182 85.103 85.112 85.103c46.926 0 85.103-38.177 85.103-85.103 0-46.927-38.177-85.104-85.103-85.104z"/><path d="m434.223 389.014h-368.452c-2.17 0-3.93-1.76-3.93-3.93v-233.349c0-15.71 12.783-28.491 28.496-28.491h212.194c1.363 0 2.63.708 3.346 1.868.716 1.162.778 2.61.165 3.829-6.05 12.02-9.117 24.859-9.117 38.159 0 46.938 38.182 85.125 85.112 85.125 17.986 0 35.232-5.623 49.875-16.262 1.198-.868 2.779-.993 4.096-.322s2.146 2.024 2.146 3.501v145.942c-.001 2.17-1.76 3.93-3.931 3.93zm-364.521-7.862h360.591v-134.661c-14.563 8.916-31.101 13.593-48.256 13.593-51.266 0-92.973-41.711-92.973-92.984 0-12.455 2.459-24.536 7.317-35.996h-206.044c-11.378 0-20.636 9.255-20.636 20.63v229.418z"/><path d="m415.802 358.309h-331.599c-2.17 0-3.93-1.76-3.93-3.93v-196.497c0-2.17 1.76-3.93 3.93-3.93h209.276c1.115 0 2.179.474 2.923 1.303.746.83 1.104 1.936.985 3.045-.308 2.873-.463 5.834-.463 8.8 0 46.938 38.182 85.125 85.112 85.125 11.107 0 21.965-2.147 32.271-6.382 1.211-.498 2.593-.36 3.682.371 1.089.729 1.742 1.954 1.742 3.265v104.901c.001 2.169-1.758 3.929-3.929 3.929zm-327.669-7.862h323.739v-95.297c-9.621 3.277-19.631 4.934-29.835 4.934-51.266 0-92.973-41.711-92.973-92.984 0-1.768.051-3.536.151-5.288h-201.082z"/><path d="m320.715 235.5h-59.11c-2.171 0-3.931-1.76-3.931-3.93v-16.38c0-2.17 1.76-3.93 3.931-3.93h45.563c1.339 0 2.585.681 3.308 1.807 3.644 5.677 8 10.944 12.95 15.657 1.164 1.108 1.535 2.813.938 4.306s-2.043 2.47-3.649 2.47zm-55.181-7.86h46.027c-2.339-2.719-4.515-5.565-6.511-8.521h-39.517v8.521z"/></svg>
							</span>
							<div class="card-title font-weight-bolder text-light font-size-h2 mb-0 mt-6 d-block">
								{{$courseBookingCount}} 
							</div>
							<div class="font-weight-bold text-light  font-size-sm">Total Course Bookings</div>

						</div>
					</a>
				</div>

				<div class="col-lg-3">
					<a href="{{ route('product.bookings')}}" class="card card-custom bg-success bg-hover-state-info card-stretch gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
								{{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3" />
										<path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000" />
									</g>
								</svg>  --}}
								<!-- icon666.com - MILLIONS vector ICONS FREE --><svg viewBox="0 0 64 64"   style="fill: white;" xmlns="http://www.w3.org/2000/svg"><g id="Product_Management" data-name="Product Management"><path d="m43 17a11 11 0 1 0 -11 11 11 11 0 0 0 11-11zm-20 0a9 9 0 1 1 9 9 9 9 0 0 1 -9-9z"/><path d="m33 23v-1a3 3 0 0 0 0-6h-2a1 1 0 0 1 0-2h4a1 1 0 0 0 0-2h-2v-1a1 1 0 0 0 -2 0v1a3 3 0 0 0 0 6h2a1 1 0 0 1 0 2h-4a1 1 0 0 0 0 2h2v1a1 1 0 0 0 2 0z"/><path d="m63.86 42.49c-6.45-10.75-6-10.19-6.44-10.39s1.08-.1-20.42-.1v-.86a15.16 15.16 0 0 0 4.74-2.75c3.11 1.81 2 2.29 7-6.35a1 1 0 0 0 -.36-1.37l-1.62-.93a14.43 14.43 0 0 0 0-5.48l1.62-.93a1 1 0 0 0 .34-1.33c-4.92-8.52-3.78-8.21-7-6.35a15.16 15.16 0 0 0 -4.72-2.79v-1.86a1 1 0 0 0 -1-1h-8a1 1 0 0 0 -1 1v1.86a15.16 15.16 0 0 0 -4.74 2.75l-1.62-.94a1 1 0 0 0 -1.36.33l-4 6.92a1 1 0 0 0 .36 1.37l1.62.93a14.43 14.43 0 0 0 0 5.48l-1.62.93a1 1 0 0 0 -.36 1.37l4 6.92a1 1 0 0 0 1.36.37l1.62-.94a15.16 15.16 0 0 0 4.74 2.79v.86h-20c-.81 0-.44-.2-6.86 10.49a1 1 0 0 0 .86 1.51h5v19a1 1 0 0 0 1 1h50a1 1 0 0 0 1-1v-19h5a1 1 0 0 0 .86-1.51zm-35.57-13c-4.78-1.42-5-3.94-6.4-3.15l-1.38.8-3-5.2c1.38-.8 2.06-1 1.85-1.89a12.76 12.76 0 0 1 0-6c.21-.87-.47-1.1-1.85-1.89l3-5.2 1.38.8c1.36.78 1.65-1.74 6.4-3.15.85-.26.71-1 .71-2.55h6v1.53c0 1.56 2.29.54 5.92 4 .65.62 1.21.13 2.57-.66l3 5.2c-3 1.74-1.49.67-1.49 4.9s-1.53 3.16 1.49 4.9l-3 5.2-1.38-.8a1 1 0 0 0 -1.19.14c-3.63 3.43-5.92 2.41-5.92 4v1.53h-6c0-1.5.17-2.28-.71-2.55zm-20.72 4.51h31.66l-4.8 8h-31.66zm.43 10c29.31 0 27.44.21 27.86-.49l4.14-6.9v25.39h-32zm48 18h-14v-25.39c4.52 7.54 4.23 7.39 5 7.39h9zm-8.43-20-4.8-8h13.66l4.8 8z"/><path d="m17 54h-6a1 1 0 0 0 -1 1v4a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0 -1-1zm-1 4h-4v-2h4z"/></g></svg>
							</span>
							<div class="card-title font-weight-bolder text-light font-size-h2 mb-0 mt-6 d-block">
								{{$productBookingCount}} 
							</div>
							<div class="font-weight-bold text-light  font-size-sm">Total Product Bookings</div>

						</div>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="javascript:void(0)" class="card card-custom bg-primary bg-hover-state-info card-stretch gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3" />
										<path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000" />
									</g>
								</svg> 
							</span>
							<div class="card-title font-weight-bolder text-light font-size-h2 mb-0 mt-6 d-block">
								₹ {{$bookingAmount}} 
							</div>
							<div class="font-weight-bold text-light  font-size-sm">Total Bookings Amount</div>

						</div>
					</a>
				</div>

				{{-- <div class="col-lg-3">
					<a href="javascript:void(0)" class="card card-custom bg-info bg-hover-state-info card-stretch gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3" />
										<path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000" />
									</g>
								</svg> 
							</span>
							<div class="card-title font-weight-bolder text-light font-size-h2 mb-0 mt-6 d-block">
								 {{$transactioncounting}} 
							</div>
							<div class="font-weight-bold text-light  font-size-sm">Total Transaction Count</div>

						</div>
					</a>
				</div> --}}
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="row supportSortable draggable-zone">
						<div class="col-xl-12">

							<div style="box-shadow:none;" class="card card-custom  gutter-b card-stretch gutter-b">
								<div class="card-header h-auto border-0">
									<div class="card-title py-5">
										<h3 class="card-label">
											<span class="d-block text-dark font-weight-bolder">Users
											</span>
											<span class="d-block text-muted mt-2 font-size-sm"></span>
										</h3>
									</div>
									<div class="ml-auto mt-6 leadStartDate" style="display:none;">
										<form action="" class="form-inline" autocomplete="off">
											<!--begin::Input-->
											<div class="form-group">
												{{ Form::text('start_date', isset($start_date) ? $start_date : '', ['class' => 'form-control form-control-solid form-control-lg datepicker-input ' . ($errors->has('start_date') ? 'is-invalid' : ''), 'placeholder' => trans('Start date'), 'id' => 'datepickerfrom']) }}
												<div class="invalid-feedback"><?php echo $errors->first('start_date'); ?></div>
											</div>
											<!--end::Input-->
											<!--begin::Input-->
											<div class="form-group leadEndDate mx-3" style="display:none;">
												{{ Form::text('end_date', isset($end_date) ? $end_date : '', ['class' => 'form-control form-control-solid form-control-lg datepicker-input ' . ($errors->has('end_date') ? 'is-invalid' : ''), 'placeholder' => trans('End date'), 'id' => 'datepickerto']) }}
												<div class="invalid-feedback"><?php echo $errors->first('end_date'); ?></div>
											</div>
											<!--end::Input-->
											<div class="lead_date_button" style="display:none;">
												<button type="button"
													class="btn btn-success font-weight-bold text-uppercase px-9 py-3 h-45px admin_leads_graph_filter_button">
													Submit
												</button>
											</div>
										</form>
									</div>
									<div class="ml-6 mt-6">
										<!--begin::Input-->
										<div class="form-group">
											{{ Form::select(
												'lead_graph_type',
												[
													'yearly' => trans('Current Year'),
													'monthly' => trans('Current Month'),
													'weekly' => trans('Current Week'),
													'custom' => trans('Custom'),
												],
												isset($lead_graph_type) ? $lead_graph_type : '',
												[
													'class' =>
														'min-w-140px h-45px form-control admin_leads_graph_filter chosenselect_graph_type ' .
														($errors->has('lead_graph_type') ? 'is-invalid' : ''),
												],
											) }}
											<div class="invalid-feedback"><?php echo $errors->first('lead_graph_type'); ?></div>
										</div>
										<!--end::Input-->
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-12">
											<div id="chart5"></div>
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

<script>
    $(document).ready(function() {
           var shortMonths = JSON.parse('<?php echo $shortMonthsJson; ?>');
        var registeredUsers = JSON.parse('<?php echo $registeredUsersJson; ?>');
            var options = {

                series: [{
                        name: 'Users',
                        data: registeredUsers
                    },
                   

                ],

                chart: {
                    type: 'bar',
                    height: 350,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: shortMonths,
                },
                yaxis: {
                    title: {
                        text: ''
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function(val, opts) {
                            if (opts.seriesIndex === 1) { // Check if it's the second bar
                                var tooltipIndex = opts.dataPointIndex;
                            }
                            return val;
                        }
                    }
                }
            };
            var chart5 = new ApexCharts(document.querySelector("#chart5"), options);
            chart5.render();
            $(".admin_leads_graph_filter").change(function(e) {
                e.preventDefault();
                var type = $('select[name=lead_graph_type]').val();
                if (type == 'custom') {
                    $(".leadStartDate").show();
                    $(".leadEndDate").show();
                    $(".lead_date_button").show();
                } else {
                    $(".leadStartDate").hide();
                    $(".leadEndDate").hide();
                    $(".lead_date_button").hide();
                    $.fn.statisticsChart();
                }
            });
            $.fn.statisticsChart = function() {
                var type = $('select[name=lead_graph_type]').val();
                var start_date = $('input[name=start_date]').val();
                var end_date = $('input[name=end_date]').val();
                $.ajax({
                    url: "{{ route('dashboard.statistics') }}",
                    method: 'get',
                    data: {
                        'lead_graph_type': type,
                        'date_from': start_date,
                        'date_to': end_date
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(r) {
                        console.log(r)
                        chart5.updateOptions({
                            xaxis: {
                                categories: r.dates
                            }
                        });
                        chart5.updateSeries([{
                            name: 'Users',
                            data: JSON.parse(r.registered_users)
                        }, 
                        ])
                    }
                });
            }
            $(".admin_leads_graph_filter_button").click(function(e) {
                var type = $('select[name=lead_graph_type]').val();
                var start_date = Date.parse($('input[name=start_date]').val());
                var end_date = Date.parse($('input[name=end_date]').val());
                if (start_date != '' && end_date != '') {
                    // if(start_date > end_date){
                    // show_message("End date must be greater than from Start date.",'error');
                    // return false;
                    // }
                    $.fn.statisticsChart();
                } else {
                    show_message("Start date and End date both are mandatory.", 'error');
                }
            });
            $("#datepickerfrom").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
            }).on('changeDate', function(selected) {
                var minDate = new Date(selected.date.valueOf());
                $('#datepickerto').datepicker('setStartDate', minDate);
                $('.datepicker').hide();
            }).attr('readonly', 'readonly');
            $("#datepickerto").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
            }).on('changeDate', function(selected) {
                var minDate = new Date(selected.date.valueOf());
                $('#datepickerfrom').datepicker('setEndDate', minDate);
                $('.datepicker').hide();
            }).attr('readonly', 'readonly');
        });
</script>

@stop
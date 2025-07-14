@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
   <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
      <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
         <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">
               <h5 class="text-dark font-weight-bold my-1 mr-5">
                  View {{Config('constants.COURSE.COURSE_TITLE')}}
               </h5>
               <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                  <li class="breadcrumb-item">
                     <a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item">
                     <a href="{{ route($model.'.index')}}" class="text-muted">
                        {{Config('constants.COURSE.COURSE_TITLES')}}
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         @include("admin.elements.quick_links")
      </div>
   </div>
   <div class="d-flex flex-column-fluid">
      <div class=" container ">
         <div class="card card-custom gutter-b">
            <div class="card-header card-header-tabs-line">
               <div class="card-toolbar">
                  <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active hide_me" data-toggle="tab" href="#kt_apps_contacts_view_tab_1">
                           <span class="nav-text">
                              {{Config('constants.COURSE.COURSE_TITLE')}} Information
                           </span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
                           <span class="nav-text">
                              Course Specifications
                           </span>
                        </a>
                     </li>
                  </div>
               </div>
               <div class="card-body px-0">
                  <div class="tab-content px-10">

                     <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                        <div class="form-group row my-2">
                           <label class="col-4 col-form-label">Name:</label>
                           <div class="col-8">
                              <span class="form-control-plaintext font-weight-bolder">{{$modelDetails->name ?? ''}}</span>
                           </div>
                        </div>
                        <div class="form-group row my-2">
                           <label class="col-4 col-form-label">Price:</label>
                           <div class="col-8">
                              <span class="form-control-plaintext font-weight-bolder">₹ {{$modelDetails->price ?? ''}}</span>
                           </div>
                        </div>
                        <div class="form-group row my-2">
                           <label class="col-4 col-form-label">Short Description:</label>
                           <div class="col-8">
                              <span class="form-control-plaintext font-weight-bolder">{!!$modelDetails->short_description ?? ''!!}</span>
                           </div>
                        </div>
                        <div class="form-group row my-2">
                           <label class="col-4 col-form-label">Added On:</label>
                           <div class="col-8">
                              <span class="form-control-plaintext font-weight-bolder">  
                                {{ $modelDetails->created_at}}
                             </span>
                          </div>
                       </div>
                       <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Status:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">
                              @if($modelDetails->is_active == 1)
                              <span class="label label-lg label-light-success label-inline">Activated</span>
                              @else
                              <span class="label label-lg label-light-danger label-inline">Deactivated</span>
                              @endif
                           </span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Image :</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">
                              @if(!empty($modelDetails->image))
                              <a class="fancybox-buttons" data-fancybox-group="button" href="{{$modelDetails->image??''}}">
                                 <img height="100" width="100" src="{{$modelDetails->image??''}}" />
                              </a>
                              @endif
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                     <div class="dataTables_wrapper ">
                       <div class="table-responsive">
                          <table class="table dataTable table-head-custom table-head-bg table-borderless table-vertical-center" id="taskTable">
                           <thead>
                            <tr class="text-uppercase">
                              <th class="">
                                 Title
                              </th>
                              <th class="">
                               Description
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                       @if($modelDetails->courseSpecification)
                       @foreach($modelDetails->courseSpecification as $k=> $val)
                       <tr>
                         <td>
                          <div class="text-dark-75 mb-1 font-size-lg">
                           {{$val->title}}
                        </div>
                     </td>
                     <td>
                       <div class="text-dark-75 mb-1 font-size-lg">
                        {!!$val->description!!}
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
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@stop
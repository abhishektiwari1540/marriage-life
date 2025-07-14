@extends('admin.layouts.layout')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
   <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
      <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
         <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">
               <h5 class="text-dark font-weight-bold my-1 mr-5">
                  View {{Config('constants.STAFF.STAFF_TITLE')}} </h5>
               <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                  <li class="breadcrumb-item">
                     <a href="{{ route('dashboard')}}" class="text-muted">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item">
                     <a href="{{ route($model.'.index')}}" class="text-muted"> {{Config('constants.STAFF.STAFF_TITLE')}}</a>
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
                        <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_1">
                           <span class="nav-text">
                              {{Config('constants.STAFF.STAFF_TITLE')}} Information
                           </span>
                        </a>
                     </li>

                  </ul>
               </div>
            </div>
            <div class="card-body px-0">
               <div class="tab-content px-10">
                  <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Name:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">{{ $modell->name ??'' }}</span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Email:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">{{ $modell->email ?? '' }}</span>
                        </div>
                     </div>
                     {{-- <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Phone Number:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">{{ $modell->phone_number ?? '' }}</span>
                        </div>
                     </div> --}}
                      {{-- <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Department:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">{{ DepartmentbyName($modell->department_id) ?? '' }}</span>
                        </div>
                     </div> --}}
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Designations:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">{{ DesignationbyName($modell->designation_id )??'' }}</span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Created On:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">{{ date(config("Reading.date_format"),strtotime($modell->created_at)) }}</span>
                        </div>
                     </div>
                     <div class="form-group row my-2">
                        <label class="col-4 col-form-label">Status:</label>
                        <div class="col-8">
                           <span class="form-control-plaintext font-weight-bolder">
                              @if($modell->is_active == 1)
                              <span class="label label-lg label-light-success label-inline">Activated</span>
                              @else
                              <span class="label label-lg label-light-danger label-inline">Deactivated</span>
                              @endif
                           </span>
                        </div>
                     </div>
                  </div>
                  <h3 class="mt-8 mb-8">Permissions</h3>
                  <label class="font-size-lg font-weight-bold checkbox mb-5">
                     <input type="checkbox" class="checkAll" />

                     <div id="accordion" role="tablist" class="accordion accordion-toggle-arrow">
                        <?php
                        $counter   =   0;
                        
                        
                        foreach ($aclModules as $aclModule) {
                        ?>
                           <div class="card mb-5 border-bottom">
                              <div class="card-header d-flex align-items-center" role="tab">
                                 <div class="ml-5">
                                    <label class="checkbox">
                                       <input type="text" name="data[{{$counter}}][value]" value=1  {{ ($aclModule->active == 1) ?  'checked' : '' }}>
                                       <input type="checkbox" name="data[{{$counter}}][value]" value=1  id ="{{$aclModule->id}}" class ="parent" Readonly {{ ($aclModule->active == 1) ?  'checked' : '' }}>
                                       <input type="hidden" name="data[{{$counter}}][department_id]" value="{{$aclModule->id}}">
                                       <span class="mr-2"></span>
                                    </label>
                                 </div>
                                 <a class="text-dark px-2 py-4 w-100" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$counter}}" aria-expanded="true" aria-controls="collapse{{$counter}}">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    {{strtoupper($aclModule->title ?? '')}}
                                 </a>
                              </div>
                              <div id="collapse{{$counter}}" class="collapse" data-parent="#accordion">
                                 <?php
                                 if (!empty($aclModule['sub_module'])) {
                                 ?>
                                    <div class="card-body ">
                                       <div class="">
                                          <?php
                                          $module_counter      =   0;
                                          foreach ($aclModule['sub_module'] as $subModule) {
                                          ?>
                                             <div class="font-size-lg font-weight-bold mb-3">{{!empty($subModule->title)?strtoupper($subModule->title):''}}</div>
                                             <div class="row">
                                                <?php
                                                $count   =   0;
                                                if (!$subModule['module']->isEmpty()) {
                                                   foreach ($subModule['module'] as $module) {
                                                      $count++;
                                                ?>
                                                      <div class="col-auto mb-5">
                                                         <label class="checkbox">
                                                         <input type="text" name="data[{{$counter}}][module][{{$module_counter}}][value]" value=1 class="children child.{{$aclModule->id}}" {{ ($module->active == 1) ? 'checked' : '' }}>
                                                         <input type="checkbox" name="data[{{$counter}}][module][{{$module_counter}}][value]" value=1  id ="{{$aclModule->id}}" class ="parent" Readonly {{ ($module->active == 1) ?  'checked' : '' }}>
   
                                                         <input type="hidden" name="data[{{$counter}}][id][{{$module_counter}}][id]">
                                                            <input type="hidden" name="data[{{$counter}}][department_module_id][{{$module_counter}}][department_module_id]" value="{{$subModule->id}}">
                                                            <span class="mr-2"></span>
                                                            {{$module->name}}
                                                         </label>
                                                      </div>
                                                   <?php
                                                      $module_counter++;
                                                   }
                                                   ?>
                                                   <td colspan="6-{{$count}}"></td>
                                                <?php
                                                } else {
                                                ?>
                                                   <td colspan="6"></td>
                                                <?php
                                                }
                                                ?>
                                             </div>
                                             <?php
                                          }
                                          if (!empty($aclModule['extModule'])) {
                                             $count   =   0;
                                             foreach ($aclModule['extModule'] as $subModule) {
                                                $count++;
                                             ?>
                                                <div class="font-size-lg font-weight-bold mb-3">
                                                {{strtoupper($subModule->title ?? '')}}
                                                </div>
                                                <div class="row">
                                                   <?php
                                                   if (!$subModule['module']->isEmpty()) {
                                                      foreach ($subModule['module'] as $module) {
                                                   ?>
                                                         <div class="col-auto mb-5">
                                                            <label class="checkbox">
                                                            <input type="text" name="data[{{$counter}}][module][{{$module_counter}}][value]" value=1 class="children child.{{$aclModule->id}}" {{ ($module->active == 1) ?  'checked' : '' }}>
                                                                <input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][id]" value="{{$module->id}}">
                                                                <input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][department_module_id]" value="{{$subModule->id}}">
                                                               <span class="mr-2"></span>
                                                               {{$module->name}}
                                                            </label>
                                                         </div>
                                                      <?php
                                                         $module_counter++;
                                                      }
                                                      ?>
                                                      <td colspan="6-{{$count}}"></td>
                                                   <?php
                                                   } else {
                                                   ?>
                                                      <td colspan="5"></td>
                                                   <?php
                                                   }
                                                   ?>
                                                </div>
                                          <?php
                                             }
                                          }
                                          ?>
                                       </div>
                                    <?php
                                 }
                                    ?>
                                    <?php
                                    if (isset($aclModule['parent_module_action'])  && (!$aclModule['parent_module_action']->isEmpty())) {
                                    ?>
                                       <div class="font-size-lg font-weight-bold mb-3"> {{$aclModule->title}} </div>
                                       <div class="row">
                                          <?php
                                          foreach ($aclModule['parent_module_action'] as $parentModule) {
                                          ?>
                                             <div class="col-auto mb-5">
                                                <label class="checkbox">
                                                <input type="text" name="data[{{$counter}}][module][{{$module_counter}}][value]" value=1 class="children child.{{$aclModule->id}}" {{ ($parentModule->active == 1) ?  'checked' : '' }}>
                                                <input type="checkbox" name="data[{{$counter}}][module][{{$module_counter}}][value]" value=1 class="children child.{{$aclModule->id}}" {{ ($parentModule->active == 1) ?  'checked' : '' }}>
                                                <input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][id]" value="{{$parentModule->id}}">
                                                <input type="hidden" name="data[{{$counter}}][module][{{$module_counter}}][department_module_id]" value="{{$aclModule->id}}">
                                                <span class="mr-2"></span>
                                                   {{$parentModule->name}}
                                                </label>
                                             </div>
                                          <?php
                                             $counter++;
                                          }
                                          ?>
                                       </div>
                                    <?php
                                    }
                                    ?>
                                    </div>
                              </div>
                           </div>
                        <?php
                           $counter++;
                        }
                        ?>
                     </div>
                     <!--end::Tab Content-->
               </div>
            </div>
            <!--end::Body-->
         </div>

      </div>
      <!--end::Container-->
   </div>
   <!--end::Entry-->
</div>
<!--end::Content-->
@stop
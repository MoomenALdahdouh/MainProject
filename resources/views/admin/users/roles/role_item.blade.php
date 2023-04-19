
<!--begin::Card header-->
<div class="card-header">
    <!--begin::Card title-->
    <div class="card-title">
        <h2 class="mb-0">{{$role->name}}</h2>
    </div>
    <!--end::Card title-->
</div>
<!--end::Card header-->
<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Permissions-->
    <div class="d-flex flex-column text-gray-600">
        @foreach($role->permissions as $permission)
            <div class="d-flex align-items-center py-2">
                <span class="bullet bg-primary me-3"></span>{{$permission->name}}
            </div>
        @endforeach
    </div>
    <!--end::Permissions-->
</div>
<!--end::Card body-->
<!--begin::Card footer-->
<div class="card-footer pt-0">
    <button type="button" class="btn btn-light btn-active-primary" data-bs-toggle="modal"
            data-bs-target="#kt_modal_update_role">Edit Role
    </button>
</div>
<!--end::Card footer-->
<!--begin::Modal - Update role-->
<div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Update Role</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                     data-kt-roles-modal-action="close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                      height="2" rx="1"
                                                                      transform="rotate(-45 6 17.3137)"
                                                                      fill="currentColor"/>
																<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                      transform="rotate(45 7.41422 6)"
                                                                      fill="currentColor"/>
															</svg>
														</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 my-7">
                <!--begin::Form-->
                <form id="form" class="form" method="POST"
                      action="{{route('admin.roles.update',$role->id)}}"
                      data-type="render">
                    @csrf
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll"
                         data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                         data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_update_role_header"
                         data-kt-scroll-wrappers="#kt_modal_update_role_scroll"
                         data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label for="name" class="fs-5 fw-bold form-label mb-2">
                                <span class="required">Role name</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input id="name" class="form-control form-control-solid"
                                   placeholder="Enter a role name" name="name" value="{{$role->name}}"/>
                            <!--end::Input-->
                            <div id="name_error"
                                 class="errors fv-plugins-message-container invalid-feedback text-danger">
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Permissions-->
                        <div class="fv-row">
                            <!--begin::Label-->
                            <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
                            <!--end::Label-->
                            <div id="permissions_error"
                                 class="errors fv-plugins-message-container invalid-feedback text-danger">
                            </div>
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-semibold">
                                    <!--begin::Table row-->
                                    <tr>
                                        <td class="text-gray-800">Administrator Access
                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="Allows a full access to the system"></i></td>
                                        <td>
                                            <!--begin::Checkbox-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="kt_roles_select_all"/>
                                                <span class="form-check-label"
                                                      for="kt_roles_select_all">Select all</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </td>
                                    </tr>
                                    <!--end::Table row-->
                                    <!--begin::Table row-->
                                    @foreach($permissions as $permission)
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Label-->
                                            <td class="text-gray-800">{{$permission->name}}</td>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <td>
                                                <!--begin::Wrapper-->
                                                <div class="d-flex">
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox"
                                                               value="{{$permission->name}}_read"
                                                               {{in_array($permission->name."_read",$role->permissions->pluck('name')->toArray())?"checked":""}}
                                                               name="permissions[{{$permission->name}}][read]"/>
                                                        <span class="form-check-label">Read</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox"
                                                               value="{{$permission->name}}_write"
                                                               {{in_array($permission->name."_write",$role->permissions->pluck('name')->toArray())?"checked":""}}
                                                               name="permissions[{{$permission->name}}][write]"/>
                                                        <span class="form-check-label">Write</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox"
                                                               value="{{$permission->name}}_create"
                                                               {{in_array($permission->name."_create",$role->permissions->pluck('name')->toArray())?"checked":""}}
                                                               name="permissions[{{$permission->name}}][create]"/>
                                                        <span class="form-check-label">Create</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox"
                                                               value="{{$permission->name}}_delete"
                                                               {{in_array($permission->name."_delete",$role->permissions->pluck('name')->toArray())?"checked":""}}
                                                               name="permissions[{{$permission->name}}][delete]"/>
                                                        <span class="form-check-label">Delete</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </td>
                                            <!--end::Options-->
                                        </tr>
                                        <!--end::Table row-->
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Permissions-->
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3"
                                data-kt-roles-modal-action="cancel">
                            Discard
                        </button>
                        <button id="submit_button" type="submit" class="btn btn-primary"
                                data-kt-roles-modal-action="submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
																<span
                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Update role-->

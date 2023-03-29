<!DOCTYPE html>
<html lang="{{app()->getLocale()}}"
      dir="{{app()->getLocale() == "en" ? "ltr": "rtl"}}">
@include("admin.layout.head")
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-aside-enabled="true"
      data-kt-app-aside-fixed="true" data-kt-app-aside-push-toolbar="true" data-kt-app-aside-push-footer="true"
      class="app-default">
@include("admin.layout._theme_mode")
@include("admin.layout.master")
@include("admin.layout._drawers")
@include("admin.layout._scrolltop")
@include("admin.layout._models")
@include("admin.layout.scripts")
</body>
<!--end::Body-->
</html>

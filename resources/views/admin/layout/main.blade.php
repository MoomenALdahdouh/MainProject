<!DOCTYPE html>
<html lang="{{app()->getLocale()}}"
      dir="{{app()->getLocale() == "en" ? "ltr": "rtl"}}">
<!--begin::Head-->
<head>
    <base href=""/>
    <title>Metronic @yield("title")</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description"
          content="@yield("description")"/>
    <meta name="keywords"
          content="@yield("keywords")"/>
    <meta property="og:locale" content="@yield("locale")"/>
    <meta property="og:type" content="@yield("og_type")"/>
    <meta property="og:title"
          content="@yield("og_title")"/>
    <meta property="og:url" content="@yield("og_url")"/>
    <meta property="og:site_name" content="@yield("og_site_name")"/>
    <meta name="author" content="@yield("author")"/>
    <meta name="keywords" content="@yield("keywords")"/>
    <meta name="copyright" content="@yield("copyright")"/>
    <!--end::Global Stylesheets Bundle-->
    @include("admin.layout.links")
</head>
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

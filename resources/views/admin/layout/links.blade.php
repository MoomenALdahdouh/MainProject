<link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
<link rel="shortcut icon" href="{{asset("assets/admin/media/logos/favicon.ico")}}"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
{{--<link href="{{asset("assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.css")}}" rel="stylesheet"
      type="text/css"/>--}}
<link href="{{asset("assets/admin/plugins/custom/datatables/datatables.bundle.css")}}" rel="stylesheet"
      type="text/css"/>
@if(app()->getLocale() == "en")
    <link href="{{asset("assets/admin/plugins/global/plugins.bundle.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/css/style.bundle.css")}}" rel="stylesheet" type="text/css"/>
@else
    <link href="{{asset("assets/admin/plugins/global/plugins.bundle.rtl.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/css/style.bundle.rtl.css")}}" rel="stylesheet" type="text/css"/>
@endif
@yield("css")

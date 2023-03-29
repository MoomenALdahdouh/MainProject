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

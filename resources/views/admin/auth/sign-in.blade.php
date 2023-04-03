<!DOCTYPE html>
<html lang="{{app()->getLocale()}}"
      dir="{{app()->getLocale() == "en" ? "ltr": "rtl"}}">
@include("admin.layout.head")
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="app-blank">
@include("admin.layout._theme_mode")
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
            <!--begin::Form-->
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <!--begin::Wrapper-->
                <div class="w-lg-500px p-10">
                    <!--begin::Form-->

                    <form class="form w-100" novalidate="novalidate" id="form"
                          data-kt-redirect-url="{{url()->previous()}}" action="{{route('admin.auth.login')}}"
                          method="POST">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                            <!--end::Title-->
                            <!--begin::Subtitle-->
                            <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                            <!--end::Subtitle=-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group=-->
                        <div class="form-floating fv-row mb-8">
                            <!--begin::Email-->
                            <input id="email" type="email" name="email" autocomplete="off" placeholder="Email"
                                   class="validator form-control" value="{{old('email')}}"/>
                            <label for="email">Email</label>
                            <div id="email_error"
                                 class="errors fv-plugins-message-container invalid-feedback text-danger">
                            </div>
                            <!--end::Email-->
                        </div>
                        <!--end::Input group=-->
                        <div class="form-floating fv-row mb-3">
                            <!--begin::Password-->
                            <input id="password" type="password" name="password" autocomplete="off"
                                   placeholder="Password"
                                   class="validator not_validator form-control"
                                   value="{{old('password')}}"/>
                            <label for="password">Password</label>
                            <div id="password_error"
                                 class="errors fv-plugins-message-container invalid-feedback text-danger">
                            </div>
                            <!--end::Password-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                            <div></div>
                            <!--begin::Link-->
                            <a href="../../demo39/dist/authentication/layouts/corporate/reset-password.html"
                               class="link-primary">Forgot Password ?</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Submit button-->
                        <div class="d-grid mb-10">
                            <button type="submit" id="submit_button" class="btn btn-primary">
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Sign In</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                        </div>
                        <!--end::Submit button-->
                        <!--begin::Sign up-->
                        <!--end::Sign up-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Form-->
            <!--begin::Footer-->
            <div class="w-lg-500px d-flex flex-stack px-10 mx-auto">
                <!--begin::Languages-->
                <div class="me-10">
                    <!--begin::Toggle-->
                    <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                            data-kt-menu-offset="0px, 0px">
                        <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3"
                             src="{{asset("assets/main/images/flags/united-states.svg")}}" alt=""/>
                        <span data-kt-element="current-lang-name" class="me-1">English</span>
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-muted rotate-180 m-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
										<path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="currentColor"/>
									</svg>
								</span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Toggle-->
                    <!--begin::Menu-->
                    <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7"
                        data-kt-menu="true" id="kt_auth_lang_menu">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1"
                                                 src="{{asset("assets/main/images/flags/united-states.svg")}}" alt=""/>
										</span>
                                <span data-kt-element="lang-name">English</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1"
                                                 src="{{asset("assets/main/images/flags/spain.svg")}}" alt=""/>
										</span>
                                <span data-kt-element="lang-name">Spanish</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1"
                                                 src="{{asset("assets/main/images/flags/germany.svg")}}" alt=""/>
										</span>
                                <span data-kt-element="lang-name">German</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1"
                                                 src="{{asset("assets/main/images/flags/japan.svg")}}" alt=""/>
										</span>
                                <span data-kt-element="lang-name">Japanese</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1"
                                                 src="{{asset("assets/main/images/flags/france.svg")}}" alt=""/>
										</span>
                                <span data-kt-element="lang-name">French</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Languages-->
                <!--begin::Links-->
                <div class="d-flex fw-semibold text-primary fs-base gap-5">
                    <a href="../../demo39/dist/pages/team.html" target="_blank">Terms</a>
                    <a href="../../demo39/dist/pages/pricing/column.html" target="_blank">Plans</a>
                    <a href="../../demo39/dist/pages/contact.html" target="_blank">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Body-->
        <!--begin::Aside-->
        <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
             style="background-image: url({{asset("assets/admin/images/auth-bg.png")}})">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                <!--begin::Logo-->
                <a href="../../demo39/dist/index.html" class="mb-0 mb-lg-12">
                    <img alt="Logo" src="assets/media/logos/custom-1.png" class="h-60px h-lg-75px"/>
                </a>
                <!--end::Logo-->
                <!--begin::Image-->
                <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                     src="{{asset("assets/admin/images/auth-screens.png")}}" alt=""/>
                <!--end::Image-->
                <!--begin::Title-->
                <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and
                    Productive</h1>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="d-none d-lg-block text-white fs-base text-center">In this kind of post,
                    <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a person
                    they’ve interviewed
                    <br/>and provides some background information about
                    <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their
                    <br/>work following this is a transcript of the interview.
                </div>
                <!--end::Text-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Aside-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
@include("admin.layout.scripts")
{{--<script src="{{asset("assets/admin/js/custom/authentication/sign-in/general.js")}}"></script>--}}
@include("admin.crud.js.sign-in")
</body>
<!--end::Body-->
</html>

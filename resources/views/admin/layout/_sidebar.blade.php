<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
     data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Wrapper-->
    <div id="kt_app_sidebar_wrapper" class="app-sidebar-wrapper hover-scroll-y my-5 my-lg-2" data-kt-scroll="true"
         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
         data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_sidebar_wrapper"
         data-kt-scroll-offset="5px">
        <!--begin::Sidebar menu-->
        <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
             class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary px-6 mb-5">
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
										<span class="menu-icon">
											<i class="fonticon-house fs-2"></i>
										</span>
										<span class="menu-title">Dashboards</span>
										<span class="menu-arrow"></span>
									</span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ url()->current() == url("/") ? "active" : ""}}" href="{{url("/")}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                            <span class="menu-title">Default</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ str_contains(url()->current(),url("blank")) ? "active" : ""}}"
                           href="{{url("blank")}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                            <span class="menu-title">blank</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--end:Menu item-->
                    <div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="../../demo39/dist/dashboards/bidding.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">Bidding</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <div class="menu-item">
                        <div class="menu-content">
                            <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed"
                               data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse"
                               data-kt-toggle-text="Show Less">
                                <span data-kt-toggle-text-target="true">Show 12 More</span>
                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                <span class="svg-icon toggle-on svg-icon-2 me-0">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                  rx="5" fill="currentColor"/>
															<rect x="6.0104" y="10.9247" width="12" height="2" rx="1"
                                                                  fill="currentColor"/>
														</svg>
													</span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                <span class="svg-icon toggle-off svg-icon-2 me-0">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                  rx="5" fill="currentColor"/>
															<rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                                                  transform="rotate(-90 10.8891 17.8033)"
                                                                  fill="currentColor"/>
															<rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                                                  fill="currentColor"/>
														</svg>
													</span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                    </div>
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
        </div>
        <!--end::Sidebar menu-->

        <!--begin::Teames-->
        <div class="app-sidebar-menu-secondary menu menu-rounded menu-column ps-5 pe-6">
            <!--begin::Heading-->
            <div class="menu-item menu-labels">
                <div class="menu-content d-flex flex-stack fw-bold text-gray-600 text-uppercase fs-7">
                    <span class="menu-heading ps-1">Labels</span>
                    <!--begin::Link-->
                    <a class="menu-btn ps-2" href="../../demo39/dist/authentication/layouts/corporate/sign-in.html">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-success">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                                          fill="currentColor"/>
													<rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                                          transform="rotate(-90 10.8891 17.8033)" fill="currentColor"/>
													<rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                                          fill="currentColor"/>
												</svg>
											</span>
                        <!--end::Svg Icon-->
                    </a>
                    <!--end::Link-->
                </div>
            </div>
            <!--end::Heading-->
            <!--begin::Separator-->
            <div class="app-sidebar-separator separator mx-5 mt-2 mb-2"></div>
            <!--end::Separator-->
            <!--begin::Menu Item-->
            <div class="menu-item">
                <!--begin::Menu link-->
                <a class="menu-link" href="../../demo39/dist/apps/projects/project.html">
                    <!--begin::Bullet-->
                    <span class="menu-icon ps-2">
											<span class="bullet bullet-dot h-10px w-10px bg-primary"></span>
										</span>
                    <!--end::Bullet-->
                    <!--begin::Title-->
                    <span class="menu-title text-gray-700 fw-bold fs-6">Google Ads</span>
                    <!--end::Title-->
                    <!--begin::Badge-->
                    <span class="menu-badge">
											<span class="badge badge-secondary">6</span>
										</span>
                    <!--end::Badge-->
                </a>
                <!--end::Menu link-->
            </div>
            <!--end::Menu Item-->
            <!--begin::Menu Item-->
            <div class="menu-item">
                <!--begin::Menu link-->
                <a class="menu-link" href="../../demo39/dist/apps/projects/project.html">
                    <!--begin::Bullet-->
                    <span class="menu-icon ps-2">
											<span class="bullet bullet-dot h-10px w-10px bg-success"></span>
										</span>
                    <!--end::Bullet-->
                    <!--begin::Title-->
                    <span class="menu-title text-gray-700 fw-bold fs-6">AirStoke App</span>
                    <!--end::Title-->
                    <!--begin::Badge-->
                    <span class="menu-badge">
											<span class="badge badge-secondary">2</span>
										</span>
                    <!--end::Badge-->
                </a>
                <!--end::Menu link-->
            </div>
            <!--end::Menu Item-->
            <!--begin::Menu Item-->
            <div class="menu-item">
                <!--begin::Menu link-->
                <a class="menu-link" href="../../demo39/dist/apps/projects/project.html">
                    <!--begin::Bullet-->
                    <span class="menu-icon ps-2">
											<span class="bullet bullet-dot h-10px w-10px bg-warning"></span>
										</span>
                    <!--end::Bullet-->
                    <!--begin::Title-->
                    <span class="menu-title text-gray-700 fw-bold fs-6">Internal Tasks</span>
                    <!--end::Title-->
                    <!--begin::Badge-->
                    <span class="menu-badge">
											<span class="badge badge-secondary">37</span>
										</span>
                    <!--end::Badge-->
                </a>
                <!--end::Menu link-->
            </div>
            <!--end::Menu Item-->
            <!--begin::Menu Item-->
            <div class="menu-item">
                <!--begin::Menu link-->
                <a class="menu-link" href="../../demo39/dist/apps/projects/project.html">
                    <!--begin::Bullet-->
                    <span class="menu-icon ps-2">
											<span class="bullet bullet-dot h-10px w-10px bg-danger"></span>
										</span>
                    <!--end::Bullet-->
                    <!--begin::Title-->
                    <span class="menu-title text-gray-700 fw-bold fs-6">Fitnes App</span>
                    <!--end::Title-->
                    <!--begin::Badge-->
                    <span class="menu-badge">
											<span class="badge badge-secondary">4</span>
										</span>
                    <!--end::Badge-->
                </a>
                <!--end::Menu link-->
            </div>
            <!--end::Menu Item-->
            <!--begin::Collapsible items-->
            <div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_projects_collapse">
                <!--begin::Menu Item-->
                <div class="menu-item">
                    <!--begin::Menu link-->
                    <a class="menu-link" href="../../demo39/dist/apps/projects/project.html">
                        <!--begin::Bullet-->
                        <span class="menu-icon ps-2">
												<span class="bullet bullet-dot h-10px w-10px bg-info"></span>
											</span>
                        <!--end::Bullet-->
                        <!--begin::Title-->
                        <span class="menu-title text-gray-700 fw-bold fs-6">Oppo CRM</span>
                        <!--end::Title-->
                        <!--begin::Badge-->
                        <span class="menu-badge">
												<span class="badge badge-secondary">12</span>
											</span>
                        <!--end::Badge-->
                    </a>
                    <!--end::Menu link-->
                </div>
                <!--end::Menu Item-->
                <!--begin::Menu Item-->
                <div class="menu-item">
                    <!--begin::Menu link-->
                    <a class="menu-link" href="../../demo39/dist/apps/projects/project.html">
                        <!--begin::Bullet-->
                        <span class="menu-icon ps-2">
												<span class="bullet bullet-dot h-10px w-10px bg-warning"></span>
											</span>
                        <!--end::Bullet-->
                        <!--begin::Title-->
                        <span class="menu-title text-gray-700 fw-bold fs-6">Finance Dispatch</span>
                        <!--end::Title-->
                        <!--begin::Badge-->
                        <span class="menu-badge">
												<span class="badge badge-secondary">25</span>
											</span>
                        <!--end::Badge-->
                    </a>
                    <!--end::Menu link-->
                </div>
                <!--end::Menu Item-->
            </div>
            <!--end::Collapsible items-->
            <!--begin::Collapse toggle-->
            <div class="menu-item">
                <!--begin::Toggle-->
                <a class="menu-link menu-collapse-toggle toggle collapsible collapsed" data-bs-toggle="collapse"
                   href="#kt_app_sidebar_menu_projects_collapse" data-kt-toggle-text="Show less">
										<span class="menu-icon ps-2">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon toggle-off svg-icon-4 svg-icon-gray-700 me-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
													<path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="currentColor"/>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr073.svg-->
											<span class="svg-icon toggle-on svg-icon-4 svg-icon-gray-700 me-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
													<path
                                                        d="M12.5657 11.3657L16.75 15.55C17.1642 15.9643 17.8358 15.9643 18.25 15.55C18.6642 15.1358 18.6642 14.4643 18.25 14.05L12.7071 8.50716C12.3166 8.11663 11.6834 8.11663 11.2929 8.50715L5.75 14.05C5.33579 14.4643 5.33579 15.1358 5.75 15.55C6.16421 15.9643 6.83579 15.9643 7.25 15.55L11.4343 11.3657C11.7467 11.0533 12.2533 11.0533 12.5657 11.3657Z"
                                                        fill="currentColor"/>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                    <!--begin::Title-->
                    <span class="menu-title text-gray-600 fw-semibold"
                          data-kt-toggle-text-target="true">Show more</span>
                    <!--end::Title-->
                </a>
                <!--end::Toggle-->
            </div>
            <!--end::Collapse toggle-->
        </div>
        <!--end::Teames-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Sidebar-->

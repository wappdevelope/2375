<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('app.name', 'Laravel') }}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="{{-- asset('favicon.ico') --}}" />

        {{-- bootstrap/jQuery --}}
        <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

        <!--begin::Main Stylesheets-->
        <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}" type="text/css" />
	</head>
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-grow-1 flex-stack">
							<!--begin::Header Logo-->
							<div class="d-flex align-items-center me-5">
                                <!--begin::Heaeder menu toggle-->
								<div class="d-lg-none btn btn-icon btn-active-color-primary w-30px h-30px ms-n2 me-3" id="kt_header_menu_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
								</div>

								<a href="#">
									<div class="d-flex">
										<img alt="Logo" src="{{-- asset('storage/img/logo.svg') --}}" class="h-30px h-lg-30px" />
									</div>
								</a>
							</div>

                            <!--begin::Topbar-->
							<div class="d-flex align-items-center">
								<!--begin::Topbar-->
								<div class="d-flex align-items-center flex-shrink-0">
                                    <!--begin::User-->
									<div class="d-flex align-items-center ms-3 ms-lg-4" id="kt_header_user_menu_toggle">
										<!--begin::Menu- wrapper-->
										<!--begin::User icon(remove this button to use user avatar as menu toggle)-->
										<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-30px h-30px w-lg-40px h-lg-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
													<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
												</svg>
											</span>

										</div>

										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="{{-- asset('storage/img/logo.svg') --}}" />
													</div>

													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bolder d-flex align-items-center fs-5">{{-- Auth::user()->name . ' ' . Auth::user()->surname --}}</div>
														<a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{-- Auth::user()->email --}}</a>
													</div>

												</div>
											</div>

											<!--begin::Menu separator-->
											<div class="separator my-2"></div>

											<!--begin::Menu item-->
											<div class="menu-item px-5 my-1">
												<a href="{{-- route('edit-admin') --}}" class="menu-link px-5">Account Settings</a>
											</div>

                                            <div class="menu-item px-5 my-1">
												<a href="{{-- route('password-update') --}}" class="menu-link px-5 my-1">Security</a>
											</div>

                                            <!--begin::Menu separator-->
											<div class="separator my-2"></div>

											<!--begin::Menu item-->
											<div class="menu-item px-5">
                                                <a href="{{-- route('logout') --}}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                                                <form id="logout-form" action="{{-- route('logout') --}}" method="POST">
                                                    @csrf
                                                </form>
											</div>

										</div>

									</div>
                                </div>
                            </div>

						</div>

						<!--begin::Separator-->
						<div class="separator"></div>

						<!--begin::Container-->
						<div class="header-menu-container container-xxl d-flex flex-stack h-lg-75px" id="kt_header_nav">
							<!--begin::Menu wrapper-->
							<div class="header-menu flex-column flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
								<!--begin::Menu-->
								<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
									<div class="menu-item here show menu-lg-down-accordion me-lg-1">
										<a class="menu-link py-3" href="{{-- route('administrator') --}}">
											<span class="menu-title">Dashboard</span>
											<span class="menu-arrow d-lg-none"></span>
										</a>
                                    </div>

                                    <div class="menu-item here show menu-lg-down-accordion me-lg-1">
										<a class="menu-link py-3" href="{{-- route('html-content') --}}">
											<span class="menu-title">HTML content</span>
											<span class="menu-arrow d-lg-none"></span>
										</a>
                                    </div>

                                    <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
										<a class="menu-link py-3" href="">
											<span class="menu-title">Users</span>
											<span class="menu-arrow d-lg-none"></span>
										</a>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="{{-- route('admin-hosts') --}}">
													<span class="menu-icon">
														<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
														<span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                                            </svg>
														</span>

													</span>
													<span class="menu-title">Hosts</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link py-3" href="{{-- route('admin-users') --}}">
													<span class="menu-icon">
														<!--begin::Svg Icon | path: icons/duotune/general/gen009.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                                            </svg>
														</span>

													</span>
													<span class="menu-title">Students</span>
												</a>
											</div>
										</div>
									</div>

                                    <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
										<a class="menu-link py-3" href="">
											<span class="menu-title">Contact Us</span>
											<span class="menu-arrow d-lg-none"></span>
										</a>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="{{-- route('contact-us-questions') --}}">
													<span class="menu-icon">
														<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black"></path>
																<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black"></path>
															</svg>
														</span>

													</span>
													<span class="menu-title">New questions</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link py-3" href="{{-- route('answered') --}}">
													<span class="menu-icon">
														<!--begin::Svg Icon | path: icons/duotune/general/gen009.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black"></path>
																<rect x="6" y="12" width="7" height="2" rx="1" fill="black"></rect>
																<rect x="6" y="7" width="12" height="2" rx="1" fill="black"></rect>
															</svg>
														</span>

													</span>
													<span class="menu-title">Answered</span>
												</a>
											</div>
										</div>
									</div>

                                    <div class="menu-item here show menu-lg-down-accordion me-lg-1">
										<a class="menu-link py-3" href="{{-- route('sort-courses') --}}">
											<span class="menu-title">Sort Courses</span>
											<span class="menu-arrow d-lg-none"></span>
										</a>
                                    </div>

                                    <div class="menu-item here show menu-lg-down-accordion me-lg-1">
										<a class="menu-link py-3" href="{{-- route('bought-courses') --}}">
											<span class="menu-title">Bought Courses</span>
											<span class="menu-arrow d-lg-none"></span>
										</a>
                                    </div>

                                    <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
										<a class="menu-link py-3" href="">
											<span class="menu-title">Art Shop</span>
											<span class="menu-arrow d-lg-none"></span>
										</a>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="{{-- route('add-art') --}}">
													<span class="menu-icon">
														<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21 18.3V4H20H5C4.4 4 4 4.4 4 5V20C10.9 20 16.7 15.6 19 9.5V18.3C18.4 18.6 18 19.3 18 20C18 21.1 18.9 22 20 22C21.1 22 22 21.1 22 20C22 19.3 21.6 18.6 21 18.3Z" fill="black"></path>
																<path d="M22 4C22 2.9 21.1 2 20 2C18.9 2 18 2.9 18 4C18 4.7 18.4 5.29995 18.9 5.69995C18.1 12.6 12.6 18.2 5.70001 18.9C5.30001 18.4 4.7 18 4 18C2.9 18 2 18.9 2 20C2 21.1 2.9 22 4 22C4.8 22 5.39999 21.6 5.79999 20.9C13.8 20.1 20.1 13.7 20.9 5.80005C21.6 5.40005 22 4.8 22 4Z" fill="black"></path>
															</svg>
														</span>

													</span>
													<span class="menu-title">Add Art to shop</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link py-3" href="{{-- route('bought-arts') --}}">
													<span class="menu-icon">
														<!--begin::Svg Icon | path: icons/duotune/general/gen009.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black"></path>
																<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black"></path>
																<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black"></path>
															</svg>
														</span>

													</span>
													<span class="menu-title">Bought Arts</span>
												</a>
											</div>
                                            <div class="menu-item">
												<a class="menu-link py-3" href="{{-- route('shiped-arts') --}}">
													<span class="menu-icon">
														<!--begin::Svg Icon | path: icons/duotune/general/gen009.svg-->
														<span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z" fill="black"/>
                                                                <path opacity="0.3" d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z" fill="black"/>
                                                            </svg>
                                                        </span>

													</span>
													<span class="menu-title">Shiped Arts</span>
												</a>
											</div>
										</div>
									</div>

                                    <div class="menu-item here show menu-lg-down-accordion me-lg-1">
										<a class="menu-link py-3" href="{{-- route('blog') --}}">
											<span class="menu-title">Blog</span>
											<span class="menu-arrow d-lg-none"></span>
										</a>
                                    </div>

								</div>

							</div>

						</div>

					</div>

					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
                            @yield('admin-content')
                        </div>

                    </div>

				</div>

			</div>

		</div>

		<!--begin::Javascript-->
		<script src="{{ asset('admin/js/plugins.bundle.js') }}"></script>
		<script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
	</body>
</html>

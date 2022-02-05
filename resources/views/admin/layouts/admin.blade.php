<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('app.name', 'Laravel') }}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

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
										<img alt="Logo" src="{{ asset('storage/images/IGDL.png') }}" class="h-30px h-lg-30px" />
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
											<div class="menu-item px-5 my-1">
												<a href="{{ route('edit') }}" class="menu-link px-5">Account Settings</a>
											</div>

                                            <div class="menu-item px-5 my-1">
												<a href="{{ route('password-update') }}" class="menu-link px-5 my-1">Security</a>
											</div>

                                            <!--begin::Menu separator-->
											<div class="separator my-2"></div>

											<!--begin::Menu item-->
											<div class="menu-item px-5">
                                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
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
						<div class="header-menu-container container-xxl d-flex flex-stack h-lg-75px" id="kt_header_nav"></div>

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

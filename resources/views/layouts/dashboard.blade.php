
<!DOCTYPE html>

<html lang="pt-AO">

    <head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />

        <link href="{{ asset('dashboard/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('dashboard/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		
	</head>

	
	
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		
		
		<div class="d-flex flex-column flex-root">
			
			<div class="page d-flex flex-row flex-column-fluid">
				
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					
					<div id="kt_header" style="" class="header align-items-stretch">
						
						<div class="container-xxl d-flex align-items-stretch justify-content-between">
							
							
							
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
								<a href="{{ Auth::user()->rule_id == 1 ? route('doctor.index') :  route('patient.index') }}">
									<img alt="Logo" src="{{ asset('site/assets/image/baixados (1).jpg') }}" class="h-20px h-lg-30px" />
								</a>
							</div>
							
							
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									
									<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
										
										<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
											<div class="menu-item me-lg-1">
												<a class="menu-link py-3" href="{{ Auth::user()->rule_id == 1 ? route('doctor.index') :  route('patient.index') }}">
													<span class="menu-title">Home</span>
												</a>
											</div>
										</div>
										
									</div>
									
								</div>
								
								
								<div class="d-flex align-items-stretch flex-shrink-0">
									
									<div class="d-flex align-items-stretch flex-shrink-0">
										
										<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
											
											<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
												<img src="{{ asset('dashboard/assets/media/avatars/150-26.jpg') }}" alt="user" />
											</div>
											
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
												
												<div class="menu-item px-3">
													<div class="menu-content d-flex align-items-center px-3">
														
														<div class="symbol symbol-50px me-5">
															<img alt="Logo" src="{{ asset('dashboard/assets/media/avatars/150-26.jpg') }}" />
														</div>
														
														
														<div class="d-flex flex-column">
															<div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->first_name .' '.  Auth::user()->last_name }} 
															@if (Auth::user()->rule_id == 1)
																<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Doctor</span></div>
															@endif
															@if (Auth::user()->rule_id == 2)
																<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Paciente</span></div>
															@endif
															@if (Auth::user()->rule_id == 3)
																<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Admin</span></div>
															@endif
															<a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
														</div>
														
													</div>
												</div>
												
												
												<div class="separator my-2"></div>
												
												<div class="menu-item px-5">
													<a href="{{ route('site.index') }}" class="menu-link px-5">Pagina Inicial</a>
													<a href="{{ route('logout') }}" class="menu-link px-5">Sair</a>
												</div>
												
											</div>
											
											
										</div>
										
										
										<div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
											<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
												
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black" />
														<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black" />
													</svg>
												</span>
												
											</div>
										</div>
										
									</div>
									
								</div>
								
							</div>
							
						</div>
						
					</div>
					
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						
						
						<div class="post d-flex flex-column-fluid" id="kt_post">
							
							<div id="kt_content_container" class="container-xxl">
                                @yield('content')
							</div>
							
						</div>
						
					</div>
			
				</div>
				
			</div>
			
		</div>
        
		<script src="{{ asset('dashboard/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('dashboard/assets/js/scripts.bundle.js') }}"></script>

	</body>
	
</html>
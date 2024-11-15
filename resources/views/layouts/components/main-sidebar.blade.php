
			<aside class="app-sidebar" id="sidebar">

				<!-- Start::main-sidebar-header -->
				<div class="main-sidebar-header">
					<a href="{{route('admin.dashboard')}}" class="header-logo">
						<img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
						<img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="toggle-logo">
						<img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
						<img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="toggle-dark">
						<img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt="logo" class="desktop-white">
					</a>
				</div>
				<!-- End::main-sidebar-header -->

				<!-- Start::main-sidebar -->
				<div class="main-sidebar" id="sidebar-scroll">

					<!-- Start::nav -->
					<nav class="main-menu-container nav nav-pills flex-column sub-open">
						<div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
								height="24" viewBox="0 0 24 24">
								<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
							</svg></div>
						<ul class="main-menu">
							<!-- Start::slide__category -->
							<a href="{{route('admin.dashboard')}}"><li class="slide__category"><span class="category-name">Dashboard</span></li></a>
							<li class="slide__category"><span class="category-name">Main</span></li>
							<!-- End::slide__category -->

							<li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
									<span class="side-menu__label">Master Management</span>
									<i class="fe fe-chevron-right side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<!-- <li class="slide">
										<a href="{{route('admin.state.index')}}" class="side-menu__item">States</a>
									</li> -->
									<li class="slide">
										<a href="{{url('index')}}" class="side-menu__item">Cities</a>
									</li>
								</ul>
							</li>
							<!-- Start::slide -->
							<li class="slide has-sub {{ request()->is('admin/leads*') 
                            ? 'open active' 
                            : '' }}">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/><path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/></svg>
									<span class="side-menu__label">Lead Management</span>
									<i class="fe fe-chevron-right side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1 {{ request()->is('admin/leads*') ? 'active' : '' }}">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0);">Menu Levels</a>
									</li>
									<li class="slide {{ request()->is('admin/leads*')? 'active' : '' }}">
										<a href="{{route('admin.leads.index')}}" class="side-menu__item">Leads</a>
									</li>
									<li class="slide">
										<a href="javascript:void(0);" class="side-menu__item">Lead Analytics</a>
									</li>
								</ul>
							</li>
							<li class="slide has-sub {{ request()->is('admin/hotel*') 
                            ? 'open active' 
                            : '' }}">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z" opacity=".3"/><path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z"/></svg>
									<span class="side-menu__label">Hotel Management</span>
									<i class="fe fe-chevron-right side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1 {{ request()->is('admin/hotel*') ? 'active' : '' }}">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0);">Menu Levels</a>
									</li>
									<li class="slide {{ request()->is('admin/hotel*')? 'active' : '' }}">
										<a href="{{route('admin.hotel.index')}}" class="side-menu__item">Hotels</a>
									</li>
									<li class="slide">
										<a href="{{route('admin.state.index')}}" class="side-menu__item">Hotel Destinations</a>
									</li>
									<li class="slide">
										<a href="{{route('admin.division.index')}}" class="side-menu__item">Hotel Divisions</a>
									</li>
									<li class="slide">
										<a href="{{route('admin.category.index')}}" class="side-menu__item">Hotel Categories</a>
									</li> 
									<li class="slide">
										<a href="{{route('admin.ammenity.index')}}" class="side-menu__item">Hotel Ammenity</a>
									</li>
									<li class="slide">
										<a href="javascript:void(0);" class="side-menu__item">Hotel Meal Plans</a>
									</li>
									<li class="slide {{ request()->is('admin/hotel-seasion-plan')? 'active' : '' }}">
										<a href="{{route('admin.hotel_seasion_plan')}}" class="side-menu__item">Hotel Seasion Plans</a>
									</li>
								</ul>
							</li>
							<!-- End::slide -->

								<!-- Start::slide__category -->
								{{-- <li class="slide__category"><span class="category-name">Pages</span></li> --}}
								<!-- End::slide__category -->
								<!-- Start::slide -->
								{{-- <li class="slide has-sub">
									<a href="javascript:void(0);" class="side-menu__item">
										<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="side-menu__icon" viewBox="0 0 24 24" ><g></g><g><g/><g><path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M3,18.5V7 c1.1-0.35,2.3-0.5,3.5-0.5c1.34,0,3.13,0.41,4.5,0.99v11.5C9.63,18.41,7.84,18,6.5,18C5.3,18,4.1,18.15,3,18.5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.34,0-3.13,0.41-4.5,0.99V7.49c1.37-0.59,3.16-0.99,4.5-0.99c1.2,0,2.4,0.15,3.5,0.5V18.5z"/><path d="M11,7.49C9.63,6.91,7.84,6.5,6.5,6.5C5.3,6.5,4.1,6.65,3,7v11.5C4.1,18.15,5.3,18,6.5,18 c1.34,0,3.13,0.41,4.5,0.99V7.49z" opacity=".3"/></g><g><path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,10.69,16.18,10.5,17.5,10.5z"/><path d="M17.5,13.16c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,13.36,16.18,13.16,17.5,13.16z"/><path d="M17.5,15.83c0.88,0,1.73,0.09,2.5,0.26v-1.52c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,16.02,16.18,15.83,17.5,15.83z"/></g></g></svg>
										<span class="side-menu__label">Pages</span>
										<i class="fe fe-chevron-right side-menu__angle"></i>
									</a>
									<ul class="slide-menu child1">
										<li class="slide side-menu__label1">
											<a href="javascript:void(0);">Pages</a>
										</li>
										<li class="slide">
											<a href="{{url('profile')}}" class="side-menu__item">Profile</a>
										</li>
										<li class="slide">
											<a href="{{url('about-us')}}" class="side-menu__item">About-Us</a>
										</li>
										<li class="slide">
											<a href="{{url('reviews')}}" class="side-menu__item">Review</a>
										</li>
										<li class="slide">
											<a href="{{url('team')}}" class="side-menu__item">Team</a>
										</li>
										<li class="slide has-sub">
											<a href="javascript:void(0);" class="side-menu__item">Invoice
												<i class="fe fe-chevron-right side-menu__angle"></i></a>
											<ul class="slide-menu child2">
												<li class="slide">
													<a href="{{url('create-invoice')}}" class="side-menu__item">Create Invoice</a>
												</li>
												<li class="slide">
													<a href="{{url('invoice-details')}}" class="side-menu__item">Invoice Details</a>
												</li>
												<li class="slide">
													<a href="{{url('invoice-list')}}" class="side-menu__item">Invoice List</a>
												</li>
											</ul>
										</li>
										<li class="slide">
											<a href="{{url('pricing')}}" class="side-menu__item">Pricing</a>
										</li>
										<li class="slide">
											<a href="{{url('gallery')}}" class="side-menu__item">Gallery</a>
										</li>
										<li class="slide">
											<a href="{{url('todolist')}}" class="side-menu__item">TodoList</a>
										</li>
										<li class="slide has-sub">
											<a href="javascript:void(0);" class="side-menu__item">Task
												<i class="fe fe-chevron-right side-menu__angle"></i></a>
											<ul class="slide-menu child2">
												<li class="slide">
													<a href="{{url('task-kanban-board')}}" class="side-menu__item">Kanban Board</a>
												</li>
												<li class="slide">
													<a href="{{url('task-list-view')}}" class="side-menu__item">List View</a>
												</li>
												<li class="slide">
													<a href="{{url('task-details')}}" class="side-menu__item">Task Details</a>
												</li>
											</ul>
										</li>
										<li class="slide">
											<a href="{{url('faqs')}}" class="side-menu__item">Faqs</a>
										</li>
										<li class="slide">
											<a href="{{url('emptypage')}}" class="side-menu__item">Empty</a>
										</li>
										<li class="slide has-sub">
											<a href="javascript:void(0);" class="side-menu__item">Mail
												<i class="fe fe-chevron-right side-menu__angle"></i></a>
											<ul class="slide-menu child2">
												<li class="slide">
													<a href="{{url('mail')}}" class="side-menu__item">Mail</a>
												</li>
												<li class="slide">
													<a href="{{url('mail-settings')}}" class="side-menu__item">Mail Settings</a>
												</li>
												<li class="slide">
													<a href="{{url('chat')}}" class="side-menu__item">Chat</a>
												</li>
											</ul>
										</li>
										<li class="slide has-sub">
											<a href="javascript:void(0);" class="side-menu__item">Ecommerce
												<i class="fe fe-chevron-right side-menu__angle"></i></a>
											<ul class="slide-menu child2">
												<li class="slide">
													<a href="{{url('products')}}" class="side-menu__item">Products</a>
												</li>
												<li class="slide">
													<a href="{{url('products-list')}}" class="side-menu__item">Products List</a>
												</li>
												<li class="slide">
													<a href="{{url('add-products')}}" class="side-menu__item">Add Products</a>
												</li>
												<li class="slide">
													<a href="{{url('edit-products')}}" class="side-menu__item">Edit Products</a>
												</li>
												<li class="slide">
													<a href="{{url('product-details')}}" class="side-menu__item">Product Details</a>
												</li>
												<li class="slide">
													<a href="{{url('orders')}}" class="side-menu__item">Orders</a>
												</li>
												<li class="slide">
													<a href="{{url('order-details')}}" class="side-menu__item">Order Details</a>
												</li>
												<li class="slide">
													<a href="{{url('product-cart')}}" class="side-menu__item">Cart</a>
												</li>
												<li class="slide">
													<a href="{{url('check-out')}}" class="side-menu__item">Check-out</a>
												</li>
												<li class="slide">
													<a href="{{url('wish-list')}}" class="side-menu__item">Wish List</a>
												</li>
											</ul>
										</li>
										<li class="slide has-sub">
											<a href="javascript:void(0);" class="side-menu__item">Custom Pages
												<i class="fe fe-chevron-right side-menu__angle"></i>
											</a>
											<ul class="slide-menu child2">
												<li class="slide">
													<a href="{{url('comingsoon')}}" class="side-menu__item">Coming Soon</a>
												</li>
												<li class="slide has-sub">
													<a href="javascript:void(0);" class="side-menu__item">Create Password
														<i class="fe fe-chevron-right side-menu__angle"></i></a>
													<ul class="slide-menu child3">
														<li class="slide">
															<a href="{{url('create-password-basic')}}" class="side-menu__item">Basic</a>
														</li>
														<li class="slide">
															<a href="{{url('create-password-cover')}}" class="side-menu__item">Cover</a>
														</li>
													</ul>
												</li>
												<li class="slide has-sub">
													<a href="javascript:void(0);" class="side-menu__item">Sign In
														<i class="fe fe-chevron-right side-menu__angle"></i></a>
													<ul class="slide-menu child3">
														<li class="slide">
															<a href="{{url('sign-in-basic')}}" class="side-menu__item">Basic</a>
														</li>
														<li class="slide">
															<a href="{{url('sign-in-cover')}}" class="side-menu__item">Cover</a>
														</li>
													</ul>
												</li>
												<li class="slide has-sub">
													<a href="javascript:void(0);" class="side-menu__item">Sign Up
														<i class="fe fe-chevron-right side-menu__angle"></i></a>
													<ul class="slide-menu child3">
														<li class="slide">
															<a href="{{url('sign-up-basic')}}" class="side-menu__item">Basic</a>
														</li>
														<li class="slide">
															<a href="{{url('sign-up-cover')}}" class="side-menu__item">Cover</a>
														</li>
													</ul>
												</li>
												<li class="slide has-sub">
													<a href="javascript:void(0);" class="side-menu__item">Reset Password
														<i class="fe fe-chevron-right side-menu__angle"></i></a>
													<ul class="slide-menu child3">
														<li class="slide">
															<a href="{{url('reset-password-basic')}}" class="side-menu__item">Basic</a>
														</li>
														<li class="slide">
															<a href="{{url('reset-password-cover')}}" class="side-menu__item">Cover</a>
														</li>
													</ul>
												</li>
												<li class="slide has-sub">
													<a href="javascript:void(0);" class="side-menu__item">Lockscreen
														<i class="fe fe-chevron-right side-menu__angle"></i></a>
													<ul class="slide-menu child3">
														<li class="slide">
															<a href="{{url('lockscreen-basic')}}" class="side-menu__item">Basic</a>
														</li>
														<li class="slide">
															<a href="{{url('lockscreen-cover')}}" class="side-menu__item">Cover</a>
														</li>
													</ul>
												</li>
												<li class="slide has-sub">
													<a href="javascript:void(0);" class="side-menu__item">Two Step Verification
														<i class="fe fe-chevron-right side-menu__angle"></i></a>
													<ul class="slide-menu child3">
														<li class="slide">
															<a href="{{url('two-step-verfication-basic')}}" class="side-menu__item">Basic</a>
														</li>
														<li class="slide">
															<a href="{{url('two-step-verfication-cover')}}" class="side-menu__item">Cover</a>
														</li>
													</ul>
												</li>
												<li class="slide">
													<a href="{{url('maintanace')}}" class="side-menu__item">Under Maintenance</a>
												</li>
												<li class="slide has-sub">
													<a href="javascript:void(0);" class="side-menu__item">Error
														<i class="fe fe-chevron-right side-menu__angle"></i></a>
													<ul class="slide-menu child3">
														<li class="slide">
															<a href="{{url('error404')}}" class="side-menu__item">404 Error</a>
														</li>
														<li class="slide">
															<a href="{{url('error500')}}" class="side-menu__item">500 Error</a>
														</li>
														<li class="slide">
															<a href="{{url('error501')}}" class="side-menu__item">501 Error</a>
														</li>
													</ul>
												</li>
										
											</ul>
										</li>
										<li class="slide">
											<a href="{{url('terms')}}" class="side-menu__item">Terms &amp; Conditions</a>
										</li>
									</ul>
								</li> --}}
								<!-- End::slide -->

							<!-- Start::slide__category -->
							{{-- <li class="slide__category"><span class="category-name">Components</span></li> --}}
							<!-- End::slide__category -->
							<!-- Start::slide -->
							{{-- <li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
									<span class="side-menu__label">Forms</span>
									<i class="fe fe-chevron-right side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0);">Forms</a>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Form Elements
											<i class="fe fe-chevron-right side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="{{url('form-inputs')}}" class="side-menu__item">Inputs</a>
											</li>
											<li class="slide">
												<a href="{{url('form-check-radios')}}" class="side-menu__item">Checks & Radios</a>
											</li>
											<li class="slide">
												<a href="{{url('form-input-group')}}" class="side-menu__item">Input Group</a>
											</li>
											<li class="slide">
												<a href="{{url('form-select')}}" class="side-menu__item">Form Select</a>
											</li>
											<li class="slide">
												<a href="{{url('form-file-uploads')}}" class="side-menu__item">File Uploads</a>
											</li>
											<li class="slide">
												<a href="{{url('form-datetime-pickers')}}" class="side-menu__item">Date,Time Picker</a>
											</li>
											<li class="slide">
												<a href="{{url('form-color-pickers')}}" class="side-menu__item">Color Pickers</a>
											</li>
											<li class="slide">
												<a href="{{url('advanced-select')}}" class="side-menu__item">Advanced Select</a>
											</li>
											<li class="slide">
												<a href="{{url('inputnumber')}}" class="side-menu__item">Input Number</a>
											</li>
											<li class="slide">
												<a href="{{url('passwords')}}" class="side-menu__item">Passwords</a>
											</li>
											<li class="slide">
												<a href="{{url('counters')}}" class="side-menu__item">Counters &amp; Markup</a>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a href="{{url('form-layout')}}" class="side-menu__item">Form Layouts</a>
									</li>
									<li class="slide has-sub">
										<a href="javascript:void(0);" class="side-menu__item">Form Editors
											<i class="fe fe-chevron-right side-menu__angle"></i></a>
										<ul class="slide-menu child2">
											<li class="slide">
												<a href="{{url('quill-editor')}}" class="side-menu__item">Quill Editor</a>
											</li>
										</ul>
									</li>
									<li class="slide">
										<a href="{{url('form-validation')}}" class="side-menu__item">Validation</a>
									</li>
									<li class="slide">
										<a href="{{url('form-select2')}}" class="side-menu__item">Select2</a>
									</li>
								</ul>
							</li> --}}
							<!-- End::slide -->

							<!-- Start::slide -->
							{{-- <li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3"/><path d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z"/></svg>
									<span class="side-menu__label">Tables</span>
									<i class="fe fe-chevron-right side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0);">Tables</a>
									</li>
									<li class="slide">
										<a href="{{url('tables')}}" class="side-menu__item">Tables</a>
									</li>
									<li class="slide">
										<a href="{{url('grid-tables')}}" class="side-menu__item">Grid JS Tables</a>
									</li>
									<li class="slide">
										<a href="{{url('data-tables')}}" class="side-menu__item">Data Tables</a>
									</li>
									<li class="slide">
										<a href="{{url('edittable')}}" class="side-menu__item">Edit Table</a>
									</li>
								</ul>
							</li> --}}
							<!-- End::slide -->

							<!-- Start::slide -->
							{{-- <li class="slide">
								<a href="{{url('landing')}}" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4.02C7.6 4.02 4.02 7.6 4.02 12S7.6 19.98 12 19.98s7.98-3.58 7.98-7.98S16.4 4.02 12 4.02zM11.39 19v-5.5H8.25l4.5-8.5v5.5h3L11.39 19z" opacity=".3"/><path d="M12 2.02c-5.51 0-9.98 4.47-9.98 9.98s4.47 9.98 9.98 9.98 9.98-4.47 9.98-9.98S17.51 2.02 12 2.02zm0 17.96c-4.4 0-7.98-3.58-7.98-7.98S7.6 4.02 12 4.02 19.98 7.6 19.98 12 16.4 19.98 12 19.98zM12.75 5l-4.5 8.5h3.14V19l4.36-8.5h-3V5z"/></svg>
									<span class="side-menu__label">Landing Page</span>
								</a>
							</li> --}}
							<!-- End::slide -->

							<!-- Start::slide -->
							{{-- <li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4C9.24 4 7 6.24 7 9c0 2.85 2.92 7.21 5 9.88 2.11-2.69 5-7 5-9.88 0-2.76-2.24-5-5-5zm0 7.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" opacity=".3"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg>
									<span class="side-menu__label">Maps</span>
									<i class="fe fe-chevron-right side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0);">Maps</a>
									</li>
									<li class="slide">
										<a href="{{url('google-maps')}}" class="side-menu__item">Google Maps</a>
									</li>
									<li class="slide">
										<a href="{{url('leaflet-maps')}}" class="side-menu__item">Leaflet Maps</a>
									</li>
									<li class="slide">
										<a href="{{url('vector-maps')}}" class="side-menu__item">Vector Maps</a>
									</li>
								</ul>
							</li> --}}
							<!-- End::slide -->

							<!-- Start::slide -->
							{{-- <li class="slide has-sub">
								<a href="javascript:void(0);" class="side-menu__item">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.9 19.91c.36.05.72.09 1.1.09 2.18 0 4.16-.88 5.61-2.3L14.89 13l-3.99 6.91zm-1.04-.21l2.71-4.7H4.59c.93 2.28 2.87 4.03 5.27 4.7zM8.54 12L5.7 7.09C4.64 8.45 4 10.15 4 12c0 .69.1 1.36.26 2h5.43l-1.15-2zm9.76 4.91C19.36 15.55 20 13.85 20 12c0-.69-.1-1.36-.26-2h-5.43l3.99 6.91zM13.73 9h5.68c-.93-2.28-2.88-4.04-5.28-4.7L11.42 9h2.31zm-3.46 0l2.83-4.92C12.74 4.03 12.37 4 12 4c-2.18 0-4.16.88-5.6 2.3L9.12 11l1.15-2z" opacity=".3"/><path d="M12 22c5.52 0 10-4.48 10-10 0-4.75-3.31-8.72-7.75-9.74l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10zm0-2c-.38 0-.74-.04-1.1-.09L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20zm8-8c0 1.85-.64 3.55-1.7 4.91l-4-6.91h5.43c.17.64.27 1.31.27 2zm-.59-3h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM12 4c.37 0 .74.03 1.1.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4zm-8 8c0-1.85.64-3.55 1.7-4.91L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12zm6.27 3h2.3l-2.71 4.7c-2.4-.67-4.35-2.42-5.28-4.7h5.69z"/></svg>
									<span class="side-menu__label">Utilities</span>
									<i class="fe fe-chevron-right side-menu__angle"></i>
								</a>
								<ul class="slide-menu child1">
									<li class="slide side-menu__label1">
										<a href="javascript:void(0);">Utilities</a>
									</li>
									<li class="slide">
										<a href="{{url('borders')}}" class="side-menu__item">Borders</a>
									</li>
									<li class="slide">
										<a href="{{url('colors')}}" class="side-menu__item">Colors</a>
									</li>
									<li class="slide">
										<a href="{{url('columns')}}" class="side-menu__item">Columns</a>
									</li>
									<li class="slide">
										<a href="{{url('flex')}}" class="side-menu__item">Flex</a>
									</li>
									<li class="slide">
										<a href="{{url('grids')}}" class="side-menu__item">Grid</a>
									</li>
								</ul>
							</li> --}}
							<!-- End::slide -->
						</ul>
						<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
					</nav>
					<!-- End::nav -->

				</div>
				<!-- End::main-sidebar -->

			</aside>

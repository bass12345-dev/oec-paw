		<!--begin::Sidebar-->
								<div class="flex-column flex-lg-row-auto w-100 w-xl-325px mb-10">
									<!--begin::Card-->
									<div class="card card-flush" data-kt-sticky="true" data-kt-sticky-name="account-navbar" data-kt-sticky-offset="{default: false, xl: '80px'}" data-kt-sticky-width="{lg: '250px', xl: '325px'}" data-kt-sticky-left="auto" data-kt-sticky-top="90px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
										<!--begin::Card header-->
										<div class="card-header justify-content-end">
									
											<!--end::Toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0 p-10">
											<!--begin::Summary-->
											<div class="d-flex flex-center flex-column mb-10">
												<!--begin::Avatar-->
												<div class="symbol mb-3 symbol-100px symbol-circle">
													<img alt="Pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAM1BMVEXk5ueutLeqsbTn6eqpr7PJzc/j5ebf4eLZ3N2wtrnBxsjN0NLGysy6v8HT1tissra8wMNxTKO9AAAFDklEQVR4nO2d3XqDIAxAlfivoO//tEOZWzvbVTEpic252W3PF0gAIcsyRVEURVEURVEURVEURVEURVEURVEURVEURVEURflgAFL/AirAqzXO9R7XNBVcy9TbuMHmxjN6lr92cNVVLKEurVfK/zCORVvW8iUBnC02dj+Wpu0z0Y6QlaN5phcwZqjkOkK5HZyPAjkIjSO4fIdfcOwFKkJlX4zPu7Ha1tIcwR3wWxyFhRG6g4Je0YpSPDJCV8a2Sv2zd1O1x/2WMDZCwljH+clRrHfWCLGK8REMiql//2si5+DKWKcWeAGcFMzzNrXC/0TUwQ2s6+LhlcwjTMlYsUIQzPOCb7YBiyHopyLXIEKPEkI/TgeuiidK/R9FniUDOjRDpvm0RhqjMyyXNjDhCfIMYl1gGjIMIuYsnGEYRMRZOMMunaLVwpWRW008v6fYKDIzxCwVAeNSO90BJW6emelYBRF/kHpYGVaoxTDAaxOFsfP9y8hpJ4xd7gOcij7JNGQ1EYFgkPJa1jQEiYZXRaRINKxSDUW9n+FT82lSKadkiru9/4XPqSLWOekGPoY05TAvLm9orm+YWuwHoBHkZKijNBJGmeb61eL6Ff/6q7bLr7yvv3vKGhpDRjvgjGaPz+gUg6YgcvpyAR2FIZ9U6nEEyZRTovmEU32KichpGn7C17XrfyH9gK/c0CMP05HZIM2uf9sEveizKveBy9/6Qt7o89ne33D525cfcIMW6ab+TMEukQbQbu+xu7X3A9bChmWaCeAkG17bpntwXgWxHaMzGPmUaR5dQZiKqRVeUZ3047fi3nAu28h4CHxCsZAgmEH8Y27jJAhm8c+5RQzRQNVGhVFSfxOYIjp/pP7RxzjevYXVGf4eLt+BJ1vCuLuLkrgABgCGXZ2wik5uty+oBvNirI6mkzhAf4Gsb58Hcm67Jzd+KwD10BYPLL3e0MjvKrgAULnOfveF/O4N2Xb9BZom3gJes3F9X5Zze8/6Yt09b4CrqsEjUv8oFBaR2rl+6CZr2xVrp24o/WitBKuGrrpl1+bFkmK2qXTON4VpbdfLa7o7y/WdLxG7lm2Lqh2clOwTegbvc/vj2U78CwhA87Bn8G5Nk3eOb0Nsr9flz3sG78UUtue4kpv1xvjg3TMay62BMlTlP+vrOMnJsRmt/ze0jsfkPPYdAH57hK+34PeOyc8XIXu5xT2HsUkdZz+adwg8HGFfQ3K5jtDvbUiO4Di9/ywHGrL88pDizZ++oTp+an+SMX/ndymUCwmHMdO7yuOx83pUx/eEMU0AvxWndwgidAqOZ8ypCwdEfvvEo6D9HwpA8wzvmOJEqAg9ySu8g4x0Hb9hSB/BANEKJ+LbPBU0lzbAJs4xt1AoshKkUGQmiH8/jJ0gdhTTLmSegHlPE0oOdXALnqDjKYh3px//fSgSWG8UqfrrIICzYYSJXRr9BSPbpNzw7gBjKjKOYI7ReIGqQRIap5+5MdjyvuDkExvGeXSlONWZAP3/AZBwJohU7QJRGU+cTVH18ELmRPNBmibW6MT/k1b0XhdkRBvyT6SB6EYv/GvhSmRNpGngRULsAlxMCGNXp7w3FfdEbTEEDdLI9TdIKRUzUesa3I461ER8cpNT7gMRhpKmYVS9ELOgCUQsa4SsulciKiLbY+AnHD8cpuhISsnxpamI84sbDq9qYJgf8wiiOBrC7Ml7M7ZECCqKoiiKoiiKoiiKoijv5AvJxlZRyNWWLwAAAABJRU5ErkJggg==" />
												</div>
												<!--end::Avatar-->
												<!--begin::Name-->
												<a href="#" class="fs-2 text-gray-800 text-hover-primary fw-bolder mb-1"><?php echo  $this->session->userdata('full_name'); ?></a>
												<!--end::Name-->
												<!--begin::Position-->
												<div class="fs-6 fw-bold text-gray-400 mb-2"><?php echo $this->session->userdata('position'); ?></div>
												<!--end::Position-->
												<!--begin::Actions-->
												
												<!--end::Actions-->
											</div>
											<!--end::Summary-->
											<!--begin::Menu-->
											<ul class="menu menu-column menu-pill menu-title-gray-700 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-bolder fs-5 mb-10">
									
												<!--begin::Menu item-->
												<li class="menu-item mb-1">
													<!--begin::Menu link-->
													<a class="menu-link px-6 py-4" href="#">
														<span class="menu-bullet">
															<span class="bullet"></span>
														</span>
														<span class="menu-title">Notes</span>
													</a>
													<!--end::Menu link-->
												</li>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<li class="menu-item mb-1">
													<!--begin::Menu link-->
													<a class="menu-link px-6 py-4" href="#">
														<span class="menu-bullet">
															<span class="bullet"></span>
														</span>
														<span class="menu-title">To sipra</span>
													</a>
													<!--end::Menu link-->
												</li>

												<li class="menu-item mb-1">
													<!--begin::Menu link-->
													<a class="menu-link px-6 py-4" href="#">
														<span class="menu-bullet">
															<span class="bullet"></span>
														</span>
														<span class="menu-title">Suggested Songs</span>
													</a>
													<!--end::Menu link-->
												</li>
												
											</ul>
											<!--end::Menu-->
											
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Sidebar-->
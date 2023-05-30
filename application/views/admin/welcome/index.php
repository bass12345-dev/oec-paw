<div class="welcome_section ">

<div class="card-body p-lg-17">
									<!--begin::About-->
									<div class="mb-18">
										<!--begin::Wrapper-->
										<div class="mb-10">
										
											<!--end::Top-->
											<!--begin::Overlay-->
											<div class="overlay">
												<!--begin::Image-->
												<img class="w-100 card-rounded" src="<?php echo base_url() ?>background.jpg" alt="" />
												<!--end::Image-->
												<!--begin::Links-->

												<?php if($admin_access) :  ?>
												<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
													<a href="javascript:;" class="btn btn-primary menuu" data-id="setlist">Go Setlist</a>
													
												</div>

											<?php endif; ?>
												<!--end::Links-->
											</div>
											<!--end::Container-->
										</div>
										<?php $this->load->view('admin/welcome/sections/description') ?>
									</div>
									<!--end::About-->
									
									</div>
						
									<?php $this->load->view('admin/welcome/sections/members_slider'); ?>
							
								</div>

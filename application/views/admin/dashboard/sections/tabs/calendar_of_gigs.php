

<!--begin::Tab panel-->
												<div id="kt_activity_week" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_week_tab">


													<div class="card-header" style="margin-bottom: 20px">
                                            <h3 class="card-title align-items-start flex-column">
                                                <button class="btn btn-primary mt-1 pl-10" data-bs-toggle="modal" data-bs-target="#kt_modal_add_gigs">Add Gigs</button>
                                               
                                            </h3>
                                            <div class="card-toolbar">
                                                 <select class="form-control form-control-solid mb-3 mb-lg-0" name="calendar_options" onchange="calendar_options()">
                                                                	
                                                                <option selected value="calendar">Calendar</option>
                                                                <option value="gig_list" >List</option>
                                                            </select>
                                               
                                            </div>	
                                        </div>
													<!--begin::Timeline-->
													<div class="timeline d-none" id="gig_list">
													
														
														
														
													
									
													</div>
			
													<?php $this->load->view('admin/dashboard/calendar'); ?>
													<?php $this->load->view('admin/dashboard/modals/add_gigs_modal'); ?>
												</div>
												<!--end::Tab panel-->

												
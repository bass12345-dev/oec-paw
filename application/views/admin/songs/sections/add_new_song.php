<div id="add_song">
						
								
										<!--begin::Card header-->
										<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
											<div class="card-title m-0">
												<h3 class="fw-bolder m-0">Add Song</h3>
											</div>
										</div>


										<!--begin::Content-->
										<div id="kt_account_signin_method" class="collapse show">
											<form id="add_lyrics_form" class="form" action="#">
											<!--begin::Card body-->
											<div class="card-body border-top p-9">
												<!--begin::Email Address-->
												 <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-bold fs-6 mb-2">Song Title</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" name="song_title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Song Title" value="" />
                                                                <!--end::Input-->
                                                            </div>
												<!--end::Email Address-->
												<!--begin::Separator-->
												<div class="separator separator-dashed my-6"></div>
												<!--end::Separator-->
												<div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-bold fs-6 mb-2">Song Artist</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" name="song_artist1" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Song Artist" value="" />
                                                                <input type="hidden" name="artist_id" name="">
                                                                <!--end::Input-->
                                                            </div>

                                                <div class="fv-row mb-7">
                                                               
                                                                <label class="required fw-bold fs-6 mb-2">Song Type</label>
                                                               	
                                                               	 <select class="form-control form-control-solid mb-3 mb-lg-0" name="type">
                                                                	
                                                                 <?php
											                        foreach($this->config->item('song_type') as $row):
											                          echo '
											                            <option value="'.$row.'">'.$row.'</option> 
											                          ';
											                        endforeach;
											                        ?> 
                                                            </select>
                                                            </div>

                                   <!--              <div class="fv-row mb-7">
                                                               
                                                                <label class="required fw-bold fs-6 mb-2">Location</label>
                                                               	
                                                               	 <select class="form-control form-control-solid mb-3 mb-lg-0" name="location">
                                                                	
                                                                 <?php
											                        foreach($this->config->item('location') as $row):
											                          echo '
											                            <option value="'.$row.'">'.$row.'</option> 
											                          ';
											                        endforeach;
											                        ?> 
                                                            </select>
                                                            </div> -->


                                                          <!--   <div class="separator separator-dashed my-6"></div> -->
												<!--end::Separator-->
										<!-- 		<div class="fv-row mb-7">
                                                               
                                                                <label class="required fw-bold fs-6 mb-2">Lyrics</label>
                                                             
                                                               
                                                                  <textarea   name="lyrics" class="form-control mymce"></textarea>
                                                             
                                                            </div> -->


                                                             <div class="text-center pt-15">
                                                            
                                                            <button type="submit" class="btn btn-primary add_s" >
																	<span class="indicator-label add-song-label">Submit</span>
																	
																</button>
                                                        </div>

											
											</div>


										</form>


											<!--end::Card body-->
										</div>
										<!--end::Content-->


									</div>
									
		
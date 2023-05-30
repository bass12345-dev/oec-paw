<!--begin::Modal - Add task-->
                                    <div class="modal fade" id="update_song" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header" id="kt_modal_add_user_header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bolder">Update Songs</h2>
                                                    <!--end::Modal title-->
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
																</svg>
															</span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--end::Modal header-->
                                                <!--begin::Modal body-->
                                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                    <!--begin::Form-->
                                                    <form id="update_song_form" class="form" action="#">
                                                        <!--begin::Scroll-->
                                                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                            data-kt-scroll-offset="300px">
                                                        
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-bold fs-6 mb-2">Song Title</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input style="border: 1px solid;" type="text" name="update_song_title" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="" />

                                                                 <input type="hidden" name="son_id" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="" />
                                                                <!--end::Input-->
                                                            </div>

                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-bold fs-6 mb-2">Song  Artist</label>
                                                                 <input style="border: 1px solid;" type="text" name="song_artist2" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Song Artist" value="" />
                                                                <input type="hidden" name="artist_id2" name="">
                                                            </div>

                                                            <div class="fv-row mb-7">
                                                               
                                                                <label class="required fw-bold fs-6 mb-2">Song Type</label>
                                                                
                                                                 <select class="form-control form-control-solid mb-3 mb-lg-0" name="update_type">
                                                                    
                                                                 <?php
                                                                    foreach($this->config->item('song_type') as $row):
                                                                      echo '
                                                                        <option value="'.$row.'">'.$row.'</option> 
                                                                      ';
                                                                    endforeach;
                                                                    ?> 
                                                            </select>
                                                            </div>


                                                              <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-bold fs-6 mb-2">Key Chords</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input style="border: 1px solid;" type="text" name="key_chords" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Key" value="" />

                                                                 
                                                            </div>

                                                          
                                                      
                                                        </div>
                                                        <!--end::Scroll-->
                                                        <!--begin::Actions-->
                                                        <div class="text-center pt-15">
                                                            
                                                            <button type="submit" class="btn btn-primary up_s" >
																	<span class="indicator-label up-label">Submit</span>


                                                                   
																	
																</button>

                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>
                                        <!--end::Modal dialog-->
                                    </div>
                                    <!--end::Modal - Add task-->

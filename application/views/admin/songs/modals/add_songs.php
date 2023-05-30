<!--begin::Modal - Add task-->
                                    <div class="modal fade" id="add_songs1" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header" id="kt_modal_add_user_header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bolder">Add Songs</h2>
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
                                                   <form id="add_lyrics_form" class="form" action="#">
                                            <!--begin::Card body-->
                                            <div class="card-body border-top p-9">
                                                <!--begin::Email Address-->
                                                 <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-bold fs-6 mb-2">Song Title</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" name="song_title" class="form-control form-control-solid mb-3 mb-lg-0 " placeholder="Song Title" value="" />
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
                                        <!--        <div class="fv-row mb-7">
                                                               
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

                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>
                                        <!--end::Modal dialog-->
                                    </div>
                                    <!--end::Modal - Add task-->

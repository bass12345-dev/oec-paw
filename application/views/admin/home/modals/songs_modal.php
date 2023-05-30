<!--begin::Modal - Add task-->
                                    <div class="modal fade" id="kt_modal_add_sipra_song" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-1000px">
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
                                                    <!--begin::Form-->
                                                    <form id="add_song_sipra_form" class="form" >
                                                      
                                                        
                                                          <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-bold fs-6 mb-2">Song Title</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" name="post_song_title" class="form-control form-control-solid mb-3 mb-lg-0"  value="" />
                                                                <input type="hidden" name="post_type_song" value="song" >

                                                                
                                                            </div>

                                                            <div class="fv-row mb-7">
                                                                <!--begin::Label-->
                                                                <label class="required fw-bold fs-6 mb-2">Song Artist</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" name="song_artist3" class="form-control form-control-solid mb-3 mb-lg-0"  value="" />

                                                                 <input type="hidden" name="artist_id3" class="form-control form-control-solid mb-3 mb-lg-0" value="" />
                                                                <!--end::Input-->
                                                            </div>
                                                          
                                                      
                                                       
                                                        <!--end::Scroll-->
                                                        <!--begin::Actions-->
                                                        <div class="text-center pt-15">
                                                            
                                                            <button type="submit" class="btn btn-primary post_s" >
                                                                    <span class="indicator-label post-song-label">Submit</span>
                                                                    
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

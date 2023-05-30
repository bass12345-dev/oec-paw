<!--begin::Modal - Add task-->
                                    <div class="modal fade" id="update_select_song_modal" tabindex="-1" aria-hidden="true">
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
                                                    <form id="add_song_sipra_form" class="mx-auto mw-600px w-100 pt-15 pb-10" >
                                                        <input type="hidden" name="set_number">
                                                         <input type="hidden" name="singee_id">
                                                      <div class="w-100">
                                                    <div class="mb-0 fv-row" > 

                                                        <div class="my-1 d-flex p-2">



                                                            <!--begin::Select-->
                                                            <select class="form-select fw-bold w-125px" data-control="select2" data-placeholder="Status" data-hide-search="true" id="song_type1">
                                                                <option value="0" selected="selected">All</option>
                                                                 <?php
                                                                    foreach($this->config->item('song_type') as $row):
                                                                      echo '
                                                                        <option value="'.$row.'">'.$row.'</option> 
                                                                      ';
                                                                    endforeach;
                                                                    ?> 
                                                            </select>

                                                           



                                                            <!--end::Select-->
                                                        </div>

                                                        <div id="singer_songs1">
                                                            
                                                        </div>
                                                      
                                                    </div>
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

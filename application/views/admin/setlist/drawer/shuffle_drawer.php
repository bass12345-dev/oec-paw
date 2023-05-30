
        <div  class="explore bg-white" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'420px', 'lg': '100%'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_explore_shuffle" data-kt-drawer-close="#kt_explore_close">
            <!--begin::Card-->
            <div class="card shadow-none rounded-0 w-100">

                <div class="card-header" id="kt_explore_header">
                    <h5 class="card-title fw-bold text-gray-600">Setlist for</h5>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_explore_close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                    </div>
                </div>

                    

                        <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body">
                                    <!--begin::Stepper-->
                                    <div class="stepper stepper-links d-flex flex-column pt-15" id="kt_create_account_stepper">
                                        <!--begin::Nav-->
                                        <div class="stepper-nav mb-5">
                                            <!--begin::Step 1-->
                                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                                <h3 class="stepper-title">Select Singers</h3>
                                            </div>
                                            <!--end::Step 1-->
                                            <!--begin::Step 2-->
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <h3 class="stepper-title">Sets</h3>
                                            </div>
                                            <!--end::Step 2-->
                                            <!--begin::Step 3-->
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <h3 class="stepper-title">Event Type</h3>
                                            </div>
                                            <!--end::Step 3-->
                                          
                                            <!--begin::Step 5-->
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <h3 class="stepper-title">Completed</h3>
                                            </div>
                                            <!--end::Step 5-->
                                        </div>
                                        <!--end::Nav-->
                                        <!--begin::Form-->
                                        <form class="mx-auto mw-600px w-100 pt-15 pb-10" novalidate="novalidate" id="shuffle_form">
                                            <!--begin::Step 1-->
                                            <div class="current" data-kt-stepper-element="content">
                                                <!--begin::Wrapper-->
                                                <div class="w-100">
                                                    <!--begin::Heading-->
                                                    <div class="pb-10 pb-lg-15">
                                                        <!--begin::Title-->
                                                        <h2 class="fw-bolder d-flex align-items-center text-dark">Singers
                                                       
                                                       
                                                    </div>
                                                    <!--end::Heading-->
                                                     <!--begin::Input group-->
                                                    <div class="mb-0 fv-row">


                                                        <?php foreach ($singers as $row): 
                                                            # code...
                                                         ?>
                                                    
                                                        <div class="mb-0">
                                                            <!--begin:Option-->
                                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                                <!--begin:Label-->
                                                                <span class="d-flex align-items-center me-2">
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">
                                                                    
                                                                      <div class="cursor-pointer symbol symbol-30px symbol-md-40px" style="">
                                                <img alt="Pic"  src="./assets/images/blank.png" />
                                            </div>

                                                                        </span>
                                                                  
                                                                    <!--begin::Description-->
                                                                    <span class="d-flex flex-column">
                                                                        <span class="fw-bolder text-gray-800 text-hover-primary fs-5"><?php echo $row['full_name']; ?></span>
                                                                        <span class="fs-6 fw-bold text-muted"><?php echo $row['type']; ?></span>
                                                                    </span>
                                                                    <!--end:Description-->
                                                                </span>
                                                                <!--end:Label-->
                                                                <!--begin:Input-->
                                                                <span class="form-check form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" name="sel_singer" value="<?php echo $row['member_id'] ?>" />
                                                                </span>
                                                                <!--end:Input-->
                                                            </label>
                                                            <!--end::Option-->
                                                    
                                                          
                                                        </div>
                                                       

                                                       <?php endforeach; ?>



                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Step 1-->
                                            <!--begin::Step 2-->
                                            <div data-kt-stepper-element="content">
                                                <!--begin::Wrapper-->
                                                <div class="w-100">
                                                    <!--begin::Heading-->
                                                    <div class="pb-10 pb-lg-15">
                                                        <!--begin::Title-->
                                                        <h2 class="fw-bolder text-dark">Sets</h2>
                                                       
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center form-label mb-3">Specify How many Sets
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Provide your team size to help us setup your billing"></i></label>
                                                        <!--end::Label-->
                                                        <!--begin::Row-->
                                                        <div class="row mb-2" data-kt-buttons="true">
                                                            <!--begin::Col-->
                                                            <div class="col">
                                                                <!--begin::Option-->
                                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                                    <input type="radio" class="btn-check" name="account_team_size" value="1" />
                                                                    <span class="fw-bolder fs-3">1-1</span>
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col">
                                                                <!--begin::Option-->
                                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4 active">
                                                                    <input type="radio" class="btn-check" name="account_team_size" checked="checked" value="2" />
                                                                    <span class="fw-bolder fs-3">1-2</span>
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col">
                                                                <!--begin::Option-->
                                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                                    <input type="radio" class="btn-check" name="account_team_size" value="3" />
                                                                    <span class="fw-bolder fs-3">1-3</span>
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Col-->
                                                            
                                                            <!-- <div class="col">
                                                                <!-
                                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                                    <input type="radio" class="btn-check" name="account_team_size" value="4" />
                                                                    <span class="fw-bolder fs-3">1-4</span>
                                                                </label>
                                                                <
                                                            </div>
                                                             <div class="col">
                                                                <!-
                                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                                    <input type="radio" class="btn-check" name="account_team_size" value="5" />
                                                                    <span class="fw-bolder fs-3">1-5</span>
                                                                </label>
                                                                <
                                                            </div> -->
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                       
                                                    </div>
                                                   
                                                    <div class="mb-10 fv-row">
                                                       
                                                        <label class="form-label mb-3">Songs Per Person</label>
                                                       
                                                        <input type="number" class="form-control form-control-lg form-control-solid" name="songs_per_person" placeholder="" value="" required="" />
                                                       
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Step 2-->
                                            <!--begin::Step 3-->
                                            <div data-kt-stepper-element="content">
                                                <!--begin::Wrapper-->
                                                <div class="w-100">
                                                    <!--begin::Heading-->
                                                    <div class="pb-10 pb-lg-12">
                                                        <!--begin::Title-->
                                                        <h2 class="fw-bolder text-dark">Event</h2>
                                                      
                                                    </div>
                                                    <!--end::Heading-->

                                                          <!--begin::Input group-->
                                                    <div class="mb-10 fv-row">
                                                        <!--begin::Label-->
                                                      
                                                        <div class="row mb-2" data-kt-buttons="true">
                                                            <!--begin::Col-->
                                                            <div class="col">
                                                                <!--begin::Option-->
                                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4 active">
                                                                    <input type="radio" class="btn-check" name="account_team_size1" value="restaurant" checked="checked"  />
                                                                    <span class="fw-bolder fs-3">Restaurant Gig</span>
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col">
                                                                <!--begin::Option-->
                                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4 ">
                                                                    <input type="radio" class="btn-check" name="account_team_size1" disabled="" value="wedding" />
                                                                    <span class="fw-bolder fs-3">Wedding Or Wedding Anniversarry</span>
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col">
                                                                <!--begin::Option-->
                                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                                    <input type="radio" class="btn-check" name="account_team_size1" value="birthday" />
                                                                    <span class="fw-bolder fs-3">Birthday</span>
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Col-->
                                                           
                                                        </div>
                                                        <!--end::Row-->
                                                       
                                                    </div>
                                                   
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Step 3-->
                                           
                                            <!--end::Step 4-->
                                            <!--begin::Step 5-->
                                            <div data-kt-stepper-element="content">
                                                <!--begin::Wrapper-->
                                                <div class="w-100">
                                                  
                                                    <!--begin::Body-->
                                                    <div class="mb-0">
                                                       
                                                        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                                            <!--begin::Icon-->
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
                                                                    <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <!--end::Icon-->
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex flex-stack flex-grow-1">
                                                                <!--begin::Content-->
                                                                <div class="fw-bold">
                                                                    <h4 class="text-gray-900 fw-bolder">IF YOU ARE DONE PLEASE CLICK SUBMIT BUTTON!</h4>
                                                                    <div class="fs-6 text-gray-700">This will create setlist automatically</div>
                                                                </div>
                                                                <!--end::Content-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                        </div>
                                                        <!--end::Notice-->
                                                        <!--end::Alert-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Step 5-->
                                            <!--begin::Actions-->
                                            <div class="d-flex flex-stack pt-15">
                                                <!--begin::Wrapper-->
                                                <div class="mr-2">
                                                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                                    <span class="svg-icon svg-icon-4 me-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
                                                            <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Back</button>
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Wrapper-->
                                                <div>
                                                    <button type="submit" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit" id="kt_explore_shuffled_songs">
                                                        <span class="indicator-label">Submit 
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon--></span>
                                                        <span class="indicator-progress">Please wait... 
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue 
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                    <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon--></button>
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Stepper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->

        </div>
        <!--end::Exolore drawer-->
    </div>

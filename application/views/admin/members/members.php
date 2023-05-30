


                                       <!--begin::Row-->
                                    <div class="row g-5 g-xl-8">
                                        <!--begin::Col-->
                                        <div class="col-xxl-12">
                                            <!--begin::List Widget 4-->
                                            <div class="card card-xl-stretch mb-5 mb-xl-8">
                                                <!--begin::Header-->
                                                <div class="card-header align-items-center border-0 mt-5">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="fw-bolder text-dark fs-2">Band Members</span>
                                                      
                                                    </h3>

                                                    <?php if ($admin_access) :
                                                        # code...
                                                     ?>
                                                    <div class="card-toolbar">

                                                         
                                                        <button type="button" class="btn btn-sm btn-icon btn-icon-danger target btn-active-light-danger delete-multi-members" >
                                                          
                                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"/>
                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"/>
                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"/>
                                                            </svg></span>

                                                        </button>

                                                         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_member" >
                                                          
                                                           Add Members

                                                        </button>
                                                    </div>

                                                <?php endif; ?>
                                                </div>
                                                
                                                <div class="card-body pt-1 members-table" >
                                                 
                                                </div>

                                          

                                          
                                                <!--end::Body-->
                                            </div>
                                            <!--end::List Widget 4-->
                                        </div>
                                        <!--end::Col-->
                                     
                                    </div>
                                    <!--end::Row-->



                                       <!--begin::Row-->
                                    <div class="row g-5 g-xl-8">
                                        <!--begin::Col-->
                                        <div class="col-xxl-12">
                                            <!--begin::List Widget 4-->
                                            <div class="card card-xl-stretch mb-5 mb-xl-8">
                                                <!--begin::Header-->
                                                <div class="card-header align-items-center border-0 mt-5">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="fw-bolder text-dark fs-2">Band Sessions</span>
                                                      
                                                    </h3>

                                               
                                                </div>
                                        

                                          

                                                <div class="card-body pt-1 sessions-table" >
                                                 
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::List Widget 4-->
                                        </div>
                                        <!--end::Col-->
                                     
                                    </div>
                                    <!--end::Row-->




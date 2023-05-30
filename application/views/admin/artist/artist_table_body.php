<!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->

                                  <?php if ($admin_access) {
                                    # code...
                                 ?>
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="admin_artist_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#artist_table .form-check-input" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-125px">Artist</th>
                                            <th class="min-w-125px">Number of songs</th>
                                           
                                           
                                            <th class="text-end min-w-100px">Actions</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                   
                                </table>
                                <!--end::Table-->
                                  <?php }else { ?>

                                 <table class="table align-middle table-row-dashed fs-6 gy-5" id="user_artist_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                          
                                            <th class="min-w-125px">Artist</th>
                                            <th class="min-w-125px">Number of songs</th>
                                      
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                   
                                </table>

                                   <?php } ?>
                            </div>
                            <!--end::Card body-->
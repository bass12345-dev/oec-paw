
                            <div class="card-body pt-0">

                                <?php if ($admin_access) {
                                    # code...
                                 ?>
                           
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="admin_songs_table">
                                    
                                    <thead>
                                       
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#artist_table .form-check-input" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-125px">Song Title</th>
                                            <th class="min-w-125px">Artist</th>
                                            

                                       
                                           
                                            <th class="text-end min-w-100px">Actions</th>

                                   
                                        </tr>
                                     
                                    </thead>
                                   
                                </table>


                            <?php }else { ?>


                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="user_songs_table">
                                    
                                    <thead>
                                       
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            
                                            <th class="min-w-125px">Song Title</th>
                                            <th class="min-w-125px">Artist</th>
                                            

                                       
                                           
                                            

                                   
                                        </tr>
                                     
                                    </thead>
                                   
                                </table>


                            <?php } ?>

                       
                                     
                                   <?php $this->load->view('admin/songs/modals/add_singer_songs'); ?>
                                        <!--end::Table row-->

                                   
                                <!--end::Table-->
                            </div>
                            <!--end::Card body
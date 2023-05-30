<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    
     <?php $this->load->view('includes/meta.php'); ?>
    <?php $this->load->view('includes/css.php'); ?>
    
</head>
<!--end::Head-->
<!--begin::Body-->

    <body id="kt_body" style="background-image: url(assets/media/patterns/header-bg.png)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Header-->
                    <div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                        <!--begin::Container-->
                        <div class="container-xxl d-flex align-items-center">
                            <!--begin::Heaeder menu toggle-->
                            <div class="d-flex align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
                                <div class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2x">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Heaeder menu toggle-->
                            <!--begin::Header Logo-->
                            <?php

                            $this->load->view('includes/header_logo.php');

                            ?>
                            <!--end::Header Logo-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                                <?php $this->load->view('includes/navbar.php') ?>
                              <?php $this->load->view('includes/topbar.php') ?>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->

                    <?php

                    $this->load->view('admin/dashboard/dashboard_toolbar');
                    ?>
                    
                    <!--begin::Container-->
                    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                        <!--begin::Post-->
                        <div class="content flex-row-fluid" id="kt_content">
                            <!--begin::Index-->
                            <div class="card card-page">
                                <!--begin::Card body-->
                                <div class="card-body">
                                    
                                    <?php

                                    $this->load->view('admin/dashboard/dashboard');
                                    $this->load->view('admin/artist/index');
                                    $this->load->view('admin/songs/index');
                                     $this->load->view('admin/songs/sections/add_new_song');


                                    ?>
                                    
                                    
                                  
                                   
                                   
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Index-->
                        </div>
                        <!--end::Post-->
                    </div>
                    <!--end::Container-->
                    <!--begin::Footer-->
                    
                  <!--   footer -->

                   <?php $this->load->view('includes/footer.php'); ?>


                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->
        <!--begin::Drawers-->
      
        
       
        
       
      

      <?php $this->load->view('modals/new_target'); ?>
     <?php $this->load->view('includes/scroll_to_top.php'); ?>
    <!--end::Main-->
    <?php $this->load->view('includes/scripts.php'); ?>
    <!--End::Google Tag Manager (noscript) -->
</body>
<!--end::Body-->

</html>
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
                               <!--begin::Navbar-->
                                <div class="d-flex align-items-stretch" id="kt_header_nav">
                                    <!--begin::Menu wrapper-->
                                    <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                        <!--begin::Menu-->
                                        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1" id="back-button">
                                                <span class="menu-link py-3">
                                                    <span class="menu-title">  <i  class="fas fa-arrow-left ms-2 fs-7" ></i></span>
                                                    
                                                </span>
                                                
                                            </div>
                                     


                                          
                                   
                        
                             
                                     
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::Navbar-->
                              <?php $this->load->view('includes/topbar.php') ?>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->


                        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">

                            <!--begin::Post-->
                        <div class="content flex-row-fluid" id="kt_content">
                            <!--begin::Layout - Overview-->
                            <div class="d-flex flex-column flex-xl-row">
                                <!--begin::Sidebar-->
                                <div class="flex-column flex-lg-row-auto w-100 w-xl-325px mb-10">
                                    <!--begin::Card-->
                                    <div class="card card-flush" data-kt-sticky="true" data-kt-sticky-name="account-navbar" data-kt-sticky-offset="{default: false, xl: '80px'}" data-kt-sticky-width="{lg: '250px', xl: '325px'}" data-kt-sticky-left="auto" data-kt-sticky-top="90px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                                        <!--begin::Card header-->
                                        <div class="card-header justify-content-end">
                                           
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0 p-10">
                                            <!--begin::Summary-->
                                            <div class="d-flex flex-center flex-column mb-10">
                                                <!--begin::Avatar-->
                                                
                                                <a href="javascript:;" class="fs-2 text-gray-800 text-hover-primary fw-bolder mb-1  total_income">0</a>
                                                <!--end::Name-->
                                                <!--begin::Position-->
                                               
                                                <!--begin::Actions-->
                                                <div class="d-flex flex-center">
                                                    <a href="#" class="btn btn-sm btn-light-primary py-2 px-4 fw-bolder me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_update_profile_pic" >Update</a>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Summary-->
                                            <!--begin::Menu-->
                                            <ul class="menu menu-column menu-pill menu-title-gray-700 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-bolder fs-5 mb-10">

                                                 <li class="menu-item mb-1">
                                                    <!--begin::Menu link-->
                                                    <a class="menu-link px-6 py-4 active" href="<?php echo base_url() ?>money_logs">
                                                        <span class="menu-bullet">
                                                            <span class="bullet"></span>
                                                        </span>
                                                        <span class="menu-title">Money logs</span>
                                                    </a>
                                                    <!--end::Menu link-->
                                                </li>

                                                
                                              
                                            </ul>
                                            <!--end::Menu-->
                                           
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Sidebar-->
                                <!--begin::Content-->
                                <div class="flex-lg-row-fluid ms-lg-10">
                                   
                                  
                                 
                                    <!--end::Chart widget 2-->
                                    <!--begin::Table Widget 1-->
                                    <div class="card mb-5 mb-xl-10" id="suggested-songs">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5 pb-3">
                                            <!--begin::Card title-->
                                            <h3 class="card-title fw-bolder text-gray-800 fs-2">Upcoming Gigs</h3>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <div class="my-1">
                                                    <!--begin::Select-->
                                                    <select class="form-select fw-bold w-125px" data-control="select2" data-placeholder="Status" data-hide-search="true">
                                                        <option value="1" selected="selected">Status</option>
                                                        <option value="2">Pending</option>
                                                        <option value="3">In Progress</option>
                                                        <option value="3">Complete</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">

                                                      <table class="table align-middle table-row-dashed fs-6 gy-5" id="upcoming_gigs_table">
                                    
                                    <thead>
                                       
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#artist_table .form-check-input" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-125px text-gray-800">Gig</th>
                                            <th class="min-w-125px text-gray-800">Income</th>
                                            

                                       
                                           
                                            <th class="text-end min-w-100px text-gray-800">Actions</th>

                                   
                                        </tr>
                                     
                                    </thead>
                                   
                                </table>


                                             
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    </div>



                                     <!--end::Chart widget 2-->
                                    <!--begin::Table Widget 1-->
                                    <div class="card mb-5 mb-xl-10" id="suggested-songs">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5 pb-3">
                                            <!--begin::Card title-->
                                            <h3 class="card-title fw-bolder text-gray-800 fs-2">TO DO</h3>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <div class="my-1">
                                                    <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#kt_modal_add_todo">Add</button>
                                                </div>
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                 <table class="table align-middle table-row-dashed fs-6 gy-5" id="todo_table">
                                    
                                    <thead>
                                       
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#artist_table .form-check-input" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-125px text-gray-800">Todo</th>
                                            <th class="min-w-125px text-gray-800">Amount</th>
                                            

                                       
                                           
                                            <th class="text-end min-w-100px text-gray-800">Actions</th>

                                   
                                        </tr>
                                     
                                    </thead>
                                   
                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    </div>




                                      <div class="card mb-5 mb-xl-10" id="suggested-songs">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5 pb-3">
                                            <!--begin::Card title-->
                                            <h3 class="card-title fw-bolder text-gray-800 fs-2">SIPRA</h3>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <div class="my-1">
                                                    <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#kt_modal_add_sipra">Add</button>
                                                </div>
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                               <table class="table align-middle table-row-dashed fs-6 gy-5" id="todo_table">
                                    
                                    <thead>
                                       
                                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#artist_table .form-check-input" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-125px text-gray-800">Todo</th>
                                            <th class="min-w-125px text-gray-800">Amount</th>
                                            

                                       
                                           
                                            <th class="text-end min-w-100px text-gray-800">Actions</th>

                                   
                                        </tr>
                                     
                                    </thead>
                                   
                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                

                                    


                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Layout - Overview-->
                        </div>
                        <!--end::Post-->

                        </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->
        <!--begin::Drawers-->
      
         <?php $this->load->view('includes/drawer'); ?>
    
       <?php $this->load->view('view/modals/add_sipra'); ?>   
 <?php $this->load->view('view/modals/add_todo'); ?>      
  <?php $this->load->view('view/modals/edit_todo'); ?>  


     <?php $this->load->view('includes/scroll_to_top.php'); ?>
    <!--end::Main-->
    <?php $this->load->view('includes/scripts.php'); ?>
    <!--End::Google Tag Manager (noscript) -->
</body>
<!--end::Body-->


</html>
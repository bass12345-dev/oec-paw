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
<!--  -->
                    <!--begin::Container-->
                    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                        <!--begin::Post-->
                        <div class="content flex-row-fluid" id="kt_content">
                            <!--begin::Index-->
                            <div class="card card-page">
                                <!--begin::Card body-->
                                <div class="card-body">


                                     <div class="card card-xl-stretch mb-5 mb-xl-8">
                                                <!--begin::Header-->
                                                <div class="card-header ">
                                                    <div  class="align-items-center border-0 mt-5">
                                                        
                                                    
                                                   
                                                 
                                                  
                                                    <div class="card-toolbar">
                                                         <h3 class="card-title align-items-start flex-column">
                                                        <span class="fw-bolder text-dark fs-2"><?php echo $singer_name?></span>

                                                        <input type="hidden" name="sin_id" value="<?php echo $_GET['id'] ?>">
                                                      
                                                    </h3>

                                                       <div class="my-1 d-flex p-2">



                                                            <!--begin::Select-->
                                                            <select class="form-select fw-bold w-125px" data-control="select2" data-placeholder="Status" data-hide-search="true" id="song_type">
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

                                                        <div class="my-1 d-flex p-2">

                                                                <button class="btn btn-primary print-singer-songs">Print</button>
                                                                <!-- <button class="btn btn-success copy-clipboard" style="margin-left: 5px">Copy to Clipboard</button> -->
                                                        </div>

                                                    </div>
                                                    </div>
                                                </div>

                   


                                       <!--begin::Row-->
                                    <div class="row g-5 g-xl-8">
                                        <!--begin::Col-->
                                        <div class="col-xxl-12">
                                            <!--begin::List Widget 4-->
                                            <div class="card card-xl-stretch mb-5 mb-xl-8">


                                                <div class="list">
                                                    
                                                </div>

                                                       <h3 style="margin-left: 20px ; margin-top: 20px">
                                                        <span class="fw-bolder text-dark fs-2 s_type"></span>
                                                    </h3>

                                                
                                                <div class="card-body pt-1 singer-song-table" >
                                                 
                                                  <?php


                                                    // sort($data,SORT_STRING);
                                                        foreach ($data as $row) :      
                                                    ?> 
                                                    
                                                    <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">
                                                    
                                                            <div class="symbol symbol-40px symbol-circle me-4">
                                                                <span class="symbol-label bg-light-primary">
                                                                  
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">

                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                            <mask fill="white">
                                                                                <use xlink:href="#path-1"/>
                                                                            </mask>
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>
                                                                        </g>
                                                                    </svg>
                                                                        </span>

                                                                </span>
                                                            </div>

                                                      <!--       id="kt_explore_toggle" -->

                                               <!--        class="view_song" -->
                                                            
                                                            <div class="ps-1 mt-4 mb-1">
                                                                <a href="javascript:;" data-val="<?php echo $row['song_title'] ?>"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google"><?php echo $row['song_title']; ?></a>
                                                                <p><?php echo $row['artist_name']; ?></p>
                                                            </div>

                                                        </div>
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>
                                                    </div>


                                                     
                                                   <?php endforeach ?>

                                            
                                                
                                                   
                                                   
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::List Widget 4-->
                                        </div>
                                        <!--end::Col-->
                                     
                                    </div>
                                    <!--end::Row-->
                                    
                                    

                                    
                                  
                                   
                                   
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

              


                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->
        <!--begin::Drawers-->
      
         <?php $this->load->view('includes/drawer'); ?>
       
        
       
      

      <?php $this->load->view('modals/new_target'); ?>
     <?php $this->load->view('includes/scroll_to_top.php'); ?>
    <!--end::Main-->
    <?php $this->load->view('includes/scripts.php'); ?>
    <!--End::Google Tag Manager (noscript) -->
</body>
<!--end::Body-->

</html>
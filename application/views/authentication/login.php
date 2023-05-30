<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Ceres HTML Pro - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme 
Purchase: https://keenthemes.com/products/ceres-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    
     <?php $this->load->view('includes/meta.php'); ?>
    <?php $this->load->view('includes/css.php'); ?>
    
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="page-auth">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(<?php echo base_url() ?>assets/media/illustrations/dozzy-1/14.png">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
             <!--    <a href="/ceres-html-pro/?page=index" class="mb-12">
						<img alt="Logo" src="<?php echo base_url() ?>assets/media/logos/logo-default.svg" class="h-30px" />
					</a> -->
                    <h1 class="mb-12">OEC-PAW TEAM</h1>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="form w-100"  id="kt_sign_in_form" >
                        <!--begin::Heading-->
                        <div class="text-center mb-8">
                            <!--begin::Title-->
                           <!--  <h1 class="text-dark mb-3">Sign In to Ceres</h1>
                          
                            <div class="text-gray-400 fw-bold fs-4">New Here?
                                <a href="/ceres-html-pro/?page=authentication/base/sign-up" class="link-primary fw-bolder">Create an Account</a></div> -->
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-8">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bolder text-dark">Username</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input style="border: 1px solid;" class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack mb-2">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                <!--end::Label-->
                                <!--begin::Link-->
                               <!--  <a href="/ceres-html-pro/?page=authentication/base/password-reset" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> -->
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Input-->
                            <input style="border: 1px solid;" class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Continue</span>
									<span class="indicator-progress">Please wait... 
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
                           
                           <!--  <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                            
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="/ceres-html-pro/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a>
                           
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="/ceres-html-pro/assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a>
                          
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
								<img alt="Logo" src="/ceres-html-pro/assets/media/svg/brand-logos/apple-black.svg" class="h-20px me-3" />Continue with Apple</a> -->
                           
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
           <!--  <div class="d-flex flex-center flex-column-auto p-10">
               
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                    <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                    <a href="https://keenthemes.com/products/ceres-html-pro" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
               
            </div> -->
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->
    <?php $this->load->view('includes/scripts.php'); ?>

     <!--begin::Page Custom Javascript(used by this page)-->
<!--     <script src="<?php echo base_url() ?>assets/js/custom/authentication/sign-in/general.js"></script> -->
    <!--end::Page Custom Javascript-->
    <!--End::Google Tag Manager (noscript) -->

    <script type="text/javascript"></script>
</body>
<!--end::Body-->

</html>
<script>
        var hostUrl = "<?php echo base_url() ?>assets/";
        var base_url = '<?php echo base_url() ?>';
    </script>

    

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.js"></script>

    <script src="<?php echo base_url() ?>assets/js/scripts.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/cookie.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-listnav.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jQuery.print.js"></script>




     <script src="<?php echo base_url() ?>assets/js/account.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/custom//tinymce/tinymce.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/js/formValidation.min.js" integrity="sha512-DlXWqMPKer3hZZMFub5hMTfj9aMQTNDrf0P21WESBefJSwvJguz97HB007VuOEecCApSMf5SY7A7LkQwfGyVfg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--begin::Page Custom Javascript(used by this page)-->
<!--     <script src="<?php echo base_url() ?>assets/js/custom/apps/user-management/users/list/table.js"></script> -->
<!--     <script src="<?php echo base_url() ?>assets/js/custom/apps/user-management/users/list/export-users.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom/apps/user-management/users/list/add.js"></script> -->
<!--     <script src="<?php echo base_url() ?>assets/js/custom/widgets.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom/apps/chat/chat.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom/modals/create-app.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom/modals/new-target.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom/intro.js"></script> -->
    <!--end::Page Custom Javascript-->
    
    <!--end::Global Javascript Bundle-->
   
    <!--end::Javascript-->
    <!--Begin::Google Tag Manager (noscript) -->
    <script src="<?php echo base_url() ?>assets/plugins/custom/typed.js/typeahead.jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/js/custom/widgets.js"></script> -->

<!--     <script type="text/javascript" src="http://code.jquery.com/mobile/1.5.0-rc1/jquery.mobile-1.5.0-rc1.min.js"></script> -->


    <noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>



<script type="text/javascript">



$(document).ready(function(){
  $(window).on('hashchange', function(){
      console.log( 'location.hash: ' + location.hash );
      console.log( 'globalCurrentHash: ' + globalCurrentHash );

      if (location.hash == globalCurrentHash) {
          console.log( 'Going fwd' );
      }
      else {

          console.log( 'Going Back' );
          loadMenuSelection(location.hash);
      }
    });

});




$('#close_contact').on('click', function(){
    // window.location.href = base_url + 'songs?action=add-song';


        $.cookie('con', 'con', { expires: 1 });


    
})








    class load_data {
  constructor() {
 
  }


  get_total_income(){


        $.ajax({
                            type: "POST",
                            url: base_url + 'Activity/get_total_income',
                            cache: false,
                            dataType: 'json',  
                            success: function(data){
                                        $('.total_income').text(data[0].total_income)

                            }

                    })

  }




  load_feed(){

                 $.ajax({
                            type: "POST",
                            url: base_url + 'Home/load_feed',
                            cache: false,
                            dataType: 'json',  
                            success: function(data){

                                if (data.length > 0) {

                                    var html = '<div class="timeline">';

                                    for(let item of data ){

                                  

                                            html += '<div class="timeline-item">\
                                                            <div class="timeline-line w-40px"></div>\
                                                            <div class="timeline-icon symbol symbol-circle symbol-40px me-4">\
                                                                <div class="symbol-label bg-light">\
                                                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">\
                                                                            <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />\
                                                                            <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />\
                                                                        </svg>\
                                                                    </span>\
                                                                </div>\
                                                            </div>\
                                                            <div class="timeline-content mb-10 mt-n1">\
                                                                <div class="pe-3 mb-5">\
                                                                    <div class="fs-5 fw-bold mb-2"><span style="font-weight: bold;">'+item.full_name+'</span> posted new song</div>\
                                                                    <div class="d-flex align-items-center mt-1 fs-6">\
                                                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>\
                                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">\
                                                                            <img src="/ceres-html-free/assets/media/avatars/150-11.jpg" alt="img" />\
                                                                        </div>\
                                                                    </div>     \
                                                                </div>\
                                                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">\
                                                                        <span class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Song Title : <a href ="javascript:;"> '+item.song+'</a></span>\
                                                                        <span class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Song Artist : <a href ="javascript:;"> '+item.artist+'</a></span>\
                                                                      \
                                                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">\
                                                                            <div class="symbol symbol-circle symbol-25px">\
                                                                                <img src="/ceres-html-free/assets/media/avatars/150-3.jpg" alt="img" />\
                                                                            </div>\
                                                                            <div class="symbol symbol-circle symbol-25px">\
                                                                                <img src="/ceres-html-free/assets/media/avatars/150-11.jpg" alt="img" />\
                                                                            </div>\
                                                                            <div class="symbol symbol-circle symbol-25px">\
                                                                                <div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A</div>\
                                                                            </div>\
                                                                        </div>\
                                                                        <div class="min-w-125px pe-2">\
                                                                            <span class="badge badge-light-primary">In Progress</span>\
                                                                        </div>';
                                                                        

                                                                        if (item.x == 1) {

                                                                            html += '<a href="javascript:;" data-id="'+item.song_id+'"  class="btn btn-sm btn-success done-sipra">Done</a>';

                                                                        }



                                                    html +=         ' </div>\
                                                                </div>   \
                                                            </div>';
                                        
                                    }

                                    html += '</div>';


                                }


                                $('#newsfeed').html(html);


                              
                               
                            }
                })

  }




get_song_data(id){

          $.ajax({
                            type: "POST",
                            url: base_url + 'Song/get_song',
                            data : {id:id},
                            cache: false,
                            dataType: 'json',  
                            success: function(data){


                                $('input[name=update_song_title]').val(data.song_title);
                                $('input[name=song_artist2]').val(data.artist_name);
                                $('input[name=artist_id2]').val(data.artist_id);
                                $('select[name=update_type]').val(data.song_type);
                                 $('input[name=key_chords]').val(data.key_chords);

                               
                            }
                })
}




load_shuffled_songs(items){
    

    var html = '';
    var size = 'col-md-4';

    // console.log(items)


    if (items.length > 3) {

        size = 'col-md-3';

    }

   for(let item of items){




        html += '<div class="'+size+' pe-md-10 mb-10 mb-md-0">\
                <h1 class="text-gray-800 fw-bolder mb-4">'+item.singer_name+'</h1>';

                if (item.songs.first_set) {

                    html += '<div style="margin-bottom: 20px; margin-top: 20px;" >';

                    html += '<h4 class="text-primary fw-bolder cursor-pointer mb-0">First Set</h4>';
                    for(let item1 of item.songs.first_set){

                          

                                    html += '<div class="m-0">\
                                                    <div class="d-flex align-items-center  py-3  mb-0" >\
                                                     <h6 class="text-gray-700  cursor-pointer mb-0">'+item1.song_title+'</h6>\
                                                    </div>\
                                                </div>';
                  }
                  html += '</div>';

                }

                  // html += '<div class="separator separator-dashed"></div>';

                if (item.songs.second_set) {


                          html += '<div style="margin-bottom: 30px;">';
                        html += '<h4 class="text-primary fw-bolder cursor-pointer mb-0" style="margin-top: 20px;">Second Set</h4>';

                     for(let item1 of item.songs.second_set){

                          

                                    html += '<div class="m-0">\
                                                    <div class="d-flex align-items-center  py-3  mb-0" >\
                                                     <h6 class="text-gray-700  cursor-pointer mb-0">'+item1.song_title+'</h6>\
                                                    </div>\
                                                </div>';
                  }

                  html += '</div>';


                }



                        // html += '<div class="separator separator-dashed"></div>';

                if (item.songs.third_set) {

                    html += '<h4 class="text-primary fw-bolder cursor-pointer mb-0">Third Set</h4>';

                     for(let item1 of item.songs.third_set){

                          

                                    html += '<div class="m-0">\
                                                    <div class="d-flex align-items-center  py-3  mb-0" >\
                                                     <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">'+item1.song_title+'</h4>\
                                                    </div>\
                                                </div>';
                  }


                }


      



                  



        html += '</div>';
   }

   $('.shuffled_songs').html(html);



}


load_admins(){



        $.ajax({
            type: "POST",
            url: base_url + "MyProfile/get_admin",
            cache: false,
            dataType: 'json',  
            success: function(data){


                if(data.length > 0){

                    var html = '';

                    for(let item of data ){

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3">\
                                        \
                                                <div class="d-flex align-items-center">\
                                            \
                                                    <div class="symbol symbol-40px symbol-circle me-4">\
                                                        <span class="symbol-label bg-light-primary">\
                                                            \
                                                            <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                              <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">\
                                                <img alt="Pic"  src="'+item.profile_pic+'" />\
                                            </div>\
                                                               \
                                                            </span>\
                                                \
                                                        </span>\
                                                    </div>\
                                        \
                                        \
                                                    <div class="ps-1 mb-1">\
                                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-boldest">'+item.full_name+'</a>\
                                                    </div>\
                                        \
                                                </div>\
                                               \
                                                <span class="badge badge-light rounded-pill fs-7 fw-boldest">Admin</span>\
                                        \
                                            </div>';


                    }

                    $('#admin-list').html(html);



                }





            }

    })


}


load_singer_songs(member_id){

     $.ajax({
            type: "POST",
            url: base_url + "Singers/get_singer_songs1",
            data : {id : member_id},
            cache: false,
            dataType: 'json',  
            success: function(data){



                if(data.length > 0){

                    var html = '';

                    for(let item of data ){

               

                        html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>\
';


                    }

                      $('#singer_songs').html(html);
                }


            }

        })

}


load_singer_songs1(member_id){

     $.ajax({
            type: "POST",
            url: base_url + "Singers/get_singer_songs1",
            data : {id : member_id},
            cache: false,
            dataType: 'json',  
            success: function(data){



                if(data.length > 0){

                    var html = '';

                    for(let item of data ){

               

                        html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 update_selected_song" data-id="'+item.song_id+'"  >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>\
';


                    }

                      $('#singer_songs1').html(html);
                }


            }

        })

}



  checking_contact(){

    if (!$.cookie('con')) {


                        $.ajax({
            type: "POST",
            url: base_url + "members/check_contact",
            cache: false,
            dataType: 'text',  
            success: function(data){

                if (data == 0) {

                    $('#kt_modal_update_contact').modal('show'); 
                   
                }

              

            }

    })

    }










  }


  load_user_data(){


    $.ajax({
            type: "POST",
            url: base_url + "members/user_data",
            cache: false,
            dataType: 'json',  
            success: function(data){

                $('.mem-username').text(data.username);
                $('.mem-name').text(data.full_name);
                 $('.mem-position').text(data.position);
                 $('.mem-profile-pic').attr('src', data.profile_pic);
                 $('.mem-phone-number').text(data.phone_number);
                 $('.mem-email').text(data.email);
                 $('input[name=phone_number]').val(data.phone_number);
                  $('input[name=email]').val(data.email);


            }

    })

  }


  load_calendar_of_gigs(){



     if (typeof FullCalendar === 'undefined' || !document.querySelector('#kt_calendar_widget_1')) {
            return;
        }

        var todayDate = moment().startOf('day');
        var YM = todayDate.format('YYYY-MM');

        console.log(YM);
        var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
        var TODAY = todayDate.format('YYYY-MM-DD');
        var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

        var calendarEl = document.getElementById('kt_calendar_widget_1');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },

            height: 800,
            contentHeight: 780,
            aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

            nowIndicator: true,
            now: TODAY + 'T09:25:00', // just for demo

            views: {
                dayGridMonth: { buttonText: 'month' },
                timeGridWeek: { buttonText: 'week' },
                timeGridDay: { buttonText: 'day' }
            },

            initialView: 'dayGridMonth',
            initialDate: TODAY,

            editable: true,
            dayMaxEvents: true, // allow "more" link when too many events
            navLinks: true,
            events : "<?php echo base_url(); ?>Gigs/load_calendar_of_gigs",
            // events: [
            //     {
            //         title: 'All Day Event',
            //         start: YM + '-01',
            //         description: 'Toto lorem ipsum dolor sit incid idunt ut',
            //         className: "fc-event-danger fc-event-solid-warning"
            //     },
            //     {
            //         title: 'Reporting',
            //         start: YM + '-14T13:30:00',
            //         description: 'Lorem ipsum dolor incid idunt ut labore',
            //         end: YM + '-14',
            //         className: "fc-event-success"
            //     },
            //     {
            //         title: 'Company Trip',
            //         start: YM + '-02',
            //         description: 'Lorem ipsum dolor sit tempor incid',
            //         end: YM + '-03',
            //         className: "fc-event-primary"
            //     },
            //     {
            //         title: 'ICT Expo 2017 - Product Release',
            //         start: YM + '-03',
            //         description: 'Lorem ipsum dolor sit tempor inci',
            //         end: YM + '-05',
            //         className: "fc-event-light fc-event-solid-primary"
            //     },
            //     {
            //         title: 'Dinner',
            //         start: YM + '-12',
            //         description: 'Lorem ipsum dolor sit amet, conse ctetur',
            //         end: YM + '-10'
            //     },
            //     {
            //         id: 999,
            //         title: 'Repeating Event',
            //         start: YM + '-09T16:00:00',
            //         description: 'Lorem ipsum dolor sit ncididunt ut labore',
            //         className: "fc-event-danger"
            //     },
            //     {
            //         id: 1000,
            //         title: 'Repeating Event',
            //         description: 'Lorem ipsum dolor sit amet, labore',
            //         start: YM + '-16T16:00:00'
            //     },
            //     {
            //         title: 'Conference',
            //         start: YESTERDAY,
            //         end: TOMORROW,
            //         description: 'Lorem ipsum dolor eius mod tempor labore',
            //         className: "fc-event-primary"
            //     },
            //     {
            //         title: 'Meeting',
            //         start: TODAY + 'T10:30:00',
            //         end: TODAY + 'T12:30:00',
            //         description: 'Lorem ipsum dolor eiu idunt ut labore'
            //     },
            //     {
            //         title: 'Lunch',
            //         start: TODAY + 'T12:00:00',
            //         className: "fc-event-info",
            //         description: 'Lorem ipsum dolor sit amet, ut labore'
            //     },
            //     {
            //         title: 'Meeting',
            //         start: TODAY + 'T14:30:00',
            //         className: "fc-event-warning",
            //         description: 'Lorem ipsum conse ctetur adipi scing'
            //     },
            //     {
            //         title: 'Happy Hour',
            //         start: TODAY + 'T17:30:00',
            //         className: "fc-event-info",
            //         description: 'Lorem ipsum dolor sit amet, conse ctetur'
            //     },
            //     {
            //         title: 'Dinner',
            //         start: TOMORROW + 'T05:00:00',
            //         className: "fc-event-solid-danger fc-event-light",
            //         description: 'Lorem ipsum dolor sit ctetur adipi scing'
            //     },
            //     {
            //         title: 'Birthday Party',
            //         start: TOMORROW + 'T07:00:00',
            //         className: "fc-event-primary",
            //         description: 'Lorem ipsum dolor sit amet, scing'
            //     },
            //     {
            //         title: 'Click for Google',
            //         url: 'http://google.com/',
            //         start: YM + '-28',
            //         className: "fc-event-solid-info fc-event-light",
            //         description: 'Lorem ipsum dolor sit amet, labore'
            //     }
            // ]
        });

        calendar.render();
  
  }

  load_gigs_in_list(){
      

       $.ajax({
            type: "POST",
            url: base_url + "Gigs/get_gigs",
            cache: false,
            dataType: 'json',  
            success: function(data){


                console.log(data.length)


                let number_of_gigs = 0;


                number_of_gigs = data.length;

                $('.number_of_gigs').text(number_of_gigs);

                if(data.length > 0){

                    var html = '';
                    var style = '';

                    for(let item of data ){

                        if (item.a ==  1) {

                                style = 'style="border: 1px solid red;"';



                        }else {
                            style = '';
                        }

                      html += ' <div class="timeline-item"  >\
                              <div class="timeline-line w-40px" ></div>\
                              <div class="timeline-icon symbol symbol-circle symbol-40px" '+style+' >\
                                <div class="symbol-label bg-light">\
                                 <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Map/Marker1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
        <rect x="0" y="0" width="24" height="24"/>\
        <path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/>\
    </g>\
                                </div>\
                              </div>\
                              <div class="timeline-content mb-10 mt-n1">\
                                <div class="pe-3 mb-5">          \
                                  <div class="fs-5 fw-bold mb-2">'+item.event+' at\
                                  <a href="#" class="text-primary fw-bolder me-1">'+item.location+'</a> </div>  \
                                  <div class="overflow-auto pb-5">                 \
                                  <div class="d-flex align-items-center mt-1 fs-6">             \
                                      <div class="text-muted me-2 fs-7"><a href="#" class="text-primary fw-bolder me-1">Date :  '+item.date+' - Start Time: '+item.time+'</a></div>             \
                                    </div>\
                                    <div class="d-flex align-items-center mt-1 fs-6">             \
                                      <div class="text-muted me-2 fs-7">Added  by</div>             \
                                      <a href="#" class="text-primary fw-bolder me-1">'+item.name+'</a>\
                                    </div>\
                                    <button class="btn btn-success" id="kt_explore_setlist111" data-setlist="'+item.setlist+'" data-id="'+item.gig_id+'" data-number="'+item.number_of_sets+'">View Setlist</button>';
                                if (item.b) {
                              html += '<button class="btn btn-primary" data-setlist="'+item.setlist+'" data-id="'+item.gig_id+'" data-number="'+item.number_of_sets+'" id="kt_create_setlist">Create/Update Setlist</button><button class="btn btn-danger delete_gig" data-setlist="'+item.setlist+'" data-id="'+item.gig_id+'" data-number="'+item.number_of_sets+'" >Delete</button><button class="btn btn-info edit_gig" data-setlist="'+item.setlist+'" data-id="'+item.gig_id+'" data-number="'+item.number_of_sets+'" >Edit</button>';
                          }else {
                            
                          }

                                  
                                 html += ' </div>\
                                </div>          \
                              </div>\
                            </div>';


                    }

                      // <button class="btn btn-primary" data-setlist="'+item.setlist+'" data-id="'+item.gig_id+'" id="kt_explore_setlist_add">Add Setlist</button>

                     $('#gig_list').html(html);
                     

                     $('.gig-setlist-gig').html(html);






                  }




            }

          })
  }

  // '+item.created+'

  load_singers(){



    // <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-light-primary delete-sing" style="margin-right: 5px;"  data-id="'+item.singer_id+'"    > <i class="fas fa-exclamation-circle ms-2 fs-7 data-bs-toggle="tooltip" title="Delete this item"></i></button>\
    //                                                         <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-light-primary update-singer " data-id="'+item.singer_id+'" data-singer="'+item.singer_name+'" style="margin-right: 5px;"  >     <i class="fas fa-pen ms-2 fs-7" data-bs-toggle="tooltip" title="update item"></i></button>\
    //                                                       \
    //                                                         <input type="checkbox"  name="multi-singer" style="margin-right: 5px;" value="'+item.singer_id+'" id="c_checkbox" onclick="is_singer_check()" >\

        $.ajax({
            type: "POST",
            url: base_url + "singers/get_singers",
            cache: false,
            dataType: 'json',  
            success: function(data){
               
               if(data.length > 0){

                    var html = '';

                    for(let item of data ){

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3" class="target"><div class="d-flex align-items-center">\
                                                            \
                                                            \
                                                            <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                      <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">\
                                                <img alt="Pic"  src="'+item.profile_pic+'" />\
                                            </div>\
\
                                                                        </span>\
\
                                                                </span>\
                                                            </div>\
                                                            \
                                                            <div class="ps-1 mb-1" id="myElement">\
                                                                <a href="'+base_url+'singers?view=songs&&id='+item.singer_id+'" class="fs-5 text-gray-800 text-hover-primary fw-boldest"  >'+item.singer_name+'</a>\
                                                            </div>\
\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest">'+item.count+' songs</span>\
                                                    </div>';

                    }

                    $('.singers-table').html(html);
               }

              
            }
    })


  }



  load_session_singers(){



    // <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-light-primary delete-sing" style="margin-right: 5px;"  data-id="'+item.singer_id+'"    > <i class="fas fa-exclamation-circle ms-2 fs-7 data-bs-toggle="tooltip" title="Delete this item"></i></button>\
    //                                                         <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-light-primary update-singer " data-id="'+item.singer_id+'" data-singer="'+item.singer_name+'" style="margin-right: 5px;"  >     <i class="fas fa-pen ms-2 fs-7" data-bs-toggle="tooltip" title="update item"></i></button>\
    //                                                       \
    //                                                         <input type="checkbox"  name="multi-singer" style="margin-right: 5px;" value="'+item.singer_id+'" id="c_checkbox" onclick="is_singer_check()" >\

        $.ajax({
            type: "POST",
            url: base_url + "singers/get_singers_session",
            cache: false,
            dataType: 'json',  
            success: function(data){
               
               if(data.length > 0){

                    var html = '';

                    for(let item of data ){

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3" class="target"><div class="d-flex align-items-center">\
                                                            \
                                                            \
                                                            <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                      <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">\
                                                <img alt="Pic"  src="'+item.profile_pic+'" />\
                                            </div>\
\
                                                                        </span>\
\
                                                                </span>\
                                                            </div>\
                                                            \
                                                            <div class="ps-1 mb-1" id="myElement">\
                                                                <a href="'+base_url+'singers?view=songs&&id='+item.singer_id+'" class="fs-5 text-gray-800 text-hover-primary fw-boldest"  >'+item.singer_name+'</a>\
                                                            </div>\
\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest">'+item.count+' songs</span>\
                                                    </div>';

                    }

                    $('.sessions-singers-table').html(html);
               }

              
            }
    })


  }


load_members(){


     $.ajax({
            type: "POST",
            url: base_url + "Members/get_members",
            cache: false,
            dataType: 'json',  
            success: function(data){
               
               if(data.length > 0){

                    var html = '';  

                    
                  

                    for(let item of data ){

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3" class="target"><div class="d-flex align-items-center">\
                                                            ';
                            if (item.a) {
                            html += '   <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-light-primary delete-member" style="margin-right: 5px;"  data-id="'+item.member_id+'"    > <i class="fas fa-exclamation-circle ms-2 fs-7 data-bs-toggle="tooltip" title="Delete this item"></i></button>\
                                                            <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-light-primary update-member " data-id="'+item.member_id+'" data-member="'+item.full_name+'" style="margin-right: 5px;"  >     <i class="fas fa-pen ms-2 fs-7" data-bs-toggle="tooltip" title="update item"></i></button>\
                                                          \
                                                            <input type="checkbox"  name="multi-member" style="margin-right: 5px;" value="'+item.member_id+'" id="c_checkbox" onclick="is_singer_check()" >\
                                                            ';
                                };

                                           html+='                 <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                   <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">\
                                                <img alt="Pic"  src="'+item.profile_pic+'" />\
                                            </div>\
\
                                                                </span>\
                                                            </div>\
                                                            \
                                                            <div class="ps-1 mb-1" id="myElement">\
                                                                <a href="'+base_url+'singers?view=songs&&id='+item.member_id+'" class="fs-5 text-gray-800 text-hover-primary fw-boldest"  >'+item.full_name+'</a>\
                                                            </div>\
\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest">'+item.position+' </span>\
                                                    </div>';



                 

                    }



                    $('.members-table').html(html);
               }

              
            }
    })

}



load_sessions(){


     $.ajax({
            type: "POST",
            url: base_url + "Members/get_sessions",
            cache: false,
            dataType: 'json',  
            success: function(data){
               
               if(data.length > 0){

                    var html = '';  

                    
                  

                    for(let item of data ){

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3" class="target"><div class="d-flex align-items-center">\
                                                            ';
                            if (item.a) {
                            html += '   <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-light-primary delete-member" style="margin-right: 5px;"  data-id="'+item.member_id+'"    > <i class="fas fa-exclamation-circle ms-2 fs-7 data-bs-toggle="tooltip" title="Delete this item"></i></button>\
                                                            <button type="button" class="btn btn-sm btn-icon btn-icon-primary btn-active-light-primary update-member " data-id="'+item.member_id+'" data-member="'+item.full_name+'" style="margin-right: 5px;"  >     <i class="fas fa-pen ms-2 fs-7" data-bs-toggle="tooltip" title="update item"></i></button>\
                                                          \
                                                            <input type="checkbox"  name="multi-member" style="margin-right: 5px;" value="'+item.member_id+'" id="c_checkbox" onclick="is_singer_check()" >\
                                                            ';
                                };

                                           html+='                 <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                   <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">\
                                                <img alt="Pic"  src="'+item.profile_pic+'" />\
                                            </div>\
\
                                                                </span>\
                                                            </div>\
                                                            \
                                                            <div class="ps-1 mb-1" id="myElement">\
                                                                <a href="'+base_url+'singers?view=songs&&id='+item.member_id+'" class="fs-5 text-gray-800 text-hover-primary fw-boldest"  >'+item.full_name+'</a>\
                                                            </div>\
\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest">'+item.position+' </span>\
                                                    </div>';



                 

                    }



                    $('.sessions-table').html(html);
               }

              
            }
    })

}




load_setlist_songs(gig_id,set_number){





         $.ajax({
            type: "POST",
            url: base_url + "Setlist/get_setlist_songs",
            data : {gig_id : gig_id,set_number : set_number},
            cache: false,
            dataType: 'json',  
            success: function(data){

                var set = '';
                var html = '';
                let c = 0;

                var sum = 0;
                for (var i = 0; i  < data.length; i++) {

                    

                    sum += parseInt(data[i].length);


                }

                html += '<h1 class="mb-4"> TOTAL = <span style="color: red;">'+sum+'</span></h1>'
                
      




                 for (var i = 0; i  < data.length; i++) {

                       
                        c = i+1;

                         
                         html += '<h1>'+c+' SET</h1>' + '<h2 ><span style="color: red;">#</span> '+data[i].length+'<h2>' ;

                         
                        for(let item of data[i] ){


                                if (item.set_number == c) {


                                    html += '<div class="d-flex flex-stack item-border-hover px-5 py-1 ms-n4 mb-1 mt-1" ">\
                                                        <div class="d-flex align-items-center">';

                                    html += ' <div class="">\
                                                                <a href="javascript:;" data-id="'+item.setlist_id+'" data-gd="'+gig_id+'" data-sn="'+set_number+'" data-songer="'+item.full_name+'" data-songerid="'+item.member_id+'"  class="fs-5 text-gray-800 text-hover-primary fw-boldest del-up-set-song">'+item.song_title+'</a><span class="fs-5">('+item.full_name+')</span>\
                                                            </div>';

                                    html += '  </div></div>';
                            }else {

                                html +='<div class="mt-10"></div>';
                            }

                        }








                        
                        // set += '<h1>'+c+' </h1>  ';
                        
                        // html += '<h1>'+c+'</h1>';

                        

                        // for(let item of data ){



                        //     for(let l of item ){



                        //     if (l.set_number == c) {


                                    

                            //         html += '<div class="d-flex flex-stack item-border-hover px-5 py-1 ms-n4 mb-1 mt-1" ">\
                            //                             <div class="d-flex align-items-center">';

                            //         html += ' <div class="">\
                            //                                     <a href="javascript:;" data-id="'+l.setlist_id+'" data-gd="'+gig_id+'" data-sn="'+set_number+'" data-songer="'+l.full_name+'" data-songerid="'+l.member_id+'"  class="fs-5 text-gray-800 text-hover-primary fw-boldest del-up-set-song">'+l.song_title+'</a><span class="fs-5">('+l.full_name+')</span>\
                            //                                 </div>';

                            //         html += '  </div></div>';
                            // }else {

                            //     html +='<div class="mt-8"></div>';
                            // }

                        // }

                        // }



                 }
                  $('#setlist_song').html(html);
                  // $('#setlist_number').html(set);


            }

        })




     // $.ajax({
     //        type: "POST",
     //        url: base_url + "Setlist/get_setlist_songs",
     //        data : {gig_id : gig_id,set_number : set_number},
     //        cache: false,
     //        dataType: 'json',  
     //        success: function(data){

     //            var html = '';
     //            let c = 0;

     //            if (data.length  > 0) {

     //                     for (var i = 0; i  < data.length; i++) {
                                
     //                            html += i + 1;


     //                     }

     //                     $('#setlist_song').html(html);
                   
     //              // $('#setlist_song').html(html);
     //            }else {

     //                $('#setlist_song').html('<h1>EMPTY</h1>');
     //            }

     //        }

     //    })


}



view_setlist_songs(gig_id,set_number){





         $.ajax({
            type: "POST",
            url: base_url + "Setlist/get_setlist_songs",
            data : {gig_id : gig_id,set_number : set_number},
            cache: false,
            dataType: 'json',  
            success: function(data){

                var set = '';
                var html = '';
                let c = 0;
                 for (var i = 0; i  < data.length; i++) {

                        c = i+1;

                        set += '<h1>'+c+'</h1>';
                          html += '<h1>'+c+'</h1>';

                        for(let item of data ){


                            for(let l of item ){

                            if (l.set_number == c) {

                                  

                                    html += '<div class="d-flex flex-stack item-border-hover px-5 py-1 ms-n4 mb-1 mt-1" >\
                                                        <div class="d-flex align-items-center">';

                                    html += ' <div class="">\
                                                                <a href="javascript:;" data-id="'+l.setlist_id+'"  id="view_lsrics" data-gd="'+gig_id+'" data-sn="'+set_number+'" data-songer="'+l.full_name+'" data-songerid="'+l.member_id+'" data-songtitle="'+l.song_title+'" data-songid="'+l.song_id+'"    class="fs-5 text-gray-800 text-hover-primary fw-boldest view_lyrics " ><span class="fs-6">['+l.key_c+']</span>'+l.song_title+'</a><span class="fs-5">('+l.full_name+')</span>\
                                                            </div>';

                                    html += '  </div></div>';
                            }else {

                                html +='<div class="mt-8"></div>';
                            }

                        }

                        }



                 }
                  $('#setlist_song1').html(html);
                  // $('#setlist_number').html(set);


            }

        })

     }



}



// function is_singer_check(){
//     if (document.getElementsByName('multi-singer').checked){
//     // document.getElementsByName('multi-singer').parent().parent().css({"color": "red", "border": "2px solid red"});

//     alert('sdf')
//     }

// }


let Load = new load_data();
Load.load_user_data();
Load.checking_contact();
Load.load_admins();
Load.load_session_singers();
Load.load_sessions();
Load.load_feed();
Load.get_total_income();



$(document).on('click','button.delete_gig',function (e) { 

   delete_item($(this).data('id'),url='Gigs/delete');

})

$(document).on('click','a.view_lyrics',function (e) { 

    var id = $(this).data('songid');
    var song_title = $(this).data('songtitle');

        var sets = '<button class="btn btn-danger search_google" data-val="'+song_title+'" >Open Ultimate Guitar</button> <button class="btn btn-primary " data-id="'+id+'"  id="view_lyrics" >View lyrics</button>';



             Swal.fire({
  title: "<i>Actions</i>", 
  html: sets,  
 showCancelButton: false,
  showConfirmButton : false,
}) 









});


$(document).on('click','button#view_lyrics',function (e) { 

            swal.close();

             var id = $(this).data('id')

             $.ajax({
            type: "POST",
            url: base_url + "Song/get_song",
            data: {id : id},
            cache: false,
            dataType: 'json',  
            success: function(data){

                    $('.song_title_section').text(data.song_title);
                    $('.drawer_artist_section').text(data.artist_name);
                    $('.lyrics_section').html(data.lyrics);

            }


        })


    })

 $(document).on('click','button#kt_explore_setlist111',function (e) { 

          var gig_id = $(this).data('id')
                var set_number =$(this).data('number');

                        window.location.href = base_url + 'setlist?view=songs&&gig_id='+gig_id+'&&set_number='+set_number+'';

              
                // Load.view_setlist_songs(gig_id,set_number);
           
    })


$(document).on('click','a.del-up-set-song',function (e) { 


     var sets = '<button class="btn btn-danger delete_set" data-id="'+$(this).data('id')+'" >Delete</button> <button class="btn btn-primary update_set" data-id="'+$(this).data('id')+'" data-songer="'+$(this).data('songer')+'" data-songerid="'+$(this).data('songerid')+'" >Update</button>';

   Swal.fire({
  title: "<i>Actions</i>", 
  html: sets,  
 showCancelButton: false,
  showConfirmButton : false,
}) 



    })


$(document).on('click','button.delete_set',function (e) { 


     
    var ids = $('input[name=gig_id]').val();
    var set_number = $('input[name=set_number]').val();
     var url = 'Setlist/delete_setlist_song';
     var id = $(this).data('id');

     console.log(id)

       Swal.fire({
        title: "Are you sure?",
        text: "You wont be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
    }).then(function(result) {
        if (result.value) {
            
                    $.ajax({
                            type: "POST",
                            url: base_url + url,
                            data: {id:id},
                            cache: false,
                            dataType: 'json', 
                            beforeSend : function(){

                                  Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })

                            },
                            success: function(data){
                               if (data.response) {

                                  Swal.fire(
                "",
                "Deleted Successfully",
                "success"
            )
                                
                               }

                                 Load.load_setlist_songs(ids,set_number);
                            }
                    })



            // result.dismiss can be "cancel", "overlay",
            // "close", and "timer"
        } else if (result.dismiss === "cancel") {
           swal.close()

        }
    });

   
   

})


$(document).on('click','button.update_set',function (e) { 


    swal.close()
     $('input[name=setlist_id]').val($(this).data('id'));
      $('input[name=search_singer1]').val($(this).data('songer'));
       $('input[name=singee_id]').focus();
      $('input[name=singee_id]').val($(this).data('songerid'));
     $('#search_singer_modal').modal('show'); 


//  Swal.fire({
//   title: "<i>Select Set</i>", 
//   html: '<input type="text" name="search_singer1"><input type="text" name="setlist_id" value="'+$(this).data('id')+'">',  
//  showCancelButton: false,
//   showConfirmButton : false,
// }) 

})







$('#song_type1').on('change', function() {
  var singer_id = $('input[name=singe_id]').val();








    if ($('select[id=song_type1]').val() == 'upbeat') {

        $('.s_type1').text('Up Beat')


         $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){

                swal.close();
                if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                      $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


               


            }

        })


    }
       if ($('select[id=song_type1]').val() == 'fast song') {

        $('.s_type1').text('Fast Song / Rock')


         $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){

                swal.close();
                if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                      $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


               


            }

        })


    }
    else if ($('select[id=song_type1]').val() == 'foreign classic') {

        $('.s_type1').text('Foreign Class Rock')


         $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){

                swal.close();
                if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                      $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


               


            }

        })


    }
      else if ($('select[id=song_type1]').val() == 'foreign classic rock') {

        $('.s_type1').text('Foreign Class Rock')


         $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){

                swal.close();
                if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                      $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


               


            }

        })


    }else if ($('select[id=song_type1]').val() == 'first set') {



        $('.s_type1').text('First Set')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {
                            html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                     $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


            }

        })
    }else if ($('select[id=song_type1]').val() == 'reggae') {



        $('.s_type1').text('Reggae')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {
                            html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                     $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


            }

        })
    }
    else if ($('select[id=song_type1]').val() == 'opm rock') {



        $('.s_type1').text('OPM ROCK')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {
                            html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                     $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


            }

        })
    }
     else if ($('select[id=song_type1]').val() == 'emo') {



        $('.s_type1').text('Emo')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {
                            html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                     $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


            }

        })
    }
    else if ($('select[id=song_type1]').val() == 'vispop') {



        $('.s_type1').text('VISPOP')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json', 
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },    
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {
                            html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                     $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


            }

        })
    }

else if ($('select[id=song_type1]').val() == 'bisrock') {



        $('.s_type1').text('BISROCk')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json', 
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },    
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {
                            html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                     $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


            }

        })
    }
    else if ($('select[id=song_type1]').val() == 'RNB') {



        $('.s_type1').text('RNB')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json', 
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },    
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {
                            html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                     $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


            }

        })
    }

    else if ($('select[id=song_type1]').val() == 'bossa nova') {



        $('.s_type1').text('Bossa Nova')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json', 
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },    
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {
                            html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                     $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


            }

        })
    }

    else if ($('select[id=song_type1]').val() == 'opm classic') {



        $('.s_type1').text('Opm Classic')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type1]').val() },
            cache: false,
            dataType: 'json', 
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },    
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {
                            html += '<div class="mb-0">\
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">\
                                        <span class="d-flex align-items-center me-2">\
                                            <span class="svg-icon svg-icon-1 svg-icon-primary " style="padding-right: 10px">\
                                            </span>\
                                        <span class="d-flex flex-column">\
                                            <span class="fw-bolder text-gray-800 text-hover-primary fs-5 selected_song" data-id="'+item.song_id+'" data >'+item.song_title+'\
                                        </span>\
                                </label>\
                             </div>';


                    } 

                     $('#singer_songs').html(html);

                }else {
                    $('#singer_songs').html('');
                }


            }

        })
    }




    else if ($('select[id=song_type1]').val() == 0) {

        Load.load_singer_songs(singer_id);
    }
});


 $(document).on('click','span.update_selected_song',function (e) {  



    var id =$('input[name=gig_id]').val();
    

        var set_number = $(this).data('id');



        var singer_id = $('input[name=singee_id]').val();
        var setlist_id = $('input[name=setlist_id]').val();
        var song_id = $(this).data('id');


         $.ajax({
                            type: "POST",
                            url: base_url + 'Setlist/update_selected_song',
                            data: {song_id :song_id, singer_id : singer_id , setlist_id : setlist_id },
                            cache: false,
                            dataType: 'json', 
                            beforeSend : function(){

                                  Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })

                            },
                            success: function(data){
                               if (data.response) {

                                  Swal.fire(
                "",
                "Added Successfully",
                "success"
            )

                                  Load.load_setlist_songs(id,set_number);
                                
                               }

                               
                            }
                    })

    // var sets = '';
    // let count = 0;
    // var song_id = $(this).data('id');
    // var gig_id = $('input[name=gig_id]').val();

//     for (var i = 0; i <  $('input[name=set_number]').val() ; i++) {
            
//             count = i + 1;
//             sets += '<button class="btn btn-success update_selected_set" data-sid="'+song_id+'" data-gd="'+gig_id+'" data-id="'+count+'">'+count+'</button>';
//     }




//     Swal.fire({
//   title: "<i>Select Set</i>", 
//   html: sets,  
//  showCancelButton: false,
//   showConfirmButton : false,
// })


 })


   $(document).on('click','button.update_selected_set',function (e) {  

        var id = $(this).data('gd');
        var set_number = $(this).data('id');



        var singer_id = $('input[name=singee_id]').val();
        var setlist_id = $('input[name=setlist_id]').val();
        var song_id = $(this).data('sid');


         $.ajax({
                            type: "POST",
                            url: base_url + 'Setlist/update_selected_song',
                            data: {set_number:set_number,song_id :song_id, singer_id : singer_id , setlist_id : setlist_id },
                            cache: false,
                            dataType: 'json', 
                            beforeSend : function(){

                                  Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })

                            },
                            success: function(data){
                               if (data.response) {

                                  Swal.fire(
                "",
                "Added Successfully",
                "success"
            )

                                  Load.load_setlist_songs(id,set_number);
                                
                               }

                               
                            }
                    })

  })




 $(document).on('click','span.selected_song',function (e) {  

    var sets = '';
    let count = 0;
    var song_id = $(this).data('id');
    var gig_id = $('input[name=gig_id]').val();

    for (var i = 0; i <  $('input[name=set_number]').val() ; i++) {
            
            count = i + 1;
            sets += '<button class="btn btn-success selected_set" data-sid="'+song_id+'" data-gd="'+gig_id+'" data-id="'+count+'">'+count+'</button>';
    }




    Swal.fire({
  title: "<i>Select Set</i>", 
  html: sets,  
 showCancelButton: false,
  showConfirmButton : false,
})








 })




  $(document).on('click','button.selected_set',function (e) {  

        var id = $(this).data('gd');
        var set_number = $(this).data('id');


         $.ajax({
                            type: "POST",
                            url: base_url + 'Setlist/save_selected_song',
                            data: {set_number:$(this).data('id'),gig_id : $(this).data('gd'),song_id : $(this).data('sid'), singer_id : $('input[name=singe_id]').val()},
                            cache: false,
                            dataType: 'json', 
                            beforeSend : function(){

                                  Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })

                            },
                            success: function(data){
                               if (data.response) {

                                  Swal.fire(
                "",
                "Added Successfully",
                "success"
            )

                                  Load.load_setlist_songs(id,set_number);
                                
                               }

                               
                            }
                    })

  })


 $(document).on('click','button#kt_create_setlist',function (e) {   

            var count ;
            var html = '';
            $('input[name=gig_id]').val($(this).data('id'));
            $('input[name=set_number]').val($(this).data('number'));


            Load.load_setlist_songs($(this).data('id'),$(this).data('number'));

            // $('input[name=gig_id]').$(this).data('id');
           for (var i = 0; i < $(this).data('number') ; i++) {
                    
                    count  = i+1;

                    html += '<h1>'+count+'</h1>';
                  


           }


             $('#setlist_number').html(html)


    })


 $(document).on('click','.update-singer',function (e) {


    Swal.fire({
  title: '',
  html: `<input type="hidden" id="id" class="swal2-input" value="`+$(this).data('id')+`" placeholder="Username">
  <input type="text" id="singer" class="swal2-input" value="`+$(this).data('singer')+`" placeholder="Password">`,
  confirmButtonText: 'Update',
  focusConfirm: false,
  preConfirm: () => {
    const id = Swal.getPopup().querySelector('#id').value
    const singer = Swal.getPopup().querySelector('#singer').value
    if (!singer) {
      Swal.showValidationMessage(`Error`)
    }else {
            $.ajax({
                            type: "POST",
                            url: base_url + 'singers/update',
                            data: {id:id,singer:singer},
                            cache: false,
                            dataType: 'json',  
                            success: function(data){
                               if (data.response) {

                                  Swal.fire(
                "",
                "Updated",
                "success"
            )
                                
                               }

                                Load.load_singers();
                            }
                    })
    }
   
  }
})

    // .then((result) => {





// })

})






$(document).on('click','button#kt_explore_setlist_add',function (e) {

    $('input[name=gig_id]').val($(this).data('id'));


    // 
    var id = $(this).data('id');
    tinyMCE.get('setlist').setContent('<p><strong>Almira&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rene Jan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Christine&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Almira&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rene Jan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Christine&nbsp; &nbsp;&nbsp;</strong></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p>&nbsp;</p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>\
<p><span style="font-size: 9pt;">sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sample&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; sample</span></p>')

          $.ajax({
                            type: "POST",
                            url: base_url + 'Setlist/get_setlist',
                            data : {id : id},
                            cache: false,
                            dataType: 'json',  
                            success: function(data){

                                console.log(data.setlist)

                                tinyMCE.get('setlist').setContent(data.setlist)

                               
                            }

                        })

    })


  $(document).on('click','.update-member',function (e) {


// let position = [];


      // $.ajax({
      //                       type: "GET",
      //                       url: base_url + 'members/get_position',
      //                       cache: false,
      //                       dataType: 'text',  
      //                       success: function(data){

      //                          position.push(data);
      //                       }

      //                   })

// console.log(position)





    Swal.fire({
  title: '',
  html: `<input type="hidden" id="id" class="swal2-input" value="`+$(this).data('id')+`" placeholder="Username">
  <input type="text" id="singer" class="swal2-input" value="`+$(this).data('member')+`" placeholder="Password">
  <select class="swal2-input" style="width: 60%;" id="position">
     <?php
                                                                    foreach($this->config->item('band_position') as $row):
                                                                      echo '
                                                                        <option value="'.$row.'">'.$row.'</option> 
                                                                      ';
                                                                    endforeach;
                                                                    ?> 
  </select>
  `,
  confirmButtonText: 'Update',
  focusConfirm: false,
  preConfirm: () => {
    const id = Swal.getPopup().querySelector('#id').value
    const member = Swal.getPopup().querySelector('#singer').value
    const position = Swal.getPopup().querySelector('#position').value
    if (!singer) {
      Swal.showValidationMessage(`Error`)
    }else {
            $.ajax({
                            type: "POST",
                            url: base_url + 'members/update',
                            data: {id:id,member:member, position : position},
                            cache: false,
                            dataType: 'json',  
                            success: function(data){
                               if (data.response) {

                                  Swal.fire(
                "",
                "Updated",
                "success"
            )
                                
                               }

                                Load.load_members();
                            }
                    })
    }
   
  }
})

    // .then((result) => {





// })

})






  // Swal.fire(`
  //   Login: ${result.value.id}
  //   Password: ${result.value.singer}
  // `.trim())




 $(document).on('click','a#print_setlist',function (e) {


    $("#setlist_song1").print({
            globalStyles: true,
            mediaPrint: false,
            stylesheet: null,
            noPrintSelector: ".no-print",
            iframe: true,
            append: null,
            prepend: null,
            manuallyCopyFormValues: true,
            deferred: $.Deferred(),
            timeout: 750,
            title: null,
            doctype: '<!doctype html>'
    });


 })


 $(document).on('click','a#print_lyrics',function (e) {


    $("#lyrics").print({
            globalStyles: true,
            mediaPrint: false,
            stylesheet: null,
            noPrintSelector: ".no-print",
            iframe: true,
            append: null,
            prepend: null,
            manuallyCopyFormValues: true,
            deferred: $.Deferred(),
            timeout: 750,
            title: null,
            doctype: '<!doctype html>'
    });


 })

 $(document).on('click','a#print_songs',function (e) {


    $(".shuffled_songs").print({
            globalStyles: true,
            mediaPrint: false,
            stylesheet: null,
            noPrintSelector: ".no-print",
            iframe: true,
            append: null,
            prepend: null,
            manuallyCopyFormValues: true,
            deferred: $.Deferred(),
            timeout: 750,
            title: null,
            doctype: '<!doctype html>'
    });


 })



 $(document).on('click','button.print-singer-songs',function (e) {


    $(".singer-song-table").print({
            globalStyles: true,
            mediaPrint: false,
            stylesheet: null,
            noPrintSelector: ".no-print",
            iframe: true,
            append: null,
            prepend: null,
            manuallyCopyFormValues: true,
            deferred: $.Deferred(),
            timeout: 750,
            title: null,
            doctype: '<!doctype html>'
    });


 })

 $(document).on('click','.delete-sing',function (e) {

     
    delete_item($(this).data('id'),url='singers/delete');



 })


  $(document).on('click','.delete-member',function (e) {

     
    delete_item($(this).data('id'),url='members/delete');



 })



 $(document).on('click','.delete-multi-members',function (e) {


    // 

    // 

      var selectedValues = [];
        $('input[name=multi-member]:checked').map(function() {
                    selectedValues.push($(this).val());




        });




        if (selectedValues.length < 1) {
            alert('please Select at least one');
        }else {

            delete_item(selectedValues,url='members/delete');
        }




 })



 $(document).on('click','.search_google',function (e) {

    // window.open('https://www.google.com/search?q='+$(this).data('val')+' lyrics','_blank')
    window.open('https://www.ultimate-guitar.com/search.php?search_type=title&value='+$(this).data('val'),'_blank')

 })


 $(document).on('click','.delete-multi-singer',function (e) {


    // 

    // 

      var selectedValues = [];
        $('input[name=multi-singer]:checked').map(function() {
                    selectedValues.push($(this).val());




        });

        if (selectedValues.length < 1) {
            alert('please Select at least one');
        }else {

            delete_item(selectedValues,url='singers/delete');
        }




 })


 $(document).on('click','.delete-multi-artist',function (e) {


    // 

    // 

      var selectedValues = [];
        $('input[name=multi-artist]:checked').map(function() {
                    selectedValues.push($(this).val());




        });



        if (selectedValues.length < 1) {
            alert('please Select at least one');
        }else {

            delete_item(selectedValues,url='artist/delete');
        }




 })






// function delete_(id) {




// }


$(document).ready(function(){
$(".target").on("swiperight",function(){
  alert("You swiped right!");
});
});


// document.addEventListener('keydown', function() {
//     if (event.keyCode == 123) {
//       alert("You Can not Do This!");
//       return false;
//     } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
//       alert("You Can not Do This!");
//       return false;
//     } else if (event.ctrlKey && event.keyCode == 85) {
//       alert("You Can not Do This!");
//       return false;
//     }
//   }, false);
  
//   if (document.addEventListener) {
//     document.addEventListener('contextmenu', function(e) {
//       alert("You Can not Do This!");
//       e.preventDefault();
//     }, false);
//   } else {
//     document.attachEvent('oncontextmenu', function() {
//       alert("You Can not Do This!");
//       window.event.returnValue = false;
//     });
//   }

Load.load_singers();
Load.load_members();

    $('.menuu').on('click', function() {

      var data =  $(this).data("id");

        if (data === 'band_members') {
            ChangeUrl('Page1', 'band-members');
            $('.dashboard_section').addClass('d-none');
            $('#add_song').addClass('d-none');
             $('.welcome_section').addClass('d-none');
               $('.home_section').addClass('d-none');
            $(function(){
            $(document).attr("title", "Band Members");
            });

        }else if (data === 'band_position') {
            ChangeUrl('Page1', 'band-position');
            $('.dashboard_section').addClass('d-none');
            $('#add_song').addClass('d-none');
             $('.welcome_section').addClass('d-none');
               $('.home_section').addClass('d-none');
            $(function(){
            $(document).attr("title", "Band Position");
            });
        }else if (data === 'dashboard') {
            $(function(){
            $(document).attr("title", "Dashboard");
            });
            $('.artist_section').addClass('d-none');
            $('.dashboard_section').removeClass('d-none');
            $('.songs_section').addClass('d-none');
            $('#add_song').addClass('d-none');
            $('.singers_section').addClass('d-none');
              $('.members_section').addClass('d-none');
               $('.welcome_section').addClass('d-none');
               $('.setlist_section').addClass('d-none');
                 $('.home_section').addClass('d-none');
            ChangeUrl('Page1', 'dashboard');
        }else if (data === 'artist') {
            ChangeUrl('Page1', 'artist');
            $('.artist_section').removeClass('d-none');
            $('.dashboard_section').addClass('d-none');
            $('.songs_section').addClass('d-none');
            $('#add_song').addClass('d-none');
            $('.singers_section').addClass('d-none');
              $('.members_section').addClass('d-none');
               $('.welcome_section').addClass('d-none');
               $('.setlist_section').addClass('d-none');
                 $('.home_section').addClass('d-none');
            $(function(){
            $(document).attr("title", "Artist");
            });
        }else if (data === 'songs') {
            ChangeUrl('Page1', 'songs');
            $('.dashboard_section').addClass('d-none');
            $('.artist_section').addClass('d-none');
            $('#add_song').removeClass('d-none');
            $('.songs_section').removeClass('d-none');
             $('.singers_section').addClass('d-none');
               $('.members_section').addClass('d-none');
                $('.welcome_section').addClass('d-none');
                $('.setlist_section').addClass('d-none');
                  $('.home_section').addClass('d-none');

            $(function(){
            $(document).attr("title", "Songs");
            });
        }else if(data == 'singers'){
            ChangeUrl('Page1', 'singers');

            $('.dashboard_section').addClass('d-none');
            $('.artist_section').addClass('d-none');
            $('#add_song').addClass('d-none');
            $('.songs_section').addClass('d-none');
             $('.members_section').addClass('d-none');

             $('.singers_section').removeClass('d-none');
              $('.welcome_section').addClass('d-none');
              $('.setlist_section').addClass('d-none');

                $('.home_section').addClass('d-none');
            $(function(){
            $(document).attr("title", "Singers");
            });

            Load.load_singers();
            
        }else if(data == 'members'){

             ChangeUrl('Page1', 'members');

            $('.dashboard_section').addClass('d-none');
            $('.artist_section').addClass('d-none');
            $('#add_song').addClass('d-none');
            $('.songs_section').addClass('d-none');

             $('.singers_section').addClass('d-none');
              $('.members_section').removeClass('d-none');
               $('.welcome_section').addClass('d-none');
               $('.setlist_section').addClass('d-none');
                 $('.home_section').addClass('d-none');

            $(function(){
            $(document).attr("title", "Members");
            });

        }else if (data == 'setlist') {


             ChangeUrl('Page1', 'setlist');

              $('.dashboard_section').addClass('d-none');
            $('.artist_section').addClass('d-none');
            $('#add_song').addClass('d-none');
            $('.songs_section').addClass('d-none');

             $('.singers_section').addClass('d-none');
              $('.members_section').addClass('d-none');
               $('.welcome_section').addClass('d-none');

               $('.setlist_section').removeClass('d-none');
               $('.home_section').addClass('d-none');

            $(function(){
            $(document).attr("title", "Setlist");
            });

        }else if (data == 'home') {


             ChangeUrl('Page1', 'home');

              $('.dashboard_section').addClass('d-none');
            $('.artist_section').addClass('d-none');
            $('#add_song').addClass('d-none');
            $('.songs_section').addClass('d-none');

             $('.singers_section').addClass('d-none');
              $('.members_section').addClass('d-none');
               $('.welcome_section').addClass('d-none');

               $('.setlist_section').addClass('d-none');
               $('.home_section').removeClass('d-none');

            $(function(){
            $(document).attr("title", "Home");
            });

        }





        // else if (data === 'add-song') {

            
        //     ChangeUrl('Page1', 'songs?action=add-song');
        //     $('.dashboard_section').addClass('d-none');
        //     $('.artist_section').addClass('d-none');
        //     $('.songs_section').addClass('d-none');
        //     $('.add_song').removeClass('d-none');
        //     // $(function(){
        //     // $(document).attr("title", "Add Song");
        //     // });
        // }

    })


    
    function ChangeUrl(page, url) {
        if (typeof (history.pushState) != "undefined") {
            var obj = {Page: page, Url: url};
            history.pushState(obj, obj.Page, obj.Url);
        } else {
            window.location.href = "homePage";
            // alert("Browser does not support HTML5.");
        }
    }





function getLastURLPart(url) {
    var part = url.match(/.*\/(.+)/);
    var page_title = '';
    if(!part) {
        return null;
    }
    // return part[1];
    x = part[1];
    if (x=='dashboard') {
        // $(function(){
        //     $(document).attr("title", "Dashboard");
        //     });
        page_title = 'dashboard';
        changePageTitle(page_title);
       $('.artist_section').addClass('d-none');
            $('.dashboard_section').removeClass('d-none');
            $('.songs_section').addClass('d-none');
            $('#add_song').addClass('d-none');
            $('.singers_section').addClass('d-none');
              $('.members_section').addClass('d-none');
               $('.welcome_section').addClass('d-none');
               $('.setlist_section').addClass('d-none');
                $('.home_section').addClass('d-none');
    }else if (x=='band-members') {
        $('.dashboard_section').addClass('d-none');
          $('.welcome_section').addClass('d-none');
           $('.setlist_section').addClass('d-none');
            $('.home_section').addClass('d-none');
    }else if (x=='artist') {

         page_title = 'Artist';
        changePageTitle(page_title);
        $('.dashboard_section').addClass('d-none');
        $('.artist_section').removeClass('d-none');
         $('.members_section').addClass('d-none');
           $('.welcome_section').addClass('d-none');
            $('.setlist_section').addClass('d-none');
             $('.home_section').addClass('d-none');
             $('#add_song').addClass('d-none');
    }else if (x=='songs') {

         page_title = 'Songs';
        changePageTitle(page_title);
        $('.dashboard_section').addClass('d-none');
        $('.artist_section').addClass('d-none');
        $('#add_song').addClass('d-none');
        $('.songs_section').removeClass('d-none');
        $('.singers_section').addClass('d-none');
         $('.members_section').addClass('d-none');
           $('.welcome_section').addClass('d-none');
            $('.setlist_section').addClass('d-none');
             $('.home_section').addClass('d-none');
    }else if (x=='songs') {

         page_title = 'Songs';
        changePageTitle(page_title);
        $('.dashboard_section').addClass('d-none');
        $('.artist_section').addClass('d-none');
        $('#add_song').addClass('d-none');
        $('.songs_section').removeClass('d-none');
        $('.singers_section').addClass('d-none');
         $('.members_section').addClass('d-none');
           $('.welcome_section').addClass('d-none');
            $('.setlist_section').addClass('d-none');
             $('.home_section').addClass('d-none');

    }else if(x=='singers'){

        page_title = 'Songs';
        changePageTitle(page_title);
        $('.dashboard_section').addClass('d-none');
        $('.artist_section').addClass('d-none');
        $('#add_song').addClass('d-none');
        $('.songs_section').addClass('d-none');
        $('.singers_section').removeClass('d-none');
        $('.members_section').addClass('d-none');
          $('.welcome_section').addClass('d-none');
           $('.setlist_section').addClass('d-none');
            $('.home_section').addClass('d-none');

    }else if (x=='members') {



          page_title = 'Members';
        changePageTitle(page_title);
        $('.dashboard_section').addClass('d-none');
        $('.artist_section').addClass('d-none');
        $('#add_song').addClass('d-none');
        $('.songs_section').addClass('d-none');
        $('.singers_section').addClass('d-none');


         $('.members_section').removeClass('d-none');
          $('.welcome_section').addClass('d-none');
           $('.setlist_section').addClass('d-none');
            $('.home_section').addClass('d-none');



    }else if (x == 'hysteria/' || x == 'hysteria') {


         $('.dashboard_section').addClass('d-none');
        $('.artist_section').addClass('d-none');
        $('#add_song').addClass('d-none');
        $('.songs_section').addClass('d-none');
        $('.singers_section').addClass('d-none');


         $('.members_section').addClass('d-none');
         $('.welcome_section').removeClass('d-none');
           $('.setlist_section').addClass('d-none');
            $('.home_section').addClass('d-none');

        
    }else if (x=='setlist') {


           $('.dashboard_section').addClass('d-none');
        $('.artist_section').addClass('d-none');
        $('#add_song').addClass('d-none');
        $('.songs_section').addClass('d-none');
        $('.singers_section').addClass('d-none');


         $('.members_section').addClass('d-none');
         $('.welcome_section').addClass('d-none');
         $('.setlist_section').removeClass('d-none');
          $('.home_section').addClass('d-none');
    }else if (x=='home') {
           $('.dashboard_section').addClass('d-none');
        $('.artist_section').addClass('d-none');
        $('#add_song').addClass('d-none');
        $('.songs_section').addClass('d-none');
        $('.singers_section').addClass('d-none');


         $('.members_section').addClass('d-none');
         $('.welcome_section').addClass('d-none');
         $('.setlist_section').addClass('d-none');
          $('.home_section').removeClass('d-none');
    }

    // else if (x=='songs?action=add-song') {

      

    //     $('.dashboard_section').addClass('d-none');
    //         $('.artist_section').addClass('d-none');
    //         $('.songs_section').addClass('d-none');
    //         $('.add_song').removeClass('d-none');

       
    //     //  page_title = 'Add Song';
    //     // changePageTitle(page_title);
    //     // $('.dashboard_section').addClass('d-none');
    //     // $('.artist_section').addClass('d-none');
    //     // $('.songs_section').addClass('d-none');
    //     // $('.add_song').removeClass('d-none');
    // }

}

  var url = window.location.href; 
console.log(getLastURLPart(url));


function changePageTitle(page_title){

     $(function(){
            $(document).attr("title", page_title);
        });

}


function change(inst){
    alert(inst.getBody().innerHTML);
}

///mymce

$(document).ready(function () {
            if ($(".mymce").length > 0) {
                tinymce.init({
                    selector: "textarea.mymce"
                    , theme: "modern"
                    , height: 300
                    , plugins: [
   "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker"
   , "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking"
   , "save table contextmenu directionality emoticons template paste textcolor  tabfocus", 
   // autosave
   ]
                    , toolbar: "insertfile undo redo | fontsizeselect | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink | print preview  fullpage | forecolor backcolor emoticons ",
                    fontsize_formats : "8pt 9pt 10pt 11pt 12pt 14pt 18pt 24pt",

                    // restoredraft
                    // setup : function(ed) {
                    //     ed.on('NodeChange', function(e) {
                    //         console.log(ed.getContent())
                    //     })
                    // }
                });
            }


        });





// add songs button

$('#add_new_songs').on('click', function(){
    // window.location.href = base_url + 'songs?action=add-song';

    console.log('asd')
})


var new_song_add_table = $('#new_song_table').DataTable({
    
     

    "order":[[1, 'asc']],
    "paging" : false,
      "ajax": {
            "url": base_url + 'Song/new_songs_added',
            "dataSrc": "",
        },
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],

            'columns': [
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;" class="view_song"  data-id="'+data['song_id']+'" id="kt_explore_toggle" style="color: #000;" >'+data['song_title']+'</a>';
                }

            },
             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;" class="view_artist"  data-id="'+data['artist_id']+'" id="kt_explore_toggle" style="color: #000;" >'+data['artist_name']+'</a>';
                }

            },
            


    ],



})




//Display Songs in table



var songs_table1 = $('#user_songs_table').DataTable({
     dom: 'Bfrtip',
     buttons: [
        'copy', 'excel', 'pdf'
    ],

    "order":[[1, 'asc']],
    "paging" : false,
      "ajax": {
            "url": base_url + 'song/get_songs',
            "dataSrc": "",
        },
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],

            'columns': [
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;" class="view_song"  data-id="'+data['song_id']+'" id="kt_explore_toggle" style="color: #000;" >'+data['song_title']+'</a>';
                }

            },
             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;" class="view_artist"  data-id="'+data['artist_id']+'" id="kt_explore_toggle" style="color: #000;" >'+data['artist_name']+'</a>';
                }

            },
            


    ],



})



var upcoming_gigs_table = $('#upcoming_gigs_table').DataTable({
  
    

    "order":[[1, 'asc']],
    // "paging" : false,
      "ajax": {
            "url": base_url + 'Gigs/get_upcoming_gigs',
            "dataSrc": "",
        },
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],

            'columns': [
            {
                data: null,
                render: function (data, type, row) {
                    return '<div class="form-check form-check-sm form-check-custom form-check-solid"><input class="form-check-input" name="multi-song" type="checkbox" style="border: 1px solid;"  value="'+row.gig_id+'" /></div>';
                }
            },
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return ' <span class="text-gray-800 " data-id="'+data['gig_id']+'"  >'+data['location']+'</span><span class="text-gray-800 fw-bold d-block">'+data['date']+'</span>';
                }

            },
             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return 'P <span class="text-gray-800"  >'+data['income']+'</span>';
                }

            },
            
            {
             "data": null,
             className: "text-end",
             render: function (data, type, row) {
                 return '<button type="button" data-id="'+row.gig_id+'" data-income="'+row.income+'" class="btn btn-primary done_gig" >Done</button> ';
             }
            },

    ],

})



var todo_table = $('#todo_table').DataTable({
  
    

    "order":[[1, 'asc']],
    // "paging" : false,
      "ajax": {
            "url": base_url + 'Activity/get_todo',
            "dataSrc": "",
        },
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],

            'columns': [
            {
                data: null,
                render: function (data, type, row) {
                    return '<div class="form-check form-check-sm form-check-custom form-check-solid"><input class="form-check-input" name="multi-song" type="checkbox" style="border: 1px solid;"  value="'+row.todo_id+'" /></div>';
                }
            },
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return ' <span class="text-gray-800 " data-id="'+data['todo_id']+'"  >'+data['w_todo']+'</span>';
                }

            },

             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<span class="text-gray-800"  >'+data['amount']+'</span>';
                }

            },
            
            {
             "data": null,
             className: "text-end",
             render: function (data, type, row) {
                 return '<button type="button"  data-id="'+row.todo_id+'" data-amount="'+row.amount+'" class="btn btn-success done_todo" >Done</button>&nbsp<button type="button" data-amount="'+row.amount+'" data-todo="'+row.w_todo+'" data-id="'+row.todo_id+'" class="btn btn-primary update_todo" data-bs-toggle="modal" data-bs-target="#update_todo">edit</button> &nbsp<button type="button" class="btn btn-danger add_singer_song" data-id="'+row.todo_id+'" data-bs-toggle="modal" data-bs-target="#kt_modal_add_singer_song">Cancel </button>';
             }
            },

    ],

})



var money_log_table = $('#money_log_table').DataTable({
  
    

    "order":[[1, 'asc']],
    // "paging" : false,
      "ajax": {
            "url": base_url + 'Money_logs/get',
            "dataSrc": "",
        },
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],

            'columns': [
            {
                data: null,
                render: function (data, type, row) {
                    return '<div class="form-check form-check-sm form-check-custom form-check-solid"><input class="form-check-input" name="multi-song" type="checkbox" style="border: 1px solid;"  value="'+row.todo_id+'" /></div>';
                }
            },
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return ' <span class="text-gray-800 " data-id="'+data['todo_id']+'"  >'+data['total_income']+'</span>';
                }

            },
            //  {
            //     // data: "song_title",
            //     data: null,
            //     render: function (data, type, row) {
            //         return '<span class="text-gray-800"  >'+data['table']+'</span>';
            //     }

            // },

             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<span class="text-gray-800"  >'+data['desc']+'</span>';
                }

            },

            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<span class="text-gray-800"  >'+data['amount']+'</span>';
                }

            },

             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<span class="text-gray-800"  >'+data['created']+'</span>';
                }

            },
         

    ],

})

    



$(document).on('click','button.done_todo',function (e) { 


     e.preventDefault();

      var id = $(this).data('id');
    var w_desc = 'minus';
    var income = $(this).data('amount');
    var table = 'todo';
    Swal.fire({
        title: "Are you sure?",
        text: "",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
    }).then(function(result) {
        if (result.value) {
            
                    $.ajax({
                            type: "POST",
                            url: base_url + "Activity/done",
                            data: {id:id,'w_desc' : w_desc , 'income' : income, 'table' : table},
                            cache: false,
                            dataType: 'json', 
                            beforeSend : function(){

                                  Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })

                            },
                            success: function(data){
                               if (data.response) {

                                  Swal.fire(
                "",
                "Deleted Successfully",
                "success"
            )
                                
                               }


                               Load.get_total_income();
                               upcoming_gigs_table.ajax.reload();

                               
                            }
                    })



            // result.dismiss can be "cancel", "overlay",
            // "close", and "timer"
        } else if (result.dismiss === "cancel") {
           swal.close()

        }
    });


})



$(document).on('click','button.done_gig',function (e) { 

    e.preventDefault();

    var id = $(this).data('id');
    var w_desc = 'add';
    var income = $(this).data('income');
    var table = 'gig';
    Swal.fire({
        title: "Are you sure?",
        text: "",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
    }).then(function(result) {
        if (result.value) {
            
                    $.ajax({
                            type: "POST",
                            url: base_url + "Activity/done",
                            data: {id:id,'w_desc' : w_desc , 'income' : income, 'table' : table},
                            cache: false,
                            dataType: 'json', 
                            beforeSend : function(){

                                  Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })

                            },
                            success: function(data){
                               if (data.response) {

                                  Swal.fire(
                "",
                "Deleted Successfully",
                "success"
            )
                                
                               }


                               Load.get_total_income();
                               upcoming_gigs_table.ajax.reload();

                               
                            }
                    })



            // result.dismiss can be "cancel", "overlay",
            // "close", and "timer"
        } else if (result.dismiss === "cancel") {
           swal.close()

        }
    });


})

$(document).on('click','button.update_todo',function (e) { 

    e.preventDefault();

   $('input[name=edit_id]').val($(this).data('id'));
   $('input[name=edit_todo]').val($(this).data('todo'));
   $('input[name=edit_amount]').val($(this).data('amount'));


});


$('#edit_todo_form').on('submit', function(e) {
    e.preventDefault();



    $.ajax({
            type: "POST",
            url: base_url + "Activity/update_todo",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',
            beforeSend : function(){

                    Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },  
            success: function(data){

                Swal.close();
               if (data.response) {
             
                    
                Swal.fire(
                "",
                data.message,
                "success"
                );

                todo_table.ajax.reload();
               }
             
                
            }
    })

})



var songs_table = $('#admin_songs_table').DataTable({
     dom: 'Bfrtip',
     buttons: [
        'copy', 'excel', 'pdf'
    ],

    "order":[[1, 'asc']],
    // "paging" : false,
      "ajax": {
            "url": base_url + 'song/get_songs',
            "dataSrc": "",
        },
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],

            'columns': [
            {
                data: null,
                render: function (data, type, row) {
                    return '<div class="form-check form-check-sm form-check-custom form-check-solid"><input class="form-check-input" name="multi-song" type="checkbox" style="border: 1px solid;"  value="'+row.song_id+'" /></div>';
                }
            },
            {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;" class="view_song"  data-id="'+data['song_id']+'" id="kt_explore_toggle" >'+data['song_title']+'</a>';
                }

            },
             {
                // data: "song_title",
                data: null,
                render: function (data, type, row) {
                    return '<a href="javascript:;" class="view_artist"  data-id="'+data['artist_id']+'" id="kt_explore_toggle" >'+data['artist_name']+'</a>';
                }

            },
            
            {
             "data": null,
             className: "text-end",
             render: function (data, type, row) {
                 return '<button type="button" data-id="'+row.song_id+'" class="btn btn-primary update_song" data-bs-toggle="modal" data-bs-target="#update_song">Update</button> &nbsp<button type="button" class="btn btn-success add_singer_song" data-id="'+row.song_id+'" data-bs-toggle="modal" data-bs-target="#kt_modal_add_singer_song"> <span  class="svg-icon svg-icon-2" >\
                                                <svg  style="color: #000" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">\
                                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />\
                                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />\
                                                </svg>\
                                            </span></button>';
             }
            },

    ],



})



$(document).on('click', '.update_song', function(){ 


$('input[name=son_id]').val($(this).data('id'));
Load.get_song_data($(this).data('id'));


    })



$(document).on('click', '.done-sipra', function(){ 



    // Swal.fire({
    //     title: "Are you sure?",
    //     text: "You wont be able to revert this!",
    //     icon: "warning",
    //     showCancelButton: true,
    //     confirmButtonText: "Yes, delete it!",
    //     cancelButtonText: "No, cancel!",
    //     reverseButtons: true
    // }).then(function(result) {
    //     if (result.value) {
            
    //                 $.ajax({
    //                         type: "POST",
    //                         url: base_url + url,
    //                         data: {id:id},
    //                         cache: false,
    //                         dataType: 'json', 
    //                         beforeSend : function(){

    //                               Swal.fire({
    //                             title: "",
    //                             text: "Please Wait",
    //                             icon: "",
    //                             showCancelButton: false,
    //                             showConfirmButton : false,
    //                             reverseButtons: false,
    //                             allowOutsideClick : false
    //                         })

    //                         },
    //                         success: function(data){
    //                            if (data.response) {

    //                               Swal.fire(
    //             "",
    //             "Deleted Successfully",
    //             "success"
    //         )
                                
    //                            }

    //                             Load.load_singers();
    //                             Load.load_members();
    //                             Load.load_sessions();
    //                             Load.load_gigs_in_list();
    //                             songs_table.ajax.reload();
    //                             table.ajax.reload();
    //                         }
    //                 })



    //         // result.dismiss can be "cancel", "overlay",
    //         // "close", and "timer"
    //     } else if (result.dismiss === "cancel") {
    //        swal.close()

    //     }
    // });

})


$(document).on('click', '.add_singer_song', function(){ 
    var id = $('input[name=song_id]').val($(this).data('id'));

    $.ajax({
            type: "POST",
            url: base_url + "singers/get_singer_songs",
            data: {id : $(this).data('id')},
            cache: false,
            dataType: 'json',  
            success: function(data){

                var singers = '';
                if (data.length > 0) {

                    for(let item of data){

                         singers += '<div class="fv-row mb-7"><input type="checkbox" class="" name="check_singer" value="'+item.singer_id+'" '+item.x+' id="checkbox" oninput="msg(this,'+item.singer_id+')"> <label class="required fw-bold fs-6 mb-2">'+item.singer_name+'</label></div>' 
                    }

                    $('.singer-list').html(singers)

                }
            }


            })

});
// add song to singers


function msg(is,singer_id) {


     var song_id = $('input[name=song_id]').val();
                // var singer_id = $('input[name=check_singer]').val();


               
    if (is.checked) {

        var s_id = singer_id;




                
                 $.ajax({
                        type: "POST",
                        url: base_url + "Singers/add_singer_song",
                        data: {singer_id : s_id, song_id : song_id},
                        cache: false,
                        dataType: 'json',  
                        success: function(data){
                           
                            songs_table.ajax.reload();
                        }
                })


    }else {


                var si_id = singer_id;
           $.ajax({
                        type: "POST",
                        url: base_url + "Singers/delete_singer_song",
                        data: {singer_id : si_id, song_id : song_id},
                        cache: false,
                        dataType: 'json',  
                        success: function(data){
                         
                            songs_table.ajax.reload();
                        }
                })
        
    }


   
   
}

// $('#add_song_singer_form').on('submit', function(e) {
//     e.preventDefault();
  
//     // const selectedValues = $('input[name="check_singer"]:checked').map( function () { 
//     //     return $(this).val(); 
//     // })
//     // .get()
//     // .join(', ');




// //     var selectedValues = [];
// //         $('input[name=check_singer]:checked').map(function() {
// //                     selectedValues.push($(this).val());
// //         });

        
 

// //             const  id = $('input[name=song_id]').val();

// //         if (selectedValues.length > 0) {




// //     $.ajax({
// //             type: "POST",
// //             url: base_url + "Singers/add_singer_song",
// //             data: {ids : selectedValues, song_id : id},
// //             cache: false,
// //             dataType: 'json',  
// //             success: function(data){
// //                if (data.response) {
// //                 alert(data.message)
// //                }
// //                 songs_table.ajax.reload();
// //             }
// //     })

// // }else {
// //     alert('Please select singers')
// // }

// })


///add new songs

$('#add_lyrics_form').on('submit', function(e) {
    e.preventDefault();
    tinyMCE.triggerSave();


    $.ajax({
            type: "POST",
            url: base_url + "Song/add",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',
            beforeSend : function(){

                    $('.add_s').html(' <span class="spinner-border spinner-border-sm align-middle ms-2 "></span><span class="indicator-progres">Please wait... '); 
                    $('.add-song-label').remove(); 
                    $('.add_s').attr('disabled','disabled');
            },  
            success: function(data){
               if (data.response) {
             
                $('.add_s').html('<span class="indicator-label add-song-label">Submit</span>');
                $('.add_s').removeAttr('disabled');
                Swal.fire(
                "",
                data.message,
                "success"
                )
               }
               $('#add_lyrics_form')[0].reset();
                songs_table.ajax.reload();
            }
    })

})



$('#add_song_sipra_form').on('submit', function(e) {
    e.preventDefault();



    $.ajax({
            type: "POST",
            url: base_url + "Song/post_song",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',
            beforeSend : function(){

                    $('.post_s').html(' <span class="spinner-border spinner-border-sm align-middle ms-2 "></span><span class="indicator-progres">Please wait... '); 
                    $('.post-song-label').remove(); 
                    $('.post_s').attr('disabled','disabled');
            },  
            success: function(data){
               if (data.response) {
             
                $('.post_s').html('<span class="indicator-label add-song-label">Submit</span>');
                $('.post_s').removeAttr('disabled');
                Swal.fire(
                "",
                data.message,
                "success"
                )
               }
               $('#add_song_sipra_form')[0].reset();
                
            }
    })

})


///add new songs

$('#add_setlist_form').on('submit', function(e) {
    e.preventDefault();
    tinyMCE.triggerSave();

    $.ajax({
            type: "POST",
            url: base_url + "Setlist/add",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',  
            success: function(data){
               if (data.response) {
                alert(data.message)
               }

                songs_table.ajax.reload();
            }
    })

})




///add new gig

$('#add_gigs_form').on('submit', function(e) {
    e.preventDefault();
    tinyMCE.triggerSave();


    $.ajax({
            type: "POST",
            url: base_url + "gigs/add",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',  
            success: function(data){
               if (data.response) {
                alert(data.message)
               }

               Load.load_gigs_in_list();
                Load.load_calendar_of_gigs();
                // songs_table.ajax.reload();
            }
    })

})


$(document).on('click','button.update-sec',function (e) { 


     $.ajax({
            type: "POST",
            url: base_url + "members/user_data",
            cache: false,
            dataType: 'json',  
            success: function(data){

              $('input[name=username]').val(data.username)


            }

    })


})


$('#update_security_form').on('submit', function(e) {
    e.preventDefault();
        

    var username = $('input[name=username]').val();
    var password = $('input[name=password]').val();
    var confirm_password = $('input[name=confirm_password]').val();



    if (password != confirm_password) {

       
                                  Swal.fire(
                "",
                "Password Don't Match",
                "error"
            )
    }else {


         $.ajax({
            type: "POST",
            url: base_url + "MyProfile/update_security",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',  
            success: function(data){
               if (data.response) {
                Swal.fire(
                "",
                data.message,
                "success"
            )
               }

            }
    })

    }


   

})



$('#update_contact_form').on('submit', function(e) {
    e.preventDefault();
   


    $.ajax({
            type: "POST",
            url: base_url + "MyProfile/update_contact",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',  
            success: function(data){
               if (data.response) {
                alert(data.message);
                  $('#kt_modal_update_contact').modal('hide');
               }



            }
    })

})





 $(document).on('click','#back-button',function (e) {

      window.history.back();


 })


 $(document).on('click','.view_song',function (e) {

  var id = $(this).data('id'); 

     $.ajax({
            type: "POST",
            url: base_url + "songs/get_song",
            data: {id : id},
            cache: false,
            dataType: 'json',  
            success: function(data){
                $('.song_title_section').html(data.song_title)
                $('.lyrics_section').html(data.lyrics).fadeIn(500);
                $('.drawer_artist_section').html(data.artist_name).fadeIn(500);

                console.log(data.artist_name)

              
            }
    })


    })







// Display Artist in Table

 var table = $('#admin_artist_table').DataTable({ 
     dom: 'Bfrtip',
     buttons: [
        'copy', 'excel', 'pdf'
    ],

"paging" : false,
    "order":[[1, 'asc']],
    "ajax": {
            "url": base_url + 'artist/get_artist',
            "dataSrc": "",
        },

    'columns': [
            {
                data: null,
                render: function (data, type, row) {
                    return '<div class="form-check form-check-sm form-check-custom form-check-solid"><input class="form-check-input" name="multi-artist" type="checkbox" value="'+row.artist_id+'" /></div>';
                }
            },
            {
                data: "artist_name",
            },
            {
                data: "count",
            },
           
            {
             "data": null,
             className: "text-end",
             render: function (data, type, row) {
                 return '<button type="button" class="btn btn-primary">Update</button> ';
             }
            },

    ]

 })


  var table = $('#user_artist_table').DataTable({ 
     dom: 'Bfrtip',
     buttons: [
        'copy', 'excel', 'pdf'
    ],

"paging" : false,
    "order":[[1, 'asc']],
    "ajax": {
            "url": base_url + 'artist/get_artist',
            "dataSrc": "",
        },

    'columns': [
           
            {
                data: "artist_name",
            },
            {
                data: "count",
            },
           
           

    ]

 })


//add artist form ajax

$('#add_artist_form').on('submit', function(e) {
    e.preventDefault();



    $.ajax({
            type: "POST",
            url: base_url + "Artist/add",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',  
            success: function(data){
                if (data.response) {
                    alert(data.message);
                }
                $('#add_artist_form')[0].reset();
                table.ajax.reload();
            }
    })

})






//add singer form ajax

$('#add_singer_form').on('submit', function(e) {
    e.preventDefault();
   


    $.ajax({
            type: "POST",
            url: base_url + "singers/add",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',  
            success: function(data){
               if (data.response) {
                alert(data.message)
            

                $('#add_singer_form')[0].reset();
               }

               Load.load_singers();
                // songs_table.ajax.reload();
            }
    })

})


//add members form ajax

$('#add_member_form').on('submit', function(e) {
    e.preventDefault();
   


    $.ajax({
            type: "POST",
            url: base_url + "members/add",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',  
            success: function(data){
               if (data.response) {
                alert(data.message)
            

                $('#add_member_form')[0].reset();
               }

               Load.load_members();
               Load.load_sessions()
                // songs_table.ajax.reload();
            }
    })

})



//shuffle songs



$('#kt_explore_shuffled_songs').on('click', function(e) {
    e.preventDefault();

     var selectedValues = [];
        $('input[name=sel_singer]:checked').map(function() {
                    selectedValues.push($(this).val());
        });
    var sets = $('input[name=account_team_size]:checked').val();
    var n_song = $('input[name=songs_per_person]').val();
    var event_type = $('input[name=account_team_size1]:checked').val();
    

    let data = {

            singer_ids : selectedValues,
            number_of_sets :sets,
            number_of_songs : n_song,
            event_type : event_type
    };


    

    $.ajax({
            type: "POST",
            url: base_url + "Song/shuffle_songs",
            data: data,
            cache: false,
            dataType: 'json',  
            success: function(data){
                Load.load_shuffled_songs(data);
            }
    })

})




$('#add_admin_form').on('submit', function(e) {
    e.preventDefault();
   


    $.ajax({
            type: "POST",
            url: base_url + "MyProfile/add_admin",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',  
            success: function(data){
               if (data.response) {
                alert(data.message)
            

                $('#add_admin_form')[0].reset();
               }

               Load.load_members();
                // songs_table.ajax.reload();
            }
    })

})


$('#add_todo_form').on('submit', function(e) {
    e.preventDefault();
   


    $.ajax({
            type: "POST",
            url: base_url + "Activity/add_todo",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',  
            success: function(data){
               if (data.response) {
                alert(data.message)
            

                $('#add_todo_form')[0].reset();
               }

            
                todo_table.ajax.reload();
            }
    })

})





$('#update_song_form').on('submit', function(e) {
    e.preventDefault();
    
  


    $.ajax({
            type: "POST",
            url: base_url + "Song/update_song",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json', 
            beforeSend : function(){


                  $('.up_s').html(' <span class="spinner-border spinner-border-sm align-middle ms-2 "></span><span class="indicator-progres">Please wait... ');
                    $('.up-label').remove();
                    $('.up_s').attr('disabled','disabled');

            },
            success: function(data){
               if (data.response) {
                alert(data.message)
                
                $('.up_s').removeAttr('disabled','disabled');
                $('.up_s').html('<span class="indicator-label">Submit</span>');
                
               }
             
                songs_table.ajax.reload();
            }
    })

})


//add members form ajax

$('#update_profile_pic_form').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
            type: "POST",
            url: base_url + "myprofile/update_profile_pic",
            data: formData,
            dataType: 'json',  
            cache:false,
            contentType: false,
            processData: false,
            success: function(data){
               if (data.response) {
                alert(data.message)
            

                $('#update_profile_pic_form')[0].reset();
                $('#kt_modal_update_profile_pic').modal('hide');
                Load.load_user_data();
               }

              
            }
    })

});


function fileValidation() {
            var fileInput =
                document.getElementById('file');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            }
            else
            {
             
                // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview').innerHTML =
                            '<img style="width: 100%; height: 100%;" src="' + e.target.result
                            + '"/>';
                    };
                     
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }



 //search artist

 function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

   var  pathName = window.location.pathname.split("/");



   ///search song

 



       $('input[name="search_singer1"]').typeahead({
            hint: true,
            // highlight: true,
            minLength: 1,
        }, {
            limit: 5,
            async: true,
            source: function (query, process, processAsync) {
                return $.ajax({
                    url: base_url + 'Singers/search_singers?key=' + $('input[name="search_singer1"]').val(),
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {

                        /**
                         * Capitalize eveery first letter 
                         *
                         * @param {Object}  data from back end
                         *
                         * @returns {Object}
                         */
                        processAsync($.map(data, function (row) {
                            full_name = capitalizeFirstLetter(row.full_name);
                            
                            return [{
                                'member_id': row.member_id,
                                'full_name': full_name
                            }];
                        }));
                    },
                    error: function (jqXHR, except) {}
                });
            },
            name: 'member',
            displayKey: 'full_name',
            templates: {
                header: '<li class="ml-2 text-muted"><small>Singers</small></li>',
                // footer: function (e) {
                //  var url;
                //  if (pathName.length == 3 || pathName.length == 4) {
                //      url = 'dashboard/more_result/' + e.query;
                //  } else {
                //      url = '../../dashboard/more_result/' + e.query;
                //  }
                //  return '<li class="mr-2   text-right"><small><a href="' + url + '">Click for more result</a></small></li>';
                // },
                empty: [
                    '<div class="tt-suggestion tt-selectable">No Record <i class="far fa-sad-tear"></i> </div>'
                ].join('\n'),
                suggestion: function (data) {
                    return '<li>' + data.full_name + '</li>'
                }
            },
        }, )
        .bind('typeahead:selected', function (obj, data, name) {
            // $('input[name="search_artist"]').val(data.artist_name)
            $('input[name="singee_id"]').val(data.member_id);
            Load.load_singer_songs1(data.member_id)
            $('#update_select_song_modal').modal('show'); 
           
        })
        .on('typeahead:cursorchanged', function (e, data, name) {
            try {
                // $('input[name="search_artist"]').val(data.artist_name);
                // $('input[name="artist_id"]').val(data.artist_id);
                $('input[name="singee_id"]').val(data.member_id);
                Load.load_singer_songs1(data.member_id)
                $('#update_select_song_modal').modal('show'); 
            } catch (error) {
                // error here...
            }
        });




    $('input[name="search_singer"]').typeahead({
            hint: true,
            // highlight: true,
            minLength: 1,
        }, {
            limit: 5,
            async: true,
            source: function (query, process, processAsync) {
                return $.ajax({
                    url: base_url + 'Singers/search_singers?key=' + $('input[name="search_singer"]').val(),
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {

                        /**
                         * Capitalize eveery first letter 
                         *
                         * @param {Object}  data from back end
                         *
                         * @returns {Object}
                         */
                        processAsync($.map(data, function (row) {
                            full_name = capitalizeFirstLetter(row.full_name);
                            
                            return [{
                                'member_id': row.member_id,
                                'full_name': full_name
                            }];
                        }));
                    },
                    error: function (jqXHR, except) {}
                });
            },
            name: 'member',
            displayKey: 'full_name',
            templates: {
                header: '<li class="ml-2 text-muted"><small>Singers</small></li>',
                // footer: function (e) {
                //  var url;
                //  if (pathName.length == 3 || pathName.length == 4) {
                //      url = 'dashboard/more_result/' + e.query;
                //  } else {
                //      url = '../../dashboard/more_result/' + e.query;
                //  }
                //  return '<li class="mr-2   text-right"><small><a href="' + url + '">Click for more result</a></small></li>';
                // },
                empty: [
                    '<div class="tt-suggestion tt-selectable">No Record <i class="far fa-sad-tear"></i> </div>'
                ].join('\n'),
                suggestion: function (data) {
                    return '<li>' + data.full_name + '</li>'
                }
            },
        }, )
        .bind('typeahead:selected', function (obj, data, name) {
            // $('input[name="search_artist"]').val(data.artist_name)
            $('input[name="singe_id"]').val(data.member_id);
            Load.load_singer_songs(data.member_id)
            $('#select_song_modal').modal('show'); 
           
        })
        .on('typeahead:cursorchanged', function (e, data, name) {
            try {
                // $('input[name="search_artist"]').val(data.artist_name);
                // $('input[name="artist_id"]').val(data.artist_id);
                $('input[name="singe_id"]').val(data.member_id);
                Load.load_singer_songs(data.member_id)
                $('#select_song_modal').modal('show'); 
            } catch (error) {
                // error here...
            }
        });




    $('input[name="song_artist1"]').typeahead({
            hint: true,
            // highlight: true,
            minLength: 1,
        }, {
            limit: 5,
            async: true,
            source: function (query, process, processAsync) {
                return $.ajax({
                    url: 'Artist/search_artist?key=' + $('input[name="song_artist1"]').val(),
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {

                        /**
                         * Capitalize eveery first letter 
                         *
                         * @param {Object}  data from back end
                         *
                         * @returns {Object}
                         */
                        processAsync($.map(data, function (row) {
                            artist_name = capitalizeFirstLetter(row.artist_name);
                            
                            return [{
                                'artist_id': row.artist_id,
                                'artist_name': artist_name
                            }];
                        }));
                    },
                    error: function (jqXHR, except) {}
                });
            },
            name: 'artist',
            displayKey: 'artist_name',
            templates: {
                header: '<li class="ml-2 text-muted"><small>Artist</small></li>',
                // footer: function (e) {
                //  var url;
                //  if (pathName.length == 3 || pathName.length == 4) {
                //      url = 'dashboard/more_result/' + e.query;
                //  } else {
                //      url = '../../dashboard/more_result/' + e.query;
                //  }
                //  return '<li class="mr-2   text-right"><small><a href="' + url + '">Click for more result</a></small></li>';
                // },
                empty: [
                    '<div class="tt-suggestion tt-selectable">No Record <i class="far fa-sad-tear"></i> </div>'
                ].join('\n'),
                suggestion: function (data) {
                    return '<li>' + data.artist_name + '</li>'
                }
            },
        }, )
        .bind('typeahead:selected', function (obj, data, name) {
            $('input[name="search_artist"]').val(data.artist_name)
            $('input[name="artist_id"]').val(data.artist_id);
           
        })
        .on('typeahead:cursorchanged', function (e, data, name) {
            try {
                $('input[name="search_artist"]').val(data.artist_name);
                $('input[name="artist_id"]').val(data.artist_id);
            } catch (error) {
                // error here...
            }
        });



$('input[name="song_artist3"]').typeahead({
            hint: true,
            // highlight: true,
            minLength: 1,
        }, {
            limit: 5,
            async: true,
            source: function (query, process, processAsync) {
                return $.ajax({
                    url: 'Artist/search_artist?key=' + $('input[name="song_artist3"]').val(),
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {

                        /**
                         * Capitalize eveery first letter 
                         *
                         * @param {Object}  data from back end
                         *
                         * @returns {Object}
                         */
                        processAsync($.map(data, function (row) {
                            artist_name = capitalizeFirstLetter(row.artist_name);
                            
                            return [{
                                'artist_id': row.artist_id,
                                'artist_name': artist_name
                            }];
                        }));
                    },
                    error: function (jqXHR, except) {}
                });
            },
            name: 'artist',
            displayKey: 'artist_name',
            templates: {
                header: '<li class="ml-2 text-muted"><small>Artist</small></li>',
                // footer: function (e) {
                //  var url;
                //  if (pathName.length == 3 || pathName.length == 4) {
                //      url = 'dashboard/more_result/' + e.query;
                //  } else {
                //      url = '../../dashboard/more_result/' + e.query;
                //  }
                //  return '<li class="mr-2   text-right"><small><a href="' + url + '">Click for more result</a></small></li>';
                // },
                empty: [
                    '<div class="tt-suggestion tt-selectable">No Record <i class="far fa-sad-tear"></i> </div>'
                ].join('\n'),
                suggestion: function (data) {
                    return '<li>' + data.artist_name + '</li>'
                }
            },
        }, )
        .bind('typeahead:selected', function (obj, data, name) {
            $('input[name="search_artist3"]').val(data.artist_name)
            $('input[name="artist_id3"]').val(data.artist_id);
           
        })
        .on('typeahead:cursorchanged', function (e, data, name) {
            try {
                $('input[name="search_artist3"]').val(data.artist_name);
                $('input[name="artist_id3"]').val(data.artist_id);
            } catch (error) {
                // error here...
            }
        });


        $('input[name="song_artist2"]').typeahead({
            hint: true,
            // highlight: true,
            minLength: 1,
        }, {
            limit: 5,
            async: true,
            source: function (query, process, processAsync) {
                return $.ajax({
                    url: 'Artist/search_artist?key=' + $('input[name="song_artist2"]').val(),
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {

                        /**
                         * Capitalize eveery first letter 
                         *
                         * @param {Object}  data from back end
                         *
                         * @returns {Object}
                         */
                        processAsync($.map(data, function (row) {
                            artist_name = capitalizeFirstLetter(row.artist_name);
                            
                            return [{
                                'artist_id': row.artist_id,
                                'artist_name': artist_name
                            }];
                        }));
                    },
                    error: function (jqXHR, except) {}
                });
            },
            name: 'artist',
            displayKey: 'artist_name',
            templates: {
                header: '<li class="ml-2 text-muted"><small>Artist</small></li>',
                // footer: function (e) {
                //  var url;
                //  if (pathName.length == 3 || pathName.length == 4) {
                //      url = 'dashboard/more_result/' + e.query;
                //  } else {
                //      url = '../../dashboard/more_result/' + e.query;
                //  }
                //  return '<li class="mr-2   text-right"><small><a href="' + url + '">Click for more result</a></small></li>';
                // },
                empty: [
                    '<div class="tt-suggestion tt-selectable">No Record <i class="far fa-sad-tear"></i> </div>'
                ].join('\n'),
                suggestion: function (data) {
                    return '<li>' + data.artist_name + '</li>'
                }
            },
        }, )
        .bind('typeahead:selected', function (obj, data, name) {
            $('input[name="search_artist2"]').val(data.artist_name)
            $('input[name="artist_id2"]').val(data.artist_id);
           
        })
        .on('typeahead:cursorchanged', function (e, data, name) {
            try {
                $('input[name="search_artist2"]').val(data.artist_name);
                $('input[name="artist_id2"]').val(data.artist_id);
            } catch (error) {
                // error here...
            }
        });




    $('input[name="search_members"]').typeahead({
            hint: true,
            // highlight: true,
            minLength: 1,
        }, {
            limit: 5,
            async: true,
            source: function (query, process, processAsync) {
                return $.ajax({
                    url: base_url +  'members/search_member?key=' + $('input[name="search_members"]').val(),
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {

                        /**
                         * Capitalize eveery first letter 
                         *
                         * @param {Object}  data from back end
                         *
                         * @returns {Object}
                         */
                        processAsync($.map(data, function (row) {
                            full_name = capitalizeFirstLetter(row.full_name);
                            
                            return [{
                                'member_id': row.member_id,
                                'full_name': full_name
                            }];
                        }));
                    },
                    error: function (jqXHR, except) {}
                });
            },
            name: 'member',
            displayKey: 'full_name',
            templates: {
                header: '<li class="ml-2 text-muted"><small>Members</small></li>',
                // footer: function (e) {
                //  var url;
                //  if (pathName.length == 3 || pathName.length == 4) {
                //      url = 'dashboard/more_result/' + e.query;
                //  } else {
                //      url = '../../dashboard/more_result/' + e.query;
                //  }
                //  return '<li class="mr-2   text-right"><small><a href="' + url + '">Click for more result</a></small></li>';
                // },
                empty: [
                    '<div class="tt-suggestion tt-selectable">No Record <i class="far fa-sad-tear"></i> </div>'
                ].join('\n'),
                suggestion: function (data) {
                    return '<li>' + data.full_name + '</li>'
                }
            },
        }, )
        .bind('typeahead:selected', function (obj, data, name) {
            $('input[name="search_members"]').val(data.full_name)
            $('input[name="s_member_id"]').val(data.member_id);
           
        })
        .on('typeahead:cursorchanged', function (e, data, name) {
            try {
                 $('input[name="search_members"]').val(data.full_name)
            $('input[name="s_member_id"]').val(data.member_id);
            } catch (error) {
                // error here...
            }
        });
 //Display Songs in Table

// table search
$('.search').on( 'keyup', function () {

    table.search( this.value ).draw();
    songs_table.search( this.value ).draw();
} );



// function display(){
// const selectedValues = $('input[name="select_songs"]:checked').map( function () { 
//         return $(this).val(); 
//     })
//     .get()
//     .join(', ');

// console.log(selectedValues)
// }



 $(document).on('click','#delete-multi-song',function (e) {


    // 

    // 

      var selectedValues = [];
        $('input[name=multi-song]:checked').map(function() {
                    selectedValues.push($(this).val());

                    console.log(selectedValues)



        });

        if (selectedValues.length < 1) {
            alert('please Select at least one');
        }else {

            delete_item(selectedValues,url='Song/delete');
        }




 })


$('#song_type').on('change', function(e){




    var singer_id = $('input[name=sin_id]').val();






    if ($('select[id=song_type]').val() == 'upbeat') {

        $('.s_type').text('Up Beat')


         $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type]').val() },
            cache: false,
            dataType: 'json', 
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){

                swal.close()

                if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">\
                                                         <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                                            <rect x="0" y="0" width="24" height="24"/>\
                                                                            <mask fill="white">\
                                                                                <use xlink:href="#path-1"/>\
                                                                            </mask>\
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>\
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>\
                                                                        </g>\
                                                                    </svg>\
                                                                        </span>\
                                                                </span>\
                                                            </div>\
                                                            <div class="ps-1 mt-4 mb-1">\
                                                                <a href="javascript:;" data-val="'+item.song_title+'"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google">'+item.song_title+'</a>\
                                                                <p>'+item.artist_name+'</p>\
                                                            </div>\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>\
                                                    </div>'


                    } 

                     $('.singer-song-table').html(html);
                }else {
                    $('.singer-song-table').html('');
                }


               


            }

        })


    }else if ($('select[id=song_type]').val() == 'fast song') {



        $('.s_type').text('Fast Song')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){

                swal.close();

                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">\
                                                         <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                                            <rect x="0" y="0" width="24" height="24"/>\
                                                                            <mask fill="white">\
                                                                                <use xlink:href="#path-1"/>\
                                                                            </mask>\
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>\
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>\
                                                                        </g>\
                                                                    </svg>\
                                                                        </span>\
                                                                </span>\
                                                            </div>\
                                                            <div class="ps-1 mt-4 mb-1">\
                                                                <a href="javascript:;" data-val="'+item.song_title+'"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google">'+item.song_title+'</a>\
                                                                <p>'+item.artist_name+'</p>\
                                                            </div>\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>\
                                                    </div>'


                    } 

                     $('.singer-song-table').html(html);
                }else {
                    $('.singer-song-table').html('');
                }



            }

        })
    }

    else if ($('select[id=song_type]').val() == 'foreign classic') {



        $('.s_type').text('Foreign Classic Rock')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){

                swal.close();

                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">\
                                                         <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                                            <rect x="0" y="0" width="24" height="24"/>\
                                                                            <mask fill="white">\
                                                                                <use xlink:href="#path-1"/>\
                                                                            </mask>\
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>\
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>\
                                                                        </g>\
                                                                    </svg>\
                                                                        </span>\
                                                                </span>\
                                                            </div>\
                                                            <div class="ps-1 mt-4 mb-1">\
                                                                <a href="javascript:;" data-val="'+item.song_title+'"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google">'+item.song_title+'</a>\
                                                                <p>'+item.artist_name+'</p>\
                                                            </div>\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>\
                                                    </div>'


                    } 

                     $('.singer-song-table').html(html);
                }else {
                    $('.singer-song-table').html('');
                }



            }

        })
    }

    else if ($('select[id=song_type]').val() == 'foreign classic rock') {



        $('.s_type').text('Foreign Classic Rock')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){

                swal.close();

                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">\
                                                         <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                                            <rect x="0" y="0" width="24" height="24"/>\
                                                                            <mask fill="white">\
                                                                                <use xlink:href="#path-1"/>\
                                                                            </mask>\
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>\
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>\
                                                                        </g>\
                                                                    </svg>\
                                                                        </span>\
                                                                </span>\
                                                            </div>\
                                                            <div class="ps-1 mt-4 mb-1">\
                                                                <a href="javascript:;" data-val="'+item.song_title+'"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google">'+item.song_title+'</a>\
                                                                <p>'+item.artist_name+'</p>\
                                                            </div>\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>\
                                                    </div>'


                    } 

                     $('.singer-song-table').html(html);
                }else {
                    $('.singer-song-table').html('');
                }



            }

        })
    }

    else if ($('select[id=song_type]').val() == 'first set') {



        $('.s_type').text('First Set')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){

                swal.close();

                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">\
                                                         <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                                            <rect x="0" y="0" width="24" height="24"/>\
                                                                            <mask fill="white">\
                                                                                <use xlink:href="#path-1"/>\
                                                                            </mask>\
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>\
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>\
                                                                        </g>\
                                                                    </svg>\
                                                                        </span>\
                                                                </span>\
                                                            </div>\
                                                            <div class="ps-1 mt-4 mb-1">\
                                                                <a href="javascript:;" data-val="'+item.song_title+'"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google">'+item.song_title+'</a>\
                                                                <p>'+item.artist_name+'</p>\
                                                            </div>\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>\
                                                    </div>'


                    } 

                     $('.singer-song-table').html(html);
                }else {
                    $('.singer-song-table').html('');
                }



            }

        })
    }else if ($('select[id=song_type]').val() == 'reggae') {



        $('.s_type').text('Reggae')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type]').val() },
            cache: false,
            dataType: 'json',
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">\
                                                         <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                                            <rect x="0" y="0" width="24" height="24"/>\
                                                                            <mask fill="white">\
                                                                                <use xlink:href="#path-1"/>\
                                                                            </mask>\
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>\
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>\
                                                                        </g>\
                                                                    </svg>\
                                                                        </span>\
                                                                </span>\
                                                            </div>\
                                                            <div class="ps-1 mt-4 mb-1">\
                                                                <a href="javascript:;" data-val="'+item.song_title+'"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google">'+item.song_title+'</a>\
                                                                <p>'+item.artist_name+'</p>\
                                                            </div>\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>\
                                                    </div>'


                    } 

                     $('.singer-song-table').html(html);
                }else {
                    $('.singer-song-table').html('');
                }



            }

        })
    }else if ($('select[id=song_type]').val() == 'opm rock') {



        $('.s_type').text('OPM rock')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type]').val() },
            cache: false,
            dataType: 'json',
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },     
            success: function(data){

                swal.close();

                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">\
                                                         <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                                            <rect x="0" y="0" width="24" height="24"/>\
                                                                            <mask fill="white">\
                                                                                <use xlink:href="#path-1"/>\
                                                                            </mask>\
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>\
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>\
                                                                        </g>\
                                                                    </svg>\
                                                                        </span>\
                                                                </span>\
                                                            </div>\
                                                            <div class="ps-1 mt-4 mb-1">\
                                                                <a href="javascript:;" data-val="'+item.song_title+'"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google">'+item.song_title+'</a>\
                                                                <p>'+item.artist_name+'</p>\
                                                            </div>\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>\
                                                    </div>'


                    } 

                     $('.singer-song-table').html(html);
                }else {
                    $('.singer-song-table').html('');
                }



            }

        })
    }
    else if ($('select[id=song_type]').val() == 'emo') {



        $('.s_type').text('Emo')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type]').val() },
            cache: false,
            dataType: 'json',
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },     
            success: function(data){

                swal.close();

                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">\
                                                         <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                                            <rect x="0" y="0" width="24" height="24"/>\
                                                                            <mask fill="white">\
                                                                                <use xlink:href="#path-1"/>\
                                                                            </mask>\
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>\
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>\
                                                                        </g>\
                                                                    </svg>\
                                                                        </span>\
                                                                </span>\
                                                            </div>\
                                                            <div class="ps-1 mt-4 mb-1">\
                                                                <a href="javascript:;" data-val="'+item.song_title+'"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google">'+item.song_title+'</a>\
                                                                <p>'+item.artist_name+'</p>\
                                                            </div>\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>\
                                                    </div>'


                    } 

                     $('.singer-song-table').html(html);
                }else {
                    $('.singer-song-table').html('');
                }



            }

        })
    }
    else if ($('select[id=song_type]').val() == 'vispop') {



        $('.s_type').text('VISPOP')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type]').val() },
            cache: false,
            dataType: 'json',  
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },   
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">\
                                                         <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                                            <rect x="0" y="0" width="24" height="24"/>\
                                                                            <mask fill="white">\
                                                                                <use xlink:href="#path-1"/>\
                                                                            </mask>\
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>\
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>\
                                                                        </g>\
                                                                    </svg>\
                                                                        </span>\
                                                                </span>\
                                                            </div>\
                                                            <div class="ps-1 mt-4 mb-1">\
                                                                <a href="javascript:;" data-val="'+item.song_title+'"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google">'+item.song_title+'</a>\
                                                                <p>'+item.artist_name+'</p>\
                                                            </div>\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>\
                                                    </div>'


                    } 

                     $('.singer-song-table').html(html);
                }else {
                    $('.singer-song-table').html('');
                }



            }

        })
    }

    else if ($('select[id=song_type]').val() == 'bisrock') {



        $('.s_type').text('BISROCk')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type]').val() },
            cache: false,
            dataType: 'json', 
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },    
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">\
                                                         <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                                            <rect x="0" y="0" width="24" height="24"/>\
                                                                            <mask fill="white">\
                                                                                <use xlink:href="#path-1"/>\
                                                                            </mask>\
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>\
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>\
                                                                        </g>\
                                                                    </svg>\
                                                                        </span>\
                                                                </span>\
                                                            </div>\
                                                            <div class="ps-1 mt-4 mb-1">\
                                                                <a href="javascript:;" data-val="'+item.song_title+'"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google">'+item.song_title+'</a>\
                                                                <p>'+item.artist_name+'</p>\
                                                            </div>\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>\
                                                    </div>'


                    } 

                     $('.singer-song-table').html(html);
                }else {
                    $('.singer-song-table').html('');
                }


            }

        })
    }
     else if ($('select[id=song_type]').val() == 'RNB') {



        $('.s_type').text('RNB')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type]').val() },
            cache: false,
            dataType: 'json', 
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },    
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">\
                                                         <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                                            <rect x="0" y="0" width="24" height="24"/>\
                                                                            <mask fill="white">\
                                                                                <use xlink:href="#path-1"/>\
                                                                            </mask>\
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>\
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>\
                                                                        </g>\
                                                                    </svg>\
                                                                        </span>\
                                                                </span>\
                                                            </div>\
                                                            <div class="ps-1 mt-4 mb-1">\
                                                                <a href="javascript:;" data-val="'+item.song_title+'"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google">'+item.song_title+'</a>\
                                                                <p>'+item.artist_name+'</p>\
                                                            </div>\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>\
                                                    </div>'


                    } 

                     $('.singer-song-table').html(html);
                }else {
                    $('.singer-song-table').html('');
                }


            }

        })
    }

      else if ($('select[id=song_type]').val() == 'bossa nova') {



        $('.s_type').text('Bossa Nova')

        $.ajax({
            type: "POST",
            url: base_url + "Song/load_songs",
            data: {singer_id : singer_id , song_type : $('select[id=song_type]').val() },
            cache: false,
            dataType: 'json', 
             beforeSend : function(){

                     Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })
            },    
            success: function(data){


                swal.close();
                  if (data.length > 0) {

                    var html = '';

                    for(let item of data) {

                        html += ' <div class="d-flex flex-stack item-border-hover px-3 py-2 ms-n4 mb-3 mt-3"><div class="d-flex align-items-center">\
                                                         <div class="symbol symbol-40px symbol-circle me-4">\
                                                                <span class="symbol-label bg-light-primary">\
                                                                  \
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">\
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                                            <rect x="0" y="0" width="24" height="24"/>\
                                                                            <mask fill="white">\
                                                                                <use xlink:href="#path-1"/>\
                                                                            </mask>\
                                                                            <use fill="#000000" fill-rule="nonzero" opacity="0.3" xlink:href="#path-1"/>\
                                                                            <path d="M10.8333333,19 C9.82081129,19 9,18.3159906 9,17.4722222 C9,16.6284539 9.82081129,15.9444444 10.8333333,15.9444444 C11.0476105,15.9444444 11.2533018,15.9750785 11.4444444,16.0313779 L11.4444444,11.7916011 C11.4444444,11.4782408 11.6398662,11.2012404 11.9268804,11.1077729 L15.4407693,10.0331119 C15.8834716,9.88894376 16.3333333,10.2336005 16.3333333,10.7169402 L16.3333333,11.7916011 C16.3333333,12.1498215 15.9979332,12.3786009 15.7222222,12.4444444 C15.3255297,12.53918 14.3070112,12.7428837 12.6666667,13.0555556 L12.6666667,17.5035214 C12.6666667,17.5583862 12.6622174,17.6091837 12.6535404,17.6559869 C12.5446237,18.4131089 11.771224,19 10.8333333,19 Z" fill="#000000" mask="url(#mask-2)"/>\
                                                                        </g>\
                                                                    </svg>\
                                                                        </span>\
                                                                </span>\
                                                            </div>\
                                                            <div class="ps-1 mt-4 mb-1">\
                                                                <a href="javascript:;" data-val="'+item.song_title+'"   class="fs-5 text-gray-800 text-hover-primary fw-boldest search_google">'+item.song_title+'</a>\
                                                                <p>'+item.artist_name+'</p>\
                                                            </div>\
                                                        </div>\
                                                        <span class="badge badge-light rounded-pill fs-7 fw-boldest"></span>\
                                                    </div>'


                    } 

                     $('.singer-song-table').html(html);
                }else {
                    $('.singer-song-table').html('');
                }


            }

        })
    }



    else {
        window.location.reload();
    }

});



$('#kt_sign_in_form').on('submit', function(e){
    e.preventDefault();



        $.ajax({
            type: "POST",
            url: base_url + "login/verify",
            data: $(this).serialize(),
            cache: false,
            dataType: 'json',  
            success: function(data){


                if (data.response) {

                   if (data.res) {

                            window.location.href = '<?php echo base_url() ?>';


                   }else {

                     Swal.fire({
                        text: data.message,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });


                   }
                }else {

                    Swal.fire({
                        text: data.message,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });

                }
                

            

                
            }
    })


   
});


Load.load_calendar_of_gigs();
Load.load_gigs_in_list();

function calendar_options(){
  var calendar_options =   $('select[name=calendar_options]').val();



  if (calendar_options == 'calendar') {

    $('#gig_list').addClass('d-none');
     $('#calendar_gigs').removeClass('d-none');

      Load.load_calendar_of_gigs();

    

  }else if (calendar_options == 'gig_list') {

     $('#gig_list').removeClass('d-none');
     $('#calendar_gigs').addClass('d-none');
     Load.load_gigs_in_list();

     
  }


}



function save_setlist(){
    console.log('aasd')
}



 $(document).on('click','.copy-clipboard',function (e) {

    e.preventDefault();

    text = [];
    implodearray = '';

    $('.search_google').each(function(index) {
         

         text.push($(this).text())
    })


    var separator = '<br>';
    for(let i = 0; i < text.length; i++) {

            implodearray += text[i];
            if (i !=text.length - 1) {
                implodearray += separator;
            }
            
    }

    var temp = $('.list').html(implodearray).select();

    // console.log(text.toString())
    // var temp = $('<textarea>').val(implodearray).appendTo('body').select();
   document.execCommand('copy');
   temp.remove();

})


// $('.singer-song-table').listnav()


  function delete_item(id,url){

        Swal.fire({
        title: "Are you sure?",
        text: "You wont be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
    }).then(function(result) {
        if (result.value) {
            
                    $.ajax({
                            type: "POST",
                            url: base_url + url,
                            data: {id:id},
                            cache: false,
                            dataType: 'json', 
                            beforeSend : function(){

                                  Swal.fire({
                                title: "",
                                text: "Please Wait",
                                icon: "",
                                showCancelButton: false,
                                showConfirmButton : false,
                                reverseButtons: false,
                                allowOutsideClick : false
                            })

                            },
                            success: function(data){
                               if (data.response) {

                                  Swal.fire(
                "",
                "Deleted Successfully",
                "success"
            )
                                
                               }

                                Load.load_singers();
                                Load.load_members();
                                Load.load_sessions();
                                Load.load_gigs_in_list();
                                songs_table.ajax.reload();
                                table.ajax.reload();
                            }
                    })



            // result.dismiss can be "cancel", "overlay",
            // "close", and "timer"
        } else if (result.dismiss === "cancel") {
           swal.close()

        }
    });

  }



 
</script>
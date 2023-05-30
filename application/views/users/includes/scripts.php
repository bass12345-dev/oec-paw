<script>
        var hostUrl = "<?php echo base_url() ?>assets/";
        var base_url = '<?php echo base_url() ?>';
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/scripts.bundle.js"></script>

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
    <script src="<?php echo base_url() ?>assets/js/custom/widgets.js"></script>
    <noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>



<script type="text/javascript">

    $('.menuu').on('click', function() {

      var data =  $(this).data("id");

        if (data === 'band_members') {
            ChangeUrl('Page1', 'band-members');
            $('.dashboard_section').addClass('d-none');
            $('#add_song').addClass('d-none');
            $(function(){
            $(document).attr("title", "Band Members");
            });

        }else if (data === 'band_position') {
            ChangeUrl('Page1', 'band-position');
            $('.dashboard_section').addClass('d-none');
            $('#add_song').addClass('d-none');
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
            ChangeUrl('Page1', 'dashboard');
        }else if (data === 'artist') {
            ChangeUrl('Page1', 'artist');
            $('.artist_section').removeClass('d-none');
            $('.dashboard_section').addClass('d-none');
            $('.songs_section').addClass('d-none');
            $('#add_song').addClass('d-none');
            $(function(){
            $(document).attr("title", "Artist");
            });
        }else if (data === 'songs') {
            ChangeUrl('Page1', 'songs');
            $('.dashboard_section').addClass('d-none');
            $('.artist_section').addClass('d-none');
            $('.add_song').addClass('d-none');
            $('.songs_section').removeClass('d-none');
            $(function(){
            $(document).attr("title", "Songs");
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
        $('.dashboard_section').removeClass('d-none');
    }else if (x=='band-members') {
        $('.dashboard_section').addClass('d-none');
    }else if (x=='artist') {

         page_title = 'Artist';
        changePageTitle(page_title);
        $('.dashboard_section').addClass('d-none');
        $('.artist_section').removeClass('d-none');
    }else if (x=='songs') {

         page_title = 'Songs';
        changePageTitle(page_title);
        $('.dashboard_section').addClass('d-none');
        $('.artist_section').addClass('d-none');
        $('.add_song').addClass('d-none');
        $('.songs_section').removeClass('d-none');
    }else if (x=='songs') {

         page_title = 'Songs';
        changePageTitle(page_title);
        $('.dashboard_section').addClass('d-none');
        $('.artist_section').addClass('d-none');
        $('.add_song').addClass('d-none');
        $('.songs_section').removeClass('d-none');
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


///mymce

$(document).ready(function () {
            if ($("#mymce").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce"
                    , theme: "modern"
                    , height: 300
                    , plugins: [
   "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker"
   , "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking"
   , "save table contextmenu directionality emoticons template paste textcolor"
   ]
                    , toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink | print preview  fullpage | forecolor backcolor emoticons"
                , });
            }


        });





// add songs button

$('#add_new_songs').on('click', function(){
    // window.location.href = base_url + 'songs?action=add-song';

    console.log('asd')
})




//Display Songs in table

var songs_table = $('#songs_table').DataTable({ 

      "ajax": {
            "url": base_url + 'songs/get_songs',
            "dataSrc": "",
        },

            'columns': [
            {
                data: null,
                render: function (data, type, row) {
                    return '<div class="form-check form-check-sm form-check-custom form-check-solid"><input class="form-check-input" type="checkbox" value="1" /></div>';
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
                data: "created",
            },
            {
             "data": null,
             className: "text-end",
             render: function (data, type, row) {
                 return '<button type="button" class="btn btn-danger">Delete</button> <button type="button" class="btn btn-info">Info</button>';
             }
            },

    ]


})


///add new songs

$('#add_lyrics_form').on('submit', function(e) {
    e.preventDefault();
    tinyMCE.triggerSave();


    $.ajax({
            type: "POST",
            url: base_url + "songs/add",
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

 var table = $('#artist_table').DataTable({ 


    "ajax": {
            "url": base_url + 'artist/get_artist',
            "dataSrc": "",
        },

    'columns': [
            {
                data: null,
                render: function (data, type, row) {
                    return '<div class="form-check form-check-sm form-check-custom form-check-solid"><input class="form-check-input" type="checkbox" value="1" /></div>';
                }
            },
            {
                data: "artist_name",
            },
            {
                data: "created",
            },
            {
                data: "created",
            },
            {
             "data": null,
             className: "text-end",
             render: function (data, type, row) {
                 return '<button type="button" class="btn btn-danger">Delete</button> <button type="button" class="btn btn-info">Info</button>';
             }
            },

    ]

 })


//add artist form ajax

$('#add_artist_form').on('submit', function(e) {
    e.preventDefault();



    $.ajax({
            type: "POST",
            url: base_url + "artist/add",
            data: $(this).serialize(),
            cache: false,
            dataType: 'text',  
            success: function(data){
                if (data.response) {
                    alert(data.message);
                }
                table.ajax.reload();
            }
    })

})


 //search artist

 function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

   var  pathName = window.location.pathname.split("/");



    $('input[name="song_artist"]').typeahead({
            hint: true,
            // highlight: true,
            minLength: 1,
        }, {
            limit: 5,
            async: true,
            source: function (query, process, processAsync) {
                return $.ajax({
                    url: 'artist/search_artist?key=' + $('input[name="song_artist"]').val(),
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


 //Display Songs in Table

// table search
$('.search').on( 'keyup', function () {

    table.search( this.value ).draw();
    songs_table.search( this.value ).draw();
} );

 
</script>
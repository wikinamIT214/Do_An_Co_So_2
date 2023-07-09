(function($){
    "use strict";
    // function fadeIn_formLogin(){
        $('#login').click(function(e){
            e.preventDefault();
            $('#form_login').css('display','block');
        })
        // return false;
    // }
    // $(document).ready(function(){
    //         document.getElementById("click_check").onclick = function(){
    //         document.getElementById("checkbox1").checked = "true";
    //     }
    // })
    // fadeIn_formLogin()
      
    //     function ajaxSearch(){
    //         var action = "search";
    //         $('#search_name').keyup(function(){
    //             var search_name = $('#search_name').val();
    //             $.ajax({
    //                 type:"post",
    //                 url:"?action=search",
    //                 data:{action:action,search_name:search_name},
    //                 success:function(data){
    //                     $('#output_search').html(data);
    //                     $('.list-group').css('width','1037px');
    //                     $('#output_search').css('height','400px');
    //                     $('#output_search').css('overflow-y','scroll');
    //                 }
    //             });
    //         })
    //     }
    //     function remove_ajaxSearch(){
    //         $('#search_name').click(function(){
    //             $('.list-group').css('width','0px');
    //                     $('#output_search').css('height','0px');
    //         });
    //     }
    //     function inputSearch(){
    //         search_name = $('#search_name');
    //         $('#search_name').click(function(){
    //             $('.c-header__icon-container-desktop').toggleClass('col-md-10')
    //             $('.HeaderNavigation-desktop').toggleClass('d-none')
    //             $('.wrapper_search').toggleClass('w-95')
    //             $('#search_name').toggleClass('w-95')          
    //         })
    //         return true;
    //     }
    //     function enterSearch(){
    //         $('#search_name').keypress(function(event){
    //         var search_name = $('#search_name').val();
    //         var keycode = (event.keyCode ? event.keyCode : event.which);
    //         if (keycode == '13') {
    //             // var a = $.post("?action=shop",{search_name:search_name})
    //                 window.location.href = "?action=shop&search="+search_name;
    //         }
    //     });
    //     }
    //     function buttonSearch(){
    //         $('#submit_search').click(function(){
    //             var search_name = $('#search_name').val();
    //             window.location.href = "?action=shop&search="+search_name;
    //         })
    //     }
    //     var input_search = inputSearch();
    //     ajaxSearch();
    //     enterSearch();
    //     buttonSearch();
    //     if(input_search){
    //         remove_ajaxSearch();
    //     }
})(jQuery);
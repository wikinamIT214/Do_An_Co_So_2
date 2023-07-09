<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
$(document).ready(function(){
    search_name = $('#search_name');
    $('#search_name').click(function(){
        $('.c-header__icon-container-desktop').addClass('col-md-10')
        $('.c-header__icon-container-desktop').css('transition','0.3s')
        $('.HeaderNavigation-desktop').css('display','none')
        $('.wrapper_search').css('width','95%')
        $('#search_name').css('width','100%')
        
    })
    if(search_name.val() == ''){
            // do nothing
    }else{
        var value_search = $('.value_search')
        console.log(value_search);
        value_search.css('width','1037px')
        value_search.css('height','400px')
        value_search.css('overflow','scroll')
    }
})
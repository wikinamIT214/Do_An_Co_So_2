function changeImg(id){
    let changeImg = document.getElementById(id).getAttribute('src');
    document.getElementById('main-img').setAttribute('src',changeImg)
}
$(document).ready(function(){
    $('.img-gallery-other img').click(function(){
        $('.img-gallery-other img').removeClass('active_1');
        $(this).addClass('active_1');
    })
})
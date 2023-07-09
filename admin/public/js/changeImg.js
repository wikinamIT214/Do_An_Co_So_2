function changeImg(id){
    let path = document.getElementById(id).getAttribute('src');
    document.getElementById('main-img').setAttribute('src',path);
}
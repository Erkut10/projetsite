let burger, nav;
burger = document.querySelector('.burger');
nav = document.querySelector('nav');

burger.addEventListener('click', function(){
    if(nav.style.display == "block"){
        nav.style.display = "none";
    } else {
        nav.style.display = "block";
    }
});

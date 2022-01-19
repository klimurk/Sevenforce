let btn_menu_call = document.getElementById('btn_menu_call');
let menu_mobile = document.getElementById('menu_mobile');
let menu_mobile_lang = document.getElementById('lang_mobile');
let menu_mobile_logo = document.getElementById('logo_mobile');

btn_menu_call.addEventListener('click', function() {
    if (menu_mobile.style.transform == 'translateY(-100%)' || menu_mobile.style.transform == '') {
        menu_mobile.style.transform = 'translateY(0%)'
        menu_mobile_lang.classList.remove('only_desktop')
        menu_mobile_logo.classList.add('only_desktop')
    } else {
        menu_mobile.style.transform = 'translateY(-100%)'
        menu_mobile_lang.classList.add('only_desktop')
        menu_mobile_logo.classList.remove('only_desktop')
    }
})
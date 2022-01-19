let service_btn_open = document.getElementById('service_open');
let service_btn_close = document.getElementById('service_close');
let service_array = document.getElementsByClassName('sliderSlideBlock');

service_btn_open.addEventListener('click', function() {
    for (let i = 0; i < service_array.length; i++) {
        service_array[i].classList.remove('hidden');
    }
    service_btn_open.style.display = "none";
    service_btn_close.style.display = "block";

    (window.innerWidth >= 1024) ? (service_array[8].classList.add('hidden')) : (service_array[8].classList.remove('hidden'))
})

service_btn_close.addEventListener('click', function() {

    for (let i = 8; i < service_array.length; i++) {
        service_array[i].classList.add('hidden');
    }
    service_btn_open.style.display = "block";
    service_btn_close.style.display = "none";

    (window.innerWidth >= 1024) ? (service_array[8].classList.add('hidden')) : (service_array[8].classList.remove('hidden'))
})

document.addEventListener("DOMContentLoaded", function() {
    // (window.innerWidth >= 1024) ? (service_array[8].classList.add('hidden')) : (service_array[8].classList.remove('hidden'));

    service_btn_open.style.display = "block";
    service_btn_close.style.display = "none";
});

// $(window).resize(function() {
//     (window.innerWidth >= 1024) ? (service_array[8].classList.add('hidden')) : (service_array[8].classList.remove('hidden'))
// });


// * popup

let service_popup = document.getElementById('service_popup')

for (let i = 0; i < service_array.length; i++) {
    service_array[i].addEventListener('click', function() {
        // console.log('click');
        let popup_title = document.getElementById('popup_title');
        let popup_text = document.getElementById('popup_text');
        service_popup.style.display = 'block';
        popup_title.innerHTML = service_array[i].innerHTML
        popup_text.innerHTML = service_array_description[i];
    })
}

// *popup close
let popup_btn_close = document.getElementById('formClose')

popup_btn_close.addEventListener('click', function() {
    service_popup.style.display = 'none'
})
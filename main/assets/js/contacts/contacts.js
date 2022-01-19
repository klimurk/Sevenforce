let formButton = document.getElementById('formBtn')
let form = document.getElementById('popup_form')
let contactform = document.getElementById('contactform')
let btnClose_form = document.getElementById('formClose')
let btnForm_send = document.getElementById('form_send');
let btnResponse_ok = document.getElementById('contactform_response_ok');

let response = document.getElementById('contactform_response');
let response_img_id = document.getElementById('response_smile_link');
let response_text = document.getElementById('contactform_response_text');

formButton.addEventListener('click', function() {
    form.style.display = 'block'
})


btnClose_form.addEventListener('click', function() {
    form.style.display = 'none'
})

btnResponse_ok.addEventListener('click', function() {
    form.style.display = 'block'
    contactform.style.display = 'block'
    response.classList.remove("visible");
    response.classList.add("hidden");
})


btnForm_send.addEventListener('click', function() {
    form.style.display = 'block'
    contactform.style.display = 'none'
    response.style.display = 'block'

})


document.addEventListener('wpcf7mailsent', function(event) {
    cf7_response('good');
});

['wpcf7invalid', 'wpcf7spam', 'wpcf7mailfailed'].forEach(function(e) {
    document.addEventListener(e, function(event) {
        cf7_response('bad');
    })
});


function cf7_response(smileLink) {
    response.classList.remove("hidden");
    response.classList.add("visible");

    response_text.innerHTML = '';
    setTimeout(() => {
        response_text.innerHTML = document.getElementsByClassName('wpcf7-response-output')[0].innerHTML;
    }, 500);
    response_img_id.setAttribute('src', 'https://intest.sevenforce.kiev.ua/wp-content/themes/main/assets/images/contacts/popup/' + smileLink + '.png');

}
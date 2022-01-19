let text_right = document.getElementsByClassName('works_block1_item_text');
for (let i = 0; i < text_right.length; i++) {
    if (text_right[i].innerHTML.trim() == '') {
        text_right[i].style.display = 'none';
    }
}
let text_left = document.getElementsByClassName('works_block1_item_text');
for (let i = 0; i < text_right.length; i++) {
    if (text_left[i].innerHTML.trim() == '') {
        text_left[i].style.display = 'none';
    }
}

let block_col_2 = document.getElementsByClassName('works_block1_item_secondcol');
for (let i = 0; i < block_col_2.length; i++) {
    console.log(block_col_2[i].offsetHeight);
    if (block_col_2[i].offsetHeight == 0) {
        block_col_2[i].style.display = 'none';
    }
}


// let videos = document.getElementsByClassName('works_block1_item_video');
// for (let i = 0; i < videos.length; i++) {
//     if (videos[i].innerHTML.trim() == '') {
//         videos[i].style.display = 'none';
//     }
// }

// let photos = document.getElementsByClassName('works_block1_item_img');
// var img
// var img_width
// var img_height
// for (let i = 0; i < photos.length; i++) {
//     img = photos[i].getElementsByClassName('works_block1_item_img_obj')[0];
//     console.log(img, img.clientWidth, img.clientHeight);
//     img_width = parseInt(img.clientWidth);
//     img_height = parseInt(img.clientHeight);
//     if (img_height / img_width > 1.9 && img_height / img_width < 2.1) {
//         // img.style.width = "22vw"
//         photos[i].classList.add('works_img_small');
//     }
//     // else {
//     //     // img.style.width = "55vw"
//     // }
// }

// $(window).resize(function(){
//     if(window.innerWidth<1024)
// })
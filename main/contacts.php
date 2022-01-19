<?php
/*
Template Name: Contacts
*/
?>

<?php get_header(); ?>
<svg style="display:none">
    <symbol id="svg_contacts_location" viewBox="0 0 50 50" >
        <path d="M24.9993 4.16602C16.9368 4.16602 10.416 10.6868 10.416 18.7493C10.416 29.6869 24.9993 45.8327 24.9993 45.8327C24.9993 45.8327 39.5827 29.6869 39.5827 18.7493C39.5827 10.6868 33.0618 4.16602 24.9993 4.16602ZM24.9993 23.9577C22.1243 23.9577 19.791 21.6243 19.791 18.7493C19.791 15.8743 22.1243 13.541 24.9993 13.541C27.8743 13.541 30.2077 15.8743 30.2077 18.7493C30.2077 21.6243 27.8743 23.9577 24.9993 23.9577Z" fill="white"/>
    </symbol>
    <symbol id="svg_contacts_time" viewBox="0 0 50 50" >
        <path d="M24.9785 4.16602C13.4785 4.16602 4.16602 13.4993 4.16602 24.9994C4.16602 36.4994 13.4785 45.8327 24.9785 45.8327C36.4994 45.8327 45.8327 36.4994 45.8327 24.9994C45.8327 13.4993 36.4994 4.16602 24.9785 4.16602ZM24.9994 41.666C15.791 41.666 8.33268 34.2077 8.33268 24.9994C8.33268 15.791 15.791 8.33268 24.9994 8.33268C34.2077 8.33268 41.666 15.791 41.666 24.9994C41.666 34.2077 34.2077 41.666 24.9994 41.666Z" fill="white"/>
        <path d="M26.041 14.584H22.916V27.084L33.8535 33.6465L35.416 31.084L26.041 25.5215V14.584Z" fill="white"/>
    </symbol>
    <symbol id="svg_contacts_mail" viewBox="0 0 50 50" >
        <path d="M41.666 8.33398H8.33268C6.04102 8.33398 4.18685 10.209 4.18685 12.5007L4.16602 37.5006C4.16602 39.7923 6.04102 41.6673 8.33268 41.6673H41.666C43.9577 41.6673 45.8327 39.7923 45.8327 37.5006V12.5007C45.8327 10.209 43.9577 8.33398 41.666 8.33398ZM41.666 16.6673L24.9994 27.084L8.33268 16.6673V12.5007L24.9994 22.9173L41.666 12.5007V16.6673Z" fill="white"/></symbol>
    <symbol id="svg_contacts_phone" viewBox="0 0 50 50" >
        <path d="M13.7917 22.4792C16.7917 28.375 21.625 33.1875 27.5208 36.2083L32.1042 31.625C32.6667 31.0625 33.5 30.875 34.2292 31.125C36.5625 31.8958 39.0833 32.3125 41.6667 32.3125C42.8125 32.3125 43.75 33.25 43.75 34.3958V41.6667C43.75 42.8125 42.8125 43.75 41.6667 43.75C22.1042 43.75 6.25 27.8958 6.25 8.33333C6.25 7.1875 7.1875 6.25 8.33333 6.25H15.625C16.7708 6.25 17.7083 7.1875 17.7083 8.33333C17.7083 10.9375 18.125 13.4375 18.8958 15.7708C19.125 16.5 18.9583 17.3125 18.375 17.8958L13.7917 22.4792Z" fill="white"/>
    </symbol>
</svg>
<div class="contacts_block1">
    <div class="contacts_block1_headline"><?= pll_e( 'Contacts title' ); ?></div>
    <div class="contacts_block1__info">
        <img src="<?= get_template_directory_uri( ).'/assets/images/contacts/Block1/Photo.png'?>" alt="">
        <div class="contacts_block1__info__col">
            <div class="contacts_block1__info__col__item">
                <svg viewBox="0 0 50 50">
                   <use xlink:href="#svg_contacts_location"/>
                </svg>
                <?= pll_e( 'Contacts adress' ); ?>
            </div>
            <div class="contacts_block1__info__col__item">
                <svg viewBox="0 0 50 50">
                   <use xlink:href="#svg_contacts_time"/>
                </svg>
                <?= pll_e( 'Contacts worktime' ); ?>
            </div>
            <div class="contacts_block1__info__col__item">
                <svg viewBox="0 0 50 50" >
                   <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <a href="mailto:<?= pll_e( 'Contacts mail' ); ?>"><?= pll_e( 'Contacts mail' ); ?></a>
            </div>
        </div>
        <div class="contacts_block1__info__col">
            <div class="contacts_block1__info__col__item">
                <svg viewBox="0 0 50 50">
                   <use xlink:href="#svg_contacts_phone"/>

                </svg>
                <a href="tel:<?= pll_e( 'Contacts phone1' ); ?>"><?= pll_e( 'Contacts phone1' ); ?></a>
            </div>
            <div class="contacts_block1__info__col__item">
                <svg viewBox="0 0 50 50">
                   <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <a href="tel:<?= pll_e( 'Contacts phone2' ); ?>"><?= pll_e( 'Contacts phone2' ); ?></a>
            </div>
            <!-- <div class="contacts_block1__info__col__item">
                <svg viewBox="0 0 50 50">
                   <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <a href="tel:<?= pll_e( 'Contacts phone3' ); ?>"><?= pll_e( 'Contacts phone3' ); ?></a>
            </div> -->
        </div>
        <div class="contacts_block1__info__col">
            <div class="contacts_block1__info__col__item">
                <a target="_blank" href=" https://www.instagram.com/seven_force_kiev" class="contacts_block1__info__col__item__social">
                    <img class="contacts_block1__info__col__item__social_icon" src="<?= get_template_directory_uri( ).'/assets/images/contacts/Block1/insta.png'?>" />
                    <div class="contacts_block1__info__col__item__social_text"><?= pll_e( 'Contacts insta' ); ?></div>
                </a>
                <a target="_blank" href="https://www.facebook.com/sevenforcekiev" class="contacts_block1__info__col__item__social">
                    <img class="contacts_block1__info__col__item__social_icon" src="<?= get_template_directory_uri( ).'/assets/images/contacts/Block1/facebook.png'?>" />
                    <div class="contacts_block1__info__col__item__social_text"><?= pll_e( 'Contacts facebook' ); ?></div>
                </a>
                <a target="_blank" href="https://vm.tiktok.com/ZMRtuaTu3/" class="contacts_block1__info__col__item__social">
                    <svg class="contacts_block1__info__col__item__social_icon" viewBox="0 0 46 46" >
                        <path d="M8 0.5C3.88867 0.5 0.5 3.88867 0.5 8V38C0.5 42.1113 3.88867 45.5 8 45.5H38C42.1113 45.5 45.5 42.1113 45.5 38V8C45.5 3.88867 42.1113 0.5 38 0.5H8ZM8 5.5H38C39.416 5.5 40.5 6.58398 40.5 8V38C40.5 39.416 39.416 40.5 38 40.5H8C6.58398 40.5 5.5 39.416 5.5 38V8C5.5 6.58398 6.58398 5.5 8 5.5ZM23 10.5V28C23 29.416 21.916 30.5 20.5 30.5C19.084 30.5 18 29.416 18 28C18 26.584 19.084 25.5 20.5 25.5V20.5C16.3887 20.5 13 23.8887 13 28C13 32.1113 16.3887 35.5 20.5 35.5C24.6113 35.5 28 32.1113 28 28V18.5859C29.543 19.6797 31.1445 20.5 33 20.5V15.5C32.8828 15.5 31.1543 14.9531 29.9531 13.9082C28.752 12.8535 28 11.5352 28 10.5H23Z" fill="white"/>
                    </svg>
                    <div class="contacts_block1__info__col__item__social_text"><?= pll_e( 'Contacts tiktok' ); ?></div>
                </a>
                <a  target="_blank" href=" https://t.me/sevenforcekiev" class="contacts_block1__info__col__item__social">
                    <svg class="contacts_block1__info__col__item__social_icon"viewBox="0 0 44 41" >
                        <path d="M43.1381 0.549975C42.3881 -0.0867436 41.2123 -0.176586 39.9935 0.311695H39.9896C38.7084 0.827319 3.72791 15.8312 2.30604 16.4445C2.04823 16.5343 -0.217399 17.3781 0.016976 19.257C0.224007 20.9523 2.04432 21.6554 2.26698 21.7375L11.1576 24.7804C11.7474 26.7453 13.9232 33.9914 14.4037 35.5383C14.7045 36.5031 15.1928 37.7726 16.0521 38.0343C16.8021 38.3234 17.5521 38.0578 18.0326 37.6789L23.4701 32.6359L32.2474 39.4797L32.4584 39.6047C33.0521 39.8703 33.6224 40.0031 34.1693 40.0031C34.5912 40.0031 34.9935 39.9211 35.3803 39.7648C36.6967 39.2258 37.2201 37.9718 37.2748 37.8273L43.8334 3.7531C44.2318 1.93279 43.6771 1.00701 43.1381 0.549975ZM19.0014 25.9992L16.0014 33.9992L13.0014 23.9992L36.0014 6.99919L19.0014 25.9992Z" fill="white"/>
                    </svg>
                    <div class="contacts_block1__info__col__item__social_text"><?= pll_e( 'Contacts telegram' ); ?></div>
                </a>

            </div>
            <a class="chatbotBtn" href=" https://button.amocrm.ru/zctdw" target="_blank">
                <img src="<?= get_template_directory_uri( ).'/assets/images/main/headerContacts/android.svg'?>" alt="link">
                <span><?= pll_e( 'Block7 ChatBot' ); ?></span>
            </a>
        </div>
    </div>
</div>

<div class="contacts_block2">
    <div class="contacts_block2_ukraine">
        <div class="contacts_block2_title"><?= pll_e( 'Contacts ukraine title main' ); ?></div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts ukraine block1 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_time"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts ukraine block1 worktime' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts ukraine block1 mail' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts ukraine block1 phone' ); ?></div>
            </div>
        </div>
        <!-- new lines -->
        <div class="contacts_block2_title"><?= pll_e( 'Contacts ukraine title dealers' ); ?></div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts ukraine block2 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts ukraine block2 phone' ); ?></div>
            </div>
        </div>
        <!-- <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts ukraine block3 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts ukraine block3 phone' ); ?></div>
            </div>
        </div> -->
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts ukraine block4 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts ukraine block4 phone' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts ukraine block5 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts ukraine block5 phone' ); ?></div>
            </div>
        </div>
    </div>
    <div class="contacts_block2_other">
        <div class="contacts_block2_title"><?= pll_e( 'Contacts other title main' ); ?></div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block1 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block1 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block1 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block2 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block2 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block2 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block3 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block3 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block3 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block4 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block4 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block4 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block5 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block5 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block5 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block6 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block6 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block6 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block7 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block7 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts other block7 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_text"><?= pll_e( 'Contacts other subtitle' ); ?></div>
    </div>
    <div class="contacts_block2_russia">
        <svg viewBox="0 0 292 310" >
            <circle cx="263.367" cy="175.043" r="4" transform="rotate(-180 263.367 175.043)" fill="white"/>
            <circle cx="177.689" cy="149.802" r="4" transform="rotate(-135 177.689 149.802)" fill="white"/>
            <circle cx="134.957" cy="71.3711" r="4" transform="rotate(-90 134.957 71.3711)" fill="white"/>
            <circle cx="263.369" cy="240.521" r="3.5" transform="rotate(180 263.369 240.521)" stroke="white"/>
            <circle cx="192.964" cy="231.438" r="3.5" transform="rotate(-157.5 192.964 231.438)" stroke="white"/>
            <circle cx="131.391" cy="196.103" r="3.5" transform="rotate(-135 131.391 196.103)" stroke="white"/>
            <circle cx="88.03" cy="139.893" r="3.5" transform="rotate(-112.5 88.03 139.893)" stroke="white"/>
            <circle cx="69.4785" cy="71.3711" r="3.5" transform="rotate(-90 69.4785 71.3711)" stroke="white"/>
            <circle cx="78.5622" cy="0.964122" r="3.5" transform="rotate(-67.5 78.5622 0.964122)" stroke="white"/>
            <circle cx="263.367" cy="306" r="4" transform="rotate(180 263.367 306)" fill="white"/>
            <circle cx="199.019" cy="300.785" r="4" transform="rotate(-165 199.019 300.785)" fill="white"/>
            <circle cx="138.214" cy="279.093" r="4" transform="rotate(-150 138.214 279.093)" fill="white"/>
            <circle cx="85.0898" cy="242.402" r="4" transform="rotate(-135 85.0898 242.402)" fill="white"/>
            <circle cx="43.2786" cy="193.212" r="4" transform="rotate(-120 43.2786 193.212)" fill="white"/>
            <circle cx="15.6175" cy="134.874" r="4" transform="rotate(-105 15.6175 134.874)" fill="white"/>
            <circle cx="4" cy="71.3691" r="4" transform="rotate(-90 4 71.3691)" fill="white"/>
            <circle cx="9.21539" cy="7.01923" r="4" transform="rotate(-75 9.21539 7.01923)" fill="white"/>
        </svg>

        <div class="contacts_block2_title"><?= pll_e( 'Contacts russia title main' ); ?></div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block1 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block1 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block1 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block2 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block2 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block2 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block3 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block3 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block3 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block4 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block4 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block4 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block5 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block5 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block5 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block6 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block6 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block6 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block7 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block7 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block7 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block8 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block8 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block8 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block9 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block9 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block9 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block10 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block10 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block10 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block11 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block11 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block11 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block12 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block12 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block12 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block13 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block13 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block13 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block14 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block14 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block14 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block15 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block15 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block15 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block16 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block16 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block16 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block17 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block17 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block17 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block18 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block18 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block18 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block19 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block19 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block19 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block20 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block20 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block20 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block21 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block21 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block21 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_block">
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_location"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block22 adress' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_phone"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block22 phone' ); ?></div>
            </div>
            <div class="contacts_block2_item">
                <svg class="contacts_block2_icon">
                    <use xlink:href="#svg_contacts_mail"/>
                </svg>
                <div class="contacts_block2_text"><?= pll_e( 'Contacts russia block22 mail' ); ?></div>
            </div>
        </div>
        <div class="contacts_block2_text"><?= pll_e( 'Contacts russia subtitle' ); ?></div>
    </div>
</div>

<div  class="contacts_block3">
    <div class="sendForm">
        <img src="<?= get_template_directory_uri( ).'/assets/images/chiptuning/Block5/Mask.png'?>" alt="gradient" class="eightGradient">

        <div class="formData">
            <div class="sendFormHead"><?= pll_e( 'Contacts form text' ); ?></div>
            <button class="redButton" id="formBtn">
                <p class="redButtonText">
                <?= pll_e( 'Contacts form btn' ); ?>
                </p>
            </button>
        </div>
    </div>
</div>
<div class="contacts_popup" id='popup_form' style="display: none">
    <div class="popupBlock">
        <img src="<?= get_template_directory_uri( ).'/assets/images/contacts/popup/close.png'?>" alt="close" class="close" id="formClose">
        <div class="error" id="contactform_response" style="display: none">
            <img class="popupImg" id="response_smile_link" src=""/>
            <div class="popupContent" id='contactform_response_text'>
            </div>
            <div class="popupButton">
                <button class="redButton " id="contactform_response_ok">
                    <p class="redButtonText">
                        ОК
                    </p>
                </button>
            </div>
        </div>

        <div class="leave" id="contactform" >
            <?php
                if (pll_current_language() == 'ru') {
                    echo do_shortcode( '[cf7form cf7key="%d1%80%d1%83%d1%81-%d0%b2%d1%81%d0%bf%d0%bb%d1%8b%d0%b2%d0%b0%d1%8e%d1%89%d0%b0%d1%8f_copy"]' );
                }
                if (pll_current_language() == 'ua') {
                    echo do_shortcode( '[cf7form cf7key="%d1%83%d0%ba%d1%80-%d0%b2%d1%81%d0%bf%d0%bb%d1%8b%d0%b2%d0%b0%d1%8e%d1%89%d0%b0%d1%8f_copy"]');
                }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<?php
include_once('locale.php');
include_once('configs.php');
?>

<!DOCTYPE html>
<html lang="<?= $currlang ?>">

<head>
    <!-- Hotjar Tracking Code for https://pms.propertyturkey.com/real-estate-deals/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3621380,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    
    <meta charset="utf-8">

    <meta name="title" content="<?= __('site_title') ?>">
    <meta name="description" content="<?= __('site_description') ?>">
    <meta name="keywords" content="<?= __('site_keywords') ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">

    <title><?= __('site_title') ?>, <?= __('site_motto') ?></title>

    <link rel="shortcut icon" href="img/favicon.ico">

    <?php echo _embed('all.css') ?>

</head>

<body id="top">

    <?php // Header 
    ?>

    <header class="header fixed_menu fixed_menu_shadow">
        <div class="row text-center align-items-center">
            <div class="col-lg-3 col-4 logo text-right">
                <img src="./img/since2001.svg" alt="" />
            </div>
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-4 logo">
                <img src="./img/PT-Logo-lg.svg" alt="" title="<?= __('site_motto') ?>" alt="<?= __('site_motto') ?>" />
            </div>
            <div class="col-lg-1 d-none d-lg-block"></div>
            <div class="col-lg-3 col-4 logo liimg">
                <img src="./img/L&I.svg" alt="" />
            </div>
        </div>
    </header>
    <?php // Hero 
    ?>


    <section class="hero margin_for_fixed_menu">
        <picture>
            <source media="(min-width:550px)" srcset="./img/BosphorusBridge_BG-lg.webp" />
            <img src="./img/BosphorusBridge_BG-sm.webp" alt="Flowers" style="width: auto" />

        </picture>
        <div class="founded-by">
            <img src="./img/FeaturedCD-lg.webp" alt="" />
        </div>
    </section>
    <picture>
        <source media="(min-width:550px)" srcset="./img/FeaturedCD-lg.webp" />
        <img class="d-lg-none" src="./img/FeaturedCD-sm.webp" alt="" />
    </picture>
    <div class="connect_with_pt">
        <div class="row w-100">
            <div class="col-12 col-lg-6">
                <form class="row contact_pt_form" id="form_1" onsubmit="doSend(event, '#form_1');">
                    <h2>
                        Connect with PT to unlock The Most Rewarding Investments & The
                        Finest Homes In Turkey
                    </h2>
                    <div class="col-12">
                        <div class='mb-3'><input class="my-input" type="text" onblur="chk(this, 'isEmpty')" name="name" id="name" placeholder="<?= __('name') ?>" /></div>
                        <div class="inline_input" onclick="form_target = '#form_1'; openMenu('#countriesList')">
                            <img src="img/png100px/tr.png" title="<?= __('country_code') ?>" alt="TR" id="countryImg" />
                            <input type="tel" name="zip" id="zip" value="---" maxlength="4" />
                        </div>
                        <div class='mb-3'><input class="my-input padding_left100px" type="tel" maxlength="11" onfocus="form_target = '#form_1'; openMenu('#countriesList','#zip')" onblur="chk(this, 'isPhone')" name="phone" id="phone" placeholder="<?= __('phone') ?>" /></div>
                        <div class='mb-3'><input class="my-input" type="email" onblur="chk(this, 'isEmail')" name="email" id="email" placeholder="<?= __('email') ?>" /></div>
                        <div class="text-center">
                            <button class="butn butn-red">Connect</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-5 culture">
                <a type="button" href="#" data-toggle="modal" data-target="#video_mdl">
                    <img class="bg" src="./img/STThumb_lg.webp" alt="" />
                </a>
                <div class="desc">
                    From the creators of
                    <img src="./img/StraightTalk-Logo-wh.svg" alt="" />
                    Turkey’s #1 <br />
                    Real Estate Podcast
                </div>
            </div>
        </div>
    </div>
    <div class="prop-num">
        <img src="./img/Ellipse-Gray.webp" alt="" />
        <span> Over 5,000 Properties Available for Lifestyle & Investment </span>
        <img src="./img/Ellipse-Gray.webp" alt="" />
    </div>
    <?php // Properties 
    ?>
    <div class="container-fluid">
        <div class="properties">
            <div class="row justify-content-center">
                <div class="city col-6 col-lg-2">
                    <div class="title">
                        <img src="./img/Istanbul-Banner-lg.webp" alt="" />
                        ISTANBUL
                    </div>

                    <div id="ISTANBUL" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <a href="javascript:toElm('#form_1', this)" class="carousel-item active">
                                <img class="d-block w-100" src="./img/Istanbul-Listing-1-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in ISTANBUL's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:toElm('#form_1', this)" class="carousel-item">
                                <img class="d-block w-100" src="./img/Istanbul-Listing-2-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in ISTANBUL's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:toElm('#form_1', this)" class="carousel-item">
                                <img class="d-block w-100" src="./img/Istanbul-Listing-3-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in ISTANBUL's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>
                        </div>
                        <a class="carousel-control-prev" href="#ISTANBUL" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#ISTANBUL" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="city col-6 col-lg-2">
                    <div class="title">
                        <img src="./img/Bodrum-Banner-lg.webp" alt="" />
                        BODRUM
                    </div>

                    <div id="bodrum" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <a href="javascript:toElm('#form_1', this)" class="carousel-item active">
                                <img class="d-block w-100" src="./img/Bodrum-Listing-1-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in bodrum's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:toElm('#form_1', this)" class="carousel-item">
                                <img class="d-block w-100" src="./img/Bodrum-Listing-2-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in bodrum's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:toElm('#form_1', this)" class="carousel-item">
                                <img class="d-block w-100" src="./img/Bodrum-Listing-3-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in bodrum's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>
                        </div>
                        <a class="carousel-control-prev" href="#bodrum" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#bodrum" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="city col-6 col-lg-2">
                    <div class="title">
                        <img src="./img/Bursa-Banner-lg.webp" alt="" />
                        BURSA
                    </div>

                    <div id="bursa" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <a href="javascript:toElm('#form_1', this)" class="carousel-item active">
                                <img class="d-block w-100" src="./img/Bursa-Listing-1-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in bursa's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:toElm('#form_1', this)" class="carousel-item">
                                <img class="d-block w-100" src="./img/Bursa-Listing-2-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in bursa's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:toElm('#form_1', this)" class="carousel-item">
                                <img class="d-block w-100" src="./img/Bursa-Listing-3-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in bursa's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>
                        </div>
                        <a class="carousel-control-prev" href="#bursa" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#bursa" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="city col-6 col-lg-2">
                    <div class="title">
                        <img src="./img/Fethiye-Banner-lg.webp  " alt="" />
                        Fethiye
                    </div>

                    <div id="fethiye" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <a href="javascript:toElm('#form_1', this)" class="carousel-item active">
                                <img class="d-block w-100" src="./img/Fethiye-Listing-1-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in fethiye's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:toElm('#form_1', this)" class="carousel-item">
                                <img class="d-block w-100" src="./img/Fethiye-Listing-2-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in fethiye's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:toElm('#form_1', this)" class="carousel-item">
                                <img class="d-block w-100" src="./img/Fethiye-Listing-3-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in fethiye's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>
                        </div>
                        <a class="carousel-control-prev" href="#fethiye" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#fethiye" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="city col-6 col-lg-2">
                    <div class="title">
                        <img src="./img/Antalya-Banner-lg.webp" alt="" />
                        antalya
                    </div>

                    <div id="antalya" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <a href="javascript:toElm('#form_1', this)" class="carousel-item active">
                                <img class="d-block w-100" src="./img/Antalya-Listing-1-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in antalya's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:toElm('#form_1', this)" class="carousel-item">
                                <img class="d-block w-100" src="./img/Antalya-Listing-2-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in antalya's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:toElm('#form_1', this)" class="carousel-item">
                                <img class="d-block w-100" src="./img/Antalya-Listing-3-lg.webp" alt="First slide" />
                                <div class="info">
                                    <div class="prop-title">
                                        Waterfront Elegance in antalya's Historic Heart
                                    </div>
                                    <div class="prop-detail">
                                        HALIC, ISTANBUL <br />
                                        3 Bed / 2 Bath
                                    </div>
                                </div>
                            </a>
                        </div>
                        <a class="carousel-control-prev" href="#antalya" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#antalya" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php // CALL TO ACTION
    ?>
    <div class="call2action">
        <a href="javascript:toElm('#form_1', this)" class="butn">FOR MANY MORE LISTINGS INQUIRE WITH US TODAY</a>
    </div>
    <div class="features">
        <div class="container-fluid">
            <div class="row flex-center">
                <div class="col-12 col-lg-6">
                    <p class="fs-3">
                        Unlock the full potential of turkish real <br />
                        estate with unrivaled efficiency
                    </p>
                    <span> Through the </span>
                    <div class="pt-ecosystem">
                        <img src="./img/PTEcosystem-logo.svg" alt="" />
                    </div>
                    <img class="d-lg-block d-none" src="./img/PartnerLogos.svg" alt="" />
                </div>
                <div class="col-12 col-lg-6">
                    <div class="pt-group">
                        <img src="./img/PTE-Diagram.svg" alt="" />
                    </div>
                </div>
                <div class="col-12 d-lg-none">
                    <img src="./img/PartnerLogos.svg" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="row flex-center">
            <div class="col-12 col-lg-6 trust">
                <img class="stars-img" src="./img/TrustPilot-5Stars.svg" alt="" />
                <h5>Great Team. Very Helpful.</h5>
                <p>
                    I had a great experience with this group. A big shoutout to Yunus
                    and Faruk who helped me to understand the process. They are very
                    knowledgeable and patient with answering all of my questions. I
                    would recommend them to anyone.
                </p>
                <b>SOHEILA</b>
                <span>November 3,2022</span>
                <img class="trust-logo" src="./img/Trustpilot-Logo.svg" alt="" />
            </div>
            <div class="col-12 col-lg-6 about-ecosystem">
                <h3>
                    A-Z Full Service EcoSystem from Acquisition to Wealth Management &
                    Everything In-Between
                </h3>
                <p>
                    At Property Turkey we have decades of industry-leading experience
                    purchasing apartments, villas, and other real estate all over the
                    country of Turkey for our clients.
                </p>
                <p>
                    You truly can earn passive investment income via Turkish real estate
                    utilizing our A-Z, One-Stop-Shop, all-encompassing ecosystem of real
                    estate professionals. Or maybe you are in search of citizenship by
                    investment via real estate purchase. Even if you want to build a
                    custom dream villa from an empty land plot on the coast of the
                    Aegean, we make that dream a reality. From news, to free
                    consultations, we warmly welcome you to Turkey. Property Turkey
                    can’t wait to get you settled.
                </p>
            </div>
        </div>
    </div>
    <footer>
        <div class="row w-100">
            <div class="col-lg-7 col-12">
                <div class="logo">
                    <img src="./img/TalkWithPT.svg" alt="" />
                </div>
                <div class="info">
                    <p>+90 212 215 0022</p>
                    <p>SISLI / ISTANBUL</p>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <form class="  contact-form" id="form_2" onsubmit="doSend(event, '#form_2');">
                    <div class='mb-3'><input class="my-input" type="text" onblur="chk(this, 'isEmpty')" name="name" id="name" placeholder="<?= __('name') ?>" /></div>
                    <div class="inline_input" onclick="form_target = '#form_2'; openMenu('#countriesList')">
                        <img src="img/png100px/tr.png" title="<?= __('country_code') ?>" alt="TR" id="countryImg" />
                        <input type="tel" name="zip" id="zip" value="---" maxlength="4" />
                    </div>
                    <div class='mb-3'><input class="my-input padding_left100px" type="tel" maxlength="11" onfocus="form_target = '#form_2'; openMenu('#countriesList','#zip')" onblur="chk(this, 'isPhone')" name="phone" id="phone" placeholder="<?= __('phone') ?>" /></div>
                    <div class='mb-3'><input class="my-input" type="email" onblur="chk(this, 'isEmail')" name="email" id="email" placeholder="<?= __('email') ?>" /></div>
                    <div class="text-center">
                        <button class="butn-red">Connect</button>
                    </div>
                </form>
                <div class=" to_top">
                    <a href="#top">Back To Top</a>
                </div>
            </div>
            <div class="copyright col-12">
                Copyright © 2023 Property Turkey Ltd. All Rights Reserved.
            </div>
        </div>
    </footer>
    <?php // Coutnries list 
    ?>
    <div class="countriesList" onclick="closeMenu(this)" id="countriesList">
        <ul></ul>
    </div>

    <?php include_once('message_mdl.php'); ?>
    <?php include_once('video_mdl.php'); ?>

    <script type="text/javascript" src="js/all.js"></script>

    <script>
        $(document).ready(function() {
            getCountries();
            const COUNTRY = JSON.parse('<?= getCountryByIP(false, 'json') ?>');
            setTimeout(() => {
                setVal(COUNTRY.calling_code + '|' + COUNTRY.country_code2.toLowerCase(), 'all');
            }, 500);
        })

        var ptrn = [];
        ptrn['isEmail'] = /^[a-zA-Z]+[a-zA-Z0-9._]+@[a-zA-Z]+\.[a-zA-Z.]{2,7}$/;
        ptrn['isNumber'] = /^[0-9]$/;
        ptrn['isInteger'] = /^[\s\d]$/;
        ptrn['isFloat'] = /^[0-9]?\d+(\.\d+)?$/;
        ptrn['isVersion'] = /^(?:(\d+)\.)?(?:(\d+)\.)?(\*|\d+)$/
        ptrn['isPassword'] = /^[A-Za-z0-9@#$%^&*()!_-]{4,32}$/;
        ptrn['isParagraph'] = /^[^()]{40,255}$/;
        ptrn['isEmpty'] = /^[^()]{3,255}$/; ///^((?!undefined).){3,255}$/;
        ptrn['isSelectEmpty'] = /^[^()]{1,255}$/;
        ptrn['isZipcode'] = /^\+[0-9]{1,4}$/;
        ptrn['isPhone'] = /^[\s\d]{9,11}$/;
        ptrn['setNumber'] = /^[^\d|\-+|\.+]$/;

        var errorMsg = [];
        errorMsg['isEmail'] = '<?= __('is-email-msg') ?>';
        errorMsg['isNumber'] = '<?= __('is-number-msg') ?>';
        errorMsg['isInteger'] = '<?= __('is-integer-msg') ?>';
        errorMsg['isFloat'] = '<?= __('is-flaot-msg') ?>';
        errorMsg['isVersion'] = '<?= __('is-version-msg') ?>';
        errorMsg['isPassword'] = '<?= __('is-password-msg') ?>'; //Only Alphabet, Numbers and symboles @ # $ % ^ & * ( ) ! _ - allowed;
        errorMsg['isParagraph'] = '<?= __('is-paragraph-msg') ?>'; //Paragraph should be between 40 and 255 character;
        errorMsg['isEmpty'] = '<?= __('is-empty-msg') ?>';
        errorMsg['isSelectEmpty'] = '<?= __('is-selected-empty-msg') ?>';
        errorMsg['isZipcode'] = '<?= __('is-zipcode-msg') ?>';
        errorMsg['isPhone'] = '<?= __('is-phone-msg') ?>';
        errorMsg['setNumber'] = '<?= __('is-number-msg') ?>';

        var data = {
            'btn': '<?= __('inquire') ?>',
            'imgClass': 'inquire_bg'
        };

        var datas = {
            'inquire': {
                'btn': '<?= __('inquire') ?>',
                'imgClass': 'inquire_mdl_header_bg',
                'ttl': '<?= __('inquire_header') ?>'
            },
            'read_more': {
                'btn': '<?= __('read_more') ?>',
                'imgClass': 'read_more_mdl_header_bg',
                'ttl': '<?= __('read_more_header') ?>'
            },
            'contact': {
                'btn': '<?= __('contact') ?>',
                'imgClass': 'contact_mdl_header_bg',
                'ttl': '<?= __('contact_header') ?>'
            },
            'scheduale': {
                'btn': '<?= __('scheduale') ?>',
                'imgClass': 'scheduale_mdl_header_bg',
                'ttl': '<?= __('scheduale_header') ?>'
            },
            'invest': {
                'btn': '<?= __('invest') ?>',
                'imgClass': 'invest_mdl_header_bg',
                'ttl': '<?= __('invest_header') ?>'
            },
        };

        var isOpenedModal = false;

        function openModal(tar, dt_tar) {
            clearMessage()
            data = datas[dt_tar];
            if (tar == '#sendLead_mdl') {
                changeValue('#mdl_btn', data.btn);
                changeValue('#mdl_header_bg', data.imgClass, 'cls');
                changeValue('#mdl_header_title', data.ttl, 'ttl');
            }
            $(tar || '#sendLead_mdl').modal('show');
            isOpenedModal = true;
        }

        function closeModal(tar) {
            $(tar || '#sendLead_mdl').modal('hide')
            isOpenedModal = false;
        }

        function openMenu(tar, isZip) {
            if (isZip) {
                if ($(isZip).val().length > 1 && $(isZip).val() !== '---') {
                    return;
                }
            }
            $(tar || '.links_side').addClass('show');
        }

        function closeMenu(tar) {
            $(tar || '.links_side').removeClass('show');
        }

        function changeValue(tar, val, type) {
            if (type == 'cls') {
                $(tar).removeClass()
                $(tar).addClass('modal-header ' + val)
            } else {
                $(tar).html(val)
            }
        }

        function toElm(tar, e) {
            closeMenu()
            var elm = document.getElementById(tar.substr(1));
            const y = (elm.getBoundingClientRect().top - 75) + window.scrollY;
            window.scroll({
                top: y,
                behavior: 'smooth'
            });
        }

        var form_target = '#form_1';
        
        function setVal(val, tar) {
            if(!tar){ tar = form_target; }
            !val ? val = COUNTRY.calling_code + '|' + COUNTRY.country_code2 : val;
            val = val.split('|');

            if (tar == 'all') {
                $('#form_mdl #zip').val(val[0]);
                $('#form_mdl #countryImg').attr('src', 'img/png100px/' + val[1] + '.png');
                $('#form_1 #zip').val(val[0]);
                $('#form_1 #countryImg').attr('src', 'img/png100px/' + val[1] + '.png');
                $('#form_2 #zip').val(val[0]);
                $('#form_2 #countryImg').attr('src', 'img/png100px/' + val[1] + '.png');
            } else {
                $(tar + ' #zip').val(val[0]);
                $(tar + ' #countryImg').attr('src', 'img/png100px/' + val[1] + '.png');
                $(tar + ' #phone').focus();
            }
        }

        function getCountries(tar) {
            $.getJSON("js/countries.json", function(res) {
                var html = '';
                for (var i in res) {
                    html += '<li onclick="setVal(\'' + res[i].val + '|' + res[i].code + '\')"><img src="img/png100px/' + ('bq,cw,gg,im,je,xk,bl,mf,sx,ss'.indexOf(res[i].code) > -1 ? 'noimg' : res[i].code) + '.png" title="' + res[i].cname + '" alt="' + res[i].cname + '" /> ' + res[i].cname + '</li>'
                }
                $(tar || '#countriesList ul').html(html)
            }).fail(function() {
                console.log("ERROR: countriesList not loaded!.");
            });
        }

        function doSend(e, form) {
            e.preventDefault();

            !form ? form = '#form_1' : form;

            var isValid = chk(false, {
                'name': 'isEmpty',
                'email': 'isEmail',
                'phone': 'isPhone',
                'zip': 'isZipcode'
            }, form);

            if (isValid) {
                _setCvrBtn(form, 1);
                $.ajax({
                        url: 'send.php',
                        method: "POST",
                        data: {
                            first_name: $(form + ' #name').val(),
                            last_name: $(form + ' #name').val(),
                            email: $(form + ' #email').val().toLowerCase(),
                            phone: $(form + ' #zip').val() + ' ' + $(form + ' #phone').val(),
                            id: 1,
                        },
                    })
                    .done(function(res) {
                        _setCvrBtn(form, 0);
                        var response = JSON.parse(res)
                        if (response.status == 1) {
                            closeModal('#sendLead_mdl');

                            $(form + ' #name').val('');
                            $(form + ' #email').val('');
                            $(form + ' #phone').val('');
                            $(form + ' #zip').val('');

                            setTimeout(() => {
                                openModal('#message_mdl', 'message');
                            }, 1000);

                            setTimeout(() => {
                                window.location.href = 'https://www.propertyturkey.com/thanks/13';
                            }, 2000)
                        } else {
                            alert('<?= __('sent-fail') ?>');
                        }
                    })
                    .fail(function(err) {
                        _setCvrBtn(form, 0);
                        console.log("error " + err);
                    })
            }
        }

        function _setError(elm, msg, clr) {

            !msg ? msg = "" : msg;
            !clr ? clr = false : clr;

            var tar = $(elm).parent();
            if (elm.type == "checkbox") {
                tar = $(elm).parent().parent().parent()
            }
            if ($('.error-message', tar).html() == undefined) {
                $(tar).append('<div class="error-message"></div>');
            }
            $('.error-message', tar).text(msg)
        }

        function _getErrors(obj, form_name) {
            (form_name[0] == '#' || form_name[0] == '.') ? form_name: form_name = '#' + form_name;
            $(".error-message").text('');
            for (var prop in obj) {
                var value = obj[prop];
                if (typeof obj[prop] !== 'object') {
                    continue;
                }
                var arr = $.map(value, function(val, index) {
                    return [val];
                });
                var elm = $(form_name + ' [name="' + prop + '"]');
                if (Array.isArray(elm)) {
                    _setError($(form_name + ' [name="' + prop + '"]')[0], arr[0])
                } else {
                    _setError($(form_name + ' [name="' + prop + '"]'), arr[0])
                }
            }
        }

        function _setCvrBtn(tar, param) {
            var elm = $(tar + " button");
            if (param == 1) {
                elm.addClass('loader');
                $(tar).attr("disabled", true);
            } else {
                elm.removeClass('loader');
                $(tar).attr("disabled", false);
            }
        }

        function chk(e, tar, form) {
            var isError = '';
            if (typeof tar === 'object') {
                for (var key in tar) {
                    var elm = $(form + ' #' + key);
                    if (ptrn[tar[key]].test($(elm).val())) {
                        _setError(elm, '', true);
                    } else {
                        _setError(elm, errorMsg[tar[key]]);
                        isError += tar[key]
                    }
                }
            } else {
                if (ptrn[tar].test(e.value)) {
                    _setError(e, '', true);
                } else {
                    _setError(e, errorMsg[tar]);
                    isError += tar
                }
            }
            return isError.length > 0 ? false : true;
        }

        function clearMessage(tar) {
            $(tar || '.error-message').html('')
        }

        $('#video_mdl').on('hidden.bs.modal', function() {
            $('#video_mdl video').trigger('pause');
        });
    </script>
</body>

</html>
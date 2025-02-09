<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:url" content="<?php echo home_url('/'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="男性向け美容院の架空サイト「CRAFT HAIR」">
    <meta property="og:description" content="男性のための美容院『CRAFTHAIR』。清潔感あふれる空間で、洗練されたスタイルをご提案します。カットからカラー、パーマまで、あなたの理想を叶えるメニューをご用意。髪型でお悩みの方もお気軽にご相談ください。" />
    <meta name="keywords" content="CRAFT HAIR, 男性向けの美容院, CUT, 東京都新宿区新宿, 新宿で一番安い">
    <meta property="og:site_name" content="CRAFT HAIR" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.webp" />
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@mk_craft_tokyo" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Kiwi+Maru:wght@300;400;500&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<header id="header" class="header u-contentWidth">
    <div class="header__topContainer">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logoLink">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.webp" alt="美容室CRAFT HAIRのロゴ" width="165" height="64" decoding="async">
        </a>
        <ul class="header__socialMediaMenu">
            <li class="header__socialMediaItem">
                <a href="https://www.instagram.com/" class="header__socialMediaLink" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.webp" alt="instagram" width="32" height="32" decoding="async">
                </a>
            </li>
            <li class="header__socialMediaItem">
                <a href="https://x.com/" class="header__socialMediaLink" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.webp" alt="twitter" width="32" height="32" decoding="async">
                </a>
            </li>
            <li class="header__socialMediaItem">
                <a href="https://www.youtube.com" class="header__socialMediaLink" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/youtube.webp" alt="youtube" width="32" height="32" decoding="async">
                </a>
            </li>
        </ul>
    </div>
    <nav class="header-listNav">
        <ul class="header__listMenu">
            <li class="header__listItem">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="header__listLink <?php if (is_page('sell')) {
                                                                                            echo 'header__listLink--sell';
                                                                                        } ?>">
                    TOP
                </a>
            </li>
            <li class="header__listItem">
                <a href="<?php echo esc_url(home_url('/')); ?>#concept" class="header__listLink <?php if (is_page('sell')) {
                                                                                                    echo 'header__listLink--sell';
                                                                                                } ?>">
                    CONCEPT
                </a>
            </li>
            <li class="header__listItem">
                <a href="<?php echo esc_url(home_url('/')); ?>#hairStyle" class="header__listLink <?php if (is_page('sell')) {
                                                                                                        echo 'header__listLink--sell';
                                                                                                    } ?>">
                    STYLE
                </a>
            </li>
            <li class="header__listItem">
                <a href="<?php echo esc_url(home_url('/')); ?>#topMenu" class="header__listLink <?php if (is_page('inquiry')) {
                                                                                                    echo 'header__listLink--inquiry';
                                                                                                } ?>">
                    MENU
                </a>
            </li>
            <li class="header__listItem">
                <a href="<?php echo esc_url(home_url('/')); ?>#recruit" class="header__listLink <?php if (is_page('inquiry')) {
                                                                                                    echo 'header__listLink--inquiry';
                                                                                                } ?>">
                    RECRUIT
                </a>
            </li>
            <li class="header__listItem">
                <a href="<?php echo esc_url(home_url('/')); ?>#" class="header__listLink <?php if (is_page('inquiry')) {
                                                                                                echo 'header__listLink--inquiry';
                                                                                            } ?>">
                    CONTACT
                </a>
            </li>
        </ul>
    </nav>
    <div class="header__hamburger">
        <nav class="header__hamburgerNav">
            <ul class="header__hamburgerMenu">
                <li class="header__hamburgerItem">
                    <a href="<?php echo esc_url(home_url('/#')); ?>" class="header__hamburgerLink">
                        TOP
                    </a>
                </li>
                <li class="header__hamburgerItem">
                    <a href="<?php echo esc_url(home_url('/')); ?>#concept" class="header__hamburgerLink <?php if (is_post_type_archive('new-arrival')) {
                                                                                                                echo 'header__listLink--newArrival';
                                                                                                            } ?>">
                        CONCEPT
                    </a>
                </li>
                <li class="header__hamburgerItem">
                    <a href="<?php echo esc_url(home_url('/')); ?>#hairStyle" class="header__hamburgerLink <?php if (is_page('sell')) {
                                                                                                                echo 'header__listLink--sell';
                                                                                                            } ?>">
                        STYLE
                    </a>
                </li>
                <li class="header__hamburgerItem">
                    <a href="<?php echo esc_url(home_url('/')); ?>#topMenu" class="header__hamburgerLink <?php if (is_page('faq')) {
                                                                                                                echo 'header__listLink--faq';
                                                                                                            } ?>">
                        MENU
                    </a>
                </li>
                <li class="header__hamburgerItem">
                    <a href="<?php echo esc_url(home_url('/')); ?>#recruit" class="header__hamburgerLink <?php if (is_page('inquiry')) {
                                                                                                                echo 'header__listLink--inquiry';
                                                                                                            } ?>">
                        RECRUIT
                    </a>
                </li>
                <li class="header__hamburgerItem">
                    <a href="<?php echo esc_url(home_url('/')); ?>#" class="header__hamburgerLink <?php if (is_page('inquiry')) {
                                                                                                        echo 'header__listLink--inquiry';
                                                                                                    } ?>">
                        CONTACT
                    </a>
                </li>

            </ul>
            <ul class="header__hamburgerSocialMediaMenu">
                <li class="header__hamburgerSocialMediaItem">
                    <a href="https://www.instagram.com/" class="header__hamburgerSocialMediaLink" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.webp" alt="instagram" width="32" height="32" decoding="async">
                    </a>
                </li>
                <li class="header__hamburgerSocialMediaItem">
                    <a href="https://x.com/" class="header__hamburgerSocialMediaLink" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.webp" alt="twitter" width="32" height="32" decoding="async">
                    </a>
                </li>
                <li class="header__hamburgerSocialMediaItem">
                    <a href="https://www.youtube.com" class="header__hamburgerSocialMediaLink" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/youtube.webp" alt="youtube" width="32" height="32" decoding="async">
                    </a>
                </li>
            </ul>
    </div>
    </nav>
    <button class="header__hamburgerBox">
        <span class="header__hamburgerLine"></span>
        <span class="header__hamburgerLine"></span>
        <span class="header__hamburgerLine"></span>
    </button>
    </div>
</header>
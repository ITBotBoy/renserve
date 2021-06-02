<?php
$json_string = file_get_contents('data.json');
$data = json_decode($json_string);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>莫名的工具箱 | 莫名的小窝</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" type="image/png" href="//source.renserve.com/assets/img/2021/05/28/760e9da4-bf73-11eb-91cf-fa163e1211f0.png">
    <link rel="apple-touch-icon-precomposed" href="//source.renserve.com/assets/img/2021/05/28/760e9da4-bf73-11eb-91cf-fa163e1211f0.png">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="keywords" content="莫名，莫名的工具箱，莫名的小窝，个人博客，日常学习，生活记录">
    <meta name="description" content="莫名的工具箱 | 莫名的小窝">
    <link rel="stylesheet" href="<?php echo $data->iconfontSrc;?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css?ver=5.6.2">
    <style>
        .logo-expanded {
            font-size: 24px;
            font-weight: 200;
            margin: 0;
        }
        .logo  .iconfont {
            font-size: 24px;
            font-weight: 200;
            margin-right: 5px;
            color: #1DA7DA;
        }
        .leave-message {
            color: #878888;
            text-decoration: underline!important;
        }
        #search {
            margin: 100px auto 14px;
        }
        @media screen and (max-width: 767px){
            #search {
                margin: 25px auto 15px;
            }
        }
    </style>
    <style>
        .sites-list h4 {
            font-family: 'Playfair Display', 'Noto Serif SC', serif;
        }

        html, body {
            background-color: #f9f9f9;
            font-size: 1rem !important;
        }

        a {
            color: #282828;
            outline: 0 !important
        }

        p {
            color: #878888
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            border: 0
        }

        a:hover, a:focus {
            color: #232323;
            text-decoration: none
        }

        .box2 {
            height: 86px;
            border-radius: 4px;
            padding: 0px 30px 0px 30px;
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #e4ecf3;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease
        }

        .box2:hover {
            box-shadow: 0 26px 40px -24px rgba(0, 36, 100, .3);
            -webkit-box-shadow: 0 26px 40px -24px rgba(0, 36, 100, .3);
            -moz-box-shadow: 0 26px 40px -24px rgba(0, 36, 100, .3);
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease
        }



        .xe-comment-entry img {
            float: left;
            display: block;
            background: rgba(136, 136, 136, .15);
            margin-right: 10px
        }

        .xe-comment p {
            margin-bottom: 0px
        }

        .overflowClip_2 {
            font-size: 12px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical
        }

        .overflowClip_1 {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical
        }

        .submit-tag {
            margin-top: 50px
        }

        .xe-card {
            position: relative;
            height: 86px;
            margin: 20px 0 0 0
        }

        .xe-widget {
            position: relative
        }

        .xe-widget.xe-conversations {
            position: absolute;
            background: #fff;
            margin-bottom: 0px;
            padding: 15px;
            left: 0;
            right: 0;
            margin: 0 15px
        }

        .transall, .sidebar-menu .main-menu a, .navbar.horizontal-menu .navbar-inner .navbar-brand a[data-toggle=settings-pane], .navbar.horizontal-menu .navbar-inner .navbar-brand a[data-toggle=settings-pane] i, .user-info-navbar .user-info-menu > li > a, .footer-sticked-chat .chat-conversations > li .chat-user, .footer-sticked-chat .chat-conversations > li.open .conversation-window, .footer-sticked-chat .chat-conversations > li.browse-more .other-conversations-list li a span, .breadcrumb.auto-hidden li a, .icon-collection .fontawesome-icon-list .fa-hover .icon-str > i, .icon-collection .fontawesome-icon-list .fa-hover .icon-str > span {
            -webkit-transition: all 220ms ease-in-out;
            -moz-transition: all 220ms ease-in-out;
            -o-transition: all 220ms ease-in-out;
            transition: all 220ms ease-in-out
        }

        .clearfix:before, .clearfix:after, .page-container .main-content .page-title:before, .page-container .main-content .page-title:after, .sidebar-menu .logo-env:before, .sidebar-menu .logo-env:after, .navbar.horizontal-menu .navbar-inner:before, .navbar.horizontal-menu .navbar-inner:after, footer.main-footer .footer-inner:before, footer.main-footer .footer-inner:after, .user-info-navbar .user-info-menu > li .dropdown-menu > .external a:before, .user-info-navbar .user-info-menu > li .dropdown-menu > .external a:after, #chat .chat-conversation .conversation-body > li:before, #chat .chat-conversation .conversation-body > li:after, .panel .panel-heading:before, .panel .panel-heading:after, .breadcrumb.auto-hidden:before, .breadcrumb.auto-hidden:after, .dataTables_wrapper .dataTables_length:before, .dataTables_wrapper .dataTables_length:after, .dataTables_wrapper .dataTables_filter:before, .dataTables_wrapper .dataTables_filter:after, .dataTables_wrapper .DTTT_container:before, .dataTables_wrapper .DTTT_container:after, .skin-color-palette:before, .skin-color-palette:after, .icon-collection .fontawesome-icon-list:before, .icon-collection .fontawesome-icon-list:after, .icon-collection .fontawesome-icon-list .fa-hover .icon-str:before, .icon-collection .fontawesome-icon-list .fa-hover .icon-str:after, .highlights li:before, .highlights li:after, .navbar.horizontal-menu .navbar-inner > .nav > li .dropdown-menu > .external a:before, .navbar.horizontal-menu .navbar-inner > .nav > li .dropdown-menu > .external a:after {
            content: " ";
            display: table
        }

        .clearfix:after, .page-container .main-content .page-title:after, .sidebar-menu .logo-env:after, .navbar.horizontal-menu .navbar-inner:after, footer.main-footer .footer-inner:after, .user-info-navbar .user-info-menu > li .dropdown-menu > .external a:after, #chat .chat-conversation .conversation-body > li:after, .panel .panel-heading:after, .breadcrumb.auto-hidden:after, .dataTables_wrapper .dataTables_length:after, .dataTables_wrapper .dataTables_filter:after, .dataTables_wrapper .DTTT_container:after, .skin-color-palette:after, .icon-collection .fontawesome-icon-list:after, .icon-collection .fontawesome-icon-list .fa-hover .icon-str:after, .highlights li:after, .navbar.horizontal-menu .navbar-inner > .nav > li .dropdown-menu > .external a:after {
            clear: both
        }

        .page-container .main-content {
            display: table-cell;
            position: relative;
            z-index: 1;
            padding: 30px;
            padding-bottom: 0;
            vertical-align: top;
            word-break: break-word;
            width: 100%;
            -webkit-transition: opacity 100ms ease-in-out;
            -moz-transition: opacity 100ms ease-in-out;
            -o-transition: opacity 100ms ease-in-out;
            transition: opacity 100ms ease-in-out
        }

        .page-container {
            display: table;
            width: 100%;
            height: 100%;
            vertical-align: top;
            border-collapse: collapse;
            border-spacing: 0;
            table-layout: fixed
        }

        .page-container .main-content:hover {
            z-index: 15
        }

        .page .panel p, .page .comments-area p {
            font-size: 15px;
            line-height: 1.8
        }

        .sidebar-menu {
            display: table-cell;
            position: relative;
            width: 250px;
            background: #fff;
            z-index: 1
        }

        .sidebar-menu .logo-env {
            padding: 25px 30px;
        }

        .sidebar-menu .logo-env .logo {
            float: left
        }

        .sidebar-menu .logo-env .logo .logo-collapsed {
            display: none
        }

        .sidebar-menu .main-menu {
            padding: 0 30px;
            margin-top: 20px;
            margin-bottom: 20px;
            list-style: none
        }

        .navbar.horizontal-menu .navbar-inner > .nav.navbar-mobile {
            display: none
        }

        .navbar .navbar-content {
            position: absolute;
            top: 0;
            background: #fff;
            width: 100%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .05);
            padding-bottom: 1px
        }

        @media screen and (max-width: 767px) {
            .sidebar-menu .main-menu {
                margin-top: 10px;
                margin-bottom: 10px
            }
        }

        footer.main-footer .go-up {
            width: 45px;
            float: right;
            position: fixed;
            right: 10px;
            bottom: 30px;
            z-index: 10;
            margin: 0;
            padding: 0;
            list-style: none
        }

        footer.main-footer .go-up a {
            display: inline-block;
            width: 35px;
            height: 35px;
            text-align: center;
            border-radius: 50%;
            background: rgba(123, 123, 123, .50);
            color: #fff;
            font-size: 20px;
            line-height: 35px;
            padding: 0
        }

        footer.main-footer .go-up a:hover {
            background-color: rgba(44, 46, 47, .1)
        }

        footer.main-footer.footer-type-2 {
            background-color: #252729;
            border-top: 0;
            color: #fff
        }

        .sidebar-menu .main-menu li.active > a {
            color: #e43f5a;
            opacity: 1;
        }

        .sidebar-menu .main-menu li.has-sub > a:before {
            position: relative;
            display: inline-block;
            font-family: FontAwesome;
            content: '\f107';
            float: right;
            color: #6d747a;
            margin-left: 10px;
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            transform: rotate(-90deg);
            -webkit-transition: all 150ms ease-in-out;
            -moz-transition: all 150ms ease-in-out;
            -o-transition: all 150ms ease-in-out;
            transition: all 150ms ease-in-out
        }

        .sidebar-menu .main-menu li.has-sub.opened > a:before, .sidebar-menu .main-menu li.has-sub.expanded > a:before {
            -webkit-transform: rotate(0);
            -moz-transform: rotate(0);
            -o-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0)
        }

        .sidebar-menu .main-menu a {
            opacity: .6;
            color: #17223b;
            text-decoration: none;
            display: block;
            padding: 13px 5px;
        }

        .sidebar-menu .main-menu a > i {
            display: inline-block;
            margin-right: 10px
        }

        .sidebar-menu .main-menu a > i + span {
            padding-right: 10px
        }

        .sidebar-menu .main-menu a > span {
            display: inline-block
        }

        .sidebar-menu .main-menu a:hover {
            opacity: 1;
        }

        .sidebar-menu.fixed {
            height: 100%
        }

        .sidebar-menu.fixed .sidebar-menu-inner {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: inherit;
            overflow: hidden
        }

        .sidebar-menu .main-menu ul {
            display: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            list-style: none
        }

        .sidebar-menu .main-menu ul li {
            position: relative
        }

        @media screen and (min-width: 768px) {
            .sidebar-menu .main-menu ul li.is-hidden {
                left: -20px;
                zoom: 1;
                filter: alpha(opacity=0);
                -webkit-opacity: 0;
                -moz-opacity: 0;
                opacity: 0
            }
        }

        .sidebar-menu .main-menu ul li.is-shown {
            left: 0;
            zoom: 1;
            filter: alpha(opacity=100);
            -webkit-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            -webkit-transition: all 200ms ease-in-out;
            -moz-transition: all 200ms ease-in-out;
            -o-transition: all 200ms ease-in-out;
            transition: all 200ms ease-in-out
        }

        .sidebar-menu .main-menu ul li.is-shown + .is-shown {
            -webkit-transition-delay: 80ms;
            -moz-transition-delay: 80ms;
            -o-transition-delay: 80ms;
            transition-delay: 80ms
        }

        .sidebar-menu .main-menu ul li.is-shown + .is-shown + .is-shown {
            -webkit-transition-delay: 120ms;
            -moz-transition-delay: 120ms;
            -o-transition-delay: 120ms;
            transition-delay: 120ms
        }

        .sidebar-menu .main-menu ul li.is-shown + .is-shown + .is-shown + .is-shown {
            -webkit-transition-delay: 160ms;
            -moz-transition-delay: 160ms;
            -o-transition-delay: 160ms;
            transition-delay: 160ms
        }

        .sidebar-menu .main-menu ul li.is-shown + .is-shown + .is-shown + .is-shown + .is-shown {
            -webkit-transition-delay: 200ms;
            -moz-transition-delay: 200ms;
            -o-transition-delay: 200ms;
            transition-delay: 200ms
        }

        .sidebar-menu .main-menu ul li.is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown {
            -webkit-transition-delay: 240ms;
            -moz-transition-delay: 240ms;
            -o-transition-delay: 240ms;
            transition-delay: 240ms
        }

        .sidebar-menu .main-menu ul li.is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown {
            -webkit-transition-delay: 280ms;
            -moz-transition-delay: 280ms;
            -o-transition-delay: 280ms;
            transition-delay: 280ms
        }

        .sidebar-menu .main-menu ul li.is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown {
            -webkit-transition-delay: 320ms;
            -moz-transition-delay: 320ms;
            -o-transition-delay: 320ms;
            transition-delay: 320ms
        }

        .sidebar-menu .main-menu ul li.is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown {
            -webkit-transition-delay: 360ms;
            -moz-transition-delay: 360ms;
            -o-transition-delay: 360ms;
            transition-delay: 360ms
        }

        .sidebar-menu .main-menu ul li.is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown {
            -webkit-transition-delay: 400ms;
            -moz-transition-delay: 400ms;
            -o-transition-delay: 400ms;
            transition-delay: 400ms
        }

        .sidebar-menu .main-menu ul li.is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown + .is-shown {
            -webkit-transition-delay: 440ms;
            -moz-transition-delay: 440ms;
            -o-transition-delay: 440ms;
            transition-delay: 440ms
        }

        .sidebar-menu .main-menu ul li.hidden-item {
            visibility: hidden;
            zoom: 1;
            filter: alpha(opacity=0);
            -webkit-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            -webkit-transition: all 250ms ease-in-out;
            -moz-transition: all 250ms ease-in-out;
            -o-transition: all 250ms ease-in-out;
            transition: all 250ms ease-in-out
        }

        .sidebar-menu .main-menu ul li a {
            padding-left: 35px
        }

        .sidebar-menu .main-menu ul li ul li a {
            padding-left: 60px
        }

        .sidebar-menu .main-menu ul li ul li ul li a {
            padding-left: 85px
        }

        .sidebar-menu .main-menu ul li ul li ul li ul li a {
            padding-left: 110px
        }

        @media screen and (min-width: 768px) {
            .sidebar-menu.collapsed {
                width: 80px;
                z-index: 10;
                overflow: visible
            }

            .sidebar-menu.collapsed .hidden-collapsed {
                display: none !important
            }

            .sidebar-menu.collapsed + .main-content .user-info-navbar .user-info-menu a[data-toggle=sidebar] {
                color: #606161
            }

            .sidebar-menu.collapsed + .main-content .main-footer {
                left: 80px
            }

            .sidebar-menu.collapsed .sidebar-menu-inner {
                overflow: visible;
                position: fixed
            }

            .sidebar-menu.collapsed .logo-env {
                padding: 19px 0
            }

            .sidebar-menu.collapsed .logo-env .logo-collapsed {
                display: block;
                text-align: center
            }

            .sidebar-menu.collapsed .logo-env .logo-collapsed img {
                display: inline-block
            }

            .sidebar-menu.collapsed .logo-env .logo-expanded, .sidebar-menu.collapsed .logo-env .settings-icon {
                display: none
            }

            .sidebar-menu.collapsed .logo-env .logo {
                float: none
            }

            .sidebar-menu.collapsed .main-menu {
                padding-left: 0;
                padding-right: 0
            }

            .sidebar-menu.collapsed .main-menu > li {
                text-align: center;
                position: relative
            }

            .sidebar-menu.collapsed .main-menu > li > a > i {
                margin-right: 0;
                font-size: 20px
            }

            .sidebar-menu.collapsed .main-menu > li > a > span {
                display: none
            }

            .sidebar-menu.collapsed .main-menu > li > a > span.label {
                display: block;
                position: absolute;
                right: 0;
                top: 0
            }

            .sidebar-menu.collapsed .main-menu > li.has-sub > a:before {
                display: none
            }

            .sidebar-menu.collapsed .main-menu > li.opened > ul {
                display: none
            }

            .sidebar-menu.collapsed .main-menu > li > ul {
                position: absolute;
                background: #2c2e2f;
                width: 250px;
                top: 0;
                left: 100%;
                text-align: left
            }

            .page-body.right-sidebar .sidebar-menu.collapsed .main-menu > li > ul {
                left: auto;
                right: 100%
            }

            .sidebar-menu.collapsed .main-menu > li > ul > li > a {
                padding-left: 20px
            }

            .sidebar-menu.collapsed .main-menu > li > ul > li > ul > li > a {
                padding-left: 35px
            }

            .sidebar-menu.collapsed .main-menu > li > ul > li > ul > li > ul > li > a {
                padding-left: 50px
            }

            .sidebar-menu.collapsed .main-menu > li > ul > li > ul > li > ul > li > ul > li > a {
                padding-left: 65px
            }

            .sidebar-menu.collapsed .main-menu > li > ul > li > ul > li > ul > li > ul > li > ul > li > a {
                padding-left: 80px
            }

            .sidebar-menu.collapsed .main-menu > li > ul li.has-sub > a:before {
                margin-right: 10px
            }

            .sidebar-menu.collapsed .main-menu > li:hover > ul {
                display: block
            }

            .navbar.horizontal-menu .navbar-inner .navbar-nav.click-to-expand .has-sub:hover > a:before {
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -o-transform: rotate(0);
                -ms-transform: rotate(0);
                transform: rotate(0)
            }

            .navbar.horizontal-menu .navbar-inner .navbar-nav.click-to-expand .has-sub.expanded > a:before {
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                transform: rotate(90deg)
            }

            .navbar.horizontal-menu .navbar-inner .navbar-nav ul > li.has-sub > a:before {
                content: '\f105';
                font-family: FontAwesome;
                display: block;
                float: right;
                color: #979898;
                position: relative;
                margin-left: 10px;
                line-height: 1.3;
                -webkit-transform-origin: center center;
                -moz-transform-origin: center center;
                -o-transform-origin: center center;
                -ms-transform-origin: center center;
                transform-origin: center center
            }

            .navbar.horizontal-menu .navbar-inner .navbar-nav ul > li.has-sub:hover > a:before, .navbar.horizontal-menu .navbar-inner .navbar-nav ul > li.has-sub.expanded > a:before {
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                transform: rotate(90deg)
            }

            .navbar.horizontal-menu .navbar-inner > .nav.navbar-mobile {
                display: block;
                float: right;
                padding-right: 20px
            }

            .navbar.horizontal-menu .navbar-inner > .nav.navbar-mobile a {
                position: relative;
                display: inline-block;
                color: #979898;
                line-height: 1;
                margin-left: 20px
            }

            .navbar.horizontal-menu .navbar-inner > .nav.navbar-mobile a i {
                line-height: 1;
                font-size: 18px;
                position: relative;
                top: 1px
            }

            .navbar.horizontal-menu .navbar-inner > .nav.navbar-mobile a:hover, .navbar.horizontal-menu .navbar-inner > .nav.navbar-mobile a:active, .navbar.horizontal-menu .navbar-inner > .nav.navbar-mobile a:focus {
                color: #fff
            }

            .navbar.horizontal-menu .navbar-inner > .nav.navbar-mobile a .badge {
                position: absolute;
                right: -3px;
                top: -8px;
                font-size: 8px;
                padding: 1px 2px;
                min-width: 14px
            }
        }

        .navbar.horizontal-menu.click-to-expand .has-sub:hover > a:before {
            -webkit-transform: rotate(0) !important;
            -moz-transform: rotate(0) !important;
            -o-transform: rotate(0) !important;
            -ms-transform: rotate(0) !important;
            transform: rotate(0) !important
        }

        .navbar.horizontal-menu.click-to-expand .has-sub.expanded > a:before {
            -webkit-transform: rotate(90deg) !important;
            -moz-transform: rotate(90deg) !important;
            -o-transform: rotate(90deg) !important;
            -ms-transform: rotate(90deg) !important;
            transform: rotate(90deg) !important
        }

        footer.main-footer {
            padding: 20px 30px;
            border-top: 1px solid #ddd;
            font-size: 12px;
            margin-left: -30px;
            margin-right: -30px;
            margin-top: 0px;
            background-color: #f9f9f9
        }

        footer.main-footer:before, footer.main-footer:after {
            content: " ";
            display: table
        }

        footer.main-footer:after {
            clear: both
        }

        footer.main-footer:before, footer.main-footer:after {
            content: " ";
            display: table
        }

        footer.main-footer:after {
            clear: both
        }

        .user-info-navbar {
            background-color: #fff;
            min-height: 0;
            border: 0;
            padding: 0;
            margin: -30px;
            margin-bottom: 30px
        }

        .user-info-navbar .user-info-menu {
            margin: 0
        }

        .user-info-navbar .user-info-menu.left-links {
            float: left
        }

        .user-info-navbar .user-info-menu li {
            line-height: 1;
            display: table-cell;
            text-align: center;
            vertical-align: middle
        }

        .user-info-navbar .user-info-menu li a {
            line-height: 1
        }

        .user-info-navbar .user-info-menu > li > a {
            display: block;
            padding: 18px 10px;
            color: #979898;
            text-decoration: none
        }

        .user-info-navbar .user-info-menu > li > a i {
            font-size: 15px;
            line-height: 1
        }

        .user-info-navbar .user-info-menu > li > a:hover {
            color: #606161
        }

        .user-info-navbar .user-info-menu > li a[data-toggle=sidebar] {
            padding: 31px 10px;
            padding-left: 20px
        }

        @media screen and (max-width: 767px) {
            .page-container {
                display: block
            }

            .page-container .sidebar-menu, .page-container .main-content {
                display: block;
                width: 100%;
                height: auto;
                position: absolute;
                top: 50px
            }

            .page-container .sidebar-menu {
                position: fixed;
                z-index: 999;
                top: 0px
            }

            .page-container .sidebar-menu .sidebar-menu-inner {
                position: relative
            }

            .page-container .sidebar-menu .sidebar-menu-inner .logo-env, .page-container .sidebar-menu .sidebar-menu-inner .main-menu {
                padding-left: 20px;
                padding-right: 20px
            }

            .page-container .sidebar-menu .sidebar-menu-inner .logo-env {
                margin-bottom: 0;
                padding-top: 20px;
                padding-bottom: 20px
            }

            .page-container .sidebar-menu .sidebar-menu-inner .logo-env .mobile-menu-toggle {
                float: right
            }

            .page-container .sidebar-menu .sidebar-menu-inner .logo-env .mobile-menu-toggle a {
                position: relative;
                display: inline-block;
                color: #979898!important;
                line-height: 1;
                margin-left: 20px
            }

            .page-container .sidebar-menu .sidebar-menu-inner .logo-env .mobile-menu-toggle a i {
                line-height: 1;
                font-size: 20px;
                position: relative;
                top: 4px
            }

            .page-container .sidebar-menu .sidebar-menu-inner .logo-env .mobile-menu-toggle a:hover, .page-container .sidebar-menu .sidebar-menu-inner .logo-env .mobile-menu-toggle a:active, .page-container .sidebar-menu .sidebar-menu-inner .logo-env .mobile-menu-toggle a:focus {
                color: #fff
            }

            .page-container .sidebar-menu .sidebar-menu-inner .main-menu {
                display: none
            }

            .page-container .sidebar-menu .sidebar-menu-inner .main-menu.mobile-is-visible {
                display: block
            }

            .page-container .sidebar-menu .sidebar-menu-inner .main-menu.mobile-is-visible.both-menus-visible {
                margin-top: 0;
                padding-top: 0
            }

            .page-container .sidebar-menu .sidebar-menu-inner .main-menu > li:last-child > a {
                border-bottom: 0
            }

            .page-container .main-content .navbar.user-info-navbar {
                display: none
            }

            .page-container .main-content .navbar.user-info-navbar.mobile-is-visible {
                display: block
            }

            .page-container .main-content .navbar.user-info-navbar .user-info-menu > li {
                min-height: 0 !important
            }

            .page-container .main-content .navbar.user-info-navbar .user-info-menu > li > a, .page-container .main-content .navbar.user-info-navbar .user-info-menu > li > form {
                padding-top: 20px;
                padding-bottom: 20px
            }

            .page-container .main-content .main-footer {
                position: relative;
                left: 0;
                right: auto;
                margin-left: -15px;
                margin-right: -15px
            }

            .page-container {
                position: relative
            }

            .navbar.horizontal-menu .navbar-inner .navbar-nav li.has-sub > a:before {
                position: relative;
                display: inline-block;
                font-family: FontAwesome;
                content: '\f107';
                float: right;
                color: #6d747a;
                margin-left: 10px;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                transform: rotate(-90deg);
                -webkit-transition: all 150ms ease-in-out;
                -moz-transition: all 150ms ease-in-out;
                -o-transition: all 150ms ease-in-out;
                transition: all 150ms ease-in-out
            }

            .navbar.horizontal-menu .navbar-inner .navbar-nav li.has-sub.opened > a:before, .navbar.horizontal-menu .navbar-inner .navbar-nav li.has-sub.expanded > a:before {
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -o-transform: rotate(0);
                -ms-transform: rotate(0);
                transform: rotate(0)
            }
        }


        .tooltip .tooltip-inner {
            padding: 10px 15px
        }

        nav.navbar {
            border: 0
        }

        nav.navbar form > .btn {
            margin-bottom: 0
        }

        nav.navbar .navbar-header .navbar-brand {
            padding-left: 30px;
            padding-right: 30px
        }

        nav.navbar .navbar-nav li a {
            padding-left: 20px;
            padding-right: 20px
        }

        nav.navbar.navbar-inverse .navbar-toggle i {
            color: #fff
        }

        @media print {
            .sidebar-menu {
                display: none
            }

            .main-content {
                padding: 0 !important
            }

            .main-content .user-info-navbar, .main-content .page-title, .main-content footer.main-footer {
                display: none
            }

            .main-content > .panel {
                margin-bottom: 0
            }
        }

        a:hover {
            text-decoration: none
        }

        .form-control {
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none
        }

        .form-control:focus, .form-control:active {
            outline: 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none
        }

        .text-gray {
            color: #444
        }

        .breadcrumb-env {
            margin: -10px 0 0 -15px
        }

        footer.main-footer .footer-text {
            text-align: center;
        }

        .panel.expanded .accordion-toggle:before {
            content: '–' !important
        }

        .but-home {
            color: #fff;
            background: #f14141;
            padding: 10px 30px;
            border-radius: 5px;
            font-size: 18px;
            transition: .3s
        }

        .but-home:hover {
            color: #fff;
            background: #333
        }

        /* --- customize --- */
        .nothing {
            padding: 20px 0;
            margin: 10px 0;
            text-align: center;
            color: #888;
            background: rgba(136, 136, 136, .2);
            border-radius: 5px
        }

        nav.navbar {
            position: fixed;
            z-index: 2000 !important;
            right: 30px;
            width: 100%;
            padding: 0 0 0 250px;
            background-color: transparent
        }

        .sidebar-menu.collapsed + .main-content > nav.navbar {
            padding-left: 80px
        }

        .xe-widget.xe-conversations:hover, .xe-widget.xe-conversations:focus {
            border-color: #05a9d1;
            background: #fff !important;
            text-decoration: none
        }

        .xe-card.wechat a:after {
            content: '\f029';
            position: absolute;
            display: inline-block;
            font-family: FontAwesome;
            font-size: 18px;
            color: #6d747a;
            margin-left: 10px;
            bottom: 0;
            right: 5px
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
            float: none
        }

        .main-content .panel img {
            max-width: 100%;
            height: auto
        }

        footer.main-footer {
            border-top: 0;
            background-color: #fff
        }

        .collapsed .main-menu > li > a {
            position: relative;
            overflow: hidden
        }

        .collapsed .main-menu > li > a > i {
            display: block;
            width: 100%;
            height: 100%;
            padding: 13px;
            top: 0%;
            left: 0;
            position: absolute;
            transition: top .25s ease-in-out
        }

        .collapsed .main-menu > li > a > span:first-of-type {
            display: -webkit-box !important;
            overflow: hidden;
            position: relative;
            padding: 0;
            bottom: 36px;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            transition: .25s ease-in-out
        }

        .collapsed .main-menu > li > a:hover > i {
            top: 100%
        }

        .collapsed .main-menu > li > a:hover > span:first-of-type {
            bottom: 0px
        }

    </style>
</head>
<body class="page-body white">
<div class="cursor"></div>
<div class="page-container">

    <div class="sidebar-menu toggle-others fixed">
        <div class="sidebar-menu-inner">
            <header class="logo-env">
                <!-- logo -->
                <div class="logo">
                    <a href="https://tools.renserve.com">
                        <h1 class="logo-expanded">
                            <i class="iconfont icon-renshengjieduan"></i>
                            <span>莫名的工具箱</span>
                        </h1>
                    </a>
                    <a href="" class="logo-collapsed">
                        <i class="iconfont icon-renshengjieduan"></i>
                    </a>
                </div>
                <div class="mobile-menu-toggle visible-xs">
                    <a href="#" data-toggle="mobile-menu">
                        <i class="iconfont icon-ego-menu"></i>
                    </a>
                </div>
            </header>
            <ul id="main-menu" class="main-menu">
                <?php foreach ($data->menu as $value){ ?>
                    <li>
                        <a href="#<?php echo $value->title?>" class="smooth">
                            <i class="iconfont <?php echo $value->icon?>"></i>
                            <span class="title"><?php echo $value->title?></span>
                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
    <div class="main-content">

        <nav class="navbar user-info-navbar" role="navigation">
            <div class="navbar-content">
                <ul class="user-info-menu left-links list-inline list-unstyled">
                    <li class="hidden-xs">
                        <a href="#" data-toggle="sidebar">
                            <i class="iconfont icon-ego-menu"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="search"></div>
        <div class="sites-list" style="margin-bottom: 8.5rem;">
            <?php foreach ($data->menu as $value){ ?>
            <h4 class="text-gray" style="display: inline-block;" id="<?php echo $value->title;?>"><?php echo $value->title;?></h4>
            <div class="row">
                <?php foreach ($value->list as $item){ ?>
                <div class="xe-card col-sm-4 col-md-3 ">
                    <a href="<?php echo $item->href;?>" target="_blank" class="xe-widget xe-conversations box2 label-info"
                       data-toggle="tooltip" data-placement="bottom" title="<?php echo $item->title;?>">
                        <div class="xe-comment-entry">
                            <div class="xe-user-img">
                                <img class="img-circle lazy" src="<?php echo $item->icon;?>"
                                     width="40">
                            </div>
                            <div class="xe-comment">
                                <div class="xe-user-name overflowClip_1">
                                    <strong><?php echo $item->title;?></strong>
                                </div>
                                <p class="overflowClip_2"><?php echo $item->description;?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php }?>
            </div>
            <br>
            <?php }?>
        </div>
       <!-- <footer class="main-footer sticky footer-type-1">
            <div class="footer-inner">
                <div class="footer-text">
                    <p>本站内容采自互联网，如果侵犯了您的权益，请<a class="leave-message" href="https://blog.renserve.com/messages" target="_blank"> 留言 </a>联系本人予以删除！</p>
                    <p>Copyright © 2021-2023 莫名的小窝 </p>
                    &lt;!&ndash; <span id="busuanzi_container_site_pv">本站总访问量<span id="busuanzi_value_site_pv"></span>次</span>，总访客数<span id="busuanzi_value_site_uv"></span>人次 &ndash;&gt;
                </div>
            </div>
            <div class="go-up">
                <a href="#" rel="go-top">
                    <i class="iconfont icon-jiantoushang"></i>
                </a>
            </div>
        </footer>-->
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        /*$(".sites-list .row").each(function (){
            $(this).append(`<div class="xe-card col-sm-4 col-md-3 ">
                <a href="https://tools.renserve.com" target="_blank" class="xe-widget xe-conversations box2 label-info"
                   data-toggle="tooltip" data-placement="bottom" title="https://tools.renserve.com">
                    <div class="xe-comment-entry">
                        更新中。。。
                    </div>
                </a>
            </div>`)
        })*/
        $(document).on('click', '.has-sub', function () {
            var _this = $(this)
            if (!$(this).hasClass('expanded')) {
                setTimeout(function () {
                    _this.find('ul').attr("style", "")
                }, 300);
            } else {
                $('.has-sub ul').each(function (id, ele) {
                    var _that = $(this)
                    if (_this.find('ul')[0] != ele) {
                        setTimeout(function () {
                            _that.attr("style", "")
                        }, 300);
                    }
                })
            }
        })
        $('.sidebar-menu .visible-xs').click(function () {
            $('#main-menu').toggleClass('mobile-is-visible')
        })
        $('.user-info-menu .hidden-xs').click(function () {
            if ($('.sidebar-menu').hasClass('collapsed')) {
                $('.has-sub.expanded > ul').attr("style", "")
            } else {
                $('.has-sub.expanded > ul').show()
            }
            $('.sidebar-menu').toggleClass('collapsed')
        })
        $("#main-menu li ul li").click(function () {
            $(this).siblings('li').removeClass('active'); // 删除其他兄弟元素的样式
            $(this).addClass('active'); // 添加当前元素的样式
        });
        $("a.smooth").click(function (ev) {
            ev.preventDefault();
            if ($("#main-menu").hasClass('mobile-is-visible') != true)
                return;
            $('#main-menu').removeClass('mobile-is-visible')
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top - 80
            }, {
                duration: 500,
                easing: "swing"
            });
        });
        return false;
    });
    var href = "";
    var pos = 0;
    $("a.smooth").click(function (e) {
        e.preventDefault();
        if ($("#main-menu").hasClass('mobile-is-visible') === true)
            return;
        $("#main-menu li").each(function () {
            $(this).removeClass("active");
        });
        $(this).parent("li").addClass("active");
        href = $(this).attr("href");
        pos = $(href).position().top - 100;
        $("html,body").animate({
            scrollTop: pos
        }, 500);
    });
</script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js?ver=5.6.2'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/gsap@1.20.6/TweenMax.js?ver=5.6.2'></script>
</body>
</html>

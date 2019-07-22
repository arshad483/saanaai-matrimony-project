<style>
    /*! CSS Used from: https://www.lovevivah.com/assets/fontawesome/css/font-awesome.min.css ; media=screen */
    @media screen {
        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .fa-envelope-o:before {
            content: "\f003";
        }

        .fa-check:before {
            content: "\f00c";
        }

        .fa-plus:before {
            content: "\f067";
        }

        .fa-thumbs-o-up:before {
            content: "\f087";
        }

        .fa-phone:before {
            content: "\f095";
        }

        .fa-users:before {
            content: "\f0c0";
        }

        .fa-list-ul:before {
            content: "\f0ca";
        }

        .fa-mobile-phone:before {
            content: "\f10b";
        }

        .fa-dollar:before {
            content: "\f155";
        }

        .fa-commenting-o:before {
            content: "\f27b";
        }

        .fa-address-card-o:before {
            content: "\f2bc";
        }

        .fa-user-o:before {
            content: "\f2c0";
        }
    }

    /*! CSS Used from: https://www.lovevivah.com/assets/css/bootstrap/css/bootstrap.min.css?v=4 ; media=screen */
    @media screen {
        section {
            display: block;
        }

        a {
            background-color: transparent;
        }

        a:active,
        a:hover {
            outline: 0;
        }

        strong {
            font-weight: 700;
        }

        h1 {
            margin: .67em 0;
            font-size: 2em;
        }

        hr {
            height: 0;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
        }

        button,
        input,
        select {
            margin: 0;
            font: inherit;
            color: inherit;
        }

        button {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        button {
            -webkit-appearance: button;
            cursor: pointer;
        }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            padding: 0;
            border: 0;
        }

        input {
            line-height: normal;
        }

        @media print {

            *,
            :after,
            :before {
                color: #000 !important;
                text-shadow: none !important;
                background: 0 0 !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            a,
            a:visited {
                text-decoration: underline;
            }

            a[href]:after {
                content: " ("attr(href) ")";
            }

            a[href^="javascript:"]:after,
            a[href^="#"]:after {
                content: "";
            }

            h2,
            h3,
            p {
                orphans: 3;
                widows: 3;
            }

            h2,
            h3 {
                page-break-after: avoid;
            }
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        button,
        input,
        select {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        a {
            color: #337ab7;
            text-decoration: none;
        }

        a:focus,
        a:hover {
            color: #23527c;
            text-decoration: underline;
        }

        a:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #eee;
        }

        h1,
        h2,
        h3,
        h5 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit;
        }

        h1,
        h2,
        h3 {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        h5 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 36px;
        }

        h2 {
            font-size: 30px;
        }

        h3 {
            font-size: 24px;
        }

        h5 {
            font-size: 14px;
        }

        p {
            margin: 0 0 10px;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        ul {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .container-fluid {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-md-12,
        .col-md-3,
        .col-md-4,
        .col-md-8,
        .col-md-9,
        .col-sm-12,
        .col-sm-3,
        .col-sm-4,
        .col-sm-8,
        .col-xs-12,
        .col-xs-3,
        .col-xs-6 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-xs-12,
        .col-xs-3,
        .col-xs-6 {
            float: left;
        }

        .col-xs-12 {
            width: 100%;
        }

        .col-xs-6 {
            width: 50%;
        }

        .col-xs-3 {
            width: 25%;
        }

        @media (min-width:768px) {

            .col-sm-12,
            .col-sm-3,
            .col-sm-4,
            .col-sm-8 {
                float: left;
            }

            .col-sm-12 {
                width: 100%;
            }

            .col-sm-8 {
                width: 66.66666667%;
            }

            .col-sm-4 {
                width: 33.33333333%;
            }

            .col-sm-3 {
                width: 25%;
            }
        }

        @media (min-width:992px) {

            .col-md-12,
            .col-md-3,
            .col-md-4,
            .col-md-8,
            .col-md-9 {
                float: left;
            }

            .col-md-12 {
                width: 100%;
            }

            .col-md-9 {
                width: 75%;
            }

            .col-md-8 {
                width: 66.66666667%;
            }

            .col-md-4 {
                width: 33.33333333%;
            }

            .col-md-3 {
                width: 25%;
            }

            .col-md-offset-2 {
                margin-left: 16.66666667%;
            }
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .btn:active:focus,
        .btn:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        .btn:focus,
        .btn:hover {
            color: #333;
            text-decoration: none;
        }

        .btn:active {
            background-image: none;
            outline: 0;
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .fade {
            opacity: 0;
            -webkit-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear;
        }

        .fade.in {
            opacity: 1;
        }

        .nav {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav>li {
            position: relative;
            display: block;
        }

        .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 15px;
        }

        .nav>li>a:focus,
        .nav>li>a:hover {
            text-decoration: none;
            background-color: #eee;
        }

        .nav-pills>li {
            float: left;
        }

        .nav-pills>li>a {
            border-radius: 4px;
        }

        .nav-pills>li+li {
            margin-left: 2px;
        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:focus,
        .nav-pills>li.active>a:hover {
            color: #fff;
            background-color: #337ab7;
        }

        .tab-content>.tab-pane {
            display: none;
        }

        .tab-content>.active {
            display: block;
        }

        .container-fluid:after,
        .container-fluid:before,
        .nav:after,
        .nav:before,
        .row:after,
        .row:before {
            display: table;
            content: " ";
        }

        .container-fluid:after,
        .nav:after,
        .row:after {
            clear: both;
        }
    }

    /*! CSS Used from: https://www.lovevivah.com/assets/css/override.css?v=47 ; media=screen */
    @media screen {
        *:focus {
            outline: none !important;
        }

        input:focus {
            outline: none !important;
        }

        h1,
        h2,
        h3,
        h5 {
            font-weight: 300;
        }

        input[type=text]:focus {
            border-color: #e11665;
            box-shadow: 0 0px 0px rgba(0, 0, 0, .075) inset, 0 0 0px rgba(225, 186, 56, .6);
            outline: 0;
        }

        .btn {
            border-radius: 0;
            border: 1px;
            font-family: 'Roboto', sans-serif;
            font-weight: normal;
        }

        .text-center {
            text-align: center;
        }

        ul li {
            list-style: none;
        }

        .row {
            margin-left: 0;
        }

        .text-left {
            text-align: left;
        }

        .row {
            margin-right: 0;
        }

        .btn:active:focus,
        .btn:focus {
            outline: 0;
            border: none;
            box-shadow: none;
        }

        .main {
            background-color: #eee;
            position: relative;
        }

        .main form {
            padding: 0;
        }

        @media (min-width:320px) and (max-width:970px) {
            .nav>li>a {
                display: block;
            }

            .nav>li>a {
                position: relative;
                padding: 7px 20px;
            }

            .main {
                margin-top: 0px;
            }
        }

        @media screen and (min-width: 320px) and (max-width: 539px) {
            :focus {
                outline: 0 !important;
            }
        }
    }

    /*! CSS Used from: https://www.lovevivah.com/assets/css/custom.css?v=104 ; media=screen */
    @media screen {
        .page-bg {
            background: #e2e2e2;
        }

        .no-padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .btn-theme {
            color: #fff;
            background-color: #cd3162;
            border-color: #cd3162;
        }

        .btn-theme:focus {
            color: #fff;
            background-color: #b41e4d;
            border-color: #b41e4d;
        }

        .btn-theme:hover {
            color: #fff;
            background-color: #b41e4d;
            border-color: #b41e4d;
        }

        .btn-theme:active {
            color: #fff;
            background-color: #b41e4d;
            border-color: #b41e4d;
        }

        .ripplelink {
            text-align: center;
            color: #fff;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            -o-transition: all 0.2s ease;
            transition: all 0.2s ease;
            z-index: 0;
        }

        .ripplelink:hover {
            z-index: 1000;
        }

        .col-md-12,
        .col-md-3,
        .col-md-4,
        .col-md-8,
        .col-md-9,
        .col-sm-12,
        .col-sm-3,
        .col-sm-4,
        .col-sm-8,
        .col-xs-12,
        .col-xs-3,
        .col-xs-6 {
            padding-right: 5px;
            padding-left: 5px;
        }

        .row {
            margin-right: 0px;
            margin-left: 0px;
        }

        * {
            box-sizing: border-box;
        }

        *:focus {
            outline: 0 !important;
        }

        .req-call_wrap {
            position: relative;
            padding: 20px;
            margin: 10px;
            margin-bottom: 50px;
            border-radius: 5px;
            background-color: #dbbf70;
            background-image: linear-gradient(141deg, #dbbf70 0%, #fdefa4 51%, #dbbf70 75%);
            text-align: center;
        }

        .req-call_wrap h2 {
            font-size: 22px;
            font-weight: 600;
            margin: 0px;
            margin-bottom: 5px;
        }

        .req-call_wrap .callback_form {
            background: #fff;
            border-radius: 5px;
            padding: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.18);
            display: inline-block;
            width: 100%;
        }

        .req-call_wrap .callback_form .inputelite {
            width: 33.33%;
            float: left;
            padding: 3px;
        }

        .req-call_wrap .callback_form .inputelite.width50 {
            width: 50%;
            float: left;
            padding: 3px;
        }

        .req-call_wrap .callback_form .inputelite input {
            width: 100%;
            border: 0px;
            padding: 12px;
            border: #d6d6d6 solid 1px;
            border-radius: 3px;
        }

        .req-call_wrap .callback_form .inputelite select {
            width: 100%;
            border: 0px;
            padding: 11px;
            border: #d6d6d6 solid 1px;
            border-radius: 3px;
        }

        .req-call_wrap .callback_form .inputelite .btn-reqcall {
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            font-family: 'Open Sans', sans-serif;
            padding: 12px 10px;
            border-radius: 5px;
            background: #316ad3;
            background: -moz-linear-gradient(left, #316ad3 0%, #6f72eb 100%);
            background: -webkit-linear-gradient(left, #316ad3 0%, #6f72eb 100%);
            background: linear-gradient(to right, #316ad3 0%, #6f72eb 100%);
            transition: all 0.3s;
        }

        .personalized {
            margin: 0px;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        @media (max-width:767px) {
            .req-call_wrap .callback_form .inputelite {
                width: 100%;
            }

            .req-call_wrap .callback_form .inputelite.width50 {
                width: 100%;
                float: left;
                padding: 3px;
            }

            .req-call_wrap {
                margin: 3px;
                margin-bottom: 30px;
            }

            .req-call_wrap h2 {
                font-size: 16px;
            }
        }

        .btn {
            border-radius: 0px;
        }

        .red-color {
            color: #F00;
        }

        .theme-bg-panel {
            padding: 15px;
            min-height: 190px;
            padding-bottom: 100px;
            background: #cd3061;
            background: -webkit-linear-gradient(left, #d54854, #cd3061);
            background: -o-linear-gradient(right, #d54854, #cd3061);
            background: -moz-linear-gradient(right, #d54854, #cd3061);
            background: -ms-linear-gradient(right, #d54854, #cd3061);
            background: linear-gradient(to right, #d54854, #cd3061);
        }

        .theme-bg-panel h1 {
            font-family: 'open sans', sans-serif;
            text-transform: uppercase;
            font-weight: 700;
            margin: 0px;
            text-align: center;
            color: #fff;
            font-size: 40px;
        }

        .theme-bg-panel .plan-subheading {
            font-family: 'open sans', sans-serif;
            font-weight: 300;
            margin: 0px;
            text-align: center;
            color: #fff;
        }

        .LV-package-box {
            background: #ffffff;
            box-shadow: 0px 0px 33px -12px #333;
            -moz-box-shadow: 0px 0px 33px -12px #333;
            -webkit-box-shadow: 0px 0px 33px -12px #333;
            z-index: 10;
            margin-bottom: 20px;
            margin-top: -100px;
        }

        .LV-package-box {
            position: relative;
        }

        .padd-60 {
            padding: 30px 60px;
        }

        .pckg-option {
            text-align: center;
        }

        .pckg-option>li {
            float: none;
            display: inline-block;
        }

        .pckg-option>li+li {
            margin: -4px;
        }

        .pckg-option>li>a {
            background: #ccc;
            min-width: 115px;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            padding: 10px 20px;
            outline: 0;
            -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .05);
            -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .05);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .05);
            border: #a4a4a4 solid 1px;
        }

        .pckg-option>li.active>a {
            color: #fff;
            background-color: #cd3162;
            border: #aa2149 solid 1px;
            outline: 0;
            -webkit-box-shadow: inset 0 2px 4px rgba(255, 255, 255, 0.40), 0 1px 2px rgba(255, 255, 255, 0.40);
            -moz-box-shadow: inset 0 2px 4px rgba(255, 255, 255, 0.40), 0 1px 2px rgba(255, 255, 255, 0.40);
            box-shadow: inset 0 2px 4px rgba(255, 255, 255, 0.40), 0 1px 2px rgba(255, 255, 255, 0.40);
        }

        .pckg-option>li.active>a,
        .pckg-option>li.active>a:focus,
        .pckg-option>li.active>a:hover {
            color: #fff;
            background-color: #cd3162;
        }

        .pckg-option>li>a.bor-r-r {
            -webkit-border-top-right-radius: 50px;
            -webkit-border-bottom-right-radius: 50px;
            -moz-border-radius-topright: 50px;
            -moz-border-radius-bottomright: 50px;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .pckg-option>li>a.bor-r-l {
            -webkit-border-top-left-radius: 50px;
            -webkit-border-bottom-left-radius: 50px;
            -moz-border-radius-topleft: 50px;
            -moz-border-radius-bottomleft: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
        }

        .pckg-option>li.active>a:after {
            content: "\f0d7";
            position: absolute;
            top: 23px;
            color: #ccc;
            font-size: 28px;
            text-align: center;
            left: 47%;
            color: #cd3162;
            font-family: 'FontAwesome';
        }

        .plans-box .plan-tagline {
            font-size: 13px;
            color: #666;
            margin-top: 15px;
            font-weight: normal;
            
        }

        .packages-section {
            border: #e0e0e0 solid 1px;
            padding: 0px;
            min-height: 97px;
            margin-top: 10px;
            border-radius: 3px;
        }

        .packages-section .LV-Basic {
            background: #becd34;
            min-height: 97px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .packages-section .LV-Basic:after {
            content: "\f0da";
            position: absolute;
            top: 28px;
            color: #ccc;
            font-size: 28px;
            text-align: center;
            right: -8px;
            color: #becd34;
            font-family: 'FontAwesome';
            z-index: 1000;
        }

        .btn-LV-Basic {
            background: #becd34;
            padding: 6px 25px;
            margin-top: 5px;
            font-size: 13px;
        }

        .btn-LV-Basic:hover,
        .btn-LV-Basic:focus,
        .btn-LV-Basic:active {
            background: #aaba1c;
        }

        .packages-section .LV-Super {
            background: #ff9900;
            min-height: 97px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .packages-section .LV-Super:after {
            content: "\f0da";
            position: absolute;
            top: 28px;
            color: #ccc;
            font-size: 28px;
            text-align: center;
            right: -8px;
            color: #ff9900;
            font-family: 'FontAwesome';
            z-index: 1000;
        }

        .btn-LV-Super {
            background: #ff9900;
            padding: 6px 25px;
            margin-top: 5px;
            font-size: 13px;
        }

        .btn-LV-Super:hover,
        .btn-LV-Super:focus,
        .btn-LV-Super:active {
            background: #e28904;
        }

        .packages-section .LV-Advance {
            background: #d13b5b;
            min-height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .packages-section .LV-Advance:after {
            content: "\f0da";
            position: absolute;
            top: 28px;
            color: #ccc;
            font-size: 28px;
            text-align: center;
            right: -8px;
            color: #d13b5b;
            font-family: 'FontAwesome';
            z-index: 1000;
        }

        .btn-LV-Advance {
            background: #d13b5b;
            padding: 6px 25px;
            margin-top: 5px;
            font-size: 13px;
        }

        .btn-LV-Advance:hover,
        .btn-LV-Advance:focus,
        .btn-LV-Advance:active {
            background: #af2643;
        }

        .packages-section .LV-Exclusive {
            background: #008cdd;
            min-height: 97px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .packages-section .LV-Exclusive:after {
            content: "\f0da";
            position: absolute;
            top: 28px;
            color: #ccc;
            font-size: 28px;
            text-align: center;
            right: -8px;
            color: #008cdd;
            font-family: 'FontAwesome';
            z-index: 1000;
        }

        .btn-LV-Exclusive {
            background: #008cdd;
            padding: 6px 25px;
            margin-top: 5px;
            font-size: 13px;
        }

        .btn-LV-Exclusive:hover,
        .btn-LV-Exclusive:focus,
        .btn-LV-Exclusive:active {
            background: #046eab;
        }

        .packages-section .LV-Supreme {
            background: #8358af;
            min-height: 97px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .packages-section .LV-Supreme:after {
            content: "\f0da";
            position: absolute;
            top: 28px;
            color: #ccc;
            font-size: 28px;
            text-align: center;
            right: -8px;
            color: #8358af;
            font-family: 'FontAwesome';
            z-index: 1000;
        }

        .btn-LV-Supreme {
            background: #8358af;
            padding: 6px 25px;
            margin-top: 5px;
            font-size: 13px;
        }

        .btn-LV-Supreme:hover,
        .btn-LV-Supreme:focus,
        .btn-LV-Supreme:active {
            background: #8128db;
        }

        .packages-section .LV-Basic h2,
        .LV-Super h2,
        .LV-Advance h2,
        .LV-Exclusive h2,
        .LV-Supreme h2 {
            color: #FFF;
            font-size: 22px;
            font-weight: 500;
            text-transform: uppercase;
            padding: 0px;
            margin: 0px;
        }

        .packages-section .get-contacts {
            background: #e3e3e3;
            color: #494948;
            padding: 10px;
            display: flex;
            height: 100%;
            min-height: 97px;
        }

        .packages-section .get-contacts .get-contacts-detail {
            width: 100%;
            padding: 7px;
        }

        .packages-section .get-contacts p {
            padding: 0px;
            margin: 0px;
            font-size: 14px;
            color: #494948;
        }

        .packages-section .get-contacts h3 {
            padding: 0px;
            margin: 0px;
            font-size: 20px;
            color: #cd3162;
            font-weight: bold;
        }

        .packages-section .validity-offer-section {
            background: #f1f1f1;
            color: #494948;
            padding: 10px;
            height: 100%;
            min-height: 97px;
        }

        .packages-section .validity-offer-section .get-validity-detail {
            width: 100%;
            padding: 5px;
        }

        .packages-section .validity-offer-section .get-validity-detail p {
            padding: 0px;
            margin: 0px;
            font-size: 11px;
            color: #494948;
            text-transform: uppercase;
        }

        .packages-section .validity-offer-section .get-validity-detail h3 {
            padding: 0px;
            margin: 0px;
            font-size: 20px;
            color: #cd3162;
            font-weight: bold;
        }

        .final-price-section {
            background: #fff;
            color: #656565;
        }

        .final-price-section .price-detail {
            padding: 10px;
            width: 100%;
        }

        .final-price-section .price-detail P {
            padding: 0px;
            margin: 0px;
            font-size: 11px;
            color: #989898;
            text-transform: uppercase;
        }

        .final-price-section .price-detail h3 {
            padding: 0px;
            margin: 0px;
            font-size: 20px;
            color: #494948;
            font-weight: bold;
        }

        .border-r-50 {
            border-radius: 50px;
        }

        .plan-features h3 {
            font-size: 18px;
            font-weight: 500;
            color: #454444;
        }

        .plan-features .feature-steps {
            text-align: center;
            display: inline-block;
            padding: 0px;
            width: 78px;
            height: 78px;
            border: 1px solid #cd3162;
            border-radius: 100%;
            position: relative;
            transition: all 0.6s;
        }

        .plan-features h5 {
            font-weight: 500;
            font-size: 13px;
        }

        .plan-features .feature-steps:hover {
            background: #cd3162;
            border: 1px solid #ae1746;
        }

        .plan-features .feature-steps:hover i {
            color: #fff;
            transform: rotateY(180deg);
        }

        .plan-features .feature-steps i {
            font-size: 30px;
            line-height: 72px;
            color: #d13b5b;
            transition: all 0.8s;
        }

        .plan-register-section {
            background: #fcba37;
            padding: 10px 60px;
            display: inline-block;
            width: 100%;
        }

        .plan-register-section h2 {
            font-size: 24px;
            color: #fff;
            padding: 0px;
            margin: 0px;
            display: inline;
            line-height: 40px;
        }

        .register-now-btn {
            color: #fff;
            background-color: #0076c8;
            border-color: #0268ae;
            padding: 10px 30px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            transition: all 0.3s;
        }

        .btn-Pright {
            float: right;
        }

        .register-now-btn:hover,
        .register-now-btn:focus,
        .register-now-btn:active {
            color: #fff;
            background-color: #0268ae;
        }

        .all-free-features {
            background: #efefef;
        }

        .all-free-features h3 {
            font-size: 18px;
            font-weight: 500;
            color: #454444;
            margin: 0px;
            margin-bottom: 10px;
            padding: 0px;
        }

        .all-free-features .free-feature-list {
            padding: 0px;
            margin: 0px;
        }

        .all-free-features .free-feature-list li {
            padding: 0px 0px 0px 0px;
            margin: 0px;
            line-height: 26px;
            font-size: 13px;
            font-weight: normal;
        }

        .all-free-features .free-feature-list li i {
            color: #cd3162;
        }

        .handpicked {
            font-size: 18px;
            font-weight: 500;
            color: #454444;
        }

        .feature-mobs {
            display: none;
        }

        .feature-mobh {
            display: block;
        }

        .score-offer {
            text-align: right;
            margin-top: -1px;
            margin-bottom: 0px;
            padding: 0px !important;
            display: inline-block;
            width: 100%;
        }

        .score-offer .offer-click-btn {
            font-size: 11px;
            font-weight: 500;
            color: #fff;
            text-align: center;
            display: block;
            background: #cd3162;
            padding: 3px 6px;
            -webkit-border-bottom-right-radius: 5px;
            -webkit-border-bottom-left-radius: 5px;
            -moz-border-radius-bottomright: 5px;
            -moz-border-radius-bottomleft: 5px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .score-offer .offer-click-btn:hover,
        .score-offer .offer-click-btn:active,
        .score-offer .offer-click-btn:focus {
            text-decoration: none;
        }

        .score-offer-detail {
            background: #FC0;
            font-size: 11px;
            font-weight: 500;
            color: #333;
            padding: 2px 10px;
            text-align: left;
            margin: 0px;
            -webkit-border-bottom-right-radius: 5px;
            -webkit-border-bottom-left-radius: 5px;
            -moz-border-radius-bottomright: 5px;
            -moz-border-radius-bottomleft: 5px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .plan-condition {
            padding: 5px;
            background: rgba(22, 22, 22, 0.19);
            color: #333;
            font-size: 12px;
            font-weight: normal;
            text-align: right;
        }

        @media (max-width:767px) {
            .score-offer a {
                margin-top: -1PX;
            }

            .theme-bg-panel h1 {
                font-size: 25px;
            }

            .padd-60 {
                padding: 15px 10px;
            }

            .plan-register-section {
                padding: 10px;
                text-align: center;
            }

            .btn-Pright {
                float: none;
            }

            .packages-section .LV-Basic:after {
                top: 17px;
            }

            .packages-section .LV-Super:after {
                top: 17px;
            }

            .packages-section .LV-Advance:after {
                top: 17px;
            }

            .packages-section .LV-Supreme:after {
                top: 17px;
            }

            .packages-section .LV-Exclusive:after {
                top: 17px;
            }

            .mobile-padding-lr0 {
                padding-left: 0px;
                padding-right: 0px;
            }

            .plan-features h5 {
                font-size: 10px;
                font-weight: 500;
            }

            .packages-section .LV-Basic h2,
            .LV-Super h2,
            .LV-Advance h2,
            .LV-Exclusive h2,
            .LV-Supreme h2 {
                color: #FFF;
                font-size: 14px;
                font-weight: 500;
                text-transform: uppercase;
                padding: 0px;
                margin: 0px;
            }

            .packages-section .LV-Basic {
                min-height: 68px;
            }

            .packages-section .LV-Super {
                min-height: 68px;
            }

            .packages-section .LV-Advance {
                min-height: 100%;
            }

            .packages-section .LV-Exclusive {
                min-height: 68px;
            }

            .packages-section .LV-Supreme {
                min-height: 68px;
            }

            .packages-section .get-contacts h3 {
                font-size: 15px;
            }

            .packages-section .validity-offer-section .get-validity-detail h3 {
                font-size: 15px;
            }

            .packages-section .get-contacts .get-contacts-detail {
                padding: 7px 2px;
            }

            .packages-section .get-contacts {
                background: #e3e3e3;
                color: #494948;
                padding: 2px;
                display: flex;
                height: 100%;
                min-height: 68px;
            }

            .packages-section .validity-offer-section .get-validity-detail p {
                font-size: 9px;
            }

            .packages-section .validity-offer-section .get-validity-detail {
                padding: 2px;
            }

            .packages-section .validity-offer-section {
                background: #f1f1f1;
                color: #494948;
                padding: 2px;
                height: 100%;
                min-height: 68px;
            }

            .final-price-section .price-detail {
                padding: 3px;
                width: 100%;
            }

            .final-price-section .price-detail P {
                padding: 0px;
                margin: 0px;
                font-size: 9px;
                color: #989898;
                text-transform: uppercase;
            }

            .final-price-section .price-detail h3 {
                padding: 0px;
                margin: 0px;
                font-size: 14px;
                color: #494948;
                font-weight: bold;
            }

            .btn-LV-Basic {
                background: #becd34;
                padding: 6px 10px;
                margin-top: 5px;
                font-size: 9px;
                font-weight: 600;
            }

            .btn-LV-Super {
                background: #ff9900;
                padding: 6px 10px;
                margin-top: 5px;
                font-size: 9px;
                font-weight: 600;
            }

            .btn-LV-Advance {
                background: #d13b5b;
                padding: 6px 10px;
                margin-top: 5px;
                font-size: 9px;
                font-weight: 600;
            }

            .btn-LV-Exclusive {
                background: #008cdd;
                padding: 6px 10px;
                margin-top: 5px;
                font-size: 9px;
                font-weight: 600;
            }

            .btn-LV-Supreme {
                background: #8358af;
                padding: 6px 10px;
                margin-top: 5px;
                font-size: 9px;
            }

            .packages-section {
                border: #e0e0e0 solid 1px;
                padding: 0px;
                min-height: 68px;
                margin-top: 10px;
                border-radius: 3px;
            }

            .packages-section .get-contacts p {
                padding: 0px;
                margin: 0px;
                font-size: 10px;
                color: #494948;
            }

            .theme-bg-panel {
                padding: 15px;
                min-height: 150px;
            }

            .theme-bg-panel .plan-subheading {
                display: none;
            }

            .plans-box .plan-tagline {
                font-size: 12px;
                color: #666;
                margin-top: 8px;
                
            }

            .pckg-option>li>a {
                background: #ccc;
                min-width: 100px;
                font-size: 12px;
                padding: 7px 10px;
            }

            .pckg-option {
                margin-top: 15px;
            }

            .pckg-option>li.active>a:after {
                top: 14px;
            }

            .feature-mobh {
                display: none;
            }

            .feature-mobs {
                display: block;
            }
        }

        @media screen and (max-width: 768px) and (min-width: 100px) {
            .score-offer-detail {
                border-radius: 0px;
            }

            .container-full {
                padding-right: 0px;
                padding-left: 0px;
                margin-right: auto;
                margin-left: auto;
            }
        }
    }

    /*! CSS Used from: https://www.lovevivah.com/assets/css/reg-style.css?v=100 ; media=screen */
    @media screen {
        *:focus {
            outline: none !important;
        }

        button:focus,
        a:focus,
        a:active,
        button::-moz-focus-inner,
        select::-moz-focus-inner {
            outline: none !important;
        }

        select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #000;
        }

        .col-md-12,
        .col-md-3,
        .col-md-4,
        .col-md-8,
        .col-md-9,
        .col-sm-12,
        .col-sm-3,
        .col-sm-4,
        .col-sm-8,
        .col-xs-12,
        .col-xs-3,
        .col-xs-6 {
            padding-left: 5px;
            padding-right: 5px;
        }

        .ripplelink {
            text-align: center;
            color: #fff;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            -o-transition: all 0.2s ease;
            transition: all 0.2s ease;
            z-index: 0;
        }

        .ripplelink:hover {
            z-index: 1000;
        }

        @media (max-width:767px) {
            .mobile-padding-lr0 {
                padding: 0px;
            }
        }
    }

    /*! CSS Used from: Embedded */
    .container-fluid {
        position: relative;
    }

    /*! CSS Used from: Embedded */
    .plan-updating-aadhar {
        padding: 10px 15px;
        font-size: 12px;
        font-weight: normal;
        text-align: center;
        width: 100%;
        background: #f7f7f7;
    }

    .form-alert {
        display: none;
    }

    /*! CSS Used fontfaces */
    @font-face {
        font-family: 'FontAwesome';
        src: url('https://www.lovevivah.com/assets/fontawesome/fonts/fontawesome-webfont.eot?v=4.7.0');
        src: url('https://www.lovevivah.com/assets/fontawesome/fonts/fontawesome-webfont.eot#iefix&v=4.7.0') format('embedded-opentype'), url('https://www.lovevivah.com/assets/fontawesome/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('https://www.lovevivah.com/assets/fontawesome/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('https://www.lovevivah.com/assets/fontawesome/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('https://www.lovevivah.com/assets/fontawesome/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v19/KFOkCnqEu92Fr1Mu51xFIzIFKw.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v19/KFOkCnqEu92Fr1Mu51xMIzIFKw.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v19/KFOkCnqEu92Fr1Mu51xEIzIFKw.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v19/KFOkCnqEu92Fr1Mu51xLIzIFKw.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v19/KFOkCnqEu92Fr1Mu51xHIzIFKw.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v19/KFOkCnqEu92Fr1Mu51xGIzIFKw.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v19/KFOkCnqEu92Fr1Mu51xIIzI.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmSU5fCRc4EsA.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmSU5fABc4EsA.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmSU5fCBc4EsA.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmSU5fBxc4EsA.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmSU5fCxc4EsA.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v19/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v19/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWyV9hmIqOjjg.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWyV9hvIqOjjg.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWyV9hnIqOjjg.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWyV9hoIqOjjg.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWyV9hkIqOjjg.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWyV9hlIqOjjg.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 300;
        src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWyV9hrIqM.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v16/mem6YaGs126MiZpBA-UFUK0Udc1UAw.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v16/mem6YaGs126MiZpBA-UFUK0ddc1UAw.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v16/mem6YaGs126MiZpBA-UFUK0Vdc1UAw.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v16/mem6YaGs126MiZpBA-UFUK0adc1UAw.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v16/mem6YaGs126MiZpBA-UFUK0Wdc1UAw.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v16/mem6YaGs126MiZpBA-UFUK0Xdc1UAw.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 400;
        src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v16/mem6YaGs126MiZpBA-UFUK0Zdc0.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKXGUdhmIqOjjg.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKXGUdhvIqOjjg.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKXGUdhnIqOjjg.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKXGUdhoIqOjjg.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKXGUdhkIqOjjg.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKXGUdhlIqOjjg.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 600;
        src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKXGUdhrIqM.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWiUNhmIqOjjg.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWiUNhvIqOjjg.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWiUNhnIqOjjg.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWiUNhoIqOjjg.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWiUNhkIqOjjg.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWiUNhlIqOjjg.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 700;
        src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKWiUNhrIqM.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        src: local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKW-U9hmIqOjjg.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        src: local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKW-U9hvIqOjjg.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        src: local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKW-U9hnIqOjjg.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        src: local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKW-U9hoIqOjjg.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        src: local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKW-U9hkIqOjjg.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        src: local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKW-U9hlIqOjjg.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: italic;
        font-weight: 800;
        src: local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v16/memnYaGs126MiZpBA-UFUKW-U9hrIqM.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN_r8OX-hpOqc.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN_r8OVuhpOqc.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN_r8OXuhpOqc.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN_r8OUehpOqc.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN_r8OXehpOqc.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN_r8OXOhpOqc.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN_r8OUuhp.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFW50bbck.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v16/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UNirkOX-hpOqc.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UNirkOVuhpOqc.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UNirkOXuhpOqc.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UNirkOUehpOqc.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UNirkOXehpOqc.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UNirkOXOhpOqc.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN7rgOX-hpOqc.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN7rgOVuhpOqc.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN7rgOXuhpOqc.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN7rgOUehpOqc.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN7rgOXehpOqc.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN7rgOXOhpOqc.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN8rsOX-hpOqc.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN8rsOVuhpOqc.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN8rsOXuhpOqc.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN8rsOUehpOqc.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN8rsOXehpOqc.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN8rsOXOhpOqc.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 800;
        src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v16/mem5YaGs126MiZpBA-UN8rsOUuhp.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
</style>
<section class="page-title page-title--style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h2 class="heading heading-3 strong-400 mb-0"><?php echo translate('premium_plans')?></h2>
            </div>
        </div>
    </div>
</section>
<?php 
    $background_image = $this->db->get_where('frontend_settings', array('type' => 'premium_plans_image'))->row()->value;
    $background_image_data = json_decode($background_image, true);

?>
<div class="main page-bg">
    <section class="container-full theme-bg-panel col-xs-12">
        <div class="row">
            <h1>Membership Plans</h1>
            
        </div>
    </section>
    <div class="container-fluid mobile-padding-lr0">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
            <div class="LV-package-box">
                <div class="padd-60">
                    <div class="row text-center">
                        

                        <div class="tab-content plans-box" style="width:100%;">
                            <div id="Online" class="tab-pane fade gallery in active">
                                <p class="plan-tagline"> All online services are self-assisted. Search, Shortlist and
                                    Send Interest. </p>
                                    <?php foreach ($all_plans as $value): ?>
                               

                                    <div class="row ">
                                        <div class="col-md-12 col-sm-12 col-xs-12 packages-section ">
                                            <div class="col-md-3 col-sm-3 col-xs-3 LV-Advance">
                                                <h2><?=$value->name?>
                                                </h2>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3 get-contacts">
                                                <div class="get-contacts-detail">
                                                    <p><?=translate('express_interests:')?></p>
                                                    <h3><?=$value->express_interest?> <?=translate('times')?></h3>
                                                    <p><?=translate('direct_messages:')?></p>
                                                    <h3><?=$value->direct_messages?> <?=translate('times')?></h3>
                                                    <p><?=translate('photo_gallery:')?></p>
                                                    <h3><?=$value->photo_gallery?> <?=translate('images')?></h3>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3 validity-offer-section">
                                                <div class="get-validity-detail">
                                                    <p>Validity</p>
                                                    <h3>1</h3>
                                                    <p>Month</p>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3 final-price-section">
                                                <div class="price-detail">
                                                    <p>Final Price</p>
                                                    <h3><i class="fa fa-dollar"></i> <?=currency($value->amount)?></h3>
                                                    <a href=<?=$purchase_link = base_url()."home/plans/subscribe/".$value->plan_id; ?> >
                                                        <button 
                                                            class="btn btn-theme border-r-50 btn-LV-Advance ripplelink">BUY
                                                            NOW</button>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <?php endforeach ?>
                                <div class="row row-padded plan-features row-bordered p-t text-center">
                                    <div class="row">
                                            <h3>Features of Paid Membership</h3>
                                    </div>
                                    <div class="row mt-3">
                                            <div class="col-sm-3 col-xs-6">
                                                    <span class="feature-steps"><i class="fa fa-address-card-o"></i></span>
                                                    <h5>View Contact Details</h5>
            
                                                </div>
            
                                                <div class="col-sm-3 col-xs-6">
                                                    <span class="feature-steps"><i class="fa fa-mobile-phone"></i></span>
                                                    <h5>View Mobile Number</h5>
            
                                                </div>
            
                                                <div class="col-sm-3 col-xs-6">
                                                    <span class="feature-steps"><i class="fa fa-commenting-o"></i></span>
                                                    <h5>Initiate Chat</h5>
            
                                                </div>
            
                                                <div class="col-sm-3 col-xs-6">
                                                    <span class="feature-steps"><i class="fa fa-envelope-o"></i></span>
                                                    <h5>Send Messages </h5>
                                                </div>
                                    </div>
                                </div>




                            </div>
                            <div id="Personalized" class="tab-pane fade gallery ">
                                <h3 class="handpicked">Handpicked Profiles</h3>
                                <p class="plan-tagline">You will get expert assistance from LV team and all
                                    communication <br>
                                    will be managed by assigned expert on your behalf.</p>

                                <form name="membershipForm" id="membershipForm-5"
                                    action="https://www.lovevivah.com/membership/check_plan_status" method="POST"
                                    class="ng-pristine ng-valid">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 packages-section">
                                            <div class="col-md-3 col-sm-3 col-xs-3 LV-Exclusive">
                                                <h2>LV-Exclusive </h2>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3 get-contacts">
                                                <div class="get-contacts-detail">
                                                    <p>View</p>
                                                    <h3>4</h3>
                                                    <p>Profile / Week</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3 validity-offer-section">
                                                <div class="get-validity-detail">
                                                    <p>Validity</p>
                                                    <h3>3</h3>
                                                    <p>Months</p>
                                                    <p><i class="fa fa-dollar"></i> 123/PM</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3 final-price-section">
                                                <div class="price-detail">
                                                    <p>Final Price</p>
                                                    <h3><i class="fa fa-dollar"></i> 369</h3>
                                                    <a href="#"
                                                        onclick="return show_popup('https://www.lovevivah.com/membership/check_plan_status/LV-Exclusive')">
                                                        <button type="submit"
                                                            class="btn btn-theme border-r-50 btn-LV-Exclusive ripplelink">BUY
                                                            NOW</button>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form name="membershipForm" id="membershipForm-6"
                                    action="https://www.lovevivah.com/membership/check_plan_status" method="POST"
                                    class="ng-pristine ng-valid">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 packages-section">
                                            <div class="col-md-3 col-sm-3 col-xs-3 LV-Supreme">
                                                <h2>LV-Supreme </h2>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3 get-contacts">
                                                <div class="get-contacts-detail">
                                                    <p>View</p>
                                                    <h3>4</h3>
                                                    <p>Profile / Week</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3 validity-offer-section">
                                                <div class="get-validity-detail">
                                                    <p>Validity</p>
                                                    <h3>6</h3>
                                                    <p>Months</p>
                                                    <p><i class="fa fa-dollar"></i> 106/PM</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3 final-price-section">
                                                <div class="price-detail">
                                                    <p>Final Price</p>
                                                    <h3><i class="fa fa-dollar"></i> 639</h3>
                                                    <a href="#"
                                                        onclick="return show_popup('https://www.lovevivah.com/membership/check_plan_status/LV-Supreme')">
                                                        <button type="submit"
                                                            class="btn btn-theme border-r-50 btn-LV-Supreme ripplelink">BUY
                                                            NOW</button>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                               

                                <div class="row row-padded plan-features row-bordered p-t text-center">
                                    <hr>
                                    <div class="col-sm-3 col-xs-6">
                                        <span class="feature-steps"><i class="fa fa-address-card-o"></i></span>
                                        <h5>View Contact Details</h5>

                                    </div>

                                    <div class="col-sm-3 col-xs-6">
                                        <span class="feature-steps"><i class="fa fa-mobile-phone"></i></span>
                                        <h5>View Mobile Number</h5>

                                    </div>

                                    <div class="col-sm-3 col-xs-6">
                                        <span class="feature-steps"><i class="fa fa-commenting-o"></i></span>
                                        <h5>Initiate Chat</h5>

                                    </div>

                                    <div class="col-sm-3 col-xs-6">
                                        <span class="feature-steps"><i class="fa fa-envelope-o"></i></span>
                                        <h5>Send Messages </h5>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- row end -->
                </div>
                <div class="plan-updating-aadhar">Providing a valid government issued Id proof is mandatory for all paid
                    users to access the features.</div>
                <div class="plan-register-section">
                    <h2>Register Now &amp; Enjoy <strong> Unlimited Benefits </strong> </h2>
                    <a href=<?=$purchase_link = base_url()."home/registration/"; ?> > <button type="submit"
                            class="btn register-now-btn btn-Pright">Register Free</button></a>
                </div>


                <div class="row all-free-features padd-60">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h3>FREE Features for all</h3>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <ul class="free-feature-list">
                                <li><i class="fa fa-check"></i> Create Profile</li>
                                <li><i class="fa fa-check"></i> Upload Photos</li>
                                <li><i class="fa fa-check"></i> Define Partner Preference</li>
                                <li><i class="fa fa-check"></i> Search Relevant Profiles</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <ul class="free-feature-list">
                                <li><i class="fa fa-check"></i> View Full Profile</li>
                                <li><i class="fa fa-check"></i> View Photos</li>
                                <li><i class="fa fa-check"></i> Send Interest</li>
                                <li><i class="fa fa-check"></i> Receive Interest</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <ul class="free-feature-list">
                                <li><i class="fa fa-check"></i> Block Profile</li>
                                <li><i class="fa fa-check"></i> View Visitor to Your Profile</li>
                                <li><i class="fa fa-check"></i> Get Auto Matches</li>
                                <li><i class="fa fa-check"></i> View Latest Profiles</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


</div>
<script>
    setTimeout(function () {
        $('#danger_alert').fadeOut('fast');
    }, 5000); // <-- time in milliseconds
</script>
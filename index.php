<!DOCTYPE html>

<?php
    $title = 'Weekplanner';
    $today = date('d-m-Y');
    $version = 'Versie 2.0';
    $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday');
    $year = date('Y');
    $week = date('W');

    // USERINFO
    if($_GET['user']=='max'){
        $user_username = 'MaxiTaxi2014';
        $user_firstname = 'Max';
        $user_lastname = 'Korthout';
        $user_mail = 'max.korthout2014@gmail.com';
        $user_color = 'red';
    } else if($_GET['user']=='noa'){
        $user_username = 'NoaPoa2017';
        $user_firstname = 'Noa';
        $user_lastname = 'Korthout';
        $user_mail = 'noa.korthout2017@gmail.com';
        $user_color = 'pink';
    } else if($_GET['user']=='danny'){
        $user_username = 'Denniz03';
        $user_firstname = 'Danny';
        $user_lastname = 'Korthout';
        $user_mail = 'danny.korthout@gmail.com';
        $user_color = 'orange';
    } else {
        $user_username = 'Anonymous';
        $user_firstname = 'Anoniem';
        $user_lastname = '';
        $user_mail = 'noreply@gmail.com';
        $user_color = 'blue';
    }

    //SCHEDULE
    $tables = [
        ['monday', 'tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'dog', 'shower', 'bed'],
        ['tuesday', 'tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'utensils', 'dog', 'toothbrush', 'bed'],
        ['wednesday', 'tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'dog', 'shower', 'bed'],
        ['thursday', 'bread-loaf', 'chalkboard-teacher', 'tshirt', 'bicycle', 'utensils', 'gamepad', 'shapes', 'bread-loaf', 'dog', 'shower', 'bed-alt'],
        ['friday', 'bread-loaf', 'chalkboard-teacher', 'gamepad', 'tshirt', 'running', 'bread-loaf', 'gamepad', 'shapes', 'utensils', 'dog', 'shower', 'bed-alt'],
        ['saturday', 'tshirt', 'toothbrush', 'bread-loaf', 'car', 'female', 'car', 'house', 'shapes', 'utensils', 'dog', 'toothbrush', 'bed-alt'],
        ['sunday', 'gamepad', 'bread-loaf', 'tv', 'bread-loaf', 'tshirt', 'dog', 'shapes', 'shapes', 'utensils', 'dog', 'shower', 'bed'],
    );

    // COLOR
    $red = '225, 0, 0';
    $red_dark = '98, 0, 0';
    $orange = '255, 165, 0';
    $yellow = '255, 215, 0';
    $green = '76, 175, 80';
    $blue = '0, 122, 255';
    $purple = '102, 51, 153';
    $magenta = '199, 21, 133';
    $pink = '255, 192, 203';

    if (isset($_GET['color'])) {
        $user_color = ${$_GET['color']};
    } else {
        $user_color = ${$user_color};
    }

    // VIEW
    if (isset($_GET['view'])) {
        $view = $_GET['view'];
    } else {
        $view = 'week';
    }
?>

<html>

    <head>
        <title><?= $title ?></title>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex">
        <meta name="theme-color" content="#ffffff">
        <meta name="msapplication-navbutton-color" content="#ffffff">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" href="weekplanner.png">
        <link rel="shortcut icon" sizes="128x128" href="weekplanner.png">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://www.denniz03.nl/fontawesome/css/all.css" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/3cff9206b4c8d578245ef1aaeeaf9e84?family=SF+Pro+Display" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
            :root {
                --bg-main-solid: rgba(255, 255, 255, 1);
                --bg-main-opaque: rgba(255, 255, 255, 0.75);
                --bg-dark-solid: rgba(242, 242, 247, 1);
                --bg-dark-opaque: rgba(242, 242, 247, 0.25);
                --background-accent: rgba(42, 42, 47, 0.1);
                --text-color: rgba(15, 15, 25, 0.75);
                --text-light: rgba(15, 15, 25, 0.25);
                --color: <?= $user_color ?>;
                --accent-color: rgba(var(--color], 1);
                --accent-light: rgba(var(--color], 0.2);
                --overlay-color: rgba(42, 42, 47, 0.2);
                --border-color: rgba(139, 139, 140, 0.5);
            }

            @ supports (-webkit-touch-callout: none) {
                * {font-family: 'SF Pro Regular', sans-serif;}
                body {background: var(--bg-main-solid)}
                .top-menu .span {width: calc(calc(720px / 7) * 6 - 0px)}
                .top, .bottom {background: var(--bg-dark-opaque); -webkit-backdrop-filter: blur(5vw); backdrop-filter: blur(5vw)}
                .top {border-bottom: 0.1vw solid var(--border-color)}
                .bottom {border-top: 0.1vw solid var(--border-color)}
                .bars {display: none}
                .top-title {float: left; margin-left: 5vw; color: var(--text-color) !important; font-size: 1.5rem; font-family: 'SF Pro Bold'}
                .sub-menu {background: var(--bg-main-solid) !important}
            }

            @supports not (-webkit-touch-callout: none) {
                * {font-family: 'Roboto', sans-serif}
                body {background: var(--bg-dark-solid)}
                .top, .bottom {background: var(--bg-main-solid); -webkit-backdrop-filter: blur(5vw); backdrop-filter: blur(5vw)}
                .top {box-shadow: 0px 0px 10px var(--overlay-color)}
                .bottom {box-shadow: 0px 0px 10px var(--overlay-color)}
            }

                * {font-family: 'Roboto', sans-serif}
                body {background: var(--bg-dark-solid)}
                .top, .bottom {background: var(--bg-main-solid); -webkit-backdrop-filter: blur(5vw); backdrop-filter: blur(5vw)}
                .top {box-shadow: 0px 0px 10px var(--overlay-color)}
                .bottom {box-shadow: 0px 0px 10px var(--overlay-color)}

            @font-face {font-family: "SF Pro Bold"; src: url("//db.onlinewebfonts.com/t/3cff9206b4c8d578245ef1aaeeaf9e84.eot"); src: url("//db.onlinewebfonts.com/t/3cff9206b4c8d578245ef1aaeeaf9e84.eot?#iefix") format("embedded-opentype"], url("//db.onlinewebfonts.com/t/3cff9206b4c8d578245ef1aaeeaf9e84.woff2") format("woff2"], url("//db.onlinewebfonts.com/t/3cff9206b4c8d578245ef1aaeeaf9e84.woff") format("woff"], url("//db.onlinewebfonts.com/t/3cff9206b4c8d578245ef1aaeeaf9e84.ttf") format("truetype"], url("//db.onlinewebfonts.com/t/3cff9206b4c8d578245ef1aaeeaf9e84.svg#SF Pro Display") format("svg"); }
            @font-face {font-family: "SF Pro Regular"; src: url("//db.onlinewebfonts.com/t/0b51833ff62e4af8acb5fd3e2bf59e97.eot"); src: url("//db.onlinewebfonts.com/t/0b51833ff62e4af8acb5fd3e2bf59e97.eot?#iefix") format("embedded-opentype"], url("//db.onlinewebfonts.com/t/0b51833ff62e4af8acb5fd3e2bf59e97.woff2") format("woff2"], url("//db.onlinewebfonts.com/t/0b51833ff62e4af8acb5fd3e2bf59e97.woff") format("woff"], url("//db.onlinewebfonts.com/t/0b51833ff62e4af8acb5fd3e2bf59e97.ttf") format("truetype"], url("//db.onlinewebfonts.com/t/0b51833ff62e4af8acb5fd3e2bf59e97.svg#SF Pro Display") format("svg"); }

            * {margin: 0px; padding: 0px; font-size: calc(720px / 21); color: var(--text-light)}
            body::-webkit-scrollbar {display: none}
            a {text-decoration: none}
            div {display: inline-block}

            .overlay {display: none; position: fixed; top: 0; height: 100%; width: 100%; background: var(--overlay-color); backdrop-filter: blur(15px); z-index: 10}
            .fixed {overflow-y: hidden}

            .cell, .span {border: 0px solid black; text-align: center; overflow: hidden; line-height: calc(720px / 7)}
            .cell {height: calc(720px / 7); width: calc(720px / 7 - 0px)}
            .span {height: calc(720px / 7); width: calc(calc(720px / 7) * 5 - 0px)}
            .button {height: 100%; width: 100%; position: relative}
            .button i {z-index: 2}
            .button:hover {background: var(--accent-light); border-radius: calc(720px / 14); color: var(--accent-color)}
            .button:hover * {color: var(--accent-color)}
            .fa-photo {position: absolute; top: 25%; left: 25%; width: 50%; height: 50%; border-radius: 50%; background-size: contain; background-repeat: no-repeat; background-position: center}

            .top, .main, .bottom {width: 720px}
            .top {position: fixed; z-index: 5}
            .bottom {position: fixed; bottom: 0; z-index: 5}
            .main {padding: calc(720px / 7 * 2 + 7px) 0 calc(720px / 9 ) 0}
            .top-menu, .top-tabbar, .main, .bottom-tabbar {display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: center}
            .top-tabbar *, .bottom-tabbar * {color: var(--text-color)}
            .main-weekview {display: flex; flex-direction: column; flex-wrap: nowrap; justify-content: center}

            .top-menu * {color: var(--accent-color); font-weight: bold}
            .span .top-title {text-align: left !important}
            .top-tabbar {}
            .top-tabbar .cell, .top-tabbar .span {height: calc(720px / 10); line-height: calc(720px / 10)}
            .top-tabbar .active * {font-weight: bold}
            .days {height: calc(720px / 28) !important; line-height: calc(720px / 42) !important}
            .day {font-size: 0.5rem; .color: var(--accent-color)}
            .date {position: relative}
            .date * {z-index: 2}

            .sub-menu {display: none; position: fixed; bottom: -10000px; width: 720px; border-radius: calc(720px / 28) calc(720px / 28) 0 0; background: var(--bg-main-solid); overflow: hidden; box-shadow: 0px 0px 10px var(--overlay-color); z-index: 15}
            .sub-menu * {color: var(--text-color); font-weight: normal; }
            .sub-menu li {list-style-type: none}
            .sub-menu .button {margin: 7px; padding: 14px; width: calc(720px - 43px) !important}
            .sub-menu .button i {width: 42px; padding-right: 14px; color: var(--accent-color)}
            .sub-menu .image, .sub-menu .title, .sub-menu .subtitle {pointer-events: none; text-align: center}
            .sub-menu .image i {position: relative; left: 0; padding: 0px !important; width:calc(720px / 4) !important; height: calc(720px / 4) !important}

            .sub-menu .title {font-weight: bold; color: var(--accent-color)}
            .sub-menu .subtitle {font-size: 0.55rem; .color: var(--text-light)}
            .sub-menu hr {padding: 0vw !important; border: 1px solid var(--bg-dark-solid)}

            .main {border: 0px; background: var(--bg-main-solid)}
            .main-weekview {border-right: 1px solid var(--bg-dark-solid)}
            .main-weekview .button::after {background: white; opacity: 0.6; border-radius: calc(720px / 7); content: ""; position: absolute; top: calc(720px / 100); left: calc(720px / 100); right: calc(720px / 100); bottom: calc(720px / 100); z-index: -1}
            .main-weekview .button::after i {z-index: 20 !important}

            .active {background: var(--accent-light); color: var(--accent-color); border-radius: calc(720px / 7)}
            .active * {color: var(--accent-color);}
            .active .button::after {opacity: 1}
            .main-weekview.active {border-radius: 0px}
            .button:hover::after {opacity: 1}
            .top-tabbar .active {background: none}
            .top-tabbar .active * {color: var(--bg-main-solid)}
            .top-tabbar .active .date::after {background: var(--accent-color); opacity: 1; width: calc(720px / 13); height: calc(720px / 13); margin-top: 8.5px; margin-left: -45.5px; border-radius: 50%; position: absolute; content: ""; z-index: -1}

            .bottom-tabbar {padding: 10px 0}
            .bottom-tabbar .cell, .bottom-tabbar .span {height: calc(720px / 14); line-height: calc(720px / 14)}
            .bottom-tabbar .span {background: var(--background-accent); border-radius: calc(720px / 7)}
            .bottom-tabbar .button {width: calc(50% - 5px); color: var(--text-light)}
            .bottom-tabbar .button i {padding-right: calc(720px * 0.02)px; color: var(--text-light)}
            .bottom-tabbar .active {.background: var(--text-light)}
            .bottom-tabbar .active, .bottom-tabbar .active i {color: var(--accent-color)}

            @media screen and (max-width: 720px){

                @ supports (-webkit-touch-callout: none) {
                    .top-menu .span {width: calc(calc(100vw / 7) * 6)}
                }
                * {font-size: calc(100vw / 21)}

                .cell, .span {line-height: calc(100vw / 7)}
                .cell {height: calc(100vw / 7); width: calc(100vw / 7)}
                .span {height: calc(100vw / 7); width: calc(calc(100vw / 7) * 5)}
                .button:hover {border-radius: calc(100vw / 7)}
                .fa-photo {width: calc(100vw / 14); height: calc(100vw / 14)}

                .top, .main, .bottom {width: 100vw}
                .main {padding: calc(100vw / 7 * 2) 0 calc(100vw / 7 - 1vw) 0}
                .main-weekview {border-right: 0.1vw solid var(--bg-dark-solid)}
                .top-tabbar .cell {.margin-bottom: -2vw}
                .top-tabbar .cell, .top-tabbar .span {height: calc(100vw / 10); line-height: calc(100vw / 10)}
                .days {height: calc(100vw / 28) !important; line-height: calc(100vw / 42) !important}

                .sub-menu {width: 100vw; border-radius: calc(100vw / 28) calc(100vw / 28) 0 0}
                .sub-menu .button {margin: 1vw; padding: 2vw; width: calc(100vw - 6vw) !important}
                .sub-menu .button i {width: 6vw; padding-right: 2vw}
                .sub-menu .image i {padding: 0vw !important; width: 25vw !important; height: 25vw !important}

                .sub-menu .title {margin-bottom: -2vw !important}
                .sub-menu .subtitle {margin-top: -2vw !important}
                .sub-menu hr {padding: 0px}

                .main-weekview .button::after {border-radius: calc(100vw / 7); top: 2vw; left: 2vw; right: 2vw; bottom: 2vw}

                .active {border-radius: calc(100vw / 7)}
                .top-tabbar .active .date::after {width: calc(100vw / 13); height: calc(100vw / 13); margin-top: 1.2vw; margin-left: -6.4vw;}

                .bottom-tabbar {padding: 2vw 0}
                .bottom-tabbar .cell, .bottom-tabbar .span {height: calc(100vw / 14); line-height: calc(100vw / 14)}
                .bottom-tabbar .span {border-radius: calc(100vw / 7)}
                .bottom-tabbar .button {width: calc(50% - 0.6vw)}
                .bottom-tabbar .button i {padding-right: 2vw}
                .bottom-tabbar .span {padding: 1vw}
            }
        </style>
        <script>
            $(document).ready(function(){
                // overlay
                $(".overlay").click(function(){
                    $(".overlay").fadeOut();
                    $("body").toggleClass("fixed");
                    $(".sub-menu").animate({bottom:"-10000px"}, function(){
                        $(".sub-menu").hide();
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="overlay">
            <div class="sub-menu">
                <li><div class="button image"><i style="background-image: url('images/<?= $user_username ?>.jpg')" class="fas fa-photo">&nbsp;</i></div></li>
                <li><div class="button title"><?= $user_firstname.' '.$user_lastname ?></div></li>
                <li><div class="button subtitle"><?= $user_mail ?></div></li>
                <hr class="button">
                <a href="?title=Account gegevens"><li><div class="button"><i class="fad fa-user-edit"></i>Account gegevens</div></li></a>
                <a href="?title=Bedrijf gegevens"><li><div class="button"><i class="fad fa-copyright"></i>Bedrijf gegevens</div></li></a>
                <a href="?title=Website beheren"><li><div class="button"><i class="fad fa-edit"></i>Website beheren</div></li></a>
                <hr class="button">
                <a href="?title=Afmelden"><li><div class="button"><i class="fad fa-sign-out"></i>Afmelden</div></li></a>
            </div>
        </div>
        <div class="top">
            <div class="top-menu">
                <div class="cell bars"><a href=""><div class="button"><i class="fas fa-bars"></i></div></a></div>
                <div class="span"><div class="top-title"><?= $title .' '. $user_firstname ?></div></div>
                <div class="cell"><a onclick="$('.sub-menu').toggle().animate({bottom:'0px'}); $('.overlay').fadeToggle(); $('body').toggleClass('fixed');"><div class="button"><i style="background-image: url('images/<?= $user_username ?>.jpg')" class="fas fa-photo">&nbsp;</i></div></a></div>
            </div>
            <div class="top-tabbar">
                <div class="day">ma</div></div>
                <div class="day">di</div></div>
                <div class="day">wo</div></div>
                <div class="day">do</div></div>
                <div class="day">vr</div></div>
                <div class="day">za</div></div>
                <div class="day">zo</div></div>
            </div>
            <div class="top-tabbar">
            <?php $i = 1; foreach ($days as $day) { ?>
                <div class="cell  <?php if($i == date('N')) { echo 'active'; } ?>"><div class="date"><?= date('d', strtotime($year.'W'.$week.date('N', strtotime($day)))); ?></div></div>
            <?php $i++; ?>
            <?php } ?>
            </div>
        </div>
        <div class="main">
            <?php $i = 1; foreach ($days as $day) { ?>
            <div class="main-weekview <?php if($i == date('N')) { echo 'active'; } ?>" id="<?= $days2[$i-1] ?>">
                <?php $j = 1; do { ?>
                <div class="cell"><a href=""><div class="button"><i class="fad fa-<?= $tables[$i-1][$j]?>"></i></div></a></div>
                <?php $j++; } while ($j < 15); ?>
            </div>
            <?php $i++; ?>
            <?php } ?>
        </div>
        <div class="bottom">
            <div class="bottom-tabbar">
                <div class="cell"></div>
                <div class="span">
                    <a href="?"><div class="button active"><i class="fal fa-calendar-week"></i>week</div></a>
                    <a href="?"><div class="button"><i class="fal fa-calendar-day"></i>dag</div></a>
                </div>
                <div class="cell"></div>
            </div>
        </div>
    </body>
</html>
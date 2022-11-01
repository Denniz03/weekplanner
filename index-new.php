<?php
    $title = 'KiddoApp';
    $today = date('d-m-Y');
    $version = 'Versie 2.0';
    $days = [
        'nl' => ['maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag', 'zondag'],
        'en' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']
    ];
    $year = date('Y');
    $week = date('W');
    $fa = 'fal';

    // USERINFO
    $user_info = [
        [
            'id' => '0', 
            'first_name' => 'Danny', 
            'middle_name' => '', 
            'last_name' => 'Korthout', 
            'birth_day' => '18-09-1986', 
            'username' => 'denniz03', 
            'email' => 'danny.korthout@gmail.com', 
            'locale' => 'nl', 
            'color' => '#ffa500', 
            'user_type' => '2', 
            'schedule' => [
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'toothbrush', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'shower', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'toothbrush', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'shower', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'toothbrush', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'shapes', 'running', 'utensils', 'dog', 'shower', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'shapes', 'running', 'utensils', 'dog', 'toothbrush', 'bed']
            ]
        ],
        [
            'id' => '1', 
            'first_name' => 'Max', 
            'middle_name' => '', 
            'last_name' => 'Korthout', 
            'birth_day' => '18-07-2014', 
            'username' => 'maxitaxi2014', 
            'email' => 'max.korthout2014@gmail.com', 
            'locale' => 'en', 
            'color' => '#ff0000', 
            'user_type' => '1', 
            'schedule' => [
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'toothbrush', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'shower', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'toothbrush', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'shower', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'toothbrush', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'shapes', 'running', 'utensils', 'dog', 'shower', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'shapes', 'running', 'utensils', 'dog', 'toothbrush', 'bed']
            ]
        ],
        [
            'id' => '2', 
            'first_name' => 'Noa', 
            'middle_name' => '', 
            'last_name' => 'Korthout', 
            'birth_day' => '25-01-2017', 
            'username' => 'noapoa2017', 
            'email' => 'noa.korthout2017@gmail.com', 
            'locale' => 'nl', 
            'color' => '#ffc0cb', 
            'user_type' => '0', 
            'schedule' => [
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'toothbrush', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'shower', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'toothbrush', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'shower', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'bus', 'chalkboard-teacher', 'bus', 'house', 'shapes', 'running', 'utensils', 'toothbrush', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'shapes', 'running', 'utensils', 'dog', 'shower', 'bed'],
                ['tshirt', 'toothbrush', 'bread-loaf', 'shapes', 'running', 'utensils', 'dog', 'toothbrush', 'bed']
            ]
        ]
    ];
    
    // get user
    $i = 0;
    foreach ($user_info as $user) {
        if (strtolower($user['first_name']) == strtolower($_GET['user'])) {
            $user_id = $i;
        } else {
            $i++;
        }
    }
    setlocale(LC_ALL, $user_info[$user_id]['locale']);

?>
<html>
    <head>
    <title><?php echo $title ?></title>
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
            /* general */
            :root {
                --padding: 5px;
                --main-color: #ffffff;
                --user-color: <?php echo $user_info[$user_id]['color'] ?>;
                --border: #8b8b8c22;
                --overlay: #2a2a2f33;
                --text: #0f0f19bf;
                --text-light: #0f0f1940;
            }
            * {
                font-family: 'SF Pro Regular', sans-serif;
                font-size: 1rem;
                font-weight: 100;
                color: var(--text);
                padding: var(--padding);
            }
            html,
            body,
            .container {
                position: relative;
                margin: 0px;
                padding: 0px;
            }
            body {
                display: flex;
                flex-direction: column;
            }
            .overlay {
                display: none; 
                position: fixed; 
                top: 0; 
                left: 0;
                height: 100%; 
                width: 100%; 
                background: var(--overlay); 
                backdrop-filter: blur(15px); 
                -webkit-backdrop-filter: blur(15px);
                z-index: 5;
            }
            .fixed {
                overflow-y: hidden;
            }
            .hr {
                margin: var(--padding);
                padding: 0px;
                border-bottom: 1px solid var(--border);
                border-collapse: collapse;
            }
            .button {
                position: relative;
                background: #ffffff;
                border-radius: var(--padding);
                width: 100%;
                text-align: center;
            }
            .button:hover {
                filter: brightness(95%);
            }
            .button i {
                width: 1em;
                text-align: center;
                margin: 0 auto;
            }
            .header, 
            .content, 
            .footer,
            .container {
                padding: 0px;
            }
            .round-image {
                margin: var(--padding);
                height: 50px;
                width: 50px;
                border-radius: 50%;
                background-size: cover;
            }
            .title {
                font-weight: 400;
                font-size: larger;
                color: var(--user-color);
            }
            .subtitle {
                font-size: smaller;
                color: var(--text-light);
            }

            /* menu */
            .menu {
                display: none;
                position: absolute;
                border: 1px solid var(--border);
                border-radius: var(--padding);
                min-width: 200px;
                background: var(--main-color);
                z-index: 10;
                box-shadow: 0px 0px 10px var(--overlay);
            }
            .menu .title {
                font-size: medium;
                color: var(--text);
                opacity: 0.5;
            }
            .menu .button {
                width: auto;
                text-align: left;
            }
            .menu i {
                opacity: 0.5;
                margin-right: var(--padding);
            }
                .menu > .active {
                    filter: brightness(97.5%);
                }
                .menu > .active:before {
                    content: '';
                    position: absolute;
                    border-left: calc(var(--padding) / 2) solid var(--user-color);
                    width: 100%;
                    height: calc(100% - var(--padding) - var(--padding));
                    top: var(--padding);
                    bottom: var(--padding);
                    left: calc(0px - var(--padding));
                }

            /* nav menu */
            #nav-menu {
                left: var(--padding);
            }

            /* user menu */
            #user-menu {
                right: var(--padding);
            }
                #user-menu .header {
                    text-align: center;
                }
                    #user-menu .header .title {
                        color: var(--user-color);
                    }
                #user-menu .image {
                    margin: var(--padding) auto;
                }

            /* header */
            body > .header,
            body > .footer {
                background: transparent;
                backdrop-filter: blur(15px); 
                -webkit-backdrop-filter: blur(15px);
                position: fixed; 
                width: 100%;
                z-index: 2;
            }
            .header .container,
            .footer .container {
                display: flex;
                flex-direction: column;
                gap: var(--padding);
            }
                .nav {
                    display: flex;
                    flex-direction: row;
                    gap: var(--padding);
                    position: relative;
                    justify-content: space-around;
                }
                .header .nav .button {
                    width: auto;
                }
                .nav > .button {
                    text-align: center;
                }
                .nav > .button,
                .nav > .button i {
                    opacity: 0.7;
                }
                .nav > .title {
                    flex: 1;
                    font-size: x-large;
                    text-align: center;
                }
                .nav > .button i {
                    font-size: x-large;
                }
                /* top toolbar */
                #toolbar-top {
                    position: fixed;
                    width: 100%;
                    .background: var(--main-color);
                    backdrop-filter: blur(15px); 
                    -webkit-backdrop-filter: blur(15px);
                    z-index: 1;
                }
                    .cal-days,
                    .cal-tabs {
                        display: flex;
                        flex-direction: row;
                        justify-content: space-around;
                        gap: var(--padding);
                        padding: 0px;
                    }
                        .cal-day {
                            padding: 0px;
                            width: 100%;
                        }
                            .cal-day .day, 
                            .cal-day .date {
                                text-transform: capitalize;
                                text-align: center;
                            }
                            .cal-day .date {
                                margin: 0 auto;
                                width: 1.3em;
                                height: 1.3em;
                                line-height: 1.3em;
                                font-size: x-large;
                            }
                            .cal-day .active {
                                background: var(--user-color);
                                border-radius: 50%;
                                color: var(--main-color);
                            }

            /* content */
            body > .content {
                overflow: hidden;
            }
                body > .content > .container {
                    padding: 0px;
                }
                body > .content > .container > .page {
                    padding: 0px;
                    transition: 0.2s;
                }

            /* footer */
            .footer {
                bottom: 0px;
                .box-shadow: 0px 0px 10px var(--overlay);
            }
                .footer .button {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-around;
                }
                /* bottom toolbar */
                .footer .toolbar {
                    display: flex;
                    flex-direction: row;
                    justify-content: space-around;
                    gap: var(--padding);
                    padding: 0px;
                    }
                .footer .nav .active * {
                    color: var(--user-color);
                    opacity: 1;
                    transition: 0.2s;
                }
        </style>
        <script>
            $(window).scroll(function (event) {
                //header border
                if ($(window).scrollTop() >= 3) {
                    $('.header').css('border-bottom', '1px solid var(--border');
                } else {
                    $('.header').css('border-bottom', '0px solid var(--border');
                }
                //footer border
                if ($(window).scrollTop() + document.body.clientHeight >= $(document).height() - 3) {
                    $('.footer').css('border-top', '0px solid var(--border');
                } else {
                    $('.footer').css('border-top', '1px solid var(--border');
                }
           });
            $(document).ready(function(){
                // get padding
                $padding = $('#nav-button').css('padding');
                // get nav height
                $header_height = $('.header .nav').outerHeight();
                $footer_height = $('.footer .nav').outerHeight();
                $('.page').css('padding-top', $header_height + 'px');
                $('.page').css('padding-bottom', $footer_height + 'px');
                $('#toolbar-bottom').css('bottom', $footer_height);

                // nav button click
                $('.header .nav .button').on('click', function(){
                    $('.menu').hide();
                    $('.overlay').fadeIn();
                    $('body').addClass('fixed');
                    $('.menu').css('top', $(this).outerHeight() + $padding);
                    $menu = $(this).attr('id').slice(0, -7);
                    $('#' + $menu + '-menu').slideToggle();
                });

                // overlay
                $('.overlay').click(function(){
                    $('.overlay').fadeOut();
                    $('body').removeClass('fixed');
                    $('.menu').slideUp();
                });

                // footer nav get page
                // load page 1
                loadPage(1);

                // on button clicked
                $('.footer .button').on('click', function() {
                    // get which page to load
                    var button = $(this).attr('id').slice(-1);
                    // load page
                    loadPage(button);
                });

                // function for loading page
                function loadPage(button) {
                    // remove activate old button
                    $('.footer .button').removeClass('active');
                    // add active new button
                    $('.footer #nav-button-' + button).addClass('active');
                    // fadeout old content
                    $('.content .container').fadeOut('fast', function() {
                        // switch pages
                        $('.page').hide();
                        $('#page-' + button).show();
                        $('.content .container').show();
                    });
                };
            });
        </script>
    </head>
    <body>
        <!-- overlay -->
        <div class="overlay"></div>
        <!-- submenus -->
        <div class="menu" id="nav-menu">
            <div class="title">main</div>
            <div class="button active"><i class="<?= $fa ?> fa-home"></i><label>page1</label></div>
            <div class="button"><i class="<?= $fa ?> fa-cube"></i><label>page2</label></div>
            <div class="button"><i class="<?= $fa ?> fa-key"></i><label>page3</label></div>
            <div class="hr"></div>
            <div class="title">account</div>
            <div class="button"><i class="<?= $fa ?> fa-user"></i><label>public profile</label></div>
            <div class="button"><i class="<?= $fa ?> fa-cog"></i><label>account</label></div>
            <div class="button"><i class="<?= $fa ?> fa-bell"></i><label>notifications</label></div>
            <div class="hr"></div>
            <div class="button"><i class="<?= $fa ?> fa-arrow-right-from-bracket"></i><label>afmelden</label></div>
        </div>
        <div class="menu" id="user-menu">
            <div class="header">
                <div class="image round-image" style="background-image: url('images/<?php echo $user_info[$user_id]['username'] ?>.jpg')"></div>
                <div class="title"><?php echo $user_info[$user_id]['first_name'] . ' ' . $user_info[$user_id]['middle_name'] . ' ' . $user_info[$user_id]['last_name']?></div>
                <div class="subtitle"><?php echo $user_info[$user_id]['email'] ?></div>
            </div>
            <div class="hr"></div>
            <div class="title">account</div>
            <div class="button"><i class="<?= $fa ?> fa-user"></i><label>profiel</label></div>
            <div class="button"><i class="<?= $fa ?> fa-cog"></i><label>account</label></div>
            <div class="button"><i class="<?= $fa ?> fa-paint-brush"></i><label>uiterlijk</label></div>
            <div class="button"><i class="<?= $fa ?> fa-bell"></i><label>notificaties</label></div>
            <div class="hr"></div>
            <div class="button"><i class="<?= $fa ?> fa-arrow-right-from-bracket"></i><label>afmelden</label></div>
        </div>
        <!-- header -->
        <div class="header">
            <div class="container">
                <!-- nav -->
                <div class="nav">
                    <div class="button" id="nav-button"><i class="fas fa-bars"></i></div>
                    <div class="title"><?= $title ?></div>
                    <div class="button" id="user-button"><i class="fas fa-user"></i></div>
                </div>
                <!-- toolbar-top-1 -->
                <div class="toolbar" id="toolbar-top-1">
                    <div class="cal-days">
                        <?php for ($i=0; $i<=6; $i++) { ?>
                            <div class="cal-day">
                                <div class="day"><?php echo substr($days[$user_info[$user_id]['locale']][$i], 0, 2); ?></div>
                                <div class="date <?php if(date('N') == $i +1) { echo 'active'; } ?>"><?php echo date('d', strtotime($year.'W'.$week.$i+1)); ?></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->
        <div class="content">
            <div class="container">
                <!-- page 1 -->
                <div class="page" id="page-1">
                    <!-- article 1 -->
                    <div class="article" id="article1">
                        <div class="image"></div>
                        <div class="title">artikel 1</div>
                        <div class="subtitle">subtitel 1 van artikel 1</div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempor elementum mi, sit amet vestibulum eros placerat scelerisque. Quisque sodales, arcu et auctor gravida, libero odio laoreet tellus, ac faucibus arcu magna nec justo. Ut in lacus quis arcu volutpat laoreet vitae sit amet dui. In hac habitasse platea dictumst. Curabitur consequat erat vel tortor semper, sit amet venenatis quam varius. Nullam porttitor, neque et gravida finibus, nulla urna auctor turpis, consectetur vehicula sapien erat in nulla. Nulla sit amet erat id felis lacinia vulputate in sed elit. Pellentesque at dui nec nulla scelerisque consectetur at eget velit. Phasellus mollis, mauris eget tempor interdum, dui tellus scelerisque tortor, ut consequat eros libero et massa. Cras in turpis sit amet justo molestie consequat hendrerit vitae est. Sed vel sapien lacus. Vestibulum vitae nisl ac purus fermentum convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus id molestie urna, sed pellentesque lorem. Donec bibendum dapibus metus, vitae tempus dui.

            Cras non ornare ligula. Fusce fringilla sit amet ipsum at ultricies. Integer rutrum rhoncus efficitur. Cras tempus neque nunc, quis blandit nulla ullamcorper at. Mauris non iaculis tellus. Quisque porta metus nisi, ac porttitor lorem imperdiet eu. Donec diam elit, laoreet in orci eu, rhoncus tincidunt ante. Pellentesque metus sapien, sodales sit amet nisl id, vehicula laoreet mauris. Mauris nec felis ac nisl faucibus eleifend at ac ligula. Fusce gravida, enim a consectetur imperdiet, felis dolor malesuada elit, sed pellentesque neque velit in felis. Integer vitae tellus dolor. Aenean vitae imperdiet est. Etiam elit ex, mattis eu nunc ut, mattis aliquam dui.

            Integer nec purus at velit consectetur maximus. Morbi consectetur neque vitae lorem gravida dignissim. Sed commodo erat eget sapien mattis, vel varius nulla fermentum. Nunc sodales pulvinar metus, at faucibus nisi. Quisque in lorem et massa ultricies molestie eu a quam. Nam facilisis facilisis lectus id dapibus. Pellentesque hendrerit sagittis diam, vel eleifend ipsum viverra eget. Sed porttitor, sapien at convallis placerat, erat nisi iaculis libero, sed pharetra lorem eros et neque. In finibus, nisl sit amet lacinia maximus, mauris purus blandit nisl, a commodo libero nibh et massa. Vestibulum ac diam eu magna sagittis pharetra. Suspendisse potenti. Vestibulum sodales orci ut rutrum lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras congue nibh orci, sit amet euismod nisl rutrum at. Integer eleifend, tortor non laoreet convallis, augue sem pellentesque massa, ac congue orci elit eget elit. Nunc et iaculis urna.

            Cras augue augue, fringilla blandit congue eu, vestibulum in ante. Vivamus dictum, felis ut luctus hendrerit, elit tellus consectetur nunc, et scelerisque ligula ipsum at nisl. Vestibulum id egestas neque, eget sollicitudin massa. Etiam quis faucibus leo, in luctus nunc. Etiam finibus erat ligula, ut tincidunt dui cursus a. Praesent scelerisque finibus urna in aliquet. Vivamus varius volutpat elit ac varius. Nulla faucibus, ipsum sit amet hendrerit rutrum, est mauris tempus risus, vel condimentum nulla nisl commodo leo. Aliquam lacinia libero id gravida eleifend. Donec scelerisque velit in purus elementum imperdiet. Donec porttitor varius odio, fringilla tincidunt neque finibus at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

            Nulla facilisi. Curabitur non mi in sem pretium dictum. Proin vel lacus mauris. In magna velit, porta nec leo in, maximus iaculis justo. Nulla tincidunt pharetra posuere. Donec semper, nunc feugiat placerat cursus, est metus eleifend mi, non porttitor turpis mauris sed tellus. Nunc purus tellus, tempor efficitur leo in, finibus luctus urna. In vitae neque sagittis tellus dictum malesuada id et ligula. Proin scelerisque, neque suscipit volutpat tincidunt, mi purus luctus enim, sed venenatis est tellus id arcu. Praesent rutrum condimentum blandit.</div>
                        <div class="buttons"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <!-- toolbar-bottom-1 -->
                <div class="toolbar" id="toolbar-bottom-1">
                    <div class="cal-tabs">
                        <div class="button"><i class="<?= $fa ?> fa-calendar-week"></i><label>week</label></div>
                        <div class="button"><i class="<?= $fa ?> fa-calendar-day"></i><label>dag</label></div>
                    </div>
                </div>
                <!-- nav -->
                <div class="nav">
                    <div class="button" id="nav-button-1"><i class="fas fa-calendar-days"></i><label>Weekplanner</label></div>
                    <div class="button" id="nav-button-2"><i class="fas fa-coin"></i><label>Portemonee</label></div>
                    <div class="button" id="nav-button-3"><i class="fas fa-piggy-bank"></i><label>Sparen</label></div>
                    <div class="button" id="nav-button-4"><i class="fas fa-clipboard-list"></i><label>Regels</label></div>
                </div>
            </div>
        </div>
    </body>
</html>
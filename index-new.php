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

            /* header */
            body > .header,
            body > .footer {
                background: #ffffff;
                .position: fixed; 
                width: 100%; calc(100% - calc( 2 * var(--padding)));
                z-index: 2;
            }
            body > .header {
                .box-shadow: 0px 0px 10px var(--overlay);
            }
            .header .toolbar {
                box-shadow: 0px 0px 10px var(--overlay);
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
                        .color: var(--user-color);
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

            /* content */
            body > .content {
                background: red;
                flex: 1;
            }
                body > .content > .container {
                    padding: 0px;
                }
                body > .content > .container > .page {
                    padding: 0px;
                    transition: 0.2s;
                }
                        .article {}

                        /* footer */
            body > .footer {
                bottom: 0px;
                box-shadow: 0px 0px 10px var(--overlay);
            }
                .footer .button {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-around;
                }
                    .footer .button i {
                    }
                    .footer .button .label {
                    }
                .footer .nav .active * {
                    color: var(--user-color);
                    opacity: 1;
                    transition: 0.2s;
                }

            div {.background-color: #00000011;}
        </style>
        <script>
            $(document).ready(function(){
                // get padding
                $padding = $('#nav-button').css('padding');

                // nav button click
                $('.header .nav .button').on('click', function(){
                    $('.menu').hide();
                    $('.overlay').fadeIn();
                    $('body').addClass('fixed');
                    $(this).next('.menu').css('top', $(this).outerHeight() + $padding);
                    $(this).next('.menu').slideToggle();
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
        <!-- header -->
        <div class="header">
            <div class="container">
                <div class="nav">
                    <div class="button" id="nav-button"><i class="fas fa-bars"></i></div>
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
                    <div class="title"><?= $title ?></div>
                    <div class="button" id="user-button"><i class="fas fa-user"></i></div>
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
                </div>
            </div>
        </div>
        <!-- content -->
        <div class="content">
            <div class="container">
                <!-- page 1 -->
                <div class="page" id="page-1">
                    <?php include 'weekplanner.php' ?>
                </div>
                <!-- page 2 -->
                <div class="page" id="page-2">
                    <?php include 'wallet.php' ?>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="container">
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
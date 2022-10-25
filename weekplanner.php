<?php
    $page_title = 'Weekplanner';
    $page_version = 'Versie 2.0';
?>
<html>
    <head>
        <style>
            .content .header {
                background: var(--main-color);
            }
            .content .header .toolbar {}
                .cal-days {
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
                            font-size: x-large;
                        }
                        .cal-day .active {
                            background: var(--user-color);
                            border-radius: 50%;
                            color: var(--main-color);
                        }
                /* content */
                .content > .content {
                    height: 100%;
                    background: red;
                }

                /* footer */
                .content > .footer {
                    bottom: 0px;
                }
                .content > .footer .toolbar {

                }
        </style>
        <script>
            $(document).ready(function(){
            });
        </script>
    </head>
    <body>
        <!-- header -->
        <div class="header">
            <div class="container">
                <div class="toolbar">
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
                <div class="page" id="page1">
                    <!-- article 1 -->
                    <div class="article" id="article1">
                        <div class="image"></div>
                        <div class="title"></div>
                        <div class="subtitle"></div>
                        <div class="text"></div>
                        <div class="buttons"></div>
                    </div>
                    <!-- article 2 -->
                    <div class="article" id="article2">
                        <div class="image"></div>
                        <div class="title"></div>
                        <div class="subtitle"></div>
                        <div class="text"></div>
                        <div class="buttons"></div>
                    </div>
                </div>
                <!-- page 2 -->
                <div class="page" id="page2">
                    <!-- article 3 -->
                    <div class="article" id="article3">
                        <div class="image"></div>
                        <div class="title"></div>
                        <div class="subtitle"></div>
                        <div class="text"></div>
                        <div class="buttons"></div>
                    </div>
                    <!-- article 4 -->
                    <div class="article" id="article4">
                        <div class="image"></div>
                        <div class="title"></div>
                        <div class="subtitle"></div>
                        <div class="text"></div>
                        <div class="buttons"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <!-- toolbar -->
                <div class=toolbar"></div>
            </div>
        </div>
    </body>
</html>
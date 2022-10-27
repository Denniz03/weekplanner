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
                            line-height: 1.3em;
                            font-size: x-large;
                        }
                        .cal-day .active {
                            background: var(--user-color);
                            border-radius: 50%;
                            color: var(--main-color);
                        }
                /* content */
                .content .content {
                    height: 100%;
                    background: red;
                }

                /* footer */
                .content .footer {
                    bottom: 0px;
                    background: green;
                }
                    .content .footer .toolbar {
                        display: flex;
                        flex-direction: row;
                        justify-content: space-around;
                        gap: var(--padding);
                        padding: 0px;
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
                <!-- article 2 -->
                <div class="article" id="article2">
                    <div class="image"></div>
                    <div class="title"></div>
                    <div class="subtitle"></div>
                    <div class="text"></div>
                    <div class="buttons"></div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <!-- toolbar -->
                <div class="toolbar">
                    <div class="cal-tabs">
                        <div class="button"><i class="<?= $fa ?> fa-calendar-week"></i><label>week</label></div>
                        <div class="button"><i class="<?= $fa ?> fa-calendar-day"></i><label>dag</label></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
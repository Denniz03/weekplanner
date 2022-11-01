<!-- header -->
<div class="header">
    <div class="container">
        <!-- nav -->
        <div class="nav">
            <div class="button" id="nav-button"><i class="fas fa-bars"></i></div>
            <div class="title"><?= $title ?></div>
            <div class="button" id="user-button"><i class="fas fa-user"></i></div>
        </div>
        <!-- toolbar -->
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
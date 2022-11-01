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
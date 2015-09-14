<?php
$this->assign('title', __('Frannca'));
?>
<style type="text/css">
    .demo-card-wide.mdl-card {
      width: 100%;
    }
    .demo-card-wide > .mdl-card__title {
      color: #fff;
      height: 176px;
      background: url('../assets/demos/welcome_card.jpg') center / cover;
    }
    .demo-card-wide > .mdl-card__menu {
      color: #fff;
    }
</style>

<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col mdl-typography--text-center">
        <h2 class="mdl-typography--display-3"><?= __('Programming is an art') ?></h2>
        <h3 class="mdl-typography--headline-2"><?= __('Changes the world around you') ?></h3>
    </div>
</div>

<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--hide-phone">

    </div>
    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--12-col-phone">
        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Frannca</h2>
            </div>
            <div class="mdl-card__supporting-text">
            <?= __("Renato França's professional web site.") ?>
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"><?= __('More Details') ?></a>
            </div>
            <div class="mdl-card__menu">
                <a href="#" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                    <i class="material-icons">share</i>
                </a>
            </div>
        </div>
    </div>
    <div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-tablet mdl-cell--hide-phone">

    </div>
</div>
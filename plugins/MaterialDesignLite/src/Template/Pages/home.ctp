<?php
$this->assign('title', __('Frannca'));
?>
<style type="text/css">
    .demo-card-wide.mdl-card {
      width: 100%;
    }
    .demo-card-wide > .mdl-card__title {
      color: rgb(244,67,54) !important;
      height: 176px;
      /*background: url('material_design_lite/img/projects/card-frannca.png') no-repeat center;*/
    }
    .demo-card-wide > .mdl-card__menu {
      color: #fff;
    }

    .mdlc-color-red-500 {
        background-color: rgb(244,67,54);
    }
</style>

<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col mdl-typography--text-center">
        <h2 class="mdl-typography--display-3"><?= __('Programming is an art') ?></h2>
        <h3 class="mdl-typography--headline-2"><?= __('Changes the world around you') ?></h3>
    </div>
</div>

<div class="mdl-grid">
    <!-- Empty div for next projets -->
    <div class="mdl-cell mdl-cell--4-col mdl-cell--1-col-tablet mdl-cell--hide-phone"></div>
    <!-- Frannca project div -->
    <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--4-col-phone">
        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
            <!-- Project title -->
            <div class="mdl-card__title mdlc-color-red-500">
                <h2 class="mdl-card__title-text mdl-color-text--primary-contrast">Frannca</h2>
            </div>
            <!-- Project description -->
            <div class="mdl-card__supporting-text">
            <?= __("Renato França's professional web site.") ?>
            </div>
            <!-- More details link -->
            <div class="mdl-card__actions mdl-card--border">
                <?= $this->Html->link(__('More Details'), '/projects/frannca', ['class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect']); ?>
            </div>
            <!-- GitHub icon link -->
            <div class="mdl-card__menu">
                <a href="https://github.com/Frannca/frannca.com" id="tt2" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                    <i class="material-icons">code</i>
                </a>
            </div>
        </div>
        <!-- Code icon tooltip -->
        <div class="mdl-tooltip mdl-tooltip--large" for="tt2"><?= __('Get code on GitHub') ?></div>
    </div>
    <!-- Empty div for next projets -->
    <div class="mdl-cell mdl-cell--4-col mdl-cell--1-col-tablet mdl-cell--hide-phone"></div>
</div>
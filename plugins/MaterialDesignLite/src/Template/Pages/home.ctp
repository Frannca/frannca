<?php
$this->assign('title', __('Frannca'));
?>
<style type="text/css">
    .demo-card-wide.mdl-card {
      width: 100%;
    }
    .demo-card-wide > .mdl-card__title {
      color: rgb(244,67,54) !important;
      height: 200px;
      background: url('img/projects/card-frannca.png') rgb(244,67,54) no-repeat center 58px;
    }
    .demo-card-wide > .mdl-card__menu {
      color: #fff;
    }

    .mdlc-color-red-500 {
        background-color: rgb(244,67,54);
    }

    .mdlc-card__title-no-space {
        padding: 0;
    }

    .mdlc-card__title-caption {
        background-color: rgba(0, 0, 0, 0.4);
        border-top-right-radius: 2px;
        padding: 8px 16px;
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
            <div class="mdl-card__title mdlc-card__title-no-space">
                <h2 class="mdl-card__title-text mdl-color-text--primary-contrast mdlc-card__title-caption">Frannca</h2>
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
                <?= $this->Html->link('<span class="octicon octicon-repo-forked"></span>', 'https://github.com/Frannca/frannca.com/fork', ['id' => 'tt-fork', 'class' => 'mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect', 'escape' => false]); ?>
                <?= $this->Html->link('<span class="octicon octicon-code"></span>', 'https://github.com/Frannca/frannca.com', ['id' => 'tt-get-code', 'class' => 'mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect', 'escape' => false]); ?>
            </div>
        </div>
        <!-- Tooltips -->
        <div class="mdl-tooltip mdl-tooltip--large" for="tt-fork"><?= __('Fork on GitHub') ?></div>
        <div class="mdl-tooltip mdl-tooltip--large" for="tt-get-code"><?= __('Get code on GitHub') ?></div>
    </div>
    <!-- Empty div for next projets -->
    <div class="mdl-cell mdl-cell--4-col mdl-cell--1-col-tablet mdl-cell--hide-phone"></div>
</div>
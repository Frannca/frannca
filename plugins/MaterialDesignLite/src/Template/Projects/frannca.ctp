<?php
$this->assign('title', __('Project: Frannca'));
?>
<style type="text/css">
    .mdlc-divider {
        border-top: 1px solid rgba(0,0,0,0.1);
    }

    .mdlc-color-text--gray-800 {
        color: #424242 !important;
    }

    .mdlc-card__supporting-text-full {
        width: initial;
    }

    .mdlc-card__space-80 {
        padding: 80px;
        width: initial;
    }

    .mdl-grid__bottom-space {
        margin-bottom: 60px;
    }
</style>

<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col mdl-typography--text-center">
        <h2 class="mdl-typography--display-3"><?= __('Project') ?></h2>
    </div>
</div>

<div class="mdl-grid mdl-grid__bottom-space">
    <div class="mdl-cell mdl-cell--3-col mdl-cell--1-col-tablet mdl-cell--hide-phone"></div>
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
        <!-- Project title -->
        <div class="mdl-card__supporting-text mdl-typography--text-center mdlc-card__supporting-text-full mdlc-color-text--gray-800">
            <h3><?= __('Frannca') ?></h3>
            <h4><?= __('Programming is an art') ?></h4>
        </div>
        <span class="mdlc-divider"></span>
        <div class="mdl-card__supporting-text mdlc-card__space-80 mdlc-color-text--gray-800">
            <h4><?= __('Resume') ?></h4>
            <p><?= __('Frannca is a professional website that exposes the projects of web developer Renato França. Was designed to be simple and clean.') ?></p>

            <h4><?= __('Technologies') ?></h4>
            <p>CakePHP</p>
            <p>Material Design Lite</p>
            <p>Composer</p>
            <p>Bower</p>
            <p>Gulp</p>
        </div>
    </div>
</div>
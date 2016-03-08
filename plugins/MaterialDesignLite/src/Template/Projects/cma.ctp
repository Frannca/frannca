<?php 
// Title
$this->assign('title', __('Project: CMA'));
// Meta Description
$this->append('meta', $this->Html->meta("description", __('We develop our own website and provide its source code on GitHub.')));
?>

<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col mdl-typography--text-center">
        <h2 class="mdl-typography--display-3"><?= __('Project') ?></h2>
    </div>
</div>

<div class="mdlc-ribbon mdlc-ribbon-cma"></div>

<div class="mdlc-ribbon-grid">
    <div class="mdl-grid mdlc-grid__bottom-space">
        <div class="mdl-cell mdl-cell--3-col mdl-cell--1-col-tablet mdl-cell--hide-phone"></div>
        <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
            <!-- Project title -->
            <div class="mdl-card__supporting-text mdl-typography--text-center mdlc-card__supporting-text-full mdlc-color-text--gray-800">
                <h3><?= __('CMA') ?></h3>
                <h4><?= __('Colégio Monsenhor Adelmar da Mota Valença') ?></h4>
            </div>
            <span class="mdlc-divider"></span>
            <div class="mdl-card__supporting-text mdlc-card__space-80 mdlc-color-text--gray-800">
                <h4><?= __('Description') ?></h4>
                <p><?= __('Founded in the city of Garanhuns in 1956 by Monsignor Adelmar Mota Valencia, the CMA is an educational institution that extols education in Garanhuns.') ?></p>

                <h4><?= __('Technologies') ?></h4>
                <p><?= __('Learn about the technologies used in this project.') ?></p>
                <ul class="mdlc-card__list">
                    <li>Bower</li>
                    <li>CakePHP</li>
                    <li>Composer</li>
                    <li>Gulp</li>
                    <li>Materialize</li>
                </ul>
            </div>
            <div class="mdl-card__menu"></div>
        </div>
        <!-- Tooltips -->
        <div class="mdl-tooltip mdl-tooltip--large" for="tt-get-code"><?= __('Get code on GitHub') ?></div>
    </div>
</div>
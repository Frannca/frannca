<?php $this->assign('title', __('Project: Frannca')); ?>

<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col mdl-typography--text-center">
        <h2 class="mdl-typography--display-3"><?= __('Project') ?></h2>
    </div>
</div>

<div class="mdlc-ribbon mdlc-ribbon-frannca"></div>

<div class="mdlc-ribbon-grid">
    <div class="mdl-grid mdlc-grid__bottom-space">
        <div class="mdl-cell mdl-cell--3-col mdl-cell--1-col-tablet mdl-cell--hide-phone"></div>
        <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
            <!-- Project title -->
            <div class="mdl-card__supporting-text mdl-typography--text-center mdlc-card__supporting-text-full mdlc-color-text--gray-800">
                <h3><?= __('Frannca') ?></h3>
                <h4><?= __('Solutions for your business') ?></h4>
            </div>
            <span class="mdlc-divider"></span>
            <div class="mdl-card__supporting-text mdlc-card__space-80 mdlc-color-text--gray-800">
                <h4><?= __('Description') ?></h4>
                <p><?= __('We develop our own website and provide its source code on GitHub. Feel free to check the quality of our work that goes beyond the visual.') ?></p>

                <h4><?= __('Technologies') ?></h4>
                <p><?= __('Learn about the technologies used in this project.') ?></p>
                <ul class="mdlc-card__list">
                    <li>Bower</li>
                    <li>CakePHP</li>
                    <li>Composer</li>
                    <li>Gulp</li>
                    <li>Material Design Lite</li>
                </ul>
            </div>
            <div class="mdl-card__menu">
                <?= $this->Html->link('<i class="fa fa-code"></i>', 'https://github.com/Frannca/frannca.com', ['id' => 'tt-get-code', 'class' => 'mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect', 'escape' => false]); ?>
            </div>
        </div>
        <!-- Tooltips -->
        <div class="mdl-tooltip mdl-tooltip--large" for="tt-get-code"><?= __('Get code on GitHub') ?></div>
    </div>
</div>
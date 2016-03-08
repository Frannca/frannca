<?php 
// Title
$this->assign('title', __('Frannca'));
// Meta Description
$this->append('meta', $this->Html->meta("description", __('Frannca develops solutions for your business.')));
?>
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col mdl-typography--text-center">
        <h2 class="mdl-typography--display-3"><?= __('Solutions for your business') ?></h2>
        <h3 class="mdl-typography--headline-2"><?= __('See some of our works') ?></h3>
    </div>
</div>

<div class="mdl-grid">
    <!-- CMA project div -->
    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
        <div class="mdlc-project-card mdl-card mdl-shadow--2dp">
            <!-- Project title -->
            <div class="mdl-card__title mdl-card__title-cma mdlc-card__title-no-space">
                <h2 class="mdl-card__title-text mdl-color-text--primary-contrast mdlc-card__title-caption"><?= __('CMA') ?></h2>
            </div>
            <!-- Project description -->
            <div class="mdl-card__supporting-text">
                <?= __('CMA college.') ?>
            </div>
            <!-- More details link -->
            <div class="mdl-card__actions mdl-card--border">
                <?= $this->Html->link(__('More Details'), '/projects/cma', ['class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect']); ?>
            </div>
        </div>
    </div>
    <!-- AESGA project div -->
    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
        <div class="mdlc-project-card mdl-card mdl-shadow--2dp">
            <!-- Project title -->
            <div class="mdl-card__title mdl-card__title-aesga mdlc-card__title-no-space">
                <h2 class="mdl-card__title-text mdl-color-text--primary-contrast mdlc-card__title-caption"><?= __('AESGA') ?></h2>
            </div>
            <!-- Project description -->
            <div class="mdl-card__supporting-text">
                <?= __('AESGA university.') ?>
            </div>
            <!-- More details link -->
            <div class="mdl-card__actions mdl-card--border">
                <?= $this->Html->link(__('More Details'), '/projects/aesga', ['class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect']); ?>
            </div>
        </div>
    </div>
    <!-- CESPA project div -->
    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
        <div class="mdlc-project-card mdl-card mdl-shadow--2dp">
            <!-- Project title -->
            <div class="mdl-card__title mdl-card__title-cespa mdlc-card__title-no-space">
                <h2 class="mdl-card__title-text mdl-color-text--primary-contrast mdlc-card__title-caption"><?= __('CESPA') ?></h2>
            </div>
            <!-- Project description -->
            <div class="mdl-card__supporting-text">
                <?= __('Entrance exam of AESGA university.') ?>
            </div>
            <!-- More details link -->
            <div class="mdl-card__actions mdl-card--border">
                <?= $this->Html->link(__('More Details'), '/projects/cespa', ['class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect']); ?>
            </div>
        </div>
    </div>
    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--hide-phone"></div>
    <!-- Frannca project div -->
    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
        <div class="mdlc-project-card mdl-card mdl-shadow--2dp">
            <!-- Project title -->
            <div class="mdl-card__title mdl-card__title-frannca mdlc-card__title-no-space">
                <h2 class="mdl-card__title-text mdl-color-text--primary-contrast mdlc-card__title-caption">Frannca</h2>
            </div>
            <!-- Project description -->
            <div class="mdl-card__supporting-text">
                <?= __('Frannca company.') ?>
            </div>
            <!-- More details link -->
            <div class="mdl-card__actions mdl-card--border">
                <?= $this->Html->link(__('More Details'), '/projects/frannca', ['class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect']); ?>
            </div>
            <!-- GitHub icon link -->
            <div class="mdl-card__menu mdl-color-text--primary-contrast">
                <?= $this->Html->link('<i class="fa fa-code"></i>', 'https://github.com/Frannca/frannca.com', ['id' => 'tt-get-code', 'class' => 'mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect', 'escape' => false]); ?>
            </div>
        </div>
        <!-- Tooltips -->
        <div class="mdl-tooltip mdl-tooltip--large" for="tt-get-code"><?= __('Get code on GitHub') ?></div>
    </div>
</div>
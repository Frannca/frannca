<?php 
// Title
$this->assign('title', __('Frannca'));
// Meta Description
$this->append('meta', $this->Html->meta("description", "Frannca develops solutions for your business."));
?>
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
        <div class="mdlc-project-card mdl-card mdl-shadow--2dp">
            <!-- Project title -->
            <div class="mdl-card__title mdl-card__title-frannca mdlc-card__title-no-space">
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
            <div class="mdl-card__menu mdl-color-text--primary-contrast">
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
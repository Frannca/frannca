<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $siteName ?><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->css('all.min.css') ?>
    <?= $this->Html->script('all.js') ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <?= $this->Html->link(
                    __('Frannca'),
                    '/',
                    ['class' => 'mdl-layout-title']
                ); ?>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <!-- GitHub follow button -->
                    <a class="github-button" href="https://github.com/RenatoFranca" data-style="mega" aria-label="<?= __('Follow @RenatoFranca on GitHub') ?>"><?= __('Follow @RenatoFranca') ?></a>
                    <?= $this->Html->link(
                        __('About'),
                        '/pages/about',
                        ['class' => 'mdl-navigation__link']
                    ); ?>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <?= $this->Html->link(
                __('Frannca'),
                '/',
                ['class' => 'mdl-layout-title']
            ); ?>
            <nav class="mdl-navigation">
                <?= $this->Html->link(
                    __('About'),
                    '/pages/about',
                    ['class' => 'mdl-navigation__link']
                ); ?>
                <!-- GitHub follow button -->
                <span class="github-button">
                    <a class="github-button mdl-navigation__link" href="https://github.com/RenatoFranca" aria-label="<?= __('Follow @RenatoFranca on GitHub') ?>"><?= __('Follow @RenatoFranca') ?></a>
                </span>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </main>
    </div>
    <!-- Place this tag right after the last button or just before your close body tag. -->
    <script async defer id="github-bjs" src="https://buttons.github.io/buttons.js"></script>

</body>
</html>
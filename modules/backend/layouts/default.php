<?php
    use Backend\Models\BrandSetting;
    $navbarMode = BrandSetting::get('menu_mode', BrandSetting::MENU_INLINE);
?>
<!DOCTYPE html>
<html lang="<?= App::getLocale() ?>" class="no-js <?= $this->makeLayoutPartial('browser_detector') ?> <?= $this->makeLayoutPartial('touch_detector') ?>" data-bs-theme="<?= e(Backend\Models\BrandSetting::getColorMode()) ?>">
    <head>
        <?= $this->makeLayoutPartial('head') ?>
        <?= $this->fireViewEvent('backend.layout.extendHead', ['default']) ?>
    </head>
    <body class="<?= $this->bodyClass ?> <?php if ($navbarMode === BrandSetting::MENU_LEFT): ?>main-menu-left<?php endif ?>">
        <div id="layout-canvas">
            <div class="layout">
                <div class="layout-row">
                    <div class="layout-cell left-side-menu-container">
                        <div class="layout-mainmenu" id="layout-mainmenu-left">
                            <?= $this->makeLayoutPartial('mainmenu', ['isVerticalMenu' => true]) ?>
                        </div>
                    </div>

                    <div class="layout-cell">
                        <div class="layout">
                            <?php if ($bannerAreaContent = Block::placeholder('banner-area')): ?>
                                <!-- Banner Area -->
                                <div class="layout-row min-size" id="layout-banner-area">
                                    <?= $bannerAreaContent ?>
                                </div>
                            <?php endif ?>

                            <!-- Main Menu -->
                            <?php if (!isset($hideMainMenu)): ?>
                                <div class="layout-row min-size layout-mainmenu" id="layout-mainmenu">
                                    <?= $this->makeLayoutPartial('mainmenu') ?>
                                </div>
                            <?php endif ?>

                            <div class="layout-row min-size secondary-nav" id="layout-sidenav-responsive">
                                <?= $this->makeLayoutPartial('sidenav-responsive') ?>
                            </div>

                            <?php $flyoutContent = Block::placeholder('sidepanel-flyout') ?>

                            <div class="layout-row">
                                <div class="layout flyout-container"
                                    <?php if ($flyoutContent): ?>
                                        data-control="flyout"
                                        data-flyout-width="400"
                                        data-flyout-toggle="#layout-sidenav"
                                    <?php endif ?>
                                >
                                    <?php if ($flyoutContent): ?>
                                        <div class="layout-cell flyout"> <?= $flyoutContent ?></div>
                                    <?php endif ?>

                                    <!-- Side Navigation -->
                                    <?= $this->makeLayoutPartial('sidenav') ?>

                                    <!-- Side panel -->
                                    <?php if ($sidePanelContent = Block::placeholder('sidepanel')): ?>
                                        <div class="layout-cell w-350 hide-on-small" id="layout-side-panel" data-control="layout-sidepanel">
                                            <?= $sidePanelContent ?>
                                        </div>
                                    <?php endif ?>

                                    <!-- Content Body -->
                                    <div class="layout-cell layout-container" id="layout-body">
                                        <div class="layout-relative">

                                            <div class="layout">
                                                <?= Block::placeholder('layout-top-row') ?>

                                                <?php if ($breadcrumbContent = Block::placeholder('breadcrumb')): ?>
                                                    <!-- Breadcrumb -->
                                                    <nav class="control-breadcrumb">
                                                        <?= $breadcrumbContent ?>
                                                    </nav>
                                                <?php endif ?>

                                                <!-- Content -->
                                                <div class="layout-row">
                                                    <?= Block::placeholder('body') ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Flash Messages -->
        <div id="layout-flash-messages"><?= $this->makeLayoutPartial('flash_messages') ?></div>

        <?= $this->makeLayoutPartial('mainmenu_responsive') ?>
        <?= $this->makeLayoutPartial('vue_templates') ?>
    </body>
</html>

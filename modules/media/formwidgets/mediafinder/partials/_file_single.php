<div
    id="<?= $this->getId() ?>"
    class="field-mediafinder is-file is-single <?= $singleFile ? 'is-populated' : '' ?> <?= $this->previewMode ? 'is-preview' : '' ?>"
    data-control="mediafinder"
    data-template="#<?= $this->getId('template') ?>"
    data-input-name="<?= $field->getName() ?>"
    <?php if ($externalToolbarAppState): ?>data-external-toolbar-app-state="<?= e($externalToolbarAppState)?>"<?php endif ?>
    <?php if ($externalToolbarEventBus): ?>data-external-toolbar-event-bus="<?= e($externalToolbarEventBus)?>"<?php endif ?>
    <?= $field->getAttributes() ?>
>
    <div class="empty-state">
        <img src="<?= Url::asset('/modules/backend/assets/images/no-files.svg') ?>"/>
    </div>

    <div class="mediafinder-control-container <?= $externalToolbarAppState ? 'external-toolbar' : null ?>">
        <div class="mediafinder-control-toolbar">
            <a href="javascript:;" class="backend-toolbar-button control-button toolbar-find-button">
                <i class="octo-icon-common-file-star"></i>
                <span class="button-label"><?= $singleFile ? __("Replace") : __("Select") ?></span>
            </a>

            <button
                class="backend-toolbar-button control-button find-remove-button populated-only"
            >
                <i class="octo-icon-common-file-remove"></i>
                <span class="button-label"><?= __("Clear") ?></span>
            </button>
        </div>

        <!-- Existing file -->
        <div class="mediafinder-files-container">
            <div class="server-file"
                data-public-url="<?= e($singleFile->publicUrl ?? '') ?>"
                data-path="<?= e($singleFile->path ?? '') ?>"
                data-title="<?= e($singleFile->title ?? '') ?>"
            ></div>
        </div>
    </div>

    <!-- Data locker -->
    <div id="<?= $field->getId() ?>" data-data-locker>
        <input
            type="hidden"
            name="<?= $field->getName() ?>"
            value="<?= $singleFile ? e($singleFile->path) : '' ?>"
            />
    </div>
</div>

<?= $this->makePartial('file_item_template') ?>

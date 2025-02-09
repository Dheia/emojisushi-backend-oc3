<?php namespace Tailor\Controllers;

use Backend;
use BackendMenu;
use Tailor\Classes\Blueprint;
use Tailor\Classes\BlueprintIndexer;
use Backend\Classes\WildcardController;
use ForbiddenException;
use NotFoundException;

/**
 * EntriesBulk controller
 *
 * @package october\tailor
 * @author Alexey Bobkov, Samuel Georges
 */
class EntriesBulk extends WildcardController
{
    /**
     * @var array implement extensions
     */
    public $implement = [
        \Backend\Behaviors\ImportExportController::class,
    ];

    /**
     * @var string importExportConfig is `ImportExportController` configuration.
     */
    public $importExportConfig = 'config_import_export.yaml';

    /**
     * @var Blueprint activeSource
     */
    protected $activeSource;

    /**
     * @var string actionMethod is the action method to call
     */
    protected $actionMethod;

    /**
     * beforeDisplay
     */
    public function beforeDisplay()
    {
        // Pop off first parameter as source handle
        $sourceHandle = array_shift($this->params);
        $this->makeBlueprintSource($sourceHandle);

        $validMethods = ['export', 'import', 'download'];
        $slug = $this->params[0] ?? null;

        if (in_array($slug, $validMethods)) {
            // Pop second parameter as action method
            $actionMethod = array_shift($this->params);

            $this->actionMethod = $this->actionView = $actionMethod;
        }

        if (!$this->activeSource) {
            throw new NotFoundException;
        }

        $this->checkSourcePermission();

        $this->setNavigationContext();
    }

    /**
     * index action
     */
    public function index()
    {
        if ($this->hasFatalError()) {
            return;
        }

        if ($this->actionMethod) {
            return $this->{$this->actionMethod}(...$this->params);
        }

        return Backend::redirect('tailor/entries/'.$this->activeSource->handleSlug);
    }

    /**
     * actionUrl returns a URL for this controller and supplied action.
     */
    public function actionUrl($action = null, $path = null)
    {
        $url = 'tailor/entriesbulk/'.$this->activeSource->handleSlug.'/'.$action;
        if ($path) {
            $url .= '/'.$path;
        }

        return Backend::url($url);
    }

    /**
     * importExportExtendModel
     */
    public function importExportExtendModel($model)
    {
        $model->setBlueprintUuid($this->activeSource->uuid);

        return $model;
    }

    /**
     * importExportGetFileName
     */
    public function importExportGetFileName()
    {
        return $this->activeSource->handleSlug;
    }

    /**
     * makeBlueprintSource
     */
    protected function makeBlueprintSource($activeSource = null): void
    {
        $this->activeSource = $activeSource
            ? BlueprintIndexer::instance()->findSectionByHandle($activeSource)
            : null;
    }

    /**
     * checkSourcePermission
     */
    protected function checkSourcePermission()
    {
        if (!$this->user->hasAccess($this->activeSource->getPermissionCodeName())) {
            throw new ForbiddenException;
        }
    }

    /**
     * setNavigationContext
     */
    protected function setNavigationContext()
    {
        $item = BlueprintIndexer::instance()->findSecondaryNavigation($this->activeSource->uuid);
        if ($item) {
            $item->setBackendControllerContext();
        }
        else {
            BackendMenu::setContext('October.Tailor', 'tailor');
        }
    }
}

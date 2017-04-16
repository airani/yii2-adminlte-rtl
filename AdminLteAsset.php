<?php
namespace airani;

/**
 * AdminLte AssetBundle
 * @author Ali Irani <ali@irani.im>
 */
class AdminLteAsset extends \dmstr\web\AdminLteAsset
{
    public $css = [];

    public function init()
    {
        $this->skin = false;

        parent::init();
    }
}

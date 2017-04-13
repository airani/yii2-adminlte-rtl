<?php
namespace airani;

use yii\web\AssetBundle;

/**
 * AdminLteRtl AssetBundle
 * @author Ali Irani <ali@irani.im>
 */
class AdminLteRtlAsset extends AssetBundle
{
    public $sourcePath = '@bower/adminlte_rtl';

    public $css = [
        'dist/css/AdminLTE-rtl.min.css',
        'dist/css/skins/_all-skins-rtl.min.css',
    ];

    public $depends = [
        'airani\bootstrap\BootstrapRtlAsset',
        'dmstr\web\AdminLteAsset',
    ];
}

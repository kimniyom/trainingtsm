<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'lib/DataTables/DataTables-1.10.18/css/dataTables.bootstrap.min.css',
        'lib/DataTables/Buttons-1.5.2/css/buttons.dataTables.min.css',
        'lib/DataTables/Buttons-1.5.2/css/buttons.bootstrap.min.css',
    ];
    public $js = [
        'lib/DataTables/datatables.min.js',
        'lib/DataTables/DataTables-1.10.18/js/dataTables.bootstrap.min.js',
        'lib/DataTables/Buttons-1.5.2/js/buttons.bootstrap.min.js',
        'lib/DataTables/Buttons-1.5.2/js/dataTables.buttons.min.js',
        'lib/DataTables/Buttons-1.5.2/js/jszip.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

<?php

namespace dkhlystov\widgets\assets;

use yii\web\AssetBundle;

class ArrayInputAsset extends AssetBundle
{

    public $js = [
        'array-input' . (YII_DEBUG ? '' : '.min') . '.js',
    ];

    public $css = [
        'array-input' . (YII_DEBUG ? '' : '.min') . '.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/array-input';
    }

}

<?php
/**
 * BowerFreeAssetBundle.php
 * @author Revin Roman
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\fontawesome;

/**
 * Class BowerFreeAssetBundle
 * @package rmrevin\yii\fontawesome
 */
class BowerFreeAssetBundle extends \yii\web\AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/font-awesome';

    /**
     * @inherit
     */
    public $css = [
        'css/all.min.css',
    ];

    /**
     * @inherit
     */
    public $publishOptions = [
        'only' => [
            'css/*',
            'webfonts/*',
        ],
    ];
}

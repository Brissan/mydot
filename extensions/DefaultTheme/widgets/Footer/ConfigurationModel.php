<?php

namespace app\web\theme\extensions\DefaultTheme\widgets\Footer;

use app\web\theme\extensions\DefaultTheme\models\WidgetConfigurationModel;

class ConfigurationModel extends WidgetConfigurationModel
{
    public $rootNavigationId = 1;


    /**
     * @inheritdoc
     */
    public function thisRules()
    {
        return [
            [
                [
                    'rootNavigationId',
                ],
                'integer',
            ],
            [
                [
                    'rootNavigationId',
                ],
                'filter',
                'filter' => 'intval',
            ],
        ];
    }
}
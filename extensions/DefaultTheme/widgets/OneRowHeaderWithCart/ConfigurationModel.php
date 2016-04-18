<?php

namespace app\web\theme\extensions\DefaultTheme\widgets\OneRowHeaderWithCart;

use app\web\theme\extensions\DefaultTheme\models\WidgetConfigurationModel;

class ConfigurationModel extends WidgetConfigurationModel
{
    public $collapseOnSmallScreen = true;

    /**
     * @inheritdoc
     */
    public function thisRules()
    {
        return [
            [
                [
                    'collapseOnSmallScreen',
                ],
                'boolean',
            ],
            [
                [
                    'collapseOnSmallScreen',
                ],
                'filter',
                'filter' => 'boolval',
            ],
        ];
    }
}
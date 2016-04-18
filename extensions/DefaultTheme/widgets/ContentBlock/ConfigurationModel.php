<?php

namespace app\web\theme\extensions\DefaultTheme\widgets\ContentBlock;

use app\web\theme\extensions\DefaultTheme\models\WidgetConfigurationModel;

class ConfigurationModel extends WidgetConfigurationModel
{
    public $key = '';


    /**
     * @inheritdoc
     */
    public function thisRules()
    {
        return [
            [
                [
                    'key',
                ],
                'required',
            ],
        ];
    }
}
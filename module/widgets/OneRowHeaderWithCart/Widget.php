<?php

namespace app\web\theme\module\widgets\OneRowHeaderWithCart;

use Yii;
use app\web\theme\module\assets\BootstrapHoverDropdown;
use app\web\theme\module\components\BaseWidget;
use app\modules\shop\models\Order;
use yii\helpers\ArrayHelper;

class Widget extends BaseWidget
{
    public $collapseOnSmallScreen = true;
    /**
     * Actual run function for all widget classes extending BaseWidget
     *
     * @return mixed
     */
    public function widgetRun()
    {
        // this header needs this plugin
        //BootstrapHoverDropdown::register($this->view);

        $order = Order::getOrder(false);

        return $this->render(
            'header',
            [
                'order' => $order,
                'collapseOnSmallScreen' => $this->collapseOnSmallScreen,
            ]
        );
    }

    public function getCacheTags()
    {
        $tags = ArrayHelper::merge(parent::getCacheTags(), [
            'Session:'.Yii::$app->session->id,
        ]);
        return $tags;
    }
}
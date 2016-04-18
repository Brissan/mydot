<?php
/** @var null|\yii\base\Model $configurationModel */
/** @var \app\web\theme\extensions\DefaultTheme\models\ThemeWidgets $widget */
/** @var boolean $isAjax */
/** @var \yii\web\View $this */
/** @var \app\web\theme\extensions\DefaultTheme\models\ThemeActiveWidgets $model */
/** @var \kartik\widgets\ActiveForm $form */

?>
<?= $form->field(
    $configurationModel,
    'collapseOnSmallScreen'
)->checkbox() ?>

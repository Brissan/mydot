<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\icons\Icon;
use app\modules\shop\models\Wishlist;
/** @var yii\web\View $this */
/**
 * @var \app\modules\shop\models\Order $order
 */
/** @var bool $collapseOnSmallScreen */
/** @var bool $useFontAwesome */
/** @var \app\web\theme\module\Module $theme */

$mainCurrency = \app\modules\shop\models\Currency::getMainCurrency();
if (is_null($order)) {
    $itemsCount = 0;
} else {
    $itemsCount = $order->items_count;
}

$navStyles = '';

?>


<header>
            <div class="header-top">
                <div class="container">
                    <div class="header-container">
                        <div class="row">
                            <div class="col-md-6 col-sm-7">
                                <div class="header-contact">
                                    <span class="email">Email: admin@bootexperts.com </span> / <span class="phone">Phone: +234.546.657</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="currency-language">
                                    <div class="currency-menu">
                                        <ul>
                                            <li><a href="#">USD <i class="fa fa-angle-down"></i></a>
                                                <ul class="currency-dropdown">
                                                    <li><a href="#">EUR</a></li>
                                                    <li><a href="#">USD</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="language-menu">
                                        <ul>
                                            <li><a href="#">English <i class="fa fa-angle-down"></i></a>
                                                <ul class="language-dropdown">
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">German</a></li>
                                                    <li><a href="#">Arabic</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="account-menu">
            <?php if (Yii::$app->user->isGuest === true): ?>

                <a href="<?= \yii\helpers\Url::toRoute(['/user/user/signup']) ?>" class="btn btn-signup hidden-xs">
                    <?= Yii::t('app', 'Sign up') ?>
                </a>
                <a href="<?= \yii\helpers\Url::toRoute(['/user/user/login']) ?>" class="btn btn-login">
                    <?= Yii::t('app', 'Login') ?>
                </a>
            
            <?php else: ?>
                                        <ul>
                                            <li><a href="<?= \yii\helpers\Url::toRoute(['/shop/cabinet']) ?>"><?= Html::encode(Yii::$app->user->identity->username) ?> <i class="fa fa-angle-down"></i></a>                    
                    <?= \yii\widgets\Menu::widget([
                        'items' => [
                            [
                                'label' => Yii::t('app', 'User profile'),
                                'url' => ['/user/user/profile'],
                                [
                                    'class' => 'user-profile-link',
                                ]
                            ],
                            [
                                'label' => Yii::t('app', 'Personal cabinet'),
                                'url' => ['/shop/cabinet'],
                                [
                                    'class' => 'shop-cabinet-link',
                                ]
                            ],
                            [
                                'label' => Yii::t('app', 'Orders list'),
                                'url' => ['/shop/orders/list'],
                                [
                                    'class' => 'shop-orders-list',
                                ]
                            ],
                            [
                                'label' => Yii::t('app', 'Logout'),
                                'url' => ['/user/user/logout'],
                                [
                                    'data-action' => 'post',
                                    'class' => 'logout-link',
                                ],
                            ]
                        ],
                        'options' => [
                            'class' => 'account-dropdown',
                        ],
                    ]) ?>                                               
                                                
                                                
                                            </li>
                                        </ul>
            <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="header-main">
                <div class="container">
                    <div class="header-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="logo">
                                    <a href="index.html"><img src="<?= Html::encode($theme->logotypePath) ?>" alt="<?= Html::encode($theme->siteName) ?>"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8">
                                <div id="search-category">
                                    <form class="search-box" action="#" method="post">

                                        <?= Html::beginForm('search', 'get', ['class' => 'search-box']) ?>
                                        <?= Html::input('text', 'Search[q]', null, ['id'=> 'text-search']); ?>
                                        <?= Html::submitButton('<i class="icon-search"></i>', ['id' => 'btn-search-category']); ?>
                                        <?= Html::endForm() ?>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <ul class="header-r-cart">
                                    <li><a class="cart" href="<?= \yii\helpers\Url::toRoute(['/shop/cart']) ?>">В корзине:<?= $itemsCount ?> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <!--Mainmenu Start-->
            <div class="mainmenu-area hidden-sm hidden-xs">
                <div id="sticker"> 
                    <div class="container">
                        <div class="row">   
                            <div class="col-lg-12 col-md-12 hidden-sm">
                                <div class="mainmenu">
                                    <nav>
            <?=
            \app\widgets\navigation\NavigationWidget::widget([
                'options' => [
                            'id' => 'nav',
                ]

            ])
            ?>
                                    </nav>
                                </div>        
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
</header>          
<?php

if (Yii::$app->user->isGuest === false) {
    $js = <<<JS
$('.link-cabinet').dropdownHover();
JS;
    $this->registerJs($js);

}
<?php

use app\assets\MainAsset;
use yii\widgets\Breadcrumbs;
use mauriziocingolani\yii2fmwkphp\Html;
use kartik\social\GoogleAnalytics;
use cinghie\cookieconsent\widgets\CookieWidget;

/* @var $this mauriziocingolani\yii2fmwkphp\View */
/* @var $content string */

MainAsset::register($this);
?>

<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <title><?= Html::encode($this->title); ?></title>
        <?= Html::csrfMetaTags(); ?>
        <?php $this->registerMetaTag(['charset' => Yii::$app->charset]); ?>
        <?php $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']); ?>
        <?php $this->registerMetaTag(['name' => 'description', 'content' => $this->pageDescription]); ?>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <?php $this->head(); ?>
    </head>

    <body>
        <?php $this->beginBody(); ?>

        <div class="content">
            <?= $content ?>
        </div>

        <?php $this->endBody(); ?>
    </body>

    <!-- GOOGLE ANALYTICS -->
    <?php # echo GoogleAnalytics::widget([]); ?>

</html>
<?php $this->endPage(); ?>
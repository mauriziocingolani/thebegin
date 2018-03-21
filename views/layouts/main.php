<?php

use mauriziocingolani\yii2fmwkphp\Html;

/* @var $this mauriziocingolani\yii2fmwkphp\View */
/* @var $content string */
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

        <?php $this->head(); ?>
    </head>

    <body id="page-top">
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
<?php
use app\widgets\MultiLang;
use yii\helpers\Html;

?>
<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="uppercase"><?=Html::img('/img/flags/'.Yii::$app->language.'.png', ['width'=>'20']) ?><?= '&nbsp;'.strtoupper(Yii::$app->language); ?></span>
    <span class="caret"></span>
</a>
<ul class="dropdown-menu" style="position: absolute; top: 40px; left: 0px;">
    <li class="item-lang">
    <li class="item-lang" style="margin-left: 10px">
        <?= Html::a(Html::img('/img/flags/en.png', ['width'=>'20']). ' EN', array_merge(
            \Yii::$app->request->get(),
            ['language' => 'en']
        )); ?>
    </li>
    <li class="item-lang" style="margin-left: 10px">
        <?= Html::a(Html::img('/img/flags/uz.png', ['width'=>'20']). ' UZ', array_merge(
            \Yii::$app->request->get(),
            ['language' => 'uz']
        )); ?>
    </li>
    <li class="item-lang" style="margin-left: 10px">
        <?= Html::a(Html::img('/img/flags/ru.png', ['width'=>'20']). ' RU', array_merge(
            \Yii::$app->request->get(),
            ['language' => 'ru']
        )); ?>
    </li>
</ul>

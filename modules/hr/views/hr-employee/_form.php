<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\hr\models\HrEmployee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hr-employee-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-3">
            <?= $form->field($model, 'fish', [
            'options' => ['class' => 'form-group has-feedback'],
        ])->textInput() ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'of_brith', [
            'options' => ['class' => 'form-group has-feedback'],
        ])->textInput() ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'passport_series', [
            'options' => ['class' => 'form-group has-feedback'],
        ])->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'phone', [
            'options' => ['class' => 'form-group has-feedback'],
        ])->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'inn', [
            'options' => ['class' => 'form-group has-feedback'],
        ])->textInput() ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'jins', [
            'options' => ['class' => 'form-group has-feedback'],
        ])->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'adress', [
            'options' => ['class' => 'form-group has-feedback'],
        ])->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'by_whom', [
            'options' => ['class' => 'form-group has-feedback'],
        ])->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($model, 'add_info', [
            'options' => ['class' => 'form-group has-feedback'],
        ])->textarea(['rows' => 2]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

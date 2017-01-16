<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model andahrm\setting\models\LocalTambol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="local-tambol-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'peaple')->textInput() ?>

    <?= $form->field($model, 'post')->textInput() ?>

    <?= $form->field($model, 'amphur_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('andahrm/person', 'Create') : Yii::t('andahrm/person', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

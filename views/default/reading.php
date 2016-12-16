<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model anda\cms\models\Setting */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$this->title = ucfirst($this->context->action->id);
$this->params['breadcrumbs'][] = ['label' => ucfirst($this->context->module->id), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$this->title = ucfirst($this->context->action->id);
?>

<div class="setting-form">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
        'fieldConfig' => [
            'horizontalCssClasses' => [
                'label' => 'col-sm-3',
                'wrapper' => 'col-sm-9',
            ],
        ],
    ]); ?>


    <?= $form->field($model, 'page_size')->input('number') ?>

    <div class="col-sm-9 col-sm-offset-3">
        <?= Html::submitButton('<i class="fa fa-check"></i> '.Yii::t('andahrm', 'Apply'), ['class' => 'btn btn-primary']) ?>
        <?= Html::button('<i class="fa fa-retweet"></i> '.Yii::t('andahrm', 'Reset'), ['type'=>'reset', 'class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
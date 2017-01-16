<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model andahrm\setting\models\LocalAmphur */

$this->title = Yii::t('andahrm/person', 'Update {modelClass}: ', [
    'modelClass' => 'Local Amphur',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('andahrm/person', 'Local Amphurs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('andahrm/person', 'Update');
?>
<div class="local-amphur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

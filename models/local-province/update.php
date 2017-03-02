<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model andahrm\setting\models\LocalProvince */

$this->title = Yii::t('andahrm', 'Update {modelClass}: ', [
    'modelClass' => 'Local Province',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('andahrm/person', 'Local Provinces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('andahrm', 'Update');
?>
<div class="local-province-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model andahrm\setting\models\LocalAmphur */

$this->title = Yii::t('andahrm/person', 'Create Local Amphur');
$this->params['breadcrumbs'][] = ['label' => Yii::t('andahrm/person', 'Local Amphurs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="local-amphur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

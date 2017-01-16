<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model andahrm\setting\models\LocalRegion */

$this->title = Yii::t('andahrm/person', 'Create Local Region');
$this->params['breadcrumbs'][] = ['label' => Yii::t('andahrm/person', 'Local Regions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="local-region-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

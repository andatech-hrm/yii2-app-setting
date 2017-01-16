<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model andahrm\setting\models\LocalProvince */

$this->title = Yii::t('andahrm/person', 'Create Local Province');
$this->params['breadcrumbs'][] = ['label' => Yii::t('andahrm/person', 'Local Provinces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="local-province-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

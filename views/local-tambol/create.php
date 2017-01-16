<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model andahrm\setting\models\LocalTambol */

$this->title = Yii::t('andahrm/person', 'Create Local Tambol');
$this->params['breadcrumbs'][] = ['label' => Yii::t('andahrm/person', 'Local Tambols'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="local-tambol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

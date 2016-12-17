<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model andahrm\setting\models\Translate */

$this->title = 'Create Translate';
$this->params['breadcrumbs'][] = ['label' => 'Translates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="translate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
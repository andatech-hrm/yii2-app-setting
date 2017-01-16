<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel andahrm\setting\models\LocalTambolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('andahrm/person', 'Local Tambols');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="local-tambol-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('andahrm/person', 'Create Local Tambol'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name:ntext',
            'peaple',
            'post',
            'amphur_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

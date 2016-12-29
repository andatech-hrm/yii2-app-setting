<?php
use yii\helpers\Html;
?>
<?php $this->beginContent('@app/views/layouts/main.php'); ?>
<?php
$menus = \andahrm\setting\models\Setting::getTypes();
$request = Yii::$app->request;
?>
<div class="row">
    <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
            <?php foreach ($menus as $key => $menu) : ?>
            <li<?= $this->context->action->id == $key ? ' class="active"' : ''; ?>>
                <?php $icon = (isset($menu['icon'])) ? '<i class="'.$menu['icon'].'"></i> ' : '';?>
                <?= Html::a($icon.ucfirst($menu['label']), [$key]); ?>
            </li>
            <?php endforeach; ?>
            <li><?= Html::a('<i class="fa fa-bolt" aria-hidden="true"></i> Flush Cache', ['flush-cache'])?></li>
            <li><?= Html::a('<i class="fa fa-eraser" aria-hidden="true"></i> Clear Assets', ['clear-assets'])?></li>
        </ul>
    </div>

    <div class="col-md-9">
        <div class="x_panel tile">
            <div class="x_title">
                <h2><?= $this->title; ?></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?php echo $content; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

</div>

<?php $this->endContent(); ?>

# yii2-app-setting
ระบบการตั้งค่าเว็บ


Set dataprovidor page size example
```php
$searchModel = new PersonSearch();
$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
$dataProvider->pagination->pageSize = Yii::$app->params['app-settings']['reading']['pagesize']; //See this line
```


Use widget settings
```php
use andahrm\setting\models\WidgetSettings;
//example
echo $form->field($model, 'race_id')->widget(Select2::classname(), WidgetSettings::Select2([
    'data' => ArrayHelper::map(Race::find()->all(), 'id', 'title')
]);
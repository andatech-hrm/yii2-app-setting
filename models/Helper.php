<?php

namespace andahrm\setting\models;

use Yii;

class Helper
{
    const UI_DATE_FORMAT = 'd/m/Y';
    const DB_DATE_FORMAT = 'Y-m-d';
    
    const UI_TIME_FORMAT = 'H:i:s';
    const DB_TIME_FORMAT = 'H:i:s';
    
    const UI_DATETIME_FORMAT = 'd/m/Y H:i:s';
    const DB_DATETIME_FORMAT = 'Y-m-d H:i:s';
    
    public static function urlParams($action, $arr=[])
    {
//         $params = Yii::$app->request->getQueryParams();
        $request = Yii::$app->request;
        $params['id'] = $request->get('id');
        $params['page'] = $request->get('page');
        $params['per-page'] = $request->get('per-page');
        
        return array_merge([$action], $params, $arr);
    }
}
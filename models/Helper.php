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
    
    const YEAR_TH_ADD = 543;
    
    public static function urlParams($action, $arr=[])
    {
//         $params = Yii::$app->request->getQueryParams();
        $request = Yii::$app->request;
        $params['id'] = $request->get('id');
        $params['page'] = $request->get('page');
        $params['per-page'] = $request->get('per-page');
        
        return array_merge([$action], $params, $arr);
    }
    
    /**
     * $date as string
    **/
    public static function dateUi2Db($dateString){
        $split = explode('/', $dateString);
        if(count($split) === 3){
            $thYear = intval($split[2]);
            $glYear = $thYear-self::YEAR_TH_ADD;
            $value = $glYear.'-'.$split[1].'-'.$split[0];
        }else{
            $value = null;
        }
        
        return $value;
    }
    
    
    //รับเป็น ว/ด/ป พ.ศ.
    public static function dateBuddhistFormatter($dateString)
    {
        $date = self::dateUi2Db($dateString);
        
        return Yii::$app->formatter->asDate($date);
    }
}
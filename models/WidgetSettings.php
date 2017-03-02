<?php
namespace andahrm\setting\models;
/**
* 
*/
use Yii;

class WidgetSettings
{
	public static function tinyMce($arr = [])
	{
		$settings = [
			'enableFilemanager' => true,
			'folderName' => ['file'=> 'File', 'image'=>'Image', 'media'=>'Media'],
		];

		$settings = array_replace_recursive($settings, $arr);

		return $settings;
	}
	
	

	/**
	 * 
	public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if($birthday = \DateTime::createFromFormat(Helper::UI_DATE_FORMAT, $this->birthday)) {
                $this->birthday = $birthday->format(Helper::DB_DATE_FORMAT);
            }
            return true;
        } else {
            return false;
        }
    }
    
    public function afterFind()
    {
        if($birthday = \DateTime::createFromFormat(Helper::DB_DATE_FORMAT, $this->birthday)){
            $this->birthday = $birthday->format(Helper::UI_DATE_FORMAT);
        }
    }
	 * 
	**/
	public static function DatePicker($arr = [])
	{
		$PHPFormatOptions = array('y', 'Y', 'm', 'd');
		$JSFormatOptions = array('yy', 'yyyy', 'mm', 'dd'); // and so on
		$JSFormat = str_replace($PHPFormatOptions, $JSFormatOptions, Helper::UI_DATE_FORMAT);
		$settings = [
			// 'options' => ['placeholder' => 'Select operating time ...', 'data-date-language'=>"th-th"],
			// 'type' => 3,
			// 'language'=>'th-th',
			// 'pluginOptions' => [
			// 	'autoclose' => true, 
			// 	'todayHighlight' => true,
			// 	'format' => $JSFormat,
			// ]
		];

		$settings = array_replace_recursive($settings, $arr);

		return $settings;
	}
	public static function TimePicker($arr = [])
	{
		$settings = [
			'options' => ['placeholder' => 'Select time ...'],
			'pluginOptions' => [
				'showSeconds' => true,
				'showMeridian' => false,
				'minuteStep' => 1,
				'secondStep' => 5,
			]
		];

		$settings = array_replace_recursive($settings, $arr);

		return $settings;
	}

	public static function DateTimePicker($arr = [])
	{
		$settings = [
			'options' => ['placeholder' => 'Select operating time ...'],
			'type' => 3,
			'convertFormat' => true,
			'language'=>'th',  
			'pluginOptions' => [
				'autoclose' => true, 
				'todayHighlight' => true,
				'format' => 'd/M/y H:i:s',
			]
		];

		$settings = array_replace_recursive($settings, $arr);

		return $settings;
	}

	public static function TouchSpin($arr = [])
	{
		$settings = [
			'options' => ['placeholder' => 'Adjust...'],
			'pluginOptions' => ['step' => 1]
		];

		$settings = array_replace_recursive($settings, $arr);

		return $settings;
	}

	public static function SwitchInput($arr = [])
	{
		$settings = [
			'pluginOptions' => ['size' => 'mini'],
		];

		$settings = array_replace_recursive($settings, $arr);

		return $settings;
	}



	public static function Select2($arr = [])
	{
		$settings = [
			'data' => [],
			'theme' => \kartik\select2\Select2::THEME_DEFAULT,
			'options' => ['placeholder' => 'Select ...'],
			'pluginOptions' => [
					'allowClear' => true
			],
		];

		$settings = array_replace_recursive($settings, $arr);

		return $settings;
	}

	public static function ColorInput($arr = [])
	{
		$settings = [
			'options' => ['placeholder' => 'Select color...']
		];

		$settings = array_replace_recursive($settings, $arr);

		return $settings;
	}

	public static function Typeahead($arr = [])
	{
		$settings = [
			'options' => ['placeholder' => 'Filter as you type ...'],
			'pluginOptions' => ['highlight'=>true],
			'dataset' => [
				[
					//'local' => $data,
					'limit' => 10
				]
			]
		];

		$settings = array_replace_recursive($settings, $arr);

		return $settings;
	}
}
<?php

namespace komer45\avia\models;

use Yii;

/**
 * This is the model class for table "avia_cassa".
 *
 * @property integer $id
 * @property integer $reise_number
 * @property string $date_time
 * @property string $final_distinct
 * @property integer $time_in_travel
 * @property integer $class
 * @property integer $cost
 * @property integer $places
 * @property string $dostup
 * @property integer $distinct_throught
 */
class AviaCassa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avia_cassa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reise_number', 'date_time', 'final_distinct', 'time_in_travel', 'class', 'cost', 'places', 'dostup', 'distinct_throught'], 'required'],
            [['reise_number', 'time_in_travel', 'class', 'cost', 'places', 'distinct_throught'], 'integer'],
            [['date_time'], 'safe'],
            [['dostup'], 'string'],
            [['final_distinct'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reise_number' => 'Reise Number',
            'date_time' => 'Date Time',
            'final_distinct' => 'Final Distinct',
            'time_in_travel' => 'Time In Travel',
            'class' => 'Class',
            'cost' => 'Cost',
            'places' => 'Places',
            'dostup' => 'Dostup',
            'distinct_throught' => 'Distinct Throught',
        ];
    }
}

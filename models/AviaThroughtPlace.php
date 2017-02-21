<?php

namespace komer45\avia\models;

use Yii;

/**
 * This is the model class for table "avia_throught_pace".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_time
 */
class AviaThroughtPlace extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avia_throught_pace';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_time'], 'required'],
            [['date_time'], 'safe'],
            [['name'], 'string', 'max' => 55],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date_time' => 'Date Time',
        ];
    }
}

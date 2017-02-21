<?php

namespace komer45\avia\models;

use Yii;

/**
 * This is the model class for table "avia_place".
 *
 * @property integer $id
 * @property integer $name
 */
class AviaPlace extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avia_place';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'integer'],
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
        ];
    }
}

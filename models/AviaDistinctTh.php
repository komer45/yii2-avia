<?php

namespace komer45\avia\models;

use Yii;

/**
 * This is the model class for table "avia_distinct_th".
 *
 * @property integer $id
 * @property string $name
 */
class AviaDistinctTh extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avia_distinct_th';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
        ];
    }
}

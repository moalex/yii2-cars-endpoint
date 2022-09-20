<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car_engine".
 *
 * @property int $id
 * @property string $name
 */
class CarEngine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%car_engine}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name'
        ];
    }
}

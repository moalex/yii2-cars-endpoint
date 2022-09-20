<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car_transmission".
 *
 * @property int $id
 * @property string $name
 */
class CarTransmission extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%car_transmission}}';
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

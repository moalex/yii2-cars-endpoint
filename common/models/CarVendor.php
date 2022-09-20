<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car_vendor".
 *
 * @property int $id
 * @property string $name
 */
class CarVendor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%car_vendor}}';
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

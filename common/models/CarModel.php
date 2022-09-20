<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car_model".
 *
 * @property int $id
 * @property string $name
 */
class CarModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%car_model}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['name'], 'required'],
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

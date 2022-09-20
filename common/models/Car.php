<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use common\models\CarEngine;
use common\models\CarVendor;
use common\models\CarModel;
use common\models\CarTransmission;

class Car extends ActiveRecord
{
    public $vendor;
    public static function tableName()
    {
        return '{{%car}}';
    }
    public function flat_push($input)
    {
        $name = $input[0];
        $model = CarVendor::findOne([
            'name' => $name,
        ]);
        if (!$model) {
            $model = new CarVendor();
            $model->name = $name;
            $model->save();
        }
        
        $this->car_vendor_id = $model->id;

        $name = $input[1];
        $model = CarModel::findOne([
            'name' => $name,
        ]);
        if (!$model) {
            $model = new CarModel();
            $model->name = $name;
        $model->save();
        }
        $this->car_model_id = $model->id;

                $name = $input[3];
        $model = CarEngine::findOne([
            'name' => $name,
        ]);
        if (!$model) {
            $model = new CarEngine();
            $model->name = $name;
        $model->save();
        }
        $this->car_engine_id = $model->id;
        $name = $input[4];
        $model = CarTransmission::findOne([
            'name' => $name,
        ]);
        if (!$model) {
            $model = new CarTransmission();
            $model->name = $name;
            $model->save();
        }
        $this->car_transmission_id = $model->id;

        $this->name = $input[2];
        $this->save();
        return $this;
        
    }
    public function getCar_vendor_name()
    {
        return $this->hasOne(CarVendor::className(), ['id'=> 'car_vendor_id']);
    }
    public function getCar_model_name()
    {
        return $this->hasOne(CarModel::className(), [ 'id' => 'car_model_id']);
    }
        public function getCar_engine_name()
    {
        return $this->hasOne(CarEngine::className(), ['id' => 'car_engine_id']);
    }
    public function getCar_transmission_name()
    {
        return $this->hasOne(CarTransmission::className(), ['id' => 'car_transmission_id']);
    }
    public function rules()
    {
        return [
            [['vendor'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels()
      {
        return [
          'id' => 'ID',
          'vendor' => '',
          'car_vendor_id' => 'Vendor ID',
          'car_model_id' => 'Model ID',
          'car_engine_id' => 'Engine ID',
          'car_transmission_id' => 'Transimission ID',
          'name' => 'Car Name'
        ];
      }
}

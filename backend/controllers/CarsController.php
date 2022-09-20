<?php

namespace backend\controllers;
use Yii;
use common\models\Car;
use common\models\CarEngine;
use common\models\CarVendor;
use common\models\CarModel;
use common\models\CarTransmission;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;


class CarsController extends Controller
{    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            $Token = Yii::$app->request->headers->get('Token');
                            // if ($Token != null)
                            if ($Token == null)
                                return true;

                            return false;
                        }
                    ],
                ],
            ],
        ];
    }

    public function actionIndex($prop = null, $val = null, $page = 1, $limit = 10)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (is_null($prop) || is_null($val))
            $model = Car::find()->limit($limit)->offset(($page-1)*$limit)->joinWith(['car_vendor_name', 'car_model_name', 'car_engine_name', 'car_transmission_name'])->asArray()->all();
        else
            $model = Car::find()->where(['car_'.$prop.'_id' => $val])->limit($limit)->offset(($page-1)*$limit)->joinWith(['car_vendor_name', 'car_model_name', 'car_engine_name', 'car_transmission_name'])->asArray()->all();

        $result = [];
        foreach($model as &$m){
            $m['car_vendor_name'] = $m['car_vendor_name']['name'];
            $m['car_model_name'] = $m['car_model_name']['name'];
            $m['car_engine_name'] = $m['car_engine_name']['name'];
            $m['car_transmission_name'] = $m['car_transmission_name']['name'];
        }
        return $model;
    }
}

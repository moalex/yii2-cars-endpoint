<?php

namespace console\controllers;

use Yii;
use common\models\Car;
use common\models\CarEngine;
use common\models\CarVendor;
use common\models\CarModel;
use common\models\CarTransmission;
use yii\console\ExitCode;
use yii\console\Controller;

class GenerateController extends Controller
{
    public function actionFlat()
    {
        $flat = [
                ['Lexus', 'ES', '300', 'Бензин', 'Полный'],
                ['Lexus', 'GS', '500', 'Бензин', 'Передний'],
                ['Toyota', 'Corolla', 'Sport', 'Бензин', 'Полный'],
                ['Toyota', 'Camry', '50', 'Бензин', 'Передний'],
        ];
        foreach ($flat as $entry) {

            $model = new Car();
            $model->flat_push($entry);
        }

        return ExitCode::OK;
    }

}

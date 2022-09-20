yii2-cars-endpoint
==================

```bash
curl -s "http://localhost/cars/index.php?r=cars"
curl -s "http://localhost/cars/index.php?r=cars&prop=vendor&val=1"
```


```json
[
  {
    "id": 1,
    "car_vendor_id": 1,
    "car_model_id": 1,
    "car_engine_id": 1,
    "car_transmission_id": 1,
    "name": "300",
    "car_vendor_name": "Lexus",
    "car_model_name": "ES",
    "car_engine_name": "Бензин",
    "car_transmission_name": "Полный"
  }
]
```

* * *

Database
--------

### Connection

```bash
./init --env=Development --overwrite=y
nano common/config/main-local.php
```


### Mirgation

```bash
./yii migrate/up
```


### Generator

```bash
./yii generate/flat
```

>   Data hardcoded in `console/controllers/GenerateController.php`

```php
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
    }
```


Auth
----

Disabled in `backend/controllers/CarsController.php`

```php
'matchCallback' => function ($rule, $action) {
    $Token = Yii::$app->request->headers->get('Token');
    // if ($Token != null)
    if ($Token == null)
        return true;

    return false;
}
```



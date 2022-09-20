<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car}}`.
 */
class m220609_121829_car extends Migration
{
       public function up()
    {
        $tableOptions = null;
        // if ($this->db->driverName === 'mysql') {
        //     $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        // }

        $this->createTable('{{%car}}', [
          'id' => $this->primaryKey(),
          'car_vendor_id' => $this->integer(),
          'car_model_id' => $this->integer(),
          'car_engine_id' => $this->integer(),
          'car_transmission_id' => $this->integer(),
          'name' => $this->string(255)
        ], $tableOptions);
       // $this->createIndex(
       //     'idx-car-vendor-id',
       //     'car_vendor',
       //     'id'
       // );
       $this->alterColumn('{{%car}}', 'id', $this->integer().' NOT NULL AUTO_INCREMENT');
       $this->addForeignKey(
           'fk-car-vendor-id',
           'car',
           'car_vendor_id',
           'car_vendor',
           'id',
           'CASCADE'
       );
        $this->addForeignKey(
           'fk-car-model-id',
           'car',
           'car_model_id',
           'car_model',
           'id',
           'CASCADE'
       );
        $this->addForeignKey(
           'fk-car-engine-id',
           'car',
           'car_engine_id',
           'car_engine',
           'id',
           'CASCADE'
       );
        $this->addForeignKey(
           'fk-car-transmission-id',
           'car',
           'car_transmission_id',
           'car_transmission',
           'id',
           'CASCADE'
       );
    }
    public function down()
    {

        $this->dropForeignKey(
            'fk-car-vendor-id',
            'car'
        );
        $this->dropForeignKey(
            'fk-car-model-id',
            'car'
        );
        $this->dropForeignKey(
            'fk-car-engine-id',
            'car'
        );
        $this->dropForeignKey(
            'fk-car-transmission-id',
            'car'
        );
        $this->dropTable('{{%car}}');


        // $this->dropIndex(
        //     'idx-category-hash_path',
        //     'category'
        // );
    }


}

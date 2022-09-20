<?php
use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m220530_084507_car_engine
 */
class m220530_084507_car_engine extends Migration
{
     /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        $this->createTable('{{%car_engine}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
        ]);
        $this->alterColumn('{{%car_engine}}', 'id', $this->integer().' NOT NULL AUTO_INCREMENT');
        $this->createTable('{{%car_vendor}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
        ]);
        $this->alterColumn('{{%car_vendor}}', 'id', $this->integer(8).' NOT NULL AUTO_INCREMENT');
        $this->createTable('{{%car_transmission}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
        ]);
        $this->alterColumn('{{%car_transmission}}', 'id', $this->integer(8).' NOT NULL AUTO_INCREMENT');
        $this->createTable('{{%car_model}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)
        ]);
        $this->alterColumn('{{%car_model}}', 'id', $this->integer(8).' NOT NULL AUTO_INCREMENT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
        $this->dropTable('{{%car_engine}}');
        $this->dropTable('{{%car_vendor}}');
        $this->dropTable('{{%car_transmission}}');
        $this->dropTable('{{%car_model}}');
    }
}

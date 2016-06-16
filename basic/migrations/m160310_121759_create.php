<?php

use yii\db\Migration;
use yii\db\Schema;

class m160310_121759_create extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        $this->createTable(
            'api',
            [
                'id' => Schema::TYPE_BIGPK,
                'value' => Schema::TYPE_STRING
            ],
            $tableOptions
        );
    }

    public function down()
    {
        $this->dropTable('api');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

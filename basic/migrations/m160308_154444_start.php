<?php

use yii\db\Migration;
use yii\db\Schema;

class m160308_154444_start extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        $this->createTable(
            'champions',
            [
                'id' => Schema::TYPE_PK,
                'name' => Schema::TYPE_STRING,
                'title' => Schema::TYPE_STRING,
                'key' => Schema::TYPE_STRING
            ],
            $tableOptions
        );
    }

    public function down()
    {
        $this->dropTable('champions');
    }

    /*
     Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

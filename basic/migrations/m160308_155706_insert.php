<?php

use yii\db\Migration;

class m160308_155706_insert extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m160308_155706_insert cannot be reverted.\n";
//
//        return false;
//    }


    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $url = 'https://global.api.pvp.net/api/lol/static-data/ru/v1.2/champion?api_key=42e2637d-8729-47c7-8cc7-b1b511fa0947';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($data);
        foreach ($data->data as $champion) {
            $this->insert('champions', ['id' => $champion->id, 'name' => $champion->name, 'title' => $champion->title, 'key' => $champion->key]);
        }
    }

    public function safeDown()
    {
        $this->delete('champions',[]);
    }

}

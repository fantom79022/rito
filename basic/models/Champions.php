<?php

namespace app\models;

use Yii;
use \yii\db\Query;

/**
 * This is the model class for table "champions".
 *
 * @property integer $id
 * @property string $name
 * @property string $title
 */
class Champions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'champions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
        ];
    }

    public function getChampionById($id) {
        $query = new Query();
        $result = $query
            ->select([])
            ->from('champions')
            ->where(['id' => $id])
            ->one();
        return $result;
    }
}

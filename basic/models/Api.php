<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "api".
 *
 * @property integer $id
 * @property string $value
 */
class Api extends \yii\db\ActiveRecord
{
    const FANTIK_ID = '963145';
    const API_KEY = '42e2637d-8729-47c7-8cc7-b1b511fa0947';
    const REPLACE_REGION = array('{region}', '{platformId}');
    const REGION_RU = 'ru';
    const SERVER = 'api.pvp.net';

    /** @api champion-v1.2 */
    const API_CHAMPION_LIST = '/api/lol/{region}/v1.2/champion';
    const API_CHAMPION_INFO = '/api/lol/{region}/v1.2/champion';

/** @api championmastery
 *  @TODO region = platformId
 */
    const API_CHAMPION_MASTERY = '/championmastery/location/{platformId}/player/{playerId}/champion/{championId}';
    const API_USER_MASTERY_INFO = '/championmastery/location/{platformId}/player/{playerId}/champions';
    const API_USER_MASTERY_SCORE = '/championmastery/location/{platformId}/player/{playerId}/score';
    const API_USER_TOP_CHAMPIONS= '/championmastery/location/{platformId}/player/{playerId}/topchampions';


/** @api current-game-v1.0
 *  @TODO region = platformId
 */
    const API_CURRENT_GAME = '/observer-mode/rest/consumer/getSpectatorGameInfo/{platformId}/{summonerId}';



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'api';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
        ];
    }


    protected function getValidApi($api, $region = self::REGION_RU, $key = self::API_KEY, $platformId = self::REGION_RU) {
        return 'https://' . $region . '.' . str_replace(self::REPLACE_REGION, array($region, $platformId), $api) . '?api_key=' . $key;
    }

    protected function useApi($api) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $api);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }

    public function getChampions($freePick = false) {

    }
}

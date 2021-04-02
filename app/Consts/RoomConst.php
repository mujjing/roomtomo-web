<?php

namespace App\Consts;

class RoomConst
{   
    const PREFECTURE = [
        '1' => '東京都',
        '2' => '神奈川県'
    ];

    const CITY_TOKYO = [
        '1' => '新宿区',
        '2' => '渋谷区',
        '3' => '豊島区',
        '4' => '千代田区',
        '5' => '文京区',
        '6' => '目黒区',
        '7' => '北区',
        '8' => '港区',
        '9' => '品川区',
        '10' => '大田区',
    ];

    const CITY_KANAGAWA = [
        '11' => '川崎市',
        '12' => '横浜市'
    ];

    const CITY= [
        '1' => '新宿区',
        '2' => '渋谷区',
        '3' => '豊島区',
        '4' => '千代田区',
        '5' => '文京区',
        '6' => '目黒区',
        '7' => '北区',
        '8' => '港区',
        '9' => '品川区',
        '10' => '大田区',
        '11' => '川崎市',
        '12' => '横浜市'
    ];

    const TRAIN = [
        '/search/train/tokaido' => '東海道線（上野東京ライン）',
        '/search/train/keihintohoku' => '京浜東北線',
        '/search/train/yamanote' => '山手線'
    ];

    const TRAIN_NAME = [
        '1' => '東海道線（上野東京ライン）',
        '2' => '京浜東北線',
        '3' => '山手線'
    ];

    const STATION1 = [
        '7' => '赤羽駅',
        '8' => '新橋駅',
        '9' => '品川駅',
        '11' => '川崎駅',
        '12' => '横浜駅',
    ];

    const STATION2 = [
        '4' => '有楽町駅',
        '5' => '日暮里駅',
        '7' => '赤羽駅',
        '8' => '新橋駅',
        '9' => '品川駅',
        '10' => '蒲田駅',
        '11' => '川崎駅',
        '12' => '横浜駅',
    ];

    const STATION3 = [
        '1' => '新宿駅',
        '2' => '渋谷駅',
        '3' => '池袋駅',
        '4' => '有楽町駅',
        '6' => '目黒駅',
        '8' => '新橋駅',
        '9' => '品川駅',
    ];

    const STATION_NAME = [
        '1' => '新宿駅',
        '2' => '渋谷駅',
        '3' => '池袋駅',
        '4' => '有楽町駅',
        '5' => '日暮里駅',
        '6' => '目黒駅',
        '7' => '赤羽駅',
        '8' => '新橋駅',
        '9' => '品川駅',
        '10' => '蒲田駅',
        '11' => '川崎駅',
        '12' => '横浜駅',
    ];



    public static function getCityName($key) {
        return self::CITY[$key];
    }

    public static function getTrainName($key) {
        return self::TRAIN_NAME[$key];
    }

    public static function getStationName($key) {
        return self::STATION_NAME[$key];
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_anchor".
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property integer $num
 * @property integer $sort
 */
class Anchor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_anchor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num', 'sort'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['url'], 'string', 'max' => 255],
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
            'url' => 'Url',
            'num' => 'Num',
            'sort' => 'Sort',
        ];
    }
    public function getNum(){
        $num=ArticleAnchor::find()->andWhere(['anchor_id' => $this->id])->count('id');
        return $num;
    }

    public function getClick(){
        $all=ArticleAnchor::find()->andWhere(['anchor_id' => $this->id])->sum('click');

        return $all;
    }
}

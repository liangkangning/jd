<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_url_ad".
 *
 * @property integer $id
 * @property string $url
 * @property string $cover
 * @property string $content
 */
class UrlAd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_url_ad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url'], 'required'],
            [['content'], 'string'],
            [['url', 'cover'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'cover' => 'Cover',
            'content' => 'Content',
        ];
    }
    public function getImageUrl(){
        $url=Picture::find(['path'])->where(['id'=>$this->cover])->asArray()->one();
//        $url=$this->hasOne(Picture::className(),['id'=>'cover'])->asArray()->one();

//       var_dump($url);
//       exit();
//        return Yii::getAlias('@imagesUrl').'//'.$url['path'];
        return Yii::getAlias('@imagesUrl').'/'.$url['path'];
    }
}

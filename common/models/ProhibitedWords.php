<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_prohibited_words".
 *
 * @property integer $id
 * @property string $name
 * @property integer $category_id
 */
class ProhibitedWords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_prohibited_words';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'category_id' => '分类',
        ];
    }

    public function getCategory(){
        return $this->hasOne(ProhibitedWordsCategory::className(), ['id' => 'category_id']);
    }
}

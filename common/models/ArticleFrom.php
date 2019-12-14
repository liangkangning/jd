<?php

namespace common\models;

use Yii;
use common\modelsgii\Position;

/**
 * This is the model class for table "{{%article_from}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $ctime
 * @property integer $utime
 * @property integer $status
 * @property string $from
 * @property string $keywords
 * @property string $description
 */
class ArticleFrom extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article_from}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content','from','keywords','description'], 'string'],
            [['ctime', 'utime','status'], 'integer'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [];
    }


}

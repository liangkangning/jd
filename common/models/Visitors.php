<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_anchor".
 *
 * @property integer $id
 * @property string $ip
 * @property string $froms
 * @property string $add_time
 * @property string $system
 * @property string $browser
 * @property string $pageview
 * @property string $source_link
 * @property integer $type
 */
class Visitors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_visitors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }

}

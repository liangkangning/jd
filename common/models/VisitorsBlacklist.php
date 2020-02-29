<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yii2_anchor".
 *
 * @property integer $id
 * @property string $ip
 */
class VisitorsBlacklist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_visitiors_blacklist';
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

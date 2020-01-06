<?php

namespace common\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property string $id
 * @property string $category_id
 * @property string $name
 * @property string $title
 * @property string $sub_title
 * @property string $cover
 * @property string $description
 * @property string $content
 * @property string $extend
 * @property integer $type
 * @property integer $position
 * @property string $link
 * @property integer $sort
 * @property integer $create_time
 * @property string $update_time
 * @property integer $status
 * @property integer $category_id2 
 * @property string $tags 
* @property string $keywords
 * @property integer $click
* @property string $np
 * @property string $images
 * @property string $canshu
  * @property string $zonghui
  * @property integer $author_id
  * @property integer $conlin
  * @property integer $article_from_id
 * @property string $from
 */
class Article extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
	public $_oldTags;
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title','content'],'unique'],
            [['category_id', 'content','from'], 'required'],
            [['category_id', 'type', 'position', 'sort', 'create_time', 'update_time', 'status', 'category_id2', 'click','author_id'], 'integer'],
            [['content', 'extend','zonghui'], 'string'],
            [['name'], 'string', 'max' => 40],
            [['title','from'], 'string', 'max' => 180],
            [['sub_title'], 'string', 'max' => 80],
            [['cover', 'link', 'tags', 'keywords','images','canshu'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 255],
            [['np'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'title' => 'Title',
            'sub_title' => 'Title',
            'cover' => 'Cover',
            'description' => 'Description',
            'content' => 'Content',
            'extend' => 'Extend',
            'type' => 'Type',
            'position' => 'Position',
            'link' => 'Link',
            'sort' => 'Sort',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'status' => 'Status',
        	'category_id2' => 'Category Id2',
           'tags' => 'Tags',
           'keywords' => 'Keywords',
           'click' => 'Click',
           'np' => 'Np',
            'images'=>'Images',
            'author_id'=>'author_id',
            'from'=>'from',
        ];
    }
    public function afterFind(){
    	parent::afterFind();
    	$this->_oldTags=$this->tags;
    }
    public  function beforeSave($insert){
    	parent::beforeSave($insert);
    	Tag::updateFrequency($this->_oldTags, $this->tags);
    	return true;
    }

    public function afterDelete()
    {
    	parent::afterDelete();
    	Tag::updateFrequency($this->tags,'');
    }

    /**
     * Returns static class instance, which can be used to obtain meta information.
     * @param bool $refresh whether to re-create static instance even, if it is already cached.
     * @return static class instance.
     */
    public static function instance($refresh = false)
    {
        // TODO: Implement instance() method.
    }
    public function getImage(){
        $pic=$this->hasOne(Picture::className(),['id'=>'cover'])->select('path');
//        var_dump($pic);
        return $pic;
    }
    public function getImageUrl(){
       $url=Picture::find(['path'])->where(['id'=>$this->cover])->asArray()->one();
//        $url=$this->hasOne(Picture::className(),['id'=>'cover'])->asArray()->one();

//       var_dump($url);
//       exit();
//        return Yii::getAlias('@imagesUrl').'//'.$url['path'];
        return Yii::getAlias('@imagesUrl').'/'.$url['path'];
    }
    public function getUrl(){
        return \Yii::$app->urlManager->createUrl(
            ['news/detail','id'=>$this->id]
        );
    }
    public function getAuthor_name(){
        if ($this->author_id!=0){
            $admin=$this->hasOne(Admin::className(),['uid'=>'author_id']);
            return $admin;
        }else{
            return '';
        }
    }
    public function getTitles(){
         return \common\helpers\ArrayHelper::extend($this->extend);
    }



}

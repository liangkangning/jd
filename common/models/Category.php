<?php

namespace common\models;

use Yii;
use common\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property string $id
 * @property string $pid
 * @property string $name
 * @property string $title
 * @property string $link
 * @property string $extend
 * @property string $meta_title
 * @property string $keywords
 * @property string $description
 * @property string $create_time
 * @property string $update_time
 * @property integer $sort
 * @property integer $status
 * @property string $style 
 * @property string $content 
 * @property string $tempindex 
 * @property string $templist 
 * @property string $tempitem
 * @property string $cover
 * @property string $list_content
 * @property string $m_cover
 * @property string $m_list_content
 */
class Category extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'create_time', 'update_time', 'sort', 'status'], 'integer'],
            [['name', 'title'], 'required'],
            [['list_content','extend','content'], 'string'],
            [['name'], 'string', 'max' => 30],
//             [['title', 'meta_title'], 'string', 'max' => 50],
        	[['title', 'meta_title', 'style'], 'string', 'max' => 50],
            [['link'], 'string', 'max' => 250],
            [['m_cover','m_list_content','cover','keywords', 'description'], 'string', 'max' => 255],
        	[['keywords', 'description',  'tempindex', 'templist', 'tempitem'], 'string', 'max' => 255],
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
            'pid' => 'Pid',
            'name' => 'Name',
            'title' => 'Title',
            'link' => 'Link',
            'extend' => 'Extend',
            'meta_title' => 'Meta Title',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'sort' => 'Sort',
            'status' => 'Status',
        	'style' => 'Style',
        	'content' => 'Content',
        	'tempindex' => 'Tempindex',
        	'templist' => 'Templist',
        	'tempitem' => 'Tempitem',
            'cover' => 'Cover',
            'list_content' => 'List Content',
            'm_cover' => 'Cover',
            'm_list_content' => 'List Content',
        ];
    }
    
    public static function getCategoryTree(){
//     	return ArrayHelper::merge(ArrayHelper::listDataLevel(Category::find()->asArray()->all(), 'id', 'title','id','pid'));
//     	echo "<pre>";
//     	var_dump(ArrayHelper::list_to_tree(Category::find()->asArray()->all(), 'id', 'pid'));
//     	echo "</pre>";
//       exit();
      return ArrayHelper::list_to_tree(Category::find()->asArray()->all(), 'id', 'pid');
    }


    public function getCategoryImages(){
        return $this->hasMany(CategoryImages::className(), ['category_id' => 'id']);
    }
    public function getImages($array=array()){
        if (empty($array)){
            $obj=$this->hasMany(Images::className(),['id'=>'images_id'])
                ->via('categoryImages');
        }else{
            $obj= $this->hasMany(Images::className(),['id'=>'images_id'])
                ->where(['id'=>$array])
                ->via('categoryImages');
        }
        return $obj;
    }
    public function getAttrImages($array=array()){
       if (empty($array)){
           $obj=$this->hasMany(AttrImages::className(),['images_id'=>'id'])
               ->via('images')->groupBy(['attr_id','attr_value_id']);
       }else{
           $obj=$this->hasMany(AttrImages::className(),['images_id'=>'id'])
               ->where(['images_id'=>$array])
               ->via('images')->groupBy(['attr_id','attr_value_id']);
       }
        return $obj;
    }

    public function getImagesCount(){
        return $this->hasMany(Images::className(),['id'=>'images_id'])
            ->via('categoryImages')->count();
    }

    public function getImageUrl(){
        $url=Picture::find(['path'])->where(['id'=>$this->cover])->asArray()->one();
        return Yii::getAlias('@imagesUrl').'/'.$url['path'];
    }


    public function getUrl(){

        $url = '/' . $this->name . '/';
        if ($this->pid==34){
            $url = '/news/' . $this->name . '.html';
        }
        return $url;
    }

    public static function NewsNavList(){
        $news_nav = Category::find()->where(['pid' => 34])->all();
        $news_nav[] = ['title' => '热门新闻', 'url' => '/news/hot.html','name'=>"hot"];
        return $news_nav;
    }

}

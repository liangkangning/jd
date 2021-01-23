<?php

namespace common\models;

use common\helpers\FuncHelper;
use common\helpers\Html;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "yii2_images".
 *
 * @property integer $id
 * @property integer $oldid
 * @property string $category_id
 * @property string $category_id2
 * @property string $name
 * @property string $title
 * @property string $cover
 * @property string $description
 * @property string $content
 * @property string $images
 * @property string $extend
 * @property string $extend_more
 * @property integer $sort
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $status
 * @property string $tags
 * @property string $keywords
 * @property integer $click
 * @property string $np
 * @property string $bianhao
 * @property string $dianya
 * @property string $rongliang
 * @property string $chicun
 * @property string $fdwendu
 * @property string $cdwendu
 * @property string $lingyu
 * @property string $attr_value_id
 * @property string $seo_title
* @property integer $top
 * */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $_oldCategory_id;
    public $_oldAttr_value_id;
    public static function tableName()
    {
        return 'yii2_images';
    }
    public function behaviors(){
        return[
            [
                "class"=>TimestampBehavior::className(),
                "createdAtAttribute"=>"create_time",
                "updatedAtAttribute"=>"update_time",
                "attributes"=>[
                    ActiveRecord::EVENT_BEFORE_INSERT=>['create_time',"update_time"],
                    ActiveRecord::EVENT_BEFORE_UPDATE=>['update_time'],
                ]

            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title','seo_title'],'unique'],
            [['content', 'extend','extend_more'], 'string'],
            [['sort', 'create_time', 'update_time', 'status','top', 'click','oldid'], 'integer'],
            [['dianya', 'rongliang'], 'number'],
            [['category_id', 'attr_value_id', 'cover', 'description', 'images', 'tags', 'keywords', 'np','seo_title'], 'string', 'max' => 255],
            [['category_id2'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 40],
            [['title'], 'string', 'max' => 80],
            [['bianhao', 'chicun', 'fdwendu', 'cdwendu', 'lingyu'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'oldid'=>'旧ID号',
            'category_id' => 'Category ID',
            'attr_value_id' => 'Attr Value ID',
            'category_id2' => 'Category Id2',
            'name' => 'Name',
            'title' => 'Title',
            'cover' => 'Cover',
            'description' => 'Description',
            'content' => 'Content',
            'images' => 'Images',
            'extend' => 'Extend',
            'extend' => 'Extend More',
            'sort' => 'Sort',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'status' => 'Status',
            'top' => 'top',
            'tags' => 'Tags',
            'keywords' => 'Keywords',
            'click' => 'Click',
            'np' => 'Np',
            'bianhao' => 'Bianhao',
            'dianya' => 'Dianya',
            'rongliang' => 'Rongliang',
            'chicun' => 'Chicun',
            'fdwendu' => 'Fdwendu',
            'cdwendu' => 'Cdwendu',
            'lingyu' => 'Lingyu',
            'seo_title' => 'SEO标题',
        ];
    }
    public function afterFind(){
        parent::afterFind();
        $this->_oldCategory_id=$this->category_id;
        $this->_oldAttr_value_id=$this->attr_value_id;

    }
    public  function afterSave($insert,$changedAttributes){
        parent::afterSave($insert, $changedAttributes);
        CategoryImages::updateFrequency($this->_oldCategory_id, $this->category_id,$this->id);
        AttrImagesSelect::updateFrequency($this->_oldAttr_value_id, $this->attr_value_id,$this->id);
        return true;
    }

    public function afterDelete()
    {
        parent::afterDelete();
        CategoryImages::updateFrequency($this->_oldCategory_id,'',$this->id);

        AttrImagesSelect::updateFrequency($this->_oldAttr_value_id,'',$this->id);
    }
    public function getImageUrl(){
        $url=Picture::find(['path'])->where(['id'=>$this->cover])->orderBy("id asc")->asArray()->one();
//        $url=$this->hasOne(Picture::className(),['id'=>'cover'])->asArray()->one();

//       var_dump($url);
//       exit();
//        return Yii::getAlias('@imagesUrl').'//'.$url['path'];
        return Yii::getAlias('@imagesUrl').'/'.$url['path'].'?x-oss-process=style/small';
    }

    public function getPath(){
        $path = Picture::find(['path'])->where(['id'=>$this->cover])->asArray()->one();
        return $path['path'];
    }
    public function  getImagesUrl(){
        $imagesArray=explode(',',$this->images);
        $urls=Picture::find(['path'])->where(['in','id',$imagesArray])->orderBy("id asc")->asArray()->all();
        $picture = Picture::find(['path'])->where(['id'=>$this->cover])->one();//主图
        $imagesUrl=array();
        $imagesUrl[] = Yii::getAlias('@imagesUrl').'/'.$picture['path'];
        foreach ($urls as $key=>$value){
            $imagesUrl[]= Yii::getAlias('@imagesUrl').'/'.$value['path'];
        }
        return array_unique($imagesUrl);;
    }

    public function getCategoryImages(){
        return $this->hasMany(CategoryImages::className(), ['images_id' => 'id']);
    }

    public function getCategory(){
        return $this->hasMany(Category::className(), ['id' => 'category_id'])
            ->via('categoryImages');
    }
    public function getAttrValue(){
        return $this->hasMany(AttrValue::className(), ['id' => 'attr_value_id'])
                ->via('attrImagesSelect');
    }
    public function getAttrImagesSelect(){
        return $this->hasMany(AttrImagesSelect::className(), ['images_id' => 'id']);
    }

    public function getExtendText(){
        $tmp = unserialize($this->extend);

        return $tmp;
    }

    public function getUrl(){
        return \Yii::$app->urlManager->createUrl(
            ['product/detail','id'=>$this->id]
        );
    }
    public function getH1(){
        if ($this->tags){
            $arr = explode('|', $this->tags);
            return $arr[0];
        }else{
            return '';
        }
    }

    public function getH2(){
        if ($this->tags){
            $arr = explode('|', $this->tags);
            return end($arr);
        }else{
            return '';
        }
    }
}



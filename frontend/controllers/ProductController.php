<?php/** * Created by PhpStorm. * User: Administrator * Date: 2018/1/26 0026 * Time: 下午 1:59 */namespace frontend\controllers;use common\helpers\ArrayHelper;use common\models\Attr;use common\models\AttrImages;use common\models\AttrImagesSelect;use common\models\AttrValue;use common\models\Category;use common\models\Images;use common\models\SitemapProduct;use common\models\VisitorsBlacklist;use Faker\Provider\Image;use League\Glide\Http\NotFoundException;use Yii;use yii\helpers\Html;use common\models\Urlad;class ProductController extends CommonController{//    public function behaviors()//    {//        return [//            [//                'class' => 'yii\filters\PageCache',//                'duration' => 24*60*60,//                'variations' => [//                    Yii::$app->language,//                    Yii::$app->request->get('page'),//                    Yii::$app->request->get('id'),//                    Yii::$app->request->get('list'),//                ],//                'dependency' => [//                    'class' => 'yii\caching\DbDependency',//                    'sql' => 'SELECT COUNT(*) FROM yii2_images',//                ],//            ],//        ];//    }    public function init()    {        parent::init(); // TODO: Change the autogenerated stub    }    public function actionIndex(){    }    public function actionDetail(){        parent::common();        if(!empty(Yii::$app->request->get('id'))){            $id=Yii::$app->request->get('id');            $item=Images::find()                ->where(['id'=>$id])                ->one();            if (!isset($item)){                throw new \yii\web\NotFoundHttpException('The requested page does not exist.');            }            $item->click=$item->click+1;            $item->save();//               var_dump($data);            Yii::$app->params['breadcrumbs']=array();            Yii::$app->params['breadcrumbs'][]=Html::tag('a',"首页",['href'=>Yii::$app->homeUrl,'class'=>'size6-4p']);//面包屑            $cat=\backend\models\Category::find()->select(['id','title','pid','name'])->where(['id'=>$item->category_id2])->one();            if($cat->pid!=0){                $ParCat=\backend\models\Category::find()->select(['id','title','pid','name'])->where(['id'=>$cat->pid])->one();                Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$ParCat['title'],['href'=>'/'.$ParCat['name'].'/']);            }            Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$cat['title'],['href'=>'/'.$cat['name'].'/']);            $this->data['id']=Yii::$app->request->get('id');            return $this->render('detail',['data'=>$this->data,'item'=>$item]);        }    }    public function common(){        parent::common();        $url=Yii::$app->request->hostInfo.Yii::$app->request->url;        //处理分页和排序的问题        if (strstr($url,"-o")){            $res = explode("-o", $url);            $url = $res[0] . ".html";        }elseif (strstr($url,"-p")){            $res = explode("-p",$url);            $url = $res[0] . ".html";        }        //$url = str_replace(".net", ".cn", $url);//本地测试用        $urlad=Urlad::find()->where(['url'=>$url])->one();        Yii::$app->params['urlad']=$urlad;        self::get_product_list();        $lanmu_list = $this->getCache('lanmu_list'.$this->lanmu['pid']) ?: $this->setCache('lanmu_list'.$this->lanmu['pid'],Category::find()->where(['pid'=>$this->lanmu['pid']]));//        $lanmu_list = Category::find()->where(['pid'=>$this->lanmu['pid']]);        $lanmu_p = $this->getCache('lanmu_p'.$this->lanmu['pid']) ?: $this->setCache('lanmu_p'.$this->lanmu['pid'],Category::find()->where(['id'=>$this->lanmu['pid']])->asArray()->one());//        $lanmu_p = Category::find()->where(['id'=>$this->lanmu['pid']])->asArray()->one();        Yii::$app->params['product_tuijian'] = $this->getCache('product_tuijian') ?: $this->setCache('product_tuijian',Images::find()->limit(4)->all());//商品推荐//        Yii::$app->params['product_tuijian'] = Images::find()->limit(4)->all();//商品推荐        $this->view->params['lanmu_p']=$lanmu_p;        $this->view->params['lanmu_list']=$lanmu_list;        $this->view->params['action']=$this->lanmu['name'];        $this->view->params['atrr_kong']='';        $this->view->params['atrr_list']='';        //把列表页的属性组合 2个以内的链接存到表中        $url=Yii::$app->request->getUrl();        if (strstr($url,'list-')){            if (count(explode('-',$url))<=3){                $site=SitemapProduct::find()->where(['url'=>$url])->one();                if (!isset($site)){                    $site_product=new SitemapProduct();                    $site_product->url=$url;                    $site_product->save();                }            }        }    }    public function get_product_list(){//       echo ArrayHelper::isIn('1',[1,2]);        $order=0;        $choose=array();        $cate = $this->getCache('lanmu_'.$this->lanmu['id']) ?: $this->setCache('lanmu_'.$this->lanmu['id'],Category::find()->where(['id'=>$this->lanmu['id']])->one());//        $cate = Category::find()->where(['id'=>$this->lanmu['id']])->one();//        $arrt=AttrImagesSelect::find()->where(['attr_value_id'=>Yii::$app->request->get('list')])->one();        if (!empty(Yii::$app->request->get('list'))){            $list= explode('-',Yii::$app->request->get('list'));            if(strpos(end($list),'o')===false){//                echo '不存在！';            }else{                $order=str_replace('o','',end($list));                array_pop($list);//                echo '存在！';            }            $array=array();            foreach ($list as $key=>$value){                $arrayItem = $this->getCache('attr_value_id'.$value) ?: $this->setCache('attr_value_id'.$value,ArrayHelper::getColumn(AttrImagesSelect::find()->where(['attr_value_id'=>$value])->asArray()->all(),'images_id'));//选择的属性对于的商品//                $arrayItem = ArrayHelper::getColumn(AttrImagesSelect::find()->where(['attr_value_id'=>$value])->asArray()->all(),'images_id');//选择的属性对于的商品                if ($key>=1){                    $array=array_merge($array,$arrayItem);                    $array = ArrayHelper::FetchRepeatMemberInArray ($array);                }else{                    $array=array_merge($array,$arrayItem);                }            }            if (empty($array) && count($list)>0){                throw new \yii\web\NotFoundHttpException('The requested page does not exist.');            }            if($order==1){                $product_list=$cate->getImages($array)->select(['id','title','cover'])->orderBy('dianya DESC');            }            elseif($order==2){                $product_list=$cate->getImages($array)->select(['id','title','cover'])->orderBy('dianya asc');            }            elseif($order==3){                $product_list=$cate->getImages($array)->select(['id','title','cover'])->orderBy('rongliang DESC');            }            elseif($order==4){                $product_list=$cate->getImages($array)->select(['id','title','cover'])->orderBy('rongliang asc');            }            elseif($order==5){                $product_list=$cate->getImages($array)->select(['id','title','cover'])->orderBy('create_time DESC');            }            else{                $product_list=$cate->getImages($array)->select(['id','title','cover'])->orderBy(['top'=>SORT_DESC,'sort'=>SORT_DESC,'create_time'=>SORT_DESC]);            }            $im_string = implode($array, "_");            $imagesArray = $this->getCache('imagesArray'.$im_string) ?: $this->setCache('imagesArray'.$im_string,$cate->getAttrImages($array)->with('attrName','attrValueName')->all());//            $imagesArray = $cate->getAttrImages($array)->with('attrName','attrValueName')->all();            //显示已选择的属性//            1.显示的属性id，根据属性类型的sort排序//            $choose =AttrValue::find()->where(['id'=>$list])->all();//            根据属性名的权重进行排序            $chooseOrderby=AttrValue::find()                ->from(AttrValue::tableName(). ' A')                ->select(['A.*'])                ->leftJoin(Attr::tableName(). ' B','A.attr_id=B.id')                ->where(['A.id'=>$list])                ->orderBy('B.sort')                ->all();            $choose = $chooseOrderby;        }else{            $product_list=$cate->getImages()->select(['id','title','cover'])->orderBy(['top'=>SORT_DESC,'create_time'=>SORT_DESC]);            $imagesArray=$cate->getAttrImages()->with('attrName','attrValueName')->all();        }        $chooseIdArray=array();        foreach ($choose as $k=>$v){//                $chooseArray=ArrayHelper::getValue($v,'id');            $chooseIdArray[$k]=$v->id;        }        $chooseId=ArrayHelper::array2string($chooseIdArray,'-');        $this->view->params['chooseIdArray'] =$chooseIdArray;        $this->view->params['chooseId'] =$chooseId;        $this->view->params['choose'] =$choose;        $this->view->params['order'] =$order;//        var_dump($cate);        //处理这个属性标签//        var_dump($cate->getAttrImages()->all());        //显示所有属性        $attr_list=array();        $chushizhi='';        $index=-1;        //            选择的属性        $chooseArray=array();        foreach ($choose as $k=>$v){//                $chooseArray=ArrayHelper::getValue($v,'id');//            $chooseArray[$k] = $this->getCache('chooseArray'.$v->id) ?: $this->setCache('chooseArray'.$v->id,$v->attr->name);            $chooseArray[$k] = $v->attr->name;//            var_dump($v->id);        }        foreach ($imagesArray as $value){            if (ArrayHelper::isIn($value->attrName->name,$chooseArray)){                continue;            }            if ($chushizhi!=$value->attrName){                $chushizhi=$value->attrName;                $index++;                $attr_list[$index]['attr']=$value->attrName->name;                $attr_list[$index]['sort']=$value->attrName->sort;            }            $valueArray=array();            $valueArray['name']=$value->attrValueName->name;            $valueArray['id']=$value->attrValueName->id;            $valueArray['sort']=$value->attrValueName->sort;            $attr_list[$index]['values'][]=$valueArray;        }        foreach ($attr_list as $key=>$value){            $attr_list[$key]['values']=ArrayHelper::list_sort_by( $value['values'],'sort');        }        $attr_list=ArrayHelper::list_sort_by($attr_list,'sort');//        var_dump($attr_list);        //处理商品列表//        $p_list=Images::find()//            ->with([//                'category'=>function ($query) {//                    $query->andWhere(['id' =>$this->lanmu['id']]);//                },//                'attrValue'=>function ($query) {//                    $query->andWhere(['attr_id' =>1]);//                },//            ])//            ->select(['id','title','cover'])->all();//        ;        Yii::$app->params['attr_list_end'] = [];        foreach ($attr_list as $key=>$item) {            if ($key>=3){                Yii::$app->params['attr_list_end'][] = $item;            }        }        $this->view->params['product_list']=$product_list;        $this->view->params['attr_list']=$attr_list;//        var_dump($attr_list);//        var_dump($cate->getAttr());//        SEO优化        if (!empty(Yii::$app->request->get('list'))) {            $choose_attrValue = '';            foreach ($choose as $key => $value) {                if ($key==0){                    $choose_attrValue=$value->name;                }else{                    $choose_attrValue = $choose_attrValue . ' ' . $value->name;                }            }            $choose_categoryValue = ' '.Yii::$app->params['lanmu']['title'];            $title = $choose_attrValue . $choose_categoryValue . '组生产厂家_锂离子电池定制/价格/品牌【钜大锂电】' ;            $keywords = $choose_attrValue . $choose_categoryValue . ',锂离子电池生产厂家';            $description = '东莞钜大锂电池公司，广东知名' . $choose_attrValue . $choose_categoryValue . '组生产厂家，按需定制大容量' . $choose_attrValue  . '锂离子电池价格/品牌/排名。16年专注锂电池定制，超可靠，超安全！！';            $this->view->params['meta_title'] = $title;            $this->view->params['keywords'] = $keywords;            $this->view->params['description'] = $description;        }    }}
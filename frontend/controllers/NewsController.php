<?phpnamespace frontend\controllers;use common\helpers\ApiHelper;use common\helpers\ArrayHelper;use common\helpers\FuncHelper;use common\helpers\StringHelper;use common\models\Article;use common\models\Category;use common\models\Keywords;use yii\web\Controller;use yii;use yii\helpers\Html;class NewsController extends CommonController{    /**     * @var string     */    public $layout = 'main';//    public function behaviors()//    {//        return [//            [//                'class' => 'yii\filters\PageCache',//                'duration' => 30*60,//                'variations' => [//                    Yii::$app->language,//                    Yii::$app->request->get('page'),//                    Yii::$app->request->get('id'),//                ],//            ],//        ];//    }    public function init()    {        parent::init(); // TODO: Change the autogenerated stub        Yii::$app->params['news_list_image']=true;        Yii::$app->params['isAllowedIp'] = false;//        if (isset(Yii::$app->params['web']['allowedIPs'])){//            Yii::$app->params['isAllowedIp'] = $this->isAllowedIp(Yii::$app->params['web']['allowedIPs']);//        }    }    public function actionIndex()    {        $start = date('Y-m-d 00:00:00',strtotime("-365 day"));        $end = date('Y-m-d 23:59:00',strtotime("-1 day"));        $array=Yii::$app->db->createCommand("SELECT id,title FROM yii2_article WHERE `create_time` >= unix_timestamp( '$start' ) AND `create_time` <= unix_timestamp( '$end' ) and status=1 order by click desc limit 10")->queryAll();        $news_click=array();        foreach ($array as $key=>$value){            $news_click[$key]['title']=$value['title'];            $news_click[$key]['url']="/news/".$value['id'].".html";        }        Yii::$app->params['news_click']=$news_click;        $this->GetList();        $this->view->params['news_gs']=Article::find()->where(['category_id'=>35])            ->andWhere(['status'=>1])            ->andWhere(['like','np','c'])            ->orderBy('id DESC')->limit(10)->all();        $this->view->params['news_gs_f']=Article::find()->where(['category_id'=>35])            ->andWhere(['status'=>1])            ->andWhere(['like','np','h'])            ->orderBy('id DESC')->limit(10)->all();        $ids = explode(',', Yii::$app->params['web']['news_index_gongsixinwen']);        $arr = [];        foreach ($ids as $id) {            $arr[] = Article::find()->where(['id' => $id])->one();        }        Yii::$app->params['gongsixinwen'] = $arr;        Yii::$app->params['tuijian_zhuanti'] = Article::find()->where(['category_id' => 36])->andWhere(['like', 'np', 'c'])->andWhere(['status'=>1])->orderBy("create_time desc")->limit("8")->all();        $ids = Category::find()->where(['pid' => 34])->andWhere(['not in','id',['35','36']])->column();        Yii::$app->params['hot'] = Article::find()->where(['in','category_id',$ids])->andWhere(['status'=>1])->orderBy("click desc")->limit("8")->all();//除了公司新闻、电池专题、电池博客除外，点击最高的8篇        /**         * 新闻轮播         */        $data = [];        foreach (explode(',',Yii::$app->params['web']['NEWS_LUOBO']) as $id) {            $data[] = Article::findOne($id);        }        Yii::$app->params['luobo'] = $data;        /**        *其他栏目列表 start         */        $ids = Category::find()->where(['pid' => 34])->orderBy('sort asc')->andWhere(['not in','id',['35']])->column();//除了公司新闻        $data = [];        foreach ($ids as $id) {            $a['category'] = Category::find()->where(['id' => $id])->one();            if ($a['category']['extend']){                $extend = unserialize($a['category']['extend']);                $ar = Article::find()->select(['id', 'title', 'cover', 'description', 'create_time', 'click','content']);                foreach ($extend as $item) {                    $ar->orWhere([                        'and',                        ['like','title',$item],                        ['status'=>1],                        ['in','category_id',$ids]                    ]);                }                if (count($extend)==0){                    $ar->andWhere(['status' => 1])->andWhere(['in','category_id',$ids]);                }                $res = $ar->orderBy('create_time desc')->limit(9)->asArray()->all();            }else{                $res = Article::find()->where(['category_id' => $id])->andWhere(['status'=>1])->orderBy('create_time desc')->limit(9)->asArray()->all();            }            $a['news'] = [];            foreach ($res as $item) {                if (strlen($item['description'])<1){                    $item['description'] = StringHelper::html2text($item['content']);                }                $item['ico'] = '/assets/images/'.$a['category']['name'].'.jpg';                $item['url'] = \Yii::$app->urlManager->createUrl(                    ['news/detail','id'=>$item['id']]                );                $a['news'][] = $item;            }            $data[] = $a;        }        Yii::$app->params['other'] = $data;        /**         *其他栏目列表 end         */        return $this->render('index',['data'=>$this->data]);    }    public function actionGongsixinwen(){        Yii::$app->params['news_list_image']=false;        $this->GetList();        return $this->render('item',['data'=>$this->data]);    }    public function actionZhuanti(){        $this->GetList();        return $this->render('item',['data'=>$this->data]);    }    public function actionHangyezixun(){        $this->GetList();        return $this->render('item',['data'=>$this->data]);    }    public function actionZhishi(){        $this->GetList();        return $this->render('item',['data'=>$this->data]);    }    public function actionHot(){        $this->GetList();        return $this->render('item',['data'=>$this->data]);    }    public function actionChangjianwenti(){        $this->GetList();        return $this->render('item',['data'=>$this->data]);    }    public function actionJishuzixun(){        $this->GetList();        return $this->render('item',['data'=>$this->data]);    }    public function actionXuangou(){        $this->GetList();        return $this->render('item',['data'=>$this->data]);    }    public function actionBaoyang(){        $this->GetList();        return $this->render('item',['data'=>$this->data]);    }    public function actionCase(){        $tree=ArrayHelper::CategoryList(28);        $this->data['tree']=$tree;        $this->Get_case_index();        return $this->render('case_index',['data'=>$this->data]);    }    public function actionTezhong(){        $this->Get_case_list();        return $this->render('case_index',['data'=>$this->data]);    }    public function actionJunjing(){        $this->Get_case_list();        return $this->render('case_index',['data'=>$this->data]);    }    public function actionRobots(){        $this->Get_case_list();        return $this->render('case_index',['data'=>$this->data]);    }    public function actionYiliao(){        $this->Get_case_list();        return $this->render('case_index',['data'=>$this->data]);    }    public function actionGongye(){        $this->Get_case_list();        return $this->render('case_index',['data'=>$this->data]);    }    public function actionYingji(){        $this->Get_case_list();        return $this->render('case_index',['data'=>$this->data]);    }    public function actionShangyong(){        $this->Get_case_list();        return $this->render('case_index',['data'=>$this->data]);    }    public function actionXiaofei(){        $this->Get_case_list();        return $this->render('case_index',['data'=>$this->data]);    }    public function actionZhineng(){        $this->Get_case_list();        return $this->render('case_index',['data'=>$this->data]);    }    public function actionShouchi(){        $this->Get_case_list();        return $this->render('case_index',['data'=>$this->data]);    }    public function actionKantan(){        $this->Get_case_list();        return $this->render('case_index',['data'=>$this->data]);    }    public function actionDetail(){        parent::common();        if(Yii::$app->request->isGet){            $id=Yii::$app->request->get('id');            if ($id==152080){            }            $item=Article::find()                ->where(['id'=>$id])                ->andWhere(['status'=>1])                ->one();            if (!isset($item)){                throw new \yii\web\NotFoundHttpException('The requested page does not exist.',404);            }//            $item->click=$item->click+1;//            $item->save();            Article::updateAllCounters(['click' => 1], ['id' => $id]); //递增阅读量//             var_dump($item);            Yii::$app->params['breadcrumbs']=array();            Yii::$app->params['breadcrumbs'][]=Html::tag('a',"首页",['href'=>Yii::$app->homeUrl]);//面包屑            if ($item->category_id!=0){                $cat=\backend\models\Category::find()->select(['id','title','pid','name'])->where(['id'=>$item->category_id])->one();                if($cat->pid!=0){                    $ParCat=\backend\models\Category::find()->select(['id','title','pid','name'])->where(['id'=>$cat->pid])->one();                    if ($ParCat['name']=='case'){                        Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$ParCat['title'],['href'=>'/news/'.$ParCat['name'].'.html']);                    }else{                        Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$ParCat['title'],['href'=>'/'.$ParCat['name'].'/']);                    }                }                Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$cat['title'],['href'=>'/news/'.$cat['name'].'.html']);            }            if (strtotime('2018-9-6')<= $item['create_time']){                $item['content']=\common\helpers\Html::setAnchor($item['content'],1);            }else{                $item['content']=\common\helpers\Html::setAnchor($item['content']);            }            $this->data['detail']=$item;            //查询上-篇文章            $prev_article = Article::find()                ->andWhere(['status'=>1])                ->andFilterWhere(['>', 'id', $id])                ->andFilterWhere(['category_id'=>$item->category_id])                ->orderBy(['id' => SORT_ASC])                ->limit(1)                ->one();            //查询下-篇文章            $next_article = Article::find()                ->andWhere(['status'=>1])                ->andFilterWhere(['<', 'id', $id])                ->andFilterWhere(['category_id'=>$item->category_id])                ->orderBy(['id' => SORT_DESC])                ->limit(1)                ->one();            $this->data['prev_article'] = [                'url' => !is_null($prev_article) ? \Yii::$app->urlManager->createUrl(['news/detail','id'=>$prev_article->id]) : 'javascript:;',                'title' => !is_null($prev_article) ? $prev_article->title : '没有了',            ];            $this->data['next_article'] = [                'url' => !is_null($next_article) ? \Yii::$app->urlManager->createUrl(['news/detail','id'=>$next_article->id]) : 'javascript:;',                'title' => !is_null($next_article) ? $next_article->title : '没有了',            ];        }        $keywords_category=Keywords::find()->orderBy(['sort'=>SORT_ASC])->limit(28)->asArray()->all();        Yii::$app->params['keywords_category']=$keywords_category;//         echo 2;        /**         * 相关文章，推荐专题         *///        $tuijian_news = $this->getCache('news_'.$id) ?: $this->setCache('news_'.$id,ApiHelper::getNews($this->data['detail']['title'],0,6,false,true));        $tuijian_news = ApiHelper::getNews($this->data['detail']['title'], 0, 12, false, true);        $tuijian_news = ApiHelper::noRepeatTitle($tuijian_news,$this->data['detail']['title']);        $xiangguan_news['news'] = $tuijian_news;//相关文章        foreach ($xiangguan_news['news'] as &$item) {            $item['ico'] = '/assets/images/xiangguan_news.jpg';            $item['url'] = \Yii::$app->urlManager->createUrl(                ['news/detail','id'=>$item['id']]            );        }        $xiangguan_news['category']['url'] = '/news/';        $xiangguan_news['category']['title'] = '相关文章';        $tuijian_zhuanti['news'] = Article::find()->where(['category_id'=>'36'])->andWhere(['like','np','c'])->andWhere(['status'=>1])->limit("6")->asArray()->all();//推荐属性的电池专题文章6篇        foreach ($tuijian_zhuanti['news'] as &$item) {            $item['ico'] = '/assets/images/tuijian_zhuanti.jpg';            $item['url'] = \Yii::$app->urlManager->createUrl(                ['news/detail','id'=>$item['id']]            );        }        $tuijian_zhuanti['category']['url'] = '/news/';        $tuijian_zhuanti['category']['title'] = '推荐专题';        Yii::$app->params['xiangguan_tuijian'] = [$xiangguan_news, $tuijian_zhuanti];        return $this->render('detail',['data'=>$this->data]);    }    protected  function GetList(){        parent::common();//        其他栏目需要更新，关键词来匹配，这里是处理        $extend = Yii::$app->params['lanmu']['extend'];        if ($this->action->id=='hot'){            $list= Article::find()->select(['id','title','cover','description','create_time','click'])                ->where(['>','click',15000])                ->andWhere(['>','category_id',0])                ->andWhere(['status'=>1])                ->orderBy('click desc');        }elseif (strlen($extend)>0){            $extend = unserialize($extend);            $ar = Article::find()->where(['status'=>1]);            $where[] = 'or';            foreach ($extend as $item) {                $where[] = ['like', 'title', $item];            }            $list = $ar->andWhere($where)->select(['id', 'title', 'cover', 'description', 'create_time', 'click'])->orderBy('create_time desc');        }else{            $list= Article::find()->andWhere(['status'=>1])->select(['id','title','cover','description','create_time','click'])            ->where(['category_id'=>$this->lanmu['id']])            ->andWhere(['status'=>1])->orderBy('create_time desc');        }        $this->data['list']=$list;//获取列表下的所以文章        //        获取同等级栏目        $self_url='';        if ($this->lanmu['pid']!=0){            $category_dengji= Category::find()->where(['pid'=>$this->lanmu['pid']])->asArray()->all();            $this->data['category_dengji']=$category_dengji;//获取等级的栏目        }        Yii::$app->params['news_nav'] = Category::NewsNavList();//获取资讯栏目列表        //判断显示图片还是显示文字        if (Yii::$app->params['lanmu']['name']=="gongsixinwen" || Yii::$app->params['lanmu']['name']=="zhuanti"){            Yii::$app->params['is_img'] = true;        }else{            Yii::$app->params['is_img'] = false;        }    }    protected function Get_case_list(){        parent::common();        $tree=ArrayHelper::CategoryList($this->lanmu['pid']);        $this->data['tree']=$tree;        $list= Article::find()->select(['id','title','cover','description','create_time','extend','click'])            ->orderBy('sort desc,create_time asc')//权重从高到低-发布时间从新到旧            ->where(['category_id'=>$this->lanmu['id'],'status'=>1])            ->orWhere(['category_id2'=>$this->lanmu['id'],'status'=>1]);//        $list_c=Article::find()->select(['id','title','cover','description','create_time','extend','click'])->where(['category_id'=>$this->lanmu['id']])//            ->andWhere(['status'=>1])//            ->andWhere(['like','np','c'])//            ->all();//        $this->data['list_c']=$list_c;        $this->data['list']=$list;//获取列表下的所以文章        $this->data['title'] = $this->lanmu['title'];    }    protected function Get_case_index(){        parent::common();        $lanmu_id_list=Category::find()->where(['pid'=>$this->lanmu['id']])->select(['id'])->asArray()->all();        $lanmu_id_list=ArrayHelper::getColumn($lanmu_id_list,'id');        array_push($lanmu_id_list, $this->lanmu['id']);//        var_dump($lanmu_id_list);        $list= Article::find()->select(['id','title','cover','description','create_time','extend','click'])->where(['in','category_id',$lanmu_id_list])            ->orderBy('sort desc,create_time asc')//权重从高到低-发布时间从新到旧            ->andWhere(['status'=>1]);//            ->andWhere(['not like','np','a']);//        $list_a= Article::find()->select(['id','title','cover','description','create_time','extend','click'])->where(['in','category_id',$lanmu_id_list])//            ->andWhere(['status'=>1])//            ->andWhere(['like','np','a'])//            ->all();//        $this->data['list_c']=$list_a;        $this->data['list']=$list;//获取列表下的所以文章        $this->data['title']='定制案例';//        var_dump($list);    }}
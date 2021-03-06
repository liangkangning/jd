<?php
use yii\helpers\Html;
use yii\helpers\Url;
use common\helpers\ArrayHelper;
use yii\widgets\Pjax;
$dataProvider = new \yii\data\ActiveDataProvider([
    'query' => \common\models\Category::find()->where(['pid'=>8]),
]);
$categoty1 = new \yii\data\ActiveDataProvider([
    'query' => \common\models\Category::find()->where(['pid'=>13]),
]);
$productProvider= new \yii\data\ActiveDataProvider([
    'query' => $this->params['product_list'],
    'pagination'=>[
        'pageSize'=>16,
        'pageSizeParam' => false,
    ],
]);
//var_dump($this->params['product_list']);
$listUrl='/'.$this->params['action'].'/list-';
$listUrlL='/'.$this->params['action'].'/';
?>
<div id="product">
    <div class="new_product_content">
        <?php if(isset(Yii::$app->params['urlad'])):?>
            <div class="banner">
                <div class="img"><img src="<?=Yii::$app->params['urlad']->imageUrl?>"/></div>
                <div class="content">
                    <?=Yii::$app->params['urlad']->content?>
                </div>
            </div>
        <?php else:?>
            <div class="banner">
                <?php foreach (\common\helpers\AdHelper::GetAd_list('mobil_category') as $key=>$value):?>
                    <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a>
                <?php endforeach; ?>
            </div>
        <?php endif;?>
        <div class="product_nav_list p_n_l_heigh commom_padding_l_r" >
            <div class="left">
                <ul>

                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/diwen/">低温锂电池</a></div>        </li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/fanbao/">防爆锂电池</a></div>        </li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lilizi/list-88.html">医疗锂电池</a></div>        </li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/dongli/">动力锂电池</a></div>        </li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/chuneng/">储能锂电池</a></div>        </li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/libattery/">18650锂电池  </a></div>        </li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lilizi/list-11.html">12V锂电池 </a></div></li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lilizi/list-12.html">24V锂电池 </a></div></li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lilizi/list-13.html">36V锂电池 </a></div> </li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lilizi/list-14.html">48V锂电池</a></div></li>
                    <li class="col-sm-4 col-xs-4"><div class="item"><a href="/lilizi/list-82.html">特种锂电池</a></div></li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lilizi/">锂离子电池</a></div>        </li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/taisuanli/">钛酸锂电池</a></div>        </li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/kuanwen/">宽温锂电池</a></div>        </li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/juhewu/">聚合物锂电池 </a></div>        </li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lifepo4/">磷酸铁锂电池  </a></div>        </li>
                    <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/news/case.html">定制案例 </a></div>        </li>
                </ul>
            </div>
            <div class="right">
                <div class="attr_more" data="two">
                    <div class="img img1">
                        <img src="/static/mobil_images/attr_more.png">
                    </div>
                    <div class="img img2">
                        <img src="/static/mobil_images/attr_more_list.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="product_nav_list_bottom">
            <div class="bottom_line" data="one">
                <div class="img img1"><img src="<?=Yii::getAlias('@web/static/mobil_images/category_nav_bottom1.jpg')?>" ></div>
                <div class="img img2"><img src="<?=Yii::getAlias('@web/static/mobil_images/category_nav_bottom2.jpg')?>"></div>
            </div>
        </div>
        <div class="product_imgs commom_padding_l_r p_list">
            <?php Pjax::begin(['options'=>['id'=>'pjax-list']])?>
            <ul class="w50">
                <?=\yii\widgets\ListView::widget([
                    'dataProvider' => $productProvider,
                    'itemView' => '_list',
                    'layout' => "{items}<div id='fenye'>{pager}</div>",//加个这就好了
                    'options' => [
                        'tag' => 'div',
                    ],
                    'itemOptions' => [
                        'tag' => false,
                    ],
                    'pager'=>[
                        //'options'=>['class'=>'hidden']//关闭自带分页
                        'prevPageLabel'=>'上一页',
                        'nextPageLabel'=>'下一页',
                    ],
                ]);
                ?>
            </ul>
            <?php Pjax::end()?>
        </div>
    </div>
</div>

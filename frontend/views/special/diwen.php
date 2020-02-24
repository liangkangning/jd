<?php
use yii\helpers\Html;
use yii\helpers\Url;
use common\helpers\ArrayHelper;
$dataProvider = new \yii\data\ActiveDataProvider([
    'query' => \common\models\Category::find()->where(['pid'=>8]),
]);
$categoty1 = new \yii\data\ActiveDataProvider([
    'query' => \common\models\Category::find()->where(['pid'=>13]),
]);
$productProvider= new \yii\data\ActiveDataProvider([
    'query' => $this->params['product_list'],
    'pagination'=>[
        'pageSize'=>24,
        'pageSizeParam' => false,
    ],
]);
$product_num = $this->params['product_list']->count();
//var_dump($this->params['product_list']);
$this -> beginPage();
$listUrl='/'.$this->params['action'].'/list-';
$listUrlL='/'.$this->params['action'].'/';


?>

<div class="product-list-index">
    <div class="banner_common header_banner_common relative pic_open">
        <?php if(isset(Yii::$app->params['urlad'])):?>
        <div class="img"><img src="<?=Yii::$app->params['urlad']->imageUrl?>" alt=""></div>
        <div class="text">
            <div class="content">
                <?=Yii::$app->params['urlad']->content?>
            </div>
        </div>
        <?php else:?>
        <div class="img"><img src="<?=Yii::$app->params['lanmu']['imageUrl']?>" alt="<?= Yii::$app->params['lanmu']['title']?>"></div>
        <div class="text">
            <div class="content">
                <?=Yii::$app->params['lanmu']['list_content']?>
            </div>
        </div>
        <?php endif;?>
    </div>
    <div class="top-title" id="car-attr-title">
        <div class="container">
            <div class="title size6-4p pull-left">
                <div class="pull-left font-bold"><?=Yii::$app->params['lanmu']['title']?></div>
                <?php if(!empty($this->params['choose'])):?>
                    <div class="choose">
                        <span class="pull-left"> > </span>
                        <?php foreach ($this->params['choose'] as $key=>$value): ?>
                            <?php $chooseIdArray= $this->params['chooseIdArray']?>
                            <div class="item pull-left">
                                <a href="javascript:location.href='<?=\common\helpers\UrlHelp::ProductChooseAttr($this->params['action'],$chooseIdArray,$key,$this->params['order'])?>';" rel="nofollow">
                                    <?=$value['attr']['name']?>:
                                <b><?=$value['name']?>  X</b>
                              </a>
                            </div>
                        <?php endforeach;?>
                        <div class="qingchu pull-left">
                            <?php if ($this->params['order']>0):?>
                                <a href="javascript:location.href='/<?=$this->params['action']?>/list-o<?=$this->params['order']?>.html';" rel="nofollow">清除所有</a>
                            <?php else:?>
                                <a href="javascript:location.href='/<?=$this->params['action']?>';" rel="nofollow">清除筛选</a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif;?>
            </div>
            <div class="pull-right"><p>共<span><?= $product_num?></span>个产品</p></div>
        </div>
    </div>
    <div class="category-attr container">
        <div class="selector-line">
            <div class="con-wrap extend">
                <div class="con-key"><span>特种锂电池</span></div>
                <div class="con-value">
                    <div class="list">
                        <ul>
                            <?=\yii\widgets\ListView::widget([
                                'dataProvider' => $dataProvider,
                                'itemView' => function ($model, $key, $index, $widget) {
                                    return Html::tag('li',Html::a(Html::encode($model->title),Yii::$app->homeUrl.$model->name.'/',['class'=>$model['id']==Yii::$app->params['lanmu']['id']?'current':'']));
                                },
                                'layout' => "{items}",//加个这就好了
                                'options' => [
                                    'tag' => 'div',
                                ],
                                'itemOptions' => [
                                    'tag' => false,
                                ],
                                'pager'=>['options'=>['id'=>'none']]
                            ]);
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="ext">

                </div>
            </div>
        </div>
        <div class="selector-line">
            <div class="con-wrap extend">
                <div class="con-key"><span>工业锂电池</span></div>
                <div class="con-value">
                    <div class="list">
                        <ul>
                            <?=\yii\widgets\ListView::widget([
                                'dataProvider' => $categoty1,
                                'itemView' => function ($model, $key, $index, $widget) {
                                    return Html::tag('li',Html::a(Html::encode($model->title),Yii::$app->homeUrl.$model->name.'/',['class'=>$model['id']==Yii::$app->params['lanmu']['id']?'current':'']));
                                },
                                'layout' => "{items}",//加个这就好了
                                'options' => [
                                    'tag' => 'div',
                                ],
                                'itemOptions' => [
                                    'tag' => false,
                                ],
                                'pager'=>['options'=>['id'=>'none']]
                            ]);
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="ext">

                </div>
            </div>
        </div>

        <?php foreach ($this->params['attr_list'] as $key=>$value): ?>
            <?php if ($key<3): ?>
                <div class="selector-line">
                    <div class="con-wrap extend">
                        <div class="con-key"><span><?=$value['attr']?></span></div>
                        <div class="con-value">
                            <div class="list">
                                <ul>
                                    <?php foreach ($value['values'] as $k=>$v): ?>
                                    <li>
                                        <a data-type="453" href="<?=$listUrl?><?=\common\helpers\UrlHelp::ProductAttr($this->params['chooseId'],$v['id'],$this->params['order']) ?>"><?=$v['name']?></a>
                                    </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <div class="ext">
                            <a class="more" href="javascript:;" style="visibility: visible;">更多<i></i></a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach;?>

        <?php if (count(Yii::$app->params['attr_list_end'])>0): ?>
            <div class="selector-line" id="selectorSenior">
                <div class="con-wrap extend">
                    <div class="con-key"><span>高级筛选</span></div>
                    <div class="con-value">
                        <div class="list">
                            <div class="sele-adve-tab">
                                <div class="seleadve-itemwrap">
                                    <?php foreach (Yii::$app->params['attr_list_end'] as $key=>$value): ?>
                                        <a class="seleadve-itemaaa" title="<?=$value['attr']?>">
                                            <span class="text"><?=$value['attr']?></span>
                                            <i class="arrow"></i>
                                        </a>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sele-adve-con">
                     <?php foreach (Yii::$app->params['attr_list_end'] as $key=>$value): ?>
                        <div class="sl-tab-cont-item" >
                            <div class="seleadvecon-item" style="display: none" data-title="<?=$value['attr']?>">
                                <ul class="selecbaseul">
                                    <?php foreach ($value['values'] as $k=>$v): ?>
                                        <li>
                                            <a data-type="453" title="<?=$v['name']?>" href="<?=$listUrl?><?=\common\helpers\UrlHelp::ProductAttr($this->params['chooseId'],$v['id'],$this->params['order']) ?>"><?=$v['name']?></a>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                                <div class="yseah-ext none"><a href="#" class="ys-e-multi multiposition single">多选<i></i></a></div>
                                <div class="seleadvecon-item" data-title="学年" style="display: none;">
                                    <ul class="selecbaseul">>
                                        <li>
                                            <a title="<?=$v['name']?>" data-type="453" href="<?=$listUrl?><?=\common\helpers\UrlHelp::ProductAttr($this->params['chooseId'],$v['id'],$this->params['order']) ?>"><i></i><?=$v['name']?></a>
                                        </li>
                                    </ul>
                                    <div class="yseah-ext none"><a href="#" class="ys-e-multi multiposition single">多选<i></i></a></div>
                                    <div class="ybtnwrap" style="display: none;"><button type="button" class="ybtn ybtn-sure">确定</button><button type="button" class="ybtn snb ybtncancel">取消</button></div></div>
                            </div>

                        </div>
                     <?php endforeach;?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="product-list">
        <div class="list container">
            <div class="top col-md-12">
              <div class="title pull-left"><h2><?=Yii::$app->params['lanmu']['title']?><span><?php foreach ($this->params['choose'] as $key=>$value): ?><?php $chooseIdArray= $this->params['chooseIdArray']?><?=$value['name']?> <?php endforeach;?></span></h2></div>
                <div class="pull-right order-by">
                    <ul>
                        <li class="<?= in_array($this->params['order'],array(0))? 'checked':''?>">
                            <a href="<?=\common\helpers\UrlHelp::ProductOrderBy($this->params['action'],$this->params['chooseIdArray'],$this->params['order'],array(0)) ?>">综合排序</a>
                        </li>
                        <li class="<?= in_array($this->params['order'],array(1,2))? 'checked':''?>">
                            <a href="<?=\common\helpers\UrlHelp::ProductOrderBy($this->params['action'],$this->params['chooseIdArray'],$this->params['order'],array(1,2)) ?>">电压排序</a></li>
                        <li class="<?= in_array($this->params['order'],array(3,4))? 'checked':''?>">
                            <a href="<?=\common\helpers\UrlHelp::ProductOrderBy($this->params['action'],$this->params['chooseIdArray'],$this->params['order'],array(3,4)) ?>">容量排序</a></li>
                        <li class="<?= in_array($this->params['order'],array(5))? 'checked':''?>">
                            <a href="<?=\common\helpers\UrlHelp::ProductOrderBy($this->params['action'],$this->params['chooseIdArray'],$this->params['order'],array(5)) ?>">新品</a></li>
                    </ul>
                </div>
            </div>
            <ul>
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
        </div>

    </div>

    <div class="product-content">
        <div class="img"><img src="<?=Yii::getAlias('@web/assets/images/product-content-bg.jpg')?>" alt=""></div>
        <div class="text">
            <div class="container">
                <?=Yii::$app->params['lanmu']['content']?>
            </div>

        </div>
    </div>




    <?php $this->beginContent('@app/views/layouts/public/hexin_jishu.php') ?>
    <?php $this->endContent() ?>
    <?php $this->beginContent('@app/views/layouts/public/seach_jingxuan_news.php') ?>
    <?php $this->endContent() ?>

</div>



<?php \frontend\assets\ProductAsset::register($this); ?>

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

        'pageSize'=>16,

        'pageSizeParam' => false,

    ],

]);



//var_dump($this->params['product_list']);

$this -> beginPage();

$listUrl='/'.$this->params['action'].'/list-';

$listUrlL='/'.$this->params['action'].'/';
$choose_atrr_name=array();
$choose_atrr_name_value=array();
foreach ($this->params['choose'] as $key=>$value){
//    var_dump($value);
    $choose_atrr_name[]=$value['attr']['name'];
    $choose_atrr_name_value[]=$value['name'];
}


?>
    <div id="product">
        <?php $this->beginContent('@app/mobil/layouts/public/common_left.php') ?>

        <?php $this->endContent() ?>

        <div class="commont_left_part">
            <div class="product_content">
                <section class="top">
                    <div class="top_paixun">
                        <ul>
                            <li class="col-sm-3 col-xs-3"><div class="item">
                                    <a href="">综合</a>
                                </div></li>
                            <li class="col-sm-3 col-xs-3"><div class="item">
                                    <a href="">电压</a>
                                </div></li>
                            <li class="col-sm-3 col-xs-3"><div class="item">
                                    <a href="">容量</a>
                                </div></li>
                            <li class="col-sm-3 col-xs-3"><div class="item" id="shuaxuan">
                                    <a href="javascript:void(0)" onclick="addAngle()">筛选</a>
                                </div></li>
                        </ul>
                    </div>
                    <div class="attr_more" data = "one">
                        <div class="img"><a href="http://m.juda.cn/product/478.html">
                            <img src="<?=Yii::getAlias('@web/static/mobil_images/attr_more.png')?>"/></a>
                        </div>

                    </div>

                </section>
                <section class="atrr_banner commom_padding_l_r ">

                    <div class="attr_nav">
                        <ul>
                            <li class="col-sm-4 col-xs-4" data="0">
                                <div class="item"><p>电压 ∨</p></div>
                            </li>
                            <li class="col-sm-4 col-xs-4" data="1">
                                <div class="item"><p>容量 ∨</p></div>
                            </li>
                            <li class="col-sm-4 col-xs-4" data="2">
                                <div class="item"><p>应用 ∨</p></div>
                            </li>
                        </ul>
                    </div>
                    <div class="banner">
                        <img src="<?=Yii::getAlias('@web/static/mobil_images/product_banner.jpg')?>"/>
                    </div>
                    <div class="attr_list commom_padding_l_r none">
                        <ul>

                            <li class="none">
                                <?php if(!in_array('电池电压',$choose_atrr_name)):?>
                                    <?php foreach ($this->params['attr_list'] as $key=>$value): ?>
                                        <?php if(strstr($value['attr'],'电池电压')):?>
                                            <div class="item">
                                                <?php foreach ($value['values'] as $k=>$v): ?>
                                                    <dl class="col-sm-6 col-xs-6">
                                                        <div class="dl_item">
                                                            <a href="<?=$listUrl?><?=\common\helpers\UrlHelp::ProductAttr($this->params['chooseId'],$v['id']) ?>"><?=$v['name']?> </a>
                                                        </div>
                                                    </dl>
                                                <?php endforeach;?>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach;?>
                                <?php else:?>
                                    <div class="checked">
                                        <div class="current">
                                             <span> 已选电压：<b>
                                                     <?php foreach ($choose_atrr_name as $key=>$value): ?>
                                                         <?php if ($value=='电池电压'): ?>
                                                             <?=$choose_atrr_name_value[$key]?>
                                                         <?php endif;?>
                                                     <?php endforeach;?>
                                                 </b></span>
                                        </div>
                                        <div class="qingchu">
                                            <a href="javascript:location.href='/<?=$this->params['action']?>/';" rel="nofollow">清除所有</a>
                                        </div>

                                    </div>

                                <?php endif; ?>
                            </li>
                            <li class="none">
                                <?php if(!in_array('电池容量',$choose_atrr_name)):?>
                                    <?php foreach ($this->params['attr_list'] as $key=>$value): ?>
                                        <?php if(strstr($value['attr'],'电池容量')):?>
                                            <div class="item">
                                                <?php foreach ($value['values'] as $k=>$v): ?>
                                                    <dl class="col-sm-6 col-xs-6">
                                                        <div class="dl_item">
                                                            <a href="<?=$listUrl?><?=\common\helpers\UrlHelp::ProductAttr($this->params['chooseId'],$v['id']) ?>"><?=$v['name']?> </a>
                                                        </div>
                                                    </dl>
                                                <?php endforeach;?>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach;?>
                                <?php else:?>
                                    <div class="checked">
                                        <div class="current">
                                             <span> 已选容量：<b>
                                                     <?php foreach ($choose_atrr_name as $key=>$value): ?>
                                                         <?php if ($value=='电池容量'): ?>
                                                             <?=$choose_atrr_name_value[$key]?>
                                                         <?php endif;?>
                                                     <?php endforeach;?>
                                                 </b></span>
                                        </div>
                                        <div class="qingchu">
                                            <a href="javascript:location.href='/diwen/';" rel="nofollow">清除所有</a>
                                        </div>

                                    </div>
                                <?php endif; ?>
                            </li>

                            <li class="none">
                                <?php if(!in_array('应用领域',$choose_atrr_name)):?>
                                    <?php foreach ($this->params['attr_list'] as $key=>$value): ?>
                                        <?php if(strstr($value['attr'],'应用领域')):?>
                                            <div class="item">
                                                <?php foreach ($value['values'] as $k=>$v): ?>
                                                    <dl class="col-sm-6 col-xs-6">
                                                        <div class="dl_item">
                                                            <a href="<?=$listUrl?><?=\common\helpers\UrlHelp::ProductAttr($this->params['chooseId'],$v['id']) ?>"><?=$v['name']?> </a>
                                                        </div>
                                                    </dl>
                                                <?php endforeach;?>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach;?>
                                <?php else:?>
                                    <div class="checked">
                                        <div class="current">
                                             <span> 已选应用领域：<b>
                                                     <?php foreach ($choose_atrr_name as $key=>$value): ?>
                                                         <?php if ($value=='应用领域'): ?>
                                                             <?=$choose_atrr_name_value[$key]?>
                                                         <?php endif;?>
                                                     <?php endforeach;?>
                                                 </b></span>
                                        </div>
                                        <div class="qingchu">
                                            <a href="javascript:location.href='/diwen/';" rel="nofollow">清除所有</a>
                                        </div>

                                    </div>
                                <?php endif; ?>
                            </li>


                        </ul>

                    </div>

                </section>
                <section class="p_list commom_padding_l_r">
                    <ul class="w100">

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

                </section>
            </div>
        </div>
        <div class="attr_all commom_padding_l_r none">
            <div class="content">
                <div class="list">
                    <ul>
                        <?php foreach ($this->params['attr_list'] as $key=>$value): ?>
                            <li>
                                <div class="attr_name"><?=$value['attr']?></div>
                                <div class="item">
                                    <?php foreach ($value['values'] as $k=>$v): ?>
                                        <dl class="col-sm-4 col-xs-4">
                                            <div class="dl_item">
                                                <a href="/diwen/list-45.html"><?=$v['name']?></a>
                                            </div>
                                        </dl>
                                    <?php endforeach;?>
                                </div></li>
                        <?php endforeach;?>
                        <li class="end"></li>
                    </ul>
                </div>
                <div class="attr_bottom">
                    <div class="reset">
                        <div class="item"><span>重置</span> </div>
                    </div>
                    <div class="suer">
                        <div class="item"><span>确定</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php $this->endPage()

?>
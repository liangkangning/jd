<?php$controller_name =  Yii::$app->controller->id;if ($controller_name=="news"){    $ids = explode(',',Yii::$app->params['web']['news_detail_product']);    foreach ($ids as $id) {        $list[] =  \common\models\Images::find()->where(['id' => $id])->one();    }}elseif ($controller_name=="product"){    $id = Yii::$app->request->get('id');    $cat = \common\models\CategoryImages::find()->where(['images_id' => $id])->column();    $list = \common\models\Images::find()->where(['in', 'category_id', $cat])->andWhere(['<>','id',$id])->orderBy('sort desc')->limit(4)->all();}else{    $list = \common\helpers\ProductHelper::GetListRand(4);}?><div class="common_xiangguan_product ">    <div class="top">        <div class="detail_common_h2"><h2>相关推荐</h2></div>    </div>    <div class="product_common section25">        <ul>            <?php foreach ($list as $k=>$v):?>                <li class="col-md-3">                    <div class="item">                        <div class="img"><a href="<?= $v['url']?>"><img src="<?= $v['imageUrl']?>" alt="<?= $v['title']?>" title="<?= $v['title']?>"></a></div>                        <div class="sub_title"><a href="<?= $v['url']?>" title="<?= $v['title']?>"><?= $v['title']?></a></div>                    </div>                </li>            <?php endforeach; ?>        </ul>    </div></div>
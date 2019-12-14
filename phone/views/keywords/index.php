<div class="key_index">
    <div class="banner">
        <?php foreach (\common\helpers\AdHelper::GetAd_list('mobil_keyword_index') as $key=>$value):?>

           <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a>

        <?php endforeach; ?>

    </div>

    <div class="cate_list section30 commom_padding_l_r">
        <div class="title"><h1>产品类别</h1></div>
        <div class="list">
            <ul>
                <?php foreach (Yii::$app->params['keyword_list'] as $key=>$value):?>
                <li><div class="item"><a href="<?=Yii::$app->request->baseUrl?>/keywords/<?=$value['name']?>/"><?=$value['keyword']?></a></div></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="getiao"></div>

    <div class="product_tuijian">

        <div class="title commom_padding_l_r"><h2>为您推荐</h2></div>

        <div class="list">

            <ul>

                <?php foreach (Yii::$app->params['tuijian'] as $key=>$value):?>

                    <li class="col-sm-6 col-xs-6"><div class="item">

                            <div class="img"><a href="<?=$value['url']?>"><img src="<?=$value['imageUrl']?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>

                            <div class="text"><a href="<?=$value['url']?>" title="<?=$value['title']?>"><?=$value['title']?></a></div>

                        </div></li>



                <?php endforeach; ?>





            </ul>

        </div>

    </div>



</div>
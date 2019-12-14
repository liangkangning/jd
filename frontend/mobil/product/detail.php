

<div class="product_detail">
    <div class="photo">
        <div class="title"><h1><?=$item->title?></h1></div>

        <div  class="page wrapper main-wrapper img">
            <div class="row clearfix">
                <div id="page-navigation" class="col span_6">

                    <div class="left page-nav-item"></div>


                    <div class="right page-nav-item"></div>


                </div>
            </div>
        </div>
        <div class="sliderContainer fullWidth clearfix">
            <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
                <?php foreach ($item->imagesUrl as $key=>$value): ?>

                <div class="rsContent">
                    <img class="rsImg" src="<?=$value ?>" alt="" />

                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
    <div class="content commom_padding_l_r">


        <div class="content">
            <p> <?=$item->content?></p>
        </div>

    </div>
    <div class="common">
        <div class="ad">
            <div class="img">
                <a href=""><img src="<?=Yii::getAlias('@web/static/mobil_images/product_ad.jpg')?>"/></a>
            </div>
        </div>
    </div>
    <div class="product_tuijian">
        <div class="title"><h2>为您推荐</h2></div>
        <div class="list">
            <ul>
                <?php foreach (\common\helpers\ProductHelper::GetListRand(4) as $key=>$value):?>
                    <li class="col-sm-6 col-xs-6"><div class="item">
                            <div class="img"><a href="<?=$value['url']?>"><img src="<?=$value['imageUrl']?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                            <div class="text"><a href="<?=$value['url']?>" title="<?=$value['title']?>"><?=$value['title']?></a></div>
                        </div></li>

                <?php endforeach; ?>


            </ul>
        </div>
    </div>
</div>

	
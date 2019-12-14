<?php



use yii\helpers\Html;

use yii\helpers\Url;

$this->beginPage();

?>

<div class="news_item">
    <div class="banner">
        <?php foreach (\common\helpers\AdHelper::GetAd_list('mobil_news_detail') as $key=>$value):?>
            <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a>
        <?php endforeach; ?>
    </div>
    <div class="nav">
        <ul>
            <li class="col-sm-3 col-xs-3">
                <div class="item"><a href="/lilizi/list-82.html">军用锂电池</a></div>
            </li>
            <li class="col-sm-3 col-xs-3">
                <div class="item"><a href="/diwen/">低温锂电池</a></div>
            </li>
            <li class="col-sm-3 col-xs-3">
                <div class="item"><a href="/dongli/">动力锂电池</a></div>
            </li>
            <li class="col-sm-3 col-xs-3">
                <div class="item end"><a href="/chuneng/">储能锂电池</a></div>
            </li>
        </ul>
    </div>
    <div class="content commom_padding_l_r">
        <div class="title">
            <h1><?= $data['detail']['title']; ?></h1>
        </div>
        <div class="cetent">
        <div class="new_title"><!--Juda-->
            <span class="kuan"></span>
            <span><?= date('Y-m-d',$data['detail']['create_time']); ?>&nbsp;&nbsp;&nbsp;</span>
            <span class="kuan"></span>
            <span>点击量：<em><?=$data['detail']['click']?></em>次</span>

        </div>
        </div>
        <div class="text">
            <p>
                <?= \common\helpers\Html::decode($data['detail']['content']); ?>

            </p>
        </div>
    </div>
</div>
<div class="xiangguan_news ">
    <div class="title commom_padding_l_r"><h2>相关文章</h2></div>
    <div class="list commom_padding_l_r">
        <ul>
            <?php foreach ($this->params['randAtricle'] as $key=>$value):?>
                <?php if ($key>0&&$key<6):?>


                    <li>

                        <div class="item"><p><span></span><a href="/news/<?=$value['id']?>.html" title="<?=$value['title']?>"><?=\common\helpers\StringHelper::truncate($value['title'],20)?></a></p></div>

                    </li>
                <?php endif?>

            <?php endforeach;?>

        </ul>
    </div>
</div>
<div class="product_tuijian">
    <div class="title"><h2>为您推荐</h2></div>
    <div class="list">
        <ul>
            <?php foreach (\common\helpers\ProductHelper::GetListRand(2) as $key=>$value):?>
                <li class="col-sm-6 col-xs-6"><div class="item">
                        <div class="img"><a href="<?=$value['url']?>"><img src="<?=$value['imageUrl']?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                        <div class="text"><a href="<?=$value['url']?>" title="<?=$value['title']?>"><?=$value['title']?></a></div>
                    </div></li>

            <?php endforeach; ?>


        </ul>
    </div>
</div>



<?php $this->endPage()

?>


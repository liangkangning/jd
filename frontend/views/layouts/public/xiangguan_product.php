<div class="common_xiangguan_product ">    <div class="top">        <div class="detail_common_h2"><h2>相关推荐</h2></div>    </div>    <div class="product_common section30">        <ul>            <?php foreach (\common\helpers\ProductHelper::GetListRand(4) as $k=>$v):?>                <li class="col-md-3">                    <div class="item">                        <div class="img"><a href="<?= $v['url']?>"><img src="<?= $v['imageUrl']?>" alt="<?= $v['title']?>" title="<?= $v['title']?>"></a></div>                        <div class="sub_title"><a href="<?= $v['url']?>" title="<?= $v['title']?>"><?= $v['title']?></a></div>                    </div>                </li>            <?php endforeach; ?>        </ul>    </div></div>
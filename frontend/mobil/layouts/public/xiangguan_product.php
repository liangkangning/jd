<div class="common_xiangguan_product">
    <div class="top">
        <div class="top_content">
            <div class="left"><p>产品相关推荐</p></div>
            <div class="right" style="display: none;"><p>换一批</p></div>
        </div>
    </div>
    <div class="content">
        <ul>
            <?php foreach (\common\helpers\ProductHelper::GetListRand(4) as $key=>$value):?>
            <li class="li<?=$key?>">
                <div class="item ">
                    <div class="img"><a href="<?=$value['url']?>"><img src="<?=$value['imageUrl']?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                    <div class="text"><a href="<?=$value['url']?>" title="<?=$value['title']?>"><?=$value['title']?></a></div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>

    </div>
</div>
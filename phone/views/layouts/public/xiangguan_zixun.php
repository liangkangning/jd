<div class="common_xiangguan_zixun">
    <div class="top">
        <div class="top_content">
            <div class="left"><p><a href="/news/">相关资讯</a></p></div>
            <div class="right"><a href="/news/">更多</a></div>
        </div>
    </div>
    <div class="content">
        <div class="pp">
            <div class="titl"><a href="/news/<?=$this->params['randAtricle'][0]['id']?>.html"><?=$this->params['randAtricle'][0]['title']?></a></div>
            <div class="p"><p><?= \common\helpers\StringHelper::truncate($this->params['randAtricle'][0]['description'],80) ?></p></div>
            <div class="xiangqin"><a href="/news/<?=$this->params['randAtricle'][0]['id']?>.html">点击详情</a></div>
        </div>
        <div class="pp">
            <div class="list">
                <ul>
                    <?php foreach ($this->params['randAtricle'] as $key=>$value):?>
                        <?php if ($key>0&&$key<6):?>
                    <li>
                        <div class="item"><span></span><a href="/news/<?=$value['id']?>.html" title="<?=$value['title']?>"><?=\common\helpers\StringHelper::truncate($value['title'],20)?></a></div>
                    </li>
                            <?php endif?>
                    <?php endforeach;?>

                </ul>
            </div>
        </div>
        <div class="pp">
            <div class="list">
                <ul>
                    <?php foreach ($this->params['randAtricle'] as $key=>$value):?>
                        <?php if ($key>=6):?>
                            <li>
                                <div class="item"><span></span><a href="/news/<?=$value['id']?>.html" title="<?=$value['title']?>"><?=$value['title']?></a></div>
                            </li>
                        <?php endif?>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</div>
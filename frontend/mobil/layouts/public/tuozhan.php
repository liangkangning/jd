 <div class="tuozhan">
        <ul>
            <li class="col-md-4 col-sm-4">
                <div class="item">
                    <div class="commont_title">
                        <div class="title"><h3><a href="/make/">特种电池研究院</a></h3></div>
                        <div class="more"><a href="/make/">更多</a></div>
                    </div>
                    <div class="text">
                        <div class="img"><a href="/make/"><img src="<?=Yii::getAlias('@web/static/images/about_tzyjy.jpg')?>" alt="特种电池研究院" title="特种电池研究院" /></a></div>
                        <div class="p"><p>特种锂离子电池工程研究院是由东莞钜大电子有限公司兴建，并与中南大学、华南理工大学和东莞理工学院相关科研团队联合运营的特种锂离子电池产业化研发中心。本院拥有<strong>低温充放电技术、低温高倍率放电技术、锂离子电池快充技术、防爆技术</strong>等成熟特种锂离子电池解决方案，可满足客户特殊环境、特殊性能和特殊用途的需求。</p></div>
                    </div>
                </div>
            </li>
            <li class="col-md-4 col-sm-4">
                <div class="item">
                    <div class="commont_title">
                        <div class="title"><h3><a href="/about/#about_zizhi">军工认证</a></h3></div>
                        <div class="more"><a href="/about/#about_zizhi">更多</a></div>
                    </div>
                    <div class="text">
                        <div class="img"><a href="/about/#about_zizhi"><img src="<?=Yii::getAlias('@web/static/images/junegong_renzhen.jpg')?>" alt="武器装备质量管理体系认证" title="武器装备质量管理体系认证" /></a></div>

                    </div>
                </div>
            </li>
            <li class="col-md-4 col-sm-4">
                <div class="item">
                    <div class="commont_title">
                        <div class="title"><h3><a href="/news/">相关资讯</a></h3></div>
                        <div class="more"><a href="/news/">更多</a></div>
                    </div>

                    <div class="text">
                        <div class="list">
                            <dl>
                                <?php foreach ( \common\helpers\ArticleHelper::GetListRand('36,37,38',11) as $key=>$value):?>
                                    <dd>
                                        <p><span>■</span><a href="/news/<?=$value['id']?>.html" title="<?=$value['title']?>"><?=$value['title']?></a></p>
                                    </dd>
                                <?php endforeach;?>
                            </dl>
                        </div></div>
                </div>
            </li>
        </ul>
    </div>
<?php

$listUrl='/product/detail?id=';

use \yii\helpers\Html;

?>


<div class="index">

    <div class="banner">
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
                <?php foreach (\common\helpers\AdHelper::GetAd_list('mobil_index') as $key=>$value):?>

                    <div class="rsContent">
                        <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </div>
    <section>
        <div class="dianxin_nav">
            <ul>
                <li class="col-sm-4 col-xs-4"><div class="item">
                        <div class="img"><a href="/diwen/"><img src="<?=Yii::getAlias('@web/static/mobil_images/dianxin_nav1.png')?>" alt="产品中心" title="产品中心" />
                            </a></div>
                    </div></li>
                <li class="col-sm-4 col-xs-4"><div class="item">
                        <div class="img"><a href="/news/case.html"><img src="<?=Yii::getAlias('@web/static/mobil_images/dianxin_nav2.png')?>" alt="定制案例" title="定制案例" />
                            </a></div>
                    </div></li>
                <li class="col-sm-4 col-xs-4"><div class="item">
                        <div class="img"><a href="/make/"><img src="<?=Yii::getAlias('@web/static/mobil_images/dianxin_nav3.png')?>" alt="研发制造" title="研发制造" />
                            </a></div>
                    </div></li>
                <li class="col-sm-4 col-xs-4"><div class="item">
                        <div class="img"><a href="/about/"><img src="<?=Yii::getAlias('@web/static/mobil_images/dianxin_nav4.png')?>" alt="公司简介" title="公司简介" />
                            </a></div>
                    </div></li>
                <li class="col-sm-4 col-xs-4"><div class="item">
                        <div class="img"><a href="/zizhi/"><img src="<?=Yii::getAlias('@web/static/mobil_images/dianxin_nav5.png')?>" alt="荣誉资质" title="荣誉资质"/>
                            </a></div>
                    </div></li>
                <li class="col-sm-4 col-xs-4"><div class="item">
                        <div class="img"><a href="/news/gongsixinwen.html"><img src="<?=Yii::getAlias('@web/static/mobil_images/dianxin_nav6.png')?>" alt="公司新闻" title="公司新闻" />
                            </a></div>
                    </div></li>



            </ul>
        </div>
    </section>
    <section>
        <div class="product">
            <div class="list">
                <div class="title commom_padding_l_r"><h2>特种锂电池</h2></div>
                <div class="category commom_padding_l_r"><ul>

                        <li class="col-sm-3 col-xs-3"><a href='/lilizi/list-82.html'>军用锂电池</a></li>
                        <li class="col-sm-3 col-xs-3"><a href='/diwen/'>低温锂电池</a></li>
                        <li class="col-sm-3 col-xs-3"><a href='/taisuanli/'>钛酸锂电池</a></li>
                        <li class="col-sm-3 col-xs-3"><a href='/fanbao/'> 防爆锂电池</a></li>


                    </ul></div>
                <div class="listitem">
                    <ul>
                        <?php foreach ($this->params['tezhong'] as $key=>$value):?>
                            <?php if($key<4):?>
                                <li class="col-sm-6 col-xs-6"><div class="item">
                                        <div class="img"><a href="<?= $value->url ?>"><img src="<?=$value['imageUrl']?>" alt="<?=$value['title']?>"  title="<?=$value['title']?>"/></a></div>
                                        <div class="text"><a href="<?= $value->url ?>" title="<?=$value['title']?>"><?= $value['title']?></a></div>
                                    </div>
                                </li>
                            <?php endif?>

                        <?php endforeach;?>

                    </ul>
                </div>
            </div>
            <div class="list">
                <div class="title commom_padding_l_r"><h2><a href="/dongli/">动力/储能锂电池</a></h2></div>
                <div class="category commom_padding_l_r"><ul>
                        <li class="col-sm-3 col-xs-3"><a href="/chuneng/list-11.html">12V锂电池       </a></li>
                        <li class="col-sm-3 col-xs-3"><a href="/chuneng/list-12.html">24V锂电池       </a></li>
                        <li class="col-sm-3 col-xs-3"><a href="/chuneng/list-13.html">36V锂电池       </a></li>
                        <li class="col-sm-3 col-xs-3"><a href="/chuneng/list-14.html">48V锂电池</a></li>
                    </ul></div>
                <div class="listitem">
                    <ul>
                        <?php foreach ($this->params['cuneng_list'] as $key=>$value):?>
                            <?php if($key<4):?>
                                <li class="col-sm-6 col-xs-6"><div class="item">
                                        <div class="img"><a href="<?= $value->url ?>"><img src="<?=$value['imageUrl']?>" alt="<?=$value['title']?>"  title="<?=$value['title']?>"/></a></div>
                                        <div class="text"><a href="<?= $value->url ?>" title="<?=$value['title']?>"><?= $value['title']?></a></div>
                                    </div>
                                </li>
                            <?php endif?>
                        <?php endforeach;?>

                    </ul>
                </div>
            </div>

            <div class="list">
                <div class="title commom_padding_l_r"><h2>工业锂电池</h2></div>
                <div class="category commom_padding_l_r"><ul>
                        <li class="col-sm-3 col-xs-3"><a href='/lilizi/'> 锂离子电池</a></li>
                        <li class="col-sm-3 col-xs-3"><a href='/libattery/'>18650锂电池</a></li>
                        <li class="col-sm-3 col-xs-3"><a href='/lifepo4/'>磷酸铁锂电池</a></li>
                        <li class="col-sm-3 col-xs-3"><a href='/juhewu/'> 聚合物锂电池</a></li>

                    </ul></div>
                <div class="listitem">
                    <ul>
                        <?php foreach ($this->params['gongye'] as $key=>$value):?>
                            <?php if($key<4):?>
                                <li class="col-sm-6 col-xs-6"><div class="item">
                                        <div class="img"><a href="<?= $value->url ?>"><img src="<?=$value['imageUrl']?>" alt="<?=$value['title']?>"  title="<?=$value['title']?>"/></a></div>
                                        <div class="text"><a href="<?= $value->url ?>" title="<?=$value['title']?>"><?= $value['title']?></a></div>
                                    </div>
                                </li>
                            <?php endif?>
                        <?php endforeach;?>

                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="common">
            <div class="ad">
                <div class="img">
                    <a href="http://p.qiao.baidu.com/cps/chat?siteId=4576215&userId=2111997" rel="nofollow" target="_blank"><img src="<?=Yii::getAlias('@web/static/mobil_images/ad.jpg')?>" alt="钜大锂电，16年专注锂电池定制" title="钜大锂电，16年专注锂电池定制"></a>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="safe">
            <div class="title"><h2>钜大锂电-超可靠  超安全</h2></div>
            <div class="text"><p>16年专注军工、医疗、机器人、AGV、轨道交通、<br>物联网锂电池定制！！
                </p></div>
        </div>
    </section>
    <section>
        <div class="jianjie ">
            <div class="pp bg ">
                <div class="commom_padding_l_r">
                    <div class="title"><p><span>1</span><b>军工企业  实力雄厚</b></p></div>
                    <div class="content"><p>公司通过武器装备质量体系认证、军工三级保密资格认证、武器装备科研生产许可证认证、国家高新技术企业认证；2017年东莞市规模效益倍增重点企业；2017年东莞南城内资工业纳税第3名。</p></div>
                    <div class="img">
                        <li class="col-sm-6 col-xs-6 left_padding_4">
                            <img src="<?=Yii::getAlias('@web/static/mobil_images/index_zizhi_1.jpg')?>" alt="武器装备质量管理系统认证证书" title="武器装备质量管理系统认证证书" />
                        </li>
                        <li class="col-sm-6 col-xs-6 right_padding_4">
                            <img src="<?=Yii::getAlias('@web/static/mobil_images/index_zizhi_2.jpg')?>" alt="武器装备科研生产单位三级保密证书" title="武器装备科研生产单位三级保密证书" />
                        </li>
                    </div>
                </div>
            </div>

            <div class="pp">
                <div class="commom_padding_l_r">
                    <div class="title"><p><span>2</span><b>特种电池研究院</b></p></div>
                    <div class="content"><p>特种锂电研究院是我司与中南大学、华南理工大学和东莞理工学院联合创办，拥有<b>低温充放电技术、低温高倍率放电、锂电池快充技术、防爆技术</b>等成熟特种锂离子电池解决方案，可满足客户特殊环境、特殊性能和特殊用途的需求。</p></div>
                    <div class="img">

                        <img src="<?=Yii::getAlias('@web/static/mobil_images/index_yanjiuyuan.jpg')?>" alt="特种电池研究院" title="特种电池研究院" />


                    </div>
                </div>
            </div>

            <div class="pp bg">
                <div class="commom_padding_l_r">
                    <div class="title"><p><span>3</span><b>60余人研发团队</b></p></div>
                    <div class="content"><p>钜大公司技术中心包括工业设计、电子、结构、软件、电化学、电源、工艺、测控、信号处理和仪器仪表等专业技术门类，团队现有60余人，其中有专家教授9人，副教授专家2人，中高级工程师12人，可提供“一对一”的锂电定制化服务和技术上门支持。</p></div>
                    <div class="img">
                        <img src="<?=Yii::getAlias('@web/static/mobil_images/index_tean.jpg')?>" alt="60余人研发团队" title="60余人研发团队" />
                    </div>
                </div>
            </div>
            <div class="pp">
                <div class="commom_padding_l_r">
                    <div class="title"><p><span>4</span><b>六大实验室  斥资3000万元</b></p></div>
                    <div class="content"><p>测试中心由<b>安全实验室、环境实验室、环保实验室、电源实验室、和电性能实验室和老化室</b>六大实验室组成，能够自主完成原/辅材料、零配件和电池模组的全项目测试认证，检测技术达到国际标准。</p></div>
                    <div class="img">
                        <img src="<?=Yii::getAlias('@web/static/mobil_images/index_shiyanshi.jpg')?>" alt="六大实验室" title="六大实验室" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commom_padding_l_r">
        <div class="kehu">
            <div class="title"><h2>我们的客户</h2></div>
            <div class="img"><img src="<?=Yii::getAlias('@web/static/mobil_images/index_kehu.jpg')?>" alt="" /></div>
        </div>
    </section>
    <section>
        <div class="beian">
            <p>
                粤ICP备07049936号-3<br />
                2018 东莞市钜大电子有限公司  版权所有
            </p>
        </div>
    </section>
</div>



<header class="<?= Yii::$app->params['className'] ?>_class">
    <section class="container">
        <div class="header_top">
            <div class="logo">
                <div class="l_p">
                    <div class="img">
                        <a href="/">
                            <img src="<?=Yii::getAlias('@web/assets/images/logo.jpg')?>" alt="钜大锂电-超可靠 超安全" title="钜大锂电-超可靠 超安全" class="logo-default">
                        </a>
                    </div>
                </div>
            </div>
           <div class="right_part pull-right">
               <div class="as">
                   <li><span href="#"><img src="/assets/images/02.png" alt=""></span></li>
                   <li><a href="/contact/">联系我们</a></li>

               </div>

               <div class="en">
                   <div class="dropdown">
                       <a class="zhu_lang" href="/">简体中文
                           <span class="caret"></span>
                       </a>
                       <ul class="dropdown-menu" aria-labelledby="dLabel">
                           <li><a href="https://www.large.net">English</a></li>
                       </ul>
                   </div>
               </div>
           </div>
        </div>
    </section>
    <section id="nav_bar" class="container-full">
        <nav>
            <div class="container">
                <div class="pull-left">
                    <div class="allnav" id="<?=Yii::$app->params['nav_tree_block']?'nav_tree':'' ?>"><div class="text"><p>全部分类<span class="top_list_ico"></span></p></div>
                        <div class="list  hidden-sm <?=Yii::$app->params['is_index']?'is_index':''?>">
                            <div class="pp">
                                <div class="title"><a href="/special/">特种锂电池</a></div>
                                <div class="item_list">
                                    <ul>
                                        <li>
                                            <div class="item"><a href="/diwenzt/">低温锂电池</a></div>
                                        </li>
                                        <li>
                                            <div class="item"><a href="/kuanwen/">宽温锂电池</a></div>
                                        </li>
                                        <li>
                                            <div class="item"><a href="/fanbao/">防爆锂电池</a></div>
                                        </li>
                                        <li>
                                            <div class="item"><a href="/taisuanli/">钛酸锂电池</a></div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="pp">
                                <div class="title"><a href="/industrial/">工业锂电池</a></div>
                                <div class="item_list">
                                    <ul>
                                        <li>
                                            <div class="item"><a href="/lilizi/">锂离子电池 </a></div>
                                        </li>
                                        <li>
                                            <div class="item"><a href="/lifepo4/">磷酸铁锂电池</a></div>
                                        </li>
                                        <li>
                                            <div class="item"><a href="/libattery/">18650锂电池</a></div>
                                        </li>
                                        <li>
                                            <div class="item"><a href="/juhewu/">聚合物锂电池</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pp">
                                <div class="title"><a href="/dongli/">储能/动力电池</a></div>
                                <div class="item_list">
                                    <ul>
                                        <li>
                                            <div class="item"><a href="/lilizi/list-11.html">12V锂电池</a></div>
                                        </li>
                                        <li>
                                            <div class="item"><a href="/lilizi/list-12.html">24V锂电池</a></div>
                                        </li>
                                        <li>
                                            <div class="item"><a href="/lilizi/list-13.html">36V锂电池</a></div>
                                        </li>
                                        <li>
                                            <div class="item"><a href="/lilizi/list-14.html">48V锂电池</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pp end">
                                <div class="title"><a href="/news/case.html">定制案例</a></div>
                                <div class="item_list">
                                    <ul>
                                        <li>
                                            <div class="item"><a href="/news/junjing.html">特种设备</a></div>
                                        </li>
                                        <li>
                                            <div class="item"><a href="/news/yiliao.html">医疗设备</a></div>
                                        </li>
                                        <li>
                                            <div class="item"><a href="/news/kantan.html">勘探测绘</a></div>
                                        </li>
                                        <li>
                                            <div class="item"><a href="/news/shouchi.html">手持设备</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pull-left">
                    <div class="navlist" data-key="<?=isset(Yii::$app->params['top_lanmu'])?Yii::$app->params['top_lanmu']['name']:''?>">
                        <ul>
                            <li  class="active">
                                <div class="item"><a href="<?= Yii::$app->homeUrl;?>">首页</a></div>
                            </li>
                            <li>
                                <div class="item"><a href="/tzcell/">特种电芯</a></div>
                                <div class="item_list">
                                    <div class="container">
                                        <div class="col-md-2 col-sm-2"></div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/diwen18650/"><img src="/assets/images/nav_diwen18650.png" alt="低温18650电芯" title="低温18650电芯"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/diwen18650/">低温18650电芯</a>
                                            </div>

                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/diwenlipo/"><img src="/assets/images/nav_diwenlipo.png" alt="低温聚合物电芯" title="低温聚合物电芯"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/diwenlipo/">低温聚合物电芯</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/tz26650/"><img src="/assets/images/nav_tz26650.png" alt="特种26650电芯" title="特种26650电芯"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/tz26650/">特种26650电芯</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/fangbaocell/"><img src="/assets/images/nav_fangbaocell.png" alt="防爆电芯" title="防爆电芯"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/fangbaocell/">防爆电芯</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="active">
                                <div class="item"><a href="/tzpower/">特种电源</a></div>
                                <div class="item_list">
                                    <div class="container">
                                        <div class="col-md-4 col-sm-4"></div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/charger/"><img src="/assets/images/nav_charger.png" alt="充电器" title="充电器"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/charger/">充电器</a>
                                            </div>
                                        </div>
                                        <div class="child_item"></div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/bzpowe/"><img src="/assets/images/nav_bzpowe.png" alt="标准电源" title="标准电源"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/bzpowe/">标准电源</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="active">
                                <div class="item"><a href="/special/">特种电池</a></div>
                                <div class="item_list">
                                    <div class="container">
                                        <div class="col-md-2 col-sm-2"></div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/diwenzt/"><img src="/assets/images/nav_diwen.png" alt="低温锂电池" title="低温锂电池"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/diwenzt/">低温锂电池</a>
                                            </div>

                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/kuanwen/"><img src="/assets/images/nav_kuanwen.png" alt="宽温锂电池" title="宽温锂电池"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/kuanwen/">宽温锂电池</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/fanbao/"><img src="/assets/images/nav_fangbao.png" alt="防爆锂电池" title="防爆锂电池"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/fanbao/">防爆锂电池</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/taisuanli/"><img src="/assets/images/nav_taisuan.png" alt="钛酸锂电池" title="钛酸锂电池"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/taisuanli/">钛酸锂电池</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="active">
                                <div class="item"><a href="/industrial/">工业电池</a></div>
                                <div class="item_list">
                                    <div class="container">
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/lilizi/"><img src="/assets/images/nav_lilizi.png" alt="锂离子电池" title="锂离子电池"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/lilizi/">锂离子电池</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/libattery/"><img src="/assets/images/nav_18650.png" alt="18650锂电池" title="18650锂电池"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/libattery/">18650锂电池</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/dongli/"><img src="/assets/images/nav_dongli.png" alt="动力锂电池" title="动力锂电池"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/fanbao/">动力锂电池</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/chuneng/"><img src="/assets/images/nav_chuneng.png" alt="储能锂电池" title="储能锂电池"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/chuneng/">储能锂电池</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/lifepo4/"><img src="/assets/images/nav_lifepo4.png" alt="磷酸铁锂电池" title="磷酸铁锂电池"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/lifepo4/">磷酸铁锂电池</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/juhewu/"><img src="/assets/images/nav_juhewu.png" alt="聚合物锂电池" title="聚合物锂电池"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/juhewu/">聚合物锂电池</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="active">
                                <div class="item"><a href="/news/case.html">定制案例   </a></div>
                                <div class="item_list">
                                    <div class="container">
                                        <div class="col-md-2 col-sm-2"></div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/news/junjing.html"><img src="/assets/images/nav_tezhong.png" alt="特种设备" title="特种设备"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/news/junjing.html">特种设备</a>
                                            </div>
                                        </div>

                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/news/yiliao.html"><img src="/assets/images/nav_yiliao.png" alt="医疗设备" title="医疗设备"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/news/yiliao.html">医疗设备</a>
                                            </div>
                                        </div>

                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/news/kantan.html"><img src="/assets/images/nav_kantan.png" alt="勘探测绘" title="勘探测绘"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/news/kantan.html">勘探测绘</a>
                                            </div>

                                        </div>

                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/news/shouchi.html"><img src="/assets/images/nav_shouchi.png" alt="手持设备" title="手持设备"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/news/shouchi.html">手持设备</a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item"><a href="/make/">研发&制造  </a></div>
                                <div class="item_list">
                                    <div class="container">
                                        <div class="col-md-2 col-sm-2"></div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/make/"><img src="/assets/images/nav_make.png" alt="锂电研究院" title="锂电研究院"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/make/">锂电研究院</a>
                                            </div>

                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/jishu/"><img src="/assets/images/nav_jishu.png" alt="技术中心" title="技术中心"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/jishu/">技术中心</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/shiyanshi/"><img src="/assets/images/nav_shiyanshi.png" alt="科研实验室" title="科研实验室"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/shiyanshi/">科研实验室</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/zhizao/"><img src="/assets/images/nav_zhizao.png" alt="制造中心" title="制造中心"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/zhizao/">制造中心</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="active">
                                <div class="item"><a href="/news/">资讯中心</a></div>
                                <div class="item_list">
                                    <div class="container">
                                        <div class="col-md-1 col-sm-1"></div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/news/gongsixinwen.html"><img src="/assets/images/nav_gongsixinwen.png" alt="公司新闻" title="公司新闻"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/news/gongsixinwen.html">公司新闻</a>
                                            </div>
                                        </div>

                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/news/jishuzixun.html"><img src="/assets/images/nav_dianchijishu.png" alt="电池技术" title="电池技术"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/news/jishuzixun.html">电池技术</a>
                                            </div>
                                        </div>

                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/news/xuangou.html"><img src="/assets/images/nav_dianchixuangou.png" alt="电池选购" title="电池选购"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/news/xuangou.html">电池选购</a>
                                            </div>

                                        </div>

                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/news/baoyang.html"><img src="/assets/images/nav_weihubaoyang.png" alt="维护保养" title="维护保养"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/news/baoyang.html">维护保养</a>
                                            </div>
                                        </div>

                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/news/zhuanti.html"><img src="/assets/images/nav_dianchizhuangti.png" alt="电池专题" title="电池专题"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/news/zhuanti.html">电池专题</a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item"><a href="/about/">关于钜大</a></div>
                                <div class="item_list">
                                    <div class="container">
                                        <div class="col-md-1 col-sm-1"></div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/about/"><img src="/assets/images/nav_about.png" alt="公司简介" title="公司简介"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/about/">公司简介</a>
                                            </div>

                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/licheng/"><img src="/assets/images/nav_licheng.png" alt="发展历程" title="发展历程"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/licheng/">发展历程</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/zizhi/"><img src="/assets/images/nav_zizhi.png" alt="公司资质" title="公司资质"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/zizhi/">公司资质</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/contact/"><img src="/assets/images/nav_contact.png" alt="联系我们" title="联系我们"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/contact/">联系我们</a>
                                            </div>
                                        </div>
                                        <div class="child_item">
                                            <div class="nav_img">
                                                <a href="/job/"><img src="/assets/images/nav_job.png" alt="人才招聘" title="人才招聘"></a>
                                            </div>
                                            <div class="text">
                                                <a href="/job/">人才招聘</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="search_form_head">
            <?php $this->beginContent('@app/views/layouts/public/seach_common.php') ?>
            <?php $this->endContent() ?>
        </div>
    </section>
</header>
<?php

use common\models\Images;

Yii::$app->params['list'] = Images::find()->where(['like', 'title', '低温'])->limit(8)->orderBy("sort desc")->all();
?>
<div class="category-index-2021">
    <div class="banner_common header_banner_common relative">
        <div class="img"><img src="/assets/images/tezhong_banner.jpg" alt=""></div>
        <div class="text">
            <div class="content">
            </div>
        </div>
    </div>
    <div class="nav-list container">
        <ul>
            <li class="checked">
                <div class="item">
                    <div class="title size4-6p">超低温放电</div>
                    <div class="sub_title size6-4p">-50℃放电（极限）</div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="title size4-6p">超低温放电</div>
                    <div class="sub_title size6-4p">-50℃放电（极限）</div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="title size4-6p">超低温放电</div>
                    <div class="sub_title size6-4p">-50℃放电（极限）</div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="title size4-6p">超低温放电</div>
                    <div class="sub_title size6-4p">-50℃放电（极限）</div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="title size4-6p">超低温放电</div>
                    <div class="sub_title size6-4p">-50℃放电（极限）</div>
                </div>
            </li>

        </ul>
    </div>
    <div class="main">
        <div class="part">
            <div class="container">
                11111
            </div>
        </div>
        <div class="part none">
            <div class="container">
                2222
            </div>
        </div>
        <div class="part none">
            <div class="container">
                3333
            </div>
        </div>
        <div class="part none">
            <div class="container">
                4444
            </div>
        </div>
        <div class="part none">
            <div class="container">
                5555
            </div>
        </div>


    </div>
    <div class="common_part">
        <div class="container index">
           <section class="section100 index_yingyong">
               <div class="title text-center">
                   <h2 class="size1-9p">低温锂电池应用领域</h2>
                   <div class="p size5-5p section20"><p>特种设备、航空航天、极地科考、寒带抢险、电力通信、公共安全、医疗电子、铁路、船舶、机器人等领域</p></div>
               </div>
               <div class="list section40">
                   <ul>
                       <li class="col-md-4">
                           <div class="item">
                               <div class="img"><a href="/lilizi/list-82.html"><img src="/assets/images/tz_yinyong_1.jpg" alt="特种设备" title="特种设备"></a></div>
                               <div class="text">
                                   <div class="ico"><a href="/lilizi/list-82.html"><img src="/assets/images/tz_yinyong_ico_1.jpg" alt="特种设备"></a></div>
                                   <div class="a size4-6p"><a href="/lilizi/list-82.html">特种设备</a></div>
                               </div>
                           </div>
                       </li>
                       <li class="col-md-4">
                           <div class="item">
                               <div class="img"><a href="/lilizi/list-84.html"><img src="/assets/images/tz_yinyong_2.jpg" alt="航空航天" title="航空航天"></a></div>
                               <div class="text">
                                   <div class="ico"><a href="/lilizi/list-84.html"><img src="/assets/images/tz_yinyong_ico_2.jpg" alt="航空航天"></a></div>
                                   <div class="a size4-6p"><a href="/lilizi/list-84.html">特种设备</a></div>
                               </div>
                           </div>
                       </li>
                       <li class="col-md-4">
                           <div class="item">
                               <div class="img"><a href="/lilizi/list-83.html"><img src="/assets/images/tz_yinyong_3.jpg" alt="舰艇船舶" title="舰艇船舶"></a></div>
                               <div class="text">
                                   <div class="ico"><a href="/lilizi/list-83.html"><img src="/assets/images/tz_yinyong_ico_3.jpg" alt="舰艇船舶"></a></div>
                                   <div class="a size4-6p"><a href="/lilizi/list-83.html">航空航天</a></div>
                               </div>
                           </div>
                       </li>
                       <li class="col-md-4">
                           <div class="item">
                               <div class="img"><a href="/diwen/"><img src="/assets/images/tz_yinyong_4.jpg" alt="极地科考" title="极地科考"></a></div>
                               <div class="text">
                                   <div class="ico"><a href="/diwen/"><img src="/assets/images/tz_yinyong_ico_4.jpg" alt="极地科考"></a></div>
                                   <div class="a size4-6p"><a href="/diwen/">极地科考</a></div>
                               </div>
                           </div>
                       </li>
                       <li class="col-md-4">
                           <div class="item">
                               <div class="img"><a href="/lilizi/list-88.html"><img src="/assets/images/tz_yinyong_5.jpg" alt="医疗设备" title="医疗设备"></a></div>
                               <div class="text">
                                   <div class="ico"><a href="/lilizi/list-88.html"><img src="/assets/images/tz_yinyong_ico_5.jpg" alt="医疗设备"></a></div>
                                   <div class="a size4-6p"><a href="/lilizi/list-88.html">医疗电子</a></div>
                               </div>
                           </div>
                       </li>
                       <li class="col-md-4">
                           <div class="item">
                               <div class="img"><a href="/lilizi/list-90.html"><img src="/assets/images/tz_yinyong_6.jpg" alt="安防通讯" title="安防通讯"></a></div>
                               <div class="text">
                                   <div class="ico"><a href="/lilizi/list-90.html"><img src="/assets/images/tz_yinyong_ico_6.jpg" alt="安防通讯"></a></div>
                                   <div class="a size4-6p"><a href="/lilizi/list-90.html">安防通讯</a></div>
                               </div>
                           </div>
                       </li>
                   </ul>
               </div>
           </section>

            <section class="section100">
                <div class="title text-center">
                    <h2 class="size1-9p">低温锂电池特点</h2>
                    <div class="p size5-5p section20"><p>
                            钜大锂电通过特有技术对电解液的低温优化以及正、负极材料的低温改性，进一步提升锂离子电池在低温环境中的放电容量、<br>
                            放电倍率和使用寿命，研发出能在 -40℃以下的低温环境中正常使用的高性能低温充放电锂电池。</p></div>
                </div>
                <div class="title_list section60">
                    <ul>
                        <li>
                            <div class="item"><p>-20℃低温环境下，0.5C充电，且充放电循环<span>>=300</span>周</p></div>
                            <div class="item"><p>-20℃低温环境下，0.5C充电，且充放电循环<span>>=300</span>周</p></div>
                            <div class="item"><p>-20℃低温环境下，0.5C充电，且充放电循环<span>>=300</span>周</p></div>
                            <div class="item"><p>-20℃低温环境下，0.5C充电，且充放电循环<span>>=300</span>周</p></div>
                            <div class="item"><p>-20℃低温环境下，0.5C充电，且充放电循环<span>>=300</span>周</p></div>
                        </li>
                    </ul>
                </div>
            </section>

        </div>
        <div class="getiao section90"></div>
    </div>

</div>
<?php $this->beginContent('@app/views/layouts/public/ad_getiao.php') ?>
<?php $this->endContent() ?>

<?php $this->beginContent('@app/views/layouts/public/chuangxin_jishu.php') ?>
<?php $this->endContent() ?>
<section class="section100 container">
    <div class="dianchizu">
        <div class="title text-center">
            <h2 class="size1-9p">低温锂电池组</h2>
        </div>

        <div class="list product_common section90">
            <ul>
                <?php foreach (Yii::$app->params['list'] as $key=>$value):?>
                    <li class="col-md-3">
                        <div class="item">
                            <div class="img"><a href="<?=$value['url'] ?>"><img src="<?=$value['imageUrl'] ?>" alt="<?=$value['title'] ?>" title="<?=$value['title'] ?>"></a></div>
                            <div class="text"><a href="<?= $value['url'] ?>" class="line-over2"><?=$value['title'] ?></a></div>
                        </div>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</section>
<?php $this->beginContent('@app/views/layouts/public/bottom_seach.php') ?>
<?php $this->endContent() ?>


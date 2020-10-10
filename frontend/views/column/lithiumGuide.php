<?php
$this->registerJsFile('@web/assets/js/index.js',['depends'=>['frontend\assets\ColumnAsset']]);
//$ConsumerGoods = \common\models\Images::find()->where(['id' => 870])->one();
//$IndustrialField = \common\models\Images::find()->where(['id' => 579])->one();
//$SpecialUse = \common\models\Images::find()->where(['id' => 802])->one();
//$Electrolyte = \common\models\Images::find()->where(['id' => 981])->one();
////该文章的电芯产品
//$products = [];
//$ids_18650 = ['955','939','852'];
//foreach ($ids_18650 as $id) {
//    $products[] = \common\models\Images::find()->where(['id' => $id])->one();
//}
//
//foreach ($products as &$product) {
//    $product['diy_content'] = str_replace("<a",'<a href="'.$product->url.'"',$product['diy_content']);
//}
//Yii::$app->params['products'] = $products;

use common\models\Images; ?>

<div class="column-lithium-guide column-common">
    <div class="col-md-12">
        <div class="">
            <section class="section m_section60">
                <div class="category_list col-md-12">
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">锂电池的发展</h2></div>
                <div class="common_p section60">
                    <div class="p_ul">
                        <ul class=" small-size">
                            <li>1981年发表了第一个锂离子电池方面的专利。</li>
                            <li>1992年，SONY公司开始大规模生产民用锂离子电池。</li>
                            <li>1998年方型锂离子电池大量投放市场，占据了市场较大份额。</li>
                            <li>1999年中国锂离子电池开始大批量生产。</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">锂电池的应用领域</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.消费品领域</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        主要应用在数码产品、手机、移动电源、笔记本等电子设备中。常用的有18650锂电池，锂聚合物电池。
                    </p>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>2.工业领域</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        主要应用在医疗电子、光伏储能、铁路基建、安防通讯、勘探测绘等领域。常用的有储能/动力锂电池，磷酸铁锂电池，聚合物锂电池，18650锂电池。
                    </p>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>3.特种领域</h3></div>
                <div class="common_p section30">
                    <p class="small-size">
                        主要应用在军用警用、航空航天、舰艇船舶、卫星导航、武器装备、高能物理等领域。常用的有超低温锂电池，高温锂电池，钛酸锂电池，防爆锂电池等。
                    </p>
                </div>

            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">锂电池的分类</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.按外形分类</h3></div>
                <div class="common_p section20">
                    <div class="title"><strong>圆柱形锂电池</strong></div>
                    <p class="small-size section5 light1-5">
                        圆柱形锂离子电池，其型号命名一般为5位数字，前两位数字为电池的直径，中间两位数字为电池的高度，最后一位数字0代表圆柱形，单位为毫米。
                    </p>
                </div>
                <div class="common_p section20">
                    <div class="title"><strong>最常用的圆柱形锂电池</strong></div>
                    <div class="p_ul section5">
                        <ul class="small-size">
                            <li><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-142/">18650锂电池</a></li>
                            <li><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-140/">14500锂电池</a></li>
                            <li><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-141/">18500锂电池/a></li>
                            <li><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-143/">21700锂电池</a></li>
                            <li><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-144/">26650锂电池</a></li>
                            <li><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-145/">32650（32700）锂电池</a></li>

                        </ul>
                    </div>
                </div>
                <div class="common_p section20">
                    <div class="title"><strong>方形锂电池</strong></div>
                    <p class="small-size section5 light1-5">
                        方形锂电池通常是指铝壳或钢壳方形锂电池，广泛应用于勘探测绘、医疗设备、便携式检测设备。
                    </p>
                    <div class="img-list images-center section60">
                        <ul class="ul_none ul_li_padding50">
                            <li>
                                <div class="item">
                                    <div class="img"><a target="_blank" href=""><img src="/static/images/column_lithium_guide_1.jpg" alt="Cylindrical Lithium Ion Battery"></a></div>
                                    <div class="text text-center section30"><a target="_blank" href="https://www.large.net/cylindrical-lithium-ion-battery/">圆柱锂电池</a></div>
                                </div>
                            </li>
                            <li class="m_section50">
                                <div class="item">
                                    <div class="img"><a target="_blank" href=""><img src="/static/images/column_lithium_guide_2.jpg" alt="Prismatic Lithium Ion Battery"></a></div>
                                    <div class="text text-center section30"><a target="_blank" href="https://www.large.net/lithium-ion-battery/list-146/">方形锂电池</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.按外壳分类</h3></div>
                <div class="common_p section20">
                    <li class="title"><strong>钢壳锂电池</strong></li>
                    <p class="small-size section5 light1-5">
                        早起锂离子电池大多为钢壳。由于钢壳重量大，安全性较差，但钢的稳定性强，后期很多厂商通过安全阀、PTC等器件优化设计结构，大大增加了其安全性能。而有些则直接替换掉钢壳，采用铝壳和软包，例如现在的手机电池。
                    </p>
                </div>
                <div class="common_p section20">
                    <li class="title"><strong>铝壳锂电池</strong></li>
                    <p class="small-size section5 light1-5">
                        铝壳锂离子电池由于质量较轻且安全性稍优于钢壳锂离子电池。
                    </p>
                </div>
                <div class="common_p section20">
                    <li class="title"><strong>软包装锂电池</strong></li>
                    <p class="small-size section5 light1-5">
                        软包装锂离子电池由于其质量轻，开模成本较低，安全性高等优点，逐步在扩大其市场份额。
                    </p>
                </div>
                <div class="img-list section60 col-md-12">
                    <ul class="ul_none ul_li_padding">
                        <li class="col-md-4">
                            <div class="item">
                                <div class="img"><img src="/static/images/column_lithium_guide_3.jpg" alt="Steel Case Lithium Ion Battery"></div>
                                <div class="text text-center section30">钢壳锂电池</div>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="item">
                                <div class="img"><img src="/static/images/column_lithium_guide_4.jpg" alt="Aluminum Case Lithium Ion "></div>
                                <div class="text text-center section30">铝壳锂电池</div>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="item">
                                <div class="img"><img src="/static/images/column_lithium_guide_5.jpg" alt="Pouch cell"></div>
                                <div class="text text-center section30">软包装锂电池</div>
                            </div>
                        </li>

                    </ul>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>3.按正极材料分类</h3></div>
                <div class="common_p section20">
                    <p>锂离子电池所用正极材料目前有四种：</p>
                    <p class="section20"><a target="_blank" href="https://www.large.net/news/8ku43mw.html">钴酸锂电池</a></p>
                    <p class="section5">钴酸锂，化学式为LiCoO₂，是一种无机化合物，一般使用作锂离子电池的正电极材料。</p>
                    <p class="section20"><a target="_blank" href="https://www.large.net/news/8fu43my.html">锰酸锂电池</a></p>
                    <p class="section5">锰酸锂主要为尖晶石型锰酸锂，是Hunter在1981年首先制得的具有三维锂离子通道的正极材料。</p>
                    <p class="section20"><a target="_blank" href="https://www.large.net/lifepo4-battery/">磷酸铁锂电池</a></p>
                    <p class="section5">磷酸铁锂又称磷酸锂铁、锂铁磷，是一种锂离子电池的正极材料。以其正极材料命名的磷酸铁锂电池也称为铁锂电池。</p>
                    <p class="section20"><a target="_blank" href="https://www.large.net/news/8mu43my.html">镍钴锰（三元）锂电池</a></p>
                    <p class="section5">镍钴锰酸锂是锂离子电池的关键三元正极材料，拥有比单元正极材料更高的比容量和更低的成本。</p>
                </div>

                <div class="table_title size2 section60">锂离子电池正极材料特性对比如下：</div>
               <section class="section30 tabel-section">
                   <table cellspacing="0" width="100%" class="table-bordered">
                       <tbody>
                       <tr class="firstRow">
                           <td>项目</td>
                           <td>钴酸锂</td>
                           <td>镍钴锰（三元）</td>
                           <td>锰酸锂</td>
                           <td>磷酸铁锂</td>
                       </tr>
                       <tr>
                           <td>振实密度(g/cm3)</td>
                           <td>2.8~3.0</td>
                           <td>2.0~2.3</td>
                           <td>2.2~2.4</td>
                           <td>1.0~1.4</td>
                       </tr>

                       <tr>
                           <td>比表面积(m2/g)</td>
                           <td>0.4~0.6</td>
                           <td>0.2~0.4</td>
                           <td>0.4~0.8</td>
                           <td>12~20</td>
                       </tr>
                       <tr>
                           <td>克容量(mAh/g)</td>
                           <td>135~140</td>
                           <td>140~180</td>
                           <td>90~100</td>
                           <td>130~140</td>
                       <tr>
                           <td>电压平台(V)</td>
                           <td>3.7</td>
                           <td>3.6</td>
                           <td>3.7</td>
                           <td>3.2</td>
                       </tr>
                       <tr>
                           <td>循环性能</td>
                           <td>≥500次</td>
                           <td>≥500次</td>
                           <td>≥300次</td>
                           <td>≥2000次</td>
                       </tr>
                       <tr>
                           <td>安全性能</td>
                           <td>差</td>
                           <td>较好</td>
                           <td>良好</td>
                           <td>优秀</td>
                       </tr>
                       <tr>
                           <td>适用领域</td>
                           <td>中小电池</td>
                           <td>小电池/小型<br>
                               动力电池</td>
                           <td>动力电池<br>
                               低成本电池</td>
                           <td>动力电池/超<br>
                               大容量电源</td>
                       </tr>
                       </tbody>
                   </table>
               </section>




                <div class="link_title size2 section60" id="battery-cell"><h3>4.按电解质分类</h3></div>
                <div class="common_p section20">
                    <li class="title"><strong>液态锂离子电池</strong></li>
                    <p class="small-size section5 light1-5">
                        液态锂离子电池使用的是液体电解质，电解质为有机溶剂+锂盐。
                    </p>
                </div>
                <div class="common_p section20">
                    <li class="title"><strong>聚合物锂离子电池</strong></li>
                    <p class="small-size section5 light1-5">
                        聚合物锂离子电池以固体聚合物电解质来代替,这种聚合物可以是“干态”的,也可以是“胶态”的,目前大部分采用聚合物胶体电解质。聚合物的基体主要为HFP-PVDF、PEO、PAN和PMMA等。
                    </p>
                </div>



                <div class="common_p section60">
                    <li class="title"><strong>全固态锂离子电池</strong></li>
                    <p class="small-size section5 light1-5">
                        “全固态锂电池”是一种在工作温度区间内所使用的电极和电解质材料均呈固态、不含任何液态组份的锂电池，所以全称是“全固态电解质锂电池”。
                    </p>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">锂电池推荐品牌</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.18650锂电池推荐品牌</h3></div>
                <div class="brand_list col-md-12">
                    <ul>
                        <div class="row">
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_1.jpg" alt="Sony"></div>
                                    <div class="text">索尼</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_2.jpg" alt="Panasonic"></div>
                                    <div class="text">松下</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_3.jpg" alt="Sanyo"></div>
                                    <div class="text">三洋</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_4.jpg" alt="Samsung"></div>
                                    <div class="text">三星</div>
                                </div>
                            </li>
                        </div>

                        <div class="row">
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_6.jpg" alt="BAK"></div>
                                    <div class="text">比克</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_7.jpg" alt="LISHEN"></div>
                                    <div class="text">力神</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_8.jpg" alt="LARGE"></div>
                                    <div class="text">钜大锂电</div>
                                </div>
                            </li>
                            <li class="section40">
                                <div class="item yellow_color">
                                    <div class="img"><img src="/static/images/column_cylindrical_brand_5.jpg" alt="LG"></div>
                                    <div class="text">LG化学</div>
                                </div>
                            </li>
                        </div>

                    </ul>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.动力锂电池推荐品牌</h3></div>
                <div class="p_ul section20 col-md-12">
                    <ul class="small-size light1-8">
                       <li>宁德时代</li>
                       <li>松下电器</li>
                       <li>比亚迪</li>
                       <li>特斯拉</li>
                       <li>LG</li>
                       <li>三星 SDI</li>
                       <li>国轩高科</li>
                       <li>力神</li>
                       <li>比克</li>
                       <li>中航锂电</li>
                    </ul>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>3.特种锂电池推荐品牌</h3></div>

                <div class="common_p section20">
                    <p><a target="_blank" href="/">钜大锂电</a></p>
                    <p class="section10">
                        18年专注锂电池定制<br>
                        东莞市钜大电子有限公司成立于2002年，总部位于中国广东省东莞市南城区高盛科技园，是一家为全球用户在移动电源、储能电源、动力电源和备用电源的个性化需求，提供特种锂电系统定制化方案和产品的国家级高新技术企业。
                    </p>
                </div>
                <section class="section60">
                    <div class="title size2" >钜大特种锂电池核心技术</div>
                    <div class="list">
                        <ul class="ul_li_padding60 ul_none">
                            <div class="row">
                                <li class="col-md-4 section30">
                                    <div class="item">
                                        <div class="img"><img src="/static/images/colmun_battery_01.jpg" alt=""></div>
                                        <div class="text section20 light1-8">
                                            <p>
                                                <strong>高能量密度</strong><br>
                                                （三元、钴酸锂体系）<br>
                                                质量能量密度285瓦时/公斤，<br>
                                                体积能量密度700瓦时/升。
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4 section30 m_section60">
                                    <div class="item">
                                        <div class="img"><img src="/static/images/colmun_battery_02.jpg" alt=""></div>
                                        <div class="text section20 light1-8">
                                            <p>
                                                <strong>高倍率</strong><br>
                                                （三元、钴酸锂、磷酸铁锂体系）<br>
                                                100C持续放电，<br>
                                                温升控制在40℃以内。

                                            </p>

                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4 section30 m_section60">
                                    <div class="item">
                                        <div class="img"><img src="/static/images/colmun_battery_03.jpg" alt=""></div>
                                        <div class="text section20 light1-8">
                                            <p>
                                                <strong>高温</strong><br>
                                                （三元、磷酸铁锂体系）<br>
                                                80℃高温持续循环200周，<br>
                                                85℃储存48小时。
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                           <div class="row">
                               <li class="col-md-4 section60 m_section60">
                                   <div class="item">
                                       <div class="img"><img src="/static/images/colmun_battery_04.jpg" alt=""></div>
                                       <div class="text section20 light1-8">
                                           <p>
                                               <strong>高安全性</strong><br>
                                               （改性三元化学体系）<br>
                                               190~200Wh/kg的高能量密度，
                                               同时满足Ex ia\ib IIA\IIB T1~T4<br>
                                               防爆标准
                                           </p>
                                       </div>
                                   </div>
                               </li>
                               <li class="col-md-4 section60 m_section60">
                                   <div class="item">
                                       <div class="img"><img src="/static/images/colmun_battery_05.jpg" alt=""></div>
                                       <div class="text section20 light1-8">
                                           <p>
                                               <strong>低温充电</strong><br>
                                               （三元、磷酸铁锂体系）
                                               支持-20℃低温0.5C充电，<br>
                                               且充放电循环300周以上。
                                               支持-40℃低温0.2C充电，<br>
                                               且充放电循环300周以上。
                                           </p>
                                       </div>
                                   </div>
                               </li>
                               <li class="col-md-4 section60 m_section60">
                                   <div class="item">
                                       <div class="img"><img src="/static/images/colmun_battery_06.jpg" alt=""></div>
                                       <div class="text section20 light1-8">
                                           <p>
                                               <strong>低温放电</strong><br>
                                               （三元、磷酸铁锂体系）
                                               -40℃高倍率5C持续放电，<br>
                                               80%以上容量保持率。<br>
                                               -50℃低温放电，<br>
                                               75%以上容量保持率。
                                           </p>
                                       </div>
                                   </div>
                               </li>
                           </div>


                        </ul>
                    </div>

                </section>




            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">锂电池参数</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.电压</h3></div>
                <div class="common_p section20">
                    <li class="title"><strong>标称电压</strong></li>
                    <p class="small-size section5 light1-5">
                        锂电池正负极之间的电势差称为锂电池的标称电压。标称电压由极板材料的电极电位和内部电解液的浓度决定。
                    </p>
                </div>
                <div class="common_p section20">
                    <li class="title"><strong>开路电压</strong></li>
                    <p class="small-size section5 light1-5">
                        锂电池在开路状态下的端电压称为开路电压。锂电池的开路电压等于锂电池的正极的还原电极电势与负极电极电势之差。
                    </p>
                </div>
                <div class="common_p section20">
                    <li class="title"><strong>工作电压</strong></li>
                    <p class="small-size section5 light1-5">
                        工作电压指锂电池接通负载后在放电过程中显示的电压，又称放电电压。在锂电池放电初始的工作电压称为初始电压。
                    </p>
                </div>
                <div class="common_p section20">
                    <li class="title"><strong>锂电池常用电压推荐</strong></li>
                    <p class="small-size section5 light1-5">
                        <a target="_blank" href="/lithium-ion-battery/list-133/">12V锂电池</a>
                        <br>
                        <a target="_blank" href="/lithium-ion-battery/list-134/">24V锂电池</a>
                        <br>
                        <a target="_blank" href="/lithium-ion-battery/list-135/">36V锂电池</a>
                        <br>
                        <a target="_blank" href="/lithium-ion-battery/list-136/">48V锂电池</a>


                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2.容量</h3></div>
                <div class="common_p section20">
                    <p class="small-size section5 light1-5">
                        锂电池在一定放电条件下所能给出的电量称为锂电池的容量，以符号C表示。常用的单位为安培小时，简称安时（Ah）或毫安时（mAh）。
                        <br><br>
                        锂电池的容量受其所用正极材料、电池的温度、放电倍率、电压等影响。
                    </p>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>3.内阻</h3></div>
                <div class="common_p section20">
                    <p class="small-size section5 light1-5">
                        锂电池的内阻是指电流通过锂电池内部时受到阻力，内阻会影响锂电池的电压。
                    </p>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>4.循环寿命</h3></div>
                <div class="common_p section20">
                    <p class="small-size section5 light1-5">
                        锂电池的循环寿命一般用使用次数表示，一次循环表示锂电池的一个完全充放电周期（即锂电池电量由空充电到满，再由满放电到空）。
                    </p>
                </div>
                <div class="common_p">
                    <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_6.jpg" alt="Cycle characteristics"></div>
                </div>

                <div class="common_p section60 m_section30">
                    <p class="small-size light1-5">
                        注：锂电池的循环特性较好，一般500次循环以后还可以保持80%左右的容量。
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>5.放电倍率</h3></div>
                <div class="common_p section20">
                    <p class="small-size section5 light1-5">
                        放电倍率是指锂电池在放电时电流的大小，一般用C表示，用公式表示为：
                    </p>
                    <p class="small-size section20 light1-5">
                        <strong>放电倍率=放电电流/额定容量</strong>
                    </p>
                    <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_7.jpg" alt="Discharging load characteristics"></div>
                </div>

                <div class="common_p section60 m_section30">
                    <p class="small-size light1-5">
                        注：由于锂电池用的是有机溶剂电解液，电导率一般只有铅酸或碱性电池电解液的几百分之一。因此，锂离子电池在大电流放电时，来不及从电解液中补充Li+,会发生电压下降。
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>6.工作温度</h3></div>
                <div class="common_p section20">
                    <p class="small-size section5 light1-5">
                        锂电池的工作温度指锂电池能够保持正常充放电工作的情况下所能适应的环境和电池本身的温度。
                    </p>
                    <p class="small-size section20 light1-5">
                        锂电池在低温时，放电平台有一定的降低。高温度时，会影响电池的循环性能，且会使电池有微量膨胀。因此，电池一般推荐在0-40℃范围内工作。
                    </p>
                    <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_8.jpg" alt="Discharge temperature characteristics"></div>
                </div>

                <div class="common_p section60 m_section30">
                    <p class="small-size gray_color text-center ">
                        锂电池低温放电特性曲线图
                    </p>
                    <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_9.jpg" alt="Storage characteristics"></div>
                </div>

                <div class="common_p section60 m_section30">
                    <p class="small-size gray_color text-center ">
                        锂电池高温放电特性曲线图
                    </p>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">锂电池与铅酸电池、镍氢电池</h2></div>
                <section class="section60">
                    <table cellspacing="0" width="100%" class="table-bordered">
                        <tbody>
                        <tr class="firstRow">
                            <td>项目</td>
                            <td>锂电池</td>
                            <td>铅酸电池</td>
                            <td>镍氢电池</td>

                        </tr>
                        <tr>
                            <td>能量密度(wh/kg)</td>
                            <td>200~260wh/kg</td>
                            <td>50~70wh/kg</td>
                            <td>40~70wh/kg</td>
                        </tr>
                        <tr>
                            <td>开路电压(v)</td>
                            <td>3.6V</td>
                            <td>2.0V</td>
                            <td>1.2V</td>
                        </tr>
                        <tr>
                            <td>循环寿命(次)</td>
                            <td>300-2500</td>
                            <td>400-600</td>
                            <td>300-350</td>
                        </tr>
                        <tr>
                            <td>充电速度</td>
                            <td>快</td>
                            <td>慢</td>
                            <td>很慢</td>
                        </tr>
                        <tr>
                            <td>记忆效应</td>
                            <td>无</td>
                            <td>无</td>
                            <td>有</td>
                        </tr>
                        <tr>
                            <td>环保性能</td>
                            <td>污染较低</td>
                            <td>污染高</td>
                            <td>污染低</td>
                        </tr>
                        </tbody>
                    </table>
                </section>
            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">锂电池</h2></div>
                <div class="common_p section60">
                    <p class="small-size light1-5">
                        锂电池PACK主要指锂电池的加工组装，主要是将电芯、保护板、BMS、连接片、标签纸等通过电池PACK工艺组合加工成客户需要的产品。
                    </p>
                </div>
                <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_zhinan.jpg" alt="Storage characteristics"></div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">锂电池安全测试</h2></div>
                <div class="common_p section60">
                    <p>
                        最好的锂电池要符合UL2054安全标准(锂电池)，并且完成以下测试：
                    </p>
                </div>
                <div class="common_p section20">
                    <p><li><strong>外观</strong></li></p>
                    <p class="section5">
                        对锂电池进行外形、尺寸、标识等检测。
                    </p>
                </div>
                <div class="common_p section20">
                    <p><li><strong>电性能测试</strong></li></p>
                    <p class="section5">
                        对锂电池进行0.2C5A放电性能、1C5A放电性能、高温性能、低温性能、荷电保持、循环等电性能测试。
                    </p>
                </div>
                <div class="common_p section20">
                    <p><li><strong>环境适应性测试</strong></li></p>
                    <p class="section5">
                        对锂电池进行恒定湿热性、振动、碰撞、自由跌落等环境适应性测试。
                    </p>
                </div>
                <div class="common_p section20">
                    <p><li><strong>安全性能测试</strong></li></p>
                    <p class="section5">
                        对锂电池进行重物冲击、热冲击、过充电、短路等安全性测试。
                    </p>
                </div>

            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">锂电池认证和测试标准</h2></div>
                <div class="common_p section60">
                    <p class="text-center size2">
                        产品认证
                    </p>
                </div>
                <div class="common_p section20">
                    <p class="text-center">
                        全球主要国家和地区认证明细（电池产品类）
                    </p>
                    <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_10.jpg" alt="Storage characteristics"></div>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">锂电池运输</h2></div>
                <div class="common_p section60">
                    <p>
                        锂电池运输方式包括空运、水运、陆运，最为常用的是航空运输、海洋运输。
                        由于锂是一种特别容易发生化学反应的金属，易延伸和燃烧，因此锂电池包装和运输处理不当，易发生燃烧和爆炸。
                    </p>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.锂电池的包装要求</h3></div>
                <div class="common_p section20">
                    <div class="p_ul">
                        <ul class=" small-size">
                            <li>必须依据适用的包装说明指导装在DGR 危险品规则所规定的UN规格包装，并在包装上完整的显示对应编号。</li>
                            <li>必须贴9类危险性标签。</li>
                            <li>必须填写危险品申报单，提供相应的危包证。</li>
                        </ul>
                    </div>
                    <div class="img col-md-12 text-center section60"><img src="/static/images/column_lithium_guide_11.jpg" alt="caution"></div>
                    a'c'c
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>2.锂电池的运输要求</h3></div>
                <div class="common_p section20">
                    <div class="p_ul">
                        <ul class=" small-size">
                            <li>电池须通过UN 38.3测试要求, 及1.2米的跌落包装试验。</li>
                            <li>提供的危险品申报文件, 标注UN编号。</li>
                            <li>电池应被保护以防止短路，在同一包装内须预防与可引发短路的导电物质接触。</li>
                            <li>避免搬运过程受到强烈振动,托盘的各垂直和水平边使用护角保护。</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">锂电池价格</h2></div>
                <div class="common_p section60">
                    <p>
                        单体电芯的锂电池价格主要受品牌和质量影响，而锂电池PACK的价格影响因素有很多：
                    </p>
                </div>
                <div class="common_p section20">
                    <div class="p_ul">
                        <ul class=" small-size ">
                            <li><p class="yellow_color">电芯型号</p></li>
                            <li><p class="yellow_color">电压</p></li>
                            <li><p class="yellow_color">容量</p></li>
                            <li><p class="yellow_color">PCM的需求和设计</p></li>
                            <li><p class="yellow_color">外壳的需求与设计</p></li>

                        </ul>
                    </div>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">如何正确使用锂电池</h2></div>
                <div class="common_p section60">
                    <p>
                        <strong>锂电池储存</strong>——锂电池的存放条件最关键的是温度和湿度，建议在温度20℃的环境下保存，注意防潮防湿，不要让锂电池处于亏电状态。不要挤压、碰撞，不要存放在强静电和强磁场的地方。
                    </p>
                </div>
                <div class="common_p section20">
                    <p>
                        <strong>锂电池充放电</strong>——不要过充，不要使用劣质充电器，切勿盲目使用高倍率充电器。放电量不要超过电池容量的80%。
                    </p>
                </div>
            </section>

     


        </div>
    </div>


</div>



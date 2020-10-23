<?php
$this->registerJsFile('@web/assets/js/index.js',['depends'=>['frontend\assets\ColumnAsset']]);

?>


<div class="column-cylindrical column-common">
    <div class="col-md-12">
        <div class="">
            <section>
                <div class="common_title size1 section10" id="basic-structure-of-18650"><h2 class="light1-5">锂聚合物电芯型号</h2></div>
                <section class="section60 tabel-section">
                    <?php $this->beginContent('@app/views/column/polymerTable.php') ?>
                    <?php $this->endContent() ?>
                </section>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">聚合物锂电池的分类</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1、按结构分</h3></div>
                <div class="common_p">
                    <li class="font-weight black_color section20">卷绕式：</li>
                </div>
                <div class="common_p">

                    <p class="small-size section5">
                        使用与液态锂离子电池生产一样的卷绕工艺，将正极、负极与电解质膜片卷绕起来，用包装铝箔包装。
                    </p>
                </div>
                <div class="common_p">
                    <li class="font-weight black_color section10">叠片式：</li>
                </div>
                <div class="common_p">
                    <p class="small-size section5">
                        使用热压工艺，将分切成一定尺寸的正极、负极与电解质膜片热压在一起，用包装铝箔包装。
                    </p>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>2、按电解质分类</h3></div>
                <div class="common_p section20">
                    <ul>
                        <li>凝胶聚合物电解质锂离子电池，它是在固体聚合物电解质中加入添加剂提高离子电导率，使电池可在常温下使用；</li>
                        <li class="section10">固体聚合物电解质锂离子电池，电解质为聚合物与盐的混合物，在常温下的离子电导率低，适于高温使用；</li>
                        <li class="section10">复合凝胶聚合物正极材料的锂离子电池，导电聚合物作为正极材料，其比能量是现有锂离子电池的3倍，是最新一代的锂离子电池。</li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">聚合物锂电池的优势</h2></div>
                <section class="section50">
                    <div class="row">
                        <ul class="ul_li_padding ul_none">
                            <li class="col-md-4">
                                <div class="item">
                                    <div class="part col-md-12">
                                        <div class="title col-md-12 size3 font-weight black_color">安全性高</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                由于采用聚合物材料，<br>
                                                电芯不起火、不爆炸。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="part col-md-12 section60">
                                        <div class="title col-md-12 size3 font-weight black_color">厚度薄</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                以6V400mAh的容量，<br>
                                                其厚度可薄至0.5mm。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="part col-md-12 section60">
                                        <div class="title col-md-12 size3 font-weight black_color">重量轻</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                较同等容量规格的钢壳锂电池轻40%，<br>
                                                较铝壳电池轻20%。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="item">
                                    <div class="part col-md-12 section5">
                                        <div class="img"><a target="_blank" href=""><img src="/static/images/column_polymer_1.jpg" alt=""></a></div>
                                    </div>
                                    <div class="part col-md-12 section60">
                                        <div class="title col-md-12 size3 font-weight black_color">无漏液</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                聚合物电池内部不含液态电解液，<br>
                                                使用胶态的固体。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="item">
                                    <div class="part col-md-12">
                                        <div class="title col-md-12 size3 font-weight black_color">容量大</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                较同等尺寸规格的钢壳电池容量高10~15%，<br>
                                                较铝壳电池高5~10%。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="part col-md-12 section60">
                                        <div class="title col-md-12 size3 font-weight black_color">内阻小</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                聚合物电芯的内阻较一般液态电芯小，<br>
                                                可以做到35mΩ以下。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="part col-md-12 section60">
                                        <div class="title col-md-12 size3 font-weight black_color">形状可定制</div>
                                        <div class="text section5 col-md-12 light1-8">
                                            <p>
                                                形状任意，<br>
                                                按实际产品应用需求定制。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">聚合物锂电池参数</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1.Voltage</h3></div>
                <div class="common_p">
                    <div class="p_ul section20">
                        <ul class=" small-size">
                            <li>标称电压：3.7V</li>
                            <li>充电电压：4.1V~5V</li>
                            <li>放电电压：2.8~4.2V</li>
                            <li>储存电压：3.7~3.8V</li>
                        </ul>
                    </div>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2、容量</h3></div>
                <div class="common_p section20">
                  <p>
                      聚合物锂电池的容量取决于电池的厚度、宽度与长度。另外还与电池的材料及大小有关。<br>
                      快速估算聚合物电池的容量，常采用的估算公式（仅用估算）：<br>
                      <strong>容量=厚度*宽度*长度*K（K单位为mah/mm^3）</strong>
                  </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>3、内阻</h3></div>
                <div class="common_p section20">
                    <p>
                        内阻是指锂电池在工作时，电流流过锂电池内部所受到的阻力，主要由电极材料、电解液、隔膜电阻及各部分零件的接触电阻组成，与电池的尺寸、结构、装配等有关。
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>4、充电倍率</h3></div>
                <div class="common_p section20">
                    <p>
                        <strong>充电倍率=充电电流/额定容量</strong><br>
                        最大充电倍率是最安全的，但不是最好的充电倍率，较低的充电倍率可以更好的延长电池的使用寿命。
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>5、放电倍率</h3></div>
                <div class="common_p section20">
                    <p>
                        <strong>放电倍率=放电电流/额定容量</strong><br>
                        放电率就是保持电池可以安全放电的速度，是指电池在规定的时间内放出其额定容量时所需要的电流值，在数据值上等于电池额定容量的倍数，通常用字母C来表示。
                    </p>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">聚合物电池和锂电池对比</h2></div>
                <section class="section60">
                    <?php $this->beginContent('@app/views/column/polymerTable2.php') ?>
                    <?php $this->endContent() ?>
                </section>
            </section>



            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">聚合物锂电池保养</h2></div>
                <div class="common_p section60">
                    <p>聚合物锂电池本身是有一定的寿命的，不是说不用就可以延长寿命。保养只是在使用过程中有对应的标准而已。</p>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1、充电标准</h3></div>
                <div class="common_p">
                    <div class="p_ul section20">
                        <ul class=" small-size">
                            <li>聚合物锂电池的充电器必须能够恒流恒压充电；</li>
                            <li>充电时的单体电池必须在1C5A以下；</li>
                            <li>充电温度范围在0~45℃；</li>
                            <li>充电电压不超过4.23V。</li>
                        </ul>
                    </div>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2、放电标准</h3></div>
                <div class="common_p">
                    <div class="p_ul section20">
                        <ul class=" small-size">
                            <li>放电电流小于2C5A；</li>
                            <li>单体电池放电终止电压不小于2.75V。</li>
                            <li>放电温度范围在-20℃~60℃。</li>
                        </ul>
                    </div>
                </div>


                <div class="link_title size2 section60" id="battery-cell"><h3>3、存储标准</h3></div>
                <div class="common_p">
                    <div class="p_ul section20">
                        <ul class=" small-size">
                            <li>电池一般都是属于易燃易爆品，放置的地方应该是避免高温且可以通风的地方。</li>
                            <li>电池长期存储环境为：-20℃~35℃，相对湿度为45%~75%。</li>
                            <li>存储期近一年的要用标准充电方式给电池补电到10%~50%。</li>
                        </ul>
                    </div>
                </div>
            </section>



            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">聚合物锂电池</h2></div>
                <div class="common_p section60">
                    <p>聚合物锂电芯组装成组的过程称为PACK，可以是单只电池，也可以是多个电芯通过串并联的方式组合成锂电池模组等。</p>
                </div>
                <div class="common_p section20">
                    <p>聚合物锂电池PACK包括电池组、汇流排、软连接、保护板、外包装、输出（包括连接器）、青稞纸、塑胶支架等辅助材料这几项共同组成PACK。</p>
                </div>

                <div class="img-list section60 col-md-12">
                    <ul class="ul_li_padding ul_none">
                        <li class="col-md-1 col-xs-0"></li>
                        <li class="col-md-5 col-xs-12">
                            <div class="item">
                                <div class="img"><img src="/static/images/column_polymer_2.jpg" alt="Lithium Polymer Battery Connecting in Series(3S-1P)" title="Lithium Polymer Battery Connecting in Series(3S-1P)"></div>
                                <div class="text section20 text-center">聚合物锂电池串联(3S1P)</div>
                            </div>
                        </li>
                        <li class="col-md-5 col-xs-12">
                            <div class="item">
                                <div class="img"><img src="/static/images/column_polymer_3.jpg" alt="Lithium Polymer Battery Connecting in Parallel(1S-3P)" title="Lithium Polymer Battery Connecting in Parallel(1S-3P)"></div>
                                <div class="text section20 text-center">锂聚合物电芯并联(1S3P)</div>
                            </div>
                        </li>
                        <li class="col-md-1 col-xs-0"></li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">聚合物锂电池连接器</h2></div>
                <div class="common_p section60">
                    <p>连接器（CONNECTOR）又俗称接插件、插头和插座等，是起连接电源、信号作用的装置，一般有线对线连接器，线对板连接器等等。</p>
                </div>
                <div class="common_p section60">
                    <div class="img text-center"><img src="/static/images/column_polymer_4.jpg" alt=""></div>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>常用电池插头</h3></div>
                <div class="common_p">
                    <div class="p_ul section20">
                        <ul class=" small-size">
                            <li>Molex 2510、Molex 51021、Molex 78172</li>
                            <li>JST SHR、JST ACHR、JST PHR、JST XHP、JST SYR、JST SYP、JST ZHR
                                SM2.5、XT插头、EC5插头、杜邦插头、TP2.0、YH2.5mm、小田宫、大田宫等</li>
                            <li>Common Model Airplane Plug：EC3、EC5、EC8、XT30、XT60、XT90</li>
                        </ul>
                    </div>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>常用航模插头</h3></div>
                <div class="common_p">
                    <div class="p_ul section20">
                        <ul class=" small-size">
                            <li>EC3,EC5,EC8,XT30,XT60,XT90</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">聚合物锂电池膨胀</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1、聚合物锂电池膨胀的原因</h3></div>
                <div class="common_p">
                    <div class="p_ul section20">
                        <ul class=" small-size">
                            <li><strong>封装不良</strong>:制作过程中空气水分进入电芯内部，引起电解液分解产生气体。</li>
                            <li><strong>电芯含水超标</strong>:在工序过程中，一旦水含量超标，电解液会失效产生气体。</li>
                            <li><strong>腐蚀</strong>:聚合物软包锂电池芯发生腐蚀，铝层被反应消耗，失去对水的阻隔作用，发生胀气。</li>
                            <li><strong>表面破损</strong>:受到外力损坏，刺穿导致水分进入电芯内部。锂金属暴露在空气中时，会与氧气产生激烈的氧化反应。</li>
                            <li><strong>磕碰</strong>:铝材质很容易变形，轻轻一磕就会，电芯越大，气袋越大，就越容易损坏。</li>
                            <li><strong>短路</strong>:正负极接触导致短路，聚合物锂电芯发生鼓气甚至冒烟。</li>
                            <li><strong>内部短路</strong>:聚合物锂电池隔离膜收缩、捲曲、破损、毛刺刺穿隔离膜等都会造成内部断路，从而鼓包。</li>
                            <li><strong>过充、过放</strong>:聚合物软包电池被过充或过放，加上保护板异常，电池芯会发生严重鼓气。</li>
                        </ul>
                    </div>
                </div>
                <div class="link_title size2 section60" id="battery-cell"><h3>2、膨胀后的电池修复和使用</h3></div>
                <div class="common_p">
                    <div class="p_ul section20">
                        <ul class=" small-size">
                          <li>如果手机电池已经被充的鼓起来的话，用手指先找到电池的空隙，用针对将戳一个小洞，让里面的空气跑出来就行了。</li>
                          <li>可以重新购置新的聚合物锂电池包来替换。在充电过程中，应当避免过充，既可以保护电池不受伤害，还节能环保。</li>
                        </ul>
                    </div>
                </div>
            </section>



            <section>
                <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">锂聚合物电池处理</h2></div>
                <div class="link_title size2 section60" id="battery-cell"><h3>1、合理利用废旧聚合物锂电池，避免对环境造成污染。</h3></div>
                <div class="common_p section20">
                    <p>聚合物锂电池被认为是相对环保的储能方式，但报废的聚合物锂电池如果回收和处理不当也会对环境造成污染。</p>
                </div>

                <div class="link_title size2 section60" id="battery-cell"><h3>2、废旧聚合物锂电池主要有害物质</h3></div>
                <section class="section20">
                    <table cellspacing="0" width="100%" class="table-bordered">
                        <tbody>
                        <tr class="firstRow">
                            <td>类别</td>
                            <td>常用材料</td>
                            <td>常用材料</td>

                        </tr>
                        <tr>
                            <td>正极材料</td>
                            <td>LiCoO2/LiMn2O4/LiNiO2</td>
                            <td>重金属污染，<br>
                                Co、Ni、Mn为强致癌物，<br>
                                有毒物质，改变环境pH</td>

                        </tr>

                        <tr>
                            <td>电解质</td>
                            <td>LiPF6LiBF4/LiAsF6</td>
                            <td>改变环境pH，氟污染</td>

                        </tr>

                        <tr>
                            <td>电极质溶剂</td>
                            <td>EC/PC/DC</td>
                            <td>难以降解，有毒性，<br>
                                燃烧产生温室气体</td>

                        </tr>
                        <tr>
                            <td>隔膜</td>
                            <td>PP/PE</td>
                            <td>难以降解</td>
                        </tr>
                        <tr>
                            <td>粘合剂</td>
                            <td>PVD/VDF/EPD</td>
                            <td>氟污染，难以降解</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="link_title size2 section60" id="battery-cell"><h3>3、世界各国对废旧聚合物电池处理现状</h3></div>
                    <div class="common_p">
                        <div class="p_ul section20">
                            <ul class=" small-size">
                               <li>德国、美国已立法，开始做到全部收集，分类处理。</li>
                               <li>日本实行“3R计划”，变“大量生产、大量消费、大量废弃”为“循环、降低、再利用”。</li>
                               <li>中国2003年发布《废电池污染防治技术政策》，要求电池生产者对废旧电池的处理负重要责任。</li>
                            </ul>
                        </div>
                    </div>

                    <div class="link_title size2 section60" id="battery-cell"><h3>4、如何处理废旧聚合物锂电池</h3></div>
                    <div class="common_p">
                        <div class="p_ul section20">
                            <ul class=" small-size">
                                <li>如果附近有废旧电池回收机构，请交给他们。</li>
                                <li>如果附近没有废旧电池回收机构，且电池数量比较多，可以自行联络当地环保局或者邮寄到其他城市的回收机构。</li>
                                <li>正确的对聚合物进行分类丢弃，丢到有毒有害垃圾箱里。</li>
                                <li>丢弃聚合物锂电池之前，可放在盐水中浸泡1~2天，确保聚合物锂电池完全放电。</li>
                            </ul>
                        </div>
                    </div>
                </section>


                <section>
                    <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">购买锂聚合物电池的注意事项</h2></div>
                    <div class="link_title size2 section60" id="battery-cell"><h3>1、品牌</h3></div>
                    <div class="common_p section20">
                        <p>选购聚合物锂电池时应认准知名品牌，电池的品质可以得到保障，市面上很多小品牌电池价格虽然便宜，但是寿命短、品质不稳定。</p>
                    </div>

                    <div class="link_title size2 section60" id="battery-cell"><h3>2、容量</h3></div>
                    <div class="common_p section20">
                        <p>看是否有明确标注容量。无明确标示容量（如1000mAh或者许1000毫安培时刻）的电池组组 ，很有可以就是使用劣质电池组组或者许回收电池组，没有质量保证。</p>
                    </div>

                    <div class="link_title size2 section60" id="battery-cell"><h3>3、保护板</h3></div>
                    <div class="common_p section20">
                        <p>无保护电路板，聚合物电池就有变形、漏液的危险。在市场竞争下，各家寻求更低价位的保护电路板，或者根本省略了这个装置，使得市面上充斥着有爆炸危险的聚合物电池。</p>
                    </div>
                </section>

            </section>


        </div>
    </div>


</div>



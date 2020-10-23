<?php
$this->registerJsFile('@web/assets/js/index.js',['depends'=>['frontend\assets\ColumnAsset']]);
?>
<div class="column-best-18650 column-common">


    <div class="col-md-12">
        <div class="">
		


			<section>
                <div class="common_p section20">
                    <p class="small-size">钜大锂电，特种锂电系统定制化方案和产品提供商，可根据客户需求提供从单体电芯、电池管理系统、充电器到电池组一整套的电源方案。
                    </p>
                    <div class="p_ul section20">
                        <ul class="font-weight black_color small-size">
                            <li>电芯选型</li>
                            <li>结构设计</li>
                            <li>电池管理系统设计</li>
                            <li>电量计设计</li>
                            <li>充电器设计</li>
                        </ul>
                    </div>

                </div>
                <div class="common_p">
                    <p class="small-size section20"><a target="_blank" href="/lithium-battery18650/">定制18650锂电池组</a>广泛应用于各个领域，包括医疗设备、特种设备、军用警用、仪器仪表、手持设备、安防通讯等领域。
                    </p>
                </div>
            </section>




            <section class="section70">
                <div class="common_title " id="what-is-an-18650"><h2 class="light1-5 size1">什么是18650锂电池</h2></div>
                <div class="common_p section60">
                    <p class="small-size">
                        18650是指电池的外形规格，是日本SONY公司当年为了节省成本而定下的一种标准电池型号，其中18表示直径为18mm，65表示长度为65mm，0表示为圆柱形电池。
                        <br><br>
                        单个18650锂离子电池的标称电压通常为3.6V或3.7V，最小放电终止电压通常为2.75V，普通容量为1200～3500mAh。
                    </p>
                </div>


                <div class="link_title size2 section60" id="the-best-18650-battery-cell"><h3>1.最好的18650电芯</h3></div>
                <div class="common_p section20">
                    <p class="small-size">
                        18650电池作为生活和工业最常用的电池种类，不管是哪个厂家生产的18650锂电池在外形尺寸上是一定的，所不同的就是能做到的最大容量和最高能量密度比。
                    </p>
                </div>
                <?php if(false):?>
                <div class="products_list">
                    <ul>
                        <?php foreach (Yii::$app->params['products'] as $key=>$value):?>
                            <li class="section60">
                                <div class="item">
                                    <?php if ($key%2==0) :?>
                                        <div class="product_img col-md-5"><a target="_blank" href="<?=$value['url']?>"><img src="https://www.large.net/<?=$value['imagesUrl'][0]?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                                    <?php endif?>
                                    <div class="text col-md-7">
                                        <div class="des light1-8 section60"><p><?=$value['diy_content']?></p></div>
                                        <div class="button small-size section20"><a target="_blank" href="<?=$value['url']?>">READ MORE</a></div>
                                    </div>
                                    <?php if ($key%2!=0) :?>
                                        <div class="product_img col-md-5"><a target="_blank" href="<?=$value['url']?>"><img src="https://www.large.net/<?=$value['imagesUrl'][0]?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                                    <?php endif?>

                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <?php endif;?>
                <div class="common_p section60">
                    <p class="size2">
                        热门18650电芯型号表
                    </p>
                    <div class="img section20 ">
                        <section class="tabel-section">


                        <?php $this->beginContent('@app/views/column/best18650Table.php') ?>
                        <?php $this->endContent() ?>
                        </section>
                    </div>
                </div>

                <div class="link_title size2 section60" id="the-beast-18650-cell-battery-brands"><h3>2.最好的18650品牌</h3></div>
                <div class="common_p section20">
                    <div class="p_ul">
                        <ul class=" small-size">
                            <li><strong>日本</strong>：18650电芯的品牌有三洋/松下、索尼等。</li>
                            <li><strong>韩国</strong>：18650电芯的品牌有LG、三星等。</li>
                            <li><strong>中国</strong>：18650电芯的厂家有比克、力神、钜大等。</li>
                        </ul>
                    </div>
                </div>

                <div class="common_p section30">
                    <div class="img"><img src="/static/images/column_Panasonic.jpg" alt="Panasonic" title="Panasonic"></div>
                    <p class="small-size section10">
                        <span class="yellow_color"><a target="_blank" href="/lithium-ion-battery/list-156/">松下</a></span><br>
                        成立时间：1918年  总部：日本大阪<br>
                        松下动力电池业务归属与AIS板块的能源领域，其中包括二次电池与能源设备，二次电池包括松下二次电池事业部与特斯拉事业部，是松下业绩增长的重要引擎之一。
                    </p>
                </div>
                <div class="common_p section40">
                    <div class="img"><img src="/static/images/column_SONY.jpg" alt="SONY" title="SONY"></div>
                    <p class="small-size section10">
                        <span class="yellow_color">索尼</span><br>
                        成立时间：1946年  总部：日本<br>
                        日本的一家全球知名的大型综合性跨国企业集团，成立于1946年5月，世界最大的电子产品制造商之一，锂离子电池产业的先导者。2016年7月，村田制造所并购索尼电池事业部。现在索尼公司预备开足马力进军电动汽车电池范畴。
                    </p>
                </div>

                <div class="common_p section40">
                    <div class="img"><img src="/static/images/column_LG_Chem.jpg" alt="LG Chem" title="LG Chem"></div>
                    <p class="small-size section10">
                        <span class="yellow_color"><a target="_blank" href="/lithium-ion-battery/list-159/">LG化学</a></span><br>
                        成立时间：1947年  总部：韩国<br>
                        韩国LG 集团下属企业，是韩国非常领先的化学企业，主要从事石油化学、电池、尖端材料和生命科学等产品的生产，在汽车电池、ESS电池、移动设备电池领域主导着全球市场。
                    </p>
                </div>

                <div class="common_p section40">
                    <div class="img"><img src="/static/images/column_Samsung.jpg" alt="Samsung SDI" title="Samsung SDI"></div>
                    <p class="small-size section10">
                        <span class="yellow_color"><a target="_blank" href="/lithium-ion-battery/list-158/">Samsung SDI</a></span><br>
                        成立时间：2011年  总部：韩国<br>
                        韩国三星集团下属企业之一，主要从事显示器和锂离子电池的生产。三星SDI研发中心遍布韩国、日本、俄罗斯等国家，在台湾，德国，马来西亚，印度，越南等地也办有办事处，是全球百强锂电池厂家排名靠前的厂家。
                    </p>
                </div>

                <div class="common_p section40">
                    <div class="img"><img src="/static/images/column_LISHEN.jpg" alt="LISHEN" title="LISHEN"></div>
                    <p class="small-size section10">
                        <span class="yellow_color"><a target="_blank" href="/lithium-ion-battery/list-160/">力神</a></span><br>
                        成立时间：1997年  总部：中国天津<br>
                        天津力神电池股份有限公司，中国锂电的代表性品牌，国内投资规模较大、技术水平最高的锂离子蓄电池专业生产企业之一。
                    </p>
                </div>

                <div class="common_p section40">
                    <div class="img"><img src="/static/images/column_BAK.jpg" alt="BAK" title="BAK"></div>
                    <p class="small-size section10">
                        <span class="yellow_color"><a target="_blank" href="/lithium-ion-battery/list-161/">比克</a></span><br>
                        成立时间：2001年  总部：中国深圳<br>
                        深圳市比克电池有限公司，锂电池知名品牌，惠普、戴尔、联想等著名品牌的电池供应商，集锂离子研发，生产、销售为一体，世界著名的锂离子电池制造商。
                    </p>
                </div>

                <div class="common_p section40">
                    <div class="img"><img src="/static/images/column_LARGE_POWER.jpg" alt="LARGE POWER" title="LARGE POWER"></div>
                    <p class="small-size section10">
                        <span class="yellow_color"><a target="_blank" href="/page/company-profile.html">钜大锂电</a></span><br>
                        成立时间：2001年 总部：中国东莞<br>
                        钜大锂电，特种锂电系统定制化方案和产品提供商，主要从事特种锂电池、低温电池、防爆电池、军用锂电池、医疗锂电池的研发、生产和销售。
                    </p>
                </div>

                <div class="link_title size2 section55" id="the-best-18650-lithium-battery-charger"><h3>3.最好的18650充电器</h3></div>
                <div class="common_p section20">
                    <p class="small-size">
                        18650锂电池充电器是专门用来为18650电池充电的充电器。锂离子电池对充电器的要求较高，需要保护电路，所以锂电池充电器通常都有较高的控制精密度，能够对锂离子电池进行恒流恒压充电。
                    </p>
                    <div class="p_ul">
                        <ul class="small-size section20">
                            <li>锂电池充电器的工作选择与被充电池一致。如果充电器工作于锂电池状态而去充镍氢或镍镉电池，则电池充不满，会大大减少工作时间。
                                如果充电器工作于镍电池状态而去充锂离子电池，则锂电池被过充，将严重影响电池的寿命。</li>
                            <li class="section20">要了解所用锂电池充电器充满点亮时电池是否真的已充满。有些充电器见到充满指示灯亮即可将锂电池取下，有些充电器要见到指示灯全亮才可将电池取下。</li>

                        </ul>
                    </div>

                </div>

                <div class="common_p section60">
                    <div class="img text-center"><img  src="/static/images/column_Battery_Charger.jpg" alt="18650 Lithium Battery Charger" title="18650 Lithium Battery Charger"></div>
                </div>

                <div class="link_title size2 section60" id="18650-lithium-battery-type"><h3>4.18650电池种类</h3></div>
                <div class="common_p section20">
                    <p class="small-size">
                        <span class="black_color font-weight">按正极材料分</span><br>
                        18650锂电池的种类有钴酸锂18650、锰酸锂18650、三元18650、磷酸铁锂18650、镍氢18650（不常见）。
                    </p>
                    <p class="small-size section20">
                        <span class="black_color font-weight">按放电性能分</span><br>
                        18650电池通常分为：容量电池、动力电池
                    </p>
                    <p class="small-size section20">
                        <span class="black_color font-weight">容量型18650电芯</span><br>
                        容量型电池就是电池追求容量的最大化，尽可能的在这个小小体积里面，做到容量最大。这种电池的容量比较大，通常在3000mah以上，但是这种电池的放电电流比较小，适合用于充电宝、手电筒、安防、矿灯、报警器、医疗设备等持续用电时间长，但是电流要求不高的设备上。
                    </p>
                    <p class="small-size section20">
                        <span class="black_color font-weight">动力型18650电芯</span><br>
                        动力型电池的容量不是很高2000-2400mAh，但是放电倍率较大，能达到3C以上放电，甚至10C以上。适用于需要大电流供电的设备，如电动工具、吸尘器、电子烟、航模、扭扭车、独轮车等。
                    </p>
                    <div class="img section60 text-center"><img  src="/static/images/column_Battery_Type.jpg" alt="18650 Lithium Battery Cell" title="18650 Lithium Battery Cell"></div>
                </div>


                <div class="link_title size2 section60" id="18650-battery-chemical-material-and-naming"><h3>5.18650电池材料和命名</h3></div>
                <div class="two-list">
                    <div class="left col-md-6 col-sm-12">
                        <div class="title section30 black_color font-weight">常见的电池材料</div>
                        <div class="p_ul section5">
                            <ul class="small-size light1-5">
                                <li>LCO - <span class="yellow_color"><a target="_blank" href="/news/8ku43mw.html">钴酸锂</a></span></li>
                                <li>LMO - <span class="yellow_color"><a target="_blank" href="/news/8fu43my.html">锰酸锂</a></span></li>
                                <li>NMC - <span class="yellow_color"><a target="_blank" href="/news/8mu43my.html">三元</a></span></li>
                                <li>NCA - 高镍三元</li>
                                <li>LFP - <span class="yellow_color"><a target="_blank" href="/lifepo4-battery/">磷酸铁锂</a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right col-md-6 col-sm-12">
                        <div class="title section30 black_color font-weight">18650电芯型号命名</div>
                        <div class="p_ul section5">
                            <ul class="small-size light1-5">
                                <li>LCO钴酸锂 - Lithium Cobalt Oxide(LiCoO2)</li>
                                <li>LMO锰酸锂 - Lithium Manganese Oxide (LiMn2O4)</li>
                                <li>NMC三元 - Lithium Nickel Manganese Cobalt Oxide (LiNiMnCoO2)</li>
                                <li>NCA高镍三元 - Lithium Nickel Cobalt Aluminum Oxide (LiNiCoAlO2)</li>
                                <li>LFP磷酸铁锂 - Lithium Iron Phosphate(LiFePO4)</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="link_title size2 section60" id="18650-lithium-battery-shrink-warp"><h3>6.18650锂电池热缩管</h3></div>
                <div class="common_p section20">
                    <p class="small-size">
                        18650锂电池专用级热缩管分PVC和PE两种，大部分厂家会选择PVC热缩管，因为价格低且易收缩。
                    </p>
                    <div class="p_ul section20">
                        <ul class="small-size">
                            <li>PVC热缩管价格便宜，但容易破裂，使用时间不长久，破裂后修补很麻烦。</li>
                            <li>PE热缩管不容易被划破，耐高温，不会因电池发热而烫化。</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="section70">
                <div class="common_title size1" id="how-to-choose-18650"><h2 class="light1-5">如何选购18650锂电池</h2></div>
                <div class="common_p section55">
                    <p class="small-size">
                        18650电池普遍都有着容量大、寿命长、安全性能高、使用范围较广的优点。在选购18650电池的时候，一般要从它的品牌、容量、电流、电压以及工作温度等方面来进行了解，然后选出自己适合的18650电池。
                    </p>
                </div>

                <div class="link_title size2 section60" id="electrical-appliances"><h3>1.用电设备</h3></div>
                <div class="common_p section20">
                    <p class="small-size">
                        根据电器的要求，选择适用的电池类型和规格尺寸，并根据电器耗电的大小和特点，购买适合电器的电池。
                    </p>
                </div>

                <div class="link_title size2 section60" id="battery-brand"><h3>2.电池品牌</h3></div>
                <div class="common_p section20">
                    <p class="small-size">
                        目前比较靠谱的有松下/三洋、SONY、三星、LG等全球知名品牌。
                        松下、三洋是容量型电池厂家。
                        LG, SONY, SAMSUNG动力型18650比较好。
                    </p>
                </div>

                <div class="link_title size2 section60" id="nominal-capacity"><h3>3.标称容量</h3></div>
                <div class="common_p section20">
                    <p class="small-size">
                        18650电池的标称容量关系着续航能力，单位是“mAh”，容量越高，续航能力越强。<br>
                        例如，2800mAh的电池，以1.4A电流可以持续放电2小时。<br>
                        目前18650电池容量虚标严重，大家尽量选择大品牌电芯，并且到正规渠道购买。
                    </p>
                </div>

                <div class="link_title size2 section60" id="charge-discharge-rate"><h3>4.充放电倍率</h3></div>
                <div class="common_p section20">
                    <p class="small-size">
                        <span class="font-weight">充放电倍率=充放电电流（A）/额定容量（Ah）</span><br>
                        充放电倍率是指电池在规定时间内放出其额定容量时所需要的电流值，它在数值上等于电池额定容量的倍数。电池放电倍率的单位一般为C(C-rate的简写)，如0.5C，1C，5C等。
                    </p>
                </div>

                <div class="link_title size2 section60" id="internal-impedance"><h3>5.电池内阻</h3></div>
                <div class="common_p section20">
                    <p class="small-size">
                        内阻是电池自身的电阻，内阻越小就代表自身的消耗越少，放电能力越强，内阻这个参数一般也会写到电池介绍页面，选购的时候也要注意看看，尽量不要买超过100mΩ以上的电芯。
                    </p>
                </div>

                <div class="link_title size2 section60" id="operating-temperature"><h3>6.工作温度</h3></div>
                <div class="common_p section20">
                    <p class="small-size">
                        温度是影响18650锂电池寿命的重大因素，温度越高锂电池老化的速度就会越块，温度越高锂电池内部所受的伤害就越大。
                    </p>
                </div>

                <div class="link_title size2 section60" id="button-top-and-flat-top"><h3>7.尖头和平头</h3></div>
                <div class="common_p section20 button-top-and-flat-top"">
                <p class="small-size">
                    所谓尖头和平头是各个厂家根据自己的装配需求、电池安全、电池容量等因素考虑而设计的，其本质上没有任何区别。
                </p>
                <div class="img section60 text-center">
                    <img  src="/static/images/column_button-top-and-flat-top.jpg" alt="Button Top and Flat Top 18650">
                    <img  class="m_section60" src="/static/images/column_button-top-and-flat-top2.jpg" alt="Button Top and Flat Top 18650">
                </div>
        </div>

        <div class="link_title size2 section60" id="Protected-vs-unprotected-batteries"><h3>8.带保护板和不带保护板</h3></div>
        <div class="common_p section20">
            <p class="small-size">
                带保护板比不带保护板的18650锂电池高几mm，价格也稍贵些，但安全性更高。<br>
                带保护板18650锂电池可以防止电池过放<strong>（过放会造成锂电池发热，甚至燃烧、爆炸）。</strong><br>
                <br>
                强光手电和头灯一般都不带保护电路，建议购买带保护的18650锂电池。
            </p>
        </div>
        </section>

        <section class="section70">
            <div class="common_title size1" id="how-do-you-avoid"><h2 class="light1-5">如何辨别18650电池真假</h2></div>
            <div class="common_p section60">
                <p class="small-size">
                    18650电池是常用电池型号，有些不良电池厂家用假18650电池冒充A品电池，现在告诉你如何识别18650锂电池的真假。
                </p>
            </div>

            <div class="link_title size2 section60" id="appearance"><h3>1.看外观</h3></div>
            <div class="common_p section20">
                <p class="small-size">
                    A品18650电池外观精美，电池包膜平滑无折皱，且都有严格的电池追塑标识，能在电池膜上的喷码标识中看到详细的电池数据。
                </p>
            </div>

            <div class="link_title size2 section60" id="weight"><h3>2.掂重量</h3></div>
            <div class="common_p section20">
                <p class="small-size">
                    将18650电池放到电子称上进行称重，然后进行重量对比。
                    A品18650电池的重量一般为43g，而假18650电池的重量一般最低是10g，也有混有泥浆的18650假电池，泥浆18650电池重量一般为30g。
                </p>
            </div>

            <div class="link_title size2 section60" id="voltage-measurement"><h3>3.测电压（专业仪器）</h3></div>
            <div class="common_p section20">
                <p class="small-size">
                    正品18650电池的电压在3.7V左右，18650假电池是没有电压的，即假电池电压为0V。
                </p>
            </div>

            <div class="link_title size2 section60" id="internal-impedance"><h3>4.测内阻（专业仪器）</h3></div>
            <div class="common_p section20">
                <p class="small-size">
                    假冒18650电池没有内阻或者阻值很小很小，而正品18650电池内阻一般在50毫欧左右。
                </p>
                <div class="img section60 text-center"><img  src="/static/images/column_internal-impedance.jpg" alt="Battery Internal Impedance Tester" title="Battery Internal Impedance Tester"></div>
            </div>
        </section>

        <section>
            <div class="common_title size1 section70" id="basic-structure-of-18650"><h2 class="light1-5">18650锂电池组的基本结构</h2></div>
            <div class="common_p section60">
                <p class="small-size">
                    锂电池的基本结构由电芯、保护板、外壳、引线/端子四部分组成。
                </p>
            </div>
            <div class="link_title size2 section60" id="battery-cell"><h3>1.电芯</h3></div>
            <div class="common_p section20">
                <p class="small-size">
                    电芯是电池最重要的组成部分，是能量转换的载体。<br>
                    主要分为圆柱锂离子电芯、<a target="_blank" href="/lithium-ion-battery/list-146/">方形锂离子电芯</a>、<a target="_blank" href="/lithium-ion-battery/list-182/">软包聚合物电芯</a>软包聚合物电芯
                </p>
            </div>

            <div class="link_title size2 section60" id="pcm"><h3>2.保护板</h3></div>
            <div class="common_p section20">
                <p class="small-size">
                    保护板是保护电芯正常工作，预防异常事故发生的电子功能模块。<br>
                    按数量分为单节板和多节板二类。<br>
                    按产品类别分为普通板，智能板和动力板三类。<br>
                    主要参数包括过充、过放、过流、自耗、内阻、保护漏电流等参数。

                </p>
            </div>
            <div class="link_title size2 section60" id="lead-and-terminal"><h3>3.引线及端子线</h3></div>
            <div class="common_p section20">
                <p class="small-size">
                    包括从#32线到#10线等各种规格及品牌的线。<br>
                    包括各类端子头。<br>
                </p>
            </div>
            <div class="link_title size2 section60" id="battery-cases"><h3>4.外壳</h3></div>
            <div class="common_p section20">
                <p class="small-size">
                    外壳是把电芯和保护板固定在一起，密封并与主机完成配合功能的壳体。<br>
                    外壳常用材料有：ABS、ABS+PC、PC等。<br>
                    衡量外壳的主要指标有：颜色、材料、配合、机械强度等。
                </p>
            </div>
            <div class="img section30"><img src="/static/images/column_18650_01.jpg" alt="Structure of 18650 Lithium Battery" title="Structure of 18650 Lithium Battery"></div>
        </section>
        <section class="section80">
            <div class="common_title size1" id="lithium-battery-connection"><h2 class="light1-5">18650锂电池组合</h2></div>
            <div class="common_p section60">
                <p class="small-size">
                    在实际使用电池时，常常需要较高的电压和较大的电流，这就需要将若干个单体电池通过串联、并联（串并联）起来，我们称之为电池组合。18650锂电池的组合是很有讲究的，必须遵循一定的标准。
                </p>

                <div class="link_title size2 section60" id="the-meaning-of-18650"><h3>1.18650电池串并联的含义</h3></div>
                <p class="small-size section20 col-md-12">
                    <strong>18650电池串联：</strong>把多个18650锂电池串联起来，可以等到得到所组合电池个数相加的电压值，但是容量不变，锂电池串联的原理就是电压增加，容量不变。
                </p>
                <div class="img section60 text-center col-md-12">
                    <img  src="/static/images/column_meaning_1.jpg" alt="Schematic Diagram of 18650-4S Connection">
                    <div class="text section20 gray_color">18650-4S连接示意图</div>
                </div>

                <p class="small-size section60">
                    <strong>18650电池并联：</strong>把多节18650锂电池并联组合起来，就可以得到更大的电量，说的专业一点的是“容量”。锂电池并联是电压不变，容量增加。有多少节锂电池并联，总容量就是所有单节锂电池容量相加起来的总值。
                </p>
                <div class="img section60 text-center">
                    <img  src="/static/images/column_meaning_2.jpg" alt="Schematic Diagram of 18650-4P Connection">
                    <div class="text section20 gray_color">18650-4P连接示意图</div>
                </div>

                <p class="small-size section60">
                    <strong>18650电池串并联：</strong>串并联组合方法就是先把几组串联好的锂电池组，再进行并联，这样不仅仅提高了电池组的输出电压，同时也大大提高了18650锂电池组的容量。
                </p>
                <div class="img section60 text-center">
                    <img  src="/static/images/column_meaning_3.jpg" alt="18650-2S2P Connection Diagram">
                    <div class="text section20 gray_color">18650-2S2P连接示意图</div>
                </div>
            </div>


            <div class="link_title size2 section60" id="precautions-for-series"><h3>2.18650锂电池串并联注意事项</h3></div>
            <div class="p_ul section20">
                <ul class="small-size light1-5">
                    <li>一般锂电池串并联使用需要进行<a target="_blank" href="/">锂电池芯配对，</a>芯配对，<br>
                        <span class="font-weight">常规配对的标准：锂电池芯电压差≤10mV，锂电池芯内阻差≤5mΩ，锂电池芯容量差≤20mA。</span></li>
                    <li class="section5"><span class="font-weight">电池电压相同</span></li>
                    <li class="section5">电池并联时必须用同种电池。不同电池的电压不同，并联后，电压高的电池对电压低的电池充电，消耗了电能，引发不安全事故。</li>
                    <li class="section5"><span class="font-weight">电池容量相同</span></li>
                    <li class="section5">电池串联时也应该使用相同的电池。否则不同容量的电池串联后(比如同种电池新旧程度不同)，容量小的电池先放光电，内阻增高，此时容量大的电池就会通过小容量电池的内阻放电，消耗电能，还会对它进行反充电。</li>
                    <li class="section5">这样负载上的电压就会极大降低，无法工作，容量大的电池只相当于小容量的电池，长期使用就会引发不安全事故。</li>
                </ul>
            </div>


            <div class="link_title size2 section60" id="precautions-for-series"><h3>3.18650电池PACK的特点</h3></div>
            <div class="p_ul section20">
                <ul class="small-size light1-5">
                    <li>电池组PACK要求电池具有高度的一致性（容量、内阻、电压、放电曲线、寿命）。</li>
                    <li class="section5">电池组PACK的循环寿命低于单只电池的循环寿命。</li>
                    <li class="section5">不同电池有不同的电压。并联后，高压电池给低压电池充电，低压电池消耗电能，可能导致事故。</li>
                    <li class="section5">在限定的条件下使用（包括充电、放电电流，充电方式，温度等）</li>
                    <li class="section5">锂电池组PACK成型后电池电压及容量有很大提高，必须加以保护，对其进行充电均衡、温度、电压及过流监测。</li>
                    <li class="section5">电池组PACK必须达到设计需要的电压、容量要求。</li>
                </ul>
            </div>
        </section>



    </div>

</div>
</div>


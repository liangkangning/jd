<div class="special gongye">

    <section class="container">

        <div class="banner">

            <div class="list_img">

                <div class="img">

                    <div class="example">

                        <div class="ft-carousel" id="carousel_1">

                            <ul class="carousel-inner">

                                <?php foreach (\common\helpers\AdHelper::GetAd_list('industrial') as $key=>$value):?>

                                    <li class="carousel-item"> <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a></li>

                                <?php endforeach; ?>

                            </ul>

                        </div>

                    </div>





                </div>

                <div class="text">

                    <div class="kouhao">

                        <ul>

                            <li class="">

                                <div class="item">

                                    <p><img src="<?=Yii::getAlias('@web/static/images/kouhao1.png')?>"/>按需开发     </p>

                                </div>

                            </li>

                            <li class="bj">

                                <div class="item">

                                    <p><img src="<?=Yii::getAlias('@web/static/images/kouhao2.png')?>"/>8小时响应     </p>

                                </div>

                            </li>

                            <li class="bj">

                                <div class="item">

                                    <p><img src="<?=Yii::getAlias('@web/static/images/kouhao3.png')?>"/>24小时上门     </p>

                                </div>

                            </li>

                            <li class="bj">

                                <div class="item">

                                    <p><img src="<?=Yii::getAlias('@web/static/images/kouhao4.png')?>"/>十年维护</p>

                                </div>

                            </li>

                            <li class="end bj">

                                <div class="item">

                                    <p><strong>免费</strong> 提供一对一锂电池定制设计方案 <span><a id="qiao" href="http://p.qiao.baidu.com/cps/chat?siteId=4576215&userId=2111997" rel="nofollow" target="_blank">立即定制</a></span></p>

                                </div>

                            </li>

                        </ul>



                    </div>

                </div>



            </div>

        </div>

    </section>



    <section class="container section">

        <div class="new_p">

            <div class="top">

                <div class="title">

                    <h2><a href="/lilizi/">锂离子电池</a></h2>

                </div>

                <div class="more"><a href="/lilizi/">更多</a></div>

            </div>

            <div class="content">

                <div class="img hidden-sm">

                    <?php foreach (\common\helpers\AdHelper::GetAd_list('industrial_lilizi') as $key=>$value):?>

                    <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a>

                    <?php endforeach; ?>





                </div>

                <div class="p_list">

                    <ul>

                        <?php foreach ($data['lilizi'] as $key=>$value):?>

                            <li class="col-md-4 col-sm-6">

                                <div class="item">

                                    <div class="img"><a href="<?=$value->url ?>"><img src="<?=$value->imageUrl?>" alt="<?=$value['title']?>" /></a></div>

                                    <div class="text">

                                        <p>

                                            <a href="<?=$value->url ?>" title="<?=$value['title']?>"><?= $value['title']?></a></p>



                                    </div>

                                </div>

                            </li>

                        <?php endforeach?>



                    </ul>

                </div>

            </div>

        </div>

    </section>



    <section class="container section">

        <div class="new_p">

            <div class="top">

                <div class="title">

                    <h2><a href="/lifepo4/">磷酸铁锂电池</a></h2>

                </div>

                <div class="more"><a href="/lifepo4/">更多</a></div>

            </div>

            <div class="content">

                <div class="img hidden-sm">

                    <?php foreach (\common\helpers\AdHelper::GetAd_list('industrial_taisuanli') as $key=>$value):?>

                        <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a>

                    <?php endforeach; ?>

                </div>

                <div class="p_list">

                    <ul>

                        <?php foreach ($data['taisuanli'] as $key=>$value):?>

                            <li class="col-md-4 col-sm-6">

                                <div class="item">

                                    <div class="img"><a href="<?=$value->url ?>"><img src="<?=$value->imageUrl?>" alt="<?=$value['title']?>" /></a></div>

                                    <div class="text">

                                        <p>

                                            <a href="<?=$value->url ?>" title="<?=$value['title']?>"><?= $value['title']?></a></p>

                                    </div>

                                </div>

                            </li>

                        <?php endforeach?>



                    </ul>

                </div>

            </div>

        </div>

    </section>



    <section class="container section">

        <div class="new_p">

            <div class="top">

                <div class="title">

                    <h2><a href="/libattery/">18650锂电池</a></h2>

                </div>

                <div class="more"><a href="/libattery/">更多</a></div>

            </div>

            <div class="content">

                <div class="img hidden-sm">

                    <?php foreach (\common\helpers\AdHelper::GetAd_list('industrial_18650') as $key=>$value):?>

                        <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a>

                    <?php endforeach; ?>

                </div>

                <div class="p_list">

                    <ul>

                        <?php foreach ($data['dianchi18650'] as $key=>$value):?>

                            <li class="col-md-4 col-sm-6">

                                <div class="item">

                                    <div class="img"><a href="<?=$value->url ?>"><img src="<?=$value->imageUrl?>" alt="<?=$value['title']?>" /></a></div>

                                    <div class="text">

                                        <p>

                                            <a href="<?=$value->url ?>" title="<?=$value['title']?>"><?= $value['title']?></a></p>



                                    </div>

                                </div>

                            </li>

                        <?php endforeach?>



                    </ul>

                </div>

            </div>

        </div>

    </section>

    <section class="container section">

        <div class="new_p">

            <div class="top">

                <div class="title">

                    <h2><a href="/juhewu/">聚合物锂电池</a></h2>

                </div>

                <div class="more"><a href="/juhewu/">更多</a></div>

            </div>

            <div class="content">

                <div class="img hidden-sm">

                    <?php foreach (\common\helpers\AdHelper::GetAd_list('industrial_juhewu') as $key=>$value):?>

                        <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a>

                    <?php endforeach; ?>

                </div>

                <div class="p_list">

                    <ul>

                        <?php foreach ($data['juhewu'] as $key=>$value):?>

                            <li class="col-md-4 col-sm-6">

                                <div class="item">

                                    <div class="img"><a href="<?=$value->url ?>"><img src="<?=$value->imageUrl?>" alt="<?=$value['title']?>" /></a></div>

                                    <div class="text">

                                        <p>

                                            <a href="<?=$value->url ?>" title="<?=$value['title']?>"><?= $value['title']?></a></p>



                                    </div>

                                </div>

                            </li>

                        <?php endforeach?>



                    </ul>

                </div>

            </div>

        </div>

    </section>









</div>
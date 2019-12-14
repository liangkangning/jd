<?php

/* @var $this \yii\web\View */



/* @var $content string */



use yii\helpers\Html;



use yii\helpers\Url;





?>
    <html lang="zh">







    <!-- BEGIN HEAD -->







    <head>







        <meta charset="utf-8" />



        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">


        <meta content="yes" name="apple-mobile-web-app-capable">



        <meta content="black" name="apple-mobile-web-app-status-bar-style">



        <meta content="telephone=no" name="format-detection">



        <title><?=$this->params['meta_title']?></title>



        <meta http-equiv="X-UA-Compatible" content="IE=edge">



        <meta name="keywords" content="<?=$this->params['keywords']?>">



        <meta content="<?=$this->params['description']?>" name="description" />






        <!-- BEGIN GLOBAL MANDATORY STYLES -->


        <?php $this->head() ?>


        <!-- END THEME LAYOUT STYLES -->





        <link rel="shortcut icon" href="/favicon.ico" />







    </head>







    <!-- END HEAD -->



    <body class="page-container-bg-solid page-md">

    <?php $this->beginBody() ?>

    <!-- BEGIN HEADER -->





    <?php if (Yii::$app->params['controllerName']=='index'): ?>

        <header class=" head_index" id="nav_bar">

            <div class="content commom_padding_l_r">

                <section >

                    <div class="logo">

                        <div class="img"><a href="/"><img src="<?=Yii::getAlias('@web/static/mobil_images/logo.png')?>" alt="钜大锂电超可靠超安全" title="钜大锂电超可靠超安全" /></a></div>

                    </div>

                    <div class="header_right">

                        <div class="img"><a href="/search/"><img src="<?=Yii::getAlias('@web/static/mobil_images/search.png')?>" alt="搜索" title="搜索"/></a></div>

                    </div>

                </section>

            </div>

        </header>

    <?php else:?>

        <header class="commom_padding_l_r head_back" id="nav_bar">

            <section >

                <div class="back" id="goBack">

                    <a rel="nofollow" class="back-btn common-header-btn" style="display:;" data-v-01ba7424="">

                        <i class="icon iconfont icon-back" data-v-01ba7424=""></i>

                    </a>

                </div>

                <div class="logo">

                    <div class="img"><a href="/"><img src="<?=Yii::getAlias('@web/static/mobil_images/logo1.png')?>" alt="钜大锂电超可靠超安全" title="钜大锂电超可靠超安全" /></a></div>

                </div>

                <div class="header_right">

                    <div class="img" data="none"><a href="javascript:void(0)" ><img src="<?=Yii::getAlias('@web/static/mobil_images/top_right_list.png')?>" alt="搜索" title="搜索"/></a></div>

                </div>

            </section>
            <div class="nav_list none">
                <ul>
                    <div class="top">
                        <img src="<?=Yii::getAlias('@web/static/mobil_images/top_list_top.png')?>" alt="">
                    </div>
                    <li>
                        <div class="item">
                            <a href="/">钜大首页</a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <a href="/lilizi/list-82.html">军用电池</a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <a href="/diwen/">低温电池</a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <a href="/dongli/">动力电池</a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <a href="/chuneng/">储能电池</a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <a href="/about/">关于钜大</a>
                        </div>
                    </li>
                    <li class="end">
                        <div class="item">
                            <a href="/search/">搜索产品</a>
                        </div>
                    </li>
                </ul>
            </div>

        </header>

    <?php endif;?>



    <?=$content?>







    <!-- BEGIN FOOTER -->

    <?php \phone\assets\MobilAsset::register($this); ?>

    <?php $this->endBody() ?>



   <div class="error_bottom">
    <?php $this->beginContent('@app/views/layouts/public/footer.php') ?>
   </div>


    <?php $this->endContent() ?>



    <!-- END FOOTER -->

    </body>

    </html>







<?php $this->endPage() ?>
<?php/* @var $this \yii\web\View *//* @var $content string */use yii\helpers\Html;use yii\helpers\Url;\frontend\assets\IeAsset::register($this);$this->registerCssFile('@web/assets/css/style.css',['depends'=>['frontend\assets\LayoutAsset']]);?>    <!DOCTYPE html>    <!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->    <!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->    <!--[if !IE]><!-->    <html lang="en">    <!--<![endif]-->    <!-- BEGIN HEAD -->    <head>        <meta charset="utf-8" />        <title><?=$this->params['meta_title']?></title>        <meta http-equiv="X-UA-Compatible" content="IE=edge">        <meta name="keywords" content="<?=$this->params['keywords']?>">        <meta content="<?=$this->params['description']?>" name="description" />        <!-- BEGIN GLOBAL MANDATORY STYLES -->        <?php $this->head() ?>        <!-- END THEME LAYOUT STYLES -->        <link rel="shortcut icon" href="/favicon.ico" />        <script language="JavaScript">            var BaseUrl = "<?=Yii::getAlias('@web')?>";        </script>        <script>            var _hmt = _hmt || [];            (function() {                var hm = document.createElement("script");                hm.src = "https://hm.baidu.com/hm.js?daad318108ab021e0ac9abd57c731b1a";                var s = document.getElementsByTagName("script")[0];                s.parentNode.insertBefore(hm, s);            })();        </script>    </head>    <!-- END HEAD -->    <body class="page-container-bg-solid page-md">    <?php $this->beginBody() ?>    <!-- BEGIN HEADER --><div class="error">    <header>        <section class="container section">            <div class="header_top">                <div class="logo">                    <div class="l_p">                        <div class="img">                            <a href="/">                                <img src="<?=Yii::getAlias('@web/static/images/logo.png')?>" alt="钜大锂电" title="钜大锂电" class="logo-default">                            </a></div>                    </div>                </div>                <div class="kouhao">                        <ul>                            <li class="col-md-3 col-sm-3 ">                                <div class="item">                                    <p><img src="/static/images/kouhao1.png">按需开发     </p>                                </div>                            </li>                            <li class="col-md-3 col-sm-3 bj">                                <div class="item">                                    <p><img src="/static/images/kouhao2.png">8小时响应     </p>                                </div>                            </li>                            <li class="col-md-3 col-sm-3 bj">                                <div class="item">                                    <p><img src="/static/images/kouhao3.png">24小时上门     </p>                                </div>                            </li>                            <li class="col-md-3 col-sm-3 bj">                                <div class="item">                                    <p><img src="/static/images/kouhao4.png">十年维护</p>                                </div>                            </li>                        </ul>                </div>            </div>        </section>    </header>    <?=$content?>    <!-- BEGIN FOOTER -->    <?php $this->beginContent('@app/views/layouts/public/footer.php') ?>    <?php $this->endContent() ?>    <!-- END FOOTER -->    <?php \frontend\assets\LayoutAsset::register($this); ?>    <?php $this->endBody() ?>    <div class="rightNav none">        <ul>            <li>                <div class="zixun" id="fuchuang">                    <a  href="http://ddt.zoosnet.net/LR/Chatpre.aspx?id=DDT94811403&lng=cn" rel="nofollow" target="_blank"></a>                </div>            </li>            <li>                <div class="rexian"></div>                <div class="content p2">                    <p>400-666-3615                    </p>                </div>            </li>            <li>                <div class="weixin"></div>                <div class="content p3">                    <div class="img"></div>                    <div class="text">扫码关注官方微信</div>                </div>            </li>            <li>                <div class="top" onclick="javascript:window.scrollTo(0,0)"></div>            </li>        </ul>    </div></div>    </body>    </html><?php $this->endPage() ?>
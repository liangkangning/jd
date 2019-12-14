<?php



use yii\helpers\Html;

use yii\helpers\Url;

$productProvider= new \yii\data\ActiveDataProvider([

    'query' => $data['list'],

    'pagination'=>[

        'pageSize'=>16,

        'pageSizeParam' => false,

    ],

]);



?>

<?php $this->beginContent('@app/mobil/layouts/public/common_left.php') ?>

<?php $this->endContent() ?>
    <div class="commont_left_part">
        <div class="case_index commom_padding_l_r">

            <div class="banner">
                <a href="http://m.juda.cn/news/3526.html">
                    <img src="<?=Yii::getAlias('@web/static/mobil_images/case_banner.jpg')?>" alt="" /></a>
            </div>
            <div class="list">
                <ul>

                    <li class="col-sm-6 col-xs-6">
                        <div class="item">
                            <div class="img"><a href="/news/tezhong.html"><img src="<?=Yii::getAlias('@web/static/mobil_images/anli_tezhong.jpg')?>" alt="特种锂电池"  title="特种锂电池" /></a></div>
                            <div class="title"><a href="/news/tezhong.html">特种锂电池</a></div>
                        </div>
                    </li>
                    <li class="col-sm-6 col-xs-6">
                        <div class="item">
                            <div class="img"><a href="/news/junjing.html"><img src="<?=Yii::getAlias('@web/static/mobil_images/anli_junyong.jpg')?>" alt="军用警用锂电池"  title="军用警用锂电池" /></a></div>
                            <div class="title"><a href="/news/junjing.html">军用警用锂电池</a></div>
                        </div>
                    </li>
                    <li class="col-sm-6 col-xs-6">
                        <div class="item">
                            <div class="img"><a href="/news/robots.html"><img src="<?=Yii::getAlias('@web/static/mobil_images/anli_jiqiren.jpg')?>" alt="智能机器人电池"  title="智能机器人电池" /></a></div>
                            <div class="title"><a href="/news/robots.html">智能机器人电池</a></div>
                        </div>
                    </li>
                    <li class="col-sm-6 col-xs-6">
                        <div class="item">
                            <div class="img"><a href="/news/yiliao.html"><img src="<?=Yii::getAlias('@web/static/mobil_images/anli_yiliao.jpg')?>" alt="医疗设备锂电池"  title="医疗设备锂电池" /></a></div>
                            <div class="title"><a href="/news/yiliao.html">医疗设备锂电池</a></div>
                        </div>
                    </li>
                    <li class="col-sm-6 col-xs-6">
                        <div class="item">
                            <div class="img"><a href="/news/gongye.html"><img src="<?=Yii::getAlias('@web/static/mobil_images/anli_gongye.jpg')?>" alt="工业仪器锂电池"  title="工业仪器锂电池" /></a></div>
                            <div class="title"><a href="/news/gongye.html">工业仪器锂电池</a></div>
                        </div>
                    </li>
                    <li class="col-sm-6 col-xs-6">
                        <div class="item">
                            <div class="img"><a href="/news/yingji.html"><img src="<?=Yii::getAlias('@web/static/mobil_images/anli_yingji.jpg')?>" alt="应急备用锂电池"  title="应急备用锂电池" /></a></div>
                            <div class="title"><a href="/news/yingji.html">应急备用锂电池</a></div>
                        </div>
                    </li>
                    <li class="col-sm-6 col-xs-6">
                        <div class="item">
                            <div class="img"><a href="/news/shangyong.html"><img src="<?=Yii::getAlias('@web/static/mobil_images/anli_shangyong.jpg')?>" alt="商用设备锂电池"  title="商用设备锂电池" /></a></div>
                            <div class="title"><a href="/news/shangyong.html">商用设备锂电池</a></div>
                        </div>
                    </li>
                    <li class="col-sm-6 col-xs-6">
                        <div class="item">
                            <div class="img"><a href="/news/xiaofei.html"><img src="<?=Yii::getAlias('@web/static/mobil_images/anli_xiaofei.jpg')?>" alt="消费电子锂电池"  title="消费电子锂电池" /></a></div>
                            <div class="title"><a href="/news/xiaofei.html">消费电子锂电池</a></div>
                        </div>
                    </li>
                    <li class="col-sm-6 col-xs-6">
                        <div class="item">
                            <div class="img"><a href="/news/zhineng.html"><img src="<?=Yii::getAlias('@web/static/mobil_images/anli_zhineng.jpg')?>" alt="智能电动工具锂电池"  title="智能电动工具锂电池" /></a></div>
                            <div class="title"><a href="/news/zhineng.html">智能电动工具锂电池</a></div>
                        </div>
                    </li>




                </ul>
            </div>

        </div>
    </div>
<?php $this->endBody() ?>
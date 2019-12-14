<?php



use yii\helpers\Html;

use yii\helpers\Url;

use \common\helpers\UrlHelp;

$data_list=\common\models\Article::find()->where(['category_id'=>'35'])->andWhere(['status'=>1])->orderBy('sort DESC');



$dataProvider = new \yii\data\ActiveDataProvider([

    'query' => $data_list,

    'pagination'=>[

        'pageSize'=>6,

        'pageSizeParam' => false,

    ],



]);

$this -> beginPage();

?>


<div class="news_list">
    <div class="news_nav">
        <ul>
            <li class="col-sm-3 col-xs-3 check">
                <div class="item">
                    <a href=""><h2>公司新闻</h2> </a>
                </div></li>
            <li class="col-sm-3 col-xs-3"><div class="item">
                    <a href=""><h2>电池专题</h2> </a>
                </div></li>
            <li class="col-sm-3 col-xs-3"><div class="item">
                    <a href=""><h2>行业资讯</h2>  </a>
                </div></li>
            <li class="col-sm-3 col-xs-3"><div class="item">
                    <a href=""><h2>电池知识</h2> </a>
                </div></li>
        </ul>
    </div>
    <div class="list commom_padding_l_r">
        <ul>
            <li><div class="item">
                    <div class="img">
                        <a href=""><img src="http://www.juda.cn/storage/image//201803/1522480286114.jpg" alt="" /></a>
                    </div>
                    <div class="text">
                        <div class="p">
                            <p><a href="">钜大锂电获选2017年度纳税大企业</a></p>
                            <p>2017-03-25</p>
                        </div>

                    </div>
                </div>
            </li>
            <li><div class="item">
                    <div class="img">
                        <img src="http://www.juda.cn/storage/image//201803/1522480286114.jpg" alt="" />
                    </div>
                    <div class="text">
                        <div class="p">
                            <p><a href="">钜大锂电获选2017年度纳税大企业</a></p>
                            <p>2017-03-25</p>
                        </div>

                    </div>
                </div>
            </li>
            <li><div class="item">
                    <div class="img">
                        <img src="http://www.juda.cn/storage/image//201803/1522480286114.jpg" alt="" />
                    </div>
                    <div class="text">
                        <div class="p">
                            <p><a href="">钜大锂电获选2017年度纳税大企业</a></p>
                            <p>2017-03-25</p>
                        </div>

                    </div>
                </div>
            </li>
            <li><div class="item">
                    <div class="img">
                        <img src="http://www.juda.cn/storage/image//201803/1522480286114.jpg" alt="" />
                    </div>
                    <div class="text">
                        <div class="p">
                            <p><a href="">钜大锂电获选2017年度纳税大企业</a></p>
                            <p>2017-03-25</p>
                        </div>

                    </div>
                </div>
            </li>
            <li><div class="item">
                    <div class="img">
                        <img src="http://www.juda.cn/storage/image//201803/1522480286114.jpg" alt="" />
                    </div>
                    <div class="text">
                        <div class="p">
                            <p><a href="">钜大锂电获选2017年度纳税大企业</a></p>
                            <p>2017-03-25</p>
                        </div>

                    </div>
                </div>
            </li>
        </ul>
    </div>

</div>



<?php $this->endPage()

?>

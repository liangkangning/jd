<?php



use yii\helpers\Html;

use yii\helpers\Url;

$dataProvider = new \yii\data\ActiveDataProvider([

    'query' => $data['list'],

    'pagination' => [

        'pageSize' => 10,

        'pageSizeParam' => false,

    ],

]);

$this -> beginPage();

?>



<div class="news_list">
    <div class="banner">
        <img src="<?=Yii::getAlias('@web/static/mobil_images/banner_news.jpg')?>" alt="研发制造" title="研发制造">
    </div>
    <div class="news_nav">
        <ul>

            <?php foreach ($data['category_dengji'] as $key => $value): ?>

                <li class="col-sm-3 col-xs-3 <?= $data['lanmu']['name']==$value['name']?'check':'' ?>">
                    <div class="item">
                        <a href="/news/<?=$value['name'] ?>.html"><h2><?=$value['title'] ?></h2></a>
                    </div></li>
            <?php endforeach ?>
            <li class="col-sm-3 col-xs-3"><div class="item">
                    <a href="/blog/"><h2>电池博客</h2></a>
                </div></li>
        </ul>
    </div>
    <div class="list commom_padding_l_r">
        <ul>

            <?=\yii\widgets\ListView::widget([

                'dataProvider' => $dataProvider,

                'itemView' => '_list',

                'layout' => "{items}<div id='fenye'>{pager}</div>",//加个这就好了
                'pager'=>[

                    //'options'=>['class'=>'hidden']//关闭自带分页

                    'prevPageLabel'=>'上一页',

                    'nextPageLabel'=>'下一页',

                ],



            ]);

            ?>
        </ul>
    </div>

</div>

<?php $this->endPage()

?>


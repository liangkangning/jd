<?php



use yii\helpers\Html;

use yii\helpers\Url;

use common\helpers\ArrayHelper;
$productProvider= new \yii\data\ActiveDataProvider([
    'query' => $this->params['product_list'],
    'pagination'=>[
        'pageSize'=>24,
        'pageSizeParam' => false,
    ],
]);
//var_dump($this->params['product_list']);
$this -> beginPage();
?>

    <style>
        /*header{display: none}*/
    </style>
    <div class="search_index">
        <div class="top">
            <form method="get" action="/search/" name="form">
                <div class="class-search-box" data-v-e85b687a="">
                    <div class="search-content" data-v-e85b687a=""><i class="icon iconfont icon-search" data-v-e85b687a=""></i>
                        <?php if(empty($this->params['search'])):?>
                            <input type="text" placeholder="锂电池" value="锂电池" name="keyword">
                        <?php else:?>
                            <input type="text" placeholder="<?=$this->params['search']?>" value="<?=$this->params['search']?>" name="keyword">
                        <?php endif; ?>
                    </div>
                    <input type="submit" value="搜索" class="search-btn">
                </div>

            </form>

        </div>
        <?php if(empty($this->params['search'])):?>
            <div class="search-box">
                <section class="tag-box hot-tag-box">
                    <div class="tag-tit">
                        <span class="txt">热门搜索</span>
                    </div>
                    <div class="tag-list">
                        <span class="tag"><a href="/search/?keyword=低温锂电池">低温锂电池</a></span>
                        <span class="tag"><a href="/search/?keyword=军用锂电池">军用锂电池</a></span>
                        <span class="tag"><a href="/search/?keyword=12V锂电池">12V锂电池</a></span>
                        <span class="tag"><a href="/search/?keyword=48V锂电池">48V锂电池</a></span>
                        <span class="tag"><a href="/search/?keyword=18650锂电池">18650锂电池</a></span>
                        <span class="tag"><a href="/search/?keyword=动力锂电池">动力锂电池</a></span>
                        <span class="tag"><a href="/search/?keyword=储能锂电池">储能锂电池</a></span>
                        <span class="tag"><a href="/search/?keyword=防爆锂电池">防爆锂电池</a></span>
                        <span class="tag"><a href="/search/?keyword=特种锂电池">特种锂电池</a></span>

                    </div>

                </section>
            </div>
        <?php endif; ?>
        <?php if(!empty($this->params['search'])):?>
            <div class="product_list">
                <ul>

                    <?=\yii\widgets\ListView::widget([

                        'dataProvider' => $productProvider,

                        'itemView' => '_list',

                        'layout' => "{items}<div id='fenye'>{pager}</div>",//加个这就好了

                        'options' => [

                            'tag' => 'div',

                        ],

                        'itemOptions' => [

                            'tag' => false,

                        ],
                        'pager'=>[

                            //'options'=>['class'=>'hidden']//关闭自带分页

                            'prevPageLabel'=>'上一页',

                            'nextPageLabel'=>'下一页',

                        ],


                    ]);

                    ?>

                </ul>
            </div>

        <?php endif; ?>
    </div>

<?php $this->endPage()

?>
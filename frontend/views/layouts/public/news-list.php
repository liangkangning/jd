<?php

use common\models\Article;

$news_nav_tuijian = [
    'company' => ['title'=>'公司新闻','url'=>'/news/gongsixinwen.html','data'=>Article::find()->where(['category_id'=>35])->andWhere(['status'=>1])->andWhere(['like','np','h'])->limit(3)->all()],
    'related' => ['title'=>'相关资讯','url'=>'/news/','data'=>$this->params['randAtricle']],
    'new' => ['title'=>'最新资讯','url'=>'/news/','data'=>Yii::$app->params['new_news']],
];

$controller_name =  Yii::$app->controller->id;
if ($controller_name=="news"){

}elseif ($controller_name=="licheng"){
    unset($news_nav_tuijian['related']);
}else{
    unset($news_nav_tuijian['company']);
}
?>

<div class="seach_jingxuan_news">
    <div class="news-list container section60">
        <div class="nav-list">
            <ul>
                <?php foreach ($news_nav_tuijian as $key=>$value):?>
                    <li><a href="<?=$value['url']?>"><?=$value['title']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="list section20">
            <?php $key_num=0;?>
            <?php foreach ($news_nav_tuijian as $key=>$list):?>
            <?php $key_num++?>
                <?php if ($key=='company'): ?>
                    <div class="companyAtricle">
                        <ul class="<?= $key_num==1?:'none'?>">
                            <?php foreach ($list['data'] as $key => $value): ?>
                                <li class="col-md-4">
                                    <div class="item ">
                                        <div class="img"><a href="<?= $value['url']?>"><img src="<?= $value['imageUrl']?>" alt="<?= $value['title']?>" title="<?= $value['title']?>"></a></div>
                                        <div class="text section20"><a href="<?= $value['url']?>" title="<?= $value['title']?>"><?= $value['title']?></a></div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php else:?>
                    <ul class="<?= $key_num==1?:'none'?>">
                        <?php foreach ($list['data'] as $key => $value): ?>
                            <li class="col-md-6">
                                <div class="item ">
                                    <div class="title pull-left"><a href="<?= $value['url']?>" title="<?= $value['title']?>"><?= $value['title']?></a></div>
                                    <div class="time pull-right"><?= date('Y-m-d', $value['create_time']) ?></div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif;?>
            <?php endforeach;?>

        </div>
    </div>
</div>
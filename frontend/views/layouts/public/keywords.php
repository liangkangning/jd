<?php

use common\models\Keywords;

$keywords_category = Keywords::find()->orderBy(['sort'=>SORT_ASC])->limit(34)->asArray()->all();
?>
<div class="commom_keywords_top container section">
    <div class="top">
        <div class="title col-md-6"><a href="/keywords/" class="size4-6p">推荐品类</a></div>
        <div class="more col-md-6 more_a"><a href="/keywords/">更多</a></div>
    </div>
    <div class="list">
        <ul>
            <?php foreach ($keywords_category as $key=>$value):?>
                <li >
                    <a class="size6-4p" href="<?=Yii::$app->request->baseUrl?>/keywords/<?=$value['name']?>/"><?=$value['keyword'] ?> </a> |
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
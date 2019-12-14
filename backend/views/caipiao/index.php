<style>
    .caipiao{width: 1200px;overflow: hidden;margin:0 auto;font-size: 16px}
    .caipiao .top{margin-top: 50px}
    .caipiao ul{}
    .caipiao ul li{overflow: hidden;border-bottom: 1px solid #919191}
    .caipiao ul li .item{}
    .caipiao ul li .item dl{width: 33.3%;overflow: hidden;float: left;margin: 15px 0}
    .caipiao ul li .item dl .left{float: left;}
    .caipiao ul li .item dl .right{float: left}
    .caipiao ul li .item dl .right dt{width: 80px;float: left;line-height: 2}
</style>

<div class="caipiao">

    <div class="header">
        <ul>

        </ul>

        <table border="1">
            <tr>
                <th>码数</th>
                <th>金额倍数</th>
            </tr>
            <?php foreach (Yii::$app->params['touzhu'] as $key=>$value):?>
                <tr>
                    <td><?=$value['num']?></td>
                    <td><?=$value['money']?></td>
                </tr>

            <?php endforeach; ?>


        </table>
    </div>
    <div class="top">
        <p>历史出现的期数</p>
    </div>
    <ul>
        <?php foreach (Yii::$app->params['history'] as $key=>$value):?>
            <li>
                <div class="item">

                    <dl>
                        <div class="left">日期：</div>
                        <div class="right">
                            <?=$value[0]?>
                        </div>
                    </dl>
                    <dl>
                        <div class="left"> 中码数：</div>
                        <div class="right">
                            <?=$value[1]?>
                        </div>
                    </dl>
                    <dl>
                        <div class="left">时间：</div>
                        <div class="right">
                            <?=$value[2]?>
                        </div>
                    </dl>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
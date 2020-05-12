<div class="part container job">
    <div class="banner_common relative h400">
        <div class="img"><img src="/assets/images/about_job.jpg" alt="公司完善的体系及产品认证" title="公司完善的体系及产品认证"></div>
        <div class="text">
            <div class="content">
                <h1 class="size2-8p">加入我们</h1>
                <p class="size5-5p section30">虚位以待，钜大期待您的加入</p>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="widht-margin">
            <div class="title section100"><h1 class="size2-8p">招聘职位</h1></div>
            <div class="getiao border_bottom_line section30"></div>
        </div>

        <div class="items list">
            <ul>
                <?=\yii\widgets\ListView::widget([
                    'dataProvider' => Yii::$app->params['list'],
                    'itemView' => '_list_job',
                    'layout' => "{items}<div id='fenye'>{pager}</div>",//加个这就好了
                ]);
                ?>
            </ul>
        </div>
    </div>
    <div class="call_us section55">
        <div class="widht-margin">
            <div class="title size2-8p color_b1">联系方式</div>
            <div class="p section20">
                <p>
                    联系人：周小姐<br>
                    招聘专线：0769-22811760<br>
                    招聘邮箱：zhaopin@juda.cn<br>
                    面试地址：东莞市南城区周溪隆溪路5号高盛科技园A栋<br>
                </p>
            </div>
        </div>
    </div>
    <div class="getiao section80"></div>
</div>
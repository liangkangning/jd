<div class="category-index">
    <div class="banner_common relative">
        <div class="img"><img src="/assets/images/tezhong_banner.png" alt=""></div>
        <div class="text">
            <div class="content">
                <h1 class="sizemax-12p">特种电池</h1>
                <p class="size4-6p section40">特殊环境、特殊用途、特定领域</p>
            </div>
        </div>
    </div>
    <?php foreach ($data as $key=>$value):?>
        <section class="part <?=$value['color'] ?>">
            <div class="container">
                <div class="title">
                    <h2 class="pull-left"><?=$value['title'] ?></h2>
                    <div class="more pull-right"><a href="<?=$value['url'] ?>">更多 ></a></div>
                </div>
                <div class="content section30">
                    <div class="left-part pull-left ">
                        <div class="relative">
                            <div class="to_black">
                                <dvi class="img ">
                                    <img src="/assets/images/<?=$value['images'] ?>" alt="<?=$value['title'] ?>" title="<?=$value['title'] ?>">
                                </dvi>
                                <div class="text">
                                    <p><?=$value['text'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-part pull-right">
                        <div class="list product_common_while">
                            <ul>
                                <?php foreach ($value['list'] as $key=>$value):?>
                                    <li class="col-md-3">
                                        <div class="item">
                                            <div class="img"><a href="<?=$value['url'] ?>"><img src="<?=$value['imageUrl'] ?>" alt="<?=$value['title'] ?>" title="<?=$value['title'] ?>"></a></div>
                                            <div class="text"><a href="<?= $value['url'] ?>"><?=$value['title'] ?></a></div>
                                        </div>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach;?>
</div>

<?php $this->beginContent('@app/views/layouts/public/bottom_seach.php') ?>
<?php $this->endContent() ?>
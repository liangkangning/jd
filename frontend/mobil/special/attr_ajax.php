<ul>
    <?php foreach ($this->params['attr_list'] as $key=>$value): ?>
        <li>
            <div class="attr_name"><?=$value['attr']?></div>
            <div class="item">
                <?php foreach ($value['values'] as $k=>$v): ?>
                    <dl class="col-sm-4 col-xs-4">
                        <div class="dl_item">
                            <a href="/diwen/list-45.html"><?=$v['name']?></a>
                        </div>
                    </dl>
                <?php endforeach;?>
            </div></li>
    <?php endforeach;?>
    <li class="end"></li>
</ul>
<?php if($this->params['kong']!=$model->attr_id){?>
<dl class="normal clearfix">
    <dt>
        电池种类
    </dt>
    <dd>
        <div class="shell">
            <table>
                <tbody>
                <tr>
                    <td class="list">
<? }?>
                        <a data-type="453" href="/category-wofang/list-s453/?from=scat"><?= $model->attrValueName->name ?></a>

                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </dd>
</dl>

<?php $this->params['kong']=2;?>
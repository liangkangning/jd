<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Category;

/* @var $model common\models\Article */
/* @var $dataProvider yii\data\ActiveDataProvider  */
/* @var $searchModel backend\models\search\ArticleSearch */

/* ===========================以下为本页配置信息================================= */
/* 页面基本属性 */
$this->title = '内容管理';
$this->params['title_sub'] = '';  // 在\yii\base\View中有$params这个可以在视图模板中共享的参数

/* 加载页面级别资源 */
\backend\assets\TablesAsset::register($this);

$columns = [
    [
        'class' => \common\core\CheckboxColumn::className(),
        'name'  => 'id',
        'options' => ['width' => '20px;'],
        'checkboxOptions' => function ($model, $key, $index, $column) {
            return ['value' => $key,'label'=>'<span></span>','labelOptions'=>['class' =>'mt-checkbox mt-checkbox-outline','style'=>'padding-left:19px;']];
        }
    ],
    [
        'header' => 'ID',
        'attribute' => 'id',
        'options' => ['width' => '50px;']
    ],

    [
        'header' => '名称',
        'attribute' => 'title',
        'options' => ['width' => '40%'],
        'content' => function($model){
            $res = common\models\Article::find()->where(['title'=>$model['title']])->one();
            if ($res){
                return Html::input('text','title',$model['title'],['style'=>'width:100%;background-color :red','data-id'=>$model['id']]);
            }else{
                return Html::input('text','title',$model['title'],['style'=>'width:100%;background-color :#FFFFCC','data-id'=>$model['id']]);
            }

        }
    ],
    [
        'header' => '内容',
        'attribute' => 'title',
        'options' => ['width' => '35%;'],
        'content' => function($model){
            return "<div class='chakan' style='position:relative'><a href='width:100%'>查看</a><div class='none' style='display:none;position:absolute;z-index:999;background:#fff;overflow-y:scroll;height:400px;'>".$model['content']."</div></div>";
        }
    ],

    [
        'label' => '状态',
        'options' => ['width' => '150px;'],
        'content' => function($model){
           if($model['status']==1){
               return '未审核';
           }
            if($model['status']==2){
                return '已添加';
            }
            if($model['status']==3){
                return '已发布';
            }


        }
    ],

    [
        'class' => 'yii\grid\ActionColumn',
        'header' => '操作',
        'template' => '{update} {edit} {delete} ',
        'options' => ['width' => '200px;'],
        'buttons' => [
            'update' => function ($url, $model, $key) {
                if ($model['status']==1){
                    return Html::a('<i class="fa fa-plus"></i>', $url, [
                        'title' => Yii::t('app', '确定添加'),
                        'class' => 'btn btn-xs blue ajax-get confirm'
                    ]);
                }
            },
            'edit' => function ($url, $model, $key) {
                if ($model['status']==1){
                return Html::a('<i class="fa fa-edit"></i>', $url, [
                    'title' => Yii::t('app', '编辑'),
                    'class' => 'btn btn-xs purple'
                ]);
                }

            },
            'delete' => function ($url, $model, $key) {
                if ($model['status']==1){
                    return Html::a('<i class="fa fa-times"></i>', $url, [
                        'title' => Yii::t('app', '删除'),
                        'class' => 'btn btn-xs red ajax-get confirm'
                    ]);
                }
            },

        ],
    ],
];

?>
<?php \yii\widgets\Pjax::begin(['options'=>['id'=>'pjax-container']]); ?>
<div class="portlet light portlet-fit portlet-datatable bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject font-dark sbold uppercase">管理信息</span>
        </div>
        <div class="actions">
            <div class="btn-group btn-group-devided">
             <?= Html::button('一键添加<i class="fa fa-plus"></i>', ['class' => 'btn green yijian']) ?>
             <?= Html::button('一键删除<i class="fa fa-times"></i>', ['class' => 'btn red yijianDel']) ?>
            </div>

        </div>
    </div>
    <div class="portlet-body">

        <div>

        </div>
        <div class="table-container">
            <form class="ids">
            <?= GridView::widget([
                'showFooter' => true,  //设置显示最下面的footer
                'id' => 'grid', 
                'dataProvider' => $dataProvider, // 列表数据
                //'filterModel' => $searchModel, // 搜索模型
                'options' => ['class' => 'grid-view table-scrollable','style' => 'padding-bottom:400px'],
                /* 表格配置 */
                'tableOptions' => ['class' => 'table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer'],
                /* 重新排版 摘要、表格、分页 */
                'layout' => '{items}<div class=""><div class="col-md-5 col-sm-5">{summary}</div><div class="col-md-7 col-sm-7"><div class="dataTables_paginate paging_bootstrap_full_number" style="text-align:right;">{pager}</div></div></div>',
                /* 配置摘要 */
                'summaryOptions' => ['class' => 'pagination'],
                /* 配置分页样式 */
                'pager' => [
                    'options' => ['class'=>'pagination','style'=>'visibility: visible;'],
                    'nextPageLabel' => '下一页',
                    'prevPageLabel' => '上一页',
                    'firstPageLabel' => '第一页',
                    'lastPageLabel' => '最后页'
                ],
                /* 定义列表格式 */
                'columns' => $columns,
            ]); ?>
            </form>
        </div>

    </div>
</div>
<?php \yii\widgets\Pjax::end(); ?>

<!-- 定义数据块 -->
<?php $this->beginBlock('test'); ?>
jQuery(document).ready(function() {
    highlight_subnav('articleadmin/index'); //子导航高亮
});

$(".table-container input").change(function(){
     obj = this;
     id=$(obj).attr("data-id");
     title=$(obj).val();
         $.ajax({
            url : "http://kang.juda.cn/articlefrom/status",
            type : 'post',
            data : {"id":id,'title':title},
            dataType : 'json',
            async : false,
            success : function(data){
                if(data.result)
                   {
                     $(obj).css("background-color","#FFFFCC");
                   }else{
                      $(obj).css("background-color","red");
                   }
            },

        });
});

$(".chakan").mouseover(function(){
  $(this).find('div').css('display','block');
});
$(".chakan").mouseout(function(){
  $(this).find('div').css('display','none');
});
$(".yijian").click( function () { 
var ids = $("#grid").yiiGridView("getSelectedRows");
if(ids.length>0){
     $.ajax({
        url : "http://kang.juda.cn/articlefrom/add-all",
        type : 'post',
        data : {"ids":ids},
        dataType : 'json',
        async : false,
        success : function(data){
           alert('添加成功')
           window.location.reload();
        },

    });
}else{
    alert('请勾选！');
}
console.log(ids);
});


$(".yijianDel").click( function () {
var ids = $("#grid").yiiGridView("getSelectedRows");
if(ids.length>0){
$.ajax({
url : "http://kang.juda.cn/articlefrom/add-del",
type : 'post',
data : {"ids":ids},
dataType : 'json',
async : false,
success : function(data){
alert('删除成功')
window.location.reload();
},

});
}else{
alert('请勾选！');
}
console.log(ids);
});

<?php $this->endBlock() ?>
<!-- 将数据块 注入到视图中的某个位置 -->
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>

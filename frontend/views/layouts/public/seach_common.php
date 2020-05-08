<div class="form_main">
    <div class="search-dropdown">
        <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: none;box-shadow:none;outline:none">产品<i></i></button>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)" data-title="product">产品</a></li>
                <li><a href="javascript:void(0)" data-title="news">资讯</a></li>
            </ul>
        </div>
    </div>
    <form id="search_form" class="search_form" method="get" action="/search/" name="form" >

        <div class="form-label">
            <span>输入搜索内容</span>
        </div>
        <div class="input-wrap">
            <div class="search_ico pull-left"><i class="seach_ico"></i></div>
            <div class="pull-left input">
                <input type="text" aria-label="输入搜索内容" name="keyword" placeholder="输入搜索内容">
                <div class="close"><i class="close_ico"></i></div>
            </div>
        </div>
        <input class="input" type="hidden" name="type" value="product">
    </form>
</div>

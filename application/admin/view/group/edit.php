{extend name="base/base"/}
{block name="main"}
<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">管理组</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="title" value="{$group->title}">
        </div>
    </div>
    <div class="form-group">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">修改</button>
        </div>
    </div>
</form>
{/block}
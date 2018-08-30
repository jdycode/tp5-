{extend name="base/base"/}
{block name="main"}
<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{$admin->id}">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="username" value="{$admin->username}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-3">
            <input type="password" class="form-control" id="inputPassword3" placeholder="" name="password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">头像</label>
        <div class="col-sm-3">
            <input type="file" class="form-control" id="inputPassword3" placeholder="" name="logo" /><img src="{$admin->logo}"alt="" width=50>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">提交</button>
        </div>
    </div>
</form>
{/block}
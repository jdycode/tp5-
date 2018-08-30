{extend name="base/base"/}
{block name="main"}
<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="username">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">性别</label>
        <div class="col-sm-3">
            <input type="radio" name="sex" value="1"/>男
            <input type="radio" name="sex" value="2"/>女
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-3">
            <input type="password" class="form-control" id="inputEmail3" placeholder="" name="password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">头像</label>
        <div class="col-sm-3">
            <input type="file" class="form-control" id="inputPassword3" placeholder="" name="logo"/>
        </div>
    </div>
    <div class="form-group">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加</button>
        </div>
    </div>
</form>
{/block}
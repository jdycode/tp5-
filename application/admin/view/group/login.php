{extend name="base/base"/}
{block name="main"}
<form class="form-horizontal" action=""  method="post" >
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="username">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-3">
            <input type="password" class="form-control" id="inputPassword3" placeholder="" name="password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">验证码</label>
        <div class="col-sm-3">
        <input type="text"  class="form-control"name="captcha" placeholder="验证码"><img src="{:captcha_src()}" alt="captcha" onclick="this.src='{:captcha_src()}?'+Math.random()"/>
        </div>
        </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">登录</button>
        </div>
    </div>
</form>
{/block}
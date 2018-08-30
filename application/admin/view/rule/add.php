{extend name="base/base"/}
{block name="main"}
<form action="" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">权限名</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="title">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">方法名</label>
        <div class="col-sm-3">
            <select class="form-control">
                <?php foreach ($ruls as $rul):?>
                <option  name="name" value="{$rul}">{$rul}</option>
                <?php endforeach;?>
            </select>
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
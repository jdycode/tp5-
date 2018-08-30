{extend name="base/base"/}
{block name="main"}
<div class="col-md-8">
<a href="{:url('add')}" class="btn btn-info">添加</a>
</div>

    <form class="navbar-form navbar-left" method="get">
        <div class="form-group">
            <input type="text" class="form-control" name="keword" placeholder="搜索">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
    </form>

<table class="table table-bordered table-hover">
    <tr>
        <th>id</th>
        <th>姓名</th>
        <th>性别</th>
        <th>头像</th>
        <th>时间</th>
        <th>操作</th>
    </tr>
    <?php foreach ($admins as $admin):?>
        <tr>
            <td>{$admin->id}</td>
            <td>{$admin->username}</td>
            <td>{$admin->sex_text}</td>
            <td>
                <img src="{$admin->logo}"alt="" width=50>
            </td>
            <td>{$admin->create_time}</td>
            <td>
                <a href="{:url('edit',['id'=>$admin->id])}" class="btn btn-success">编辑</a>
                <a href="{:url('del',['id'=>$admin->id])}" class="btn btn-danger" onclick="return confirm('确定要删除这条数据吗？')">删除</a>
            </td>
        </tr>
    <?php endforeach;?>
</table>
{$admins->render()}
{/block}


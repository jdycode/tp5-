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
        <th>权限路由</th>
        <th>权限名</th>
        <th>操作</th>
    </tr>
    <?php foreach ($rules as $rule):?>
        <tr>
            <td>{$rule->id}</td>
            <td>{$rule->name}</td>
            <td>{$rule->title}</td>
            <td>
                <a href="{:url('edit',['id'=>$rule->id])}" class="btn btn-success">编辑</a>
                <a href="{:url('del',['id'=>$rule->id])}" class="btn btn-danger" onclick="return confirm('确定要删除这条数据吗？')">删除</a>
            </td>
        </tr>
    <?php endforeach;?>
</table>
{/block}


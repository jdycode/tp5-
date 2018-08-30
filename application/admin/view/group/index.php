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
        <th>title</th>
        <th>操作</th>
    </tr>
    <?php foreach ($groups as $group):?>
        <tr>
            <td>{$group->id}</td>
            <td>{$group->title}</td>
            <td>
                <a href="{:url('edit',['id'=>$group->id])}" class="btn btn-success">编辑</a>
                <a href="{:url('del',['id'=>$group->id])}" class="btn btn-danger" onclick="return confirm('确定要删除这条数据吗？')">删除</a>
            </td>
        </tr>
    <?php endforeach;?>
</table>
{/block}


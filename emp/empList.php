<?php
/**
 * 进行用户验证
 */
require_once 'common.php';
checkUser(); 
?>
<html>
<head>
<script type="text/javascript">
function confirmDel(val)
{
    return window.confirm("确认删除"+val+"号雇员吗？");
}
</script>
</head>
<body>
<?php
    require_once 'EmpService.class.php';
    //本子功能主要知识点：分页管理功能，可以使用死去活来法逐步实现。
    echo "<center>";
    echo "<h1>用户管理</h1><br/>";
    $empservice=new EmpService();
    //获取emp表的记录数。
    $rowCount=$empservice->getRowCount();
    //设置pageNow的默认值。
    $pageNow=1;
    //获取pageNow的值
    if($_GET['pageNow'])
    {
        $pageNow=$_GET['pageNow'];
    }
    //设置$pageSize的默认值,可以由用户自定义
    $pageSize=7;
    //计算pageCount的值
    $pageCount=ceil($rowCount/$pageSize);
    if($pageNow<=0)
    {
        echo "访问出现上溢，自动跳转到第一页！<br/><br/>";
        $pageNow=1;
    }
    else if($pageNow>=($pageCount+1)) 
    {
        echo "访问出现下溢，自动跳转到最后一页！<br/><br/>";
        $pageNow=$pageCount;
    }
    $arr_res=$empservice->getResource($pageNow, $pageSize);
    $rows=mysql_affected_rows($empservice->getSqlHelper()->conn);
    $cols=mysql_num_fields($empservice->getResource_unArray());
    

    echo "<table bgcolor=black rows=".($rows+1)." cols=".($cols+2)." cellspacing=1px cellpadding=10px>";
    echo "<tr bgcolor=white>";
    for($i=0;$i<$cols;$i++)
    {
        echo "<th>".mysql_field_name($empservice->getResource_unArray(),$i)."</th>";
    }
    echo "<th>修改用户信息</th>";
    echo "<th>删除用户</th>";
    echo "</tr>";
    for($i=0;$i<count($arr_res);$i++)
    {
        $row=$arr_res[$i];
        echo "<tr bgcolor=white>";
        foreach($row as $key=>$value)
        {
            echo "<td align=center>".$value."</td>";
        }
        echo "<td align=center><a href='updateEmpUI.php?id={$row['id']}'>修改</a></td>";
        echo "<td align=center><a onclick=
        'return confirmDel({$row['id']})' 
        href='empProcess.php?type=del&id={$row['id']}
        &pageNow={$pageNow}'>删除</a></td>";
        echo "</tr>";
    }
    echo "</table><br/>";
    $empservice->closeAll();
    echo "<a href='empList.php?pageNow=1'>首页</a>&nbsp;&nbsp;&nbsp;";
    if($pageNow>=2)
    {
        echo "<a href='empList.php?pageNow=".($pageNow-1)."'>上一页</a>&nbsp;&nbsp;&nbsp;";
    }
    else 
    {
        echo "上一页&nbsp;&nbsp;&nbsp;";
    }
    //一下将会实现6页6页的整体翻页。
     $index=floor(($pageNow-1)/6)*6+1;
     $start=$index;
     echo "<a href='empList.php?pageNow=".($start-1)."'><<</a>&nbsp;&nbsp;&nbsp;";
    for(;$start<=5+$index;$start++)
    {
        if($start<=$pageCount)
        {
            echo "<a href='empList.php?pageNow=".$start."'>[".$start."]";
            echo "</a>"."&nbsp;&nbsp;&nbsp;";
        }
        else 
        {
            $start--;
            break;
        }
    }
    /**
     * 如果有6条记录，现在是第2条，那么2/6=0.33,floor(0.33)==0,
     * ...什么时候打印？求打印条件。
     */
    echo "...&nbsp;&nbsp;&nbsp;";
    echo "[当前页{$pageNow}/共{$pageCount}页]&nbsp;&nbsp;&nbsp;";
    echo "<a href='empList.php?pageNow=".$start."'>>></a>&nbsp;&nbsp;&nbsp;";
    if($pageNow<=($pageCount-1))
    {
        echo "<a href='empList.php?pageNow=".($pageNow+1)."'>后一页</a>&nbsp;&nbsp;&nbsp;";
    }
    else 
    {
        echo "后一页&nbsp;&nbsp;&nbsp;";
    }
    echo "<a href='empList.php?pageNow=".$pageCount."'>尾页</a>";
    echo "<br/>";
?>
<br/>
<form action="empList.php" method="get">
请输入跳转页：<input type="text" name="pageNow"/>
<input type="submit" value="GO"/>
</form>

</body>
</html>
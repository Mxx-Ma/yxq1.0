<table>
	<tr>
		<td>优惠券图片:</td>
	</tr>
	<tr>
		<td><img  id="yhq_img" src="resource/img/yhq/{$yhq_img}"></td>
	</tr>
	<tr>
		<td>优惠券名称:{$yhq_name}</td>
		<td>优惠券id:{$yhq_id}</td>
		<td>发布商家id:{$store_id}</td>
	</tr>
	<tr>
		<td>查看数量:{$read}</td>
		<td>领取数量:{$collected}</td>
		<td>截止日期:{$deadline}</td>
	</tr>
	<tr>
		<td>发布状态:{$yhq_state}</td>
		<td>操作:<a href="index.php?controller=c_yhq&action=change_state&url=v_admin_yhq_inf.php&yhq_id={$yhq_id}&yhq_state=3">删除</a>&thinsp;
		<a href="index.php?controller=c_yhq&action=change_state&url=v_admin_yhq_inf.php&yhq_id={$yhq_id}&yhq_state=0">下线</a></td>
	</tr>
</table>
<input type="button" value="返回上一页"  onclick="javascript:window.history.back(-1);">
<a href="index.php?static=admin_center"><img src="resource/img/icon/return_admin.png"></a>
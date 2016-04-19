<div id='admin_yhq_inf'>
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
		<td>查看数量:{$reading}</td>
		<td>领取数量:{$collected}</td>
		<td>截止日期:{$deadline}</td>
	</tr>
	<tr>
		{if $yhq_state == 0}
			<td>目前状态：下线&nbsp;</td>
			<td>操作:<a href="index.php?controller=c_yhq&action=change_state&url=v_admin_yhq_inf.php&yhq_id={$yhq_id}&yhq_state=3">删除</a>&thinsp;
			<a href="index.php?controller=c_yhq&action=change_state&url=v_admin_yhq_inf.php&yhq_id={$yhq_id}&yhq_state=1">发布</a></td>
		{elseif $yhq_state == 1}
			<td>目前状态：发布&nbsp;</td>
			<td>操作:<a href="index.php?controller=c_yhq&action=change_state&url=v_admin_yhq_inf.php&yhq_id={$yhq_id}&yhq_state=3">删除</a>&thinsp;
		<a href="index.php?controller=c_yhq&action=change_state&url=v_admin_yhq_inf.php&yhq_id={$yhq_id}&yhq_state=0">下线</a></td>
		{elseif $yhq_state == 2}
			<td>目前状态：过期&nbsp;</td>
			<td>操作:<a href="index.php?controller=c_yhq&action=change_state&url=v_admin_yhq_inf.php&yhq_id={$yhq_id}&yhq_state=3">删除</a>
		{elseif $yhq_state == 3}
			<td>目前状态：删除&nbsp;</td>
			<td>操作:<a href="index.php?controller=c_yhq&action=change_state&url=v_admin_yhq_inf.php&yhq_id={$yhq_id}&yhq_state=1">恢复</a>
		{/if}
	</tr>
</table>
<!--<input type="button" value="返回上一页"  onclick="javascript:window.history.back(-1);">-->
<a href="index.php?static=v_admin_center.php"><img src="resource/img/icon/return_admin.png"></a>
</div>
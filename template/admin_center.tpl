<table>
	<tr>
		<td>ID</td><td>优惠券名称</td><td>截止时间</td><td>商家ID</td><td>查看数量</td><td>领取数量</td><td>发布状态</td><td>操作</td>
	</tr>
</table>
<table id='admin_table'>
	{section name=yhq loop=$yhq_data}
	<tr>		
		<td>{$yhq_data[yhq].yhq_id}&nbsp;</td>
		<td><a href="index.php?controller=c_yhq&action=view_yhq&yhq_id={$yhq_data[yhq].yhq_id}&url=v_admin_yhq_inf.php">{$yhq_data[yhq].name}&nbsp;&nbsp;</a></td>
		<td>{$yhq_data[yhq].deadline}&nbsp;</td>
		<td>{$yhq_data[yhq].store_id}&nbsp;</td>
		<td>{$yhq_data[yhq].read}&nbsp;</td>
		<td>{$yhq_data[yhq].collected}&nbsp;</td>
		{if $yhq_data[yhq].yhq_state == 0}
			<td>下线&nbsp;</td>
			<td><a href="index.php?controller=c_yhq&action=change_state&url=v_admin_center.php&yhq_id={$yhq_data[yhq].yhq_id}&yhq_state=3">删除</a> 
			<a href="index.php?controller=c_yhq&action=change_state&url=v_admin_center.php&yhq_id={$yhq_data[yhq].yhq_id}&yhq_state=1">发布</a>
			</td>
		{elseif $yhq_data[yhq].yhq_state == 1}
			<td>发布&nbsp;</td>
			<td><a href="index.php?controller=c_yhq&action=change_state&url=v_admin_center.php&yhq_id={$yhq_data[yhq].yhq_id}&yhq_state=3">删除</a> 
			<a href="index.php?controller=c_yhq&action=change_state&url=v_admin_center.php&yhq_id={$yhq_data[yhq].yhq_id}&yhq_state=0">下线</a>
			</td>
		{elseif $yhq_data[yhq].yhq_state == 2}
			<td>过期&nbsp;</td>
			<td><a href="index.php?controller=c_yhq&action=change_state&url=v_admin_center.php&yhq_id={$yhq_data[yhq].yhq_id}&yhq_state=3">删除</a> 
			</td>
		{elseif $yhq_data[yhq].yhq_state == 3}
			<td>删除&nbsp;</td>
			<td><a href="index.php?controller=c_yhq&action=change_state&url=v_admin_center.php&yhq_id={$yhq_data[yhq].yhq_id}&yhq_state=1">恢复</a> 
			</td>
		{/if}
	</tr>
	{/section}
</table>
<sapn id='frist'></sapn><span id='pre'></span>
<span id='pagenum'></span>/<span id='totalpage'></span>
<span id='next'></span><span id='last'></span>
<script src="resource\script\admin_center.js"></script>
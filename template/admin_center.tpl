<div id = "admin_div_list">
<!--<select id='select_reorder' onchange = "window.location =this.value"> 	
	<option value = "index.php?static=v_admin_center.php&reorder=id">id</option>
	<option value = "index.php?static=v_admin_center.php&reorder=deadline">截止日期</option>
	<option value = "index.php?static=v_admin_center.php&reorder=store_id">商家id</option>
	<option value="index.php?static=v_admin_center.php&reorder=reading">查看数量</option>
	<option value="index.php?static=v_admin_center.php&reorder=collected">领取数量</option>
</select>-->
<table>
	<tr>
		{if $id_flag == 0}
		<td class='col_id'><a class='select_reorder' href='index.php?static=v_admin_center.php&reorder=yhq_id&id_flag=1'>ID ↑</a></td>
		{elseif $id_flag == 1}
		<td class='col_id'><a class='select_reorder' href='index.php?static=v_admin_center.php&reorder=yhq_id&id_flag=0'>ID ↓</a>
		{/if}
		<td class='col_name'>优惠券名称</td>
		{if $dl_flag == 0}
		<td class='col_dl'><a class='select_reorder' href='index.php?static=v_admin_center.php&reorder=deadline&dl_flag=1'>截止时间 ↑</a></td>
		{elseif $dl_flag == 1}
		<td class='col_dl'><a class='select_reorder' href='index.php?static=v_admin_center.php&reorder=deadline&dl_flag=0'>截止时间 ↓</a></td>
		{/if}
		{if $st_flag == 0}
		<td class='col_s_id'><a class='select_reorder' href='index.php?static=v_admin_center.php&reorder=store_id&st_flag=1'>商家ID ↑</a></td>
		{elseif $st_flag == 1}
		<td class='col_s_id'><a class='select_reorder' href='index.php?static=v_admin_center.php&reorder=store_id&st_flag=0'>商家ID ↓</a></td>
		{/if}
		{if $rd_flag == 0}
		<td class='col_reading'><a class='select_reorder' href='index.php?static=v_admin_center.php&reorder=reading&rd_flag=1'>查看数量 ↑</a></td>
		{elseif $rd_flag == 1}
		<td class='col_reading'><a class='select_reorder' href='index.php?static=v_admin_center.php&reorder=reading&rd_flag=0'>查看数量 ↓</a></td>
		{/if}
		{if $co_flag == 0}
		<td class='col_col'><a class='select_reorder' href='index.php?static=v_admin_center.php&reorder=collected&co_flag=1'>领取数量 ↑</a></td>
		{elseif $co_flag == 1}
		<td class='col_col'><a class='select_reorder' href='index.php?static=v_admin_center.php&reorder=collected&co_flag=0'>领取数量 ↓</a></td>
		{/if}
		<td class='col_sta'>发布状态</td><td class ='col_do'>操作</td>
	</tr>
</table>
<table id='admin_table'>
	{section name=yhq loop=$yhq_data}
	<tr>		
		<td class='col_id'>{$yhq_data[yhq].yhq_id}</td>
		<td class='col_name'><a href="index.php?controller=c_yhq&action=view_yhq&yhq_id={$yhq_data[yhq].yhq_id}&url=v_admin_yhq_inf.php">{$yhq_data[yhq].name}</a></td>
		<td class='col_dl'>{$yhq_data[yhq].deadline}</td>
		<td class='col_s_id'>{$yhq_data[yhq].store_id}</td>
		<td class='col_reading'>{$yhq_data[yhq].reading}</td>
		<td class='col_col'>{$yhq_data[yhq].collected}</td>
		{if $yhq_data[yhq].yhq_state == 0}
			<td class='col_sta'>下线</td>
			<td class ='col_do'><a href="index.php?controller=c_yhq&action=change_state&url=v_admin_center.php&yhq_id={$yhq_data[yhq].yhq_id}&yhq_state=3">删除</a> 
			<a href="index.php?controller=c_yhq&action=change_state&url=v_admin_center.php&yhq_id={$yhq_data[yhq].yhq_id}&yhq_state=1">发布</a>
			</td>
		{elseif $yhq_data[yhq].yhq_state == 1}
			<td class='col_sta'>发布</td>
			<td class ='col_do'><a href="index.php?controller=c_yhq&action=change_state&url=v_admin_center.php&yhq_id={$yhq_data[yhq].yhq_id}&yhq_state=3">删除</a> 
			<a href="index.php?controller=c_yhq&action=change_state&url=v_admin_center.php&yhq_id={$yhq_data[yhq].yhq_id}&yhq_state=0">下线</a>
			</td>
		{elseif $yhq_data[yhq].yhq_state == 2}
			<td class='col_sta'>过期;</td>
			<td class ='col_do'><a href="index.php?controller=c_yhq&action=change_state&url=v_admin_center.php&yhq_id={$yhq_data[yhq].yhq_id}&yhq_state=3">删除</a> 
			</td>
		{elseif $yhq_data[yhq].yhq_state == 3}
			<td class='col_sta'>删除</td>
			<td class ='col_do'><a href="index.php?controller=c_yhq&action=change_state&url=v_admin_center.php&yhq_id={$yhq_data[yhq].yhq_id}&yhq_state=1">恢复</a> 
			</td>
		{/if}
	</tr>
	{/section}
</table>
<div id='admin_page'>
<p>
<span id='spanfrist'></span>&ensp;<span id='spanpre'></span>&ensp;
<span id='pagenum'></span>/<span id='totalpage'></span>&ensp;
<span id='spannext'></span>&ensp;<span id='spanlast'></span>
<script src="resource\script\admin_center.js"></script></p>
</div>
</div>
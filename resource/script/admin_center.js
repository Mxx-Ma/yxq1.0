//获取控件
var table = document.getElementById('admin_table');
var totalpage = document.getElementById('totalpage');
var pagenum = document.getElementById('pagenum');

var pre = document.getElementById('pre');
var next = document.getElementById('next');
var first = document.getElementById('first');
var last = document.getElementById('last');

//定义页面配置信息
var totalrow = parseInt(table.rows.length);
var pagesize = 1;
var page = 1; 
var i,start,limit;

//总页数
function pagecount(){
	var j = 0;
	if(totalrow%pagesize != 0)
		j = 1;
	j += (totalrow/pagesize)
	return j;
}

//各页面链接显示规则
function firstlink(){
	if(page != 1)
		first.innerHTML = "<a href='javascript:first();'>首页</a>";
}

function lastlink(){
	if(page != pagecount())
		last.innerHTML = "<a href='javascript:last();'>尾页</a>";
}

function prelink(){
	if(page!=1)
		prelink.innerHTML = "<a href='javascript:pre();'>上一页</a>";
}

function nextlink(){
	if(page!=pagecount())
		next.innerHTML = "<a href='javascript:next();'>下一页</a>";
}

//隐藏页面
function hideall(){
	for (i=0;i<totalrow;i++){
		table.rows[i].style.display = 'none';
	}
}

//代码复用
function then(){
	pagenum.innerHTML = page;
	firstlink();
	prelink();
	nextlink();
	lastlink();
}

//首页
function first(){
	hideall();
	limit = pagesize;
	if(limit <= totalrow)
		for(i=0;i<limit;i++){
			table.rows[i].style.display = '';
		}
	else
		for(i=0;i<totalrow;i++){
			table.rows[i].style.display = '';
		}
	page = 1;
	then();
}

//尾页
function last(){
	hideall();
	page = pagecount();
	start = (page-1)*pagesize;
	for(i=start;i<limit;i++){
		table.rows[i].style.display = '';
	}
	then();
}

//上一页
function pre(){
	hideall();
	start = (page-2)*pagesize;
	if(limit <= totalrow)
		for(i=start;i<limit;i++){
			table.rows[i].style.display = '';
		}
	else
		for(i=start;i<totalrow;i++){
			table.rows[i].style.display = '';
		}
	then();
}

//下一页
function next(){
	hideall();
	start=page*pagesize;
	if(limit <= totalrow)
		for(i=start;i<limit;i++){
			table.rows[i].style.display = '';
		}
	else
		for(i=start;i<totalrow;i++){
			table.rows[i].style.display = '';
		}
	then();
}

//初始化
function atfirst(){
	 for (i = pagesize; i<totalrow; i++ ){    
        table.rows[i].style.display = 'none';    
    }    
        
    totalpage.innerHTML = pagecount();    
    pagenum.innerHTML = '1';    
        
   then(); 
} 

atfirst();
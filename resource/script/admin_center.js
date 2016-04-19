//获取控件
var table = document.getElementById('admin_table');
var totalpage = document.getElementById('totalpage');
var pagenum = document.getElementById('pagenum');

var spanpre = document.getElementById('spanpre');
var spannext = document.getElementById('spannext');
var spanfrist = document.getElementById('spanfrist');
var spanlast = document.getElementById('spanlast');

//定义页面配置信息
var totalrow = parseInt(table.rows.length);
var pagesize = 2;
var page = 1; 
var i,start,limit;

//首页
function frist(){
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
	limit=start+pagesize;
	for(i=start;i<limit;i++){
		table.rows[i].style.display = '';
	}
	then();
}

//上一页
function pre(){
	hideall();
	start = (page-2)*pagesize;
	limit=start+pagesize;
	if(limit <= totalrow)
		for(i=start;i<limit;i++){
			table.rows[i].style.display = '';
		}
	else
		for(i=start;i<totalrow;i++){
			table.rows[i].style.display = '';
		}
	page--;
	then();
}

//下一页
function next(){
	hideall();
	start=page*pagesize;
	limit=start+pagesize;
	if(limit <= totalrow)
		for(i=start;i<limit;i++){
			table.rows[i].style.display = '';
		}
	else
		for(i=start;i<totalrow;i++){
			table.rows[i].style.display = '';
		}
	page++;
	then();
}

//隐藏页面
function hideall(){
	for (i=0;i<totalrow;i++){
		table.rows[i].style.display = 'none';
	}
}

//总页数
function pagecount(){
	var j = 0;
	if(totalrow%pagesize != 0)
		j = 1;
	j += (totalrow/pagesize)
	return j;
}

//代码复用
function then(){
	pagenum.innerHTML = page;
	fristlink();
	prelink();
	nextlink();
	lastlink();
}

//各页面链接显示规则
function fristlink(){
	if(page != 1)
		spanfrist.innerHTML = "<a href='javascript:frist();'>首页</a>";
	else
		spanfrist.innerHTML ="";
}

function lastlink(){
	if(page != pagecount())
		spanlast.innerHTML = "<a href='javascript:last();'>尾页</a>";
	else
		spanlast.innerHTML ="";
}

function prelink(){
	if(page!=1)
		spanpre.innerHTML = "<a href='javascript:pre();'>上一页</a>";
	else
		spanpre.innerHTML ="";
}

function nextlink(){
	if(page!=pagecount())
		spannext.innerHTML = "<a href='javascript:next();'>下一页</a>";
	else
		spannext.innerHTML ="";
}

//初始化
function atfrist(){
	 for (i = pagesize; i<totalrow; i++ ){    
        table.rows[i].style.display = 'none';    
    }    
        
    totalpage.innerHTML = pagecount();    
    pagenum.innerHTML = '1';    
        
   then(); 
} 

atfrist();
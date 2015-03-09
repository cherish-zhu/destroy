<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的控制台</title>
<link type="text/css" rel="stylesheet" href="<?php echo css2("index")?>" />
<link type="text/css" rel="stylesheet" href="/Static/Semantic-UI/css/semantic.min.css" />

<?php require_once('./Realize/Admin/View/Public/top.php');?>


<div class="main">

<?php require_once('./Realize/Admin/View/left/leftSystem.php');?>

<div class="right">
<div id="tips">
	<i class="circular inverted teal large direction basic icon"></i>    <b>Destroy</b> 欢迎您，<?php echo $_SESSION['loginUserName']?>! 			
</div>

<ul class="index-info">
    <li><p style="width:230px; border-right:1px #CCC solid; height:42px">操作系统</p><p style="width:390px"><?php echo $info['操作系统']?></p></li>
    <li><p style="width:230px; border-right:1px #CCC solid; height:42px">运行环境</p><p style="width:390px"><?php echo $info['运行环境']?></p></li>
    <li><p style="width:230px; border-right:1px #CCC solid; height:42px">PHP引擎</p><p style="width:390px"><?php echo $info['PHP引擎']?></p></li>
    <li><p style="width:230px; border-right:1px #CCC solid; height:42px">当前版本</p><p style="width:390px"><?php echo $info['系统版本']?></p></li>
    <li><p style="width:230px; border-right:1px #CCC solid; height:42px">上传附件限制</p><p style="width:390px"><?php echo $info['上传附件限制']?></p></li>
    <li><p style="width:230px; border-right:1px #CCC solid; height:42px">执行时间限制</p><p style="width:390px"><?php echo $info['执行时间限制']?></p></li>
    <li><p style="width:230px; border-right:1px #CCC solid; height:42px">服务器时间/北京时间</p><p style="width:390px"><?php echo $info['服务器时间']?>/<?php echo $info['北京时间']?></p></li>
    <li><p style="width:230px; border-right:1px #CCC solid; height:42px">服务器域名/当前IP</p><p style="width:390px"><?php echo $info['服务器域名/IP']?></p></li>
    <li><p style="width:230px; border-right:1px #CCC solid; height:42px">剩余空间</p><p style="width:390px"><?php echo $info['剩余空间']?></p></li>
    <li><p style="width:230px; border-right:1px #CCC solid; height:42px">register_globals</p><p style="width:390px"><?php echo $info['register_globals']?></p></li>
</ul>

<ul class="index-app">
     <li><p>内容</p><p style="color:#096">147</p></li>
     <li><p>分类</p><p style="color:#096">512</p></li>
     <li><p>链接</p><p style="color:#096">102</p></li>
     <li><p>图片</p><p style="color:#096">918</p></li>
     <li><p>评论</p><p style="color:#096">147</p></li>
     <li><p>相册</p><p style="color:#096">23</p></li>
</ul>


    <div id="app">
          <div id="title"></div>
          <ul class="app-box">            
              <li style="line-height:38px; line-height:40px; margin-bottom:19px; font-size:20px"><b>研发团队</b></li>
              <li>总策划：<font style="color:#666">Cherish.Zhu</font></li>
              <li>开发：<font style="color:#666">Cherish.Zhu</font></li>
              <li>设计：</li>
              <li>社区支持：<font style="color:#666">URL</font></li>
              <li>QQ群：</li>
              <p style="width:100%; height:1px; clear:both"></p>
          </ul>
    </div>
</div>

</div>
<div id="userMain"></div>
</body>
<script type="text/javascript">
$("#select").live("change",function(){
	cid = $(this).val();
	$.get(baseURL+"/album/lib?cid="+cid,function(r){
		
		var str = '<span style="float:left; line-height:50px; margin-right:30px"><<</span>';
		$.each(r,function(i,e){
			if(i==0){
				$(".aid").attr("id",e.cid);//选择分类时设置第个相册为默认操作
			}
			str+='<p><a href="javascript:album('+e.cid+')">'+e.class_name+'</a></p>';
		});
		str+='<span style="line-height:50px;">>></span>';
		alert(str)
		$(".img-right").html(str);
	},'json');
});
$(".check-img").live("click",function(){
	$(".img").each(function(){
		if($(this).attr("class")=="img img-border"){
			var imgSRC = $(this).children("img").attr("src");
			$("#change-ico").html('<img src="'+imgSRC+'" />');
			$("#ico").val(imgSRC);
		}
	});
	art.dialog({id: 'ND1539'}).close();
});

</script>
<script src="/Static/Semantic-UI/javascript/semantic.min.js"></script>
<?php require_once('./Realize/Admin/View/Public/footer.php');?>
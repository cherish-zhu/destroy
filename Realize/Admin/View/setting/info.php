<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的控制台</title>
<link type="text/css" rel="stylesheet" href="/Static/admin/css/system.css" />
<?php require_once('./Realize/Admin/View/public/top.php');?>
<div class="mian">

<?php require_once('./Realize/Admin/View/left/leftSystem.php');?>
<div class="right"  style="background-color:#FFF">
      
      <ul class="tab-menu">
          <li <?php if($bj['tb']=='info'){echo 'id="this"';}?>><a href="/admin/setting/info">常规设置</a></li>
          <li <?php if($bj['tb']=='set'){echo 'id="this"';}?>><a href="/admin/setting/set">系统设置</a></li>
          <li <?php if($bj['tb']=='other'){echo 'id="this"';}?>><a href="/admin/setting/other">其他设置</a></li>
     </ul>
     
     <div class="appmain">
     <form id="set" name="form1" method="post" action="">
     <div class="from">
          <div class="title">网站名称</div>
          <div class="info"> ( 网站标题前台显示标题 ) </div>
          <div class="input"><input name="name" type="text" id="name" value="<?php echo $p['host_name']?>" size="113" /></div>
     </div>
     
     <div class="from">
          <div class="title">主标题  /  副标题</div>
          <div class="info"> ( 出现在浏览器标题栏上 作为备用标题) </div>
          <div class="input"><input name="title" type="text" id="title" value="<?php echo $p['host_title']?>" size="54" />  <input name="title2" type="text" id="title2" value="<?php echo $p['host_title2']?>" size="54" /></div>
     </div>
     
     <div class="from">
          <div class="title">主域名 / 其他域名</div>
          <div class="info"> ( 网站标题前台显示标题 ) </div>
          <div class="input"><input name="url" type="text" id="url" value="<?php echo $p['host_url']?>" size="54" />  <input name="url2" type="text" id="url2" value="<?php echo $p['host_url2']?>" size="53" /></div>
     </div>
     
     <div class="from">
          <div class="title">QQ  / Email /  联系电话</div>
          <div class="info"> ( 网站标题前台显示标题 ) </div>
          <div class="input"><input name="qq" type="text" id="qq" value="<?php echo $p['host_qq']?>" size="32" />  <input name="email" type="text" id="email" value="<?php echo $p['host_email']?>" size="36" />  <input name="tel" type="text" id="tel" value="<?php echo $p['host_tel']?>" size="32" /></div>
     </div>
         
     <div class="from">
          <div class="title">联系地址</div>
          <div class="info"> ( 网站标题前台显示标题 ) </div>
          <div class="input"><input name="address" type="text" id="address" value="<?php echo $p['host_address']?>" size="113" /></div>
     </div>
     
     <div class="from">
          <div class="title">备案号  /  版权声明</div>
          <div class="info"> ( 网站标题前台显示标题 ) </div>
          <div class="input"><input name="beian" type="text" id="beian" value="<?php echo $p['host_beian']?>" size="54" />   <input name="powered" type="text" id="powered" value="<?php echo $p['host_powered']?>" size="55" /></div>
     </div>
     
     <div class="from">
          <div class="title">关键词 / 描述说明</div>
          <div class="info"> ( 网站标题前台显示标题 ) </div>
          <div class="input"><textarea name="keyword" id="keyword" cols="56" rows="4"><?php echo $p['host_keyword']?></textarea>  <textarea name="description" id="description" cols="56" rows="4"><?php echo $p['host_description']?></textarea></div>
     </div> 
     
     <input type="submit" name="button" id="butt" value="保存并更新" />
     </form>
     </div>
</div>

</div>
</div>
<script type="text/javascript">
$("#set").submit(function(){
	if($.trim($("#name").val())==''){
		art.dialog({
        time: 3,
		title:'提示',
        content: '名称不能为空'
     });
		return false;
	}
	var email = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
	if(!email.test($("#email").val())){
		art.dialog({
        time: 3,
		title:'提示',
        content: '邮箱格式不正确！'
     });
		return false;
	}
	var url = /^(https?:\/\/)?([\da-z\.-]+)$/;
	if(!url.test($("#url").val())){
		art.dialog({
        time: 3,
		title:'提示',
        content: '网址格式不正确！'
     });
		return false;
	}
	if(!url.test($("#url2").val())){
		art.dialog({
        time: 3,
		title:'提示',
        content: '网址格式不正确！'
     });
		return false;
	}
});
</script>
<?php require_once('./Realize/Admin/View/Public/footer.php');?>
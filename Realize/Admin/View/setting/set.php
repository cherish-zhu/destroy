<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的控制台</title>
<link type="text/css" rel="stylesheet" href="<?php echo css2('main')?>" />
<link type="text/css" rel="stylesheet" href="/Static/admin/css/system.css" />
<?php require_once('./Realize/Admin/View/public/top.php');?>
<div class="mian">

<?php require_once('./Realize/Admin/View/left/leftSystem.php');?>
<div class="right" style="background-color:#FFF">

     <ul class="tab-menu">
         <li <?php if($bj['tb']=='info'){echo 'id="this"';}?>><a href="/admin/setting/info">常规设置</a></li>
          <li <?php if($bj['tb']=='set'){echo 'id="this"';}?>><a href="/admin/setting/set">系统设置</a></li>
          <li <?php if($bj['tb']=='other'){echo 'id="this"';}?>><a href="/admin/setting/other">其他设置</a></li>
     </ul>
     
     <div class="appmain">
       <form id="form1" name="form1" method="post" action="">       
         <div class="from">
          <div class="title">网站根目录</div>
          <div class="info"> ( 所在的目录 ) </div>
          <div class="input"><input name="dir" type="text" id="textfield" value="<?php echo $host_dir?>" size="50" /></div>
     </div>
       
       <input type="submit" name="button" id="butt" value="保存并更新" />
       
       </form>
     </div>
</div>

</div>
</div>
<?php require_once('./Realize/Admin/View/Public/footer.php');?>

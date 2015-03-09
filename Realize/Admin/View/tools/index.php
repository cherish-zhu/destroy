<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的控制台</title>
<link type="text/css" rel="stylesheet" href="<?php echo css2("index")?>" />
<link rel="stylesheet" type="text/css" href="/Static/admin/css/appshop.css">
<link type="text/css" rel="stylesheet" href="/Static/Semantic-UI/css/semantic.min.css" />
<?php require_once('./Realize/Admin/View/public/top.php');?>

 <div class="main">

<?php require_once('./Realize/Admin/View/left/leftDevelop.php');?>

<div class="right"  style="background-color:#FFF">
     
     <div class="app-box">
         <dl>
             <dt><i class="square inverted teal huge mail basic icon"></i><span class="app-title">Mail</span></dt>
             <dd>
             <div class="mini ui green button">安装</div>
             <p>安装人数：12033</p>
             </dd>
         </dl>
         <dl>
             <dt><i class="square inverted teal huge chat basic icon"></i><span class="app-title">微信公众平台</span></dt>
             <dd>
             <div class="mini ui green button">安装</div>
             <p>安装人数：1793</p>
             </dd>
         </dl>
         <dl>
             <dt><i class="square inverted teal huge cloud download icon"></i><span class="app-title">采集器</span></dt>
             <dd>
             <div class="mini ui green button">安装</div>
             <p>安装人数：1793</p>
             </dd>
         </dl>
    </div>

</div>
<?php require_once('./Realize/Admin/View/Public/footer.php');?>

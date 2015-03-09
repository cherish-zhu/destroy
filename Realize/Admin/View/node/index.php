<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的控制台</title>
<link type="text/css" rel="stylesheet" href="<?php echo css2("index")?>" />
<link type="text/css" rel="stylesheet" href="<?php echo css2("user")?>" />
<link type="text/css" rel="stylesheet" href="/Static/font-awesome/css/font-awesome.min.css" />
<?php require_once('./Realize/Admin/View/public/top.php');?>

 <div class="main">

<?php require_once('./Realize/Admin/View/left/leftUser.php');?>

<div class="right"  style="background-color:#FFF">
     <?php foreach($nodes as $key => $val){?>
     <ul class="node">
         <li class="node-mian"><?php echo $val['title']?> <div class="add-node" id="node-id-<?php echo $val['id']?>">新增</div></li>
         <?php foreach($val['son'] as $k => $v){?>
         <li><?php echo $v['title']?> <div class="add-node"  id="node-id-<?php echo $v['id']?>">新增</div></li>
         <?php }?>
     </ul>
     <?php }?>

</div>
<?php require_once('./Realize/Admin/View/Public/footer.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的控制台</title>
<link type="text/css" rel="stylesheet" href="<?php echo css2("index")?>" />

<?php require_once('./Realize/Admin/View/public/top.php');?>

 <div class="main">

<?php require_once('./Realize/Admin/View/left/leftView.php');?>

<div class="right"  style="background-color:#FFF">
     
     <div class="menu">
          <ul>
            <li><a href="<?php echo url2("/view/shopView")?>">模板超市</a></li>
            <li><a href="<?php echo url2("/view/editView")?>">模板编辑</a></li>
            <li><a href="<?php echo url2("/view/myView")?>">我的模板</a></li>
          </ul>
      </div>

</div>
<?php require_once('./Realize/Admin/View/Public/footer.php');?>

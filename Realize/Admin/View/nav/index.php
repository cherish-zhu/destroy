<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的控制台</title>
<link type="text/css" rel="stylesheet" href="/Static/admin/css/type.css" />
<link type="text/css" rel="stylesheet" href="<?php echo css2("album")?>" />
<link type="text/css" href="/Static/iCheck/skins/all.css?v=1.0.2" rel="stylesheet">
<script src="/Static/icheck.js?v=1.0.2"></script>

<?php require_once('./Realize/Admin/View/public/top.php');?>


<div class="main">

<?php require_once('./Realize/Admin/View/left/leftSystem.php');?>

<div class="right"  style="background-color:#FFF">

<ul class="sortable">
<?php echo $type?>
</ul>

<div class="page">
	       <div class="pageLeft">
	         <table width="427" border="0" align="left">
	           <tr>
	             <td width="36"><div class="action checkAll">全选</div></td>
	             <td width="36"><div class="action" id="checkBack">反选</div></td>
	             <td width="230">
	                 <div style="float:left" class="action">删除</div> <div  style="float:left; width:100px" id="app-2" class="action">新增分类</div>    
                  </td>
	             <td width="107">&nbsp;</td>
               </tr>
             </table>
	       </div>
</div>


</div>
<script src="/Static/JQuery-UI/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<script src="/Static/admin/js/type.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-red',
    radioClass: 'iradio_square-red',
    increaseArea: '20%' // optional
  });
});
</script>
<script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_flat',
    radioClass: 'iradio_flat'
  });
});
</script>
<script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_flat-red',
    radioClass: 'iradio_flat-red'
  });
});
</script>

<?php require_once('./Realize/Admin/View/Public/footer.php');?>
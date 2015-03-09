<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的控制台</title>
<meta HTTP-EQUIV="pragma" CONTENT="no-cache">  
<meta HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">  
<meta HTTP-EQUIV="expires" CONTENT="0">  
<link rel="stylesheet" type="text/css" href="/Static/uploadify/uploadify.css">
<link rel="stylesheet" type="text/css" href="/Static/admin/css/album.css">
<link rel="stylesheet" type="text/css" href="/Static/admin/css/style.min.css">
<link rel="stylesheet" type="text/css" href="/Static/admin/css/font.min.css">
<?php require_once('./Realize/Admin/View/public/top.php');?>


<div class="main">

<?php require_once('./Realize/Admin/View/left/leftAppliance.php');?>

<div class="right"  style="background-color:#FFF; width:1054px">

      <div class="album">
          <ul class="ace-thumbnails" id="fileQueue" style="width:83%; float:left">
          <?php foreach($pic as $p => $s){?>
           <li class="pic_box">
				<a href="#" data-rel="colorbox">
												<img class="pic_list" src="<?php echo $s['path']?>" />
												<div class="text">
													<div class="inner"><?php echo $s['title']?></div>
												</div>
											</a>

											<div class="tools tools-bottom">
												<a href="#"><i class="fa fa-pencil"></i></a>
												<a href="#"><i class="fa fa-remove red"></i></a>
											</div>
				</li>
                <?php }?>
                </ul>
      
           <div class="album-type">

                 <div><input type="file" name="photo" id="uploadify" /></div>
                
                 <?php foreach($option as $key => $val){?>
                 <dl  <?php if($_GET['category'] == $val['id']) echo 'class="album-type-dt"';?>>
                     <dt><a href="?category=<?php echo $val['id']?>"><?php echo $val['name']?></a></dt>
                     <?php foreach($val['son'] as $k => $v){?>
                     <dd><a href="?category=<?php echo $val['id']?>&album=<?php echo $v['id']?>"><?php echo $v['name']?></a></dd>
                     <?php }?>
                 </dl>
                 <?php }?>
           </div> 
                     
      </div>
   
</div>
</div>
<div id='album_id' style="display:none"><?php echo (int)$_GET['album'];?></div>
<script src="/Static/uploadify/jquery.uploadify.min.js?ver=<?php echo rand(0,9999);?>" type="text/javascript"></script>
<script src="/Static/admin/js/album.js" type="text/javascript"></script>

<?php require_once('./Realize/Admin/View/Public/footer.php');?>
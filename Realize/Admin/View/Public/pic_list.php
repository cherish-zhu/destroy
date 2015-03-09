<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
.album-main{width:860px; height:600px; clear:both}
.action-line{width:860px; height:80px; clear:both}
.line-select select{margin-top:20px}
.line-select{width:160px; line-height:80px; float:left;}
.line-list{width:500px; line-height:80px; float:right;}
.img-box{width:860px; height:500px; border:#CCC 1px dashed; margin-bottom:20px}
</style>
</head>

<body>
<div class="album-main">
     <div class="action-line">
          <div class="line-select"><select name="select" id="select">
                         <?php  foreach($option as $k=>$v){?>
                        <option value="<?php echo $v['cid']?>"><?php echo $v['class_name']?></option>                       
						 <?php }?>						 
                     </select>
                     <input type="hidden" class="aid" id="<?php echo $str['aid']?>"/>
                     <input type="hidden" class="cid" id="<?php echo $str['cid']?>"/></div>
          <div class="line-list img-right"></div>
     </div>
     <div class="img-box" id="image"></div>
     <div id="tpl" style="display:none"><div class="img"><img src="{data.URL}{path}"><div class="img-set"><div class="pic-name">{alb_name}</div><div style="float:right;" id="imgset" class="{aid}"></div></div></div></div>
          <div id="ajaxPage"></div><input name="butt" style=" position:relative; float:right" class="check-img" id="butt" type="submit" value="添加" />
</div>
</body>
</html>

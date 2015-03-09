<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的控制台</title>
<style type="text/css">
.word-box{width:auto; height:auto; clear:both; margin-top:20px}
.word-line{width:auto; height:auto; border-bottom:#CCC 1px dashed; margin-bottom:12px; padding-bottom:16px}
.word-title{float:left; text-indent:2em;  font-weight:bold; line-height:36px}
.word-site{float: right; font-size:12px;line-height:36px}
.word-center{ clear:both; text-indent:2em; line-height:36px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;}
.word-map{clear:both;text-indent:2em; height:20px; line-height:20px; width:100%}
.word-map a{float:left; margin-right:10px; font-size:13px; line-height:32px}
</style>
<?php require_once('./Realize/Admin/View/public/top.php');?>


<div class="main">

<?php require_once('./Realize/Admin/View/left/leftAppliance.php');?>

<div class="right" style="background-color:#FFF; width:1054px">

     <div class="select">
          <div class="select-left">
            <form id="form2" name="form2" method="post" action="">
              <select name="select2" id="select2">
                <option value="0">请选择分类</option>
              </select>

              <input name="user" type="text" id="textfield" size="20" placeholder="请输入用户名" />

              <input type="text" name="textfield2" id="textfield2" placeholder="请输入关键词"  />
              <input type="submit" name="button" class="smile-butt" value="查找" />
            </form>
          </div>
          <div class="setect-right"><div class="setting"><i class="fa fa-cog"></i>  设置</div></div>
     </div>

          <div class="word-box">

               <?php foreach($center as $k => $v){?>
               <div class="word-line">
                    <div class="word-title"><?php echo $v['title']?></div>
                    <div class="word-site"><?php echo $v['user_id']?>  <?php echo date('Y-m-d H:m:s',$v['create_time'])?> 发表在 <?php echo $v['sort']?></div>
                    <div class="word-center"><?php echo msubstr(strip_tags($v['center']), $start=0, 100, "utf-8", true)?></div>
                    <div class="word-map"><a href="#">编辑</a><a href="#">删除</a><a href="#">移动</a><a href="#">预览</a><a href="#">评论</a><a href="#">审核</a></div>
               </div>
               <?php }?>
          </div>
          
           <div class="page">
	       <div class="pageLeft">
	         <table width="200" border="0" align="left" cellpadding="0" cellspacing="0">
	           <tr>
	             <td width="31"><font id="checkAll">全选</font></td>
	             <td width="30"><font id="checkBack">反选</font></td>
	             <td width="104">
	               <select name="select" size="1" id="select">
	                 <option value="1">删除</option>
	                 <option value="2">审核</option>
                 </select></td>
	             <td width="7">&nbsp;</td>
               </tr>
             </table>
	       </div>
         <div class="pageRight"><?php echo $page?></div>
       </div>
          
    </div>

</div>
</div>
<script type="text/javascript">
$(".word-map").hide();
$(".word-line").hover(function(){
	$(".word-map").hide();
	$(this).find(".word-map").show();
});
</script>
<?php require_once('./Realize/Admin/View/Public/footer.php');?>
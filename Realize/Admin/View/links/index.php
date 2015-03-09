<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的控制台</title>
<link type="text/css" rel="stylesheet" href="<?php echo css2("index")?>" />
<link type="text/css" rel="stylesheet" href="<?php echo css2("link")?>" />
<link type="text/css" rel="stylesheet" href="/Static/font-awesome/css/font-awesome.min.css" />
<?php require_once('./Realize/Admin/View/public/top.php');?>

 <div class="main">

<?php require_once('./Realize/Admin/View/left/leftAppliance.php');?>

<div class="right"  style="background-color:#FFF">
     
     <div class="select">
          <div class="select-left">
            <form id="form2" name="form2" method="post" action="">
              <select name="select2" id="select2">
                <option value="0">请选择分类</option>
              </select>
              <input name="link" type="text" id="textfield" size="20" placeholder="请输入关键字" />
              <input type="submit" name="button" class="smile-butt" value="查找" />
            </form>
          </div>
          <div class="setect-right"><div class="setting"><i class="fa fa-cog"></i>  添加</div></div>
     </div>
      
      <div class="face">
           <div class="link-list">
             <form id="form1" name="form1" method="post" action="">
             <ul>
              <li class="link-mian">
                   <div class="link-check">
                       <input type="checkbox" name="checkbox" id="checkbox" />
                   </div>
                   <div class="link-id">名称</div>
                   <div class="link-name">链接地址</div>
                   <div class="link-action">操作</div>
                   <div class="link-from">所属分类</div>                 
               </li>
                <?php foreach($link as $k => $u){?>
                <li>    
                   <div class="link-check">
                       <input type="checkbox" name="checkbox" id="checkbox" />
                   </div>
                   <div class="link-id"><?php echo $u['name']?></div>
                   <div class="link-name"><?php echo $u['links']?></div>
                   <div class="link-action"><i class="fa fa-eye" title="查看详情"></i><i class="fa fa-times" title="删除用户"></i></div>
                   <div class="link-from"><?php echo $u['sort']?></div>              
                </li>
				<?php }?>
             </ul>
             </form>
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
<?php require_once('./Realize/Admin/View/Public/footer.php');?>
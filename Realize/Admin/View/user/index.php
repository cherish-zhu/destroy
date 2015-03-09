<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的控制台</title>
<link type="text/css" rel="stylesheet" href="<?php echo css2("user")?>" />
<link type="text/css" rel="stylesheet" href="/Static/font-awesome/css/font-awesome.min.css" />

<?php require_once('./Realize/Admin/View/public/top.php');?>

 <div class="main">

<?php require_once('./Realize/Admin/View/left/leftUser.php');?>

<div class="right"  style="background-color:#FFF">
     
      <div class="select">
          <div class="select-left">
            <form id="form2" name="form2" method="post" action="">
              <select name="select2" id="select2">
                <option value="0">请选择用户组</option>
              </select>
              <input name="user" type="text" id="textfield" size="20" placeholder="请输入用户名" />
              <input type="submit" name="button" class="smile-butt" value="查找" />
            </form>
          </div>
          <div class="setect-right"><div class="setting"><i class="fa fa-cog"></i>  设置</div></div>
     </div>
      
      <div class="face">
           <div class="user-list">
             <form id="form1" name="form1" method="post" action="">
             <ul>
              <li class="user-mian">
                   <div class="user-check">
                       <input type="checkbox" name="checkbox" id="checkbox" />
                   </div>
                   <div class="user-id">用户ID</div>
                   <div class="user-name">用户名</div>
                   <div class="user-action">操作</div>
                   <div class="user-time">注册时间</div>
                   <div class="user-from">最近登录</div>                 
               </li>
                <?php foreach($users as $k => $u){?>
                <li>    
                   <div class="user-check">
                       <input type="checkbox" name="checkbox" id="checkbox" />
                   </div>
                   <div class="user-id"><?php echo $u['id']?></div>
                   <div class="user-name"><?php echo $u['account']?></div>
                   <div class="user-action"><i class="fa fa-eye" title="查看详情"></i><i class="fa fa-times" title="删除用户"></i></div>
                   <div class="user-time"><?php echo date("Y-m-d H:i:m",$u['create_time'])?></div>
                   <div class="user-from"><?php echo $u['last_login_ip']?></div>              
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
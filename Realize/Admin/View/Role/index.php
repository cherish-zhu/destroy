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
     
     <div class="user-list">
             <form id="form1" name="form1" method="post" action="">
             <ul>
              <li class="user-mian">
                   <div class="user-check">
                       <input type="checkbox" name="checkbox" id="checkbox" />
                   </div>
                   <div class="user-id">用户ID</div>
                   <div class="user-name">角色名称</div>
                   <div class="user-action">操作</div>
                   <div class="user-time">创建时间</div> 
                   <div class="user-node">权限设置</div>          
               </li>
                <?php foreach($roles as $k => $u){?>
                <li>    
                   <div class="user-check">
                       <input type="checkbox" name="checkbox" id="checkbox" />
                   </div>
                   <div class="user-id"><?php echo $u['id']?></div>
                   <div class="user-name"><?php echo $u['name']?></div>
                   <div class="user-action"><i class="fa fa-pencil" title="编辑角色"></i><i class="fa fa-times" title="删除角色"></i></div>
                   <div class="user-time"><?php echo date("Y-m-d H:i:m",$u['create_time'])?></div>
                   <div class="user-from"><?php echo $u['last_login_ip']?></div>
                   <div class="user-node"><a href="#">权限设置</a></div>              
                </li>
				<?php }?>
             </ul>
             </form>
        </div>
        
        <div class="add-role">新增角色</div>

</div>
<?php require_once('./Realize/Admin/View/Public/footer.php');?>
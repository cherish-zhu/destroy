<link type="text/css" rel="stylesheet" href="<?php echo css2("main")?>" />
<link type="text/css" rel="stylesheet" href="/Static/bootstrap/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="/Static/bootstrap/css/bootstrap-theme.css" />
<link type="text/css" rel="stylesheet" href="/Static/font-awesome/css/font-awesome.min.css" />
<script type="text/javascript" src="<?php echo base_url()?>Static/JQuery/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url()?>Static/artdialog/artDialog.js?skin=default"></script>
<script src="<?php echo base_url()?>Static/artdialog/plugins/iframeTools.js"></script>
<script src="<?php echo base_url()?>Static/admin/js/base.js"></script>
</head>

<body>
<div class="topBack">
     <div class="top">
           <ul>
               <li <?php if($bj['xp']=='sys'){echo 'id="click"';}?>><a href="<?php echo base_url()?>admin/Index">系统</a></li>
               <li <?php if($bj['xp']=='app'){echo 'id="click"';}?>><a href="<?php echo base_url()?>admin/appshop">应用</a></li>
               <li <?php if($bj['xp']=='cmp'){echo 'id="click"';}?>><a href="<?php echo base_url()?>admin/comp">扩展</a></li>
               <li <?php if($bj['xp']=='vie'){echo 'id="click"';}?>><a href="<?php echo base_url()?>admin/view/shopView">界面</a></li>
               <li <?php if($bj['xp']=='use'){echo 'id="click"';}?>><a  href="<?php echo base_url()?>admin/user">用户</a></li>
               <li id="user" class="user" style="float: right">
                   <div style="float:left"><img src="<?php echo base_url()?>Static/admin/images/user.jpg" width="42" height="42" /></div>
                   <div style=" float:left;height:38px;line-height:48px;"><?php echo $_SESSION['loginUserName']?></div></li>                 
           </ul>
     </div>
</div>

<div class="mi-cup">
     <div class="mi-cup-left">
          <div style="margin-top:6px; float:left; margin-left:50px; margin-right:6px"><img src="/logo.png" width="25" height="25"></div>     
          <div style="float:left;">Destroy</div>
    </div>
   <div class="mi-cup-right">
       <ul class="BreadcrumbNavigation">
							<li>
								<a href="/admin">首页</a>
                                
                                >
                                
							</li>
							<li class="active"><a href="<?php echo $bj['url']?>"><?php echo $bj['str']?></a></li>
		</ul>
        <ul class="Faster">
            <li style="font-size:13px; line-height:26px">快捷的：</li>
            <li><a href="/admin/Index"><img src="/Static/icon/home.png" title="首页"></a></li>
            <li><a href="/admin/content/write"><img src="/Static/icon/write.png" title="新增内容"></a></li>
            <li><a href="/admin/recycle"><img src="/Static/icon/recycle.png" title="回收站"  style="width:20px; height:18px; margin-top:3px"></a></li>
            <li><img src="/Static/icon/update.png"  id="go_hc"  title="清理缓存" style="width:20px; height:18px; margin-top:3px"></li>
        </ul>
  </div>
</div>
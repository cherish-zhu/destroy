<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的控制台</title>
<link type="text/css" rel="stylesheet" href="/Static/admin/css/cont.css" />
<link type="text/css" rel="stylesheet" href="/Static/admin/css/type.css" />
<link type="text/css" rel="stylesheet" href="/Static/Semantic-UI/css/semantic.min.css" />
<?php require_once('./Realize/Admin/View/public/top.php');?>

<div class="main">

<?php require_once('./Realize/Admin/View/left/leftAppliance.php');?>

<div class="right">
     
     <div class="face">
          <form id="word" action="" method="post" onsubmit="javascript:return sendfrom()">
          <div class="cont-left">
               <div class="cont-title"><input name="title" type="text" id="title" placeholder="请输入标题"/></div>
               <div class="cont-center"><textarea name="content" id="content" cols="92" rows="18" class="xheditor"></textarea></div>
               <div class="cont-mian">
                    <div class="tab-box">
                         <ul class="tab-menu">
                             <li>描述 / 标签</li>
                             <li>浏览设置</li>
                             <li>评论设置</li>
                             <li>模板 / 视图</li>
                             <li>附件</li>
                             <li>属性</li>
                         </ul>
                        <div class="tab-from">
                             <div class="tab-list">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                         <tr>
                                             <td height="36"><label for="textfield2">标签</label> <input type="text" name="tags" id="tags" /></td>
                                         </tr>
                                         <tr>
                                             <td height="36"><label for="textarea2">描述</label><textarea name="description" id="description" cols="60" rows="3"></textarea></td>
                                         </tr>
                                   </table>
                              </div>
                              <div class="tab-list">
                                    <div class="cont-check-box"><label>密码</label> <input type="radio" name="passwd" value="passwd" id="RadioGroup1_0" />  <input name="passwd_value" type="password" id="textfield" size="6" maxlength="12" /></div>
                                    <div class="cont-check-box"><label>注册用户</label><input type="radio" name="users" value="users" id="RadioGroup1_1" /></div>
                                    <div class="cont-check-box"><label>会员</label><input type="radio" name="vip" value="vip" id="RadioGroup1_2" /></div>
                                    <div class="cont-check-box"><label>用户组</label><input type="radio" name="group" value="group" id="RadioGroup1_3" /></div>
                                    <div class="cont-check-box"><label>收费</label><input type="radio" name="buy" value="buy" id="RadioGroup1_4" />
                                    <input name="buy_value" type="text" id="textfield3" size="6" maxlength="10" />
                                    <select name="buy_type" id="select2">
                                            <option value="0">元</option>
                                            <option value="1" selected="selected">积分</option>
                                            <option value="2">金币</option>
                                     </select></div>
                               </div>
                               <div class="tab-list">
                                    <div class="cont-check-line"><input type="radio" name="comm" value="1" id="comm"/><label>不显示评论框，不允许评论</label></div>
                                    <div class="cont-check-line"><input type="radio" name="comm" value="2" id="comm" /><label>允许任何人评论，需要审核</label></div>
                                    <div class="cont-check-line"><input type="radio" name="comm" value="3" id="comm" /><label>只允许注册用户评论</label></div>
                               </div>
                                <div class="tab-list">
                                     <p>&nbsp;</p>
                                     <p><label>请填写模版文件： </label><input type="text" name="view" id="view" /></p>
                                </div>
                                <div class="tab-list">
                                     <p>&nbsp;</p>
                                     <p>&nbsp;</p>
                                </div>
                                <div class="tab-list">
                                  <label for="select">请选择属性： </label>
                                  <select name="type" size="1" id="select">
                                    <option value="1">普通</option>
                                    <option value="2">头条</option>
                                    <option value="3">推荐</option>
                                    <option value="4">置顶</option>
                                  </select>
                          </div>
                      </div>
                      </div>
               </div>
          </div>
          
          <div class="cont-right">
                
                <div class="cont-head">
                  <div id="change-ico" class="cont-check">选择图标</div>
                     <div class="cont-img"><img src="/Static/icon/wold.jpg" /></div>
                </div>
                
                <div class="cont-sub">
                     <input type="hidden" name="thumb" id="thumb" />
                     <input type="hidden" name="cateid" id="cateid" />
                     <input type="submit" name="button" class="ui huge teal button" value="发 &nbsp; 布" />
                     <p style=" font-size:12px; line-height:36px" id="tips">系统自动检测内容完善程度后将自动保存到草稿箱</p>
                </div>
                
                <ul class="cate buttom">
                    <li class="ui-state-default">
                        <div class="cate">
                             <div class="cate-title">&nbsp;&nbsp;&nbsp;选择分类</div>
                             <div class="cate-ss"><i class="fa fa-angle-down"></i></div>
                        </div>
                     </li>
                    <?php echo $cate_tree;?>
                </ul>      
          </div>
               
     </form>
     </div>

</div>
<script type="text/javascript">
function sendfrom(){
	 title = $("#title").val();
	 cate  = $("#cateid").val();
	 cont  = $("#content").val();
	 if(cate.length <= 0){
		art.dialog.tips("请选择分类");
		 return false;
	 }
	 if(title.length <= 0){
		 art.dialog.tips("标题不能为空");
		 return false;
	 }
	 if(cont.length < 6){
		 art.dialog.tips("内容不少于6个字符");
		 return false;
	 }	 
}
</script>
<script src="/Static/Semantic-UI/javascript/semantic.min.js"></script>
<script src="/Static/Editor/xheditor/xheditor-1.2.1.min.js"></script>
<script src="/Static/Editor/xheditor/xheditor_lang/zh-cn.js"></script>
<script src="/Static/admin/js/cont.js" type="text/javascript"></script>
<?php require_once('./Realize/Admin/View/Public/footer.php');?>
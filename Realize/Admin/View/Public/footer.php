<div id="user_main" onclick="userMain();">
  <table width="321" height="162" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="98" height="25">&nbsp;</td>
      <td width="10" rowspan="4"><hr style="width:2px; height:126px; border-left:#CCC 1px dashed"/></td>
      <td width="10" rowspan="4">&nbsp;</td>
      <td width="203" rowspan="4"><table width="200" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="27" colspan="2">&nbsp;</td>
          </tr>
        <tr>
          <td height="32"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:viod(0);" id="myEdit">我的资料</a></td>
          <td><a href="javascript:viod(0);" id="editPW">修改密码</a></td>
        </tr>
        <tr>
          <td height="16" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td height="17" colspan="2"><div id="userout" style="width:120px; height:36px; background-color:#069; color:#FFF; line-height:36px; font-size:16px; font-weight:bolder; text-align:center; cursor:pointer">退出登录</div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="46"><img src="<?php echo base_url()?>Static/admin/images/user.jpg" width="46" height="46" style="margin-left:16px"/></td>
    </tr>
    <tr>
      <td height="26"><font style="margin-left:16px; font-size:14px"><?php echo $_SESSION['loginUserName']?></font></td>
    </tr>
    <tr>
      <td height="10">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
<script type="text/javascript" src="/Static/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Static/JQuery-UI/jquery-ui-1.10.4.custom.min.js"></script>
<script src="/Static/JQuery-extend/AjaxPage.jquery.js" type="text/javascript"></script>
</html>
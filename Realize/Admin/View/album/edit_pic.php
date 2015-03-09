<form name="form1" method="post" action="<?php echo url2("album/edit_pic").'?id='.$val['aid']?>"><table width="650" height="133" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="140" rowspan="3"><img src="<?php echo url().$val['path']?>" /></td>
    <td width="510" height="40">
      <label for="select">相册：</label>
      <select id="album" name="album"><?php var_dump($option)?>
      <?php  foreach($option as $k=>$v){?>
             <option value="<?php echo $v['cid']?>" <?php if($v['cid']==$val['tid']){echo 'selected';}?>><?php echo $v['class_name']?></option>                       
	 <?php }?>
      </select></td>
  </tr>
  <tr>
    <td width="510" height="40">
      <label for="textfield2">名称：</label>
      <input name="name" type="text" id="name" value="<?php echo $val['alb_name']?>"></td>
  </tr>
  <tr>
    <td height="40"><label for="textfield3">标签：</label>
      <input name="keyword" type="text" id="keyword" value="<?php echo $val['alb_keyword']?>"></td>
  </tr>
  <tr>
    <td width="140"><input type="submit" name="button" id="butt" value="保存修改"></td>
    <td><label for="textarea">描述：</label>
      <textarea name="description" id="textarea" cols="45" rows="5"><?php echo $val['alb_description']?></textarea></td>
  </tr>
</table></form>

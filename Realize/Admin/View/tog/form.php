
<form id="form1" name="form1" method="post" action="/admin/Category/insert">
<div class="type-box">
  <div class="type-left"></div>
    <div class="type-right">
      <div class="type-line">          
          <label for="textfield">选择分类 </label>
          <select name="category" id="category">
               <option value="1">顶级分类</option>
               <?php  echo $options;?>
          </select>
        </div>
        <div class="type-line">
        <label for="textfield">是否在列表中自动显示&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <select name="status" id="select">
            <option value="1">是</option>
                <option value="0">否</option>
          </select>
      </div>
          <div class="type-line">
            <label for="textfield2">名&nbsp;&nbsp;&nbsp;&nbsp;称&nbsp;&nbsp; </label>
            <input type="text" name="name" id="textfield2" />
          </div>
          <div class="type-line">
            <label for="textfield2">别&nbsp;&nbsp;&nbsp;&nbsp;名&nbsp;&nbsp; </label>
            <input type="text" name="alias" id="textfield2" />
      </div>
          <div class="type-line">
            <label for="textfield2">关键词&nbsp;&nbsp;&nbsp; </label>
            <input type="text" name="keyword" id="textfield2" />
      </div>
      <div class="type-line"> <label for="textarea">描述</label></div> 
          <textarea name="description" id="textarea" cols="45" rows="5"></textarea>
     </div>
          <div class="type-line">
            <input type="submit" name="button" class="smile-butt" id="button" value="添加" />
          </div>
</div>
</form>
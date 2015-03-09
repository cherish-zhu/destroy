<form id="login-form" action="" method="post">
<p><label>原始密码：<input id="login-form-username" name="username" type="text"></label></p>
<p><label>新建密码：<input id="login-form-password" name="password" type="password"></label></p>
<p><label>确认密码：<input id="login-form-password" name="password" type="password"></label></p>
</form>
<!-- IE8 style 标签写在HTML片段下方才能生效 -->
<style>
#login-form p { padding:5px;  }
#login-form input { width:15em; padding:4px; border:1px solid #CCC; }
#login-form input:focus { border-color:#426DC9; }
#login-form .login-form-error { background:#FFFBFC; border-color:#F00 !important; }
</style>
<!--
	1、 script的类型如果是 text/dialog ，将会在对话框内部执行（类似init参数的回调），变量不会污染全局
    2、 如果使用jquery.artDialog，标准script的标签也能被执行
    3、 本页编码要与对话框所在页面编码保持一致
-->
<script type="text/dialog">
var api = this,// 对话框扩展方法
	$ = function (id) {return document.getElementById(id)},
	form = $('login-form'),
	username = $('login-form-username'),
	password = $('login-form-password');

// 操作对话框
api.title('修改密码')
	// 自定义按钮
	.button(
		{
			name: '确认修改',
			callback: function () {
				if (check(username) && check(password)) form.submit();
				return false;
			},
			focus: true
		},
		{
			name: '取消'
		}
		/*, 更多按钮.. */
	)
	// 锁屏
	.lock();
	
username.focus();

// 表单验证
var check = function (input) {
	if (input.value === '') {
		inputError(input);
		input.focus();
		return false;
	} else {
		return true;
	};
};

// 输入错误提示
var inputError = function (input) {
	clearTimeout(inputError.timer);
	var num = 0;
	var fn = function () {
		inputError.timer = setTimeout(function () {
			input.className = input.className === '' ? 'login-form-error' : '';
			if (num === 5) {
				input.className === '';
			} else {
				fn(num ++);
			};
		}, 150);
	};
	fn();
};
</script>
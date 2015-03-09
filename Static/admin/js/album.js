// JavaScript Document
$(function() {
			
		$('#accordion-style').on('click', function(ev){
					var target = $('input', ev.target);
					var which = parseInt(target.val());
					if(which == 2) $('#accordion').addClass('accordion-style2');
					 else $('#accordion').removeClass('accordion-style2');
		});
					
		var oldie = /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase());
		$('.easy-pie-chart.percentage').each(function(){
					$(this).easyPieChart({
						barColor: $(this).data('color'),
						trackColor: '#EEEEEE',
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: 8,
						animate: oldie ? false : 1000,
						size:75
					}).css('color', $(this).data('color'));
		});
			
		$('[data-rel=tooltip]').tooltip();
		$('[data-rel=popover]').popover({html:true});
			
			
		$('#gritter-regular').on(ace.click_event, function(){
		$.gritter.add({
						title: 'This is a regular notice!',
						text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="blue">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						image: $path_assets+'/avatars/avatar1.png',
						sticky: false,
						time: '',
						class_name: (!$('#gritter-light').get(0).checked ? 'gritter-light' : '')
					});
			
					return false;
		});
			
		$('#gritter-sticky').on(ace.click_event, function(){
					var unique_id = $.gritter.add({
						title: 'This is a sticky notice!',
						text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="red">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						image: $path_assets+'/avatars/avatar.png',
						sticky: true,
						time: '',
						class_name: 'gritter-info' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
		});
			
			
		$('#gritter-without-image').on(ace.click_event, function(){
					$.gritter.add({
						// (string | mandatory) the heading of the notification
						title: 'This is a notice without an image!',
						// (string | mandatory) the text inside the notification
						text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="orange">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
		});
			
			
		$('#gritter-max3').on(ace.click_event, function(){
					$.gritter.add({
						title: 'This is a notice with a max of 3 on screen at one time!',
						text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="green">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						image: $path_assets+'/avatars/avatar3.png',
						sticky: false,
						before_open: function(){
							if($('.gritter-item-wrapper').length >= 3)
							{
								return false;
							}
						},
						class_name: 'gritter-warning' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
		});
			
			
		$('#gritter-center').on(ace.click_event, function(){
					$.gritter.add({
						title: 'This is a centered notification',
						text: 'Just add a "gritter-center" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
						class_name: 'gritter-info gritter-center' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
		});
				
		$('#gritter-error').on(ace.click_event, function(){
					$.gritter.add({
						title: 'This is a warning notification',
						text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
						class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
		});
					
			
		$("#gritter-remove").on(ace.click_event, function(){
					$.gritter.removeAll();
					return false;
		});
								
				///////		
			
		$("#bootbox-regular").on(ace.click_event, function() {
					bootbox.prompt("What is your name?", function(result) {
						if (result === null) {
							//Example.show("Prompt dismissed");
						} else {
							//Example.show("Hi <b>"+result+"</b>");
						}
					});
		});
					
		$("#bootbox-confirm").on(ace.click_event, function() {
					bootbox.confirm("Are you sure?", function(result) {
						if(result) {
							//
						}
					});
		});
					
		$("#bootbox-options").on(ace.click_event, function() {
					bootbox.dialog({
						message: "<span class='bigger-110'>I am a custom dialog with smaller buttons</span>",
						buttons: 			
						{
							"success" :
							 {
								"label" : "<i class='icon-ok'></i> Success!",
								"className" : "btn-sm btn-success",
								"callback": function() {
									//Example.show("great success");
								}
							},
							"danger" :
							{
								"label" : "Danger!",
								"className" : "btn-sm btn-danger",
								"callback": function() {
									//Example.show("uh oh, look out!");
								}
							}, 
							"click" :
							{
								"label" : "Click ME!",
								"className" : "btn-sm btn-primary",
								"callback": function() {
									//Example.show("Primary button");
								}
							}, 
							"button" :
							{
								"label" : "Just a button...",
								"className" : "btn-sm"
							}
						}
					});
		});
						
		$('#spinner-opts small').css({display:'inline-block', width:'60px'})
			
				var slide_styles = ['', 'green','red','purple','orange', 'dark'];
				var ii = 0;
				$("#spinner-opts input[type=text]").each(function() {
					var $this = $(this);
					$this.hide().after('<span />');
					$this.next().addClass('ui-slider-small').
					addClass("inline ui-slider-"+slide_styles[ii++ % slide_styles.length]).
					css({'width':'125px'}).slider({
						value:parseInt($this.val()),
						range: "min",
						animate:true,
						min: parseInt($this.data('min')),
						max: parseInt($this.data('max')),
						step: parseFloat($this.data('step')),
						slide: function( event, ui ) {
							$this.attr('value', ui.value);
							spinner_update();
						}
					});
		});
						
		$.fn.spin = function(opts) {
					this.each(function() {
					  var $this = $(this),
						  data = $this.data();
			
					  if (data.spinner) {
						data.spinner.stop();
						delete data.spinner;
					  }
					  if (opts !== false) {
						data.spinner = new Spinner($.extend({color: $this.css('color')}, opts)).spin(this);
					  }
					});
					return this;
		};
			
		function spinner_update() {
					var opts = {};
					$('#spinner-opts input[type=text]').each(function() {
						opts[this.name] = parseFloat(this.value);
					});
					$('#spinner-preview').spin(opts);
		}
						
		$('#id-pills-stacked').removeAttr('checked').on('click', function(){
					$('.nav-pills').toggleClass('nav-stacked');
				});
			
			
		});
					
//========================遍历相册============================================
var cid = $(".cid").attr("id");
var aid = $(".aid").attr("id");
	
$("#select option").each(function(i,e){
	if(i==0){
		cid = $(this).val();
		$.get(baseURL+"/album/lib/?cid="+cid,function(r){
		
		    var str = '<span style="float:left; line-height:50px; margin-right:30px"><<</span>';
	     	$.each(r,function(i,e){
			    str+='<p><a href="javascript:album('+e.cid+')">'+e.class_name+'</a></p>';
		    });
		    str+='<span style="line-height:50px;">>></span>';
		    $(".img-right").html(str);
	    },'json');		
	}
});
$("#select").change(function(){
	cid = $(this).val();
	$.get(baseURL+"/album/lib/?cid="+cid,function(r){
		
		var str = '<span style="float:left; line-height:50px; margin-right:30px"><<</span>';
		$.each(r,function(i,e){
			if(i==0){
				$(".aid").attr("id",e.cid);//选择分类时设置第个相册为默认操作
			}
			str+='<p><a href="javascript:album('+e.cid+')">'+e.class_name+'</a></p>';
		});
		str+='<span style="line-height:50px;">>></span>';
		$(".img-right").html(str);
	},'json');
});
function album(i){
	
	if($.type(i)!='undefined')aid = i;
	$.page({
	    group:7,//每组条数 必须
	    sum:200,//总数   必须
	    tag:'p',//包裹标签
	    pianyi:21,//每页显示多少条  必须
		starStr:'首页',//第一条
	    endStr:'尾页',//最后一条
	    data:{URL:"<?php echo base_url()?>"},//预定义数
	    templete:'#tpl',//模板ID,模板中需要替换的数据用{}包括，里面的值将与数据的键值对应，比如{title}将被数据中的title内容替换，data中预定义的数据格式用{data.xxx}
		pageID:'#ajaxPage',//填充内容 必须
	    contentID:'#image',
	    url:baseURL+"/album/pic/?aid="+aid //url 必须
    })

    $("#image").removeClass()
	.addClass(" "+aid);
}

album();
//编辑图片
$("#bj").live("click",function(){
	var id = $(this).parent().attr("class");
	var dialog = art.dialog({title:'编辑相册',lock:true});
	$.get(baseURL+"/album/edit_pic/?fid="+cid+"&id="+id,function(r){
		dialog.content(r);
	});
});
//删除图片
$("#sc").live("click",function(){
	
	var id = $(this).parent().attr("class");
	var pa = $(this).parents(".img");
	art.dialog.confirm('你确定要删除吗？', function () {
					  $.get(baseURL+"/album/del_pic/?id="+id,function(r){
						  if(r.code == 1){
							  pa.remove();
							  art.dialog.tips('删除成功');
						  }else{
							  art.dialog.tips('删除失败');
						  }
					  },'json');
                      
                 }, function () {
                 art.dialog.tips('执行取消操作');
    });

});
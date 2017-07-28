<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!--start footer-->
<div id="footer">
  <!--start fcontent-->
  <div class="fcontent">
      <div class="copyright_top">
          <div class="top_guanyu">
              <span>关于</span>
              <a href="<?php echo APP_PATH;?>html/lianxiwomen/">合作联系</a>
          </div>
          <div class="top_lanqiu">
              <span>篮球专区</span>
              <a href="<?php echo APP_PATH;?>html/nbafinals/">NBA 总决赛</a>
              <a href="<?php echo APP_PATH;?>html/nbaallstar/">NBA 全明星</a>
              <a href="<?php echo APP_PATH;?>html/nbaplayoffs/">NBA 季后赛</a>
			  <a href="<?php echo APP_PATH;?>html/international/">国际赛场</a>
          </div>
          <div class="top_zuqiu">
              <span>足球专区</span>
              <a href="<?php echo APP_PATH;?>html/football/">英超</a>
              <a href="<?php echo APP_PATH;?>html/football/">欧冠</a>
              <a href="<?php echo APP_PATH;?>html/football/">世界杯</a>
          </div>
          <div class="top_zhongguo">
              <span>中国专区</span>
              <a href="<?php echo APP_PATH;?>html/pingpang/">乒乓球</a>
              <a href="<?php echo APP_PATH;?>html/other/">排球</a>
              <a href="<?php echo APP_PATH;?>html/tianjing/">游泳</a>
          </div>
          <div class="top_qita">
              <span>其它</span>
              <a href="<?php echo APP_PATH;?>html/zhuoqiu/">桌球</a>
          </div>
          <div class="top_erweima">
              <span>获取更多经典比赛</span>
              <img src="<?php echo IMG_PATH;?>pxgrids/small_erweima.jpg" alt="扫啊扫">
          </div>
      </div>
      <div class="copyright_bottom">
		<p class="cp">Powered by <strong><a href="<?php echo APP_PATH;?>" style="color:#f6f6f6">篮球经典比赛(ijdbs.com)</a></strong> &copy; <?php echo date('Y', SYS_TIME);?></p>
		<p>有任何建议或意见，都欢迎联系我们：251960747@qq.com邮箱。</p>
		<p style="color:#f6f6f6">备案号 : 京ICP备16017871号-2&nbsp;&nbsp;<!--cnzz统计--><script src="https://s11.cnzz.com/z_stat.php?id=1261713751&web_id=1261713751" nofollow language="JavaScript"></script></p>
      </div>
  </div>
  <!--[END] fcontent-->  
</div>
<!--右下角弹窗-->
<!--
<div id="pop" style="display:none;">
	<style type="text/css">
	*{margin:0;padding:0;}
	#pop{background:#fff;width:260px;border:1px solid #e0e0e0;font-size:12px;position: fixed;right:10px;bottom:10px;}
	#popHead{line-height:32px;background:#f6f0f3;border-bottom:1px solid #e0e0e0;position:relative;font-size:12px;padding:0 0 0 10px;}
	#popHead h2{font-size:14px;color:#666;line-height:32px;height:32px;}
	#popHead #popClose{position:absolute;right:10px;top:1px;}
	#popHead a#popClose:hover{color:#f00;cursor:pointer;}
	#popContent{padding:5px 10px;}
	#popTitle a{line-height:24px;font-size:14px;font-family:'微软雅黑';color:#333;font-weight:bold;text-decoration:none;}
	#popTitle a:hover{color:#f60;}
	#popIntro{text-indent:24px;line-height:160%;margin:5px 0;color:#666;}
	#popMore{text-align:right;border-top:1px dotted #ccc;line-height:24px;margin:8px 0 0 0;}
	#popMore a{color:#f60;}
	#popMore a:hover{color:#f00;}
	</style>
	<div id="popHead">
		<a id="popClose" title="关闭">关闭</a>
		<h2>温馨提示</h2>
	</div>
	<div id="popContent">
		<dl>
			<dt id="popTitle"></dt>
			<dd id="popIntro"></dd>
		</dl>
	</div>
</div>
<script type="text/javascript" src="<?php echo JS_PATH;?>pxgrids/pop.js"></script>
<script type="text/javascript" >
	  //使用参数：1.标题，2.链接地址，3.内容简介
	  window.onload=function(){
			var pop=new Pop("this is title",
			"javascript:;",
			"CTRL + D 收藏网址");
		}
</script>
-->
<!--右下角弹窗-->
<!--[END] footer-->
<?php echo tjcode();?>
<?php echo runhook('glogal_footer')?>
<!--start TO TOP-->
<a href="#" id="toTop" style="display: inline; "><span id="toTopHover" style="opacity: 0; "></span>To Top</a>
<!--easing plugin ( optional )-->
<script src="<?php echo JS_PATH;?>pxgrids/easing.js" type="text/javascript"></script>
<!--UItoTop plugin-->
<script src="<?php echo JS_PATH;?>pxgrids/jquery.ui.totop.js" type="text/javascript"></script>
<!--Starting the plugin-->
<script type="text/javascript">
	$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<!--首页轮播-->
<script src="<?php echo JS_PATH;?>pxgrids/YuxiSlider.jQuery.min.js"></script>
<script>
$(".slider").YuxiSlider({
	width:800, //容器宽度
	height:450, //容器高度
	control:$('.control'), //绑定控制按钮
	during:3000, //间隔4秒自动滑动
	speed:800, //移动速度0.8秒
	mousewheel:true, //是否开启鼠标滚轮控制
	direkey:true //是否开启左右箭头方向控制
});
</script>
<!--END TO TOP-->
</body>
<!--禁止右键点击与选择-->
<script type="text/javascript"> 
document.body.onselectstart=document.body.oncontextmenu=function(){ return false;} 
</script> 
</html>
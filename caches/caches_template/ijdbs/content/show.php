<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<?php include template("content","header"); ?>
	<style>
		body{background:#f6f6f6;}
	</style>
    <div class="neirong">
		<div class="fengexian"></div>
		<div class="xiangqing_content">
		<div>
			<div class="xiangqing_left">
				<h1><?php echo $title;?></h1>
				<div class="fabushijian">发布日期：<?php echo $inputtime;?> &nbsp;&nbsp;|&nbsp;&nbsp; <span>点击&nbsp;:&nbsp;</span><span id="hits"></span>&nbsp;次&nbsp;</div>
				
				<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
				<div class="fengexian_1"></div>
				<div class="bofang">
					<div class="xiazai"></div>
					<div id="a1"></div>
					<script type="text/javascript" src="<?php echo JS_PATH;?>pxgrids/offlights.js"></script>
					<script type="text/javascript" src="<?php echo JS_PATH;?>pxgrids/ckplayer.js" charset="utf-8"></script>
					<script type="text/javascript">
						var flashvars={
							f:'',//视频地址
							a:'',//调用时的参数，只有当s>0的时候有效
							s:'0',//调用方式，0=普通方法（f=视频地址），1=网址形式,2=xml形式，3=swf形式(s>0时f=网址，配合a来完成对地址的组装)
							c:'0',//是否读取文本配置,0不是，1是
							x:'',//调用配置文件路径，只有在c=1时使用。默认为空调用的是ckplayer.xml
							//默认图片地址
							i:'<?php echo $thumb;?>',//初始图片地址
							d:'',//暂停时播放的广告，swf/图片,多个用竖线隔开，图片要加链接地址，没有的时候留空就行
							u:'',//暂停时如果是图片的话，加个链接地址
							l:'',//前置广告，swf/图片/视频，多个用竖线隔开，图片和视频要加链接地址
							r:'',//前置广告的链接地址，多个用竖线隔开，没有的留空
							t:'10|10',//视频开始前播放swf/图片时的时间，多个用竖线隔开
							y:'',//这里是使用网址形式调用广告地址时使用，前提是要设置l的值为空
							z:'',//缓冲广告，只能放一个，swf格式
							e:'8',//视频结束后的动作，0是调用js函数，1是循环播放，2是暂停播放并且不调用广告，3是调用视频推荐列表的插件，4是清除视频流并调用js功能和1差不多，5是暂停播放并且调用暂停广告
							v:'80',//默认音量，0-100之间
							p:'0',//视频默认0是暂停，1是播放，2是不加载视频
							h:'0',//播放http视频流时采用何种拖动方法，=0不使用任意拖动，=1是使用按关键帧，=2是按时间点，=3是自动判断按什么(如果视频格式是.mp4就按关键帧，.flv就按关键时间)，=4也是自动判断(只要包含字符mp4就按mp4来，只要包含字符flv就按flv来)
							q:'',//视频流拖动时参考函数，默认是start
							m:'',//让该参数为一个链接地址时，单击播放器将跳转到该地址
							o:'',//当p=2时，可以设置视频的时间，单位，秒
							w:'',//当p=2时，可以设置视频的总字节数
							g:'',//视频直接g秒开始播放
							j:'',//跳过片尾功能，j>0则从播放多少时间后跳到结束，<0则总总时间-该值的绝对值时跳到结束
							k:'32|63',//提示点时间，如 30|60鼠标经过进度栏30秒，60秒会提示n指定的相应的文字
							n:'这是提示点的功能，如果不需要删除k和n的值|提示点测试60秒',//提示点文字，跟k配合使用，如 提示点1|提示点2
							wh:'',//宽高比，可以自己定义视频的宽高或宽高比如：wh:'4:3',或wh:'1080:720'
							lv:'0',//是否是直播流，=1则锁定进度栏
							loaded:'loadedHandler',//当播放器加载完成后发送该js函数loaded
							//调用播放器的所有参数列表结束
							//以下为自定义的播放器参数用来在插件里引用的
							my_title:'演示视频标题文字',
							my_url:encodeURIComponent(window.location.href)//本页面地址
							//调用自定义播放器参数结束
							};
						var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always'};//这里定义播放器的其它参数如背景色（跟flashvars中的b不同），是否支持全屏，是否支持交互
						//获取后台传过来的视频地址--mp4格式
						var video=['<?php echo $tiaozhuan;?> ->video/mp4'];
						function addhtml5(){
							if(CKobject.isHTML5()){
								support=['all'];
								CKobject._K_('a1').innerHTML='';
								CKobject.embedHTML5('a1','ckplayer_a1',800,444,video,flashvars,support);
							}
							else{
								alert('非常抱歉，你的浏览器不支持html5，视频无法观看，请您升级你的浏览器后继续访问页面！');
							}
						}
						addhtml5();
					</script>
				</div>
				<p><?php echo $content;?></p>
				<div class="fengexian"></div>
				<center><h4 style="font-size:20px;font-family:'微软雅黑';margin-top:30px;">扫码打赏，建议金额1-10元，土豪随意。</h4></center>
				<div class="erweima">
					<div class="dashang">
						<img src="<?php echo IMG_PATH;?>pxgrids/wechat.png" alt="谢谢支持" style="border:10px solid #8BC41D;" />
						<span class="saoma">微信扫码打赏</span>
					</div>
					<div class="dashang">
						<img src="<?php echo IMG_PATH;?>pxgrids/zhifubao.png" alt="谢谢鼓励" style="border:10px solid #009FE3;" />
						<span class="saoma">支付宝扫码打赏</span>
					</div>
				</div>
				<!--评论专区-->
				<!--<?php if($allow_comment && module_exists('comment')) { ?>
				<iframe src="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo id_encode("content_$catid",$id,$siteid);?>&iframe=1" width="100%" height="100%" id="comment_iframe" frameborder="0" scrolling="no"></iframe>
				<?php } ?>-->
			</div>
			<div class="xiangqing_right">
				<h2>推荐专栏</h2>
				<div class="tuijian">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d8f38c54c439463c553318bd75dfe2d7&action=position&posid=37&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'37','order'=>'listorder DESC','limit'=>'4',));}?>
					<ul>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li>
							<a class="xiangqing_a" href="<?php echo $r['url'];?>" target="_blank">
								<dl>
									<dt class="fl"><img src="<?php echo thumb($r[thumb],130,77);?>" width="130" height="77" alt="<?php echo $r['title'];?>" /></dt>
									<dd class="fr"><?php echo $r['title'];?></dd>
								</dl>
							</a>
						</li>
						<?php $n++;}unset($n); ?>
					</ul>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
			</div>
		</div>
		</div>
		<div class="fengexian"></div>
	</div>
<?php include template("content","footer"); ?>
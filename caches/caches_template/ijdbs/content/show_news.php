<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
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
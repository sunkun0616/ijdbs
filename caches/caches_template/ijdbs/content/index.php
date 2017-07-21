<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!-- start Slider -->
<div class="banner">
<div class="lunbo">
	<div id="banner_left">
		<a class="control prev"></a><a class="control next abs"></a><!--自定义按钮，移动端可不写-->
		<div class="slider" style="width:800px;height:450px"><!--主体结构，请用此类名调用插件，此类名可自定义-->
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7d25d783e3ab7b8d0090a04c3b8faeae&action=position&posid=1&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'5',));}?>
			<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<li><a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo thumb($v[thumb],800,450);?>" alt="<?php echo $v['title'];?>" /></a></li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>
	<div id="banner_right">
		<div class="index_news">
			<p><?php echo $CATEGORYS['14']['catname'];?></p>
			<a href="<?php echo $CATEGORYS['14']['url'];?>" target="_blank">更多></a>
		</div>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4f485411cee741d00725f3f3905a68f3&action=position&posid=2&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'10',));}?>
		<ul>
			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<li><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo $v['title'];?></a></li>
			<?php $n++;}unset($n); ?>
		</ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>
</div>
</div>
<div class="content">
	<!--最新视频[posid_36]-->
	<div class="video_mod">
		<div class="mod_title"><h2>最新视频</h2></div>
		<div class="mod_content">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bb8c1608ddb027509040a244df1ab433&action=position&posid=36&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'36','order'=>'listorder DESC','limit'=>'5',));}?>
			<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<a href="<?php echo $r['url'];?>" target="_blank">
						<img src="<?php echo thumb($r[thumb],220,160);?>" alt="<?php echo $r['title'];?>" width="220" height="160" />
						<strong><?php echo $r['title'];?></strong>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>
	<!--独家精选[posid_35]-->
	<!--<div class="video_mod">
		<div class="mod_title"><h2>独家精选</h2></div>
		<div class="mod_content">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bbc50b0929bdaac4bf646595f9cf5be9&action=position&posid=35&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'35','order'=>'listorder DESC','limit'=>'5',));}?>
			<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<a href="<?php echo $r['url'];?>" target="_blank">
						<img src="<?php echo thumb($r[thumb],220,160);?>" alt="" width="220" height="160" />
						<strong><?php echo $r['title'];?></strong>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>-->
	<!--NBA总决赛[posid_34]-->
	<div class="video_mod">
		<div class="mod_title"><h2>NBA总决赛</h2></div>
		<div class="mod_content">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=078a3a7d9e8fb212890411b714775481&action=position&posid=34&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'34','order'=>'listorder DESC','limit'=>'5',));}?>
			<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<a href="<?php echo $r['url'];?>" target="_blank">
						<img src="<?php echo thumb($r[thumb],220,160);?>" alt="" width="220" height="160" />
						<strong><?php echo $r['title'];?></strong>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>
	<!--NBA全明星[posid_33]-->
	<div class="video_mod">
		<div class="mod_title"><h2>NBA全明星</h2></div>
		<div class="mod_content">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dc19fa831792b8d42a53d91c15d3bc22&action=position&posid=33&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'33','order'=>'listorder DESC','limit'=>'5',));}?>
			<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<a href="<?php echo $r['url'];?>" target="_blank">
						<img src="<?php echo thumb($r[thumb],220,160);?>" alt="" width="220" height="160" />
						<strong><?php echo $r['title'];?></strong>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>
	<!--NBA经典[posid_30]-->
	<div class="video_mod">
		<div class="mod_title"><h2>NBA经典</h2></div>
		<div class="mod_content">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fc190d6aa7149d7d164969b991ca8cd9&action=position&posid=30&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'30','order'=>'listorder DESC','limit'=>'5',));}?>
			<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<a href="<?php echo $r['url'];?>" target="_blank">
						<img src="<?php echo thumb($r[thumb],220,160);?>" alt="" width="220" height="160" />
						<strong><?php echo $r['title'];?></strong>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>
	<!--世界杯[posid_32]-->
	<!--
	<div class="video_mod">
		<div class="mod_title"><h2>世界杯</h2></div>
		<div class="mod_content">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4bb1adaa9824691ab760f1894f960c1e&action=position&posid=32&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'32','order'=>'listorder DESC','limit'=>'5',));}?>
			<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<a href="<?php echo $r['url'];?>" target="_blank">
						<img src="<?php echo thumb($r[thumb],220,160);?>" alt="" width="220" height="160" />
						<strong><?php echo $r['title'];?></strong>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>
	-->
	<!--欧冠[posid_31]-->
	<!--
	<div class="video_mod">
		<div class="mod_title"><h2>欧冠</h2></div>
		<div class="mod_content">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d738fcfa44d9ac88259ca9366e8b6ae1&action=position&posid=31&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'31','order'=>'listorder DESC','limit'=>'5',));}?>
			<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<a href="<?php echo $r['url'];?>" target="_blank">
						<img src="<?php echo thumb($r[thumb],220,160);?>" alt="" width="220" height="160" />
						<strong><?php echo $r['title'];?></strong>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>
	-->
	<!--纪录片[posid_30]-->
	<!--<div class="video_mod">
		<div class="mod_title"><h2>纪录片</h2></div>
		<div class="mod_content">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bb8c1608ddb027509040a244df1ab433&action=position&posid=36&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'36','order'=>'listorder DESC','limit'=>'5',));}?>
			<ul>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<a href="<?php echo $r['url'];?>" target="_blank">
						<img src="<?php echo thumb($r[thumb],220,160);?>" alt="" width="220" height="160" />
						<strong><?php echo $r['title'];?></strong>
					</a>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>-->
	<!--广告-->
	<!--<div class="guanggao_1">
		<a href="#" target="_blank"><img src="" alt="" /></a>
	</div>-->
	<!--友情链接-->
	<!--
	<div class="link">
		<div class="link_title"><h2>友情链接</h2></div>
		<ul>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=9667be0d26a8bf19345416ce8de3afab&action=type_list&order=listorder+DESC&num=28&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('order'=>'listorder DESC','limit'=>'28',));}?> 
			<?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?> 
			<li><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a></li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</ul>
	</div>
	-->
</div>
<?php include template("content","footer"); ?>
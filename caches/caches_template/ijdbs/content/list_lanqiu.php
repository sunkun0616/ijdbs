<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
    <div class="neirong">
        <div class="fengexian"></div>
        <div class="fengmianliebiao">
            <?php $sql = structure_filters_sql($modelid)?>  
			<?php $urlrule = makeurlrule()?>  
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d3cb121f299b010f033a6905cb63108a&action=lists&where=%24sql&catid=%24catid&order=id+DESC&num=999&urlrule=%24urlrule\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('where'=>$sql,'catid'=>$catid,'order'=>'id DESC','limit'=>'999',));}?>
            <div class="liebiao">
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <a href="<?php echo $r['url'];?>" target="_blank">
                        <div class="liebiaotu">
                            <img src="<?php echo $r['fengmiantu'];?>" alt="">
                        </div>
                        <div class="liebiaomiaoshu">
                            <p class="nianfen"><?php echo $r['title'];?></p>
                            <p class="vs"><?php echo $r['qiudui_1'];?> <span style="">VS</span> <?php echo $r['qiudui_2'];?></p>
                        </div>
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
            </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<ul class="list">数据加载中，请稍后...</ul>
			<div class="more"><a href="javascript:;" onClick="lanren.loadMore();">点击加载更多</a></div>
        </div>
		<script>
			var _content = []; //临时存储li循环内容
			var lanren = {
				_default:20, //默认显示图片个数
				_loading:8,  //每次点击按钮后加载的个数
				init:function(){
					var lis = $(".fengmianliebiao .liebiao li");
					$(".fengmianliebiao ul.list").html("");
					for(var n=0;n<lanren._default;n++){
						lis.eq(n).appendTo(".fengmianliebiao ul.list");
					}
					$(".fengmianliebiao ul.list img").each(function(){
						$(this).attr('src',$(this).attr('realSrc'));
					})
					for(var i=lanren._default;i<lis.length;i++){
						_content.push(lis.eq(i));
					}
					$(".fengmianliebiao .liebiao").html("");
				},
				loadMore:function(){
					var mLis = $(".fengmianliebiao ul.list li").length;
					for(var i =0;i<lanren._loading;i++){
						var target = _content.shift();
						if(!target){
							$('.fengmianliebiao .more').html("<p>啊,已经到底了...</p>");
							break;
						}
						$(".fengmianliebiao ul.list").append(target);
						$(".fengmianliebiao ul.list img").eq(mLis+i).each(function(){
							$(this).attr('src',$(this).attr('realSrc'));
						});
					}
				}
			}
			lanren.init();
		</script>
		<div class="fengexian"></div>
    </div>
<?php include template("content","footer"); ?>
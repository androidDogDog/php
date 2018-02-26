<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list_6');
block_get('175,172,167,168,169,170,173,171,174');?><?php include template('common/header'); $list = array();?><?php $wheresql = category_get_wheresql($cat);?><?php $list = category_get_list($cat, $wheresql, $page);?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em><?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?> <a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a><em>&rsaquo;</em><?php } ?>
<?php echo $cat['catname'];?>
</div>
</div><?php echo adshow("text/wp a_t");?><style id="diy_style" type="text/css"></style>

<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="ct" class="ct2 wp cl" style="width:1180px!important; margin:0px auto!important;">
<div class="mn">
    	<div class="deanwzadsd">
        	<!--[diy=deanwzadsd]--><div id="deanwzadsd" class="area"><div id="frameUYLXxu" class="frame move-span cl frame-1"><div id="frameUYLXxu_left" class="column frame-1-c"><div id="frameUYLXxu_left_temp" class="move-span temp"></div><?php block_display('175');?></div></div></div><!--[/diy]-->
        	
        </div>
<div class="deanmn_left">
        	<div class="deanwzpdtitle">
                <h4><?php echo $cat['catname'];?></h4>
                <div class="deantools">
                    <?php if(($_G['group']['allowpostarticle'] || $_G['group']['allowmanagearticle'] || $categoryperm[$catid]['allowmanage'] || $categoryperm[$catid]['allowpublish']) && empty($cat['disallowpublish'])) { ?>
                    <a href="portal.php?mod=portalcp&amp;ac=article&amp;catid=<?php echo $cat['catid'];?>" class="deanaddnew" title="发布文章">发布文章</a>
                    <?php } ?>
                
                    <?php if($_G['setting']['rssstatus'] && !$_GET['archiveid']) { ?><a href="portal.php?mod=rss&amp;catid=<?php echo $cat['catid'];?>" class="deanrssartice" target="_blank" title="RSS">RSS</a><?php } ?>
                </div>
                <div class="clear"></div>
            </div>
            <!--下家分类-->	
            <?php if($cat['subs']) { ?>
            <div class="deannextnav">
                <h4>下级分类:</h4>
                <ul>
                <?php $i = 1;?>                <?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { ?>                <?php if($i != 1) { } ?><li><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>" ><?php echo $value['catname'];?></a></li><?php $i--;?>                <?php } ?>
                <div class="clear"></div>
                </ul>
                <div class="clear"></div>
            </div>
            <?php } ?>
            
            <div class="clear"></div>
                
            <!--[diy=listloopbottom]--><div id="listloopbottom" class="area"></div><!--[/diy]-->
            <div class="clear"></div>
            <div class="deanartice">
                <ul>
                    <?php if(is_array($list['list'])) foreach($list['list'] as $value) { ?>                    <?php $highlight = article_title_style($value);?>                    <?php $article_url = fetch_article_url($value);?>                    <li>
                        <?php if($value['pic']) { ?>
                        <div class="deanarticel">
                            <a href="<?php echo $article_url;?>" target="_blank"><img src="<?php echo $value['pic'];?>" alt="<?php echo $value['title'];?>" width="250" height="150"/></a><em></em>
                        </div>
                        <div class="deanarticer">
                            <div class="deanarticername"> 
                                <?php if($value['catname'] && $cat['subs']) { ?><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>" class="deantaglebs" target="_blank"><?php echo $value['catname'];?></a>
                                <?php } ?>
                            </div>
                            <h5> <a href="<?php echo $article_url;?>" target="_blank" class="deanarttitles xi2" <?php echo $highlight;?>><?php echo $value['title'];?></a> <?php if($value['status'] == 1) { ?>(待审核)<?php } ?></h5>
                            <div class="deanarticersummary"><?php echo $value['summary'];?>&hellip;&hellip;</div>
                            <div class="deanatcertop">
                                <div class="deanatctl">
                                    <img src="uc_server/avatar.php?uid=<?php echo $value['uid'];?>&amp;size=large">
                                </div>
                                <div class="deanarticerinfo">
                                        <span class="deanzhuozhenm">
                                            作者：<?php echo $value['username'];?>
                                        </span>
                                        <em>|</em>
                                        <span class="deanfabushijian">时间：<?php echo $value['dateline'];?></span>
                                        <em>|</em>
                                        <span class="deanyuedushu">阅读：<?php $query = DB::query("SELECT t1.viewnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $dean = DB::fetch($query);echo $dean['viewnum'];?></span>
                                        <em>|</em>
                                        <span class="deanhuifushu">回复：<?php $query = DB::query("SELECT t1.commentnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $dean = DB::fetch($query);echo $dean['commentnum'];?></span>
                                        <div class="clear"></div>
                                    </div>
                                <div class="clear"></div>   
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        
                        <?php } else { ?>
                    	<div class="deanarticer_tl">
                            <div class="deanattltop">
                            	<?php if($value['catname'] && $cat['subs']) { ?><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>" class="deantaglebs" target="_blank"><?php echo $value['catname'];?></a>
                                <?php } ?>
                                <a href="<?php echo $article_url;?>" target="_blank" class="deanarttitles xi2" <?php echo $highlight;?>><?php echo $value['title'];?></a> <?php if($value['status'] == 1) { ?>(待审核)<?php } ?>
                                <div class="clear"></div>
                            </div>
                            <div class="deanarticersummary"><?php echo $value['summary'];?>&hellip;&hellip;</div>
                            <div class="deanatcertop">
                                <div class="deanatctl">
                                    <img src="uc_server/avatar.php?uid=<?php echo $value['uid'];?>&amp;size=large">
                                </div>
                                <div class="deanarticerinfo">
                                        <span class="deanzhuozhenm">
                                            作者：<?php echo $value['username'];?>
                                        </span>
                                        <em>|</em>
                                        <span class="deanfabushijian">时间：<?php echo $value['dateline'];?></span>
                                        <em>|</em>
                                        <span class="deanyuedushu">阅读：<?php $query = DB::query("SELECT t1.viewnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $dean = DB::fetch($query);echo $dean['viewnum'];?></span>
                                        <em>|</em>
                                        <span class="deanhuifushu">回复：<?php $query = DB::query("SELECT t1.commentnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $dean = DB::fetch($query);echo $dean['commentnum'];?></span>
                                        <div class="clear"></div>
                                    </div>
                                <div class="clear"></div>   
                            </div>
                            <div class="clear"></div>
                        </div>
                    	<?php } ?>
                    </li>
                    	
                    <?php } ?>
                </ul>
            </div>
            <div class="clear"></div>
            <?php echo adshow("articlelist/mbm hm/3");?><?php echo adshow("articlelist/mbm hm/4");?>            <?php if($list['multi']) { ?><div class="pgs cl" id="deanpage"><?php echo $list['multi'];?></div><?php } ?>
    
            <!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
        </div>
</div>
<div class="sd pph">
<!--关注我们-->
        <div class="deanguanzhu">
        	<!--[diy=deanguanzhu]--><div id="deanguanzhu" class="area"><div id="framePVzSw2" class="frame move-span cl frame-1"><div id="framePVzSw2_left" class="column frame-1-c"><div id="framePVzSw2_left_temp" class="move-span temp"></div><?php block_display('172');?></div></div></div><!--[/diy]-->
        </div>
        <!-- 滚动资讯 -->
<div class="deansidebox">
        	<div class="deanpubtitle">
                <h4>滚动资讯</h4>
                <div class="deanpbright">
                    <a href="#" target="_blank">更多</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="focusBox">
            	<!--[diy=focusBox]--><div id="focusBox" class="area"><div id="framezN4t66" class="frame move-span cl frame-1"><div id="framezN4t66_left" class="column frame-1-c"><div id="framezN4t66_left_temp" class="move-span temp"></div><?php block_display('167');?></div></div></div><!--[/diy]-->
                <a class="prev" href="javascript:void(0)"><</a>
                <a class="next" href="javascript:void(0)">></a>
                <ul class="hd">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <script type="text/javascript">
                jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:300});
            </script>
        </div>

        <!-- 精选资讯 -->
<div class="deansidebox">
        	<div class="deangltt">
                <!--[diy=deangltt2]--><div id="deangltt2" class="area"><div id="framekV6j5p" class="frame move-span cl frame-1"><div id="framekV6j5p_left" class="column frame-1-c"><div id="framekV6j5p_left_temp" class="move-span temp"></div><?php block_display('168');?></div></div></div><!--[/diy]-->
                <div class="clear"></div>
            </div>
            <div class="deangllists">
                <ul>
                    <!--[diy=deangllists]--><div id="deangllists" class="area"><div id="framejLltN7" class="frame move-span cl frame-1"><div id="framejLltN7_left" class="column frame-1-c"><div id="framejLltN7_left_temp" class="move-span temp"></div><?php block_display('169');?></div></div></div><!--[/diy]-->
                </ul>
            </div>
        </div>
        
        <!-- 推荐咨讯 -->
<div class="deansidebox">
        	<div class="deanpubtitle">
                <h4>推荐咨讯</h4>
                <div class="deanpbright">
                    <a href="#" target="_blank">更多</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="deanonvideos">
                <ul>
                    <!--[diy=deangamestt1ss]--><div id="deangamestt1ss" class="area"><div id="framef4VM7z" class="frame move-span cl frame-1"><div id="framef4VM7z_left" class="column frame-1-c"><div id="framef4VM7z_left_temp" class="move-span temp"></div><?php block_display('170');?></div></div></div><!--[/diy]-->
                    <div class="clear"></div>
                </ul>
            </div>
            
        </div>
<!-- 排行榜 -->
<div class="deansidebox">
        	<div class="deanpubtitle">
                <h4>阅读排行榜</h4>
                <div class="deanpbright">
                    <a href="#" target="_blank">更多</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="deanranklistbox">
                <ul>
                    <!--[diy=deanranklistbox]--><div id="deanranklistbox" class="area"><div id="framez8z6uM" class="frame move-span cl frame-1"><div id="framez8z6uM_left" class="column frame-1-c"><div id="framez8z6uM_left_temp" class="move-span temp"></div><?php block_display('173');?></div></div></div><!--[/diy]-->
                </ul>
            </div>
            <script type="text/javascript">
jq(".deanranklistbox ul li").each(function(s){
jq(this).hover(function(){
jq(this).addClass("on").siblings().removeClass("on");
})
})
</script>
        </div>
        <!-- 专访 -->
<div class="deansidebox">
        	<div class="deanpubtitle">
                <h4>专访</h4>
                <div class="deanpbright">
                    <a href="www.5kym.com" target="_blank">更多</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="deanimg_news">
                <!--[diy=deanimg_news]--><div id="deanimg_news" class="area"><div id="framex1CRip" class="frame move-span cl frame-1"><div id="framex1CRip_left" class="column frame-1-c"><div id="framex1CRip_left_temp" class="move-span temp"></div><?php block_display('171');?></div></div></div><!--[/diy]-->
                
                <div class="clear"></div>
            </div>
        </div>
        <!--ads-->
        <div class="deansideads"><!--[diy=deansideads]--><div id="deansideads" class="area"><div id="frameL1m0J9" class="frame move-span cl frame-1"><div id="frameL1m0J9_left" class="column frame-1-c"><div id="frameL1m0J9_left_temp" class="move-span temp"></div><?php block_display('174');?></div></div></div><!--[/diy]--></div>
        
</div>
</div>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div><?php include template('common/footer'); ?>
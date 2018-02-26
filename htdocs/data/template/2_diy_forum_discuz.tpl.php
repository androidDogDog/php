<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');
block_get('10,11,12,13,17,14,15,16');?><?php include template('common/header'); ?>        <!--[diy=diy_chart]--><div id="diy_chart" class="area"></div><!--[/diy]-->
        <div id="pt" class="bm cl">
        	<div class="w1180">
                <?php if(empty($gid) && $announcements) { ?>
                <div class="y">
                    <div id="an">
                        <dl class="cl">
                            <dt class="z xw1">公告:&nbsp;</dt>
                            <dd>
                                <div id="anc"><ul id="ancl"><?php echo $announcements;?></ul></div>
                            </dd>
                        </dl>
                    </div>
                    <script type="text/javascript">announcement();</script>
                </div>
                <?php } ?>
                <div class="z">
                    <a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="forum.php"><?php echo $_G['setting']['navs']['2']['navname'];?></a><?php echo $navigation;?>
                </div>
                <div class="z"><?php if(!empty($_G['setting']['pluginhooks']['index_status_extra'])) echo $_G['setting']['pluginhooks']['index_status_extra'];?></div>
            </div>
        </div>
        
        
        
        <!--首页N格-->
        <div class="deannge">
            <div class="deanltflash">
                <!--[diy=deanltflash]--><div id="deanltflash" class="area"><div id="frameYPgiIk" class="frame move-span cl frame-1"><div id="frameYPgiIk_left" class="column frame-1-c"><div id="frameYPgiIk_left_temp" class="move-span temp"></div><?php block_display('10');?></div></div></div><!--[/diy]-->
                <a class="prev" href="javascript:void(0)"></a>
                <a class="next" href="javascript:void(0)"></a>
            </div>
            <script type="text/javascript">
                jQuery(".deanltflash").slide({ mainCell:".deanpic",effect:"left", autoPlay:true, delayTime:300});
            </script>
            <div class="deanltranklist">
                <div class="deanltranklist_top">
                    <ul>
                        <li class="cur">最新帖子</li>
                        <li>热门帖子</li>
                        <li>推荐帖子</li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="deanbottom_box">
                    <dl>
                        <dd style="display:block;">
                            <div class="deannr_box">
                                <ul>
                                    <!--[diy=deannr_box]--><div id="deannr_box" class="area"><div id="framed4M29P" class="frame move-span cl frame-1"><div id="framed4M29P_left" class="column frame-1-c"><div id="framed4M29P_left_temp" class="move-span temp"></div><?php block_display('11');?></div></div></div><!--[/diy]-->
                                    
                                </ul>
                            </div>
                        </dd>
                        <dd>
                            <div class="deannr_box">
                                <ul>
                                    <!--[diy=deannr_box1]--><div id="deannr_box1" class="area"><div id="frameW8nJlv" class="frame move-span cl frame-1"><div id="frameW8nJlv_left" class="column frame-1-c"><div id="frameW8nJlv_left_temp" class="move-span temp"></div><?php block_display('12');?></div></div></div><!--[/diy]-->
                                </ul>
                            </div>
                        </dd>
                        <dd>
                            <div class="deannr_box">
                                <ul>
                                    <!--[diy=deannr_box2]--><div id="deannr_box2" class="area"><div id="frameI3Zzzi" class="frame move-span cl frame-1"><div id="frameI3Zzzi_left" class="column frame-1-c"><div id="frameI3Zzzi_left_temp" class="move-span temp"></div><?php block_display('13');?></div></div></div><!--[/diy]-->
                                </ul>
                            </div>
                        </dd>
                    </dl>
                </div>
                <script type="text/javascript">
                jQuery(function(){
                    jQuery(".deanltranklist_top li").each(function(a){
                        jQuery(this).click(function(){
                            jQuery(this).addClass("cur").siblings().removeClass("cur");
                            jQuery(".deanbottom_box dd").eq(a).show().siblings().hide();
                            })
                        })
                    })
                </script>
            </div>
            <div class="clear"></div>
        </div>
        <!--工具-->
        <div class="deangzhuyas">
        	<ul>
            	<!--[diy=deangzhuyas]--><div id="deangzhuyas" class="area"><div id="frameC040z0" class="frame move-span cl frame-1"><div id="frameC040z0_left" class="column frame-1-c"><div id="frameC040z0_left_temp" class="move-span temp"></div><?php block_display('17');?></div></div></div><!--[/diy]-->
                <div class="clear"></div>
            </ul>
        </div>

        <?php if(empty($gid)) { ?>
            <?php echo adshow("text/wp a_t");?>        <?php } ?>
        
            <style id="diy_style" type="text/css"></style>
        
        <?php if(empty($gid)) { ?>
            <div class="wp">
                <!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
            </div>
        <?php } ?>
        <div class="w1180">
        <div id="ct" class="wp cl<?php if($_G['setting']['forumallowside']) { ?> ct2<?php } ?>">
        
        <?php if(empty($gid)) { ?>
        <div id="chart" class="bm bw0 cl deanactions fadeIn">
        	
            <p class="chart z">
                <span class="deanjinri">今日<br /><?php echo $todayposts;?></span><span class="deanzuori">昨日<br /><?php echo $postdata['0'];?></span><span class="deantiezishu">帖子<br /><?php echo $posts;?></span><span class="deanshuzi">会员<br /><?php echo $_G['cache']['userstats']['totalmembers'];?></span></p>
            <div class="y">
                <?php if(!empty($_G['setting']['pluginhooks']['index_nav_extra'])) echo $_G['setting']['pluginhooks']['index_nav_extra'];?>
                <?php if($_G['uid']) { ?><a href="forum.php?mod=guide&amp;view=my" title="我的帖子" class="xi2">我的帖子</a><?php } if(!empty($_G['setting']['search']['forum']['status'])) { if($_G['uid']) { ?><span class="pipe">|</span><?php } ?><a href="forum.php?mod=guide&amp;view=new" title="最新回复" class="xi2">最新回复</a><?php } ?>
                <span class="pipe">|</span><?php if($_G['cache']['userstats']['newsetuser']) { ?>欢迎新会员: <em><a href="home.php?mod=space&amp;username=<?php echo rawurlencode($_G['cache']['userstats']['newsetuser']); ?>" target="_blank" class="xi2"><?php echo $_G['cache']['userstats']['newsetuser'];?></a></em><?php } ?>
            </div>
        </div>
        <?php } ?>
            
            
            <div class="mn">
                    <?php if(!empty($_G['setting']['pluginhooks']['index_top'])) echo $_G['setting']['pluginhooks']['index_top'];?>
            
                    <?php if(!empty($_G['cache']['heats']['message'])) { ?>
                        <div class="bm">
                            <div class="bm_h cl">
                                <h2><?php echo $_G['setting']['navs']['2']['navname'];?>热点</h2>
                            </div>
                            <div class="bm_c cl">
                                <div class="heat z">
                                    <?php if(is_array($_G['cache']['heats']['message'])) foreach($_G['cache']['heats']['message'] as $data) { ?>                                        <dl class="xld">
                                            <dt><?php if($_G['adminid'] == 1) { ?><a class="d" href="forum.php?mod=misc&amp;action=removeindexheats&amp;tid=<?php echo $data['tid'];?>" onclick="return removeindexheats()">delete</a><?php } ?>
                                            <a href="forum.php?mod=viewthread&amp;tid=<?php echo $data['tid'];?>" target="_blank" class="xi2"><?php echo $data['subject'];?></a></dt>
                                            <dd><?php echo $data['message'];?></dd>
                                        </dl>
                                    <?php } ?>
                                </div>
                                <ul class="xl xl1 heatl">
                                <?php if(is_array($_G['cache']['heats']['subject'])) foreach($_G['cache']['heats']['subject'] as $data) { ?>                                    <li><?php if($_G['adminid'] == 1) { ?><a class="d" href="forum.php?mod=misc&amp;action=removeindexheats&amp;tid=<?php echo $data['tid'];?>" onclick="return removeindexheats()">delete</a><?php } ?>&middot; <a href="forum.php?mod=viewthread&amp;tid=<?php echo $data['tid'];?>" target="_blank" class="xi2"><?php echo $data['subject'];?></a></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
            
                    <?php if(!empty($_G['setting']['pluginhooks']['index_catlist_top'])) echo $_G['setting']['pluginhooks']['index_catlist_top'];?>
                    <div class="fl bm">
                    <?php if(empty($gid) && !empty($forum_favlist)) { ?>
                        <?php $forumscount = count($forum_favlist);?>                        <?php $forumcolumns = $forumscount > 3 ? ($forumscount == 4 ? 4 : 5) : 1;?>            
                        <?php $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';?>            
                        <div class="bm bmw <?php if($forumcolumns) { ?> flg<?php } ?> cl">
                            <div class="bm_h cl">
                                <span class="o">
                                    <img id="category_0_img" src="<?php echo IMGDIR;?>/<?php echo $collapse['collapseimg_0'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_0');" />
                                </span>
                                <h2><a href="home.php?mod=space&amp;do=favorite&amp;type=forum">我收藏的版块</a></h2>
                            </div>
                            <div id="category_0" class="bm_c" style="<?php echo $collapse['category_0']; ?>">
                                <table cellspacing="0" cellpadding="0" class="fl_tb">
                                    <tr>
                                    <?php $favorderid = 0;?>                                    <?php if(is_array($forum_favlist)) foreach($forum_favlist as $key => $favorite) { ?>                                    <?php if($favforumlist[$favorite['id']]) { ?>
                                    <?php $forum=$favforumlist[$favorite[id]];?>                                    <?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?>                                        <?php if($forumcolumns>1) { ?>
                                            <?php if($favorderid && ($favorderid % $forumcolumns == 0)) { ?>
                                                </tr>
                                                <?php if($favorderid < $forumscount) { ?>
                                                    <tr class="fl_row">
                                                <?php } ?>
                                            <?php } ?>
                                            <td class="fl_g"<?php if($forumcolwidth) { ?> width="<?php echo $forumcolwidth;?>"<?php } ?>>
                                                <div class="fl_icn_g deanfavbks deanactions fadeIn"<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
                                                <?php if($forum['icon']) { ?>
                                                    <?php echo $forum['icon'];?>
                                                <?php } else { ?>
                                                    <a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
                                                <?php } ?>
                                                </div>
                                                <dl<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="margin-left: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
                                                    <dt><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></dt>
            
                                                    <?php if(empty($forum['redirect'])) { ?><dd><em>主题: <?php echo dnumber($forum['threads']); ?></em>, <em>帖数: <?php echo dnumber($forum['posts']); ?></em></dd><?php } ?>
                                                    <dd>
                                                    <?php if($forum['permission'] == 1) { ?>
                                                        私密版块
                                                    <?php } else { ?>
                                                        <?php if($forum['redirect']) { ?>
                                                            <a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
                                                        <?php } elseif(is_array($forum['lastpost'])) { ?>
                                                            <?php if($forumcolumns < 3) { ?>
                                                                <a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
                                                            <?php } else { ?>
                                                                <a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">最后发表: <?php echo $forum['lastpost']['dateline'];?></a>
                                                            <?php } ?>
                                                        <?php } else { ?>
                                                            从未
                                                        <?php } ?>
                                                    <?php } ?>
                                                    </dd>
                                                    <?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
                                                    <?php if(!empty($_G['setting']['pluginhooks']['index_datacollection_extra'][$colletion[ctid]])) echo $_G['setting']['pluginhooks']['index_datacollection_extra'][$colletion[ctid]];?>
                                                </dl>
                                            </td>
                                            <?php $favorderid++;?>                                        <?php } else { ?>
                                            <td class="fl_icn" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
                                                <?php if($forum['icon']) { ?>
                                                    <?php echo $forum['icon'];?>
                                                <?php } else { ?>
                                                    <a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></h2>
                                                <?php if($forum['description']) { ?><p class="xg2"><?php echo $forum['description'];?></p><?php } ?>
                                                <?php if($forum['subforums']) { ?><p>子版块: <?php echo $forum['subforums'];?></p><?php } ?>
                                                <?php if($forum['moderators']) { ?><p>版主: <span class="xi2"><?php echo $forum['moderators'];?></span></p><?php } ?>
                                                <?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
                                            </td>
                                            <td class="fl_i">
                                                <?php if(empty($forum['redirect'])) { ?><span class="xi2"><?php echo dnumber($forum['threads']); ?></span><span class="xg1"> / <?php echo dnumber($forum['posts']); ?></span><?php } ?>
                                            </td>
                                            <td class="fl_by">
                                                <div>
                                                <?php if($forum['permission'] == 1) { ?>
                                                    私密版块
                                                <?php } else { ?>
                                                    <?php if($forum['redirect']) { ?>
                                                        <a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
                                                    <?php } elseif(is_array($forum['lastpost'])) { ?>
                                                        <a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
                                                    <?php } else { ?>
                                                        从未
                                                    <?php } ?>
                                                <?php } ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="fl_row">
            
                                        <?php } ?>
                                    <?php } ?>
                                    <?php } ?>
                                    <?php if(($columnspad = $favorderid % $forumcolumns) > 0) { echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);; } ?>
                                    </tr>
                                </table>
            
                            </div>
                        </div>
                        <?php echo adshow("intercat/bm a_c/-1");?>                    <?php } ?>
                    <?php if(is_array($catlist)) foreach($catlist as $key => $cat) { ?>                        <?php if(!empty($_G['setting']['pluginhooks']['index_catlist'][$cat[fid]])) echo $_G['setting']['pluginhooks']['index_catlist'][$cat[fid]];?>
                        <div class="bm bmw <?php if($cat['forumcolumns']) { ?> flg<?php } ?> cl">
                            <div class="bm_h cl">
                                <span class="o">
                                    <img id="category_<?php echo $cat['fid'];?>_img" src="<?php echo IMGDIR;?>/<?php echo $cat['collapseimg'];?>" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_<?php echo $cat['fid'];?>');" />
                                </span>
                                <?php if($cat['moderators']) { ?><span class="y">分区版主: <?php echo $cat['moderators'];?></span><?php } ?>
                                <?php $caturl = !empty($cat['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$cat['domain'].'.'.$_G['setting']['domain']['root']['forum'] : '';?>                                <h4><a href="<?php if(!empty($caturl)) { ?><?php echo $caturl;?><?php } else { ?>forum.php?gid=<?php echo $cat['fid'];?><?php } ?>" style="<?php if($cat['extra']['namecolor']) { ?>color: <?php echo $cat['extra']['namecolor'];?>;<?php } ?>"><?php echo $cat['name'];?></a></h4>
                            </div>
                            <div id="category_<?php echo $cat['fid'];?>" class="bm_c" style="<?php echo $collapse['category_'.$cat['fid']]; ?>">
                                <table cellspacing="0" cellpadding="0" class="fl_tb">
                                    <tr>
                                    <?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { ?>                                    <?php $forum=$forumlist[$forumid];?>                                    <?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?>                                    <?php if($cat['forumcolumns']) { ?>
                                        <?php if($forum['orderid'] && ($forum['orderid'] % $cat['forumcolumns'] == 0)) { ?>
                                            </tr>
                                            <?php if($forum['orderid'] < $cat['forumscount']) { ?>
                                                <tr class="fl_row">
                                            <?php } ?>
                                        <?php } ?>
                                        <td class="fl_g" width="<?php echo $cat['forumcolwidth'];?>">
                                            <div class="fl_icn_g deanbbs_icon deanactions fadeIn"<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
                                            <?php if($forum['icon']) { ?>
                                                <?php echo $forum['icon'];?>
                                            <?php } else { ?>
                                                <a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
                                            <?php } ?>
                                            <?php if($forum['todayposts'] && !$forum['redirect']) { ?>
                                                <div class="deantodayposts_bbs" title="今日"> <?php echo $forum['todayposts'];?></div>
                                            <?php } ?>
                                            </div>
                                            <dl<?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="margin-left: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
                                                <dt>
                                                	<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a>
                                                    
                                                    
                                                </dt>
                                                <?php if(empty($forum['redirect'])) { ?>
                                                    <em>主题: <?php echo dnumber($forum['threads']); ?></em>&nbsp;<em>帖数: <?php echo dnumber($forum['posts']); ?></em>
                                                    <?php } ?>
                                                <?php if($forum['description']) { ?><dd class="xg2"><?php echo $forum['description'];?></dd><?php } ?>
                                                
                                                <dd>
                                                <?php if($forum['permission'] == 1) { ?>
                                                    私密版块
                                                <?php } else { ?>
                                                    <?php if($forum['redirect']) { ?>
                                                        <a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
                                                    <?php } elseif(is_array($forum['lastpost'])) { ?>
                                                        <?php if($cat['forumcolumns'] < 3) { ?>
                                                            <a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
                                                        <?php } else { ?>
                                                            <a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost">最后发表: <?php echo $forum['lastpost']['dateline'];?></a>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <em>本版还没有任何帖子</em>
                                                    <?php } ?>
                                                <?php } ?>
                                                </dd>
                                                <?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
                                                <?php if(!empty($_G['setting']['pluginhooks']['index_followcollection_extra'][$colletion[ctid]])) echo $_G['setting']['pluginhooks']['index_followcollection_extra'][$colletion[ctid]];?>
                                            </dl>
                                        </td>
                                    <?php } else { ?>
                                        <td class="fl_icn" <?php if(!empty($forum['extra']['iconwidth']) && !empty($forum['icon'])) { ?> style="width: <?php echo $forum['extra']['iconwidth'];?>px;"<?php } ?>>
                                            <?php if($forum['icon']) { ?>
                                                <?php echo $forum['icon'];?>
                                            <?php } else { ?>
                                                <a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <h2><a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a><?php if($forum['todayposts'] && !$forum['redirect']) { ?><em class="xw0 xi1" title="今日"> (<?php echo $forum['todayposts'];?>)</em><?php } ?></h2>
                                            <?php if($forum['description']) { ?><p class="xg2"><?php echo $forum['description'];?></p><?php } ?>
                                            <?php if($forum['subforums']) { ?><p>子版块: <?php echo $forum['subforums'];?></p><?php } ?>
                                            <?php if($forum['moderators']) { ?><p>版主: <span class="xi2"><?php echo $forum['moderators'];?></span></p><?php } ?>
                                            <?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
                                        </td>
                                        <td class="fl_i">
                                            <?php if(empty($forum['redirect'])) { ?><span class="xi2"><?php echo dnumber($forum['threads']); ?></span><span class="xg1"> / <?php echo dnumber($forum['posts']); ?></span><?php } ?>
                                        </td>
                                        <td class="fl_by">
                                            <div>
                                            <?php if($forum['permission'] == 1) { ?>
                                                私密版块
                                            <?php } else { ?>
                                                <?php if($forum['redirect']) { ?>
                                                    <a href="<?php echo $forumurl;?>" class="xi2">链接到外部地址</a>
                                                <?php } elseif(is_array($forum['lastpost'])) { ?>
                                                    <a href="forum.php?mod=redirect&amp;tid=<?php echo $forum['lastpost']['tid'];?>&amp;goto=lastpost#lastpost" class="xi2"><?php echo cutstr($forum['lastpost']['subject'], 30); ?></a> <cite><?php echo $forum['lastpost']['dateline'];?> <?php if($forum['lastpost']['author']) { ?><?php echo $forum['lastpost']['author'];?><?php } else { ?><?php echo $_G['setting']['anonymoustext'];?><?php } ?></cite>
                                                <?php } else { ?>
                                                    从未
                                                <?php } ?>
                                            <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="fl_row">
                                    <?php } ?>
                                    <?php } ?>
                                    <?php echo $cat['endrows'];?>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <?php echo adshow("intercat/bm a_c/$cat[fid]");?>                    <?php } ?>
                    </div>
            
                    <?php if(!empty($_G['setting']['pluginhooks']['index_middle'])) echo $_G['setting']['pluginhooks']['index_middle'];?>
                    <div class="mtn">
                        <!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
                    </div>
            
                    <?php if(empty($gid) && $_G['setting']['whosonlinestatus']) { ?>
                        <div id="online" class="bm oll">
                            <div class="bm_h">
                            <?php if($detailstatus) { ?>
                                <span class="o"><a href="forum.php?showoldetails=no#online" title="收起/展开"><img src="<?php echo IMGDIR;?>/collapsed_no.gif" alt="收起/展开" /></a></span>
                                <h3>
                                    <strong><a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">在线会员</a></strong>
                                    <span class="xs1">- <strong><?php echo $onlinenum;?></strong> 人在线
                                    - <strong><?php echo $membercount;?></strong> 会员(<strong><?php echo $invisiblecount;?></strong> 隐身),
                                    <strong><?php echo $guestcount;?></strong> 位游客
                                    - 最高记录是 <strong><?php echo $onlineinfo['0'];?></strong> 于 <strong><?php echo $onlineinfo['1'];?></strong>.</span>
                                </h3>
                            <?php } else { ?>
                                <?php if(empty($_G['setting']['sessionclose'])) { ?>
                                    <span class="o"><a href="forum.php?showoldetails=yes#online" title="收起/展开"><img src="<?php echo IMGDIR;?>/collapsed_yes.gif" alt="收起/展开" /></a></span>
                                <?php } ?>
                                <h3>
                                    <strong>
                                        <?php if(!empty($_G['setting']['whosonlinestatus'])) { ?>
                                            在线会员
                                        <?php } else { ?>
                                            <a href="home.php?mod=space&amp;do=friend&amp;view=online&amp;type=member">在线会员</a>
                                        <?php } ?>
                                    </strong>
                                    <span class="xs1">- 总计 <strong><?php echo $onlinenum;?></strong> 人在线
                                    <?php if($membercount) { ?>- <strong><?php echo $membercount;?></strong> 会员,<strong><?php echo $guestcount;?></strong> 位游客<?php } ?>
                                    - 最高记录是 <strong><?php echo $onlineinfo['0'];?></strong> 于 <strong><?php echo $onlineinfo['1'];?></strong>.</span>
                                </h3>
                            <?php } ?>
                            </div>
                        <?php if($_G['setting']['whosonlinestatus'] && $detailstatus) { ?>
                            <dl id="onlinelist" class="bm_c">
                                <dt class="ptm pbm bbda"><?php echo $_G['cache']['onlinelist']['legend'];?></dt>
                                <?php if($detailstatus) { ?>
                                    <dd class="ptm pbm">
                                    <ul class="cl">
                                    <?php if($whosonline) { ?>
                                        <?php if(is_array($whosonline)) foreach($whosonline as $key => $online) { ?>                                            <li title="时间: <?php echo $online['lastactivity'];?>">
                                            <img src="<?php echo STATICURL;?>image/common/<?php echo $online['icon'];?>" alt="icon" />
                                            <?php if($online['uid']) { ?>
                                                <a href="home.php?mod=space&amp;uid=<?php echo $online['uid'];?>"><?php echo $online['username'];?></a>
                                            <?php } else { ?>
                                                <?php echo $online['username'];?>
                                            <?php } ?>
                                            </li>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <li style="width: auto">当前只有游客或隐身会员在线</li>
                                    <?php } ?>
                                    </ul>
                                </dd>
                                <?php } ?>
                            </dl>
                        <?php } ?>
                        </div>
                    <?php } ?>
                    <?php if(empty($gid) && ($_G['cache']['forumlinks']['0'] || $_G['cache']['forumlinks']['1'] || $_G['cache']['forumlinks']['2'])) { ?>
                    <div class="bm lk">
                        <div id="category_lk" class="bm_c ptm">
                            <?php if($_G['cache']['forumlinks']['0']) { ?>
                                <ul class="m mbn cl"><?php echo $_G['cache']['forumlinks']['0'];?></ul>
                            <?php } ?>
                            <?php if($_G['cache']['forumlinks']['1']) { ?>
                                <div class="mbn cl">
                                    <?php echo $_G['cache']['forumlinks']['1'];?>
                                </div>
                            <?php } ?>
                            <?php if($_G['cache']['forumlinks']['2']) { ?>
                                <ul class="x mbm cl">
                                    <?php echo $_G['cache']['forumlinks']['2'];?>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(!empty($_G['setting']['pluginhooks']['index_bottom'])) echo $_G['setting']['pluginhooks']['index_bottom'];?>
                </div>
            <?php if($_G['setting']['forumallowside']) { ?>
                <div id="sd" class="sd">
                    <?php if(!empty($_G['setting']['pluginhooks']['index_side_top'])) echo $_G['setting']['pluginhooks']['index_side_top'];?>
                    <div class="drag">
                        <!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
                    </div>
                    <!--推荐阅读-->
                    <div class="deansidebox deanactions fadeIn">
                    	<div class="deansidetops">
                        	<span>推荐阅读</span>
                            <a href="#" target="_blank">更多</a>
                            <div class="clear"></div>
                        </div>
                        <div class="deantuijianbox">
                        	<!--[diy=deantuijianbox]--><div id="deantuijianbox" class="area"><div id="framec8DG82" class="frame move-span cl frame-1"><div id="framec8DG82_left" class="column frame-1-c"><div id="framec8DG82_left_temp" class="move-span temp"></div><?php block_display('14');?></div></div></div><!--[/diy]-->
                        	
                        </div>
                        <div class="deansdlists">
                        	<ul>
                            	<!--[diy=deansdlists]--><div id="deansdlists" class="area"><div id="frameC6K3Uf" class="frame move-span cl frame-1"><div id="frameC6K3Uf_left" class="column frame-1-c"><div id="frameC6K3Uf_left_temp" class="move-span temp"></div><?php block_display('15');?></div></div></div><!--[/diy]-->
                            	
                            </ul>
                        </div>
                    </div>
                    <!--ads-->
                    <div class="deansidebox deanactions fadeIn">
                    	<div class="deansidetops">
                        	<span>广告位</span>
                            <div class="clear"></div>
                        </div>
                        <div class="deanadsside">
                        	<!--[diy=deanadsside]--><div id="deanadsside" class="area"><div id="frameS5McCH" class="frame move-span cl frame-1"><div id="frameS5McCH_left" class="column frame-1-c"><div id="frameS5McCH_left_temp" class="move-span temp"></div><?php block_display('16');?></div></div></div><!--[/diy]-->
                        	
                        </div>
                    </div>
                    <?php if(!empty($_G['setting']['pluginhooks']['index_side_bottom'])) echo $_G['setting']['pluginhooks']['index_side_bottom'];?>
                </div>
            <?php } ?>
        </div>
    </div>
    

<?php if($_G['group']['radminid'] == 1) { helper_manyou::checkupdate();?><?php } if(empty($_G['setting']['disfixednv_forumindex']) ) { ?><script>fixed_top_nv();</script><?php } include template('common/footer'); ?>
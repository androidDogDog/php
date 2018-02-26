<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
	</div>
<?php if(empty($topic) || ($topic['usefooter'])) { $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="关闭">关闭</a>
<h2>
<?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>站长推荐<?php } ?>
<span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="上一条" title="上一条" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/<?php echo $focusnum;?></em> <img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="下一条" title="下一条" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
</h2>
</div>
<div class="bm_c" id="focus_con">
</div>
</div>
</div><?php $focusi = 0;?><?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
<dl class="xld cl bbda">
<dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
<?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
<dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
</dl>
<p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">查看 &raquo;</a></p>
</div><?php $focusi ++;?><?php } ?>
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
if(focusnum < 2) {
$('focus_ctrl').style.display = 'none';
}
if(!$('focuscur').innerHTML) {
var randomnum = parseInt(Math.round(Math.random() * focusnum));
$('focuscur').innerHTML = Math.max(1, randomnum);
}
showfocus();
var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<div class="focus patch" id="patch_notice"></div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>
    
    <div class="deanfooter">
    	<!--<div class="deanfttop">
        	<div class="w1180">
            	<div class="deanfttl">
                	<div class="deanftlogo"><img src="<?php echo $_G['style']['styleimgdir'];?>/ftlogo.png" /></div>
                    <div class="deanftguanzhu">
                    	<div class="deanftgzpic">
                        	<img src="<?php echo $_G['style']['styleimgdir'];?>/footer/erweima.png" />
                            <span>关注官方微信</span>
                        </div>
                        <div class="deanftgzingo">
                        	<p>微信号：dean_green</p>
                            <p>微博：blueFresh素材大全</p>
                            <p>QQ1群：45163589</p>
                            <p>QQ2群：54765476</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                </div>
                <div class="deanfttm">
                	<ul>
                    	<li>
                        	<h5>模板源码</h5>
                            <a href="http://www.5kym.com" target="_blank">WordPress模板</a>
                            <a href="http://www.5kym.com" target="_blank">Magento模板</a>
                            <a href="http://www.5kym.com" target="_blank">Joomla模板</a>
                            <a href="http://www.5kym.com" target="_blank">PrestaShop模板</a>
                            <a href="http://www.5kym.com" target="_blank">响应式模板</a>
                            <a href="http://www.5kym.com" target="_blank">PPT模板</a>
                        </li>
                        <li>
                        	<h5>素材种类</h5>
                            <a href="http://www.5kym.com" target="_blank">AE/PR模板</a>
                            <a href="http://www.5kym.com" target="_blank">CG模型</a>
                            <a href="http://www.5kym.com" target="_blank">PS笔刷/字体设计</a>
                            <a href="http://www.5kym.com" target="_blank">PPT模板</a>
                            <a href="http://www.5kym.com" target="_blank">高清背景图</a>
                            <a href="http://www.5kym.com" target="_blank">UI/PSD素材</a>
                        </li>
                        <li>
                        	<h5>关于我们</h5>
                            <a href="http://www.5kym.com" target="_blank">关于我们</a>
                            <a href="http://www.5kym.com" target="_blank">联系我们</a>
                            <a href="http://www.5kym.com" target="_blank">友情链接</a>
                            <a href="http://www.5kym.com" target="_blank">帮助中心</a>
                            <a href="http://www.5kym.com" target="_blank">权益保障</a>
                            <a href="http://www.5kym.com" target="_blank">下载须知</a>
                        </li>
                        <li>
                        	<h5>网站功能</h5>
                            <a href="http://www.5kym.com" target="_blank">视频教程</a>
                            <a href="http://www.5kym.com" target="_blank">作品展示</a>
                            <a href="http://www.5kym.com" target="_blank">上传下载</a>
                            <a href="http://www.5kym.com" target="_blank">成为VIP</a>
                            <a href="http://www.5kym.com" target="_blank">版权声明</a>
                            <a href="http://www.5kym.com" target="_blank">寻找灵感</a>
                        </li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="deanfttr">
                    <div class="deanfttels">
                    	<i></i>
                        <div class="deanfttelr">
                        	<h3>全国服务热线:</h3>
                            <p>400-123-456789</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="deantelbtms">（工作日：周一至周五 9:00-16:00）</div>
                    <div class="deanftitelsd">北京市www.5kym.com</div>
                    <div class="deanftitelem">www@5kym.com</div>
                    <div class="deankfqq"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=125422921&amp;site=qq&amp;menu=yes" target="_blank">QQ在线客服</a></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>-->
        <div class="deanftbottom">
                <p class="deanpp">
                    
                    <?php if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
                            !$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile' || $nav['id'] == 'darkroom'))) { ?><?php echo $nav['code'];?><span class="pipe">-</span><?php } } ?>
                            <a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a>
                    
                    <?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
                    <?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><?php } ?>
                </p>
                <p>
                    Powered by <a href="http://www.5kym.com" target="_blank">wfdsoft!</a> <em><?php echo $_G['setting']['version'];?></em><?php if(!empty($_G['setting']['boardlicensed'])) { ?> <a href="http://license.comsenz.com/?pid=1&amp;host=<?php echo $_SERVER['HTTP_HOST'];?>" target="_blank">Licensed</a><?php } ?>&copy; 2001-2013 <a href="http://www.5kym.com" target="_blank">wfdsoft Inc.</a>&nbsp;&nbsp;<?php if($_G['setting']['icp']) { ?><a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $_G['setting']['icp'];?></a><?php } ?>
                </p>
                <div class="deanbutNav">
                  <a title="工商网监" href="http://www.5kym.com" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/footer/botpic_r1_c4.png"></a>
                  <a title="安全联盟实名认证" href="http://www.5kym.com" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/footer/botpic_r1_c1.jpg"></a>
                  <a href="http://www.5kym.com" target="_blank">
                  <img src="<?php echo $_G['style']['styleimgdir'];?>/footer/botpic_r1_c5.png" width="100" alt="安全联盟认证"/>
                  </a>
                  <a title="财付通" href="http://www.5kym.com" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/footer/botpic_r1_c2.jpg"></a>
                  <a title="支付宝" href="http://www.5kym.com" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/footer/botpic_r1_c3.jpg"></a>
                </div>
            </div>
    </div>
    
<div id="ft" style=" display:none;"><?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>隐身<?php } else { ?>在线<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script>
<?php } ?>
</div>
<?php } ?>
<div style="display:none"><script src="http://s11.cnzz.com/z_stat.php?id=1256403958&web_id=1256403958" type="text/javascript" language="JavaScript"></script></div>
<?php if(!$_G['setting']['bbclosed']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?>
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?>
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<script type="text/javascript">patchNotice();</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])) { ?>
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script>
<?php } if(!$_G['setting']['bbclosed'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])) { ?>
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } if(($_G['member']['newpm'] || $_G['member']['newprompt']) && empty($_G['cookie']['ignore_notice'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html5notification.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var h5n = new Html5notification();
if(h5n.issupport()) {
<?php if($_G['member']['newpm'] && $_GET['do'] != 'pm') { ?>
h5n.shownotification('pm', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=pm', '<?php echo avatar($_G[uid],small,true);?>', '新的短消息', '有新的短消息，快去看看吧');
<?php } if($_G['member']['newprompt'] && $_GET['do'] != 'notice') { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { $noticetitle = lang('template', 'notice_'.$key);?>h5n.shownotification('notice_<?php echo $key;?>', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=notice&view=<?php echo $key;?>', '<?php echo avatar($_G[uid],small,true);?>', '<?php echo $noticetitle;?> (<?php echo $val;?>)', '有新的提醒，快去看看吧');
<?php } } ?>
}
</script>
<?php } ?>
<div style="display:none"><script src="http://s11.cnzz.com/z_stat.php?id=1256403958&web_id=1256403958" type="text/javascript" language="JavaScript"></script></div><?php userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<div id="scrolltop" style="display:none;">
<?php if($_G['fid'] && $_G['mod'] == 'viewthread') { } ?>
<span hidefocus="true"><a title="返回顶部" onclick="window.scrollTo('0','0')" id="scrolltopa" ><b>返回顶部</b></a></span>
<?php if($_G['fid']) { ?>
<span>
<?php if($_G['mod'] == 'viewthread') { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" hidefocus="true" class="returnlist" title="返回列表"><b>返回列表</b></a>
<?php } else { ?>
<a href="forum.php" hidefocus="true" class="returnboard" title="返回版块"><b>返回版块</b></a>
<?php } ?>
</span>
<?php } ?>
</div>


<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
<?php } if(isset($_G['makehtml'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html2dynamic.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var html_lostmodify = <?php echo TIMESTAMP;?>;
htmlGetUserStatus();
<?php if(isset($_G['htmlcheckupdate'])) { ?>
htmlCheckUpdate();
<?php } ?>
</script>
<?php } output();?></body>
</html>

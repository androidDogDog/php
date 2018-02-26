<?php echo 'www.5kym.com';exit;?>
<div class="z dean_bbtj">±¾°æ{lang forum_recommend}</div>
<!--{if $_G['forum']['recommendlist']['images'] && $_G['forum']['modrecommend']['imagenum']}-->
<div class="z dean_fdtp">
	<div class="bd">
		<ul>
			<!--{loop $_G['forum']['recommendlist']['images'] $k $imginfo}-->
			<li>
				<a href="forum.php?mod=viewthread&tid=$imginfo[tid]" title="$imginfo[subject]" target="_blank"><img src="$imginfo[filename]"/></a>
			</li>
			<!--{/loop}-->
		</ul>
	</div>
	<div class="hd">
		<ul class="cl dean_tir"></ul>
	</div>
<script type="text/javascript">jQuery(".dean_fdtp").slide({titCell:".dean_tir",mainCell:".bd ul",autoPage:true,effect:"fold",autoPlay:true}); </script>
</div>
<ul class="z cl xe1 mbm dean_fdtl <!--{if !$_G['forum']['allowside']}-->k<!--{/if}-->">
<!--{else}-->
<ul class="z cl xe2 mbm dean_fdtl <!--{if !$_G['forum']['allowside']}-->k<!--{/if}-->">
<!--{/if}-->
<!--{eval unset($_G['forum']['recommendlist']['images']);}-->
<!--{loop $_G['forum']['recommendlist'] $rtid $recommend}-->
	<li class="dean_bgimg"><a href="forum.php?mod=viewthread&tid=$rtid" $recommend[subjectstyles] target="_blank">$recommend[subject]</a></li>
<!--{/loop}-->
</ul>




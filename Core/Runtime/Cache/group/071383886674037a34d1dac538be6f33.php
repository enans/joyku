<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<!--引入后前台公共public的模版文件 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($seo["title"]); ?>_<?php echo ($seo["subtitle"]); ?></title>
<?php if(!empty($seo["keywords"])): ?><meta name="keywords" content="<?php echo ($seo["keywords"]); ?>" /><?php endif; ?>
<?php if(!empty($seo["description"])): ?><meta name="description" content="<?php echo ($seo["description"]); ?>" /><?php endif; ?>
<meta property="qc:admins" content="12472730776130006375" />
<link rel="shortcut icon" href="__PUBLIC__/images/fav.ico" type="image/x-icon">
<link rel="icon" href="__PUBLIC__/images/fav.gif" type="image/gif" />
__SITE_THEME_CSS__
<!--[if gte IE 7]><!-->
    <link href="__PUBLIC__/js/dialog/skins5/idialog.css" rel="stylesheet" />
<!--<![endif]-->
<!--[if lt IE 7]>
    <link href="__PUBLIC__/js/dialog/skins5/idialog.css" rel="stylesheet" />
<![endif]-->
<script>var siteUrl = '__SITE_URL__',show_login_url='<?php echo U("public/user/ajaxlogin");?>',show_register_url='<?php echo U("public/user/ajaxregister");?>';</script>
<script src="__PUBLIC__/js/jquery.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/common.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/IK.js" type="text/javascript" data-cfg-autoload="false"></script>
<script src="__PUBLIC__/js/all.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="__PUBLIC__/js/html5.js"></script>
<![endif]-->
<script src="__PUBLIC__/js/dialog/jquery.artDialog.min5.js" type="text/javascript"></script> 
__EXTENDS_JS__
<!--<script src="http://l.tbcdn.cn/apps/top/x/sdk.js?appkey=21509482"></script>-->

</head>

<body>
<!--引入后前台公共public的模版文件 -->
<!--头部开始-->
<header>
<?php if($app_name == 'public' && empty($visitor) && $module_name == 'index'): ?><div class="hd-wrap">
            <div class="hd" id="anony-nav">
                <div class="logo">
                    <h1><a href="__SITE_URL__" title="爱客开源">爱客开源</a></h1>
                </div>
                <div class="anony-srh">
                <form onsubmit="return searchForm(this);" method="post" action="<?php echo U('public/search/index');?>">
                <span class="inp"><input type="text" autocomplete="off" placeholder="书籍、电影、音乐、小组、小站、成员" size="12" maxlength="60" class="key" name="q"></span>
                <span class="bn"><input type="submit" value="搜索"></span>
                </form>
                </div>
                
                <div class="top-nav-items">
                <ul>
                <li><a href="__SITE_URL__" class="lnk-home" target="_blank">爱客首页</a></li>
                <li><a href="<?php echo U('group/index/index');?>" class="lnk-group" target="_blank">爱客小组</a></li>
                <li><a href="<?php echo U('article/index/index');?>" class="lnk-article" target="_blank">爱客阅读</a></li>
                <li><a href="<?php echo U('location/index/index');?>" class="lnk-location" target="_blank">爱客同城</a></li>
                <li><a href="<?php echo U('site/index/index');?>" class="lnk-site" target="_blank">爱客小站</a></li>
                <li><a href="<?php echo U('mall/index/index');?>" class="lnk-mall" target="_blank">爱客商城</a></li>
                </ul>
                </div>
            </div>
</div>
<?php else: ?>
<div class="top_nav">
  <div class="top_bd">
    
    <div class="top_info">
        <?php if(empty($visitor)): ?><a href="<?php echo U('public/user/login');?>">登录</a> | <a href="<?php echo U('public/user/register');?>">注册</a> | <a href="<?php echo U('public/oauth/index', array('mod'=>'qq'));?>" target="_blank" style="margin-left:10px"><img  align="absmiddle" title="QQ登录" src="__PUBLIC__/images/connect_qq.png"> 登录</a> | <a href="<?php echo U('public/oauth/index', array('mod'=>'sina'));?>" target="_blank" style="margin-left:10px"><img  align="absmiddle" title="新浪微博" src="__PUBLIC__/images/connect_sina_weibo.png"> 登录</a>    
        <?php else: ?>
        <a id="newmsg" href="<?php echo U('public/message/ikmail',array('d'=>'inbox'));?>">新消息(<?php echo ($count_new_msg); ?>)</a> | 
        <a href="<?php echo U('space/index/index', array('id'=>$visitor['doname']));?>">
        	<?php echo ($visitor["username"]); ?>
        </a> | 
        <a href="<?php echo U('public/user/setbase');?>">设置</a> | 
        <a href="<?php echo U('public/user/logout');?>">退出</a><?php endif; ?>
    </div>


    <div class="top_items">
        <ul>
             <?php if(is_array($topNav)): foreach($topNav as $key=>$item): ?><li><a href="<?php echo ($item[url]); ?>" title="<?php echo ($item[name]); ?>"><?php echo ($item[name]); ?></a></li><?php endforeach; endif; ?>
             <li><a href="<?php echo U('develop/index/index');?>">应用商店</a></li>
             <li><a href="<?php echo U('public/help/download');?>" style="color:#fff">IKPHP源码下载</a></li>                                                      
        </ul>
    </div>
  	<div class="cl"></div>
    
  </div>
  
</div><?php endif; ?>
<!--APP NAV-->

</header>

<?php if($app_name == 'public' && !empty($visitor)): ?><div id="header">
    
	<div class="site_nav">
        <div class="<?php echo ($logo[style]); ?>">
            <a href="<?php echo ($logo[url]); ?>"><?php echo ($logo[name]); ?></a>
        </div>
		<div class="appnav">
			    <ul id="nav_bar">
                    <?php if(is_array($arrNav)): foreach($arrNav as $key=>$item): ?><li><a href="<?php echo ($item[url]); ?>" class="a_<?php echo ($key); ?>"><?php echo ($item[name]); ?></a></li><?php endforeach; endif; ?>
			    </ul>
		   <form onsubmit="return searchForm(this);" method="post" action="<?php echo U('public/search/index');?>">
                <input type="hidden" value="all" name="type">
                <div id="search_bar">
                    <div class="inp"><input type="text" placeholder="小组、话题、日志、成员、小站" value="" class="key" name="q"></div>
                    <div class="inp-btn"><input type="submit" class="search-button" value="搜索"></div>
                </div>
		    </form>
		</div>
        <div class="cl"></div>
	</div>
        
</div><?php endif; ?>
<!--header-->
<div id="header">
    
	<div class="site_nav">
        <div class="<?php echo ($logo[style]); ?>">
            <a href="<?php echo ($logo[url]); ?>"><?php echo ($logo[name]); ?></a>
        </div>
		<div class="appnav">
			    <ul id="nav_bar">
                    <?php if(is_array($arrNav)): foreach($arrNav as $key=>$item): ?><li><a href="<?php echo ($item[url]); ?>" class="a_<?php echo ($key); ?>"><?php echo ($item[name]); ?></a></li><?php endforeach; endif; ?>
			    </ul>
		   <form onsubmit="return searchForm(this);" method="post" action="<?php echo U('public/search/index');?>">
                <input type="hidden" value="all" name="type">
                <div id="search_bar">
                    <div class="inp"><input type="text" placeholder="小组、话题、日志、成员、小站" value="" class="key" name="q"></div>
                    <div class="inp-btn"><input type="submit" class="search-button" value="搜索"></div>
                </div>
		    </form>
		</div>
        <div class="cl"></div>
	</div>
        
</div>

<div class="midder">
<div class="mc">
<h1 class="group_tit">
<?php echo ($seo["title"]); ?>
</h1>

<form method="POST" action="<?php echo ($action); ?>" onsubmit="return newTopicFrom(this)"  enctype="multipart/form-data" id="form_tipic">
<table width="100%" cellpadding="0" cellspacing="0" class="table_1">

	<tr>
    	<th>标题：</th>
		<td><input style="width:400px;" type="text" value="<?php echo ($strTopic[title]); ?>" maxlength="100" size="50" name="title" gtbfieldid="2" class="txt"   placeholder="请填写标题"></td>
    </tr>	
    <tr><th>&nbsp;</th>
        <td align="left" style="padding:0px 10px">
        <a href="javascript:;" id="addImg">添加图片</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="javascript:;" id="addVideo">添加视频</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="javascript:;" id="addLink">添加链接</a>
        </td>
    </tr>
    <tr>
        <th>内容：</th><td><textarea style="width:99.5%;height:300px;" id="editor_full" cols="55" rows="20" name="content" class="txt"   placeholder="请填写内容"><?php echo ($strTopic[content]); ?></textarea></td>
    </tr>
    <tr>
        <th>评论：</th>
        <td><input type="radio" checked="select" name="iscomment" value="0" />允许 <input type="radio" name="iscomment" value="1" />不允许</td>
    </tr>	
    <tr>
    	<th>&nbsp;</th><td>
        <input type="hidden" name="groupid" value="<?php echo ($strGroup[groupid]); ?>" />
        <input type="hidden" name="topic_id" value="<?php echo ($topic_id); ?>" id="topic_id" />
        <input class="submit" type="submit" value="好啦，发布"> <a href="<?php echo U('group/index/show',array('id'=>$strGroup[groupid]));?>">返回</a>
        </td>
    </tr>
</table>
<style>
.item-thumb-list{ padding-left:110px}
.thumblst { width:580px;min-width:580px;}
.thumblst .details textarea { width:90%; }
.thumblst { min-height: 140px; min-width: 600px; border: 1px solid #d3d3d3; background:#f0f0f0; padding: 10px 12px; margin: 3px 0 7px }
.thumblst .thumb { float: left; width: 160px; overflow:hidden;}
.thumblst .thumb img { max-width: 130px; _width: 130px }
.thumblst .thumb .pl { padding:0px; margin-bottom:5px; }
.thumblst .details { float: right; width: 419px;}
.thumblst .details .rr {float: right;}
.thumblst .details p{ margin-bottom:5px;}
.thumblst .details textarea{ width: 410px; height:66px;border:1px solid #ccc;}
.alignleft{background:url(__PUBLIC__/images/align_left.png) no-repeat;padding:0 6px 0 25px}
.aligncenter{background:url(__PUBLIC__/images/align_center.png) no-repeat;padding:0 6px 0 25px}
.alignright{background:url(__PUBLIC__/images/align_right.png) no-repeat;padding:0 6px 0 25px}
</style>
<div id="thumblst" class="item item-thumb-list">
    <?php if(is_array($arrPhotos)): foreach($arrPhotos as $key=>$item): ?><div class="thumblst">
      <div class="details">
        <p>图片描述（30字以内）</p>
        <textarea name="photodesc[]" maxlength="30"><?php echo ($item[title]); ?></textarea>
        <input type="hidden" name="seqid[]" value="<?php echo ($item[seqid]); ?>" >
        <br>
        <br>
        图片位置<br>
        <a onclick="javascript:removePhoto(this, '<?php echo ($item[seqid]); ?>');return false;" class="minisubmit rr j a_remove_pic" name="rm_p_<?php echo ($item[seqid]); ?>" ajaxurl="<?php echo U('public/images/delete');?>" imgid="<?php echo ($item[id]); ?>">删除</a>
        <label>
         <?php if($item[align] == 'L'): ?><input type="radio" name="layout_<?php echo ($item[seqid]); ?>"  checked  value="L" >
         <?php else: ?>
         <input type="radio" name="layout_<?php echo ($item[seqid]); ?>"   value="L" ><?php endif; ?>
          <span class="alignleft">居左</span></label>
        <label>
          <?php if($item[align] == 'C'): ?><input type="radio" name="layout_<?php echo ($item[seqid]); ?>" checked value="C" >
          <?php else: ?>
          <input type="radio" name="layout_<?php echo ($item[seqid]); ?>" value="C" ><?php endif; ?>
          <span class="aligncenter">居中</span></label>
        <label>
          <?php if($item[align] == 'R'): ?><input type="radio" name="layout_<?php echo ($item[seqid]); ?>" checked value="R" >
          <?php else: ?>
          <input type="radio" name="layout_<?php echo ($item[seqid]); ?>" value="R" ><?php endif; ?>
          <span class="alignright">居右</span></label>
      </div>
      <div class="thumb">
        <div class="pl">[图片<?php echo ($item[seqid]); ?>]</div>
        <img src="<?php echo ($item[simg]); ?>">
      </div>
      	<div class="clear"></div>
    </div><?php endforeach; endif; ?>

</div>
<div id="videosbar"  class="item item-thumb-list">
   <?php if(is_array($arrVideos)): foreach($arrVideos as $key=>$item): ?><div class="thumblst">
    <div class="details">
    <p>视频标题（30字以内）</p>
    <textarea name="video_<?php echo ($item[seqid]); ?>_title" maxlength="30"><?php echo ($item[title]); ?></textarea>
    <input type="hidden" value="<?php echo ($item[seqid]); ?>" name="videoseqid[]">
    <br>
    <br>
    视频网址：<br>
    <a onclick="javascript:removeVideo(this, '<?php echo ($item[seqid]); ?>');return false;" class="minisubmit rr j a_remove_pic" name="rm_p_1" ajaxurl="<?php echo U('public/imagesvideos/delete');?>" videoid="<?php echo ($item[videoid]); ?>">删除</a>
    <p><?php echo ($item[url]); ?></p>
    </div>
    <div class="thumb">
    <div class="pl">[视频<?php echo ($item[seqid]); ?>]</div>
    <img src="<?php echo ($item[imgurl]); ?>"> </div>
    <div class="clear"></div>
    </div><?php endforeach; endif; ?>
</div>
<!--加载编辑器-->
<script type="text/javascript" src="__PUBLIC__/js/lib/ajaxfileupload.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/lib/IKEditor.js"></script>

<script language="javascript">
$(function(){
	$('#addImg').bind('click',function(){
		var ajaxurl = "<?php echo U('public/images/add');?>";
		var typeid = '<?php echo ($topic_id); ?>';
		var data = "{'type':'topic','typeid':'"+typeid+"'}";		
		addPhoto(ajaxurl, data);
	});
	$('#addLink').bind('click',function(){	
		addLink();
	})
	$('#addVideo').bind('click',function(){
		var ajaxurl = "<?php echo U('public/videos/add',array('type'=>'topic','typeid'=>$topic_id));?>";
		addVideo(ajaxurl);
	})
});
</script>
</form>



</div>
</div>



<!--引入后前台的模版文件 -->
<!--footer-->
<?php if(empty($$visitor)): ?><div id="g-popup-reg" class="popup-reg" style="display:none;"><div class="bd"><iframe src="about:blank" frameborder="0" scrolling="no"></iframe><a href="javascript:;" class="lnk-close">&times;</a></div></div><?php endif; ?>
<footer>
<div id="footer">
	<div class="f_content">
        <span class="fl gray-link" id="icp">
            &copy; 2012－2015 IKPHP.COM, all rights reserved <span><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备13018602号</a></span>
        </span>
        
        <span class="fr">
            <a href="<?php echo U('public/help/about');?>">关于爱客</a>
            · <a href="<?php echo U('public/help/contact');?>">联系我们</a>
            · <a href="<?php echo U('public/help/agreement');?>">用户条款</a>
            · <a href="<?php echo U('public/help/privacy');?>">隐私申明</a>
        </span>
        <div class="cl"></div>
        <p>Powered by <a class="softname" href="<?php echo (IKPHP_SITEURL); ?>"><?php echo (IKPHP_SITENAME); ?></a> <?php echo (IKPHP_VERSION); ?>  
        <font color="green">ThinkPHP版本<?php echo (THINK_VERSION); ?></font>  目前有 <?php echo ($count_online_user); ?> 人在线 
        <!--<script src="http://s6.cnzz.com/stat.php?id=5262498&web_id=5262498" language="JavaScript"></script><br />-->
        <span style="font-size:0.83em;">{__RUNTIME__}          </span>

        
       
        </p>   
    </div>
</div>
</footer>
<div id="styleBox"><a href="<?php echo U('public/index/style');?>">风格设置</a></div>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=1&amp;pos=right&amp;uid=0" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
//document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->

</body>
</html>
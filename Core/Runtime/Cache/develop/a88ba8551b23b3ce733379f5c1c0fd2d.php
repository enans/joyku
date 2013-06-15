<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<!--引入后前台公共public的模版文件 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($seo["title"]); ?> - <?php echo ($seo["subtitle"]); ?></title>
<meta name="keywords" content="<?php echo ($seo["keywords"]); ?>" /> 
<meta name="description" content="<?php echo ($seo["description"]); ?>" /> 
<link rel="shortcut icon" href="__PUBLIC__/images/fav.ico" type="image/x-icon">
<style>__SITE_THEME_CSS__</style>
<!--[if gte IE 7]><!-->
    <link href="__PUBLIC__/js/dialog/skins5/idialog.css" rel="stylesheet" />
<!--<![endif]-->
<!--[if lt IE 7]>
    <link href="__PUBLIC__/js/dialog/skins5/idialog.css" rel="stylesheet" />
<![endif]-->
<script>var siteUrl = '__SITE_URL__',show_login_url='<?php echo U("public/user/ajaxlogin");?>';</script>
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
            <div class="hd">
                <div class="logo">
                    <h1><a href="__SITE_URL__" title="爱客开源">爱客开源</a></h1>
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
<h1><?php echo ($seo["title"]); ?>
	<?php if(($strApp["isrecommend"]) == "1"): ?><span class="recomment-tag">
        推荐
    </span><?php endif; ?>
</h1>

<div class="cleft">
	
    <div class="mod item-subject">
        <div class="pic">
            <a href="<?php echo ($strApp[icon_100]); ?>"><img width="100" alt=" " src="<?php echo ($strApp[icon_100]); ?>"></a>
            <?php if($visitor[userid] == $strApp[userid]): ?><div class="th-modify">
                <a href="<?php echo U('develop/index/add_upload',array('id'=>$strApp[appid]));?>">增改描述或图标</a>
        	</div><?php endif; ?>
        </div>
        <div class="app_info">
        <ul>
            <li>
                <span class="attr-name">应用类别：</span>
                <span class="attr-value">
                    <a href="<?php echo U('develop/index/applist',array('type'=>$strApp[apptype],'cateid'=>$strApp[cateid]));?>">内容聚合</a>
                </span>
            </li>
    
            <li>
                <span class="attr-name">开发者：</span>
                <span class="attr-value">
                    <a href="<?php echo U('space/index/index',array('id'=>$strApp[user][doname]));?>"><?php echo ($strApp[user][username]); ?></a>
                </span>
            </li>
            
            <li>
                <span class="attr-name">官方网站：</span>        
                <span class="attr-value">
                    <a target="_blank" href="<?php echo ($strApp[appsite]); ?>"><?php echo ($strApp[appsite]); ?></a>
                </span>
            </li>
    
            <li>
                <span class="attr-name">需要积分：</span>
                <span class="attr-value"> 
                免费
                </span>
            </li>        
    
        </ul>
    	</div>
        <div class="appcoutinfo">
        	<?php if(!empty($strApp[appfile]) && $strApp[isaudit] == 1): ?><div class="downbar"><a href="<?php echo U('develop/index/down',array('id'=>$strApp[appid]));?>">↓点击下载</a></div>
            <?php else: ?>
            <div class="downbar"><b>应用审核中</b></div><?php endif; ?>
            <div class="infos"><span>浏览：<?php echo ($strApp[count_view]); ?></span><span>下载：<?php echo ($strApp[count_down]); ?></span></div>
        </div>

	</div>

<?php if(!empty($strApp[screenshotList])): ?><div class="mod screenshot">
    	<div class="header">应用截图</div>
        <div class="screenshots">
        	<?php if(is_array($strApp[screenshotList])): foreach($strApp[screenshotList] as $key=>$item): ?><a href="<?php echo ($item[bimg]); ?>" target="_blank">
                <img width="165" alt="" src="<?php echo ($item[mimg]); ?>">
            </a><?php endforeach; endif; ?>
        </div>
</div><?php endif; ?> 

<div id="link-report" class="mod item-desc">
    <h2>
        应用简介&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·
    </h2>
    <div class="desc-box">
		<?php echo nl2br($strApp[desc]); ?>
    </div>
</div>    

    
<div class="mod">
	      <!--comment评论-->
      <ul class="comment" id="comment">
       <?php if(!empty($commentList)): if(is_array($commentList)): foreach($commentList as $key=>$item): ?><li class="clearfix">
                  <div class="user-face"> 
                  <a href="<?php echo U('space/index/index',array('id'=>$item[user][doname]));?>"><img title="<?php echo ($item[user][username]); ?>" alt="<?php echo ($item[user][username]); ?>" src="<?php echo ($item[user][face]); ?>"></a> 
                  </div>
                  <div class="reply-doc">
                    <h4>
                        <span class="fr"></span>
                        <a href="<?php echo U('space/index/index',array('id'=>$item[user][doname]));?>"><?php echo ($item[user][username]); ?></a> 
                        <?php echo date('Y-m-d H:i:s',$item[addtime]) ?>
                    </h4>
                    
                    <?php if($item[referid] != 0): ?><div class="recomment"><a href="<?php echo U('space/index/index',array('id'=>$item[recomment][user][doname]));?>"><img src="<?php echo ($item[recomment][user][face]); ?>" width="24" align="absmiddle"></a> <strong><a href="<?php echo U('space/index/index',array('id'=>$item[recomment][user][doname]));?>"><?php echo ($item[recomment][user][username]); ?></a></strong>：<?php echo ($item[recomment][content]); ?></div><?php endif; ?>
                    
                    <p><?php echo ($item[content]); ?></p>
                    
                    <div class="group_banned"> 
                      <?php if($visitor[userid] != 0): ?><span><a href="javascript:void(0)"  onclick="commentOpen(<?php echo ($item[commentid]); ?>,<?php echo ($item[appid]); ?>)">回复</a></span><?php endif; ?>
                      <?php if(($strApp[userid] == $visitor[userid]) OR ($visitor[userid] == $item[userid])): ?><span><a class="j a_confirm_link" href="<?php echo U('develop/index/delcomment',array('commentid'=>$item[commentid]));?>" rel="nofollow" onclick="return confirm('确定删除?')">删除</a> </span><?php endif; ?>
                    </div>
                    <div id="rcomment_<?php echo ($item[commentid]); ?>" style="display:none; clear:both; padding:0px 10px">
                      <textarea style="width:550px;height:50px;font-size:12px; margin:0px auto;" id="recontent_<?php echo ($item[commentid]); ?>" type="text" onkeydown="keyRecomment(<?php echo ($item[commentid]); ?>,<?php echo ($item[appid]); ?>,event)" class="txt"></textarea>
                      <p style=" padding:5px 0px">
                        <button onclick="recomment(this,<?php echo ($item[commentid]); ?>,<?php echo ($item[appid]); ?>)" id="recomm_btn_<?php echo ($item[commentid]); ?>" class="subab" data-url="<?php echo U('develop/index/recomment');?>">提交</button>
                        &nbsp;&nbsp;<a href="javascript:;" onclick="$('#rcomment_<?php echo ($item[commentid]); ?>').slideToggle('fast');">取消</a>
                      </p>
                    </div>
                  </div>
                  <div class="clear"></div>
                </li><?php endforeach; endif; endif; ?>
      </ul>
      
      <div class="page"><?php echo ($pageUrl); ?></div>
      <h2>你的回应&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·</h2>
      <div> 
            <?php if(!$visitor['userid']): ?><div style="border:solid 1px #DDDDDD; text-align:center;padding:20px 0"><a href="<?php echo U('public/user/login');?>">登录</a> | <a href="<?php echo U('public/user/register');?>">注册</a></div>
            <?php else: ?>
            <form method="POST" action="<?php echo U('develop/index/addcomment');?>" onSubmit="return checkComment('#formMini');" id="formMini" enctype="multipart/form-data">
              <textarea  style="width:100%;height:100px;" id="editor_mini" name="content" class="txt" onkeydown="keyComment('#formMini',event)"></textarea>
              <input type="hidden" name="appid" value="<?php echo ($strApp[appid]); ?>" />
              <input type="hidden" name="p" value="<?php echo ($page); ?>" />
              <input class="submit" type="submit" value="加上去(Crtl+Enter)" style="margin:10px 0px">
            </form><?php endif; ?>
      </div>
</div>
    
    

    
</div>


<div class="cright">
 	<?php if($visitor[userid] == $strApp[userid]): ?><p class="pl2"> &gt; <a href="<?php echo U('develop/index/editapp',array('id'=>$strApp[appid]));?>">编辑应用信息</a></p><?php endif; ?>
    <p class="pl2"> &gt; <a href="<?php echo U('develop/index/applist');?>">发现更多应用</a></p>

    <div class="mod">
        <h2>
            下载过这个应用的人
                &nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·
        </h2>

        <?php if(is_array($downuserList)): foreach($downuserList as $key=>$item): ?><dl class="obu">
            <dt>
            <a href="<?php echo U('space/index/index',array('id'=>$item[doname]));?>"><img alt="<?php echo ($item[username]); ?>" class="m_sub_img" src="<?php echo ($item[face]); ?>" /></a>
            </dt>
            <dd><?php echo ($item[username]); ?><br>
                <span class="pl">(<a href="<?php echo U('location/area',array(areaid=>$item[area][areaid]));?>"><?php echo ($item[area][areaname]); ?></a>)</span>
            </dd>
     	 </dl><?php endforeach; endif; ?>
       <div class="clear"></div>
    </div>

    

</div>



</div>
</div>

<!--引入后前台的模版文件 -->
<!--footer-->
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
        <font color="green">ThinkPHP版本<?php echo (THINK_VERSION); ?></font>  目前有 <?php echo ($count_online_user); ?> 人在线<br />
        <span style="font-size:0.83em;">{__RUNTIME__}          </span>

        <!--<script src="http://s6.cnzz.com/stat.php?id=5262498&web_id=5262498" language="JavaScript"></script>-->
       
        </p>   
    </div>
</div>
</footer>
<div id="styleBox"><a href="<?php echo U('public/index/style');?>">风格设置</a></div>

</body>
</html>
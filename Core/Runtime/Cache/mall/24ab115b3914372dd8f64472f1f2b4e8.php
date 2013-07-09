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
<script src="http://l.tbcdn.cn/apps/top/x/sdk.js?appkey=21509482"></script>


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
                    <?php if(is_array($arrNav)): foreach($arrNav as $key=>$item): if($key == 'share'): ?><li><a href="javascript:;" class="a_<?php echo ($key); ?>" data-url="<?php echo ($item[url]); ?>"><?php echo ($item[name]); ?></a></li>
                    <?php else: ?>
                    <li><a href="<?php echo ($item[url]); ?>" class="a_<?php echo ($key); ?>" ><?php echo ($item[name]); ?></a></li><?php endif; endforeach; endif; ?>
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
		
        <div class="cleft">
            <div class="mod item-subject">
                <h1><?php echo ($seo["title"]); ?></h1> 
                <div class="btn-bar">
                    <a href="<?php echo U('mall/item/buy');?>?url=<?php echo base64_encode($strItem['url']);?>"  target="_blank" class="btn btn-icon"><span class="price-tag"><?php echo ($strItem["price"]); ?>元</span><i class="icon-splitter"></i><i class="icon-buy"></i>购买</a>&nbsp;&nbsp;
                
                <?php if($strItem[islike]): ?><a href="<?php echo U('mall/item/like');?>" title="取消喜欢" data-tkind="<?php echo ($strItem[id]); ?>" data-tid="<?php echo ($strItem[id]); ?>" data-tuid="<?php echo ($visitor['userid']); ?>"  class="btn btn-icon btn-like i a_like_btn"><i class="icon-like"></i>喜欢 <span id="like-num"><?php echo ($strItem[likes]); ?>人</span></a> 
				<?php else: ?>
                <a href="<?php echo U('mall/item/like');?>" title="标为喜欢" data-tkind="<?php echo ($strItem[id]); ?>" data-tid="<?php echo ($strItem[id]); ?>" data-tuid="<?php echo ($visitor['userid']); ?>"  class="btn btn-icon btn-like i a_like_btn"><i class="icon-like"></i>喜欢 <span id="like-num"><?php echo ($strItem[likes]); ?>人</span></a><?php endif; ?>

                    <p>（<a class="rating-amount" target="_blank" href="#"><?php echo ($strItem[comments]); ?>人评价</a>）</p>
                </div> 
            </div>
            
            <div class="item-info">
            	 <?php if(is_array($img_list)): $i = 0; $__LIST__ = $img_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?><div class="img-item"><a href="<?php echo U('mall/item/buy');?>?url=<?php echo base64_encode($strItem['url']);?>"  target="_blank"  title="<?php echo ($strItem["title"]); ?>"><img src="<?php echo attach(get_thumb($img['url'], '_b'), 'item');?>" alt="<?php echo ($strItem["title"]); ?>"></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            
        </div>
        
        <div class="cright">
        
            <div class="mod" id="g-user-profile">
                <div class="usercard">
                  <div class="pic">
                        <a href="<?php echo U('mall/mine/index',array('id'=>$strItem[user][doname]));?>"><img alt="<?php echo ($strItem[user][username]); ?>" src="<?php echo ($strItem[user][face]); ?>"></a>
                  </div>
                  <div class="info">
                       <div class="namebar">
                           <a href="<?php echo U('mall/mine/index',array('id'=>$strItem[user][doname]));?>" class="uname"><?php echo ($strItem[user][username]); ?></a>
                            <?php if($strItem[user][userid] != $visitor[userid]): if($strItem[user][isfollow]): ?><span class="followed">√已关注</span>
                                <?php else: ?>
                                <a class="follow follow-btn" href="<?php echo U('public/user/userfollow',array('userid'=>$strItem[user][userid]));?>">+关注</a><?php endif; endif; ?>
                       </div>
                         <p><?php echo ($strItem[intro]); ?></p>                    
                   </div>
                </div>
            </div> 
                    
			<div class="mod">
				<div class="hd"><h3>标签</h3></div>
                <div class="bd">
                <ul class="tags">
                	<?php if(is_array($strItem[tags])): foreach($strItem[tags] as $key=>$item): ?><li><a href="<?php echo U('mall/index/explore_goods',array('tag'=>$item[tagname]));?>"><span class="works-category"><?php echo ($item[tagname]); ?></span></a></li><?php endforeach; endif; ?>
                </ul>
                </div>
			</div>
            
			<div class="mod">
				<div class="hd"><h3>喜欢该宝贝的人</h3></div>
                <div class="bd">
                    <?php if(isset($arrCollectUser)): if(is_array($arrCollectUser)): foreach($arrCollectUser as $key=>$item): ?><dl class="obu">
                            <dt>
                                <a href="<?php echo U('space/index/index',array('id'=>$item[doname]));?>" title="<?php echo ($item[username]); ?>">
                                    <img  alt="<?php echo ($item[username]); ?>"  src="<?php echo avatar($item['userid'], 48);?>"class="m_sub_img"  >
                                </a>
                            </dt>
                            <dd>
                                 <?php echo ($item[username]); ?><br>
                                <span class="pl">(<a href="<?php echo U('location/area',array('areaid'=>$item[area][areaid]));?>"><?php echo ($item[area][areaname]); ?></a>)</span>
                            </dd>
                    </dl><?php endforeach; endif; ?>
                    <?php else: ?>
                    <div style="color: #999999;padding: 20px 0">还没有人喜欢该宝贝呢，赶快来抢个沙发吧^_^</div><?php endif; ?>
                </div>
			</div>            
            
        </div>

        
    </div>
</div>
<script type="text/javascript" src="__PUBLIC__/js/masonry/jquery.masonry.min.js"></script>
<script type="text/javascript" src="__STATIC_JS__/item.js"></script>
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
        <script src="http://s6.cnzz.com/stat.php?id=5262498&web_id=5262498" language="JavaScript"></script><br />
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
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->


</body>
</html>
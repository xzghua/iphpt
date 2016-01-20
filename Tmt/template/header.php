<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;">傻逼不要扒皮</h2>
		抱歉，沒有找到您需要的内容！！
</div>';die();?>
<!DOCTYPE HTML>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">
<head>
 <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0"
        />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="{$language}" />
	<meta name="generator" content="{$zblogphp}" />
	<link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/{$style}.css" type="text/css" media="all"/>
  <!-- +++++++++++++++++++++++++++++++++++++++++CSS+++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
  <link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/ylsc/css/style.css" /> <!-- 旋转标签 -->
  <link href="{$host}zb_users/theme/{$theme}/ylsc/css/lanrenzhijia.css" type="text/css" rel="stylesheet"> <!-- 有趣输入框 -->
  <link href="{$host}zb_users/theme/{$theme}/ylsc/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/ylsc/css/style.css" media="screen" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/ylsc/css/component.css" /> <!-- 起泡 -->


  <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
	<script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
	<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/script/com.js"></script> 
	<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
  <!-- +++++++++++++++++++++++++++++++++Javascript+++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
  <script type="text/javascript" src="{$host}zb_users/theme/{$theme}/ylsc/js/lrtk.js"></script><!-- 旋转标签 -->
  <script src="{$host}zb_users/theme/{$theme}/ylsc/js/jquery-1.8.3.min.js"></script><!-- 有趣输入框 -->
  <script src="{$host}zb_users/theme/{$theme}/ylsc/js/jquery.label_better.js"></script>



  <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
{$header}
{if $type=='index'&&$page=='1'}
<title>{$name}-{$title}</title>
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" /> 
<meta name="keywords" content="{$zbp->Config('Tmt')->keyword}" />
<meta name="description" content="{$zbp->Config('Tmt')->description}" />
{else}
	<title>{$title}-{$name}</title>
	<meta name="description" content="{$title}" />
{/if}  
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>

  <body class="home blog">  
  <div id="wrapper-innerIE6"></div> 
  

  <div id="wrapper" class=" demo-2"> 
  
  <!-- <div id="large-header" class="large-header">
      <canvas id="demo-canvas"></canvas> -->

   <div id="wrapper-inner" data-bymts="theme-bymt mouse-title ajax-posts ajax-search highlight"> 
    <div id="header" class="container"> 
     <div id="header-inner"> 
      <div id="logo"> 
       <a title="{$name}" href="{$host}" rel="index"><img src="{$host}zb_users/theme/{$theme}/style/image/logo.png" alt="{$name}" /></a> 
      </div> 
     </div> 
     <div class="line"></div> 
     <div id="mobile-nav"> 
      <a><i class="icon-menu"></i>Menu</a> 
     </div> 
     <div id="main-nav"> 
      <div id="nav-menu"> 
       <ul >
         {module:navbar} 
       </ul>

      </div> 
<!--       <div id="nav-search"> 
       <form action="{$host}zb_system/cmd.php?act=search" method="post"> 
        <input type="text" name="q" id="search-input" data-searchtips="搜搜睡了吧" value="" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:translate" /> 
        <ul id="search-cloud" data-cloudnum="8"> 
        </ul> 
        <input type="submit" name="btnPost" value="搜索" /> 
       </form> 
      </div>  -->
     </div> 
    </div> 
    <div id="topbar" class="container"> 
     <div id="bulletin"> 
      <i class="icon-sound"></i> 
      <span class="comment_text">{$zbp->Config('Tmt')->gonggao}</span>
     </div> 
    </div> 

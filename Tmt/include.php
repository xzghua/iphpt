<?php
#注册插件
RegisterPlugin("Tmt","ActivePlugin_Tmt");

function ActivePlugin_Tmt() {
Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','Tmt_AddMenu');
	Add_Filter_Plugin('Filter_Plugin_ViewList_Template','Tmt_tags_set');
	Add_Filter_Plugin('Filter_Plugin_ViewPost_Template','Tmt_tags_set');
}
function Tmt_AddMenu(&$m){
	global $zbp;
	array_unshift($m, MakeTopMenu("root",'Tmt主题设置',$zbp->host . "zb_users/theme/Tmt/main.php","","topmenu_Tmt"));
}
function Tmt_tags_set(&$template){
	global $zbp;
	//基本设置
    $template->SetTags('Tmt_description',$zbp->Config('Tmt')->description); //网站首页描述
	$template->SetTags('Tmt_keyword',$zbp->Config('Tmt')->keyword); //网站关键词	
	$template->SetTags('Tmt_gonggao',$zbp->Config('Tmt')->gonggao); //网站关键词	
}
function InstallPlugin_Tmt() {
global $zbp;
if(!$zbp->Config('Tmt')->HasKey('Version')){
		$zbp->Config('Tmt')->Version = '1.0';
         //基本设置
		$zbp->Config('Tmt')->description = '欢迎来到涂涂研版的博客，一个关注IT技术分享，关注zblog的网站，爱分享网络资源，分享学到的知识，分享生活的乐趣，小站使用ZBLOG程序PHP版本搭建，网址是www.tusay.net';//网站首页描述 
		$zbp->Config('Tmt')->keyword = '涂涂研版，关注zblog，关注it技术分享,tusay.net'; //网站首页关键词
		$zbp->Config('Tmt')->gonggao='欢迎来到涂涂研版博客，谢谢大家的支持。';
		$zbp->SaveConfig('Tmt');
	}
	$zbp->Config('Tmt')->Version = '1.0';
	$zbp->SaveConfig('Tmt');
}
function UninstallPlugin_Tmt() {
global $zbp;

}

?>
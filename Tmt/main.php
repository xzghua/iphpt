<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('Tmt')) {$zbp->ShowError(48);die();}
$blogtitle='主题配置';
require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
//基本设置
if(isset($_POST['description'])){
	$zbp->Config('Tmt')->description = $_POST['description'];
	$zbp->Config('Tmt')->keyword = $_POST['keyword'];
	$zbp->Config('Tmt')->gonggao=$_POST['gonggao'];
	$zbp->SaveConfig('Tmt');
	$zbp->ShowHint('good');
	}
?>

<style>
input.sedit{ width:93%;}
table input{margin:0.25em 0;}
table input.text{padding: 2px 5px;}
table .button{padding: 2px 12px 5px 12px; margin: 0.25em 0;}
.tc{border: solid 2px #E1E1E1;width: 50px;height: 23px;float: left;margin: 0.25em;cursor: pointer}
.tc:hover,.active{border: 2px solid #2694E8;}
.upinfo{position: relative;left: 3px;top: -19px;color: white;background: #5EAAE4;width: 190px;height: 23px;display: inline-block;text-align: center;opacity: 0.8;filter: alpha(opacity=80);}
.imageshow{margin:0.25em 0;}.imageshow img{margin:0 10px;margin-bottom:-10px;}
</style>
<!--#include file="..\..\..\..\zb_system\admin\admin_top.asp"-->
<div id="divMain">
	<div class="divHeader"><?php echo $blogtitle;?></div>
	<div class="SubMenu">
        <a href="https://www.tusay.net" target="_blank"><span class="m-left" style="color:#F00">赞助</span></a>
        <a href="http://www.tusay.net" target="_blank"><span class="m-right">帮助</span></a>
    </div>
	<div id="divMain2">
	<form enctype="multipart/form-data" method="post" action="save.php?type=logo">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
	 <tr>
    <td width="15%"><label for="logo.png"><p align="center">上传LOGO</p></label></td>
    <td width="50%"><p align="center"><input name="logo.png" type="file"/></p></td>
	<td width="25%"><p align="center"><input name="" type="Submit" class="button" value="保存"/></p></td>
	</tr>
	</table>
	</form>
	<form id="form1" name="form1" method="post">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
		<tr>
			<th width="15%"><p align="center">配置名称</p></th>
			<th width="40%"><p align="center">配置内容</p></th>
			<th width="10%"><p align="center">配置开关</p></th>
			<th width='20%'><p align="center">配置说明</p></th>
		</tr>
		<tr>
			<td><label for="description"><p align="center">网站首页描述</p></label></td>
			<td><p align="left"><textarea name="description" type="text" id="description" style="width:98%;"><?php echo $zbp->Config('Tmt')->description;?></textarea></p></td>
			<td><p align="center"></p></td>
			<td><p align="left">网站首页的META标签 description描述内容维护</p></td>
			
		</tr>
		<tr>
			<td><label for="keyword"><p align="center">网站关键词</p></label></td>
			<td><p align="left"><textarea name="keyword" type="text" id="keyword" style="width:98%;"><?php echo $zbp->Config('Tmt')->keyword;?></textarea></p></td>
			<td><p align="center"></p></td>
			<td><p align="left">网站首页的META标签 keywords描述内容维护</p></td>
			
		</tr>
		<tr>
			<td><label for="gonggao"><p align="center">网站头部公告</p></label></td>
			<td><p align="left"><textarea name="gonggao" type="text" id="gonggao" style="width:98%;"><?php echo $zbp->Config('Tmt')->gonggao;?></textarea></p></td>
			<td><p align="center"></p></td>
			<td><p align="left">网站头部公告填写</p></td>
			
		</tr>
	</table>
	<br />
   <input name="" type="Submit" class="button" value="保存"/>
    </form>	

	</div>
</div>
<!--#include file="..\..\..\..\zb_system\admin\admin_footer.asp"-->
<script type="text/javascript">
ActiveTopMenu("topmenu_Tmt");
</script> 
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>
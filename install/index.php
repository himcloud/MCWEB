<?php global $zym_decrypt;$zym_decrypt['���־�����������Į���������ֈ���']=base64_decode('ZXJyb3JfcmVwb3J0aW5n');$zym_decrypt['����������Ô�������È��Ë�������']=base64_decode('aGVhZGVy');$zym_decrypt['�ĈÔîÈ������������֔��֥��־�']=base64_decode('ZmlsZV9leGlzdHM=');$zym_decrypt['��������֯�������ĥ����ֈ�������']=base64_decode('aXNfbnVtZXJpYw==');$zym_decrypt['����֮���å���������������������']=base64_decode('ZmlsZV9wdXRfY29udGVudHM=');$zym_decrypt['����Ĉ�����������ĥ�����־��Î��']=base64_decode('ZmlsZV9nZXRfY29udGVudHM=');$zym_decrypt['���ċ�ľ��־��������Ô�î֔���Ď']=base64_decode('ZXhwbG9kZQ==');$zym_decrypt['�֯������֎��֮��ľ��֋�î������']=base64_decode('Y291bnQ=');$zym_decrypt['����î�����ֈ���î�å������֋���']=base64_decode('dHJpbQ==');$zym_decrypt['���������־��������å֯���������']=base64_decode('b3BlbmRpcg==');$zym_decrypt['�־�ï֮���î��������ĈÔ�������']=base64_decode('cmVhZGRpcg==');$zym_decrypt['���È��þ�Ë־��֯�ċ���į��־��']=base64_decode('aXNfZGly');$zym_decrypt['ï�î��������־֎�������������î']=base64_decode('dW5saW5r');$zym_decrypt['��֥�������������������������֋�']=base64_decode('Y2xvc2VkaXI=');$zym_decrypt['Į�Ĉ�������ï��È־����־������']=base64_decode('cm1kaXI='); ?>
<?php
$GLOBALS['zym_decrypt']['���־�����������Į���������ֈ���'](0);require_once base64_decode('Li4vbGlicy8vMzYwc2FmZS8zNjB3ZWJzY2FuLnBocA==');@$GLOBALS['zym_decrypt']['����������Ô�������È��Ë�������'](base64_decode('Q29udGVudC1UeXBlOiB0ZXh0L2h0bWw7IGNoYXJzZXQ9VVRGLTg='));if($GLOBALS['zym_decrypt']['�ĈÔîÈ������������֔��֥��־�'](base64_decode('aW5zdGFsbC5sb2Nr'))){exit(base64_decode('5oKo5bey57uP5a6J6KOF6L+H5LqGIOivt+WLv+mHjeWkjeWuieijhSDor7fliKDpmaRpbnN0YWxsLmxvY2s='));}if($GLOBALS['zym_decrypt']['�ĈÔîÈ������������֔��֥��־�'](base64_decode('Li4vZnVja3lvdW1keWlzY3lhYi9kYi5waHA='))){exit(base64_decode('5oKo5bey57uP5a6J6KOF6L+H5LqGIOivt+WLv+mHjeWkjeWuieijhSDor7fliKDpmaRhZG1pbuebruW9leS4i+eahGRiLnBocA=='));}$step=$GLOBALS['zym_decrypt']['��������֯�������ĥ����ֈ�������']($_GET['step'])?$_GET['step']:'1';?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
    	<meta charset="UTF-8" />
    <title>似水年华V2安装</title>
		<!-- Mobile Metas -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />       
		<!-- Favicon and touch icons -->
	    <!-- start: CSS file-->
		<!-- Vendor CSS-->
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/assets/css/skycons.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		
		<!-- Plugins CSS-->		
		
		<!-- Theme CSS -->
		<link href="/assets/css/jquery.mmenu.css" rel="stylesheet" />
		
		<!-- Page CSS -->		
		<link href="/assets/css/style.css" rel="stylesheet" />
		<link href="/assets/css/add-ons.min.css" rel="stylesheet" />

		<!-- end: CSS file-->	

	</head>

	<body> 
			<div class="container-fluid content">
			<div class="row">
				<!-- Main Page -->
				<div class="body-login">
					<div class="center-login">
						<a href="/" class="btn logo pull-left hidden-xs" style="line-height: 25px;font-size: 36px;color: rgb(67, 93, 120);">
							似水年华V2
						</a>

						<div class="panel panel-login">
							<div class="panel-title-login text-right">
								<h2 class="title"><i class="fa fa-user"></i> 安装</h2>
							</div>
							<div class="panel-body">
<?php if($step=='1'){?>
		<!-- Start: Content -->

	<h3 class="panel-title" align="center">数据库配置</h3>
	<form action="?step=2" class="form-sign" method="post">
		<label for="name">数据库地址:</label>
		<input type="text" class="form-control" name="DB_HOST" value="localhost">
		<label for="name">数据库端口:</label>
		<input type="text" class="form-control" name="DB_PORT" value="3306">
		<label for="name">数据库库名:</label>
		<input type="text" class="form-control" name="DB_NAME" placeholder="输入数据库库名">
		<label for="name">数据库用户名:</label>
		<input type="text" class="form-control" name="DB_USER" placeholder="输入数据库用户名">
		<label for="name">数据库密码:</label>
		<input type="password" class="form-control" name="DB_PWD" placeholder="输入数据库密码">
		<br><input type="submit" class="btn btn-primary btn-block" name="submit" value="安装">
		<input type="submit" class="btn btn-primary btn-block" name="sj" value="从2.2bate0.1更新">
		<input type="submit" class="btn btn-primary btn-block" name="sj1" value="从2.0更新">
		</form></div>
</body>
</html>
<?php }elseif($step=='2'){if($_POST['submit']){if(!$_POST['DB_HOST'] || !$_POST['DB_PORT'] || !$_POST['DB_NAME'] || !$_POST['DB_USER'] || !$_POST['DB_PWD']){echo'<script language=\'javascript\'>alert(\'所有项都不能为空\');history.go(-1);</script>';}else{if(!$con=mysql_connect($_POST['DB_HOST'].':'.$_POST['DB_PORT'],$_POST['DB_USER'],$_POST['DB_PWD'])){echo'<script language=\'javascript\'>alert("连接数据库失败，'.mysql_error().'");history.go(-1);</script>';}elseif(!mysql_select_db($_POST['DB_NAME'],$con)){echo'<script language=\'javascript\'>alert("选择的数据库不存在，'.mysql_error().'");history.go(-1);</script>';}else{$data="<?php
return array(
	'DB_HOST'               =>  '{$_POST['DB_HOST']}',
    'DB_NAME'               =>  '{$_POST['DB_NAME']}',
    'DB_USER'               =>  '{$_POST['DB_USER']}',
    'DB_PWD'                =>  '{$_POST['DB_PWD']}',
    'DB_PORT'               =>  '{$_POST['DB_PORT']}',
    'DB_PREFIX'             =>  'ssnh_',
);";if($GLOBALS['zym_decrypt']['����֮���å���������������������'](base64_decode('Li4vYWRtaW4vZGIucGhw'),$data)){$sqls=$GLOBALS['zym_decrypt']['����Ĉ�����������ĥ�����־��Î��']("install.sql");$explode =$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď'](";",$sqls);$num =$GLOBALS['zym_decrypt']['�֯������֎��֮��ľ��֋�î������']($explode);foreach($explode as $sql){if($sql=$GLOBALS['zym_decrypt']['����î�����ֈ���î�å������֋���']($sql)){mysql_query($sql);}}if(mysql_error()){echobase64_decode('PHNjcmlwdCBsYW5ndWFnZT0namF2YXNjcmlwdCc+YWxlcnQoIuWvvOWFpeaVsOaNruihqOaXtumUmeivr++8jA==').mysql_error().base64_decode('Iik7aGlzdG9yeS5nbygtMSk7PC9zY3JpcHQ+');}else{@$GLOBALS['zym_decrypt']['����֮���å���������������������'](base64_decode('aW5zdGFsbC5sb2Nr'),'');function deldir($dir){$dh =$GLOBALS['zym_decrypt']['���������־��������å֯���������']($dir);while ($file =$GLOBALS['zym_decrypt']['�־�ï֮���î��������ĈÔ�������']($dh)){if ($file != "." && $file != ".."){$fullpath =$dir . "/" . $file;if (!$GLOBALS['zym_decrypt']['���È��þ�Ë־��֯�ċ���į��־��']($fullpath)){$GLOBALS['zym_decrypt']['ï�î��������־֎�������������î']($fullpath);}else {deldir($fullpath);}}}$GLOBALS['zym_decrypt']['��֥�������������������������֋�']($dh);if ($GLOBALS['zym_decrypt']['Į�Ĉ�������ï��È־����־������']($dir)){return true;}else {return false;}}$u=$_SERVER['HTTP_HOST'];?>
				<div id="error"><p>网站安装成功</p><p>共导入<?php echo $num;?>条数据，网站安装成功</p><p>1、管理员账号admin，密码123456，请尽快修改密码。</p><p>2、当你安装完成后 install目录下的文件全部删除。</p><p><a href="/">返回首页</a></p></div>
		</ul>
	</div>
</div>
				<?php
 }}else{echobase64_decode('PHNjcmlwdCBsYW5ndWFnZT0namF2YXNjcmlwdCc+YWxlcnQoIuivt+ehruiupOepuumXtOebruW9leS4reaYr+WQpuWtmOWcqGluY+aWh+S7tuWkuSDoi6Xml6Ag6K+35Yib5bu65ZCN5Li6aW5j55qE5paH5Lu25aS5Iik7aGlzdG9yeS5nbygtMSk7PC9zY3JpcHQ+');}}}}if($_POST['sj1']){if(!$_POST['DB_HOST'] || !$_POST['DB_PORT'] || !$_POST['DB_NAME'] || !$_POST['DB_USER'] || !$_POST['DB_PWD']){echo'<script language=\'javascript\'>alert(\'所有项都不能为空\');history.go(-1);</script>';}else{if(!$con=mysql_connect($_POST['DB_HOST'].':'.$_POST['DB_PORT'],$_POST['DB_USER'],$_POST['DB_PWD'])){echo'<script language=\'javascript\'>alert("连接数据库失败，'.mysql_error().'");history.go(-1);</script>';}elseif(!mysql_select_db($_POST['DB_NAME'],$con)){echo'<script language=\'javascript\'>alert("选择的数据库不存在，'.mysql_error().'");history.go(-1);</script>';}else{$data="<?php
return array(
	'DB_HOST'               =>  '{$_POST['DB_HOST']}',
    'DB_NAME'               =>  '{$_POST['DB_NAME']}',
    'DB_USER'               =>  '{$_POST['DB_USER']}',
    'DB_PWD'                =>  '{$_POST['DB_PWD']}',
    'DB_PORT'               =>  '{$_POST['DB_PORT']}',
    'DB_PREFIX'             =>  'ssnh_',
);";if($GLOBALS['zym_decrypt']['����֮���å���������������������'](base64_decode('Li4vYWRtaW4vZGIucGhw'),$data)){$sqls=$GLOBALS['zym_decrypt']['����Ĉ�����������ĥ�����־��Î��']("sj1.sql");$explode =$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď'](";",$sqls);$num =$GLOBALS['zym_decrypt']['�֯������֎��֮��ľ��֋�î������']($explode);foreach($explode as $sql){if($sql=$GLOBALS['zym_decrypt']['����î�����ֈ���î�å������֋���']($sql)){mysql_query($sql);}}if(mysql_error()){echobase64_decode('PHNjcmlwdCBsYW5ndWFnZT0namF2YXNjcmlwdCc+YWxlcnQoIuWvvOWFpeaVsOaNruihqOaXtumUmeivr++8jA==').mysql_error().base64_decode('Iik7aGlzdG9yeS5nbygtMSk7PC9zY3JpcHQ+');}else{@$GLOBALS['zym_decrypt']['����֮���å���������������������'](base64_decode('aW5zdGFsbC5sb2Nr'),'');function deldir($dir){$dh =$GLOBALS['zym_decrypt']['���������־��������å֯���������']($dir);while ($file =$GLOBALS['zym_decrypt']['�־�ï֮���î��������ĈÔ�������']($dh)){if ($file != "." && $file != ".."){$fullpath =$dir . "/" . $file;if (!$GLOBALS['zym_decrypt']['���È��þ�Ë־��֯�ċ���į��־��']($fullpath)){$GLOBALS['zym_decrypt']['ï�î��������־֎�������������î']($fullpath);}else {deldir($fullpath);}}}$GLOBALS['zym_decrypt']['��֥�������������������������֋�']($dh);if ($GLOBALS['zym_decrypt']['Į�Ĉ�������ï��È־����־������']($dir)){return true;}else {return false;}}$u=$_SERVER['HTTP_HOST'];?>
				<div id="error"><p>网站升级成功</p><p>共导入<?php echo $num;?>条数据，网站升级成功</p><p>
		</ul>
	</div>
</div>
				<?php
 }}else{echobase64_decode('PHNjcmlwdCBsYW5ndWFnZT0namF2YXNjcmlwdCc+YWxlcnQoIuivt+ehruiupOepuumXtOebruW9leS4reaYr+WQpuWtmOWcqGluY+aWh+S7tuWkuSDoi6Xml6Ag6K+35Yib5bu65ZCN5Li6aW5j55qE5paH5Lu25aS5Iik7aGlzdG9yeS5nbygtMSk7PC9zY3JpcHQ+');}}}}if($_POST['sj']){if(!$_POST['DB_HOST'] || !$_POST['DB_PORT'] || !$_POST['DB_NAME'] || !$_POST['DB_USER'] || !$_POST['DB_PWD']){echo'<script language=\'javascript\'>alert(\'所有项都不能为空\');history.go(-1);</script>';}else{if(!$con=mysql_connect($_POST['DB_HOST'].':'.$_POST['DB_PORT'],$_POST['DB_USER'],$_POST['DB_PWD'])){echo'<script language=\'javascript\'>alert("连接数据库失败，'.mysql_error().'");history.go(-1);</script>';}elseif(!mysql_select_db($_POST['DB_NAME'],$con)){echo'<script language=\'javascript\'>alert("选择的数据库不存在，'.mysql_error().'");history.go(-1);</script>';}else{$data="<?php
return array(
	'DB_HOST'               =>  '{$_POST['DB_HOST']}',
    'DB_NAME'               =>  '{$_POST['DB_NAME']}',
    'DB_USER'               =>  '{$_POST['DB_USER']}',
    'DB_PWD'                =>  '{$_POST['DB_PWD']}',
    'DB_PORT'               =>  '{$_POST['DB_PORT']}',
    'DB_PREFIX'             =>  'ssnh_',
);";if($GLOBALS['zym_decrypt']['����֮���å���������������������'](base64_decode('Li4vYWRtaW4vZGIucGhw'),$data)){$sqls=$GLOBALS['zym_decrypt']['����Ĉ�����������ĥ�����־��Î��']("sj.sql");$explode =$GLOBALS['zym_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď'](";",$sqls);$num =$GLOBALS['zym_decrypt']['�֯������֎��֮��ľ��֋�î������']($explode);foreach($explode as $sql){if($sql=$GLOBALS['zym_decrypt']['����î�����ֈ���î�å������֋���']($sql)){mysql_query($sql);}}if(mysql_error()){echobase64_decode('PHNjcmlwdCBsYW5ndWFnZT0namF2YXNjcmlwdCc+YWxlcnQoIuWvvOWFpeaVsOaNruihqOaXtumUmeivr++8jA==').mysql_error().base64_decode('Iik7aGlzdG9yeS5nbygtMSk7PC9zY3JpcHQ+');}else{@$GLOBALS['zym_decrypt']['����֮���å���������������������'](base64_decode('aW5zdGFsbC5sb2Nr'),'');function deldir($dir){$dh =$GLOBALS['zym_decrypt']['���������־��������å֯���������']($dir);while ($file =$GLOBALS['zym_decrypt']['�־�ï֮���î��������ĈÔ�������']($dh)){if ($file != "." && $file != ".."){$fullpath =$dir . "/" . $file;if (!$GLOBALS['zym_decrypt']['���È��þ�Ë־��֯�ċ���į��־��']($fullpath)){$GLOBALS['zym_decrypt']['ï�î��������־֎�������������î']($fullpath);}else {deldir($fullpath);}}}$GLOBALS['zym_decrypt']['��֥�������������������������֋�']($dh);if ($GLOBALS['zym_decrypt']['Į�Ĉ�������ï��È־����־������']($dir)){return true;}else {return false;}}$u=$_SERVER['HTTP_HOST'];?>
				<div id="error"><p>网站升级成功</p><p>共导入<?php echo $num;?>条数据，网站升级成功</p><p>
		</ul>
	</div>
</div>
				<?php
 }}else{echobase64_decode('PHNjcmlwdCBsYW5ndWFnZT0namF2YXNjcmlwdCc+YWxlcnQoIuivt+ehruiupOepuumXtOebruW9leS4reaYr+WQpuWtmOWcqGluY+aWh+S7tuWkuSDoi6Xml6Ag6K+35Yib5bu65ZCN5Li6aW5j55qE5paH5Lu25aS5Iik7aGlzdG9yeS5nbygtMSk7PC9zY3JpcHQ+');}}}}}elseif($step=='4'){?>


<?php }?>
</div>
</body>
</html>

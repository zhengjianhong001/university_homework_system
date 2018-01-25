<?php 
if(isset($_GET['a']) && $_GET['a']==logout){
    setcookie('teacher_number','',time()-3600);
    setcookie('role','',time()-3600);
    header("location: login.php");
}
 if (!isset($_COOKIE['teacher_number']) || $_COOKIE['teacher_number']=='') {
    header("location: login.php");
    
 }
if (isset($_COOKIE['role']) && $_COOKIE['role']!='') {
    if($_COOKIE['role'] != "teacher")
        header("location: login.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>校园课堂作品提交与互评系统——教师首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/main-min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/images/header.ico" type="image/x-icon" rel="shortcut icon" />
</head>
<body>

<div class="header">
    <div class="dl-title">
        <!--<img src="/chinapost/Public/assets/img/top.png">-->
        <h1>校园课堂作品提交与互评系统——教师主页</h1>
    </div>
    <div class="dl-log">欢迎您，<span class="dl-log-user"><?php echo $_COOKIE['role'].",工号: ".$_COOKIE['teacher_number']; ?></span><a href="teacher_index.php?a=logout" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
</div>
<div class="content">
    <div class="dl-main-nav">
        <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>
        <ul id="J_Nav"  class="nav-list ks-clear">
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">我的班级</div></li>		
        </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
</div>
<script type="text/javascript" src="../assets/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bui-min.js"></script>
<script type="text/javascript" src="../assets/js/main-min.js"></script>
<script type="text/javascript" src="../assets/js/config-min.js"></script>
<script>
    BUI.use('main',function(){ 
        var config = [{id:'1',menu:[{text:'我的班级',items:[{id:'12',text:'布置新作品',href:'teacher/publish_homework.php'},{id:'3',text:'作品管理中心',href:'teacher/homework_admin.php'}]},{text:'教师中心',items:[{id:'16',text:'个人信息',href:'teacher/teacher_info.php'},{id:'17',text:'修改密码',href:'teacher/teacher_change_password.php'}]}]},{id:'7',homePage : '9'}];
        new PageUtil.MainPage({
            modulesConfig : config
        });
    });
</script>
</body>
</html>
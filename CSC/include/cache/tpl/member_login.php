<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员登录-<?php echo $GLOBALS['S']['title'] ?></title>
<link href="<?php echo $GLOBALS['skin'] ?>style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var site_dir="<?php echo $GLOBALS['WWW'] ?>";
</script>
<script type="text/javascript" src="<?php echo $GLOBALS['WWW'] ?>include/js/jsmain.js"></script>
<script src="<?php echo $GLOBALS['skin'] ?>js/main.js" type="text/javascript"></script>
</head>

<body>
<div class="wpa head">
  <div class="wp">
    <dl class="a"><img src="<?php echo $GLOBALS['skin'] ?>images/logo.jpg" /></dl><dl class="b"></dl>
    <dl class="c">
    <script type="text/javascript">member_login('member_login','member/ajax_login.html');</script>
      <p class="i" id="member_login"></p>
      <form action="<?php echo $GLOBALS['WWW'] ?>index.php" method="get">
      <input name="a" type="hidden" value="search" />
      <p class="s"><span class="ll"><select name="c">
        <option value="article" selected="selected">文章</option>
        <option value="product">产品</option>
      </select></span><span class="l"><input type="text" name="word" /></span><span class="r"><input type="submit" value=""/></span></p>
      </form>
    </dl>
  </div>
  <div class="wp menu f1">
  <a href="<?php echo $GLOBALS['WWW'] ?>index.php" class="c">首 页</a>
<?php $vn=0;$tablev=syClass("syModel")->findSql("select tid,molds,pid,classname,gourl,litpic,title,keywords,description,orders,mrank,htmldir,htmlfile,mshow from csc_classtype where  mshow='1' and pid=0  order by orders desc,tid limit 7");foreach($tablev as $v){ $v["tid_leafid"]=$sy_class_type->leafid($v["tid"]);$v["n"]=$vn=$vn+1; $v["classname"]=stripslashes($v["classname"]);$v["description"]=stripslashes($v["description"]); $v["url"]=html_url("classtype",$v); ?>
  <a href="<?php echo $v['url'] ?>"><?php echo $v['classname'] ?></a>
<?php } ?>
  </div>
</div>
<div class="wpm list">
  <div class="tab11"></div>
  <div class="tab1 tab1b main">
    <div class="l">
      <div class="columnc"><h2>会员中心</h2></div>
      <div class="columncl">
      <a href="?c=member&a=reg&url=<?php echo $backurl ?>">会员注册</a>
      <a href="?c=member&a=login&url=<?php echo $backurl ?>" class="c">会员登录</a>
      </div>
    </div>
    <div class="r">
    <div class="content">
       <div class="position">当前位置：会员登录</div>
       <div class="member_f">

<form action="index.php?c=member&a=login&go=1&url=<?php echo $backurl ?>" method="post">
       <dl><dt>用户名：</dt><dd><input type="text" name="user" class="inp" style="width:150px;"/></dd></dl>
       <dl><dt>密　码：</dt><dd><input type="password" name="pass" class="inp" style="width:150px;"/></dd><dd class="m"><a href="index.php?c=member&a=retrieve_password">忘记密码？</a></dd></dl>
<?php if($GLOBALS['G_DY']['vercode']==1){ ?>
       <dl><dt>验证码：</dt><dd><input type="text" name="vercode" class="inp" style="width:80px;"/></dd><dd><img src="<?php echo $GLOBALS['WWW'] ?>include/vercode.php" id="vercodeimg" width="60" height="25" style="cursor:pointer;" onclick="newvercode();" /></dd></dl>
<script type="text/javascript">
setTimeout('newvercode()',1000);
function newvercode(){
	document.getElementById("vercodeimg").src="<?php echo $GLOBALS['WWW'] ?>include/vercode.php?a="+Math.random();
}
</script>
<?php } ?>
       <dl style="border:0;"><dt>&nbsp;</dt><dd><input name="" type="submit" value="立即登录" class="btnbig" /></dd></dl>
</form>
       </div>
    </div>
    </div>
  </div>
  <div class="tab12 mban"></div>
</div>
<div class="both"></div>
<div class="wpa bottom">
  <div class="wp">
    <div class="l">DOYO通用建站管理系统，真正的轻松建站。<br />Powered by <a href="http://wdoyo.com" target="_blank">DOYO!</a></div>
    <div class="r"></div>
  </div>
</div>
</body>
</html>

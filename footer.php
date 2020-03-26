<?php
if ($id) {mores($as['tools_url'],$navs,Tools_url.'/'.$CONF['config']['TOOLS_T']);}
?>
<!--footer start-->
<footer class="footer text-center">
	<div>
     本程序由<a href="http://www.youngxj.cn/" target="_blank">Youngxj</a>开发 <a href="https://github.com/Youngxj/YoungxjTools" target="_blank">Github</a>，由本站进行二次修改并<a href="https://github.com/Bandbbs/YoungxjTools/" target="_blank">开源</a>，并遵循其<a href="https://github.com/Youngxj/YoungxjTools/blob/master/LICENSE" target="_blank">GNU General Public License v3.0</a>许可证
  </div>
  <div class="hitokoto">
   <script>binduyan()</script>
 </div>
 <div class="footer text-center">
  <!--这里可以放统计代码-->
  <?php echo $tools_settings['footer'];?>
</div>
<style type="text/css">
#welcome{width:200px;background:#fff;border:1px solid #eee;color:#000;font-size:14px;opacity:0.7;filter:alpha(opacity=70);padding:10px 20px;position:fixed;right:10px;bottom:25px;z-index:99999;box-shadow:rgb(136,123,123) 3px 2px 5px;opacity:1;}
#welcome h4{color:#F00; line-height:30px; padding:0!important;margin:0!important;text-align:left;}
.closebox{float:center;text-align:center;margin-top:10px;}
</style>
<?php if(isset($tools_settings['notice'])&&$tools_settings['notice']!==''){?>
  <div id="welcome" <?php if($_COOKIE['web_Notice']=='1'){echo 'style="display:none;"';}?>>
    <h4>公告:</h4>
    <script>
      //公告自动关闭控制1->自动关闭;0->不关闭
      var ex = '1';
      //公告自动关闭延时:1秒=1000;
      var extime = '10000';
      if (ex == 1) {
        setTimeout(function() {
          if (document.all) {
            document.getElementById("clickMe").click()
          } else {
            var e = document.createEvent("MouseEvents");
            e.initEvent("click", true, true);
            document.getElementById("clickMe").dispatchEvent(e)
          }
        },extime);
      }
    </script>
    <?php echo $tools_settings['notice'];?>
    <div class="closebox">
      <a href="javascript:void(0)" onclick="$('#welcome').slideUp('slow');$('.closebox').css('display','none');setCookie('web_Notice','1','1');" title="今天不再提醒" id="clickMe">不再提醒</a>
    </div>
  </div>
<?php }?>
</footer>
</body>
</html>
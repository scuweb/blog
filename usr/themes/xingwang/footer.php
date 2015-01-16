<?php
/**
* XingWang Typecho Theme 
* 尾部文件
* footer.php
*/

?>

<footer>
    <div class="footer-bottom">
      <div class="container">
        <div class="pull-left copyright">
          Copyright © <?php _e(date('Y')) ?>&nbsp;<?php $this->options->title() ?> 
        </div>
        <ul class="footer-nav pull-right">
          <li><a href="http://typecho.org/">Typecho 强力驱动</a></li>
          <li><a href="http://www.miibeian.gov.cn">京ICP备13003429号</a></li>
        </ul>
      </div>
    </div>
  </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php $this->options->adminUrl('js/jquery.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/jquery.scrollUp.min.js'); ?>"></script>

    <script>
    $(document).ready(function(){
      $('.comment-list').addClass("list-group");
      $('.comment-parent').addClass("list-group-item");
      $('.comment-body').addClass("thumbnail");
      $('.comment-author').addClass('pull-left');
      $('.comment-meta').addClass('pull-right');
      $('#captcha input').addClass('form-control pull-left');
      $('#captcha img').addClass('pull-right');
      $('#captcha br').remove();
      $('#captcha strong').remove();
    });
    $.scrollUp({
      scrollImg: true,
      scrollText: "回顶部"
    });
    </script>
    <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F111edc58b42a534146e08ae04351c3a8' type='text/javascript'%3E%3C/script%3E"));
</script>


</body>
</html>


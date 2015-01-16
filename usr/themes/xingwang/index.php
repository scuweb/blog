<?php
/**
* 1.Typecho 0.9下的一套基于Bootstrap3的模版
* 2.顶部导航使用了分类和独立页面
* 3.侧边栏不显示分类，显示标签、友情链接(Hanny的Links插件)、最新文章、最近回复、归档、其它
* 4.友情连接只有在安装了<a href="http://www.imhan.com/" target="_blank">Hanny</a>的<a href="http://www.imhan.com/tag/%E5%8F%8B%E6%83%85%E9%93%BE%E6%8E%A5/" target="_blank">Links插件</a>才可显示,未安装不影响使用。 
* 5.评论使用了<a href="http://typecho.org/archives/54/" target="_blank">Captcha的评论验码插件</a>，未安装不影响使用。
* @package XingWang Typecho Theme
* @author ChrisFoon
* @version 1.14.1
* @link http://fuxingwang.cn/
*/
$this->need("header.php");
?>

<?php if($this->is('index')): ?>
<section class="billboard">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="intro animate fadeIn">
            <h1><?php $this->options->description() ?></h1>
            <p class="lead"></p>
          </div>
        </div>

        <div class="col-lg-6">
        	
		</div><!-- /.col-lg-6 -->

      </div>
    </div>
  </section>
<?php endif; ?>
<div class="social-buttons"></div>
<div class="container" <?php if(!$this->is('index')): ?> id="main" <?php endif; ?> >
	<div class="row">
		<div class="col-md-8" role="main">
			<?php while($this->next()): ?>
		        <div class="row">
					<h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
					<div class="post-meta">
						<span><?php _e('作者：'); ?><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> | </span>
						<span><?php _e('时间：'); ?><?php $this->date('F j, Y'); ?> | </span>
						<span><?php _e('分类：'); ?><?php $this->category(','); ?> | </span>
						<span><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></span>
					</div>
		            <div class="post-content">
		    			<?php $this->content('- 阅读剩余部分 -'); ?>
		            </div>
		        </div>
		        <hr/>
			<?php endwhile; ?>
	    	<?php $this->pageNav('&laquo; ', '&raquo;',3,'...','pagination','active'); ?>
		</div><!-- end #col-md-8 -->

		<div class="col-md-3 col-md-offset-1"><?php $this->need("sidebar.php");	?></div>
	</div>
</div>

<?php
$this->need("footer.php");
?>

<?php
/**
* XingWang Typecho Theme 
* 侧栏文件
* sidebar.php
*/
?>

<div class="list-group">
	<form class="navbar-form"  id="search" method="post" action="./" role="search">
	     <div class="input-group">
	        <input type="text" placeholder="查询内容" class="form-control" name="s" >
	        <span class="input-group-btn">
	          <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
	        </span>
	    </div><!-- /input-group -->
	</form>
</div>
<!-- 头部导航使用了分类列表，因此侧边栏就不再显示分类信息了
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <div class="list-group">
        <a class="list-group-item active"><?php _e('分类'); ?></a>
        <?php $this->widget('Widget_Metas_Category_List')->parse('<a class="list-group-item" href="{permalink}">{name}</a>'); ?>
    </div>
<?php endif; ?>
-->

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowTags', $this->options->sidebarBlock)): ?>
    <div class="list-group">
        <a class="list-group-item active"><?php _e('标签'); ?></a>
        <?php $this->widget('Widget_Metas_Tag_Cloud')->parse('<a class="list-group-item" href="{permalink}">{name}<span class="badge pull-right">{count}</span></a>'); ?>
    </div>
<?php endif; ?>

<?php if (class_exists("Links_Plugin")) :?>
<div class="list-group">
	<a class="list-group-item active"><?php _e('友情链接'); ?></a>
	<?php Links_Plugin::output('<a href="{url}" class="list-group-item" title="{title}" target="_blank">{name}</a>'); ?>
</div>
<?php endif; ?>

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <div class="list-group">
		<a class="list-group-item active"><?php _e('最新文章'); ?></a>
        <?php $this->widget('Widget_Contents_Post_Recent')->parse('<a class="list-group-item" href="{permalink}">{title}</a>'); ?>
    </div>
<?php endif; ?>


<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
	<div class="list-group">
        <a class="list-group-item active"><?php _e('最近回复'); ?></a>
        
		<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <a class="list-group-item" href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?>:<?php $comments->excerpt(35, '...'); ?></a>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <div class="list-group">
        <a class="list-group-item active"><?php _e('归档'); ?></a>
        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<a class="list-group-item" href="{permalink}">{date}</a>'); ?>
    </div>
<?php endif; ?>


<?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
	<div class="list-group">
        <a class="list-group-item active"><?php _e('其它'); ?></a>
        
        <?php if($this->user->hasLogin()): ?>
			<a class="list-group-item" href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a>
            <a class="list-group-item" href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a>
        <?php else: ?>
            <a class="list-group-item" href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a>
        <?php endif; ?>
        <a class="list-group-item" href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a>
        <a class="list-group-item" href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a>
	</div>

<?php endif; ?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<aside class="grid-1-4" id="secondary" role="complementary">
    <section class="widget widget_search">
        <h3>文章搜索</h3>
        <form id="search" method="post" action="./" role="search">

            <input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
            <button type="submit" class="submit"><?php _e('搜索'); ?></button>
        </form>
    </section>


    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
        <section class="widget widget-category">
            <h3>文章分类</h3>
            <ul class="widget-list">
                <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                <?php while ($category->next()): ?>
                <li<?php if ($this->is('post')): ?><?php if ($this->category == $category->slug): ?> class="current"<?php endif; ?><?php else: ?><?php if ($this->is('category', $category->slug)): ?> class="current"<?php endif; ?><?php endif; ?>>
                    <a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?><em>(<?php $category->count(); ?>)</em></a>
                    <?php endwhile; ?></li>
            </ul>
        </section>
    <?php endif; ?>


    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget weidget-recent">
		<h3 class="widget-title"><?php _e('最新文章'); ?></h3>
        <ul class="widget-list">
            <li><?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}" title="{title}" class="list-group-item">{title}</a></li>'); ?></li>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
        <section class="widget">
            <h3 class="widget-title"><?php _e('最新评论'); ?></h3>
            <ul class="widget-list clearfix" id="recent-comment">

                <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); ?>
                <?php while($comments->next()): ?>
                    <li><a href="<?php $comments->permalink(); ?>"><?php $comments->gravatar('40', ''); ?></a>
                        <span class="author"><?php $comments->author(false); ?>:</span><a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(35, '...'); ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
        <section class="widget">
            <h3 class="widget-title"><?php _e('归档'); ?></h3>
            <ul class="widget-list">
                <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
                    ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
            </ul>
        </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title"><?php _e('RSS'); ?></h3>
        <ul class="widget-list flinks">
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
        </ul>
    </section>
    <?php endif; ?>

    <?php if($this->is('index')): ?>
        <section class="widget">
            <h3 class="widget-title"><?php _e('友情链接'); ?></h3>
            <ul class="widget-list flinks">
                <li><a href="http://www.scunet.cn" target="_blank">SCUNET首页</a></li>
                <li><a href="http://www.jianghang.name" target="_blank">nodejh</a></li>
            </ul>
        </section>
    <?php else: ?>
    <?php endif; ?>

</aside><!-- end #sidebar -->






 
        
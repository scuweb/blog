<?php $this->need('header.php'); ?>
 
 <div class="container" id="main" >
    <div class="row">
        <ol class="breadcrumb">
        <?php $this->archiveTitle(array(
                    'category'  =>  _t('分类 <span class="label label-success">%s</span> 下的文章'),
                    'search'    =>  _t('包含关键字 <span class="label label-success">%s</span> 的文章'),
                    'tag'       =>  _t('标签 <span class="label label-success">%s</span> 下的文章'),
                    'author'    =>  _t('<span class="label label-success">%s</span> 发布的文章')
                ), '<li class="active">', '</li>'); ?>
        </ol>

    </div>
    <hr/>
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

        <div class="col-md-3 col-md-offset-1"><?php $this->need("sidebar.php"); ?></div>
    </div>
</div>

<?php $this->need('footer.php'); ?>

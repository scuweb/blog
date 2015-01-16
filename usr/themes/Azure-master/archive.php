<?php $this->need('header.php'); ?>
    <div class="content grid-u-1 grid-u-med-3-4">
        <h1 class="breadcrumbs" itemprop="breadcrumb"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1>
        <?php if ($this->have()): ?>
           <?php while($this->next()): ?>
           <div class="posts">
            <article class="post" id="<?php $this->cid() ?>">
                <?php if (isset($this->fields->Status)): ?>
                    <a href="<?php $this->permalink() ?>" title="<?php $this->date(); ?>">
                                <div class="post-content">
                                    <div class="well">
                                        <?php $this->excerpt(250, '......');?>
                                    </div>
                                </div>
                    </a>
                        <?php else: ?>
                            <header class="post-header">
                                    <div class="post-meta">
                                        <span class="date">
                                            <?php $this->date(); ?>
                                        </span>
                                        <span class="commentsnum">
                                            <a href="<?php $this->permalink() ?>#comments">
                                                <?php $this->commentsNum('快抢沙发', '沙发被抢', '%d 条评论'); ?>
                                            </a>
                                        </span>
                                    </div>
                                <a href="<?php $this->permalink() ?>" class="post-title">
                                    <?php $this->title() ?>
                                </a>
                            </header>
                            <div class="post-content">
                                   <?php if ($this->options->TextDisplay == 'text') { ?>
                                       <p><?php $this->excerpt(250, '......');?><p>
                                   <?php } else { ?>
                                        <?php $this->content('继续阅读'); ?>
                                   <?php } ?> 
                            </div>
                            <?php endif; ?>
            </article>
            </div>
            <hr>
            <?php endwhile; ?>
                    <?php else: ?>
                        <article class="post">
                         <div class="alert info">
                                <?php _e( '没有找到相关内容'); ?>
                         </div>
                        </article>
                        <?php endif; ?>
                            <div class="page-nav">
                                <?php $this->pageNav('上一页','下一页',2,'...');?>
                            </div>
                                <?php $this->need('footer.php'); ?>
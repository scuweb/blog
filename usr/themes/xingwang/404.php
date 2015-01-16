<?php $this->need('header.php'); ?>
<section class="page404">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="intro animate fadeIn">
            <h2>404 - <?php _e('页面没找到'); ?></h2>
            <p class="lead"><?php _e('你想查看的页面已被转移或删除了，要不要搜索看看：'); ?></p>
          </div>
        </div>

        <div class="col-lg-6">
            <form class="navbar-form"  id="search" method="post" action="./" role="search">
                 <div class="input-group">
                    <input type="text" placeholder="查询内容" class="form-control" name="s" autofocus >
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div><!-- /input-group -->
            </form>
        </div><!-- /.col-lg-6 -->

      </div>
    </div>
</section>


<?php $this->need('footer.php'); ?>

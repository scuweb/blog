<?php $this->need('header.php'); ?>

 <div class="container" id="main" >
    <div class="row">
        <div class="col-md-8" role="main">
                <div class="row">
                    <h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
                    <div class="post-content">
                        <?php $this->content(); ?>
                    </div>
                </div>
                <hr/>
                <div class="row">
                	<?php $this->need('comments.php'); ?>
                </div>
        </div><!-- end #col-md-8 -->

        <div class="col-md-3 col-md-offset-1"><?php $this->need("sidebar.php"); ?></div>
    </div>
</div>

<?php $this->need('footer.php'); ?>

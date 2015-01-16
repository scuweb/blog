<?php
/**
* XingWang Typecho Theme 
* 头文件
* header.php
*/

?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="<?php $this->options->charset(); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php $this->header(); ?>

	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
  </title>

	<link href="<?php $this->options->themeUrl('css/bootstrap.min.css?v='.time()); ?>" rel="stylesheet">
	<link href="<?php $this->options->themeUrl('css/font-awesome.min.css?v='.time()); ?>" rel="stylesheet">
	<link href="<?php $this->options->themeUrl('css/xingwang.css?v='.time()); ?>" rel="stylesheet">
  <style>
  .billboard {
    background: url(<?php $this->options->themeUrl('img/billboard.jpg'); ?>) center -20px repeat-x;
    background-size: cover;
    padding: 120px 0 70px;
  }
  .page404{
    background: url(<?php $this->options->themeUrl('img/404-3.jpg'); ?>) center -20px repeat-x;
    background-size: cover;
    padding: 120px 0px 200px 0px;
    color: #FFF;
  }
  
  #scrollUp {
    bottom: 20px;
    right: 20px;
    width: 38px; /* Width of image */
    height: 38px; /* Height of image */
    background: url(<?php $this->options->themeUrl('img/top.png'); ?>) no-repeat;
  }
  </style>
	<!--[if lt IE 9]><script src="<?php $this->options->adminUrl('js/ie8-responsive-file-warning.js'); ?>"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="<?php $this->options->adminUrl('js/html5shiv.js'); ?>"></script>
	  <script src="<?php $this->options->adminUrl('js/respond.js'); ?>"></script>
	<![endif]-->

	<!-- Favicons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php $this->options->themeUrl('img/favicon.ico'); ?>">
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('img/favicon.ico'); ?>">
  </head>
  <body>
    <header>
      <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" id="logo" href="<?php $this->options->siteUrl(); ?>">
                        <?php if ($this->options->logoUrl): ?>
                        <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                        <?php endif; ?>
                        <?php $this->options->title() ?>
            </a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if($this->is('index')): ?> class="active"<?php endif; ?> >
                 <a href="<?php $this->options->siteUrl(); ?>"><i class="fa fa-home fa-lg"></i></a>
                </li>
                <!--顶部导航显示分类-->
                <?php $this->widget('Widget_Metas_Category_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <li <?php if($this->is('category',$pages->slug)): ?> class="active"<?php endif; ?> >
                  <a href="<?php $pages->permalink(); ?>" title="<?php $pages->name(); ?>"><?php $pages->name(); ?></a>
                </li>
                <?php endwhile; ?>
                <!--END-->
                <!--顶部导航显示独立页-->
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                  <?php while($pages->next()): ?>
                  <li <?php if($this->is('page',$pages->slug)): ?> class="active"<?php endif; ?> >
                  <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                  </li>
                <?php endwhile; ?>
                <!--END-->
            </ul>
          </div><!-- /.nav-collapse -->
        </div><!-- /.container -->
      </div><!-- /.navbar -->
  	</header>

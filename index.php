<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Testing AjaxFlow">
    <meta name="author" content="EkAndreas">

    <title>Testing Ajaxflow</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">

		<?php wp_head(); ?>

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">AjaxFlow Test</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="/"><i class="fa fa-dashboard"></i> AjaxFlow</a></li>
            <li><a href="https://github.com/EkAndreas/ajaxflow"><i class="fa fa-code"></i> Source Code <i class="fa fa-sign-out"></i></a></li>
						<li><a href="https://github.com/EkAndreas/ajaxflow-test"><i class="fa fa-picture-o"></i> This theme <i class="fa fa-sign-out"></i></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Faster ajax call <small>in WordPress</small> <img id="ajaxloader" style="display: none;" src="<?php echo get_template_directory_uri(); ?>/ajax-loader.gif" alt="ajax-loader" /></h1>
						<p>&nbsp;</p>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div id="fast_lane1" class="col-lg-4">
						<a data-bind="click: function(data, event) { callAjax( 'fast', 1, data, event) }" href="#">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-8">
											<i class="fa fa-bolt fa-5x"></i>
											<button class="btn btn-success" data-bind="click: function(data, event) { callAjax( 'fast', 10, data, event) }, clickBubble: false">x10</button>
											<button class="btn btn-warning" data-bind="click: function(data, event) { callAjax( 'fast', 100, data, event) }, clickBubble: false">x100</button>
											<button class="btn btn-inverse">Clear</button>
										</div>
										<div class="col-xs-4 text-right">
											<p class="announcement-heading" data-bind="html: ajaxflow_time"></p>
											<p class="announcement-text">milliseconds</p>
										</div>
									</div>
								</div>
									<div class="panel-footer announcement-bottom">
										<div class="row">
											<div class="col-xs-10">Click here to<br/>make a call via ajaxflow (shortinit activated)</div>
											<div class="col-xs-2 text-right">
												<i class="fa fa-cogs"></i>
											</div>
										</div>
									</div>
							</div>
						</a>
						<div data-bind="html: ajaxflow_result"></div>
					</div>
          <div id="fast_lane2" class="col-lg-4">
						<a data-bind="click: function(data, event) { callAjax( 'normal', 1, data, event) }" href="#">
							<div class="panel panel-warning">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-6">
											<i class="fa fa-rocket fa-5x"></i>
											<button class="btn btn-success" data-bind="click: function(data, event) { callAjax( 'normal', 10, data, event) }, clickBubble: false">x10</button>
											<button class="btn btn-warning" data-bind="click: function(data, event) { callAjax( 'normal', 100, data, event) }, clickBubble: false">x100</button>
										</div>
										<div class="col-xs-6 text-right">
											<p class="announcement-heading" data-bind="html: ajaxflow_time"></p>
											<p class="announcement-text">milliseconds</p>
										</div>
									</div>
								</div>
									<div class="panel-footer announcement-bottom">
										<div class="row">
											<div class="col-xs-10">Click here to<br/>make a call via ajaxflow</div>
											<div class="col-xs-2 text-right">
												<i class="fa fa-cogs"></i>
											</div>
										</div>
									</div>
							</div>
						</a>
						<div data-bind="html: ajaxflow_result"></div>
					</div>
          <div id="fast_lane3" class="col-lg-4">
						<a data-bind="click: function(data, event) { callAjax( 'traditional', 1, data, event) }" href="#">
							<div class="panel panel-danger">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-6">
											<i class="fa fa-spinner fa-5x"></i>
											<button class="btn btn-success" data-bind="click: function(data, event) { callAjax( 'traditional', 10, data, event) }, clickBubble: false">x10</button>
											<button class="btn btn-warning" data-bind="click: function(data, event) { callAjax( 'traditional', 100, data, event) }, clickBubble: false">x100</button>
										</div>
										<div class="col-xs-6 text-right">
											<p class="announcement-heading" data-bind="html: ajaxflow_time"></p>
											<p class="announcement-text">milliseconds</p>
										</div>
									</div>
								</div>
									<div class="panel-footer announcement-bottom">
										<div class="row">
											<div class="col-xs-10">Click here to<br/>make a call via admin-ajax (WP standard)</div>
											<div class="col-xs-2 text-right">
												<i class="fa fa-cogs"></i>
											</div>
										</div>
									</div>
							</div>
						</a>
						<div data-bind="html: ajaxflow_result"></div>
          </div>

        </div><!-- /.row -->

			</div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
    <!-- Page Specific Plugins -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/knockout.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/ajaxflow.js"></script>

		<?php wp_footer(); ?>

  </body>
</html>

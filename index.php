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
            <h1>Faster ajax call <small>in WordPress</small></h1>
						<p>&nbsp;</p>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-4">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-bolt fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">0</p>
                    <p class="announcement-text">seconds to callback action</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-10">Click here to<br/>make a call via ajaxflow (shortinit activated)</div>
                    <div class="col-xs-2 text-right">
                      <i class="fa fa-cogs"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-warning">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<i class="fa fa-rocket fa-5x"></i>
									</div>
									<div class="col-xs-6 text-right">
										<p class="announcement-heading">0</p>
										<p class="announcement-text">seconds to callback action</p>
									</div>
								</div>
							</div>
							<a href="#">
								<div class="panel-footer announcement-bottom">
									<div class="row">
										<div class="col-xs-10">Click here to<br/>make a call via ajaxflow</div>
										<div class="col-xs-2 text-right">
											<i class="fa fa-cogs"></i>
										</div>
									</div>
								</div>
							</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-danger">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<i class="fa fa-spinner fa-5x"></i>
									</div>
									<div class="col-xs-6 text-right">
										<p class="announcement-heading">0</p>
										<p class="announcement-text">seconds to callback action</p>
									</div>
								</div>
							</div>
							<a href="#">
								<div class="panel-footer announcement-bottom">
									<div class="row">
										<div class="col-xs-10">Click here to<br/>make a call via admin-ajax (WP standard)</div>
										<div class="col-xs-2 text-right">
											<i class="fa fa-cogs"></i>
										</div>
									</div>
								</div>
							</a>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- Page Specific Plugins -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>
		<script src="js/knockout.js"></script>
		<script src="js/ajaxflow.js"></script>
  </body>
</html>

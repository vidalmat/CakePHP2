<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
	<?= $this->html->css('bootstrap'); ?>
	<?= $this->html->css('bootstrap-responsive'); ?>
    <style type="text/css">

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 40px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }
    </style>
	
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-top">
      	<div class="navbar-inner">
          <a class="brand" href="#"><?= $this->fetch('title'); ?></a>
		</div>
	</div>

    <div class="container">

		<div class="row">

		<div class="span8">
			<?= $this->fetch('content'); ?>
		</div>
		<div class="span4">
			<?= $this->fetch('sidebar'); ?>
		</div>
			

		</div>


    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<?= $this->html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'); ?>
	<?= $this->html->script('bootstrap'); ?>
	<?= $this->fetch('script'); ?>

  </body>
</html>


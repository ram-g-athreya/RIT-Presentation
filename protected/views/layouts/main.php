<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/resources/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/resources/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/resources/css/ie.css" media="screen, projection" />
        <![endif]-->

        <!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/resources/css/main.css" /> -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/resources/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/resources/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/resources/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/resources/css/app.css" />

        <title><?php echo CHtml::encode("Stocks"); ?></title>
    </head>

    <body>
        <div class="container" id="page">
            <div id="header">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header col-md-12 col-sm-12 col-xs-12">
                            <a class="navbar-brand col-md-2 col-sm-2 col-xs-12" style="padding-left: 0px; padding-right: 0px;" href="/">
                                <span class="icon-chart">
                                    Stocks.com
                                </span>
                            </a>

                            <form role="search" class="search-bar col-md-10 col-sm-10 col-xs-12">
                                <input type="text" class="form-control col-md-6 col-sm-6 col-xs-2" placeholder="Search" />
                                <button type="submit" class="form-control btn btn-success header-button col-md-1 col-sm-1 col-xs-0">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                                <button type="button" class="form-control btn btn-primary header-button col-md-1 col-sm-1 col-xs-0">
                                    <span class="glyphicon glyphicon-share"></span>
                                </button>
                            </form>

                        </div>
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
            <!-- header -->

            <div id="content">
                <?php echo $content; ?>
            </div><!-- page -->
            <div class="clear"></div>

            <div id="footer">

            </div><!-- footer -->
    </body>
</html>

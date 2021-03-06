<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FullPage.JS and Bootstrap 3</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">-->
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen">
	
	<link rel="stylesheet" type="text/css" href="fullPage/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="fullPage/backgrounds.css" />

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
	
	<script type="text/javascript" src="fullPage/jquery.fullPage.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.dropdown-toggle').dropdown();

			var pepe = $.fn.fullpage({
				slidesColor: ['#428BCA', '#5CB85C', '#5BC0DE', '#F0AD4E', '#FF530D', '#FFFFFF'], // Bootstrap
				anchors: ['home', 'page', 'gallery', 'aboutus', 'contact', 'lastPage'],
				menu: '#menu'
			});
		});
	</script>

    <style type="text/css">
        input, textarea { opacity:0.8;}
        #navbar-collapse-1 { font-size: medium;}
        .section.table { margin: 0;}
        .controlArrow { opacity: 0.5;}
        .controlArrow:hover { opacity: 1;}
        
        @media (max-width: 768px) {
            .container { margin:0 10px;}
            h1{ font-size: 26px !important;	}
            p, label{ font-size: 16px !important; }
        }
        
        @media  (min-width: 769px) and (max-width: 980px) {
            h1{ font-size: 34px !important;	}
            p, label{ font-size: 20px !important; }
        }

        @media (min-width: 981px) {
            h1{ font-size: 48px !important;	}
            p, label{ font-size: 24px !important; }
        }
    </style>

</head>
<body>



            <nav id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">BRAND</a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li data-menuanchor="home" class="active"><a href="#home">Home</a></li>
                            <li data-menuanchor="page"><a href="#page">Page</a></li>
                            <li data-menuanchor="gallery"><a href="#gallery">Gallery</a></li>
<!---->
                            <li data-menuanchor="gallery" class="dropdown"><a href="#gallery" class="dropdown-toggle" data-toggle="dropdown">123 <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li data-menuanchor="gallery1"><a href="#gallery/1">Gallery One</a></li>
                                    <li data-menuanchor="gallery2"><a href="#gallery/2">Gallery Two</a></li>
                                    <li data-menuanchor="gallery3"><a href="#gallery/3">Gallery Three</a></li>
                                </ul>
                            </li>

                            <li data-menuanchor="aboutus"><a href="#aboutus">About us</a></li>
                            <li data-menuanchor="contact"><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>


<div class="section" id="section0">
	<div class="container">
        <div class="row">
            <div class="col-xs-12 bg-content">
                <h1>Tile Specialists</h1>
                <p><!--Welcome News...--></p>
                <p>Tile Removal<br>
                New Installs<br>
                Porcelain</p>
            </div>
        </div>
	</div>
</div>


<div class="section" id="section1">
	<div class="container">
        <div class="row">
            <div class="col-xs-12 bg-content">
                <h1>Page</h1>
                <p>Your creative page..</p>
            </div>
        </div>
	</div>
</div>


<div class="section" id="section2">

    <div class="slide">
		<div class="container">
            <div class="row">
                <div class="col-xs-12 bg-content">
                    <h1>Lightbox Gallery</h1>
                    <p>Slide left or right, and click the number.</p>
                </div>
            </div>
		</div>
	</div>
		
    <div class="slide">
		<div class="container">
            <div class="row">
                <div class="col-xs-12 bg-content">
                    <h1>Gallery</h1>
                    <!--<p><a href=""><img src="fullPage/1.png" alt="..." class="img-responsive" style="margin:auto;"></a></p>-->
                    <p><a href="fullPage/bg1.jpg" data-lightbox="gallery1" title="Gallery One... 1"><img src="fullPage/1.png" alt="Gallery One" title="Gallery One" class="img-responsive" style="margin:auto;"></a>
                    <span style="display:none"><a href="fullPage/bg2.jpg" data-lightbox="gallery1" title="Gallery One... 2"> </a></span></p>
                </div>
            </div>
		</div>
	</div>

    <div class="slide">
    	<div class="container">
            <div class="row">
                <div class="col-xs-12 bg-content">
                    <h1>Gallery</h1>
                    <p><a href="fullPage/bg3.jpg" data-lightbox="gallery2" title="Gallery Two... 1"><img src="fullPage/2.png" alt="Gallery Two" title="Gallery Two" class="img-responsive" style="margin:auto;"></a>
                    <span style="display:none"><a href="fullPage/bg4.jpg" data-lightbox="gallery2" title="Gallery Two... 2"> </a></span></p>
                </div>
            </div>
		</div>
	</div>

    <div class="slide">
		<div class="container">
            <div class="row">
                <div class="col-xs-12 bg-content">
                    <h1>Gallery</h1>
                    <p><a href="fullPage/bg5.jpg" data-lightbox="gallery3" title="Gallery Three... 1"><img src="fullPage/3.png" alt="Gallery Three" title="Gallery Three" class="img-responsive" style="margin:auto;"></a>
                    <span style="display:none"><a href="fullPage/bg4.jpg" data-lightbox="gallery3" title="Gallery Three... 2"> </a><a href="fullPage/bg3.jpg" data-lightbox="gallery3" title="Gallery Three... 3"> </a><a href="fullPage/bg2.jpg" data-lightbox="gallery3" title="Gallery Three... 4"> </a><a href="fullPage/bg1.jpg" data-lightbox="gallery3" title="Gallery Three... 5"> </a></span></p>
                </div>
            </div>
		</div>
	</div>

</div>


<div class="section" id="section3">
	<div class="container">
        <div class="row">
            <div class="col-xs-12 bg-content">
                <h1>About us</h1>
                <p>Your portfolio...</p>
            </div>
        </div>
	</div>
</div>


<div class="section" id="section4">
	<div class="container">
        <div class="row">
            <div class="col-xs-12 bg-content">
                <h1>Contact</h1>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputName" placeholder="your Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="your Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="your Message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Send Mail <span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
	</div>
</div>


<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/lightbox-2.6.min.js" type="text/javascript"></script>
</body>
</html>

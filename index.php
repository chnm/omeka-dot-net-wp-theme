<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>Omeka Help</title>
        <link rel="stylesheet" href="http://omeka.net/application/mu/views/scripts/css/screen.css" type="text/css" media="screen">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
        <meta name="author" content="Center for History and New Media, George Mason University">
        <meta name="description" content="A hosted service for Omeka, web publishing software for cultural institutions.">
        <!-- Reverse links -->
        <link rev="omeka" href="http://omeka.org" title="Omeka is a free, flexible, and open source web-publishing platform for the display of library, museum, archives, and scholarly collections and exhibitions.">
        <link rev="chnm" href="http://chnm.gmu.edu" title="The Center for History and New Media uses digital media and technology to preserve and present history online, transform scholarship across the humanities, and advance historical education and understanding.">
              <!-- JavaScripts -->
              <script src="http://www.google.com/jsapi"></script>

              <script type="text/javascript" charset="utf-8">
                  google.load('jquery', '1.3.2');
                  google.load('jqueryui', '1.7.2');   
              </script>
              <script type="text/javascript" charset="utf-8" src="http://omeka.net/application/mu/views/scripts/javascripts/jquery-inputfieldtext.js"></script>
              <script type="text/javascript" src="http://omeka.net/application/mu/views/scripts/javascripts/omekanet.js"></script>
              <?php if (is_page('contact')): ?>
                  <script type="text/javascript" charset="utf-8">
                    $(document).ready(function() {
                        $('#li--5').append('<span class="reqtxt message">Required. Verify you are a person and not spam.');
                    });
                  </script>
                <?php endif; ?>
            </head> 
            <body>
                <div id="wrap" class="group">
                    <div id="header">
                        <div class="group">
                        <a id="logo" href="http://omeka.net"><img src="http://omeka.net/application/mu/views/scripts/images/omekanetlogo.gif" title="Omeka.net"></a>
                        <div id="primary-nav">
                            <ul id="site-nav">
                            <li id="nav-home"><a href="http://omeka.net">Home</a></li>
                            <li id="nav-about"><a href="http://omeka.net/index/about">About</a></li>
                            <li><a href="http://omeka.net/index/latest-news">News</a></li>
                            <li><a href="<?php echo bloginfo('home'); ?>">Help</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div id="content">
                        <div class="group">
                            
                        	<?php if (have_posts()) : ?>
                                    
                        		<?php while (have_posts()) : the_post(); ?>

                        				<h1><?php the_title(); ?></h1>
                                        <div id="help-content">
                                        
                        					<?php the_content('Read the rest of this entry &raquo;'); ?>
                                        </div>

                        		<?php endwhile; ?>
                            
                            <?php else: ?>
                            <h1>Not Found!</h1>
                            <div id="help-content">
                                
                            <p>Sorry, this page was not found.</p>
                            </div>
                            
                        	<?php endif; ?>
                                <div id="help-navigation">
                                    <h2>Help Contents</h2>
                            	    <ul id="help-navigation-list">
                            	        <li><a href="<?php echo bloginfo('home'); ?>">Help Home</a></li>
                            	        <?php echo wp_list_pages('exclude=3,96&title_li='); ?>
                            	    </ul>
                        	    </div>
                        </div>
                    </div>
                    <div id="footer">
                        <div class="group">
                                <ul id="secondary-nav">
                                    <li><a href="http://omeka.net">Home</a></li>
                                    <li><a href="http://omeka.net/index/about">About</a></li>
                                    <li><a href="http://omeka.net/index/latest-news">News</a></li>
                                    <li><a href="http://help.omeka.net">Help</a></li>
                                    <li><a href="http://omeka.net/terms-of-service">Terms of Service</a></li>
                                </ul>
                			<p id="copyright">Omeka.net is a project of the <a href="http://digitalscholar.org">Corporation for Digital Scholarship</a>. Omeka and the Omeka logo are registered trademarks, used here with permission of the <a href="http://chnm.gmu.edu">Center for History and New Media</a>, <a href="http://www.gmu.edu">George Mason University</a>. Copyright &copy; 2010 Corporation for Digital Scholarship.</p>

                        </div>  
                    </div>
                </div>
            </body>
        </html>

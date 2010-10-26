<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title><?php bloginfo('name'); ?></title>
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
                  google.load('jquery', '1.4.3');
                  google.load('jqueryui', '1.8.5');   
              </script>
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
                                    <li class="nav-home"><a href="http://omeka.net">Home</a></li>
                                    <li class="nav-about"><a href="http://omeka.net/index/about">About</a></li>
                                    <li class="nav-news"><a href="http://blog.omeka.net">News</a></li>
                                    <li class="nav-help"><a href="http://help.omeka.net">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="content">
                        <div class="group">
                            <h1><?php bloginfo('name'); ?></h1>
                            <div id="blog-content">
                                
                        	<?php if (have_posts()) : ?>
                                    
                    		<?php while (have_posts()) : the_post(); ?>
                                <div class="post">
                    				<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    				
                    			<?php if (is_single()): ?>
                                    <div class="post-content">
                    					<?php the_content('Read the rest of this entry &raquo;'); ?>
                                    </div>
                                    <?php comments_template(); ?>
                                <?php else: ?>
                                    <div class="post-content">
                    					<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
                    					<a href="<?php echo the_permalink(); ?>">Continue reading&hellip;</a>
                                    </div>  
                                <?php endif; ?>
                                </div>
                    		<?php endwhile; ?>
                            
                            <?php else: ?>
                                <div class="post">
                                    <h2>Not Found!</h2>
                                    <div class="post-content">
                                        <p>Sorry, this page was not found.</p>
                                    </div>
                                </div>
                        	<?php endif; ?>
                            </div>
                            
                            <div id="blog-navigation">
                                <?php if (get_bloginfo('home') == 'http://help.omeka.net'): ?>
                                <h2>Contents</h2>
                        	    <ul id="blog-navigation">
                        	        <?php echo wp_list_pages('exclude=3,96&title_li='); ?>
                        	    </ul>
                        	    <?php else: ?>
                        	        <h2>Recent Posts</h2>
                                    <ul>
                                        <?php wp_get_archives('type=postbypost&limit=20&title_li='); ?>                             
                                    </ul>
                        	    <?php endif; ?>
                    	    </div>
                        </div>
                    </div>
                    <div id="footer">
                        <div class="group">
                                <ul id="secondary-nav">
                                    <li class="nav-home"><a href="http://omeka.net">Home</a></li>
                                    <li class="nav-about"><a href="http://omeka.net/index/about">About</a></li>
                                    <li class="nav-news"><a href="http://blog.omeka.net">News</a></li>
                                    <li class="nav-help"><a href="http://help.omeka.net">Help</a></li>
                                    <li class="nav-tos"><a href="http://omeka.net/terms-of-service">Terms of Service</a></li>
                                </ul>
                			<p id="copyright">Omeka.net is a project of the <a href="http://digitalscholar.org">Corporation for Digital Scholarship</a>. Omeka and the Omeka logo are registered trademarks, used here with permission of the <a href="http://chnm.gmu.edu">Center for History and New Media</a>, <a href="http://www.gmu.edu">George Mason University</a>. Copyright &copy; 2010 Corporation for Digital Scholarship.</p>

                        </div>  
                    </div>
                </div>
            </body>
        </html>

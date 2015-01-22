<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bebop
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			
            <div class="container-fluid">
                   
                    <!-- START Footer widget area-->
                    
	                    <div id="footer-sidebar" class="row secondary">
                           
                            <div id="footer-sidebar1" class="col-md-4">
                                <?php
                                if(is_active_sidebar('footer-sidebar-1')){
                                dynamic_sidebar('footer-sidebar-1');
                                }
                                ?>
                            </div>
                            
                            <div id="footer-sidebar2" class="col-md-4">
                                <?php
                                if(is_active_sidebar('footer-sidebar-2')){
                                dynamic_sidebar('footer-sidebar-2');
                                }
                                ?>
                            </div>
                            
                            <div id="footer-sidebar3" class="col-md-4">
                                <?php
                                if(is_active_sidebar('footer-sidebar-3')){
                                dynamic_sidebar('footer-sidebar-3');
                                }
                                ?>
                            </div>
                        </div>
                        
                    <!-- /END Footer widget area-->
                    
	                    <a id="home-circle" href="#"><i class="fa fa-angle-up"></i></a>
            </div>
            
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

<!-- Latest compiled and minified Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>

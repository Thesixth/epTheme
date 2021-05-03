<?php get_header(); ?>

<div class="container-404">
    <h2 class="page-heading">Sorry Page not found!</h2>
    <img src="http://source.unsplash.com/604x480/?cats" alt="">

    <h3>Try the following links</h3>

    <ul>
        <li><a href="<?php echo  site_url('');?>">Home</a></li>
        <li><a href="<?php echo  site_url('/about');?>">About</a></li>
        <li><a href="<?php echo  site_url('/privacy-policy');?>">Privacy</a></li>
        <li><a href="<?php echo  site_url('/blog');?>">Blogs</a></li>
        <li><a href="<?php echo  site_url('/activities');?>">Activities</a></li>
        <li><a href="<?php echo  site_url('/contact');?>">Contact</a></li>
    </ul>

</div>

<?php get_footer(); ?>
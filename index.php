<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php echo get_bloginfo('name'); ?></title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" media="screen" href="<?php echo get_site_url(); ?>/wp-content/themes/WP-ISSDL-Coming-Soon-Theme/style.css">

  <?php wp_head(); ?>
</head>

<body>

<div id="edition">
  <div>4th</div>
  <div>edition</div>
</div>

<div id="centered">
  <div id="logo"></div>
  <div id="title">International Summer School on Deep Learning 2021</div>
  <div id="moreinfo">
    <div>July 5<sup>th</sup>-9<sup>th</sup> 2021</div>
    <div>Gdańsk, Poland</div>
  </div>
</div>

<div id="particles-js"></div>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/WP-ISSDL-Coming-Soon-Theme/particles.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/WP-ISSDL-Coming-Soon-Theme/js/app.js"></script>

<?php //get_footer(); ?>
<?php //wp_footer(); ?>

</body>
</html>

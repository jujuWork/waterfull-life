<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waterful Life</title>

    <?php wp_head(); ?>
</head>
<body>
    
<div class="grid-container">
    <div class="grid-item header" id="header">
        <?php get_header(); ?>
    </div>
    <div class="grid-item content" id="content">
        <?php get_template_part('content'); ?>
    </div>
    <div class="grid-item footer" id="footer">
        <?php get_footer(); ?>
    </div>
</div>
    

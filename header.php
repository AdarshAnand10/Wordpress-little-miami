<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="bg-zinc-900 text-white fixed w-full z-50">
    <div class="container mx-auto px-4 py-6">
        <nav class="flex justify-between items-center">
            <a href="<?php echo home_url(); ?>" class="text-2xl font-bold">Little Miami Brewing</a>
            <button id="mobile-menu-btn" class="md:hidden">☰</button>
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'hidden md:flex space-x-6')); ?>
        </nav>
    </div>
</header>

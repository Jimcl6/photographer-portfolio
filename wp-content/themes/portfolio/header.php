<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <header class="header">
        <nav class="nav">
            <div class="logo">
                <h2>Alex Parker</h2>
                <span>Photography</span>
            </div>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="<?= site_url() ?>" <?= (is_page(site_url()) ? 'class="nav-link active"' : 'class="nav-link"') ?>>Home</a></li>
                <li><a href="<?= site_url('/gallery') ?>" <?= is_page('gallery') ? 'class="nav-link active"' : 'class="nav-link"' ?>>Gallery</a></li>
                <li><a href="<?= site_url('/about') ?>" <?= is_page('about') ? 'class="nav-link active"' : 'class="nav-link"' ?>>About Me</a></li>
                <li><a href="<?= site_url('/services') ?>" <?= is_page('services') ? 'class="nav-link active"' : 'class="nav-link"' ?>>Services</a></li>
                <li><a href="<?= site_url('/contact-us') ?>" <?= is_page('contact-us') ? 'class="nav-link active"' : 'class="nav-link"' ?>>Contact</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>
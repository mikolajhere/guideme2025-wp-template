<!DOCTYPE html>
<html lang="pl" class="antialiased scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuideMe</title>
    <meta name="description" content="GuideMe - Your VR Training Solution" />
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100..900&family=Geist+Mono:wght@100..900&display=swap"
        rel="stylesheet" />
    <?php do_action("wp_head"); ?>
</head>

<body <?php body_class(); ?>  x-data="{ mobileMenu: false }" x-effect="mobileMenu ? document.body.classList.add('overflow-hidden') : document.body.classList.remove('overflow-hidden')">
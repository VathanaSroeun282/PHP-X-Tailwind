<?php
    include('./Database/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Boutique</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">
    <?php
        include('./Product/Navbar/nav.php');
        include('./Product/HeroSection/hero.php');
        include('./Product/FeatureProduct/feature.php');
        include('./Product/ContactSection/contact.php');
        include('./Product/NewsletterSection/newsletter.php');
        include('./Product/Footer/footer.php');
    ?>
</body>
</html>
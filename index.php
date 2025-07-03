<?php

$path = $_SERVER["REQUEST_URI"];
$path = explode("/", $path);
$path = array_filter($path);

if (empty($path)) {
    $page_name = "hp";
} else {
    $page_name = array_pop($path);
}

include "header.php";
?>
<main id="page-container">
    <?php include "pages/" . $page_name . ".php"; ?>
</main>
<?php include "footer.php";

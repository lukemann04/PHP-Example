<?php
include_once('header.php');
?>

<body class="bg-info">
<div class="container-fluid col-md-10 offset-md-1">
    <div class="row">
        <div class="card mt-3 px-2 py-2">
            <?php
            echo "Welcome. You have selected " . htmlspecialchars($_GET["rBtn"]) . " for the agreement."
            ?>
        </div>
    </div>
</div>

<?php
include_once('footer.php');
?>




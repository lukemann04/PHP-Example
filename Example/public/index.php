<?php
include_once('header.php');
?>

<body class="bg-info">
<div class="container-fluid col-md-10 offset-md-1">
    <div class="row">
        <div class="card mt-3 px-2 py-2">
            <h1>Stationery Application</h1>
            <p>Welcome to this fictional stationery application page created for ISAD251 example. To continue please accept our terms and conditions</p>
            <form action="registrationPanel.php">
                <input type="radio" id="agree" name="rBtn" value="I agree">
                <label for="agree">I agree</label><br>
                <input type="radio" id="disagree" name="rBtn" value="I disagree">
                <label for="disagree">I disagree</label><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

<?php
include_once('footer.php');
?>




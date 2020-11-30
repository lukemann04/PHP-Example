<?php
include_once('header.php');
?>

    <body class="bg-info">
    <div class="container-fluid col-md-10 offset-md-1">
        <div class="row">
            <div class="card mt-3 px-2 py-2">
                <h1>Stationery Application</h1>
                <p>Welcome to this fictional stationery application page created for ISAD251 example. To continue please accept our terms and conditions</p>
                <form action="landing.php">
                    <label for="customerName">Customer Name:</label>
                    <input type="text" id="customerName" name="name" required>
                    <label for="customerPostcode">Postcode:</label>
                    <input type="text" id="customerPostcode" name="postcode" required>
                    <label for="customerEmail">Email:</label>
                    <input type="text" id="customerEmail" name="email">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

<?php
include_once('footer.php');
?>
<?php
// Include database connection and common functions
include 'connecthome1.php';
include './functions/common_function.php';

// Define an array of months
$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Monthly Values</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Custom CSS */
    body {
        padding: 20px;
    }
</style>
</head>
<body>
<?php include 'navbar.php' ?>
<div class="container">
    <h2>Enter Monthly Values</h2>
    <form id="monthlyForm">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Month</th>
                        <th>Quality</th>
                        <th>Rate</th>
                    </tr>
                </thead>
                <tbody id="monthlyBody">
                    <?php
                    // Loop through the months array
                    foreach ($months as $month) {
                        echo "<tr>";
                        echo "<td>$month</td>";
                        echo "<td><input type='text' class='form-control quality' name='quality[]' required></td>";
                        echo "<td><input type='number' class='form-control rate' name='rate[]' step='0.01' required></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div id="result"></div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        // Form submission
        $("#monthlyForm").submit(function(event) {
            event.preventDefault();
            
            var qualities = $(".quality").map(function() {
                return $(this).val();
            }).get();

            var rates = $(".rate").map(function() {
                return parseFloat($(this).val());
            }).get();

            // Find the index of the minimum rate
            var minRateIndex = rates.indexOf(Math.min.apply(null, rates));

            // Display result
            $("#result").html("Best Quality: " + qualities[minRateIndex] + " at Lowest Rate: " + rates[minRateIndex].toFixed(2));
        });
    });
</script>
</body>
</html>

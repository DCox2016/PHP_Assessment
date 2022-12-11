<?php
//PHP Question 2.2
require_once './config.php';
$lastname = $_GET['lastname'];
$sql = "SELECT * FROM Customers WHERE lastname='$lastname'";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<header>
    <h1 class="text-center">Customer Request</h1>
</header>

<body class="container">
    <div class="label">
        Searched Last Name: <?php echo $lastname ?>
    </div>
    <div class="card">
        <div class="card-body">
            <?php
            if ($result->num_rows > 0) {
                while ($row =  $result->fetch_assoc()) {
                    echo $row["firstname"] . " " . ($row["middlename"] != null ? $row["middlename"] . " " : " ") . $row["lastname"] . '</br>';
                }
            } else {
                echo "0 results found";
            }
            ?>
        </div>
        <div class="card-footer">
            <a href="index.html"><button class="btn btn-primary mt-1">Search another name</button></a>
        </div>
    </div>
</body>
<footer class="text-center align-items-end">
    Made by Dustin Cox
</footer>


</html>
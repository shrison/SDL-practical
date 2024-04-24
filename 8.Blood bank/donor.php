<?php
include 'db_connect.php';

// Add Donor
if(isset($_POST['add_donor'])) {
    $name = $_POST['name'];
    $blood_group = $_POST['blood_group'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO donors (name, blood_group, phone) VALUES ('$name', '$blood_group', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New donor added successfully');</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }
}

// Add Receiver
if(isset($_POST['add_receiver'])) {
    $name = $_POST['name'];
    $blood_group = $_POST['blood_group'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO receivers (name, blood_group, phone) VALUES ('$name', '$blood_group', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New receiver added successfully');</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }
}

// Display Donors
$sql_donor = "SELECT * FROM donors";
$result_donor = $conn->query($sql_donor);

// Display Receivers
$sql_receiver = "SELECT * FROM receivers";
$result_receiver = $conn->query($sql_receiver);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Donor and Receiver Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Donor and Receiver Management</h2>
        </div>
        <div class="form-container">
            <div>
                <h3>Add Donor</h3>
                <form action="" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" required><br><br>
                    <label for="blood_group">Blood Group:</label>
                    <input type="text" name="blood_group" required><br><br>
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" required><br><br>
                    <input type="submit" name="add_donor" value="Add Donor" class="btn">
                </form>
            </div>
            <div>
                <h3>Add Receiver</h3>
                <form action="" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" required><br><br>
                    <label for="blood_group">Blood Group:</label>
                    <input type="text" name="blood_group" required><br><br>
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" required><br><br>
                    <input type="submit" name="add_receiver" value="Add Receiver" class="btn">
                </form>
            </div>
            <div>
                <h3>Donors</h3>
                <?php
                if ($result_donor->num_rows > 0) {
                    while($row = $result_donor->fetch_assoc()) {
                        echo "Name: " . $row["name"]. " - Blood Group: " . $row["blood_group"]. " - Phone: " . $row["phone"]. "<br>";
                    }
                } else {
                    echo "No donors found";
                }
                ?>
            </div>
            <div>
                <h3>Receivers</h3>
                <?php
                if ($result_receiver->num_rows > 0) {
                    while($row = $result_receiver->fetch_assoc()) {
                        echo "Name: " . $row["name"]. " - Blood Group: " . $row["blood_group"]. " - Phone: " . $row["phone"]. "<br>";
                    }
                } else {
                    echo "No receivers found";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php
$conn->close();
?>

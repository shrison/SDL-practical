<?php
// Sample array of employee names
$employees = array("yash", "diptesh", "randi", "dhage", "babay");

// Function to search for employee name
function searchEmployee($name, $employees) {
    $results = array();
    if (!empty($name)) {
        foreach ($employees as $employee) {
            if (stripos($employee, $name) !== false) {
                $results[] = $employee;
                
            }
        }
    }
    return $results;
}

// Check if form is submitted
if(isset($_POST['search'])) {
    $search_term = $_POST['search_term'];
    $search_results = searchEmployee($search_term, $employees);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Employee Search</h2>
        <form method="post" action="">
            <input type="text" name="search_term" placeholder="Enter name">
            <input type="submit" name="search" value="Search">
        </form>
        <?php if(isset($search_results)): ?>
            <?php if(!empty($search_results)): ?>
                <h3>Search Results:</h3>
                <ul>
                    <?php foreach ($search_results as $result): ?>
                        <li><?php echo $result; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <?php if(!empty($search_term)): ?>
                    <p>Employee Not found.</p>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>

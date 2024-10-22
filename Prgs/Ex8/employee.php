<?php
include 'db.php';

// Insert employee
if (isset($_POST['insert'])) {
    $emp_no = $_POST['emp_no'];
    $emp_name = $_POST['emp_name'];
    $date_of_join = $_POST['date_of_join'];
    $salary = $_POST['salary'];
    $designation = $_POST['designation'];

    $sql = "INSERT INTO employee (emp_no, emp_name, date_of_join, salary, designation) 
            VALUES ('$emp_no', '$emp_name', '$date_of_join', '$salary', '$designation')";

    if ($conn->query($sql) === TRUE) {
        echo "New employee record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update employee
if (isset($_POST['update'])) {
    $emp_no = $_POST['emp_no'];
    $emp_name = $_POST['emp_name'];
    $date_of_join = $_POST['date_of_join'];
    $salary = $_POST['salary'];
    $designation = $_POST['designation'];

    $sql = "UPDATE employee SET emp_name='$emp_name', date_of_join='$date_of_join', salary='$salary', designation='$designation' 
            WHERE emp_no='$emp_no'";

    if ($conn->query($sql) === TRUE) {
        echo "Employee record updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete employee
if (isset($_POST['delete'])) {
    $emp_no = $_POST['emp_no'];

    $sql = "DELETE FROM employee WHERE emp_no='$emp_no'";

    if ($conn->query($sql) === TRUE) {
        echo "Employee record deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve employee
if (isset($_POST['retrieve'])) {
    $emp_no = $_POST['emp_no'];

    $sql = "SELECT * FROM employee WHERE emp_no='$emp_no'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output employee details
        while ($row = $result->fetch_assoc()) {
            echo "Employee Number: " . $row["emp_no"] . "<br>";
            echo "Employee Name: " . $row["emp_name"] . "<br>";
            echo "Date of Joining: " . $row["date_of_join"] . "<br>";
            echo "Salary: " . $row["salary"] . "<br>";
            echo "Designation: " . $row["designation"] . "<br><br>";
        }
    } else {
        echo "No employee found with emp_no = $emp_no";
    }
}

$conn->close();
?>

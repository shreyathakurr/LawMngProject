<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body>

<?php
    include_once 'db_con/dbCon.php';

    // Function to generate a random string
    function generateRandomString($length = 5) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    // Check if form is submitted
    if(isset($_POST['submit'])) {
        $conn = connect();

        // Retrieve form data
        $first_Name = $_POST['first_Name'];
        $last_Name = $_POST['last_Name'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $full_address = $_POST['full_address'];
        $city = $_POST['city'];
        $zip_code = $_POST['zip_code'];

        // Generate a random password
        $password = generateRandomString();

        // Insert user data into database
        $u_id = uniqid('Client');
        $sql = "INSERT INTO `user` (`u_id`, `first_Name`, `last_Name`, `email`, `password`, `status`, `role`) VALUES ('$u_id', '$first_Name', '$last_Name', '$email', '$password', 'Active', 'User')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Insert client data into database
            $newName = isset($_FILES["fileToUpload"]["name"]) ? $_FILES["fileToUpload"]["name"] : "";
            $sql2 = "INSERT INTO `client` (`client_id`, `contact_number`, `full_address`, `city`, `zip_code`, `image`) VALUES ('$u_id', '$contact_number', '$full_address', '$city', '$zip_code', '$newName')";
            $result2 = mysqli_query($conn, $sql2);

            if ($result2) {
                echo "<script type='text/javascript'>MySuccessFn();</script>";
            }
        }
    }
?>

<script>
    function MySuccessFn() {
        swal({
            title: "Congratulations! Your registration is successful. Please check your email.",
            type: "success",
            showConfirmButton: true
        }, function() {
            window.location.href = 'http://localhost/lawyermanagementsystem/user_register.php';
        });
    }
</script>

</body>
</html>

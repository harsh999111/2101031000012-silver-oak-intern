<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];

        $host = 'your_database_host';
        $username = 'your_username';
        $password = 'your_password';
        $database = 'your_database_name';

        $conn = new mysqli($host, $username, $password, $database);
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        $createTableSql = "CREATE TABLE IF NOT EXISTS feedbacks (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            feedback TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        $conn->query($createTableSql);

        $insertSql = "INSERT INTO feedbacks (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

        if ($conn->query($insertSql) === TRUE) {
            echo "Thank you for your feedback!";
        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

    <h2>Feedback Form</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="feedback">Feedback:</label>
        <textarea name="feedback" id="feedback" rows="5" required></textarea>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

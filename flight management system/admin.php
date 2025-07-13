<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Management System - Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('background1.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .navbar {
            background-color: #004080; 
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .navbar-links {
            display: flex;
            gap: 1.5rem;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .navbar a:hover {
            background-color: #002b5c;
        }

        .logout-btn {
            background-color: #d9534f;
            border: none;
            color: white;
            padding: 0.5rem 1rem;
            cursor: pointer;
            font-weight: bold;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #c9302c;
        }

        section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        #result {
            max-width: 900px;
            width: 100%;
            padding: 20px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h2 {
            font-size: 1.8rem;
            color: #004080; /* Dark blue heading */
            margin-bottom: 1.5rem;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
            border-radius: 8px;
            overflow: hidden;
            text-align: left;
        }

        thead {
            background-color: #004080; /* Table header background */
            color: #fff;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .error {
            color: #d9534f;
            font-weight: bold;
            text-align: center;
        }

        .link-btn {
            display: inline-block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #004080;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .link-btn:hover {
            background-color: #002b5c;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-links">
            <a href="admin.php">View Flights</a>
            <a href="add.html">Add Flight</a>
            <a href="update.html">Update Flight</a>
            <a href="delete.html">Delete Flight</a>
        </div>
        <button class="logout-btn" onclick="logout()">Logout</button>
    </nav>

    <section>
        <div id="result">
        <?php
            include 'connect.php';

            $sql = "SELECT id, name, brand, type, availability FROM items";
            $result = $conn->query($sql);

            if ($result === false) {
                echo "<p class='error'>Error executing query: " . $conn->error . "</p>";
            } else if ($result->num_rows > 0) {
                echo '<h2>Flight Information</h2>';
                echo '<table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Airline</th>
                                <th>Type</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>';

                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                            <td>' . htmlspecialchars($row['id']) . '</td>
                            <td>' . htmlspecialchars($row['name']) . '</td>
                            <td>' . htmlspecialchars($row['brand']) . '</td>
                            <td>' . htmlspecialchars($row['type']) . '</td>
                            <td>' . htmlspecialchars($row['availability']) . '</td>
                          </tr>';
                }

                echo '</tbody>
                      </table>';
            } else {
                echo '<p class="error">No flight data found.</p>';
            }

            $conn->close();
        ?>
        </div>
    </section>

    <script>
        function logout() {
            window.location.href = 'home.php';
        }
    </script>
</body>
</html>

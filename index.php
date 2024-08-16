<!DOCTYPE html>
<html>
<head>
    <title>KK Wagh College Faculty Management System</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            color: #343a40;
            margin-top: 20px;
            text-align: center;
        }
        h2 {
            color: #495057;
        }
        .container {
            margin-top: 30px;
        }
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            animation: fadeInUp 1s;
        }
        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            color: #ffffff;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to KK Wagh College Faculty Management System</h1>

        <div class="form-container animate__animated animate__fadeInUp">
            <form action="add_employee.php" method="post">
                <h2>Add Employee</h2>
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="post">Post:</label>
                    <input type="text" class="form-control" id="post" name="post">
                </div>
                <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input type="text" class="form-control" id="salary" name="salary">
                </div>
                <button type="submit" class="btn btn-custom">Add Employee</button>
            </form>
        </div>

        <div class="form-container animate__animated animate__fadeInUp">
            <form action="promote_employee.php" method="post">
                <h2>Promote Employee</h2>
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
                <div class="form-group">
                    <label for="amount">Increase in Salary:</label>
                    <input type="text" class="form-control" id="amount" name="amount">
                </div>
                <button type="submit" class="btn btn-custom">Promote Employee</button>
            </form>
        </div>

        <div class="form-container animate__animated animate__fadeInUp">
            <form action="remove_employee.php" method="post">
                <h2>Remove Employee</h2>
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
                <button type="submit" class="btn btn-custom">Remove Employee</button>
            </form>
        </div>

        <div class="text-center animate__animated animate__fadeInUp">
            <h2><a href="display_employees.php">Display All Employees</a></h2>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

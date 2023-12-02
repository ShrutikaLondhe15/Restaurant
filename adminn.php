<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <style>
        .headd {
            background-color: rgb(253, 210, 92);
            margin: 0;
            padding: 10px;
        }

        .form-container {
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 20px;
            display: none;
        }

        .menu-container {
            display: flex;
            flex-direction: column;
        }

        .nav-link {
            cursor: pointer;
            color: white;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .nav {
            background-color: black;
            margin: 0px;
            padding: 0px;
        }

        #span {
            font: optional;
        }

        .container-fluid {
            padding: 0;
        }

        .container{
            margin: 0px;
            padding: 0px;
        }
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row bg">
            <div class="headd col-12">
                <h1 class="text-center p-2" style="font-family: 'Agbalumo'; color: black;">ADMIN DASHBOARD</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="nav flex-column">
                    <a class="nav-link" onclick="showForm('reserve')">Reservation list</a>
                    <a class="nav-link" onclick="showForm('additem')">Add Item</a>
                    <a class="nav-link" onclick="showForm('edititem')">Edit Item</a>
                    <a class="nav-link" onclick="showForm('deleteitem')">Delete Item</a>
                    <!-- <a class="nav-link" onclick="showForm('history')">History</a> -->
                </div>
            </div>

            <div class="col-lg-10">
                <div class="menu-container">
                    <!-- Reservation list -->
                    <div id="reserve" class="form-container">
                        <form action="">
                            <div class="mb-3">
                                <h2>Reservation List</h2>
                                <p id="name"></p><br>
                                <p id="email"></p><br>
                                <p id="datetime"></p><br>
                                <p id="select1"></p><br>
                                <p id="message"></p><br>
                            </div>
                            <button class="btn btn-outline-warning px-2" onclick="document.location='admindash.php'">Reserve Seat</button>
                            <button class="btn btn-outline-warning px-2" onclick="document.location='admindash.php'">Delete Request</button>
                        </form>
                    </div>

                    <script>
                        function retrieveData() {
                            // Get the stored data from local storage
                            const storedData = localStorage.getItem('formData');

                            // Check if data is present
                            if (storedData) {
                                // Parse the JSON string back to an object
                                const formData = JSON.parse(storedData);

                                // Populate the form fields with the retrieved data
                                // name
                                document.getElementById('name').textContent = "Name: " + formData.name;

                                // email
                                document.getElementById('email').textContent = "Email id: " + formData.email;

                                // datetime
                                document.getElementById('datetime').textContent = "Date Time: " + formData.datetime;

                                // people
                                document.getElementById('select1').textContent = "No. of people: " + formData.select1;

                                // msg
                                document.getElementById('message').textContent = "Special Request: " + formData.message;
                            }
                        }

                        // Call the retrieveData function when the page loads
                        document.addEventListener('DOMContentLoaded', retrieveData);
                    </script>

                    <!-- Add Item Form -->
                    <div id="additem" class="form-container">
                        <h2>Add New Item</h2>
                        <form>
                            <div class="mb-3">
                                <label for="itemName" class="form-label">Item Name:</label>
                                <input type="text" class="form-control" id="itemName" name="itemName" required>
                            </div>
                            <div class="mb-3">
                                <label for="itemPrice" class="form-label">Item Price:</label>
                                <input type="number" class="form-control" id="itemPrice" name="itemPrice" step="0.01" required>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="fun1()">Add Item</button>
                        </form>
                    </div>

                    <script>
                        function fun1() {
                            alert('Item added');
                        }

                        function fun2() {
                            alert('Item edited');
                        }

                        function fun3() {
                            alert('Item deleted');
                        }
                    </script>

                    <!-- Edit Item Form -->
                    <div id="edititem" class="form-container">
                        <h2>Edit Item</h2>
                        <form>
                            <!-- Add form elements for editing item -->
                            <div class="mb-3">
                                <label for="editItemName" class="form-label">Item Name:</label>
                                <input type="text" class="form-control" id="editItemName" name="editItemName" required>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="fun2()">Edit Item</button>
                        </form>
                    </div>

                    <!-- Delete Item Form -->
                    <div id="deleteitem" class="form-container">
                        <h2>Delete Item</h2>
                        <form>
                            <!-- Add form elements for deleting item -->
                            <div class="mb-3">
                                <label for="deleteItemName" class="form-label">Item Name:</label>
                                <input type="text" class="form-control" id="deleteItemName" name="deleteItemName" required>
                            </div>
                            <button type="submit" class="btn btn-danger" onclick="fun3()">Delete Item</button>
                        </form>
                    </div>

                    <!-- History Form -->
                    <!-- <div id="history" class="form-container">
                        <h2>History</h2>
                        <form>
                             Add form elements for history
                            <button type="submit" class="btn btn-info">View History</button>
                        </form>
                    </div> -->

                </div>
            </div>
        </div>
    </div>

    <script>
        function showForm(formId) {
            // Hide all forms
            document.querySelectorAll('.form-container').forEach(form => {
                form.style.display = 'none';
            });

            // Show the selected form
            document.getElementById(formId).style.display = 'block';
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>

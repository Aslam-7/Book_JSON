<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: left;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

    </style>
</head>
<body>
    <h1>Book Management System</h1>
    <div class="container">
        <form id="book-form" action="process.php" method="post">
            <input type="text" name="title" placeholder="Title" required>
            <input type="text" name="author" placeholder="Author" required>
            <select name="available">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <input type="number" name="pages" placeholder="Number of Pages" required>
            <input type="text" name="isbn" placeholder="ISBN" required>
            <button type="submit" name="add">Add Book</button>
        </form>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Available</th>
                <th>Pages</th>
                <th>ISBN</th>
                <th>Action</th>
            </tr>
            <?php include 'display.php'; ?>
        </table>
    </div>
</body>
</html>

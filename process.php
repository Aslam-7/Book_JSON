<?php
if (isset($_POST['add'])) {
    $data = file_get_contents('books.json');
    $data = json_decode($data, true);

    $newBook = array(
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'availability' => $_POST['available'],
        'pages' => $_POST['pages'],
        'isbn' => $_POST['isbn']
    );

    $data[] = $newBook;

    file_put_contents('books.json', json_encode($data, JSON_PRETTY_PRINT));
}

if (isset($_POST['delete'])) {
    $data = file_get_contents('books.json');
    $data = json_decode($data, true);

    unset($data[$_POST['index']]);

    $data = array_values($data);

    file_put_contents('books.json', json_encode($data, JSON_PRETTY_PRINT));
}

header("Location: index.html");
?>

<?php
$data = file_get_contents('books.json');
$data = json_decode($data, true);

foreach ($data as $index => $book) {
    echo "<tr>
            <td>{$book['title']}</td>
            <td>{$book['author']}</td>
            <td>{$book['available']}</td>
            <td>{$book['pages']}</td>
            <td>{$book['isbn']}</td>
            <td>
                <form action='process.php' method='post'>
                    <input type='hidden' name='index' value='$index'>
                    <button type='submit' name='delete'>Delete</button>
                </form>
            </td>
          </tr>";
}
?>

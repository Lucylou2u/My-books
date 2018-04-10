<html>
<head>
    <title>My books</title>
    <link rel="stylesheet" href="css/skeleton.css" />
</head>

<?php
$id = $_GET['id'];
require '../app/books.php';
$p = new books();
$books= $p->show($id)


?>

<body>

    <h1>Profile #<?= $books->id ?></h1>

    <table class="u-full-width">
        <tbody>
        <tr>
            <th>booktitle</th>
            <td><?= $books->booktitle ?></td>
        </tr>
        <tr>
            <th>author</th>
            <td><?= $books->author ?></td>
        </tr>
        <tr>
            <th>category</th>
            <td><?= $books->category ?></td>
        </tr>
        <tr>
            <th>releasedate</th>
            <td><?= $books->releasedate ?></td>
        </tr>
        <tr>
            <th>rating</th>
            <td><?= $books->rating ?></td>
        </tr>
        <tr>
            <th>comments</th>
            <td><?= $books->comments ?></td>
        </tr>
        
        </tbody>
    </table>

</body>



</html>
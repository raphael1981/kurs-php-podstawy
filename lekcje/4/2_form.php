<?php
if (isset($_GET['action']) && $_GET['action'] = 'sent') {
    echo '<pre>';
    print_r($_GET);
    print_r($_POST);
    print_r($_REQUEST);
    print_r($_FILES);
    echo '</pre>';

    if (isset($_FILES['plik'])) {
        move_uploaded_file($_FILES['plik']['tmp_name'], __DIR__ . '/upload/' . $_FILES['plik']['name']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <form method="post" action="2_form.php?action=sent" enctype="multipart/form-data">
        <input type="text" name="imie">
        <br>
        <input type="password" name="haslo">
        <br>
        <input type="text" name="email">
        <br>
        <input type="checkbox" checked name="reg">
        <br>
        <input type="radio" name="cos">
        <input type="radio" name="cos">
        <br>
        <input type="file" name="plik">
        <br>
        <select name="opcje">
            <option>
                Opcja 1
            </option>
            <option>
                Opcja 2
            </option>
            <option selected>
                Opcja 3
            </option>
        </select>

        <br>

        <select multiple name="opcjemulti[]">
            <option>
                Opcja 1
            </option>
            <option>
                Opcja 2
            </option>
            <option>
                Opcja 3
            </option>
        </select>

        <br>
        <textarea></textarea>
        <br>
        <button type="submit">
            Wyslij
        </button>
        <button type="reset">
            Reset
        </button>
    </form>

</body>

</html>
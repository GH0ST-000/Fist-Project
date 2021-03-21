<?php
require_once ('dbconfigproduct.php');
$errors=[];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $criterium = $_POST['criterium'];
    if (!$name) {
        $errors[] = 'Name is required';
    }

    if (!$lastname) {
        $errors[] = 'Lastname price is required';
    }

    if (!$lastname) {
        $errors[] = 'Criterium is required';
    }


    if (empty($errors)) {

        $statement = $pdo->prepare("INSERT INTO rate (name, lastname, criterium, cretae_date)
                VALUES (:name, :lastname, :criterium, :date)");
        $statement->bindValue(':name', $name);
        $statement->bindValue(':lastname', $lastname);
        $statement->bindValue(':criterium', $criterium);
        $statement->bindValue(':date', date('Y-m-d H:i:s'));

        $statement->execute();
        header('Location: rate.php');
    } else
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo '
            <div class="alert alert-danger" style="width: 250px;" role="alert">
  ' . $error . '
</div>
            ';


            }
        }
}
?>
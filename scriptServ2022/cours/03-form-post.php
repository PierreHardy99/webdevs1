<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Form - Post</title>
</head>
<body>
<?php
$jobs = ['Webdeveloper','Jardinier','Père-Trapiste','Glacier','Chomeur','Dieu'];
// $_POST['name'];
?>
<form action="04-form-processing.php" method="post">
    <label for="name">FirstName & Surname</label>
    <input type="text" id="name" name="name" required><br>
    <label for="job">Job</label>
    <select name="job" id="job" required>
        <?php 
            foreach ($jobs as $value) {
                echo '<option value="'.$value.'">'.$value.'</option>';
            }
        ?>
    </select>
    <br>
    <label for="birth">Year of birth</label>
    <select name="birth" id="birth" required>
        <?php 
            for ($i = 1950; $i <= date('Y') ; $i++) { 
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
        ?>
    </select>
    <br>
    <input type="submit">
</form>
</body>
</html>
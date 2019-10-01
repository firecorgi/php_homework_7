<?php
$name = $_POST['name'] ?? '';
$surname = $_POST['surname'] ?? '';
$email = $_POST['email'] ?? '';
$num = $_POST['num'] ?? '';
?>
    <a href="tablePage.php">
        Users
    </a>
    <form method='post'>
        <p>
            <label for='name'>
                Name
            </label>
            <input type='text' id='name' name='name' value='<?=$name;?>' placeholder='User name'>
        </p>
        <p>
            <label for='surname'>
                Surname
            </label>
            <input type='text' id='urname' name='surname' value='<?=$surname;?>'
                   placeholder='User surname'>
        </p>
        <p>
            <label for='email'>
                Email
            </label>
            <input type='email' id='email' name='email' value='<?=$email;?>' placeholder='User email'>
        </p>
        <p>
            <label for='num'>
                Number
            </label>
            <input type='number' id='num' name='num' value='<?=$num;?>' placeholder='User phonenumber'>
        </p>
        <button type='submit'>Submit</button>
    </form>

<?php
include 'formHandler.php';



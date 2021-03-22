<?php require_once('../../../private/initialize.php'); 
$page_title= "Lisää käyttäjä";
include(SHARED_PATH . '/staff_header.php');

if(is_post_request()) {
    $user = [];
        $user['firstname'] = $_POST['firstname'] ?? '';
        $user['lastname'] = $_POST['lastname'] ?? '';
        $user['username'] = $_POST['username'] ?? '';
        $user['email'] = $_POST['email'] ?? '';
        $user['password'] = $_POST['password'] ?? '';
        $user['confirm_password'] = $_POST['confirm_password'] ?? '';

        $result=insert_user($user);
            if($result === true) {
                $new_id = mysqli_insert_if($db);
                $_SESSION['message'] = 'Käyttäjä luotu.';
                redirect_to(url_for('/staff/admin/show.php?id=' . $new_id));
            } else {
                $errors = $result;
            }
} else {
    //display the blank form
    $user = [];
    $user["firstname"] = '';
    $user["lastname"] = '';
    $user["username"] = '';
    $user["email"] = '';
    $user["password"] = '';
    $user["confirm_password"] = '';
}
?>

<div class="content">

<a class="back-link" href="<?php echo url_for('/staff/admins/index.php'); ?>">&laquo; Back to List</a>

<div class="user new"></div>

<h1>Luo uusi käyttäjä</h1>


<?php echo display_errors($errors); ?>

<form method="post" action="<?php echo url_for('/staff/admin/new.php'); ?>">  

  <legend class="page_heading">Lisää uusi käyttäjä: </legend><br> 
    <dl>
    <dt>Etunimi: </dt>
    <dd><input type="text" name="firstname" value="<?php echo h($user['firstname']); ?>">
    </dd>
    </dl>
  
    <dl>
    <dt>Sukunimi: </dt>
    <dd><input type="text" name="lastname" value="<?php echo h($user['lastname']); ?>">
    </dd>
    </dl>

    <dl>
    <dt>Käyttäjätunnus: </dt>
    <dd><input type="text" name="username" value="<?php echo h($user['username']); ?>">
    </dd>
    </dl>

    <dl>
    <dt>Sähköposti: </dt>
    <dd><input type="text" name="email" value="<?php echo h($user['email']); ?>">
    </dd>
    </dl>

    <dl>
    <dt>Salasana: </dt>
    <dd><input type="password" name="password" value=""></dd>
    </dl>

    <dl>
    <dt>Vahvista salasana: </dt>
    <dd><input type="password" name="confirm_password" value=""></dd>
    </dl>
    <p>Salasanassa tulisi olla vähintään 12 merkkiä, vähintään yksi iso kirjain, yksi pieni kirjain, yksi numero ja yksi erikoismerkki.
    </p>


<br><br>

  <input type="submit" name="submit" value="Lähetä">  <br><br>
</div>

</form>


</div>


<?php
include(SHARED_PATH . "/staff_footer.php");
?>
<?php
require_once('../../private/initialize.php'); 
$page_title= "Muokkaa käyttäjää";
include(SHARED_PATH . '/admin_header.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('admin/index.php'));
}

$id = $_GET['id']; 

$user = find_student_by_id($id);

if(is_post_request()) {

    // Handle form values sent by index.php
    
    $student = [];
    $student['id'] = $id;
    $student['firstname'] = $_POST['firstname'] ?? '';
    $student['lastname'] = $_POST['lastname'] ?? '';
    $student['username'] = $_POST['username'] ?? '';
    $student['email'] = $_POST['email'] ?? '';
    $student['date_time'] = $_POST['date_time'] ?? '';
    
    $result = update_student($student);
    redirect_to(url_for('/admin/show.php?id=' . $id));

} else {

    $student = find_student_by_id($id);
    
    }

    ?>

    <div class="content">
    <form method="post" action="<?php echo url_for('/admin/edit.php?id=' . h(u($id))); ?>">  

        <legend class="page_heading">Muokkaa käyttäjän tietoja: </legend><br>
           
        Etunimi: <input type="text" name="nimi" value="<?php echo h($student['firstname']); ?>"><br><br>
        
        Sukunimi: <input type="text" name="nimi" value="<?php echo h($student['lastname']); ?>"><br><br>

        Käyttäjänimi: <input type="text" name="nimi" value="<?php echo h($student['username']); ?>"><br><br>

        Sähköposti: <input type="text" name="nimi" value="<?php echo h($student['email']); ?>"><br><br>

        <input type="submit" name="submit" value="Muokkaa">  <br><br>


    </form>



    </div>


<?php
include(SHARED_PATH . "/admin_footer.php");
?>
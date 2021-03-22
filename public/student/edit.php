<?php
require_once('../../private/initialize.php'); 
$page_title= "Muokkaa käyttäjää";
include(SHARED_PATH . '/student_header.php');

// jos käyttäjän id:tä ei löydy, palataan lähtösivulle
if(!isset($_GET['id'])) {
  redirect_to(url_for('/student/index.php'));
}


$id = $_GET['id']; 

$student = find_student_by_id($id);

if(is_post_request()) {

    // Handle form values sent by index.php
    
    $student = [];
    $student['id'] = $id;
    $student['firstname'] = $_POST['firstname'] ?? '';
    $student['lastname'] = $_POST['lastname'] ?? '';
    $student['username'] = $_POST['username'] ?? '';
    $student['email'] = $_POST['email'] ?? '';
    
    $result = update_student($student);
    if($result === true) {
    redirect_to(url_for('/student/show.php?id=' . $id));
    } else {
        $errors=$result;
        //below: good for debugging code
        var_dump($errors);
    }
} else {
    $student = find_student_by_id($id);
}

//below code checks that the information is found after 
// reloading of the page:
$student_set = find_all_students();
$student_count = mysqli_num_rows($student_set);
mysqli_free_result($student_set);

?>

    <div class="content">
    <!-- lisätty alla oleva rivi -->
    <?php echo display_errors($errors); ?>

    <form method="post" action="<?php echo url_for('/student/edit.php?id=' . h(u($id))); ?>">  

        <legend class="page_heading">Muokkaa käyttäjän tietoja: </legend><br>
           
        Etunimi: <input type="text" name="firstname" value="<?php echo h($student['firstname']); ?>"><br><br>
        
        Sukunimi: <input type="text" name="lastname" value="<?php echo h($student['lastname']); ?>"><br><br>

        Käyttäjätunnus: <input type="text" name="username" value="<?php echo h($student['username']); ?>"><br><br>

        Sähköposti: <input type="text" name="email" value="<?php echo h($student['email']); ?>"><br><br>

        <input type="submit" name="submit" value="Muokkaa">  <br><br>


    </form>



    </div>


<?php
include(SHARED_PATH . "/student_footer.php");
?>
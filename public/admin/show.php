<?php require_once('../../private/initialize.php'); ?>

<?php

$id = $_GET['id'] ?? '1'; // returns a value of '1' if it does not get the ID. This is when PHP v.>7.0

$student = find_student_by_id($id);

?>

<?php $page_title = 'Näytä käyttäjä'; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>

<h2 class="page_heading">Käyttäjän tiedot</h2>

<!-- ends the header-section in header.php -->
</div>
</section>

<section class="light-section" id="">
    <div class="container-fluid">
        <div class="container-heading">
            <div class="users listing">

                    <table class="list">
                        <tr>
                            <th>ID</th>
                            <th>Etunimi</th>
                            <th>Sukunimi</th>
                            <th>Käyttäjätunnus</th>
                            <th>Sähköposti</th>

                        </tr>

                        <tr>
                            <td><?php echo h($student['id']); ?></td>
                            <td><?php echo h($student['firstname']); ?></td>
                            <td><?php echo h($student['lastname']); ?></td>
                            <td><?php echo h($student['username']); ?></td>
                            <td><?php echo h($student['email']); ?></td>
                        </tr>
                    </table>  
                <br><br><br><br>
            </div>
        </div>
    </div>
</section>



<?php
include(SHARED_PATH . '/admin_footer.php');
?> 


<?php
// we have to use file path with below as it is the file where 
// file paths are defined!
require_once('../../private/initialize.php');

$student_set = find_all_students();
?>

<?php $page_title= "Käyttäjähallinta"; ?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>

<h2 class="page_heading">Käyttäjähallinta</h2>

<!-- ends the header-section in header.php -->
</div>
</section>

    <section class="light-section" id="">
        <div class="container-fluid">
            <div class="container-heading">

                <div class="users listing">
                    <div class="actions">
                </div>

                    <table class="list">
                    <tr>
                        <th>ID</th>
                        <th>Etunimi</th>
                        <th>Sukunimi</th>
                        <th>Käyttäjätunnus</th>
                        <th>Sähköposti</th>
                        
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>

                    <?php while($student = mysqli_fetch_assoc($student_set)) { ?>
                        <tr>
                            <td><?php echo h($student['id']); ?></td>
                            <td><?php echo h($student['firstname']); ?></td>
                            <td><?php echo h($student['lastname']); ?></td>
                            <td><?php echo h($student['email']); ?></td>
                            <td><?php echo h($student['username']); ?></td>
                            
                            <td><a class="action" href="<?php echo url_for('/admin/show.php?id=' .h(u($student['id']))) ?>">View</a></td>
                            <td><a class="action" href="<?php echo url_for('/admin/edit.php?id=' . h(u($student['id'])));?>">Edit</a></td>
                            <td><a class="action" href="<?php echo url_for('/admin/delete.php?id=' . h(u($student['id'])));?>">Delete</a></td>
                            </tr>
                    <?php } ?>
                    </table>
                    <br><br><br><br><br>

                    <?php mysqli_free_result($student_set)?>
            </div>
        </div>
    </section>

<?php
include(SHARED_PATH . '/admin_footer.php');
?> 

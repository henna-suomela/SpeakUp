<?php

function find_all_students() {
    global $db;

    $sql = "SELECT * FROM students ";
    $sql .= "ORDER BY id ASC";
    //echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

function validate_student($student) {
    $errors = [];

    //etunimi-kenttä
    if(is_blank($student['firstname'])) {
        $errors[]= "Lisää etunimi.";
    } elseif (!has_length($student['firstname'], array('min' => 2, 'max' => 255))) {
        $errors[]="Etunimen pituuden tulee olla 2-255 merkkiä pitkä.";
    }

    //sukunimi-kenttä
    if(is_blank($student['lastname'])) {
        $errors[]= "Lisää sukunimi.";
    } elseif (!has_length($student['lastname'], array('min' => 2, 'max' => 255))) {
        $errors[]="Sukunimen pituuden tulee olla 2-255 merkkiä pitkä.";
    }

    //käyttäjätunnus
    if(is_blank($student['username'])) {
        $errors[]= "Lisää käyttäjätunnus.";
    } elseif (!has_length($student['username'], array('min' => 4, 'max' => 255))) {
        $errors[]="Käyttäjätunnuksen pituuden tulee olla 5-255 merkkiä pitkä.";
    } elseif(!has_unique_username($student['username'], $student['id'] ?? 0)) {
        $errors[]="Käyttäjätunnus on jo varattu. Kokeile toista tunnusta.";
    }

    //sähköposti
    if(is_blank($student['email'])) {
        $errors[]= "Lisää sähköposti.";
    } elseif (!has_length($student['email'], array('max' => 255))) {
        $errors[]="Sähköpostin pituuden tulee olla  alle 255 merkkiä pitkä.";
    } elseif (!has_valid_email_format($student['email'])) {
        $errors[]="Sähköpostin tulee olla oikeassa muodossa.";
    }

    return $errors;

}

function find_student_by_id ($id) {
    global $db;
    $sql = "SELECT * FROM students "; 
    $sql .= "WHERE id='" . db_escape($db, $id) . "'"; //single quotes before and after ID to prevent sql injection
   //echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $student = mysqli_fetch_assoc($result);
    mysqli_free_result($result); // we can now free the results, because we are not looking for ALL the results, but just one 
    return $student;

}

function update_student($student) {
    global $db;

    $errors = validate_student($student);
    if(!empty($errors)) {
        return $errors;
    }

    //$hashed_password = $student['hashed_pw];  

    $sql = "UPDATE students SET ";
    $sql .= "firstname='" . db_escape($db, $student['firstname']) . "',";
    $sql .= "lastname='" . db_escape($db, $student['lastname']) . "',";
    $sql .= "email='" . db_escape($db, $student['email']) . "',";
    $sql .= "username='" . db_escape($db, $student['username']) . "',";
    $sql .= "WHERE id='" . db_escape($db, $student['id']) . "' "; // expect only one result from db, therefore:
    $result = mysqli_query($db, $sql); // for update stt, $result is true/false
    return $student;
    if($result) {
        return true;
    } else {   // update fails here
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
    }
    
}

function insert_student($student){
    global $db;

    $errors = validate_student($student);
    if (!empty($errors)) {
        return $errors;
    }

    //    $hashed_password = $student['hashed_pw'];

    $sql = "INSERT INTO students ";
    $sql .= "(firstname, lastname, username, email, hashed_pw) ";
    $sql .= "'" . db_escape($db, $student['firstname']) . "',";
    $sql .= "'" . db_escape($db, $student['lastname']) . "',";
    $sql .= "'" . db_escape($db, $student['username']) . "',";
    $sql .= "'" . db_escape($db, $student['email']) . "',";
    $sql .= "'" . db_escape($db, $student['hashed_pw']) . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);

    //for insert statements, $result is true/false
    if($result) {
        return true;
    } else {
        //insert failed
        echo mysqli_error($db);
        exit;
    }
}


?>

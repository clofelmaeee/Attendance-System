<?php
session_start();
require "../connection/dbConnect.php";

if (isset($_POST['delete_person'])) {
    $id = mysqli_real_escape_string($con, $_POST['delete_person']);

    $query = "DELETE FROM attributes WHERE id='$id'";
    $result = mysqli_query($con, $query);
    if ($result) {

        $_SESSION['message'] = "Deleted Successfully.";
        header("Location: ../pages/index.php");
    }
}

//kung naka set ang upadate-person, which is ang name sa update button, mo-proceed sa query
if (isset($_POST['update_person'])) {

    // mysqli_real_escape_string() function escapes special characters in a string for use in an SQL query, 
    //taking into account the current character set of the connection.

    $id = mysqli_real_escape_string($con, $_POST['id']);

    $date = mysqli_real_escape_string($con, $_POST['date']);    //2
    $contnum = mysqli_real_escape_string($con, $_POST['contnum']);    //3
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']); //4
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']); //5
    $address = mysqli_real_escape_string($con, $_POST['address']); //6
    $cluster = mysqli_real_escape_string($con, $_POST['cluster']); //7
    $lomas = mysqli_real_escape_string($con, $_POST['lomas']); //8
    $chapel = mysqli_real_escape_string($con, $_POST['chapel']); //9
    $position = mysqli_real_escape_string($con, $_POST['position']); //1

    // sa kaning SET number ='$number' ,,, 
    // ang number kay  sa database
    //unya ang $number kay sa kaning gitawag sa babaw
    $query = "UPDATE attributes SET date='$date', contnum='$contnum', 
                    firstname='$firstname', lastname='$lastname', address='$address', cluster ='$cluster', 
                    lomas='$lomas', chapel='$chapel', position='$position' WHERE id = '$id'";

    $result = mysqli_query($con, $query);
    if ($result) {
        $_SESSION['message'] = "Updated Successfully.";
        header("Location: ../pages/index.php");
    } else {
        echo "error";
    }
}
//kung naka set ang add-person, which is ang name sa add button, mo-proceed sa query
if (isset($_POST['add_person'])) {

    // mysqli_real_escape_string() function escapes special characters in a string for use in an SQL query, 
    //taking into account the current character set of the connection.

    // kani sila kay gitawag ni ang naa sa input adto sa add_person. 
    // kanang gi-input sa user. 
    // ang parameter sa mysli_real_excape_string() kay ang connection sa database
    //ug ang pagtawag sa input gamit ang name=""

    $date = mysqli_real_escape_string($con, $_POST['date']);    //2
    $contnum = mysqli_real_escape_string($con, $_POST['contnum']);    //3
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']); //4
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']); //5
    $address = mysqli_real_escape_string($con, $_POST['address']); //6
    $cluster = mysqli_real_escape_string($con, $_POST['cluster']); //7
    $lomas = mysqli_real_escape_string($con, $_POST['lomas']); //8
    $chapel = mysqli_real_escape_string($con, $_POST['chapel']); //9
    $position = mysqli_real_escape_string($con, $_POST['position']); //10


    // inserting data to the database
    $query = "INSERT INTO attributes(date,contnum,firstname,lastname,address,cluster,lomas,chapel, position)
        Values('$date','$contnum','$firstname','$lastname','$address','$cluster','$lomas','$chapel', '$position')";

    //running the query above with the help of mysqli_query() function. 
    //The function should have two parameters, the connection sa database ug ang query
    $result = mysqli_query($con, $query);

    // this if cindition kay if $result is true mo-send siya ug raw http nga index.php, gamit ang header() fungtion
    if ($result) {
        // header() function sends a raw HTTP header to a client
        $_SESSION['message'] = "Added Successfully.";
        header("Location: ../pages/index.php");
    }
}

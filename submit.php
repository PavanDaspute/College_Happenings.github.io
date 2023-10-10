

<?php

$msg = "";

// check if the user has clicked the button "UPLOAD" 

if (isset($_POST['uploadfile'])) 
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $post_topic = $_POST['post_topic'];
    $post_type = $_POST['post_type'];
    $teacher_pos = $_POST['teacher_pos'];
    $date = $_POST['date'];
    $time = $_POST['post_time'];
    $reg_link = $_POST['reg_link'];
    $org_by = $_POST['org_by'];
    $filename = $_FILES["choosefile"]["name"];
    $tempname = $_FILES["choosefile"]["tmp_name"];  
    $folder = "posts/".$filename;

      // connect with the database

    $db = mysqli_connect("localhost", "root", "", "college_happenings");

        // query to insert the submitted data

        $sql = "INSERT INTO posts (name,email,post_topic,post_type,teacher_pos,date,time,reg_link,org_by,post_profile) VALUES ('$name','$email','$post_topic','$post_type','$teacher_pos','$date','$time','$reg_link','$org_by','posts/$filename')";

     // function to execute above query

        mysqli_query($db,$sql);      
        header("Location: teacher_index.php"); 

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }

}

// $result = mysqli_query($db, "SELECT * FROM image");

?> 

<?php
if(isset($_POST['submit'])){
    $id= $_POST["id"];
    $score = $_POST["score"];
    $total = $_POST["outoff"];
    $percentage=($score*100)/$total;
    $conn = mysqli_connect('127.0.0.1:3308', 'root', '', 'technocase');
    $sql = "INSERT INTO result(eventType,participantScore,totalMarks,participantID,percent) values('CaseStudy',$score,$total,$id,$percentage)";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script type='text/javascript'>alert('Result submited Successfully'); </script>";
                echo "<script type='text/javascript'>window.location='../home/judge_index.html' </script>";
    }
}
?>
<style>
    body{
        margin:auto 0;
    }
    h1{
        padding:10px;
        text-align:center;
        background:green;
        color:white;
        font-size:25px;

    }
    .txt{
        width:100%;
        border:1px solid #eee;
        padding:7px;
        border-radius:6px;
        font-weight:bold;
        margin:10px;

    }
    .submit{
        width:100%;
        border:1px solid brown;
        padding:7px;
        border-radius:6px;
        font-weight:bold;
        margin:10px;
        background:brown;
        text-align:center;
        color:white;
        font-size:20px;
    }
    form{
        padding:25px;
        border:3px solid #09c888;
        margin-left:10%;
        margin-right:10%;
    }
    </style>

    <h1>Mark Proccesing System in PHP and Mysql</h1>
    <form action="marks_form.php" method="post">
        Student ID
        <input type="text" name="id" class="txt" placeholder="Enter Student ID">
        Student Name
        <input type="text" name="name" class="txt" placeholder="Enter Student Name">
        Subject
        <input type="text" name="subj" class="txt" placeholder="Enter Subject">
        Assigment One
        <input type="text" name="aone" class="txt" placeholder="Enter Assigment one Marks">
        Midterm
        <input type="text" name="midterm" class="txt" placeholder="Enter Midterm Marks">
        Assigment Two
        <input type="text" name="atwo" class="txt" placeholder="Enter Assigment Two Marks">
        Fianl Result
        <input type="text" name="final" class="txt" placeholder="Enter Final Marks">
        Current Semester
        <select name="semsid" class="txt">
            <option value="">Select Current Semester</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
</select>
<br><br><br>
<input type="submit" class="submit" name="btn" value="Save Result">
</form>
<?php
    $servername="localhost:3306";
    $user="root";
    $pass="";
    $db="exam";
    $conn=mysqli_connect($servername, $user, $pass,$db);
    if(isset($_POST['btn'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $subj=$_POST['subj'];
        $aone=$_POST['aone'];
        $midterm=$_POST['midterm'];
        $atwo=$_POST['atwo'];
        $final=$_POST['final'];
        $semsid=$_POST['semsid'];

$cmd=mysqli_query($conn,"insert into exams values('$id','$name','$subj','$aone','$midterm','$atwo','$final','$semsid')");

?>
<script>
    alert("Marks Succesfully inserted")
    window.location="conection.php"

    </script>
  <?php  
}
?>


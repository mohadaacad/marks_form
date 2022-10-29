<style>
    table{
        border-collapse:collapse;
        width:95%;
    }
    td{
        border:1px solid #000;
        padding:7px;
        font-family:arial;
        font-style:italic;
    }
</style>



<?php
$servername="localhost:3306";
$user="root";
$pass="";
$db="exam";
?>
<table>
    <tr>
        <td>NO#</td>
        <td>Student ID</td>
        <td>Student Name</td>
        <td>Subject</td>
        <td>Assigment one</td>
        <td>Midterm</td>
        <td>Assigment Two</td>
        <td>Final</td>
        <td>Total</td>
        <td>Semester</td>
</tr>
<?php
$count=1;
$conn=mysqli_connect($servername, $user, $pass,$db);
$sql=mysqli_query($conn,"select * from exams");
while($data=mysqli_fetch_row($sql)){
    $total=$data[3]+$data[4]+$data[5]+$data[6];
    echo "<tr>";
    echo "<td>".$count."</td>";
    echo "<td>".$data[0]."</td>";
    echo "<td>".$data[1]."</td>";
    echo "<td>".$data[2]."</td>";
    echo "<td>".$data[3]."</td>";
    echo "<td>".$data[4]."</td>";
    echo "<td>".$data[5]."</td>";
    echo "<td>".$data[6]."</td>";
    echo "<td>".$total."</td>";
    echo "<td>".$data[7]."</td> </tr>";
    $count++;

}

?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 5a Q1</title> 
</head> 
<body> 
    <?php  
        $name = "Muhammad Asyraf Bin Ahmad"; 
        $matricNo = "AI220239";
        $course = "software programming";
        $yearOfStudy = 3;
        $Address = "no 24, jalan 8, taman kg padang jaya fasa 2"
    ?> 
    <table> 
        <tr> 
            <td>Name</td> 
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>Matric number</td>
            <td><?php echo "$matricNo"; ?></td>
        </tr> 
        <tr>
            <td>Course</td> 
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of study</td> 
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr>
        <tr>
            <td>Address</td> 
            <td><?php echo "$Address"; ?></td> 
        </tr>
    </table> 
</body> 
</html>
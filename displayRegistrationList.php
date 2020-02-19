<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration List</title>
        <style>
            td, th {border: 1px solid #ddd; padding: 8px;text-align: center;}

            tr:nth-child(even){background-color: #f2f2f2;}

            tr:hover {background-color: #ddd;}

            th {padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: lightsteelblue;color: white;}
            
        </style>
        
    </head>
    <body>
        <form id="disp" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="password" placeholder="Enter the password" name="password">
            <input type="submit" name="Submit" value="Submit" >
            
        </form>
       
        
        
        <?php
require("connection.php");
if(isset($_POST['Submit']))
{
        if($_POST['password']=="Shells2k20")
        {
            
                
            echo'<script>document.getElementById("disp").style.display="none"</script>';
        
            $query="SELECT * from registration";
            $result = mysqli_query( $connection,$query)  
                or die ("Error in Query:<br> ".$query. " ".mysqli_error($connection));
            
            echo "<table><tr><th>Sr. No. </th><th>College Name</th><th>Contact Email</th><th>Contact Phone</th><th>Registration Date</th><th>Total Participant</th>";
            for($i=1;$i<=15;$i++)
                echo"<th>Participant ".$i."</th>";
            echo"</tr>";
            $j=1;
            while($rows=mysqli_fetch_array($result))
            {
                echo"<tr><td>".$j."</td><td>".$rows['college_name']."</td>"
                        ."<td>".$rows['contact_email']."</td>"
                        ."<td>".$rows['contact_phone']."</td>"
                        ."<td>".$rows['reg_date']."</td>"
                        ."<td>".$rows['total_participant']."</td>";
                
                for($i=1;$i<=15;$i++)
                    echo"<td>".$rows['participant'.$i]."</td>";
                
                echo"</tr>";
                $j++;
            }
            echo"</table>";
            
            unset($_POST['password']);
            unset($_POST['Submit']);

        }
}
?>

    </body>
</html>

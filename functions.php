<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function writeMsg(){
        echo "quran the best leader ever!<br>";
    }
     writeMsg();
     //we have the functions arguments which are dfined inside the function separated by a comma
    
    function foodNames($fname,$dname){
        echo "$fname best in town when mixed with $dname";
    }
     foodNames("wali","maharage<br>");
     foodNames("ugali","bamia<br>");
     foodNames("biryani","curry mutton<br>");
     foodNames("pilau","kachumbmari<br>");
     foodNames("chapati","supu<br>");

     //in PHP we have strict declaration wich forces datas to work under strict types they are
     //here the auto data type settings are disabled
    
    ?>
    <?php  //declare(strict_types=1);also this declaration should be in a very ast lin e of php 
     function addMe(int$a,int$b){
        return $a+$b;
     }
      //echo addMe(5,"5 days");tjis will bring fatal error coz string was not declared
      echo addMe(5,5);

    ?>
</body>
</html>
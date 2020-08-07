<html>
<body>
<?php



$data="";

    $data .= "<center><h1>RESUME</h1>";

    $data .= $_POST['name']."<br>";
    $data .= $_POST['address']."<br>";
    $data .= $_POST['email']."<br>";
    $data .= $_POST['phoneno']."<br><hr>"; 

    $data .= "<strong>CAREER OBJECTIVE</strong><br>";
    $data .= $_POST['careerobj'];

    $data .= "<br><br><hr><strong>EDUCATION</strong>";
    $data .= "<table border=1><th>Course</th><th>Institute</th><th>Percentage</th><th>Year of passing</th></tr>";
    $data .= "<tr><td>".$_POST['course1']."</td><td>".$_POST['insti1']."</td><td>".$_POST['cgpa1']."</td><td>".$_POST['year1']."</td></tr>";
    $data .= "<tr><td>".$_POST['course2']."</td><td>".$_POST['insti2']."</td><td>".$_POST['cgpa2']."</td><td>".$_POST['year2']."</td></tr>";
    $data .= "<tr><td>".$_POST['course3']."</td><td>".$_POST['insti3']."</td><td>".$_POST['cgpa3']."</td><td>".$_POST['year3']."</td></tr></table><br>";


    $data .= "<hr><strong>ONLINE CERTIFICATIONS</strong><br>";
    $data .= $_POST['site1']."<br>";
    $data .= $_POST['site2']."<br>";
    $data .= $_POST['site3']."<br>";
    $data .= $_POST['site4']."<br>";
    $data .= $_POST['site5']."<hr>";


    $data .= "<strong>ACHIEVEMENTS</strong><br>";
    $data .= $_POST['a1']."<br>".$_POST['ach']."<br>".$_POST['ac1']."<br>".$_POST['achi']."<br>".$_POST['achie']."<br>";

    $data .= "<hr><strong>INDUSTRIAL EXPOSURE</strong><br>";
    $data .= $_POST['in']."<br>".$_POST['ind']."<br>".$_POST['indu']."<br>".$_POST['inde']."<br>".$_POST['indep']."<br>";

    $data .= "<hr><strong>PROJECTS</strong><br><h4>Project 1</h4>";
    $data .= $_POST['pi']."<br>".$_POST['pd']."<br>".$_POST['pdu']."<br><h4>Project 2</h4>";
    $data .= $_POST['pt']."<br>".$_POST['pdes']."<br>".$_POST['pdur']."<br><h4>Project 3</h4>";
    $data .= $_POST['ptit']."<br>".$_POST['prodes']."<br>".$_POST['produr']."<hr>";


    $data .= "<strong>AREA OF INTERESTS</strong><br>";
    $data .= $_POST['inre']."<br>".$_POST['int']."<br>".$_POST['inte']."<br>".$_POST['inter']."<br>".$_POST['inr']."<br>";

    $data .= "<hr><strong>PERSONAL PROFILE</strong><br><br>";
    $data .= "DATE OF BIRTH : ".$_POST['dob']."<br>"."MARITAL STATUS : ".$_POST['maritalstatus']."<br>"."LANGUAGES KNOW : ";
    $data .= $_POST['lang']."<br>"."NATIONALITY : ".$_POST['nation']."<br>"."HOBBIES : ".$_POST['hobbies'];    

    $data .= "<br><br><h4>DECLARATION</h4>".$_POST['decl']."<br><br>";    

    $data .= $_POST['name'];
    $data .= "</center>";

   

    echo $data;


    


















?>

</body>
</html>
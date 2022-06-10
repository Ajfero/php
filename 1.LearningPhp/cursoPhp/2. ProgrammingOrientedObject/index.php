<!DOCTYPE html>
<html>
<head>
    <title>POO Advance</title>
</head>
<body>

    <?php
    
        define('INC', '/includes/');
        require_once __DIR__ . INC . 'course.inc.php';

        $course1 = new Course('POO in Python','Ana','1 Seasons', 0, true);
        
        $course2 = new Course("POO in PHP",'Ajfero','3 Seasons', 100, false);
        
        echo $course1->obtenerTitulo()."<br />";
        echo $course2->getTeacher()."<br />";
    ?>

</body>
</html>
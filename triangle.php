<?php
    class Triangle
    {
        private $side1;
        private $side2;
        private $side3;

        function __construct($parcel_weight, $parcel_height, $parcel_width, $parcel_length)
        {
            $this->side1 = $side_one;
            $this->side2 = $side_two;
            $this->side3 = $side_three;

        }
    }

    function getSide1()
    {
        return $this->side1;
    }

    function getSide2()
    {
        return $this->side2;
    }

    function getSide3()
    {
        return $this->side3;
    }


?>


<!DOCTYPE html>
<html>
<head>
    <title>Triangles</title>
</head>
<body>
    <h1>Is Triangle?</h1>
    <ul>
        <?php
            $new_triangle = new Triangle ($side_one, $side_two, $side_three);
        ?>
    </ul>
</body>
</html>

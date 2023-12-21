<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    
    <?php
        isset( $_POST['base'] ) ? $base = $_POST['base'] : $base = "";
        if( !empty( $base ) ) {
            echo "<hr/>";
            echo "<b>สูตรคูณแม่ {$base}</b><br/><br/>";
            
        }
        for( $i=1; $i<=24; $i++ ) {
            echo "2 x {$i} = ".(2*$i)."<br/>";
        }
    ?>
</body>
</html>
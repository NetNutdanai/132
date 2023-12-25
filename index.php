<meta charset="utf-8">
    <link rel="stylesheet" href="w3.css" />
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <style>
        .scroll {
            width: 150px;
            height: 265px;
            border: 1px solid black; 
            overflow:auto; 
        }
    </style>
    <div class="scroll">
            <tr>
            <?php
            if( !empty($multi_x) ) {
        for( $i=1; $i<=12; $i++ ) {
            echo"<p>";
            echo "$multi_x x {$i} = ".( $multi_x *$i)."<br/>";
            echo"</p>";
        }
    }
    ?>       
    </div>
</body>
</html>
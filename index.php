<meta charset="utf-8">
<link rel="stylesheet" href="mystyle.css" />
</head>

<body>
    <center>
        <?php $multi_x = 2; ?>
        <h1>ตารางสูตรคูณแม่
            <?php echo $multi_x ?>
        </h1>
        <div class="scroll">
            <?php
            if (!empty($multi_x)) {
                for ($i = 1; $i <= 24; $i++) {
                    echo "<p>";
                    echo "$multi_x x {$i} = " . ($multi_x * $i) . "<br/>";
                    echo "</p>";
                }
            }
            ?>
        </div>

    </center>

</body>

</html>
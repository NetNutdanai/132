<html>

<head>
    <meta charset="utf-8" />
</head>
<style>
    .multiTable {
        font-family: "Tahoma";
    }

    .box {
        width: 350px;
        height: 40px;
        color: rgb(0, 0, 0);
        background-color:wheat;
        padding-top: 10px;
        margin: 10px 530px;
        display: flex;
        justify-content: center;
        border-radius: 50px;
        border: solid 3px rgb(23, 43, 42);
    }

    .multiTable {
        width: 300px;
        height: 480px;
        color: rgb(0, 0, 0);
        background-color: wheat;
        padding-top: 10px;
        margin: 20px 555px;
        display: flex;
        justify-content: center;
        border: solid 5px rgb(43, 28, 23);
    }
    body{
        background-image: url('https://i.pinimg.com/originals/52/83/59/5283594dd6b1d0dd4b8a59c723a35024.gif');
        background-size: cover;
    }
</style>

<body>
    <h1>
        <div class="box">Multiplication Table</div>
    </h1>
    <div class="multiTable">
        <?php
        for ($i = 1; $i <= 24; $i++) {
            echo "$myinput x {$i} = " . $myinput * $i . '<br/>';
        }
        ?>
    </div>
    <br />
    <center>
        <form method="post" action="/my-route">
            @csrf
            <input type="text" name="myinput" placeholder="กรุณาใส่เลขที่ต้องการ">

            <button type="submit">Submit</button>
        </form>
    </center>


</body>

</html>

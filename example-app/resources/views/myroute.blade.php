<html>

<head>
    <meta charset="utf-8" />
</head>
<style>
    .multiTable {
        font-family: "Tahoma";
    }

    .box {
        font-family: 'Franklin Gothic Medium';
        width: 350px;
        height: 40px;
        color: rgb(0, 0, 0);
        background-color:rgb(155, 192, 229);
        padding-top: 10px;
        margin: 10px 530px;
        display: flex;
        justify-content: center;
        border-radius: 50px;
        border: solid 3px rgb(23, 43, 42);
    }

    .multiTable {
        font-family: 'Franklin Gothic Medium';
        font-size: large;
        width: 300px;
        height: 510px;
        color: rgb(0, 0, 0);
        background-color: rgb(155, 192, 229);
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
    input{
        width: 200px;
        height: 30px;
        font-size: large;
        padding-top: 10px;
        margin: 10px;
        caret-color: crimson;
    }
    button{
        width: 80px;
        height: 25px;
        font-family: 'Franklin Gothic Medium';
        font-size:medium;
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
            <input type="text" name="myinput" placeholder="กรุณาใส่เลขที่ต้องการ"><br/>

            <button type="submit">Next</button>
        </form>
    </center>


</body>

</html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multiplication Table</title>
    </head>
<style>
    .box {
        width: 350px;
        height: 40px;
        color: rgb(0, 0, 0);
        background-color: rgb(68, 153, 222);
        padding-top: 10px;
        margin: 25px 530px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50px;
        border: solid 2px rgb(43, 28, 23);

    }
    body{
        background-image: url('https://wallpaperaccess.com/full/8351186.gif');
        background-size: cover;
    }
</style>
<body>
    <center>
        <h1>
            <div class="box">Multiplication Table</div>
        </h1>
        <form method="post" action="/my-route">
            @csrf
            <input type="text" name="myinput" placeholder="กรุณาใส่เลขที่ต้องการ">
            <button type="submit">Submit</button>
        </form>

    </center>
</body>

</html>

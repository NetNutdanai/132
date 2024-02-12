{{-- <!doctype html>
<html>

<head>
    <title>Javascript 101</title>
</head>

<body>
    <h1 id="myh1">
    </h1>
    <button onclick="alert('Hello World!')">Click Me!</button>
    <input type="text" id="my_number" value="10">
    <button onclick="myFunction()">submit number</button>
    <br>
    <br>
    <button onclick="myFunction2()">submit my function2</button>
    <br>
    <table id="my_table">
        <thead>
            <tr>
                <td>#</td>
                <td>result</td>
            </tr>
        </thead>
        <tbody id="my_tbody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Hello World - document.ready")
            console.log($('#myh1').text())
            console.log($('#my_number').val())
            $('#myh1').text("แม่สูตรคูณ")
            $('#my_number').val(24)
            // setInterval(() => {
            //     $('#myh1').after(`<h1 class="my_gen_number">setInterval</h1>`)
            // }, 2000);
        });

        function myFunction2() {
            // $($('#my_table').children()[1]).html("<tr><td>1</td><td>test</td></tr>")
            let my_number = parseInt($('#my_number').val())
            let my_code_tr = ``
            for (let i = 1; i <= 24; i++) {
                    my_code_tr += "<tr><td>" + my_number + " x " + i + " = " + (my_number * i) + "</td></tr>";
                }
            $('#my_tbody').html(my_code_tr)
        }

        function myFunction() {
            let my_number = parseInt($('#my_number').val())
            for (let i = 0; i < my_number; i++) {
                $('#myh1').after(`<h1 class="my_gen_number">${i}</h1>`)
            }
            console.log(document.getElementById('my_number').value);
            console.log('Click submit number')

            setTimeout(function() {
                $('.my_gen_number').each(function(index, val) {
                    $(val).remove();
                    //val.remove()
                })
            }, 2000);

        }
        console.log("Hello World!")
        let myval;
        console.log(typeof myval);
        myval = '10';
        myval2 = '2';
        console.log(myval, myval2);
        myval3 = parseInt(myval) + myval2;
        console.log(myval3)
        myval3 = myval - myval2;
        console.log(myval3)
        myval3 = myval * myval2;
        console.log(myval3)
        myval3 = myval / myval2;
        console.log(myval3)
    </script>
    <script>
        let myval4 = [1, 2, 3, 4];

        myval4[5] = 5;
        myval4[6] = [6, 5, 4, 5]
        console.log(myval4)

        for (i = 0; i < myval4.length; i++) {
            console.log("in for", myval4[i])
        }
        myval4.forEach(function(value, index) {
            console.log("in forEach", value, index)
        });

        console.log(document.getElementById('myh1').innerHTML)
        /*
        // php
        foreach($myval4 as $index => $value){

        }
        */
    </script>

</body>
</html> --}}

<!DOCTYPE html>

<head>
    <title>Javascript 101</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <center>
        <h1> Multiplication Table </h1>
    </center>
    <style>

        button{
            padding: 7px;
        }
        #my_number{
            width: 160px;
            height: 25px;
            border: 2px solid black;
            font-size: medium;
            margin: 10;
            text-indent: 5px;
        }
        #submit {
            background-color: rgb(92, 239, 92);
            border-radius: 20px;
        }

        #submit:hover {
            background-color: rgb(12, 190, 6);
        }

        #clear {
            background-color: rgb(240, 121, 100);
            border-radius: 20px;
        }

        #clear:hover {
            background-color: rgb(243, 46, 12);
        }
        b{
            font-style: inherit;
            font-family:'Lucida Sans';
            font-size: 17px;
        }
        h1{
            width: 500px;
            height: 60px;
            font-family: 'Lucida Sans';
            background-color: antiquewhite;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
        }
        tr,th{
            font-size: 20px;
        }
        input{
            border-radius: 10px;
        }
    </style>
    <center>
        <div>
            <label for="number"><b>Input Number : </b></label>
            <input type="number" id="my_number">
            <button id="submit">OK</button>
            <button id="clear">Clear</button>
        </div>

        <div id="table">
            <!-- Table will be generated here -->
        </div>
    </center>
    <script>
        $(document).ready(function() {
            $("#submit").click(function() {
                let number = $("#my_number").val();
                let result = "<tr><th><br>Mutiplication " + number + "</th></tr>";
                for (let i = 1; i <= 24; i++) {
                    result += "<tr><td>" + number + " x " + i + " = " + (number * i) + "</td></tr>";
                }
                $("#table").html(result);
            });

            $("#clear").click(function() {
                clearTable();
            });

            function clearTable() {
                $("#my_number").val("");
                $("#table").empty();
            }
        });
    </script>


</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .div {
            margin-top: 20px;
            margin-left: 400px;
            margin-right: 400px;
            padding: 20px;
            border: 3px;
            border-style: solid;
            border-radius: 10%;
            background-color: aquamarine;
        }
        
        .pd {
            padding-left: 80px;
        }
        
        .mrg {
            text-align: center;
        }
        
        .padd {
            padding-left: 300px;
            padding-top: 0%;
            padding-bottom: 50px;
        }
        
        .rd {
            border-radius: 5%;
        }
    </style>
</head>

<body align="center">
    <div class="div mrg">
        <div class="padd"> Already have Account? <a href="http://127.0.0.1:8000/login">Sign in</a></div>

        <form action="" method="post">
            <img class="mrg" src="ic.png" alt="">
            <table class="pd" cellpadding="10">




                <tr>
                    <td>
                        <label for="">NAME</label></td>
                    <td> <input class="rd" type="text" name="" id=""></td>
                </tr>
                <br>
                <br>


                <tr>
                    <td>

                        <label for="">DOB</label></td>
                    <td> <input type="date" name="" id=""></td>
                </tr>

                <tr>
                    <td>
                        <label for="">EMAIL</label></td>
                    <td> <input type="email" name="" id=""></td>
                </tr>

                <tr>
                    <td>
                        <label for="">PASSWORD</label></td>
                    <td> <input type="password" name="" id=""></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <button>CREATE ACCOUNT</button></td>
                    <td></td>

                </tr>

                <tr>
                    <td colspan="2">
                        <a href="http://127.0.0.1:8000/fb">BACK</a></td>
                    <td></td>
                </tr>
            </table>
        </form>




    </div>

</body>

</html>
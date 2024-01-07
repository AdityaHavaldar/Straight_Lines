
<!DOCTYPE html>
<html>

<head>
    <title>HTML class</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style type="text/css">
        .ani {
            text-transform: uppercase;
            background-image: linear-gradient(-225deg,
                    #231557 0%,
                    #44107a 29%,
                    #ff1361 67%,
                    #fff800 100%);
            background-size: 200px;
            background-clip: border-box;
            background-size: 300% auto;
            color: #fff;
            background-clip: text;
            /* text-fill-color: transparent; */

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 2s linear infinite;
            display: inline-block;
            font-size: 50px;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
            margin-bottom: 20px;
        }

        @keyframes textclip {
            to {
                background-position: 100% center;
            }
        }

        .button {
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #04AA6D;
            border: none;
            border-radius: 15px;
            box-shadow: 10px 10px 5px rgb(136, 46, 240);
        }

        .button:hover {
            background-color: #3e8e41
        }

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);





        }

        .text6 {
            width: 300px;
        }

        .column {
            width: 48.33%;
            float: left;
            text-align: center;
            color: white;
            min-height: 480px;
            border-width: 2px;
            border-color: white;
            border-style: dashed;
            position: relative;
            margin-left: 10px;
            background-color: #202020;
            margin-bottom: 50px;
            margin-top: 0px;
        }

        .dss {
            margin-left: 30px;

            text-align: center;
            margin-top: 20px;
            width: 49.33%;
            height: 454px;

        }




        .nikil {
            margin: 0;
            padding: 0;
            width: 150%;
            height: 7vh;
            color: #202020;
            display: flex;
            flex-direction: row;

            margin-bottom: 20px;
            background: #202020;
            margin-left: 60px;
            border-radius: 5px;
        }

        .glow-on-hover {
            width: 220px;
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }

        .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
        }

        .glow-on-hover:active {
            color: #000
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;
        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        .h2 {
            align-items: center;
            max-width: 100px;
            margin-top: 500px;
        }

        @keyframes glowing {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        input {
            font-size: 20px;
        }
    </style>


    
</head>

<body style="background-color: rgba(0, 0, 0); text-align:center; ">
    <h1 class="ani">two point form</h1>


    <div style="display: flex;">
        <div class="column">
            <a href="index.php" style="margin-left: 675px;font-size: 15px;margin-top:600px;color:orange">HOME</a>


            <div class="dss">
                <label>ENTER THE VALUE OF X1 </label>
                <input type="number" name="x1" id="x1" maxlength="3" autofocus="on" style=" width: 75px;height: 30px;"><br><br><br>
                <label>ENTER THE VALUE OF Y1</label>
                <input type="number" name="y1" id="y1" maxlength="3" style=" width: 75px;height: 30px;"><br><br><br>
                <label>ENTER THE VALUE OF X2 </label>
                <input type="number" name="x2" id="x2" maxlength="3"  style=" width: 75px;height: 30px;"><br><br><br>
                <label>ENTER THE VALUE OF Y2 </label>
                <input type="number" name="y2" id="y2" maxlength="3"  style=" width: 75px;height: 30px;"><br><br><br>
                <div class="nikil">
                    <button class="glow-on-hover" onclick="tslope();draw();" id="spl" >CALCULATE</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a href="2pointform.php"><button class="glow-on-hover" type="reset" id="dist" onclick="reset">RESET</button></a>
                </div>
                <label style="font-size: 20px;color: orange;">EQUATION</label>
                <input type="text" name="equation" id="slpp" style=" width: 400px;height: 30px;"readonly><br><br><br>
            </div>
            <br><label style="font-size: 20px;color: gold;"><b>FORMULAE:- y − y 1 = y 2 − y 1 / x 2 − x 1 ( x − x 1)<br></b></label>
        </div>


        <div class="column" style="background-color: white;color: black"><canvas width="605" height="510" id="myCanvas" style="background-image: url(images/ghr.png); " ;></canvas><br /><br /></div>
    </div>


    <script>
        var x1, x2, y1, y2, g;

        function tslope() {
            x1 = (document.getElementById("x1").value);
            y1 = (document.getElementById("y1").value);
            x2 = (document.getElementById("x2").value);
            y2 = (document.getElementById("y2").value);
            if(x1== "" || y1 =="" || x2 == "" || y2 == "")
            {
                alert("can't be empty")
            }
            else{
            var a = y2 - y1
            var b = x2 - x1
            var c = a / b
            var d = -c * x1
            var e = c + "x"
            var f = d + y1

            if (c <= 0) {
                g = e + "+y+" + f + "=0";
            } else {
                g = e + "-y+" + f + "=0";
            }

            document.getElementById("slpp").value = g;
        }}

        var canvas = document.getElementById('myCanvas');
        var context = canvas.getContext('2d');

        function draw() {
            var x1 = document.getElementById("x1").value * 20;
            var y1 = document.getElementById("y1").value * 20;
            var x2 = document.getElementById("x2").value * 20;
            var y2 = document.getElementById("y2").value * 20;
            context.beginPath();
            context.strokeStyle = "black";
            context.lineWidth = 2;
            context.moveTo(x1, y1);
            context.lineTo(x2, y2);
            context.stroke();
        }

        if (x1 != 0 && x2 != 0 && y1 != 0 && y2 != 0) {
        $(document).ready(function() {
            $("#spl").click(function() {

                    var data = 'x1=' + x1 + '&x2=' + x2 + '&y1=' + y1 + '&y2=' + y2 + '&g=' + g;

                    $.ajax({
                        type: "POST",
                        url: "2pointsenddata.php",
                        data: data,
                        cache: false,
                        success: function(result) {
                            // alert("inserted..!");
                            // console.log(data);
                            
                        }
                    });
                });
            });
        }
            </script>

</body>


</html>

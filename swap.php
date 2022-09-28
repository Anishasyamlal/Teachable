<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Enter first number:<input type="text" id="first"><br>
    Enter second number:<input type="text" id="second"><br>
    <button onclick="swap()">Swap</button><br>
    First number:<input type="text" id="answer1"><br>
    Second number:<input type="text" id="answer2">
</body>
<script>
    function swap(){
        var a,b,c;
        a=Number(document.getElementById("first").value);
        b=Number(document.getElementById("second").value);
        c=a;
        a=b;
        b=c;
        document.getElementById("answer1").value=a;
        document.getElementById("answer2").value=b;
    }
</script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   First Number:<input type="text" id="first"><br>
   Second Number:<input type="text" id="second"><br>
   <button onclick="add()">Add</button><br>
   <input type="button" style="width:20%" id="answer">
</body>
<script>
    function add()
    {
        var a,b,c;
        a=Number(document.getElementById("first").value);
        b=Number(document.getElementById("second").value);
        c=a+b;
        document.getElementById("answer").value=c;
    }
</script>
</html>

<html>
<head>
<link rel="shortcut icon"  href="">
<script type="text/javascript">
    function change()
    {
        var x = document.getElementById("name");
        x.value = x.value.toUpperCase();
    }
</script>
</head>
<body>
Enter Your Name: <input type="text" id="name" onChange="change()">
</body>
</html>
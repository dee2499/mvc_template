
<html>
<head>
<meta name="generator" content="PhpED Version 5.9 (Build 5921)">
<title></title>
<link rel="shortcut icon"  href="">
<script type="text/javascript">
    function roll(img_name1,img_src1,img_name2,img_src2)
    {
        document[img_name1].src = img_src1;
        document[img_name2].src = img_src2;
    }
</script>
</head>
<body>
<a href="iimage_change.php" onmouseover="roll('sub1','Koala.JPG','sub2','Jellyfish.JPG')" onmouseout="roll('sub1','Desert.JPG','sub2','flo.JPG')">
<img src="Desert.JPG" alt="" name="sub1" height="150px" width="150px" /></a>&nbsp;&nbsp;&nbsp;<img src="flo.JPG" alt="" name="sub2" height="150px" width="150px" />
</body>
</html>
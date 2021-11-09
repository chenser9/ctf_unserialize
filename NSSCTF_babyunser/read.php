<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aa的文件查看器</title>
    <style>
        .search_form{
            width:602px;
            height:42px;
        }

        /*左边输入框设置样式*/
        .input_text{
            width:400px;
            height: 40px;
            border:1px solid green;
            /*清除掉默认的padding*/
            padding:0px;
            /*提示字首行缩进*/
            text-indent: 10px;

            /*去掉蓝色高亮框*/
            outline: none;

            /*用浮动解决内联元素错位及小间距的问题*/
            float:left;
        }

        .input_sub{
            width:100px;
            height: 42px;
            background: green;
            text-align:center;
            /*去掉submit按钮默认边框*/
            border:0px;
            /*改成右浮动也是可以的*/
            float:left;
            color:white;/*搜索的字体颜色为白色*/
            cursor:pointer;/*鼠标变为小手*/
        }

        .file_content{
            width:500px;
            height: 242px;
        }
    </style>
</head>
<?php
include('class.php');
$a=new aa();
?>
<body>
<h1>aa的文件查看器</h1>
<form class="search_form" action="" method="post">
    <input type="text" class="input_text" placeholder="请输入搜索内容" name="file">
    <input type="submit" value="查看" class="input_sub">
</form>
</body>
</html>
<?php
error_reporting(0);
$filename=$_POST['file'];
if(!isset($filename)){
    die();
}
$file=new zz($filename);
$contents=$file->getFile();
?>
<br>
<textarea class="file_content" type="text" value=<?php echo "<br>".$contents;?>


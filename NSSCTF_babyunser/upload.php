<html>
<title>aa的文件上传器</title>
<body>
<form action="" enctype="multipart/form-data" method="post">
    <p>请选择要上传的文件：<p>
        <input class="input_file" type="file" name="upload_file"/>
        <input class="button" type="submit" name="submit" value="上传"/>
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $upload_path="upload/".md5(time()).".txt";
    $temp_file = $_FILES['upload_file']['tmp_name'];
    if (move_uploaded_file($temp_file, $upload_path)) {
        echo "文件路径：".$upload_path;
    } else {
        $msg = '上传失败';
    }
}

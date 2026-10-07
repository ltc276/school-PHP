<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>

<body>

<form action="upload_4.php" method="post" enctype="multipart/form-data">
    <p>
        Chọn ảnh cần upload:
    </p>

    <input type="file" id="file" name="file[]" multiple>

    <br>

    <input type="submit" name="sbupload" value="upload4">
</form>

<?php

include("myclass/file.php");

$p = new uploadfile();


/* XÓA FILE */

if(isset($_POST["delete"]))
{
    $filename = $_POST["filename"];

    if($p->upload_delete_file("delete", "", "", "", $filename) == 1)
    {
        echo "Đã xóa: " . $filename;
    }
    else
    {
        echo "File không tồn tại";
    }
}


/* UPLOAD FILE */

if(isset($_POST["sbupload"]))
{
    for($i = 0; $i < count($_FILES["file"]["name"]); $i++)
    {
        echo '<div style="float:left; border:1px solid #c9c9c9; padding:10px; height:300px; margin:5px;">';

        $name_new = $p->getname($_FILES["file"]["name"][$i]);

        $ext = $p->getext($_FILES["file"]["name"][$i]);

        $filename_new = $name_new . "." . $ext;

        // Lấy đường dẫn tự động
        $path = $p->getpath("upload", $filename_new);

        echo "Tên file ban đầu: " . $_FILES["file"]["name"][$i];
        echo "<br>Tên file thay đổi: " . $filename_new;
        echo "<br>Kích thước: " . round($_FILES["file"]["size"][$i]/1024) . "KB";
        echo "<br>Loại file: " . $_FILES["file"]["type"][$i];
        echo "<br>Tên file tạm: " . $_FILES["file"]["tmp_name"][$i];

        echo "<br>Đường dẫn: " . $path;

        echo "<br>";

        if($_FILES["file"]["error"][$i] > 0)
        {
            echo "Đã xảy ra lỗi trong quá trình upload";
        }
        else
        {
            if($p->upfile(
                $filename_new,
                $_FILES["file"]["tmp_name"][$i],
                "upload"
            ) == 1)
            {
                echo "Upload thành công";
                echo "<br>";

                if($p->checkimage($ext) == 1)
                {
                    echo '<img src="'.$path.'" width="200">';

                    echo '<form action="upload4.php" method="post">';

                    // Lưu đường dẫn bằng hidden
                    echo '<input type="hidden" name="filename" value="'.$path.'">';

                    echo '<input type="submit" name="delete" value="Xóa">';

                    echo '</form>';
                }
                else
                {
                    echo "Không phải file ảnh";
                }
            }
            else
            {
                echo "Upload thất bại";
            }
        }

        echo "</div>";
    }
}

?>

</body>
</html>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
class uploadfile
{
	public function upfile($name,$tmp_name,$folder)
    {
    $newname=$folder."/".$name;
    if(move_uploaded_file($tmp_name,$newname))
    {
    	return 1;
    }
    else
    {
    	return 0;
    }
    }
    public function getName($filename)
    {
        return pathinfo($filename, PATHINFO_FILENAME) . "_" . rand(100,999);
    }

    public function getExt($filename)
    {
        return pathinfo($filename, PATHINFO_EXTENSION);
    }

    public function getNewName($filename)
    {
        $name = $this->getName($filename);
        $ext = $this->getExt($filename);

        return $name . "." . $ext;
    }

    public function checkImage($ext)
    {
        if($ext == 'png' || $ext == 'jpg' || $ext == 'gif')
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    public function upload_delete_file($action, $name, $tmp_name, $folder, $filename)
{
    if($action == "upload")
    {
        $newname = $folder . "/" . $name;

        if(move_uploaded_file($tmp_name, $newname))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    if($action == "delete")
    {
        if(file_exists($filename))
        {
            if(unlink($filename))
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        else
        {
            return 0;
        }
    }

    return 0;
}
public function getpath($folder, $name)
    {
        return $folder . "/" . $name;
    }

}
?>
</body>
</html>
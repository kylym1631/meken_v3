<?php
function checkerImg($path)
{
    $arrayToSave = array();
    for ($i = 0;$i<count(scandir($path));$i++)
    {
        $format = substr(scandir($path)[$i],-4);
        if ($format == '.png'|| $format == '.jpg' || $format == 'jpeg' || $format == 'webp' || $format == '.svg')
        {
            $arrayToSave[] = scandir($path)[$i];
        }
    }
    return $arrayToSave;
}

function checkerVideo($path)
{
    $arrayToSave = array();
    for ($i = 0;$i<count(scandir($path));$i++)
    {
        $format = substr(scandir($path)[$i],-4);
        if ($format == '.mp4')
        {
            $arrayToSave[] = scandir($path)[$i];
        }
    }
    return $arrayToSave;
}
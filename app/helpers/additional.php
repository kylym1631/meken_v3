<?php
function debug($val)
{
    echo "<pre>";
    print_r($val);
    echo "</pre>";
}
function imgSwitchPlane($aviaCompany)
{
    switch ($aviaCompany)
    {
        case 'Уральские авиалинии':
            return 'plane_u6.png';
            break;
        case 'S7 airlines':
            return 'plane_S7.png';
            break;
        case 'Аэрофлот':
            return 'plane_su.png';
            break;
        case 'Ютэйр':
            return 'plane_ut.png';
            break;
        case 'Uzbekistan airways':
            return 'plane_hy.png';
            break;
        default:
            return 'plane_for_all.png';
    }
}

function typeMatcher($array,$aviaCompany,$type,$table)
{
    $title=[];

    for ($i=0;$i<count($array);$i++)
    {
        if ($array[$i]->$table == $aviaCompany && $array[$i]->type == $type)
        {
            array_push($title,$array[$i]);
        }
    }
    return $title;
}

function airportsChecker($type)
{
    for ($j=0;$j<count($type);$j++)
    {
        if ($type[$j]->simple_text)
        {
            if ($type[$j]->simple_link)
            {
                if ($type[$j]->link_inside_text)
                {
                    echo '<li class="airports__item">'. $type[$j]->simple_text .' <br> <a class="airports__excess" href="'.$type[$j]->simple_link .'">'.$type[$j]->link_inside_text .'</a>
                                </li>';
                }else
                {
                    echo '<li class="airports__item"><a  href="'.$type[$j]->simple_link .'">'. $type[$j]->simple_text .'</a></li>';
                }

            }else
            {
                echo '<li class="airports__item">'. $type[$j]->simple_text .'</li>';
            }
        }else
        {
            if ($type[$j]->button_inside_link)
            {
                echo '
                            <a href="'. $type[$j]->simple_link .'"><button class="button button__airport">'. $type[$j]->button_inside_link .'</button></a>
                            ';
            }
        }
    }
}

function embassiesChecker($type)
{
    for ($j=0;$j<count($type);$j++)
    {
        if ($type[$j]->simple_text)
        {
            if ($type[$j]->simple_link)
            {
                if ($type[$j]->link_inside_text)
                {
                    echo '<li class="embassies__item">'. $type[$j]->simple_text .' <a href="'.$type[$j]->simple_link .'">'.$type[$j]->link_inside_text .'</a>
                                </li>';
                }elseif ($type[$j]->iframe)
                {
                    echo '
                            <li class="embassies__item">
                                    <a  href="'. $type[$j]->simple_link .'">'. $type[$j]->simple_text .'</a>
                                    <iframe src="'. $type[$j]->iframe .'" width="100%" height="100%" frameborder="0"></iframe>
                                </li>
                            ';
                }else
                {
                    echo '<li class="embassies__item"><a  href="'.$type[$j]->simple_link .'">'. $type[$j]->simple_text .'</a></li>';
                }

            }
            else
            {
                echo '<li class="embassies__item">'. $type[$j]->simple_text .'</li>';
            }
        }
    }
}

<?php

    $timestamp=time();
    $filename='users_excel_'.$timestamp.'.csv'; //comma separated value
    @header("Content-Type: application/vnd.ms-excel");
    @header("Content-Disposition: attachment; filename=\"$filename\"");
    $data="";
    $data="Username,Name,Role,Email"."\n";
        foreach($users as $user)
        {
            $data.=$user->username.",";
            $data.=$user->name.",";
            $data.=$user->role->name.",";
            $data.=$user->email."\n";
        }
    echo $data;

?>
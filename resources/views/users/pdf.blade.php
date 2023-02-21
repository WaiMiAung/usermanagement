<?php
    //include autoloader
    //include_once __DIR__.'/dompdf/autoload.inc.php';
    //include_once "controller/empcontroller.php";
    //reference the Dompdf namespace
    use Dompdf\Dompdf;
    use Dompdf\Options;
    //instantiate and use the dompdf class
    $options=new Options();
    $options->set('isRemoteEnabled',true);
    $options->set('chroot',__DIR__);
    //$options->set('tempDir','/tmp');

    $dompdf=new Dompdf($options);
    
    $html='<!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>User Management</title>
            <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
            <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
            
            </head>
            <body>
            <h2>Users List</h2>
            <table style="border: 1px;border-style: dashed;" >
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                </tr>
            </thead><tbody>';
    foreach($users as $user)
    {
        $html.="<tr>";
        $html.="<td>".$user->username."</td>";
        $html.="<td>".$user->name."</td>";
        $html.="<td>".$user->role->name."</td>";
        $html.="<td>".$user->email."</td>";
        $html.="</tr>";
    }
    $html.="</tbody></table>";
    $html.="</body>";
    $html.="</html>";
    $dompdf->loadHtml($html);
    //Render the HTML as PDF
    $dompdf->render();
    //Output the generated PDF to Browser
    $dompdf->stream();
?>



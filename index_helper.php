<?php

if(isset($_COOKIE['data']) && $_COOKIE['data']!='')
    {
      // echo $_COOKIE['name'].$_COOKIE['email'] . $_COOKIE['number'];
      $data=array('name'=>$_COOKIE['name'],
                  'email'=>$_COOKIE['email'],
                  'number'=>$_COOKIE['number']);
      

        $ch=curl_init();

        curl_setopt($ch,CURLOPT_URL,"http://localhost/UNSTOP_INTERN/server_files/server_edit.php");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        $mes= curl_exec($ch);
        curl_close($ch);

        // echo $_COOKIE['number'];
        // echo $mes;
        
        setcookie('data','',time()-3600);

    }
  

    if(isset($_POST['submit']) && $_POST['name']!='')
    {
        $data=array('name'=>$_POST['name'],
                    'number'=>$_POST['number'],
                    'email'=>$_POST['email']);

        $ch=curl_init();

        curl_setopt($ch,CURLOPT_URL,"http://localhost/UNSTOP_INTERN/server_files/server_add_data.php");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        $mes= curl_exec($ch);
        curl_close($ch);

        // echo $mes;

        header('location'.$_SERVER['PHP_SELF']);
    }

    unset($_POST);
    $_POST=array();

    

?>
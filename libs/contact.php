<?php
session_start();
require_once 'libs/phpmailer/PHPMailerAutoload.php';

$errors =[];

if(isset($_POST['name'],$_POST['email'],$_POST['message'])){
    $fields=[
        'name'=>$_POST['name'],
        'email'=>$_POST['email'],
        'message'=>$_POST['message']
    ];
    foreach($fields as $field=>$data){
        if(empty($data)){
            $errors[]='The '.$field . ' field is required.';
        }
    }
    try {
        if(empty($errors)){
            $m=new PHPMailer;
            $m->isSMTP();
            $m->SMTPAuth=true;
            $m->Host='smtp.mailtrap.io';
            $m->Username='56b6f2cd39d993';//replace with your email address
            $m->Password='71e54e9a28039c';//replace with your password
            $m->SMTPSecure='';
            $m->Port=465;

            $m->isHTML();
            $m->Subject ='Contact form Submitted';
            $m->Body='From:'.$fields['name'].'('.$fields['email'].')<p>'.$fields['message'].'</p>';

            $m->FromName='Contact';
            $m->AddAddress('someone@gmail.com','Some one');
            if ($m->send()) {
                $_SESSION['success']="Thanks for contact me. Will catch you soon.";
                header('Location:index.php#contact');
                die();
            }else{
                $errors[]="Sorry, Could not send email. Try again later.";
            }
        }
    } catch (phpmailerException $e) {
      echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
      echo $e->getMessage(); //Boring error messages from anything else!
    }
}else{
    $errors[]= 'Something went wrong';
}
$_SESSION['errors']=$errors;
$_SESSION['fields']=$fields;
header ('Location:index.php#contact');
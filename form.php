<?php 

    $to="mehtasitesh@gmail.com";
    function input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
      
    $url_path=input($_POST['url']);
    
    
    $subject="Contact form of VS website";
    $message.="First Name :- ".input($_POST['first_name'])."\r \n";
    $message.="Last Name :- ".input($_POST['last_name'])."\r \n";
    $message.="Phone :- ".input($_POST['phone'])."\r \n";
    $message.="Email :- ".input($_POST['email'])."\r \n"; 
    $message.="Query :- ".input($_POST['query'])."\r \n";
    
    
    if($url_path!=''){
                  
        
        $header  = "From: help@VS.in \r\n" .
          "X-Mailer: php\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        // $header .= "Bcc: $emailList\r";
     
             
        $retval = mail ($to,$subject,$message,$header);
        
    
        header("location:../".$url_path);
  
         
    }
    else
    {
        header("location:../");
    }
    
?>
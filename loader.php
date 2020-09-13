<!doctype html>
<html lang="en">
<head>
    <?php include("pack/header.php"); ?>

    <title>Pinnacle - Virutal Assistant</title>
    
    <style>
    
    .header2{
        background:linear-gradient(90deg, rgba(34,47,62,1) 0%, rgba(255,255,255,0) 100%), url("img/cofee.jpg") 50% 50% no-repeat;
        background-size:cover;
        position:relative;
        top:0;
        left:0;
        width:100%;
        height:50%;
        padding:10%;
    } 
    .banner-text-2{ 
        transform:translate(0%,50%);
        color:white;
        font-size:40px;
        font-weight:900;
        text-align:center;
    } 
    .icons-box:hover{
        transition:0.2s all;
        cursor:pointer;
        transform: scale(1.1);
    }
    .hr{
        background: linear-gradient(90deg, orange, red);
        height: 2px;
        width:10%;
        border:none;
    }
    .nav-pills{
        border-radius:3%;
    }
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
       background-color:transparent !important;
       border-left:3px solid #0f4c75 !important;
       color:#0f4c75;
       border-radius:0;
       font-weight:500;
    }
    .nav-pills , .details{
        position:relative;
        z-index:99999;
        margin-top:-10%;
        background-color:#fafafa !important;
    }
    .details{
        margin-top:-2%;
    }
     /*mobile*/
    @media only screen and (max-width: 970px){
        .banner-text-2{
            font-size:30px;
        }
    }
    </style>
    
</head>
  
  
  
<body>
     
             
                    <div class="lds-ripple"><div></div><div></div></div>
                 
             

    
     
</body>
</html>
<script>
    AOS.init({
        delay: 200,
    });
</script>
<?php
function button($type_name){
    
    if($_GET['type']==$type_name){
        echo "active";
    } 
    
}

function content($type_name){
    
    if($_GET['type']==$type_name){
        echo "show active";
    } 
    
    
}

?> 
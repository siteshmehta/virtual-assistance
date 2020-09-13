<!doctype html>
<html lang="en">
<head>
    <?php include("pack/header.php"); ?>

    <title>VS - Virutal Assistant</title>
    
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

    <?php include("pack/navbar.php"); ?>

    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 my-auto">
                <header class="header2">
                   
                        <h1 class="banner-text-2" data-aos="fade-up" data-aos-offset="400">Our services</h1>
                     
                </header> 
            </div>
        </div>
    </div>
    
     
   
    <div class="container pb-4">
        <div class="row">
          <div class="col-lg-3 d-none d-lg-block">
            <div class="nav flex-column nav-pills shadow p-2" role="tablist" aria-orientation="vertical" data-aos="fade-up" data-aos-offset="300">
              <a class="nav-link <?php button('personal'); ?> " id="v-pills-personal-tab" data-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-home">Personal assistant</a>
              <a class="nav-link <?php button('ecommerce'); ?> " id="v-pills-ecommerce-tab" data-toggle="pill" href="#v-pills-ecommerce" role="tab" aria-controls="v-pills-ecommerce" >E-commerce</a>
              <a class="nav-link <?php button('project-manager'); ?> " id="v-pills-project-manager-tab" data-toggle="pill" href="#v-pills-project-manager" role="tab" aria-controls="v-pills-project-manager" >Project manager</a>
              <a class="nav-link" id="v-pills-managing-finance-tab <?php button('managing-finance'); ?>" data-toggle="pill" href="#v-pills-managing-finance" role="tab" aria-controls="v-pills-managing-finance">Managing Finance</a>
              
              
              
              <!--<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings">Settings</a>-->
              <!--<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings">Settings</a>-->
              <!--<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings">Settings</a>-->
            </div>
          </div>
          
          <div class="col-lg-9 shadow-sm p-md-4 p-sm-1 rounded details" data-aos="fade-up" data-aos-offset="300">
            <div class="tab-content " >
                
                
              <div class="tab-pane fade <?php content('personal'); ?> " id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                
                <div class="row p-0">
                    <div class="col-12 ">
                            <font class="heading" style="font-size:30px;">
                                Personal assistant
                            </font>
                            <p class="paragraph">
                                Having a virtual personal assistant will be great for managing your
                                calendar, travel, appointment, social media image, handling queries, and setting up
                                appointments. They are trained to perform multitasks at a time. 
                            </p>
                            <p class="font-weight-bold">
                                What can our personal assistants do?
                            </p>    
                            <br>
                            <p class="paragraph">
                                With our virtual personal assistants, you can rest assured of your tasks accomplished
                                right on time. The list expands as the technology moves forward. The virtual assistant
                                can do followings:
                                
                                <ol class="paragraph">
                                    <li>
                                        Locate information online: Our assistants can help you by surfing the internet to collect information related to you.
                                    </li>
                                    <li>
                                        Organize your calendar: If you’re constantly overbooked and cluttered with
                                        appointments and meetings, let our personal assistant sort it for you.
                                    <li>
                                        <span style="color:black;font-weight:500">Set appointments:</span> Our virtual assistant can manage all your official appointments,
                                        send reminders and meeting confirmation on your behalf.
                                    </li>    
                                    <li>
                                        Display a variety of alerts and reminders: We can assist you with reminders which
                                        will help you to meet deadlines.
                                    </li>
                                    <li>
                                        <span style="color:black;font-weight:500">Handling invoices:</span> All your payments, invoices and basic financial stuff can be
                                        taken care of by your Virtual Assistant.
                                    </li>
                                    <li>
                                        <span style="color:black;font-weight:500">Manage emails:</span> Get all your emails and email accounts managed and sorted as
                                        per your instructions and convenience
                                    </li> 
                                    
                                </ol>
                            </p>
                            
                            
                        
                    </div>
                </div>
              
              </div>
              <div class="tab-pane fade <?php content('ecommerce'); ?> " id="v-pills-ecommerce" role="tabpanel" aria-labelledby="v-pills-ecommerce-tab">
                
                <div class="row p-0">
                    <div class="col-12 ">
                            <font class="heading" style="font-size:30px;">
                                E-Commerce
                            </font>
                            <p class="paragraph">
                                There is so much work to handle in a store saying, order,
                                delivery, product management, product listing and categorization, and social media
                                handles. Avoid making the big mistake of thinking you can do it all alone. Hire a virtual
                                ecommerce assistant in order to work with efficiency.
                            </p>
                            <p class="font-weight-bold">
                                What's the need to hire an e-commerce assistant?
                            </p>    
                            <p class="paragraph">
                                Virtual E-commerce Assistants are trained to manage your business efficiently and
                                effectively. Hiring an e-commerce virtual assistant can ease your everyday
                                responsibilities and give you back your valuable time, first of all. Getting skilled
                                professionals to do the tasks required to operate your business 24/7 also empowers you
                                to become more productive.

                                
                                <ol class="paragraph">
                                    <li>
                                        Update the pricing information: It is really important to update the pricing
                                        information. Why take the burden on your shoulders, when we are here to help
                                        you out. Our assistant will do all pricing related work.
                                    </li>
                                    <li>
                                        Ensure customer satisfaction: Feedback is really important to know whether the
                                        customer is satisfied with the service or not. Our virtual assistant will ensure
                                        customer satisfaction.

                                    <li>
                                        <span style="color:black;font-weight:500">Set appointments:</span> Our virtual assistant can manage all your official appointments,
                                        send reminders and meeting confirmation on your behalf.
                                    </li>    
                                    <li>
                                        <span style="color:black;font-weight:500">Handle shipping:</span> Our assistant can help by handling all shipping work.
                                    </li>
                                    <li>
                                        <span style="color:black;font-weight:500">Manage returns and exchanges:</span> Our E-commerce Assistants can manage
                                        product returns and exchanges. They will coordinate product returns, exchanges
                                        and refunds with customers and suppliers
                                    </li>
                                    <li>
                                        <span style="color:black;font-weight:500">Process orders:</span> Our E-commerce Assistant can handle processing your
                                        company’s orders including order entry, shipment and invoicing. They can compile
                                        the orders, send customer invoices to your drop-ship vendors and/or shipping
                                        companies, and other daily tasks.
                                    </li> 
                                    <li>
                                        <span style="color:black;font-weight:500">Manage promotions:</span> Promotion has become an important part of marketing. Our
                                        virtual assistant can help in building name of the organization
                                    </li>
                                    <li>
                                        Take care of your finances.
                                    </li>
                                    <li>
                                        Return/exchanges
                                    </li>
                                </ol>
                            </p>
                            
                            <p class="font-weight-bold">
                                How can a Virtual E-commerce Assistant benefit you?
                            </p>    
                            <br>
                            <ol class="paragraph">
                                <li>
                                    <span style="color:black;font-weight:500">Content creation:</span> An eCommerce virtual assistant can write quality blogs for your
                                    online shopping store. This benefit is indeed worth noticing as content is king and
                                    without it you cannot reach the audiences on search engines.
                                </li>
                                <li>
                                    <span style="color:black;font-weight:500">Social Media management:</span> They are beneficial towards managing social media
                                    accounts and creating things necessary for digital marketing. They are trained in
                                    running social media posting and ad campaigns.
                                </li>
                                <li>
                                    <span style="color:black;font-weight:500">Great logistic support:</span> All sorts of order processing, returns and exchange related
                                    tasks is taken care of promptly
                                </li>
                            </ol>
                            
                        
                    </div>
                </div>
                  
              </div>
              <div class="tab-pane fade <?php content('project-manager'); ?> " id="v-pills-project-manager" role="tabpanel" aria-labelledby="v-pills-project-manager-tab">
                
                <div class="row p-0">
                    <div class="col-12 ">
                            <font class="heading" style="font-size:30px;">
                                Project Manager
                            </font>
                            <p class="paragraph">
                                Knowing the exact skills, you need and how to get those essential
                                people on board might be the determining factor in how well your start-up thrives. Hire a
                                virtual project manager and ensure every party finishes tasks to meet deadlines.
                                Project managers are the unsung heroes who help organize a business’ workflow and
                                ensure the successful fruition of projects, on time.
                            </p>
                            <p class="font-weight-bold">
                                Why to hire a virtual project manager?
                            </p>    
                             
                                
                                <ol class="paragraph">
                                    <li>
                                        <span style="color:black;font-weight:500">Tasks:</span> Hiring a virtual assistant could save you so much time in the long run,
                                        freeing you up to focus on the bigger, more important tasks.
                                    </li>
                                    <li>
                                        <span style="color:black;font-weight:500">Management Duties:</span> A Virtual Project Manager is your go-to for managing your
                                        team, their duties and the progress of each task. They are the go-to person when
                                        you need status updates on a project and to know that things are going as
                                        planned.
                                    <li>
                                        Scheduling and resource planning: Creating a plan is important to set the project
                                        off on a successful path. The virtual project assistant will create a timeline with
                                        deadlines, assign tasks to the team, control time management, monitor progress,
                                        oversee quality control, provide feedback, and will make sure everything is
                                        successfully completed.
                                    </li>    
                                    <li>
                                        Monitors cost estimates and develops the budget: Our virtual project assistant will
                                        understand the limits of a budget and importance of sticking to it. If a project is
                                        delivered as expected but goes over-budget, then it will still be considered a
                                        failure.
                                    </li> 
                                </ol> 
                                 
                        
                    </div>
                </div>  
                
              </div>
              <div class="tab-pane fade <?php content('managing-finance'); ?>" id="v-pills-managing-finance" role="tabpanel" aria-labelledby="v-pills-managing-finance-tab">
                    
                    <div class="row p-0">
                    <div class="col-12 ">
                            <font class="heading" style="font-size:30px;">
                                Managing finance
                            </font>
                            <p class="paragraph">
                                 We can maintain budgets, make purchases, and keep track of your
                                expenses to make your finances as transparent as possible. The result? Avoid the
                                last-minute rush once tax season comes around!
                            </p>
                            <p class="font-weight-bold">
                                Why to hire a virtual finances manager?
                            </p>    
                            <p class="paragraph">
                                A good virtual assistant is worth their weight in gold. If you’re trying to grow your
                                business, you need to focus 100% of your time on key activities to generate that growth.
                                Your virtual assistant can focus on keeping things organized behind the scenes.
                                
                                <ol class="paragraph">
                                    <li>
                                        Answer Inbound Calls and Screen Potential Clients: Hiring a virtual assistant to
                                        handle inbound call screening and prospective client inquiries can free up some of
                                        your valuable time.
                                    </li>
                                    <li>
                                        Documenting Processes, Procedures and Workflow: A virtual assistant can help in
                                        creating documentation for processes, procedures, and workflow. The more tasks
                                        you outsource to a virtual assistant, the more they can directly document tasks,
                                        while suggesting improvements to make things more efficient.
                                    <li>
                                         Provide Back Office Support: Opening accounts and facilitating account transfers
                                        can take weeks or even months. With the right processes in place, the preparation
                                        of account applications and associated paperwork can be delegated to your virtual
                                        assistant, freeing up an enormous amount of time.
                                    </li>   
                                     
                                </ol>
                            </p>
                            
                            <p class="font-weight-bold">
                                Benefits to hire a finance assistant
                            </p>    
                            <br>
                            <ol class="paragraph">
                                <li> 
                                    A Virtual Assistant with the right training, adequate skills and competent
                                    background can be a great fit for these types of tasks. Your company is
                                    guaranteed to benefit from this deal because your investment outlay will be
                                    minimised.

                                </li>
                                <li>
                                    No HR headaches like tax, national insurance or employee benefits.
                                </li>
                                <li>
                                    Your work will be completed to perfection and delivered on time – or ahead of time.
                                </li>
                            </ol>
                            
                        
                    </div>
                </div>
                
              </div>
               
              
            </div>
          </div>
        </div>
    </div>
   
    
    <?php include("pack/footer.php"); ?>
    
     
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
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
        z-index:2;
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
              <a class="nav-link <?php button('personal'); ?> " id="v-pills-personal-tab" data-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal">Personal assistant</a>
              <a class="nav-link <?php button('social-media'); ?> " id="v-pills-social-media-tab" data-toggle="pill" href="#v-pills-social-media" role="tab" aria-controls="v-pills-social-media">Social media assistant</a>
              <a class="nav-link <?php button('research'); ?> " id="v-pills-research-tab" data-toggle="pill" href="#v-pills-research" role="tab" aria-controls="v-pills-research">Research assistant</a>
              <a class="nav-link <?php button('ecommerce'); ?> " id="v-pills-ecommerce-tab" data-toggle="pill" href="#v-pills-ecommerce" role="tab" aria-controls="v-pills-ecommerce" >E-commerce</a>
              <a class="nav-link <?php button('project-manager'); ?> " id="v-pills-project-manager-tab" data-toggle="pill" href="#v-pills-project-manager" role="tab" aria-controls="v-pills-project-manager" >Project manager</a>
              <a class="nav-link <?php button('event'); ?> " id="v-pills-event-tab" data-toggle="pill" href="#v-pills-event" role="tab" aria-controls="v-pills-event" >Event planning assistant</a>
              <a class="nav-link <?php button('email'); ?> " id="v-pills-email-tab" data-toggle="pill" href="#v-pills-email" role="tab" aria-controls="v-pills-email" >Email managment</a>
              <a class="nav-link" id="v-pills-managing-finance-tab <?php button('managing-finance'); ?>" data-toggle="pill" href="#v-pills-managing-finance" role="tab" aria-controls="v-pills-managing-finance">Managing Finance</a>
              <a class="nav-link <?php button('travel'); ?> " id="v-pills-travel-tab" data-toggle="pill" href="#v-pills-travel" role="tab" aria-controls="v-pills-travel" >Travel managment</a>
              <a class="nav-link <?php button('website'); ?> " id="v-pills-website-tab" data-toggle="pill" href="#v-pills-website" role="tab" aria-controls="v-pills-website" >Website maintenance</a>
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
              <div class="tab-pane fade <?php content('social-media'); ?> " id="v-pills-social-media" role="tabpanel" aria-labelledby="v-pills-social-media-tab">
                
                <div class="row p-0">
                    <div class="col-12 ">
                            <font class="heading" style="font-size:30px;">
                                Social media assistant
                            </font>
                            <p class="paragraph">
                                Sometimes, little things make a big difference. In today’s digital
                                world, there is a necessity to maintain brand image on social media. Instead of doing it
                                your own, let us handle it. Social media presence is vital if you are running a small
                                business. It can increase your sales, widen your market, and generate new leads.
                            </p>
                            <p class="font-weight-bold">
                                Why choose a virtual social media assistant?
                            </p>   
                            <p class="paragraph"> 
                                
                                <ol class="paragraph">
                                    <li>
                                        Researching on trends: Stay updated on the current trends in your industry and
                                        come up with newer social media posts or blog ideas through our social media assistants.
                                    </li>
                                    <li>
                                        Generating ideas for page posts: Our virtual assistant can help you in generating
                                        ideas for the social media account which will help you to grab attention of the audiences.
                                    <li>
                                        <span style="color:black;font-weight:500">Updating social media profiles regularly:</span> It is not an easy task to keep your social
                                        media profile up-to-date. Don’t take too much stress on your mind. Let us manage the account.

                                    </li>    
                                    <li>
                                         Researching for content: Research is very important. The content needs to be
                                        accurate as it will influence so many. Our experienced and skilled assistant will
                                        definitely prove to be great. Catchy Posts are the need on social media and they
                                        know how to create the catchy and relevant posts for your brand.
                                    </li>
                                    <li>
                                        <span style="color:black;font-weight:500">Managing campaigns:</span> Advertisements and campaigns helps the audience to
                                        identify the organization. Hire our assistant to be successful. 
                                    </li>
                                    <li>
                                        <span style="color:black;font-weight:500">Creating and sending out monthly newsletters and promotions:</span> Promotion is an
                                        essential tool which helps the business to flourish.
                                    </li> 
                                    <li>
                                        <span style="color:black;font-weight:500">Scheduling content posts:</span> to Hire our virtual assistant get your content planned
                                        and scheduled for social media engagement. 
                                    </li>
                                    <li>
                                        <span style="color:black;font-weight:500">Account Set Up:</span> Get your account set up to go live and target your audience with
                                        the right social media assistance. 
                                    </li>
                                    <li>
                                        <span style="color:black;font-weight:500">View Analytics and reporting competitor activity:</span> Analyse your web presence,
                                        current traffic, user engagement and other things with our social media assistants.
                                    </li>
                                    
                                </ol>
                            </p>
                            
                            
                        
                    </div>
                </div>
              
              </div>
              <div class="tab-pane fade <?php content('research'); ?> " id="v-pills-research" role="tabpanel" aria-labelledby="v-pills-research-tab">
                
                <div class="row p-0">
                    <div class="col-12 ">
                            <font class="heading" style="font-size:30px;">
                                Research assistant
                            </font>
                            <p class="paragraph">
                               Everything begins with research. Well-conducted research is vital to
                               the success of every project. Every business must conduct online research to get the
                               information which will help to grow.<br>
                               Our virtual research assistant keeps your workflow gaps under check. We are strategic
                               pillars to businesses where the calendar management is shambolic.

                            </p>
                            <p class="font-weight-bold">
                                What can our virtual research assistant do?
                            </p>    
                            <p class="paragraph">  
                            
                            
                                <ol class="paragraph">
                                    <li>
                                        <span style="color:black;font-weight:500">Data visualization:</span> Whether it is qualitative or quantitative data, we can present
                                        data in a format you prefer for easy interpretation. Our virtual research assistant
                                        will find the relationship between data, understand its composition and anomalies
                                        to determine patterns and make reliable predictions for the future.
                                    </li>
                                    <li>
                                        <span style="color:black;font-weight:500">Vendor selection study:</span> Our virtual research assistant can compare price
                                        quotations from multiple vendors and supply information that you can count upon
                                        to make purchase decisions. We assure you to present rates from vendors who
                                        provide the best quote and value.


                                    <li>
                                        <span style="color:black;font-weight:500">Compiling Research Data:</span> Our virtual research assistant will compile data for
                                        taxonomic evaluation. Therefore, the data will be elaborately classified into niche
                                        segments for seamless analysis. No manual process will beat the speed and
                                        accuracy with which we bring results
                                    </li>    
                                    <li>
                                        <span style="color:black;font-weight:500">Information Research on Websites:</span> If you need up-to-date information that you
                                        can count upon, hire a virtual research assistant from EVA. Our remote worker
                                        would be glad to run a comprehensive search on credible sites using the correct
                                        search phrases. The information relevant to your requirement will be captured and
                                        populated in custom format.
                                    </li>
                                    <li>
                                        <span style="color:black;font-weight:500">Influencer research:</span> Stay up- to- date on trends; and influencers, in your field.
                                        Keep track of the right ones for your brand. Your Virtual Research Assistants will
                                        scan through thousands of profiles for you, and present their findings to you 
                                    </li> 
                                </ol>
                            </p>
                            
                            <br>
                            <p class="font-weight-bold">
                                How can a Virtual Research Assistant benefit you?
                            </p>    
                            <ol class="paragraph">
                                <li>
                                    <span style="color:black;font-weight:500">Pay Only for the Work Done:</span> We charge our client for the service alone. We do
                                    not prescribe service add-ons unless it is essential to meet your goals. Therefore,
                                    you can be at peace without concerns about stretching your budget. 
                                </li>
                                <li>
                                    <span style="color:black;font-weight:500">No Administrative Concerns:</span> Managing administrative roles can be a concern
                                    even for large enterprises. This is completely taken care of by our virtual research
                                    assistants because our team has exposure to simple and complex tasks. All of it
                                    managed from our brick and mortar facility. Since you don't have to own
                                    resources and IT infrastructure, you will not be invoiced for the administrative
                                    system. 
                                </li>
                                <li>
                                    <span style="color:black;font-weight:500">Zero Payroll Hassles:</span> Payroll concerns can accompany if your decision is to hire
                                    full-time online researchers. So why increase your expenditure when you have the
                                    option to get results without adding employees to your payroll? Get the best
                                    cost-performance benefit by delegating your research duties to our PA.
                                </li>
                                <li>
                                    <span style="color:black;font-weight:500">Quality Services:</span> Our attention to quality is second to none. We have dedicated
                                    teams who audit tasks completed by virtual research assistants. If the execution is
                                    dissatisfactory, we will ensure its remediation before the service is signed off.
                                </li>
                                <li>
                                    <span style="color:black;font-weight:500">Timeliness:</span> The timeliness and accountability are among many things we
                                    prioritize because we value your time. Instead of providing dubious assurances
                                    we will convey realistic turnaround time that is specific to each project. Once we
                                    promise delivery of services, the task will be completed without stretching the
                                    deadline 
                                </li>
                                <li>
                                    <span style="color:black;font-weight:500">High Data Confidentiality & Security:</span> At Express Virtual Assistant, we go a step
                                    further to protect your valuable data. The entire project will be executed in
                                    compliance with the NDA and SLA. Our virtual assistants are contractually
                                    obligated to avoid disclosure of information to the unauthorized and uninvolved
                                    member during or after the project. 
                                </li> 
                            </ol>
                            
                        
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
              <div class="tab-pane fade <?php content('event'); ?> " id="v-pills-event" role="tabpanel" aria-labelledby="v-pills-event-tab">
                
                <div class="row p-0">
                    <div class="col-12 ">
                            <font class="heading" style="font-size:30px;">
                                Event planning assistant
                            </font>
                            <p class="paragraph">
                                Virtual assistants can take more time to research venues, increasing the
                                chances of making the right decision. A professional VA is also likely to have more
                                experience in arranging things like catering services and entertainment options. Let's be
                                honest, hiring a virtual assistant to help manage, oversee, and do tasks on your list helps
                                ease the workload and stress you face in the day to day operations of your business. At
                                the same time, it also allows you more leisure time with your family and friends.
                                Event planning has gained huge significance especially because the process requires
                                skill sets in a variety of fields including planning, budgeting, logistics management,
                                people management and vendor management.
                            </p>
                            <p class="font-weight-bold">
                                Why hire a Virtual event management assistant?
                            </p>    
                             
                             <p class="paragraph">
                                 Our virtual assistants have a rich experience in conducting events such as sales
                                meetings, annual meetings, business conferences, panel discussions, etc. By hiring our
                                virtual assistant you can be rest assured that your event will be executed in a
                                professional manner.
                             </p>
                                
                                <ol class="paragraph">
                                    <li>
                                        Agenda planning
                                    </li>
                                    <li>
                                       Vendor management
                                    <li>
                                        Public Relations (PR)
                                    </li>    
                                    <li>
                                        Project plan creation
                                    </li> 
                                    <li>
                                       Event coordination  
                                    </li>
                                    <li>
                                        Marketing management
                                    </li> 
                                </ol> 
                            
                            
                            <p class="paragraph">
                                Event Goal and objectives, budget, organising a team, researching venues,
                                setting a date, advertising the event, promoting and monitoring the event, equipment,
                                catering and refreshments, and marketing materials.<br><br>
                                Seriously, when it comes to projects in the office, event management is a biggie. There
                                is so much involved and it can be a timely exercise, especially if you have so many other
                                things going on and don’t have the time to commit to the planning and organising.
                                Using a Virtual Assistant to help with event management is a fool proof tool in ensuring
                                your events will be organised and planned to the finest detail and will run smoothly on
                                the day without you having to worry about a thing.<br><br>
                                There is literally so much work in event management which can’t be done by a single
                                person. So let us help you. We can help in managing all the work. Our skilled and
                                experienced assistant will help you out.<br><br>
                                Hiring a Virtual Assistant to carry out the above tasks, means you can focus on other
                                tasks knowing that all the logistics have been taken care of. You can simply turn up to
                                the event, do your talk and interact and network with your clients, customers and
                                sponsors.
                            </p>    
                                 
                        
                    </div>
                </div>  
                
              </div>
              <div class="tab-pane fade <?php content('email'); ?> " id="v-pills-email" role="tabpanel" aria-labelledby="v-pills-email-tab">
                
                <div class="row p-0">
                    <div class="col-12 ">
                            <font class="heading" style="font-size:30px;">
                                Email managment
                            </font>
                            <p class="paragraph">
                                There are dozens of tasks your virtual assistant can support you
                                with when it comes to email management services. Your virtual assistant can: Set up
                                alerts, rules, and filters to suit your needs and preferences. Clean up and sort, archive or
                                delete old emails clogging up your inbox.<br>
                                The habit of checking emails on a regular basis is a good one, but it can steal valuable
                                and productive time. A few minutes here and there adds up. Running a successful
                                business means every minute counts. When hiring an email virtual assistant, control of
                                your email inbox is passed over to the freelancer. It’s no longer required of the business
                                owner to check emails every few minutes.

                            </p>
                            <p class="font-weight-bold">
                                Why hire a Virtual Email Assistant? 
                            </p>    
                             
                             <p class="paragraph">
                                Decluttering the inbox and organizing the inbox are tasks that are often shifted to the
                                bottom of the to-do list and then carried over to the next day, next week…It is the virtual
                                assistant’s function to organize the inbox so that it makes sense to the business ow
                             </p>
                                
                                <ol class="paragraph">
                                    <li>
                                        <span style="color:black;font-weight:500">Replying to emails:</span> If you need your queries and inquiries to be answered
                                        promptly, choose our skilled Email Assistant. 
                                    </li>
                                    <li>
                                       <span style="color:black;font-weight:500">Organizing contacts:</span> Our Virtual Email Assistants will sort your endless,
                                       ever-growing list of contacts so that you can easily get information when you need to.
                                    <li>
                                        <span style="color:black;font-weight:500">Drafting emails:</span> If you need mailers to be sent out to clients or prospective clients,
                                        our Email Assistant can draft a catchy and crisp mailer for you. 
                                    </li>    
                                    <li>
                                        <span style="color:black;font-weight:500">Calendar management:</span> A virtual email assistant will keep track of and update
                                        your calendar and daily schedule. They will sort emails, reply to them, and notify
                                        you of those that need your attention. If there’s a meeting or action item, your VA
                                        will add it to your calendar. Never miss a meeting because you overlooked an
                                        email buried in your inbox. 
                                    </li> 
                                    <li>
                                        <span style="color:black;font-weight:500">Manage and update contact lists:</span> An ever-growing contact list can be a nightmare
                                        if it is not handled and segregated properly. Hire a virtual email assistant to keep
                                        your lists updated and properly classified into categories. 
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
                                        <span style="color:black;font-weight:500">Answer Inbound Calls and Screen Potential Clients:</span> Hiring a virtual assistant to
                                        handle inbound call screening and prospective client inquiries can free up some of
                                        your valuable time.
                                    </li>
                                    <li>
                                        <span style="color:black;font-weight:500">Documenting Processes, Procedures and Workflow:</span> A virtual assistant can help in
                                        creating documentation for processes, procedures, and workflow. The more tasks
                                        you outsource to a virtual assistant, the more they can directly document tasks,
                                        while suggesting improvements to make things more efficient.
                                    <li>
                                        <span style="color:black;font-weight:500">Provide Back Office Support:</span> Opening accounts and facilitating account transfers
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
              <div class="tab-pane fade <?php content('travel'); ?> " id="v-pills-travel" role="tabpanel" aria-labelledby="v-pills-travel-tab">
                
                <div class="row p-0">
                    <div class="col-12 ">
                            <font class="heading" style="font-size:30px;">
                                Travel assistant
                            </font>
                            <p class="paragraph">
                                A virtual travel assistant also offers support for your personal vacation
                                and travel. They will help you plan your ideal vacation and take some much-needed rest.
                                With knowledge of your preferences and budgetary limits, an experienced VA can help
                                you get the most out of your trip. 
                            </p>
                            <p class="font-weight-bold">
                                Why hire a Virtual Travel Assistant?
                            </p>    
                             
                             <p class="paragraph">
                                If you’re someone who is constantly on-the-go, our Virtual Travel Assistant can be a
                                great resource for you. Our VAs scan all available options to suit your flight and hotel
                                preferences.<br><br>
                                Upon hiring a virtual remote assistant from VS Virtual Services, you will get access
                                to the services of a dedicated assistant who will execute all your tasks related to travel
                                planning and management. Whether it is booking airline tickets, booking hotel rooms,
                                determining travel itinerary, etc. your assistant will get these things done for you from a
                                remote location. Our virtual assistant is competent in providing travel management
                                solutions. The good part about the whole deal is that you get to enjoy the benefits of a
                                full-time assistant minus the huge costs associated with hiring a full-time assistant
                             </p>
                                
                                <ol class="paragraph">
                                    <li>
                                        Planning travel budget
                                    </li>
                                    <li>
                                       Booking flight/train tickets
                                    <li>
                                        Arranging for cab services in the destination 
                                    </li>    
                                    <li>
                                        Rescheduling/canceling flights
                                    </li> 
                                    <li>
                                       Booking service apartments  
                                    </li>
                                    <li>
                                        Hotel reservations 
                                    </li> 
                                    <li>
                                        Booking cruise tickets
                                    </li>
                                    <li>
                                        Sending timely travel plan reminders 
                                    </li>
                                    <li>
                                        Vacation planning 
                                    </li>
                                    <li>
                                        Itinerary management  
                                    </li>
                                    <li>
                                        Planning and scheduling meetings at the desired destination
                                    </li>
                                </ol> 
                            
                            
                            <p class="font-weight-bold mt-3">
                                How can a Virtual Travel Assistant benefit you?
                            </p>
                            
                            <ol class="paragraph">
                                    <li>
                                        Stress-free vacation: Our Virtual assistant will help to organise a stress-free vacation.
                                    </li>
                                    <li>
                                        Saving Time: Obviously one of the best benefits of virtual travel assistants is that
                                        they save you so much time! Planning travel is such a time-consuming activity.
                                    </li>
                                    <li>
                                        Hassle-free: Travel comes with all sorts of hassle. Checking in, booking transfers,
                                        finding things to do. It can sometimes take all the fun out of a trip. But with a
                                        virtual travel assistant, you don't have to worry about any of that! Virtual travel
                                        assistants are highly experienced professionals. This means that you are pretty
                                        much guaranteed smooth sailing on a trip planned by your VA. 
                                    </li>
                            </ol> 
                            
                            
                        
                    </div>
                </div>  
                
              </div>
              <div class="tab-pane fade <?php content('website'); ?> " id="v-pills-website" role="tabpanel" aria-labelledby="v-pills-website-tab">
                
                <div class="row p-0">
                    <div class="col-12 ">
                            <font class="heading" style="font-size:30px;">
                                Website Maintenance
                            </font>
                            <p class="paragraph">
                                Running a website can be more tedious than some people
                                imagine. For one, it involves a lot of repetitive maintenance tasks, and you have to check
                                on it constantly to ensure that it’s running smoothly. Managing your website can be
                                fulfilling work, but it may not be the best use of your time. A virtual assistant can be an
                                invaluable resource if managing your website is taking up too much time.<br>
                                If you find yourself wasting most of your hours doing such time-consuming daily tasks,
                                you need to hire a virtual assistant. We can handle these activities efficiently, freeing up
                                time for you to focus on more essential tasks. 
                            </p>
                            <p class="font-weight-bold">
                                Why hire a virtual website maintenance assistant? 
                            </p>    
                             
                             <p class="paragraph">
                                Keep updated: We are eager to help our clients keep their websites more secure through
                                regular theme and plugin updates. If you need assistance with editing web pages,
                                creating marketing materials or even new products in which to sell, we can help! If you
                                need help with posting new content or building up strong search engine optimization
                                (SEO) we can help with that too! 
                             </p>
                                
                             
                            <p class="font-weight-bold mt-3">
                                Benefits of choosing a assistant 
                            </p>
                            
                            <ol class="paragraph">
                                    <li>
                                        When you hire a website maintenance virtual assistant you get to focus on your
                                        business productivity while saving time and money.
                                    </li>
                                    <li>
                                        The Website Administration Virtual Assistant provides the maintenance,
                                        monitoring and fine-tuning of the business’ website online presence.
                                        Consequently this improves your company’s Internet presence to increase brand
                                        recognition, brand loyalty, and brand authority. As a result, this provides more
                                        opportunities to convert and increase inbound traffic at a decreased marketing cost. 
                                    </li> 
                            </ol> 
                            
                            <p class="paragraph mt-2">
                                You may also hire a Website Administration Virtual Assistant when your business needs
                                to establish brand recognition and authority to increase sales prospects.
                                Consequently we offer you the flexibility to choose and adapt as your business needs
                                change and evolve.
                             </p>
                            
                        
                    </div>
                </div>  
                
              </div>
              
              
              <!--<div class="tab-pane fade   " id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">44444</div>-->
              <!--<div class="tab-pane fade   " id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">44444</div>-->
              <!--<div class="tab-pane fade   " id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">44444</div>-->
              
            </div>
          </div>
        </div>
    </div>
   
    
    <?php include("pack/footer.php"); ?>
    
     
</body>
</html>
<script>
    AOS.init({
        delay: 100,
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
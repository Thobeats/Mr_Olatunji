<?php 
include_once "includes/functions.php";
 include_once "includes/header.php";
// include_once("includes/connection.php");


if(isset($_GET['msg'])){
    $type = $_GET['type'];
    $msg = $_GET['msg'];

    set_message($type, $msg);
}

?>



<section id="contact">
    <div class="container-fluid contact-banner text-center">
        <h1 class="contact-title text-white">
            let's Talk
        </h1>
    </div>    
</section>

<section>
    <div class="container contact-forms bg-white p-3">
        <div class="mb-3">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item contact-list" role="presentation">
                    <a class="contact-link contact-link-active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">General Request</a>
                </li>
             
                <li class="nav-item contact-list" role="presentation">
                    <a class="contact-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Request to speak</a>
                </li>
            </ul>
        </div>
    

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <form action="includes/connection.php" method="POST" id="Request_form">
                    <div class="text-center">
                        <h3 class="contact-form-title">Question / Request</h3>
                        <p class="contact-form-text">Please submit your question or request</p>
                    </div>
                
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10 border-0 border-bottom">
                        <input type="text" placeholder="Name" class="form-control input" name="name" id="staticEmail" required>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                        <input type="email" placeholder="Email" name="email" class="form-control input" id="staticEmail" required>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                        <textarea class="form-control input" name="request" placeholder="Your Question or Request" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>                        
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10 text-center">
                        <button type="submit" name="submit_request" class="btn-meet-me">Submit Request</button>
                        </div>                        
                    </div>

                    
            </form>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <form action="" method="POST" id="Request_form">
                    <div class="text-center">
                        <h3 class="contact-form-title">Book a Session</h3>
                        <p class="contact-form-text">Request to speak with Kayode</p>
                    </div>
                
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10 border-0 border-bottom">
                        <input type="text" name="name" placeholder="Name" class="form-control input" id="staticEmail">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10 border-0 border-bottom">
                        <input type="text" name="phone" placeholder="Phone" class="form-control input" id="staticEmail">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10 border-0 border-bottom">
                        <input type="text" name="venue" placeholder="Name of Venue" class="form-control input" id="staticEmail">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                        <input type="text" name="email" placeholder="Email" class="form-control input" id="staticEmail">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                            <input placeholder="Choose a date" class="form-control datepicker input" name="date">
                        </div>                        
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                        <textarea class="form-control input" rows="5" placeholder="Describe Engagement" id="exampleFormControlTextarea1" rows="5" name="engagement"></textarea>
                        </div>                        
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10 text-center">
                        <button type="submit" name="submit_speak_request" class="btn-meet-me">Submit Request</button>
                        </div>                        
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</section>

<?php include_once("includes/footer.php"); ?>
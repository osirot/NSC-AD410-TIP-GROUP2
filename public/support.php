<?php
include 'Views/templates/header.php';
?>
        <!-- Main Content -->
         <div class="content">
            <div class="container-fluid">

        <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Contact</h1>
            <hr>
        </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <form action="formhandler.php" method="post" name="sentMessage" id="contactForm" novalidate="">
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" id="name" required=""
                               data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email Address" id="email"
                               required="" data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Phone Number</label>
                        <input type="tel" name="phone" class="form-control" placeholder="Phone Number" id="phone" required=""
                               data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Message</label>
                        <textarea rows="5" name="comments" class="form-control" placeholder="Message" id="message" required=""
                                  data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" name="submit" class="btn btn-success btn-lg">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>

<?php include 'Views/templates/footer.php';?>

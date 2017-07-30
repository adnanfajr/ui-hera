<?php 
include 'inc/header.php'; 
include 'inc/nav.php'; 
?>

<div class="container">

    <!-- <i class="line"> </i> -->
    <!---->
    <div class="bottom-content">
        <div class="col-md-6 award">
            <h3>Welcome to <span>Shop UnderWear</span></h3>
            <p>The ‘Award The Inspired’ awards ceremony. The Fuji Film Gallery, Holland. </p>
            <div class="inverted">
                <p class="date">4th October to 12 October 2012 10am to 4pm.</p>
                <a href="single.html" class="only">Invitation Only</a>
                <div class="clearfix"> </div>
            </div>
            <a href="single.html"><img class="img-responsive " src="images/12.jpg" alt=""  /></a>
            <div class="share">
                <p>Share</p>
                <ul class="social-in tin-in">
                    <li><i> </i></li>
                    <li><i class="tin"> </i></li>
                    <li><i class="message"> </i></li>
                </ul>

                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-6 award-bottom">
            <h3>Newsletter</h3>
            <p>If you have an awards ceremony invitation code, please enter it along with your e-mail address in the form below.</p>
            <form>
                <input type="text" value="Your E-mail.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your E-mail..';}">
                <input type="text" value="Invitation Code.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Invitation Code..';}">
                <input type="submit" value="Submit RSVP">
            </form>
            <p><a href="single.html">Don’t have an invitation?</a></p>
            <a href="index.html" class="logo-bottom"><img src="images/logo-1.png" alt="" ></a>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>
<header>
    <img src="images/logo.png">
    <div class="heading">
        <h1>Government Polytechnic Washim Hostel</h1>
        <p>Contact &nbsp;<i class="fa fa-phone"> </i>&nbsp; +91 88888-88888</p>
    </div>
    <div class="social">
        <i class="fa fa-facebook-square fa-2x"></i>
        <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
        <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
    </div>
</header>
<div class="menu-bar">
    <ul>
        <li>GPW Hostel</li>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Apply</a></li>
        <li><a href="Notice.php">Notice</a></li>
        <li><a href="Grievance.php">Grievance</a></li>
        <li><a href="login.php">Staff Login</a></li>
    </ul>
</div>
<script>
    $(document).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 150) {
            $(".menu-bar").addClass("positions");
        } else {
            $(".menu-bar").removeClass("positions")
        }
    });
</script>
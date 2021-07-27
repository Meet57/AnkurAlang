<!doctype html>
<html lang="en">
<head>
	
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<title>Ankur Enterprise</title>
	
	
    <link rel="stylesheet" href="enquiry.css">
    <link rel="icon" type="image/png" href="img/ankur.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
	
</head>
<body>

    <h1 style="font-family: cookie;margin-top: -100px"><a href="index.php"><i class="back-arrow fa fa-arrow-left"></i></a>Send us an enquiry</h1>
    <div class="container">
  <div class="message signup">
    <div class="btn-wrapper">
      <button class="button" id="signup">Personal</button>
      <button class="button" id="login"> Company</button>
    </div>
  </div>
  <div class="form form--signup">
    <div class="form--heading">Personal details</div>
    <form id="form1">
      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email ID">
      <input type="text" class="form-control" id="num" name="num" placeholder="Contact No" required>
      <!-- <button class="button">Sign Up</button> -->
    </form>
  </div>
  <div class="form form--login">
    <div class="form--heading">Company details</div>
    <form id="form2">
     <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Company Name">
     <input type="text" class="form-control" id="yourcity" name="yourcity" placeholder="Your city">
      <textarea style="border-radius: 20px;padding: 5px" class="form-control" id="message" name="message" rows="5" placeholder=" write your message"></textarea>
      <!-- <button class="button">Login</button> -->
    </form>

  </div>

  
    <button class="button" onclick="submitForms()"> Send Request </button>
  


</div>

<script type="text/javascript">
    $("#signup").click(function() {
  $(".message").css("transform", "translateX(100%)");
  if ($(".message").hasClass("login")) {
    $(".message").removeClass("login");
  }
  $(".message").addClass("signup");
});

$("#login").click(function() {
  $(".message").css("transform", "translateX(0)");
  if ($(".message").hasClass("login")) {
    $(".message").removeClass("signup");
  }
  $(".message").addClass("login");
});

</script>

<script type="text/javascript">
    function submitForms() {
        var former1 = $('#form1').serialize();
        var former2 = $('#form2').serialize();

         var mergedForm = former1 + "&" + former2;
        console.log(mergedForm);

        $.ajax({
            type: "POST",
            url: 'assets/submit.php',
            data: mergedForm,
            error: function() {
                console.log('error')
            },
            success: function() {
                $('#form1')[0].reset();
                $('#form2')[0].reset();
                alert('Request registered. Thank you.');
            }
        }) 

    }
</script>

</body>
</html>


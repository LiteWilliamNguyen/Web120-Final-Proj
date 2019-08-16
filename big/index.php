<!DOCTYPE html>
<html lang="en">
<head>
<title>WEB120 Portal - Khanh Trinh Nguyen</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="../css/nav.css" />
<link rel="stylesheet" href="../css/portal.css" />
<link rel="stylesheet" href="../css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
<h1><a href="index.php"><i class="logo fa fa-home"></i> Khanh Trinh's Web120 Portal</a></h1>
<nav>
<ul class="topnav" id="myTopnav">
<li><a href="../index.php" >Welcome</a></li>
<li><a href="big/index.php" class="selected">Big</a></li>
<li><a href="../fp/index.php">Final Project</a></li>
<li><a href="../contactme.php">Contact William</a></li>
<li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
</ul>
</nav>
</header>

<!-- START LEFT COL -->
<section>
<h2>Still under progress!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer massa ante, tempor et quam vitae, sodales facilisis lorem. Duis imperdiet feugiat lorem eget consequat. Fusce convallis dictum libero sit amet rhoncus. Fusce tincidunt neque nunc, non porttitor nunc tempor a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget ipsum at eros lacinia hendrerit. Vivamus porttitor, nisi at gravida bibendum, libero risus lacinia orci, a tincidunt quam nisi a nibh. Sed quam enim, eleifend vel tincidunt in, pulvinar rutrum eros. Morbi lobortis turpis ut erat sodales luctus. Aliquam aliquam, ex sit amet vulputate ornare, turpis justo dignissim libero, quis blandit turpis elit aliquam lectus. </p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer massa ante, tempor et quam vitae, sodales facilisis lorem. Duis imperdiet feugiat lorem eget consequat. Fusce convallis dictum libero sit amet rhoncus. Fusce tincidunt neque nunc, non porttitor nunc tempor a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget ipsum at eros lacinia hendrerit. Vivamus porttitor, nisi at gravida bibendum, libero risus lacinia orci, a tincidunt quam nisi a nibh. Sed quam enim, eleifend vel tincidunt in, pulvinar rutrum eros. Morbi lobortis turpis ut erat sodales luctus. Aliquam aliquam, ex sit amet vulputate ornare, turpis justo dignissim libero, quis blandit turpis elit aliquam lectus. </p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->

<!-- END RIGHT COL -->
<!-- START Footer -->
<footer>
<p><small>&copy; 2019 - <?=date('Y')?> by <a href="#" target="_blank">Khanh Trinh Nguyen</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

<!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
x.className += " responsive";
} else {
x.className = "topnav";
}
}
</script>
</body>
</html>

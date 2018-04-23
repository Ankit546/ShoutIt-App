

<!DOCTYPE html>

<html>

<head>

	<title>Shout it!</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

	<div id="container">

		<header>

			<h1>Shout it! Shoutbox</h1>

		</header>

		<div id="shouts">

			<ul id="ul">			
					
						<li class="shout"><span>11:24:31 - </span><strong>Himashu:</strong> Hello </li>

				
						<li class="shout"><span>10:12:28 - </span><strong>Sam:</strong> hi bro </li>

				
						<li class="shout"><span>09:34:36 - </span><strong>Dev:</strong> yup...Sure </li>

				
						<li class="shout"><span>09:22:44 - </span><strong>Ankit​:</strong> Awesome!!! </li>

				
						<li class="shout"><span>09:22:28 - </span><strong>Ankit​:</strong> Let's see </li>

				
						<li class="shout"><span>08:56:44 - </span><strong>Dev:</strong> biee </li>

				
						<li class="shout"><span>08:56:34 - </span><strong>Dev:</strong> Woah it works now without refresh </li>

				
						<li class="shout"><span>08:56:08 - </span><strong>Dev:</strong> final check...without refresh </li>

				
						<li class="shout"><span>06:04:31 - </span><strong>Ankit:</strong> I like caramel and its me! </li>

				
						<li class="shout"><span>06:03:34 - </span><strong>Dev:</strong> Knock knock! </li>

				
						<li class="shout"><span>06:00:01 - </span><strong>Dev:</strong> Woah...whose this Caramel? </li>

				
						<li class="shout"><span>05:57:39 - </span><strong>Caramel :</strong> naa </li>

				
						<li class="shout"><span>05:57:00 - </span><strong>Ankit:</strong> So you are here! </li>

				
						<li class="shout"><span>05:56:33 - </span><strong>Dev:</strong> No probs dude </li>

				
						<li class="shout"><span>05:56:20 - </span><strong>Dev:</strong> Oho...Its working! </li>

				
						<li class="shout"><span>05:56:19 - </span><strong>Ankit:</strong> Thank you! </li>

				
						<li class="shout"><span>05:56:04 - </span><strong>Dev:</strong> Checking </li>

				
						<li class="shout"><span>05:55:49 - </span><strong>Dev:</strong> Am done </li>

				
						<li class="shout"><span>11:39:40 - </span><strong>Ankit:</strong> Hi Jaya </li>

				
						<li class="shout"><span>11:38:48 - </span><strong>Jaya:</strong> Hello </li>

				
						<li class="shout"><span>08:53:57 - </span><strong>Ghazi:</strong> Hi </li>

				
						<li class="shout"><span>08:53:05 - </span><strong>Ankit:</strong> Hello </li>

				
						<li class="shout"><span>08:25:08 - </span><strong>Ankit:</strong> Hi </li>

				 	
			</ul>

		</div>

		<div id="input">

			
			

				<input type="text" id="user" name="user" placeholder="Enter Your name">

				<input type="text" id="message" name="message" placeholder="Enter your message">

				<br>

				<button class="shout-btn" id="submit" name="submit">Shout it out!</button>

			

		</div>

	</div>
<script type="text/javascript">
	$("#submit").click(function() {
    $user=$("#user").val();
    $message=$("#message").val();
    /*$.post("process.php?user="+$user+"&message="+$message,
    	function() {*/
    		//$('#ul').load(document.URL +' #ul');
    		xhttp = new XMLHttpRequest();
    		xhttp.onreadystatechange = function() {
     		 if (this.readyState == 4 && this.status == 200) {
	        document.getElementById("ul").innerHTML = this.responseText;
	     }
    };
    xhttp.open("GET", "process.php?user="+$user+"&message="+$message, true);
    xhttp.send(); 
    	//})
  });

setInterval(function refresh(){
		$('#ul').load(document.URL +' #ul');
	},1000);

</script>


<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="000webhost logo" rel="nofollow" target="_blank" href="https://www.000webhost.com/free-website-sign-up?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_campaign=ss-footer_logo&amp;utm_medium=000_logo&amp;utm_content=website"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png" alt="000webhost logo"></a></div></body>

</html>

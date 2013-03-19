<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	    <link href="assets/css/reset.css" media="screen" rel="stylesheet" type="text/css">
        <link href="assets/css/slickQuiz.css" media="screen" rel="stylesheet" type="text/css">
        <link href="assets/css/master.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body id="slickQuiz">


        <h1 class="quizName"><!-- where the quiz name goes --></h1>

        <div class="quizArea">
            <div class="quizHeader">
                
				
				
                <a class="button startQuiz" href="">Get Started!</a>
            </div>
			
            <!-- where the quiz gets built -->
			<!-- where the quiz main copy goes -->
			<?php
				foreach($demoData as $data)
				{
					echo $data;
				}
			?>
			
			
        </div>

        <div class="quizResults">
            <h3 class="quizScore">You Scored: <span><!-- where the quiz score goes --></span></h3>

            <h3 class="quizLevel"><strong>Ranking:</strong> <span><!-- where the quiz ranking level goes --></span></h3>

            <div class="quizResultsCopy">
                <!-- where the quiz result copy goes -->
            </div>
        </div>

        <script src="assets/js/jquery-1.7.min.js"></script>
	    <script src="assets/js/slickQuiz.js"></script>
		
         <script type="text/javascript">
         $( document ).ready( function() {
			$('#slickQuiz').slickQuiz({
		    	
				 json: <?php echo json_encode($demoData) ?>
			 });
		 });
         </script>


</body>
</html>
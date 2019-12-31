<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<base href="<?php echo base_url();?>" />
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background-color: #F4F4F4;

		}
		.wrapper{
			width: 960px;
			height: 550px;
			background: #e8e8e8;
			margin: 0 auto;
			margin-top: 20px;
		}
		.logo, .tittle{
			float: left;
		}
		.header{
			width: 100%;
			height: 145px;
			border-top: 10px solid green;
		}
		.logo{
			width: 140px;
			height: 145px;
			padding-top: 28px;

		}
		.logo img{
			margin-left: 30px;
			width: 80px;
			height: 80px;
		}
		.tittle{
			width: 700px;
			height: 145px;
			
		}
		.tittle span{
			color: #17366C;
			font-size: 24px;
		}
		.tittle p{
			margin-top: 40px;
			color: #17366C
		}
		.menubar{
			width: 958px;
			height: 40px;
			background-color: #17366c

		}
		.content{
			width: 100%;
			height: 365px;
			border-bottom: 30px solid #17366c;
		}
		.footer{
			width: 100%;
			height: 60px;
			margin-top: 20px;
			border:1px solid gray;
		}

		.menubar ul{
			margin:0px;
			padding:0px;
		}
		.menubar ul li{
			float:left;
			list-style:none;
			}
		.menubar li a {
			width:120px;
			text-decoration:none;
			color:rgba(219,218,218,1.00);
			/*line-height:45px;*/
			text-align:center;
			display:block;
			}
	</style>
</head>
<body>
<div class="wrapper">
	<div class="header">
		<div class="logo">
			<img src="assets/img/logo/bd_logo.png">
		</div>
		<div class="tittle">
			<p> Government of the People's Republic of Bangladesh<br>
				<span>Prime Minister's Office</span>
			</p>
			<!-- <h3>Prime Minister's Office</h3> -->
		</div>
	</div>

	<div class="menubar">
		<div class="">
			<ul>
			<li><a href="#"> Home</a></li>
			<li><a href="#"> Application</a></li>
			<li><a href="#"> Payment </a></li>
			<li><a href="#"> Admit Card</a></li>
			<li><a href="#"> Result</a></li>
		</ul>
		</div>
	</div>
	<div class="content">
		<div class="appaly">
			<ul></ul>
		</div>
	</div>
	<div class="footer">
		<p style="margin-top: 20px"> &nbsp; ©2019, Prime Minister's Office, All Rights Reserved.</p>
	</div>
</div>
</body>
</html>
<html>
	
<meta charset="utf-8">
	<div class="wrapper">
		<br><br><br>	<br><br><br>
			<img src="KisubiHospital2.png">
	
<br>
			
		<div class="banner">
			<div class="bannertext">
				<u> <b> STAFF LOGIN</b></u>
				<br></br>
				<div class="center">
      <form method="post">
        <div class="txt_field">
          <label><b> Username</b></label>
           <input type="text" required>
        </div>
        <div class="txt_field">
        	<label><b>Password</b></label>
          <input type="password" required>
       
        </div>
        <br>
        <div class="form-group lead">
  <label > Login as: </label> <br>
  <input type="radio" name="u_role" value="admin" class="custom-radio" required>&nbsp;  Admin 
  <input type="radio" name="u_role" value="Clerk" class="custom-radio" required>&nbsp; Clerk
</div>

    </form>


				<h2><a href="admitdatatable.php"> LOGIN </a> </h2>
				<br>

				<br>
				
		</div>
	</div>
</div>






<style type="text/css">

body{

	font-family: serif;
	text-align: center;
	background-color: lightblue;
}

.wrapper{
	margin: auto;
	height: 100vh;
	background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),url("Kisubibg.jpg");
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	position: relative;
}

.banner{
width: 300px;
height: 300px;
background: inherit;
position: absolute;
overflow: hidden;
top: 70%;
left: 50%;
border-radius: 5px;
transform: translate(-50%,-50%);
}

.banner:before{
	width: 300px;
	height: 400px;
	content: '';
	position: absolute;
	top:  01px;
	left: 01px;
	bottom: 01px;
	right: 01px;
	background: inherit;
	box-shadow: inset 0 0 2000px rgb(255, 255, 255, 50);
	filter: blur(3px);

}
.bannertext{
position: absolute;
top: 50%;
left: 50%;
text-align: center;
transform: translate(-50%,-50%);
}

.wrapper h1{
	text-align: center;
	color: #0047AB;
	text-transform: uppercase;
	font-size: 60px;
	font-style:Castellar ;
	font-family: Castellar;
	font-weight: bold;

}



.wrapper h2{
	text-align: center;
	color: navy;
	text-transform: uppercase;
	font-size: 30px;
	font-style:Castellar ;
	font-family: Castellar;
	font-weight: bold;

}


.bannertext h2{
	border: 1px solid #fff;
	padding: 10px 25px;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 14px;
	margin-top: 20px;
	display: inline-block;
	color: seagreen;
}
.bannertext h2:hover{
	background-color: darkblue;
}
.bannertext h2 a{
	color: black;
	text-decoration: none;
	text-align: center ;
}

.nav-area{
	float: right;
	list-style: none;
	margin-top: 30px;

}
.nav-area li{
	display: inline-block;
}

.nav-area li a{
	color: #fff;
	text-decoration: none;
	
	padding: 5px 20px;
	font-family: poppins;
	font-size: 16px;
}
.nav-area li a:hover{
	background: #fff;
	color: #333;
}


button{

background:#228B28 ;
font-family: cursive;
color: whitesmoke;
}

.sub-heading{
text-decoration: overline;
color: #800000;
text-align: center;

}

.card{
	width: 350px;
	height: 250px;
	display: inline-block;
	border-radius: 10px;
	padding: 15px 25px;
	box-sizing: border-box;
	cursor: pointer;
	margin:10px 15px ;
	margin-left: 60px;
	background-position: center;
	background-size: cover;
	color: whitesmoke;
	transition: transform 0.5s;
}

.h4{

	text-align: left;
}

</style>

		
</html>
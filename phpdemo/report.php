<!DOCTYPE html>
<html>
<head>
	<title>Products Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="all,follow">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.container .row {
			min-height: 1000px;
		}
	</style>
</head>
<body>

	<!-- header -->
	<!-- Grey with black text -->
	<header style="background-color: gray;">
	<nav class="navbar navbar-expand-sm navbar-dark">
	  <div class="container">
	  	<ul class="navbar-nav">
	  		<li>
	  			<A HREF="index.php"> <img src=" Pic/nice-car-logo.png" width="120"></A>
	  		</li>
	  	</ul>
	  	<ul class="nav justify-content-end">
		    <li>
		      <a href="index.php">
				<button type="button" class="btn">
					Home <span class="badge badge-light"></span>
				</button>
			</a>
		    </li>
		    <li>
		      <a href="index.php">
				<button type="button" class="btn">
					Shop <span class="badge badge-light"></span>
				</button>
			</a>
		    </li>
		    <li>
		      <a href="report.php">
				<button type="button" class="btn">
					Report <span class="badge badge-light"></span>
				</button>
			</a>
		    </li>
		    <li>
			<a href="buy.php">
				<button type="button" class="btn">
					Cart <span class="badge badge-light"></span>
				</button>
			</a>
		</li>
		<li>
			<a href="logout.php">
				<button type="button" class="btn">
					Logout <span class="badge badge-light"></span>
				</button>
			</a>
		</li>
	 </ul>		
</header>
		<table style="margin: auto;">
			<tr>
				<td>
					Fullname
				</td>
				<td>
					<input type="text" id="name">
				</td>
			<tr>
				<td>
					Email
				</td>
				<td>
					<input type="email" id="email">
				</td>
			</tr>
			<tr>
				<td>
					Gender
				</td>
				<td>
				<input type="radio" id="gender" value="1">
                    Nam
                <input type="radio" id="gender" value="0">
                    Nữ 
                </td>
            </tr>
            <tr>
            	<td>
            		Nơi Ở
            	</td>
            	<td>
            		<select id="location">
                    	<option value="">Chọn vị trí của bạn</option>
                    	<option value="1">Tp Hồ Chí Minh</option>
                    	<option value="2">Hà Nội</option>
                    	<option value="3">Long An</option>
                    	<option value="4">Tiền Giang</option>
                	</select>
                </td>
            </tr>
                <br></br>
		</table>
		<table style="margin: auto;">
       		<tr>
       			<td><textarea id="comment" cols="50" rows="10"></textarea></td><br>
       		</tr>
       		<tr>
				<td><input onclick="report()" type="button" value="Submit"></td>
			</tr>
       		</table>

       	<!-- footer -->
	<footer style="background-color: black; color: white; padding: 15px;">
		
        <div class="host">
				<a name="lienhe">
				<table width="500">
					<TD>
						<STRONG>Nice Car</STRONG><br>
						EMAIL: lenhan1312@gmail.com<br>
						HOTLINE: 0856770984<br>
						Địa chỉ công tác: 726 Lê Trọng Tấn, phường Bình Hưng Hòa, quận Bình Tân, Tp Hồ Chí Minh
					</TD>
		</div>
	</footer>
    </body>
</html>
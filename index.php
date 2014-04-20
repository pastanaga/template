<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css" />
<title>home</title>
</head>

<body>

<table width="90%" border="1" align="center">
    <tr>
        <th colspan="3">
        <?php
		include ("function.php");
		
		judul();
		?>
       </th>
        
    </tr>
      <tr>
        <th colspan="3" align="center">|<a href="index.php">home</a>||<a href="profile.php">profile</a>||<a href="download.php">download</a></th>
        
    </tr>
    
    
    <tr>
        <td width="10%">
        <?php
	
		proses_login();
		echo "<br>";
		get_client_ip();
	
		?>
        </td>
        
      
        <td width="60%">ini halaman home<br><br><br><br><br><br><br><br><br><br></td>
        <td width="20%">
        
        <?php
		include_once ("function.php");
		
		kanan();
		?>
        
        </td>

    </tr>
    <tr>
        <th colspan="3">
        <?php
		include_once ("function.php");
		
		bawah();
		?>
		
		</th>
      

    </tr>
</table>
<?php
session_start();
include_once "function.php";
?>
</body>
</html>

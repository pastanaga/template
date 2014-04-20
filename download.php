<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css" />
<title>download</title>
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
		include_once("function.php");
		proses_login();
		echo "<br>";
		get_client_ip();
		?>
        </td>
        
      
        <td width="60%"><h3 align="center">download</h3><br>
        <a href="http://download1us.softpedia.com/dl/f016a8852e14878b5b1847d76fd560d7/534a4a09/100070491/software/multimedia/audio/aimp_3.55.1345.exe">download aimp 3.55</a><br>
        <a href="http://files.brothersoft.com/photograph_graphics/digital_photo_tools/PhotoScape_V3.6.5.exe">download photoscape</a>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        </td>
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
</body>
</html>

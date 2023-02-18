<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("location: loginpage.php");
	}
?>

<?php
 $con = mysqli_connect("localhost", "root", "", "travelpartner");
	if (!$con) {
		die("Connect to a database");
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
 <?php
 
       
 $sql ="SELECT * FROM `signup` WHERE `email`='".$_GET["id"]."'";
 
 $result=mysqli_query($con,$sql);
 
 if(mysqli_num_rows($result)>0)
 {
  $row =mysqli_fetch_assoc($result);
 
 
 
 ?>
<table width="835" height="265" border="0" align="center">

  <tr>
    <td height="215" colspan="2"><form action="updatepp.php?id=<?php echo $_GET["id"];?>" method="post" enctype="multipart/form-data">
      
      <table width="383" border="0" align="center">
      <tr>
        <td colspan="2" bgcolor="#FFFFFF"><div align="center"><img src="../img/img 4.png" width="198" height="195" /></div>
          <h1>Add Profile Pic</h1></td>
        </tr>
      <tr>
        <td width="90">profile Picture</td>
        <td width="283"><input type="file" name="fileImage" id="fileImage" value="<?php echo $row["path"]; ?>" required/></td>
      </tr>
      
      <tr>
        <td colspan="2" align="right"><blockquote>
        
             
             <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Add Image"/>
            <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"/>
         
        </blockquote></td>
        </tr>
    </table>
  <?php
  }
 mysqli_close($con);
   ?>
    </form>
    </td>
  </tr>
</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>FORM PEKERJA</title>
</head>
<body>
	<h1 style="padding: 20px 42px;
		border-radius: 70px;
		background-color: yellow;
		width: 18%;
		font-family: sans-serif;">PROFILE PEKERJA</h1>

	<form method="post" action= "action.php">
  <fieldset style=" background-color: grey;	
  		padding: 20px 10px;
		border-radius: 5px;
		width: 21.5%;
		font-family: sans-serif;">

   <table>
   <tr>
    <td>Name</td>
    <td>:</td>
    <td><input type="text" name="name" placeholder="your name" required></td>
   </tr>
   <tr>
    <td>Handphone</td>
    <td>:</td>
    <td><input type="text" name="hp" placeholder="your phone number" required></td>
   </tr>
   <tr>
    <td>Gender</td>
    <td>:</td>
    <td><input type="text" name="jk" placeholder="your gender" required></td>
   </tr>
   <tr>
    <td>Date of Birth</td>
    <td>:</td>
    <td><input type="text" name="dob" placeholder="your dob" required></td>
   </tr>
   <tr>
    <td>Work Address</td>
    <td>:</td>
    <td><input type="text" name="workaddress" placeholder="your work address" required></td>
   </tr>
   <tr>
   	<td>Company</td>
   	<td>:</td>
   	<td><input type="text" name="company" placeholder="your company name" required></td>
   </tr>
   <tr>
   	<td>Company Phone</td>
   	<td>:</td>
   	<td><input type="text" name="companyPhone" placeholder="your companyPhone" required></td>
   </tr>
   <tr>
   	<td>Position</td>
   	<td>:</td>
   	<td><input type="text" name="position" placeholder="your position" required></td>
   </tr>
   <tr>
   	<td>NPWP</td>
   	<td>:</td>
   	<td><input type="text" name="npwp" placeholder="your NPWP number" required></td>
   </tr>
   <tr>
   		<td><input type="submit" name="submit" value="SAVE"></td>
   </tr>
  </table>  
  </fieldset>
 </form>
</body>
</html>


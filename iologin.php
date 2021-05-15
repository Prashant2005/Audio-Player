<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
/* Style the form - display items horizontally */
.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

/* Add some margins for each label */
.form-inline label {
  margin: 5px 10px 5px 0;
}

/* Style the input fields */
.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

/* Style the submit button */
.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
}

.form-inline button:hover {
  background-color: royalblue;
}

/* Add responsiveness - display the form controls vertically instead of horizontally on screens that are less than 800px wide */
@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }

  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>
</head>
<body>
<form class="form-inline" action="" method="post">
  <label for="email">Email(entered during registration):</label>
  <input type="email" id="email" placeholder="Enter email" name="email">
    
  </label>
  <button type="submit">Sign in: Google I/O</button><br><br>
<a href=".../google_io">Register Here</a>
</form>
</body></html>

<?php
$servername = "sql103.epizy.com";
$username = "epiz_26929739";
$password = "CUosyyRW3NVpQmh";
$dbname = "epiz_26929739_io";
$email=$_POST['email'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email FROM google WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<script>window.location.href='https://accounts.google.com/o/oauth2/auth/oauthchooseaccount?redirect_uri=storagerelay%3A%2F%2Fhttps%2Fevents.google.com%3Fid%3Dauth775598&response_type=permission%20id_token&scope=email%20profile%20openid%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fdeveloperprofiles%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fdeveloperprofiles.award&openid.realm&client_id=627211894852-eglljbslsqdegn1ct9eiu6svvt3r84sh.apps.googleusercontent.com&ss_domain=https%3A%2F%2Fevents.google.com&prompt=select_account&fetch_basic_profile=true&gsiwebsdk=2&flowName=GeneralOAuthFlow';</script>";
  }
} else {
  echo "<script>alert('Register First');</script>";
}
$conn->close();
?>

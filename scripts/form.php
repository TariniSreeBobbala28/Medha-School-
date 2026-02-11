<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $class = htmlspecialchars($_POST['class']);
    $dob = htmlspecialchars($_POST['dob']);
    $mother = htmlspecialchars($_POST['mother']);
    $father = htmlspecialchars($_POST['father']);
    $mobile = htmlspecialchars($_POST['mobile']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Application Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background: radial-gradient(circle, skyblue, white); 
      margin: 0;
      padding: 0;
    }
    .btn-application {
      background-color: blue;
      color: white;
      padding: 12px 25px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 20px;
    }
    form {
      margin: 20px auto;
      padding: 20px;
      border: 2px solid #0077b6;
      width: 320px;
      background: skyblue;   
      border-radius: 15px;
      text-align: left;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
    }
    label {
      font-weight: bold;
      color: navy;
    }
    input {
      width: 95%;
      padding: 8px;
      margin: 6px 0 12px 0;
      border: 1px solid #555;
      border-radius: 5px;
    }
    .btn-submit {
      background-color: green;
      color: white;
      padding: 10px 20px;
      font-size: 15px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      display: block;
      margin: auto;
    }
    .receipt {
      margin: 20px auto;
      padding: 20px;
      border: 3px dashed green;
      width: 420px;
      background: #fafff5;
      border-radius: 15px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
    }
    .btn-home {
      background-color: green;
      color: white;
      padding: 10px 20px;
      font-size: 15px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      margin-top: 15px;
    }
    /* Style for the video player */
    .promo-video {
      width: 60%;
      max-width: 600px;
      border-radius: 10px;
      margin-top: 10px;
      box-shadow: 0px 4px 15px rgba(0,0,0,0.3);
    }
  </style>
  <script>
    function showForm() {
      document.getElementById("appForm").style.display = "block";
      document.getElementById("showBtn").style.display = "none";
    }
  </script>
</head>
<body>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <div class="receipt">
      <h2>Application Receipt</h2>
      <p><strong>Student Name:</strong> <?= $name ?></p>
      <p><strong>Class:</strong> <?= $class ?></p>
      <p><strong>Date of Birth:</strong> <?= $dob ?></p>
      <p><strong>Mother's Name:</strong> <?= $mother ?></p>
      <p><strong>Father's Name:</strong> <?= $father ?></p>
      <p><strong>Mobile Number:</strong> <?= $mobile ?></p>
      <h3 style="color:green;">Application is Successful!</h3>

      <form method="get" action="">
        <button type="submit" class="btn-home">Go to Home</button>
      </form>
    </div>
<?php else: ?>
    <button id="showBtn" class="btn-application" onclick="showForm()">Application Form</button>
    <form id="appForm" action="" method="post" style="display:none;">
      <label>Student Name:</label><br>
      <input type="text" name="name" required><br>

      <label>Class:</label><br>
      <input type="text" name="class" required><br>

      <label>Date of Birth:</label><br>
      <input type="date" name="dob" required><br>

      <label>Mother's Name:</label><br>
      <input type="text" name="mother" required><br>

      <label>Father's Name:</label><br>
      <input type="text" name="father" required><br>

      <label>Mobile Number:</label><br>
      <input type="text" name="mobile" required><br>

      <button type="submit" class="btn-submit">Submit</button>
    </form>
<?php endif; ?>

<div style="margin-bottom: 40px;">
    <video class="promo-video" controls>
      <source src="schl_day.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
</div>

</body>
</html>
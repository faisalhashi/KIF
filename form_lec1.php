<html>
<head>
<title>
PHP Form Lecture
</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<div class="container">
<div class="row">
<div class="col-lg-12">
<h2>PHP Form Control</h2>
</div>
</div>
<div class="row">
<div class="col-lg-3">
<form method="post" action="form_post.php"> 
<p>Enter Name: <input type="text" name="textBox1" class="form-control" /></p>
<p>Enter Father Name: <input type="text" name="textBox2" class="form-control" /></p>
<p>Enter Enrollment: <input type="text" name="textBox3" class="form-control"/></p>
<p>Enter Password: <input type="password" name="passwordBox1" class="form-control" /></p>
<p>Select Batch Code: 
<select name="select1" class="form-control">
<option>1611C2</option>
<option>1706B1</option>
<option>1701B1</option>
<option>1612C1</option>
<option>1702C1</option>
</select></p>
<p>Select Timings: 
<select name="select2" class="form-control">
<option>9-11</option>
<option>11-1</option>
<option>1-3</option>
<option>3-5</option>
<option>5-7</option>
<option>7-9</option>
</select></p>
<p>Select Semester: 
<input type="radio" name="radio1" value="CPISM" class="form-control" /> CPISM
<input type="radio" name="radio1" value="DISM" class="form-control" /> DISM
<input type="radio" name="radio1" value="HDSE-I" class="form-control" /> HDSE-I
<input type="radio" name="radio1" value="HDSE-II" class="form-control" /> HDSE-II
<input type="radio" name="radio1" value="ADSE-I" class="form-control" /> ADSE-I
<input type="radio" name="radio1" value="ADSE-II" class="form-control" /> ADSE-II
</p>
<p>Choose Courses: 
<input type="checkbox" name="checkbox1" value="C#" class="form-control" /> C#
<input type="checkbox" name="checkbox2" value="HTML" class="form-control" /> HTML
<input type="checkbox" name="checkbox3" value="SQL" class="form-control" /> SQL
<input type="checkbox" name="checkbox4" value="JAVA" class="form-control" /> JAVA
<input type="checkbox" name="checkbox5" value="MVC" class="form-control" /> MVC
<input type="checkbox" name="checkbox6" value="PHP" class="form-control" /> PHP
</p>

<p><input type="submit" value="Send" class="btn btn-info" /></p>
</form>
</div>
</div>
</div>
</body>
</html>

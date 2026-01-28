<?php

include("data_class.php");

$book=$_POST['book'];
$userselect= $_POST['userselect'];
$getdate= date("d/m/Y");
$days= $_POST['days'];

$returnDate=Date('d/m/Y', strtotime('+'.$days.'days'));

$obj=new data();
$obj->setconnection();
$obj->issuebook($book,$userselect,$days,$getdate,$returnDate);

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Demo servlet </title>
</head>
<body>
<form method="get" action="Helloservlet">
<pre>
Enter your name :<input type="text" name=t1>
<input type="submit"> <input type="reset">
</pre>
</form>
</body>
</html>

PrintWriter pw=response.getWriter;
	 string s=request.getParameter("t1");
	 pw.println("<h1>hello,"+s);
	pw.close();
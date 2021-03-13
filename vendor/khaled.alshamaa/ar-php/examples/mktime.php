<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>MakeTime for Arabic/Islamic Higri Calendar</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
</head>

<body>

<div class="Paragraph">
<h2 dir="ltr">Example Output:</h2>

<?php

error_reporting(E_STRICT);

date_default_timezone_set('UTC');

/*
  // Autoload files using Composer autoload
  require_once __DIR__ . '/../vendor/autoload.php';
*/

require '../src/Arabic.php';
$Arabic = new \ArPHP\I18N\Arabic();

$correction = $Arabic->mktimeCorrection(9, 1429);
$time = $Arabic->mktime(0, 0, 0, 9, 1, 1429, $correction);
echo "Calculated first day of Ramadan 1429 unix timestamp is: $time<br>";

$Gregorian = date('l F j, Y', $time);
echo "Which is $Gregorian in Gregorian calendar<br>";

$days = $Arabic->hijriMonthDays(9, 1429);
echo "That Ramadan has $days days in total";

?>
</div><br />
<div class="Paragraph">
<h2>Example Code:</h2>
<?php
$code = <<< END
<?php
    date_default_timezone_set('UTC');

	\$Arabic = new \\ArPHP\\I18N\\Arabic();

    \$correction = \$Arabic->mktimeCorrection(9, 1429);
    \$time = \$Arabic->mktime(0, 0, 0, 9, 1, 1429, \$correction);    
    echo "Calculated first day of Ramadan 1429 unix timestamp is: \$time<br>";
    
    \$Gregorian = date('l F j, Y', \$time);
    echo "Which is \$Gregorian in Gregorian calendar";

    \$days = \$Arabic->hijriMonthDays(9, 1429);
    echo "That Ramadan has \$days days in total";
END;

highlight_string($code);
?>
</div>
</body>
</html>

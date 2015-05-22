<?php
$originalDateTime = new DateTime("now");
$userTimezoneOffsetStr = $_POST['timezone_offset'];
$userTimezoneOffsetInt = (is_numeric($userTimezoneOffsetStr) ? (int)$userTimezoneOffsetStr : 0);
$timezoneName = timezone_name_from_abbr("", $userTimezoneOffsetInt * (-60), false);
$modifiedDateTime = $originalDateTime->setTimezone(new DateTimezone($timezoneName));

header("Content-type:text/html; charset=utf-8");
header("Content-Disposition: attachment; filename=wordpress-post-" . date("Y-m-d-H-i-s", ($modifiedDateTime->getTimestamp()) + ($modifiedDateTime->getOffset()) - (2 * 60 * 60)) . ".html");

echo($_POST["content"]);
?>
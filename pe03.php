<?php
if (isset($_GET['submit'])) {
    if ($_GET['submit'] == true) {
        if(isset($_GET['dm']) && isset($_GET['dd']) && isset($_GET['dy'])){
            $bday = mktime(0,0,0,$_GET['dm'],$_GET['dd'],$_GET['dy']);
            $weekday = date("w", $bday);
            switch ($weekday) {
                case 0: $d = "Sunday"; break;
                case 1: $d = "Monday"; break;
                case 2: $d = "Tuesday"; break;
                case 3: $d = "Wednesday"; break;
                case 4: $d = "Thursday"; break;
                case 5: $d = "Friday"; break;
                case 6: $d = "Saturday"; break;
            }
            echo "Your birthday was <b>".date("M-d-Y", $bday)."</b><br />";
            echo "Your birth weekday is <b>".$d."</b><br /><br />";
        }
    }
}
?>
<html>
<head>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get" onsubmit="return check_form(this)">
    Month: <input type="text" name="dm"><br />
    Day: <input type="text" name="dd"><br />
    Year: <input type="text" name="dy"><br />
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<script type="text/javascript">
function has_value(field, alertmsg) {
    if (field.value == null || field.value == "") {
        alert(alertmsg);
        return false;
    } else {
        return true;
    }
}

function check_form(thisform) {
    if (!has_value(thisform.dm, "Month is required!")) {
        thisform.dm.focus();
        return false;
    }
    if (!has_value(thisform.dd, "Day is required!")) {
        thisform.dd.focus();
        return false;
    }
    if (!has_value(thisform.dy, "Year is required!")) {
        thisform.dy.focus();
        return false;
    }
    return true;
}
</script>

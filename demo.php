<!DOCTYPE html>
<html>
<body>
<?php
    require_once("EmailCleaner.php");
    require_once("EmailAddressTools.php");

    $email = " christian@yapoo.co.uk";

    if (array_key_exists("email",$_GET)) {
        echo "<h2>Results</h2>";
        $email = $_GET["email"];
        echo "Input:",$email,"<br>";

        $error  = \freegle\EmailAddressTools\email_error($email);
        if ($error != false){
            echo "\tERROR: ", $error, "<br>";
        }

        $cleaned = \freegle\EmailCleaner\cleanEmail($email);
        if ($email != $cleaned) {
            echo "Cleaned email:", $cleaned, "<br>";
            $error = \freegle\EmailAddressTools\email_error($cleaned);
            if ($error != false){
                echo "\tERROR: ", $error, "<br>";
            }
        }

        echo "Country:" ,\freegle\EmailAddressTools\emailTopLevel($cleaned),"<br>";

        $recommended = \freegle\EmailAddressTools\recommenedEmail($cleaned, 3);
        if ($recommended == $email){
            echo "Email matched known email host<br>";
        } elseif ($recommended == $cleaned){
            echo "Cleaned recommended<br>";
        } elseif ($recommended != false){
            echo "Recommendation: ", $recommended . "<br>";
        } else {
            echo "Sorry no recommenedation<br>";
        }
    }
?>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p>E-mail: <input type="text" name="email" value="<?php echo $email ?>"></p>
    <p><input type="submit" /></p>
</form>
</body>
</html>

<?php
include('libs/phpqrcode/qrlib.php');

$tempDir = 'temp/';
$codeContents = 'Thief Guard[|]88CFBAA7A1DA4CD786A7B8212B0BAE24';
QRcode::png($codeContents, $tempDir . '' . $filename . '.png', QR_ECLEVEL_H, 5);

?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Quick Response (QR) Code Generator</title>
        <link rel="icon" href="img/favicon.ico" type="image/png">
        <link rel="stylesheet" href="libs/css/bootstrap.min.css">
        <link rel="stylesheet" href="libs/style.css">
        <script src="libs/navbarclock.js"></script>
    </head>
    <body onload="startTime()">

        <div class="myoutput">
            <h3><strong>Quick Response (QR) Code Generator</strong></h3>
            <div class="input-field">
                <h3>Please Fill-out All Fields</h3>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="mail" style="width:20em;" placeholder="Enter your Email" value="<?php echo @$email; ?>" required />
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" name="subject" style="width:20em;" placeholder="Enter your Email Subject" value="<?php echo @$subject; ?>" required pattern="[a-zA-Z .]+" />
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <input type="text" class="form-control" name="msg" style="width:20em;" value="<?php echo @$body; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
                    </div>
                </form>
            </div>
            <?php
            if (!isset($filename)) {
                $filename = "author";
            }
            ?>
            <div class="qr-field">
                <h2 style="text-align:center">QR Code Result: </h2>
                <center>
                    <div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
                        <?php echo '<img src="temp/' . @$filename . '.png" style="width:200px; height:200px;"><br>'; ?>
                    </div>
                    <a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
                </center>
            </div>
            <div class = "dllink" style="text-align:center;margin:-100px 0px 50px 0px;">
                <h4>Developer: John Carlo Nañoz</h4>
            </div>
        </div>
    </body>
    <footer><center><br>Brought To You By: code-projects.org</center></footer>
</html>
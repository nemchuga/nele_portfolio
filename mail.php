<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "admin@nemanjailic.rs";
  $headers = "Od: ".$mailFrom;
  $txt = "Primili ste mejl od ".$name.".\n\n".$message;


  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact.html?mailsend");

}
?>

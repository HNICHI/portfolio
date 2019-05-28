
<link rel="stylesheet" href="style.css">


 <section class="container1" id="Contact">
  <div>
    <h2><?php echo $lang['Contact Me'] ?></h2>
    <p><?php echo $lang['today'] ?>
  </div>
  <?php
      if (isset($_POST['submit'])) {
    ?>
      <script>
    
        <?php echo "alert('".$lang['alert']."')"; ?>
      </script>

    <?php
      } 
    ?>

  <div class="roww">
    <div class="column">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6749.029989120705!2d-8.52252054697217!3d32.24422326848516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1syoucode!5e0!3m2!1sfr!2sma!4v1558352468964!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:2px solid #98A9D4" allowfullscreen></iframe>
    </div>
    <div class="column">
      <form  method="post" >
        <label  for="fname"><?php echo $lang['Name'] ?></label>
        <input type="text" id="fname" name="name" placeholder="Your name.." required="">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email.." required="">
        <label  for="tele"><?php echo $lang['Phone'] ?></label>
        <input type="tel" id="tele" name="telephone"  placeholder="123-456-7890.." pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
        <!-- <small class="note">Format: 123-456-7890</small> <br> -->
        <label  for="country"><?php echo $lang['Country'] ?></label>
            <select  id="country" name="country">
                <option>--Choose an country--</option>
                <option value="maroc">Maroc</option>
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                <option value="other">Other</option>
            </select>

        <label class="lbl" for="subject">MSG:</label>
        <textarea id="subject" name="msg" placeholder="Write something for me..." style="height:170px"></textarea>
        <input type="submit" value="Submit" name="submit">
      </form>






<?php
if (isset($_POST['submit'])) {

$Name=htmlspecialchars($_POST['name']);
$Email=htmlspecialchars($_POST['email']);
$Phone=htmlspecialchars($_POST['telephone']);
$Country=htmlspecialchars($_POST['country']);
$Msg=htmlspecialchars($_POST['msg']);


// Create connection
$connection = new mysqli("localhost", "root", "", "portfolio");
// Check connection
//  if(string.length()==20)method
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "INSERT INTO contact (NAME, EMAIL, PHONE,COUNTRY,MSG)
VALUES ('$Name', '$Email', '$Phone','$Country','$Msg')";

    $result = mysqli_query($connection, $sql);
    if ($result) {
       // header("Location: index.php?send");
    }else{
      die('Query failed' . mysqli_error());
    }

(mail("buchou0208@gmail.com", $Name, $Email. "\n Phone: " . $Phone."\n". $Country. "\n MSG:" . $Msg));


  
$connection->close();
}
?>

  
    </div>
  </div>
</section> 



<?php
  include 'includes/header.php'
 ?>

<style media="screen">
label, input {
  display: block;
  margin: 5px 0;
  font-family: 'Oswald';
}

input[type="text"] {
  width: 100%;
}

button {
    background: orange;
}

</style>

<div class="container-fluid">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15678.822607365857!2d106.68809554999999!3d10.757153399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1c06f4e1dd%3A0x43900f1d4539a3d!2sVietnam%20National%20University%20Ho%20Chi%20Minh%20City%20-%20University%20of%20Science!5e0!3m2!1sen!2s!4v1619142162152!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="container">
  <h2>Contact Us</h2>
  <hr>
  <div class="row col-2">
    <div class="col">
      <img src="https://is4-ssl.mzstatic.com/image/thumb/Purple124/v4/c1/ae/3d/c1ae3d6d-8629-acd0-6ec6-8fd4e4a1b9b8/AppIcon-0-0-1x_U007emarketing-0-0-0-7-0-0-sRGB-0-0-0-GLES2_U002c0-512MB-85-220-0-0.png/1200x630wa.png" alt="">
    </div>
    <div class="col">
      <h2>Contact form</h2>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="" method="POST">
        <label for="name" > Your Name </label>
        <input type="text" name="name" value="">
        <label for="email" > Your Email </label>
        <input type="text" name="email" value="">
        <label for="msg" > Your Message </label>
        <input type="text" name="msg" value="">
        <label for="subscribe" > Join our newsletter </label>
        <input type="checkbox" name="subscribe" value="">
        <button type="submit" name="button" class="">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php
include 'includes/footer.php'
 ?>

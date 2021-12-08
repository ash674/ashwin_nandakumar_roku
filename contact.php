<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title></title>
</head>
    <header>
    <section class="headerNav">
        <img src="images/roku.png" alt="">
        <section class="nav">
            <nav>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact</a>
            </nav>
        </section>
    </section>
</header>
<section class="page_name">
    <h2>Contact</h2>
</section>
<body>
<section class="contact-area">
 <section class="contact-form">
<div class="content">
     <form action="includes/send.php" method="POST">
    <label for="firstname">First name</label>
    <input id="firstname" type="text" name="firstname" required value="">
    <label for="lastname">Last name</label>
    <input id="lastname" type="text" name="lastname" required value="">

    <label for="email">Your Email</label>
    <input id="email" type="text" name="email" required value="">
               
<label for="question">Your Question</label>
    <textarea id="question" type="text" name="question" required cols="20" rows="10"></textarea>

     <button type="submit" name="submit" class="contactButton"><p>Submit</p></button>
           
    </form>
  </div>
   
    </section> 
</section>
</body>
</html>
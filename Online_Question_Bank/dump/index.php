<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sliate-minds</title>
    <link rel="stylesheet" href="css/Homestyle.css">
</head>
<body>
<section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="img/site-logo1.png"/>
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="Login.php">Start Your Work</a></li>
            </ul>
        </nav>
        <div class="main-heading">
              <h1>Welcome to Sliate Minds</h1>
              <p>This is a platform where you can easily adapt to your education activities in one place.. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ab ut incidunt! Maiores id voluptatibus neque facere consequuntur, modi asperiores. Ipsa similique debitis illum temporibus vero sunt vel atque commodi.</p>
              <a class="main-btn" href="#">Read More</a>
        </div>
</section>

<section class="features">
        <div>
            <h1>Through This System You Can <span class="auto-type"></span></h1>
        </div>
        <div class="feature-container">
            <div class="feature-box">
               <div class="f-img">
                   <img src="img/info-icon1.png"/>
               </div>
               <div class="f-text">
                <h4>About-Us</h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="main-btn">Check</a>
               </div>
            </div>

            <div class="feature-box">
               <div class="f-img">
                   <img src="img/info-icon2.png"/>
               </div>
               <div class="f-text">
                <h4>Feedbacks</h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="main-btn">Check</a>
               </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about-img">
            <img src="img/au.png">
        </div>
        <div class="about-text">
            <h2>Learn More About Sliate</h2>
            <p>The Sri Lanka Institute of Advanced Technological Education is a statutory body in Sri Lanka coming under the purview of the Higher Education Ministry and offering Higher National Diploma courses. At present, it manages and supervises eighteen provincial Advanced Technological Institutes throughout the island</p>
            <a href="http://www.sliate.ac.lk/"><button class="main-btn" href="#">Learn More</button></a>
        </div>
    </section>

    <section class="contact">
        <div class="contact-heading">
            <h1>Contact-US</h1>
            <p>lorem ipsum dolor slit constru</p>
        </div>
        <form action="contactus.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Submit</button>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-type",
        {
            strings: ["do Assignments","take Quiz","download Lecture Notes"],
            typeSpeed:60,
            backSpeed:60,
            loop: true
        })
    </script>
</body>
</html>
<?php
require '../templates/header.php';
?>

<!-- One -->
<section id="one" style="background-image: url(beccg.gif);" class="wrapper style2">
    <div class="inner">
        <div class="box">
            <div class="image fit">
                <img draggable="false" src="images/doorhandle2.png" alt=""/>
            </div>
            <div class="content">
                <header style="font-family: 'Bai Jamjuree';" class="align-center">
                    <h2>Our Initiatives.</h2>
                    <p>Changing our community for the better.</p>
                </header>
                <hr/>
                <p style="font-family: 'Bai Jamjuree';"> Blizzard Robotics is committed to improving our community,
                    whether it be through connecting with industry professionals or spreading our knowledge. After
                    visiting many currently-open businesses such as dentists, doctors, orthodontists, we decided to
                    create door handles to be opened using one's arm. This allowed the transmission of infection to be
                    greatly lessened due to the elimination of a very commonly shared surface.


                    Also, our team has created Ear Savers and have distributed them to front-line workers in order to
                    help them feel comfortable while working long hours. Ear Savers reduce the strain that masks put on
                    one's ears. </p>
                <center>
                    <button onclick="window.location.href='https://drive.google.com/file/d/1ZzLjnMLgHUIaz7Oj9c4-T4xe43TPEiht/view';">
                        Download STEP Files
                    </button>
                </center>
            </div>
        </div>
    </div>
</section>

<!-- Four -->
<section id="four" class="wrapper style3">
    <div class="inner">

        <header class="align-center">
            <h2 style="font-family: 'Bai Jamjuree';">Let's Change the World Together</h2>
            <p style="font-family: 'Bai Jamjuree';">During this difficult time, we know that being together can help us
                reach even greater heights. If you would like to partner with us or help us to expand our initiative,
                please contact blizzard.robotics@gmail.com. </p>
        </header>

    </div>
</section>

<!-- Footer -->
<footer id="footer" class="wrapper">
    <div class="inner">
        <section>
            <div class="box">
                <div class="content">
                    <h2 style="font-family: 'Bai Jamjuree';" class="align-center">Get in Touch</h2>
                    <hr/>
                    <form action="#" method="post">
                        <div class="field half first">
                            <label for="name">Name</label>
                            <input name="name" id="name" type="text" placeholder="Name">
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="email" placeholder="Email">
                        </div>
                        <div class="field">
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <ul class="actions align-center">
                            <li><input value="Send Message" class="button special" type="submit"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>

        <div style="font-family: 'Bai Jamjuree';" class="copyright">
            &copy; Blizzard Robotics 2020
        </div>

    </div>
</footer>

<?php
require '../templates/footer.php';

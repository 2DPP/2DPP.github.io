<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles\teamstyles.css">
    <link rel="icon" type="image/x-icon" href="Images\Logo.png">
    <title>The ProblemPal Team</title>
</head>
<body>
<?php 

include "Includes\dbconnect.php";


?>
        
    </div>
    <div id= "header1">
        <h1 id="meet">MEET THE TEAM:</h1> 
    </div>
    <!-- everything about profiles are here-->
    <!-- if a href=""  is triggered, the webpage is scrolled unto the value of a href,
    in which as you can see, I used it to select p's with ids that were specified 
    to each member  -->
    <div id="profilesnav">
        <div class="profiles">
            <a href="#nathan"><img class="aimg" src="Images\Bucoy.jpg"></a>
            <h2> Bucoy, <br> Nathan Xander </h2>
        </div>

        <div class="profiles">
            <a href="#catubag"><img class="aimg" src="Images\Catubag.jpg"></a>
            <h2> Catubag,<br>JohnMark </h2>
            </div>

        <div class="profiles">
            <a href="#riosa"><img class="aimg" src="Images\Riosa.jpg"></a>
            <h2> Riosa, <br>John Coddy </h2>
            </div>

        <div class="profiles">
            <a href="#renalyn"><img class="aimg" src="Images\Bautista.jpg"></a>
            <h2> Bautista,<br> Renalyn Rose </h2>
        </div>

        <div class="profiles">
            <a href="#raniel"><img class="aimg" src="Images\Ballesteros.jpg"></a>
            <h2> Ballesteros,<br>Raniel </h2>
        </div>

    </div>


    <div id="header2">

    <h1 id ="we">WE ARE...</h1>

    </div>
    <p>
        <br><br><br>
        We are Group 7. IT students from IT - 212 of STI College Las Pinas. 
        <br><br><br><br><br><br><br>
        S.Y 2023-2024 
       
    </p>

 

<!-- the p here is for scroll to profile purpose-->
    <div class="seperator"> <p id="nathan"></p></div>
    <div class="profilebody">
        <div class="profilename"> <h2 class="pfname"> Nathan Xander Bucoy </h2></div>
        <div class="container">
        <div class="profileinfo">
            <img alt="Member" class="pimage" src="Images\Bucoy.jpg">
            <p class="skills">
                Skills:<br><br>
                Problem Solving <br>
                Illustrating<br>
                coding (learning)</p>
              
                </div>
                <div class="motto"> <p class="mottotext">

                    “I enjoy coding” <br><br>
    
                    I am a student learning web programming and app development.<br>
                     I aspire to have a good IT related job in the future.
                    </p>
                </div>
            </div>
            
        </div>

    </div>
    <div class="seperator"> <p id="catubag"></p></div>
    <div class="profilebody">
        <div class="profilename"> <h2 class="pfname"> JohnMark Catubag </h2></div>
        <div class="container">
        <div class="profileinfo">
            <img alt="Member" id="catubagpfp" class="pimage" src="Images\Catubag.jpg">
            <p class="skills">
                Skills:<br><br>
                Time management <br>
                Coding at a basic level<br>
                Responsible
                </p>
              
                </div>
                <div class="motto"> <p class="mottotext">

                    "I like technology."<br><br>
                    I am currently a student learning the IT course at STI College Las Piñas.<br>
                    I hope to one day graduate and get a stable job.
                  
                    </p>
                </div>
            </div>
            
        </div>
        <div class="seperator"> <p id="riosa"></p></div>
        <div class="profilebody">
            <div class="profilename"> <h2 class="pfname"> John Coddy Riosa </h2></div>
            <div class="container">
            <div class="profileinfo">
                <img alt="Member" class="pimage" src="Images\Riosa.jpg">
                <p class="skills">
                    Skills:<br><br>
                   Linguistics,<br>
                   Media Literate,<br>
                   Illustrating,<br>
                   HTML,<br>
                   CSS 
                    </p>
                  
                    </div>
                    <div class="motto"> <p class="mottotext">
    
                        <b>“Code, Create, Conquer.” <br><br>
                         I like using HTML/CSS <br>
                        and this website is one of the product of my interest in HTML/CSS<br><br>
                        I aspire to be a good developer one day or at least something cool in the future.
                    
                         </p>
                    </div>
                </div>
                
            </div>
            <div class="seperator"> <p id="renalyn"></p></div>
            <div class="profilebody">
                <div class="profilename"> <h2 class="pfname"> Renalyn Rose Bautista </h2></div>
                <div class="container">
                <div class="profileinfo">
                    <img alt="Member" class="pimage" src="Images\Bautista.jpg">
                    <p class="skills">
                        Skills:<br><br>
                        Basics on coding<br>
                        Time management <br>
                        Critical thinking
                        </p>
                      
                        </div>
                        <div class="motto"> <p class="mottotext">
        
                            “A negative mind will never give you a positive life” <br><br>
            
                            I am a student and i like to explore and learn more about different things

                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="seperator"> <p id="raniel"></p></div>
                <div class="profilebody">
                    <div class="profilename"> <h2 class="pfname"> Raniel Ballesteros</h2></div>
                    <div class="container">
                    <div class="profileinfo">
                        <img alt="Member" class="pimage" src="Images\Ballesteros.jpg">
                        <p class="skills">
                            Skills:<br><br>
                            Time Management,<br>
                            Emotional Intelligence<br>
                            </p>
                          
                            </div>
                            <div class="motto"> <p class="mottotext">
            
                                “Do not make yesterday an excuse for not succeeding today.” <br><br>
                
                                I am a student who enjoys playing games and studies diligently for the future.<br>
                                 I am learning coding because I want to create my own app to become successful in the future.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <input type="checkbox" id="menu-toggle" style="display: none;">

                    <div id="vertical-menu">
                      <div class="sub-menu">
                        <button class="menu-button">
                          <!-- home button -->
                         <a href ="index.php"> <svg id="home" width="40" height="40" viewBox="0 0 84 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="42" cy="35.5" rx="42" ry="35.5" fill="#9B59B6"/>
                            <path d="M16 31.7416L42 10H42.52L68 31.7416V32.7528H59.68V55H48.24V41.3483L47.2 39.8315H36.8L35.24 41.3483V55H24.32V32.7528H16V31.7416Z" fill="white" stroke="white"/>
                          </svg></a>
                        </button>
                        
                        <button class="menu-button">
                         <!-- scroll to top button-->
                          <svg id="scrollbtn" width="40" height="40" viewBox="0 0 84 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="42" cy="35.5" rx="42" ry="35.5" fill="#9B59B6"/>
                            <path d="M42.7113 9L22.4227 31.08L22 31.54H33.8351V55H51.1649V31.54H63L42.7113 9Z" fill="white" stroke="white"/>
                          </svg>
                        </button>
                      </div>
                  
                      <label for="menu-toggle" class="menu-button">
                        <!-- main button -->
                        <svg id ="menubtn" width="40" height="40" viewBox="0 0 84 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <ellipse cx="42" cy="35.5" rx="42" ry="35.5" fill="#9B59B6"/>
                          <path d="M36 13V29H20V41.5H36V57.5H48.5V41.5H64.5V29H48.5V13H36Z" fill="white" stroke="white"/>
                        </svg>
                  
                      </label>
                    </div>
                    <footer>
                        <p> Copyright © 2023 ProblemPal. All Rights Reserved.</p>
                    </footer>
                    
                    <script>

let menuButton = document.getElementById('menubtn');
let scrollButton = document.getElementById('scrollbtn');


let middleScroll = window.innerHeight / 2;

// Hide menuButton and other buttons initially
menuButton.style.opacity = '0';
menuButton.style.transition = 'opacity 0.5s ease';
scrollButton.style.display = 'none';

// Handle scroll event
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > middleScroll || document.documentElement.scrollTop > middleScroll) {
        // Show menuButton and other buttons with a smooth fade-in effect
        menuButton.style.display = 'block';
        menuButton.style.opacity = '1';
        scrollButton.style.display = 'block';
    }
}

// Handle click event on #scrollbtn
scrollButton.addEventListener('click', function () {
    // Smooth scroll to the top with a delay
    smoothScrollToTop(500);
});

function smoothScrollToTop(duration) {
    const start = window.scrollY;
    const startTime = performance.now();

    // Smooth scroll animation
    function animateScroll(currentTime) {
        const timeElapsed = currentTime - startTime;
        const run = easeInOutQuad(timeElapsed, start, -start, duration);
        window.scrollTo(0, run);

        if (timeElapsed < duration) {
            requestAnimationFrame(animateScroll);
        }
    }

    function easeInOutQuad(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animateScroll);
}

            // Toggle the submenu when the main button is clicked
    document.getElementById('menu-toggle').addEventListener('change', function() {
      var subMenu = document.querySelector('.sub-menu');
      subMenu.style.maxHeight = this.checked ? '100vh' : '0';
    });
   


                    </script>
                    
     
        <!--  sir penge plus points <3 -->
</body>
</html>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>News</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css"> 
        <link rel="stylesheet" href="./adaptation.css"> 
    </head>

    <body>
        <?php include('check.php'); ?>
        <header class="header">  
            <div class="central">


                <nav class="menu">
                    <ul class="header_list">
                        <li class="header_item">
                            <a href="?lol=landing"><img src="./images/logo.png" alt="Landing" class="header-pic"></a>
                        </li>
                        <li class="header_item">
                            <details class="header_link"><summary class="header_link sum">Category</summary><a href="?lol=micro" class="header_link det">Micro</a><a href="?lol=macro" class="header_link det">Macro</a><a href="?lol=champions" class="header_link det">Champs</a></details>
                        </li>
                        <li class="header_item">
                            <a href="?lol=news" class="header_link">News</a>
                        </li>
                        <li class="header_item">
                            <a href="?lol=us" class="header_link">About us</a>
                        </li>
                        <li class="header_item">
                            <a href="?lol=search" class="header_link">Search</a>
                        </li>
                        <li class="header_item">
                            <details class="cart"><summary class="sum"><img src="./images/lang.png" alt="cart" class="header-pic"></summary><a href="#!" class="header_link det">En</a><a href="#!" class="header_link det">Fr</a></details>
                        </li>

                    </ul>
                </nav>
                
                    
            </div> 
        </header>
        <main>
            <h class="title_landing"><center>Supps - the one who supports you</center></h>
            <div><img src="./images/supps.png" alt="Landing" class="supps-pic"></div>
            <p class="supps_text">The Supps is a team of people, who love League<br>of Legends and want to help players all around<br>the world to become better at the game. Beginner<br>guides, explanations, tips and tricks, reviews and<br>much, much more can be found on our website<br>and social media. Fresh content is released every<br>week, so make sure to follow us and check in so<br>you don't miss out! We are Supps - and we'll<br>support you!</p>
        </main>
       <footer class="footer us">  
            <div class="central footer_menu">
                <div class="header_logo">
                    <a href="?lol=us"><img src="./images/logo.png" alt="Landing" class="footer-pic"></a>
                </div>

                <nav class="menu">
                    <ul class="footer_list">
                        <li class="footer_item">
                            <a href="?lol=us" class="logo_name">Supps</a>
                        </li>
                        <li class="footer_item">
                            <a href="https://t.me/HotSpicyMeat" target="_blank" class="footer_link"><center>Telegram acc:<br>@HotSpicyMeat</center></a>
                        </li>
                        <li class="footer_item">
                            <a href="mailto:yachmen92@gmail.com" target="_blank" class="footer_link"><center>Email adress:<br>yachmen92@gmail.com</center></a>
                        </li>

                    </ul>
                </nav>
                
                    
            </div> 
        </footer>
    </body>
</html> 
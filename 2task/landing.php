<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Landing</title>
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
            
            <h class="title_landing"><center>Educational articles about<br>League of Legens</center></h>
            <div class="central">
            <ul class="main_list">
                <li class="main_item">
                    <a href="?lol=micro" class="rec">
                        <h class="micro_champs_heading">Learn basic game<br>mechanics.</h>
                        <img src="./images/micro.png" alt="Landing" class="micro_champs-pic">
                        <p class="micro_champs_text">These guides will help you to learn<br>more about the basic mechanics<br>of the game, such as the roles and<br>responsibilities of the players, the<br>value of the items and what their<br>purpose, additional abilities,<br>comeback system and so on.</p>
                    </a>
                </li>
                <li class="main_item">
                    <a href="?lol=macro" class="rec">
                        <h class="macro_heading">Start dealing with<br>macro.</h>
                        <img src="./images/macro.png" alt="Landing" class="macro-pic">
                        <p class="macro_text">Since LoL is a strategy, sooner or<br>later you’ll need something more<br>than the right keystroke. This block<br>and its guides are created to<br>understand and anticipate the<br>actions of the opponent’s team<br>and even more.</p>
                    </a>
                </li>
                <li class="main_item">
                    <a href="?lol=champions" class="rec">
                        <h class="micro_champs_heading">Explore champions<br>with us.</h>
                        <img src="./images/champions.png" alt="Landing" class="micro_champs-pic">
                        <p class="micro_champs_text">Since LoL is a strategy, sooner or<br>later you’ll need something more<br>than the right keystroke. This block<br>and its guides are created to<br>understand and anticipate the<br>actions of the opponent’s team<br>and even more.</p>
                    </a>
                </li>

            </ul>
    
            </div>
        </main>
        <footer class="footer landing">  
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
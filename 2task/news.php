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
            <div class="central">l
            <h class="title_landing"><center>Latest League of Legends news</center></h>
            <hr class="line headline">
            <ul class="news_list">
                <li class="news_item">
                    <a href="?lol=error" class="news_link">
                        <h class="news_heading">New champion out of Void</h>
                        <img src="./images/newchamp.png" alt="Landing" class="news-pic">
                        <p class="news_text">Riot dropped info about new champion in<br>April. It might be Rek’Sai’s enemy and also<br>might be pretty similar...</p>
                        <p class="news_data">12.03.22</p>
                    </a>
                    <hr class="line">
                </li>
                <li class="news_item">
                    <a href="?lol=error" class="news_link">
                        <h class="news_heading">LCL has been stopped </h>
                        <img src="./images/lcl.png" alt="Landing" class="news-pic">
                        <p class="news_text">League of Legends Continental League<br>was pre-suspended due to Russian<br>military incursion into the territory of...</p>
                        <p class="news_data">24.02.22</p>
                    </a>
                    <hr class="line">
                </li>
                <li class="news_item">
                    <a href="?lol=error" class="news_link">
                        <h class="news_heading">Season 12 is here</h>
                        <img src="./images/season12.png" alt="Landing" class="news-pic">
                        <p class="news_text">Today Riot  updated LoL to patch 12.1 with<br>new rank system, another banch of buffs<br>and nerfs and obviously with new pack...</p>
                        <p class="news_data">12.01.22</p>
                    </a>
                    <hr class="line">
                </li>
            </ul>
        </div>
        </main>
       <footer class="footer news">  
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
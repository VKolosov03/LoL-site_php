<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Champions</title>
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
            <div class="central">
            <h class="title_landing"><center>Champions guides and reviews</center></h>
            <a href="?lol=pyke"><img src="./images/pyke.png" alt="Landing" class="circle"></a>
            <a href="?lol=pyke" class="caption"><p class="caption_text">Pyke - carry(sup)</p></a>
            <div class="arrow left">
                <div><img src="./images/gragas.png" alt="Landing" class="med_circle"></div>
                <div class="triangle">???</div>
                <div class="lil_circle"></div>
            </div>
            <div class="arrow right">
                <div><img src="./images/lux.png" alt="Landing" class="med_circle right_pic"></div>
                <div class="triangle">???</div>
                <div class="lil_circle"></div>
            </div>
        </div>
        </main>
        <footer class="footer spin">  
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
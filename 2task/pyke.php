<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Pyke</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css"> 
        <link rel="stylesheet" href="./adaptation.css"> 
        <?php include('footer_change.php'); ?>
    </head>

    <body>
        <?php require('check.php'); ?>
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
                <h class="title_landing"><center>Pyke - carry(supp)</center></h>
                <div><img src="./images/pyke1.png" alt="Landing" class="guide-pic1"></div>
                <p class="guide_text1">Once a notorious harpooner, Pyke was always willing to hunt. His dream was to catch the dreaded jaull-fish - a monster who was rarely seen and only mentioned in legends. One day, his dream almost came true, but he lost the fight and go devoured.</p>
                <p class="guide_text2">  The crew presumed Pyke dead, but he really wasn't. He continued to hunt, but now interested in some bigger fish. The lying merchants, reckless bounty hunters and unworthy captains were the targets that could be found "on the list". Stalking through alleyways, lurking in the  shadows and swiftly bringing an end to those who wronged him - Pyke will stop at nothing to get his revenge on the living.<br>  Pyke is an assassin, who is most often played in the support position. His skill-set is very useful for protecting the AD carry and can function well even on low economy.<br>  Pyke's passive "Gift of the Drowned One's" lets you regenerate some of the health you lost when fighting enemy champions if you stay out of sight.<br>  Pyke's Q "Bone Skewer" is his bread-and-butter spell. You can tap it to quickly stab enemies in front of Pyke to deal massive damage and slow the target or hold it to start charging up.<br>  Pyke's W "Ghostwater Dive" makes him gain camouflage and bonus movement speed for 5 seconds. While using that ability, nearby enemies will get a notification that Pyke is close, and reveal him if they come in certain range.<br>  Pyke's E "Phantom Undertow" is a utility spell that grants both mobility and cc. Upon cast, Pyke dashes forward, leaving a phantom behind. After a brief delay, it returns to Pyke, dealing damage and stunning all targets hit by the<br>phantom for 1.5 seconds.</p>
                <p class="guide_text3">  Pyke's Ultimate "Death from Below" is a spell that makes this champion truly unique. After casting, Pyke blinks and damages all enemies hit in an X-shaped area, executing all targets that have less than a certain amount of health.</p>
                <div><img src="./images/pyke2.png" alt="Landing" class="guide-pic2"></div>
                <form method="post" action="addcomment.php">
                    <p><input type="text" class="comment_input" maxlength="140" name="comment" placeholder="Leave your comment here"></p>
                    <button class="comment_button" >Reply</button>
                </form>
                <?php include('getcomment.php'); ?>
            </div>
        </main>
       <footer class="footer guides">  
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

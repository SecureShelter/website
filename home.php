<html lang="en">
<head>


    <link rel="stylesheet" href="corp1.css">
    <link rel="stylesheet" href="anima3.css">
</head>
<body>

<div id="ext1"></div>
<div id="ext2"></div>


<div id="ext3"></div>
<div id="ext4"></div>
<div class="square"></div>
<div class="text">

    <p></p><br><p>GitHub: https://github.com/F0rbidden-Equation </p><p>Youtube: Forbidden Equation </p>
</div>
<div class="text2"> </div>
<div class="text3"> </div>


</div>
<div class="middle">
    <div class="menu">
        <ul>
            <li class="item" id="profile">
                <a href="#profile" class="btn1"><i class="fa fa-user"></i> INFORMATIONS</a>
                <div class="smenu">
                    <a href="">Website</a>
                    <a href="">Contact</a>
                </div>
            </li>



            <li class="item" id="profile">
                <a href="#profile" class="btn2"><i class="fa fa-user"></i>Pentesting</a>
                <div class="smenu">
                    <a href="">Post</a>
                    <a href="">Picture</a>
                </div>
            </li>

            <li class="item" id="messages">
                <a href="#messages" class="btn3"><i class="fa fa-envelope"></i> TUTORIALS </a>
                <div class="smenu">
                    <a href="https://www.w3docs.com/" class="button">Tutorial</a>
                    <a href="">New</a>
                    <a href="">Sent</a>
                    <a href="">Spam</a>
                </div>
            </li>

            <li class="item" id="settings">
                <a href="#settings" class="btn4"><i class="fa fa-cog"></i> PROJECTS</a>
                <div class="smenu">
                    <a href="">Password</a>
                    <a href="">Language</a>
                    <a href="https://127.0.0.1/Scanners_Reseau/" class="button">Languages</a>
               </div>
            </li>

            <li class="item">
                <a href="#" class="btn5"><i class="fa fa-sign-out-alt"></i>RETURN</a>
            </li>
        </ul>
    </div>
</div>












<div id="ext1"></div>
<h1 class="jt --debug">

    <span class="jt__row">
    <span class="jt__text"></span>
  </span>
    <span class="jt__row jt__row--sibling" aria-hidden="true">
    <span class="jt__text"></span>
  </span>
    <span class="jt__row jt__row--sibling" aria-hidden="true"></span>
    <span class="jt__text"></span>

    <span class="jt__row jt__row--sibling" aria-hidden="true"></span>
    <?php
    # scraping books to scrape: https://books.toscrape.com/
    require 'vendor/autoload.php';
    $httpClient = new \GuzzleHttp\Client();
    $response = $httpClient->get('https://thehackernews.com//');
    $htmlString = (string) $response->getBody();
    //add this line to suppress any warnings
    libxml_use_internal_errors(true);
    $doc = new DOMDocument();
    $doc->loadHTML($htmlString);
    $xpath = new DOMXPath($doc);
    $titles = $xpath->evaluate('//h2[@class="home-title"]');?>


    <div class="marquee-rtl">
        <!-- le contenu défilant -->
        <div><?php foreach ($titles as $title) {
                $source="".""."Hacker_news: ".""."";

                $extractedTitles[] = $title->textContent . PHP_EOL;
                echo str_repeat('&nbsp;', 3);
                echo $source;
                echo str_repeat('&nbsp;', 3);
                echo $title->textContent . PHP_EOL;}
            $html="";
            foreach($titles as $title){
                $html.="<ul><li>";


                $html.=implode("</li><li>",$title );

                $html.="</li></ul>";
            }

            echo $html->textContent. PHP_EOL; ?></div>



    </div>
</h1>
</body>
</html>

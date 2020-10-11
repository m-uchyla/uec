@extends('layouts.app')
@section('content')
    <div>
    <div classname="onepage">
    <div>
        <header class="header">
            <nav class="main-nav">
                <a data-scroll="" href="#servers">Serwery</a>
                <a data-scroll="" href="#tournament">Turniej</a>
                <a data-scroll="" href="#live">Live <div id="online-indicator"></div></a>
            </nav>
            
            <a data-scroll="" href="#landing" class="logo"><img src="/public/images/logo.png" alt="Logo"></a>
            
            <nav class="main-nav">
                <a data-scroll="" href="#partners">Sponsorzy</a>
                <a class="disabled">Archiwum</a>
                <a data-scroll="" href="#contact">Kontakt</a>
            </nav>
        </header>
    
        <header class="header_mobile">
            <p></p>
            
            <div class="logo_wrapper">
                <a href="#landing" class="logo"><img src="/public/images/logo.png" alt=""></a>
            </div>
            
            <a class="menu_opener" onclick="controlMenu();">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
            </a>
    
            <nav class="main_nav">
                <a href="#news" onclick="controlMenu();">Newsy</a>
                <a href="#servers" onclick="controlMenu();">Serwery</a>
                <a href="#tournament" onclick="controlMenu();">Turniej</a>
                <a href="#live" onclick="controlMenu();">Live</a>
    
                <a class="disabled" onclick="controlMenu();">SC</a>
                <a href="#partners" onclick="controlMenu();">Sponsorzy</a>
                <a class="disabled" onclick="controlMenu();">Archiwum</a>
                <a href="#contact" onclick="controlMenu();">Kontakt</a>
            </nav>
        </header>
    </div>
    
    <script>
        document.addEventListener('scroll', function() {
            if (window.pageYOffset > 0) {
                document.querySelector("header.header").classList.add("moving");
            }
            else {
                document.querySelector("header.header").classList.remove("moving");
            }
        }, { passive: true });
    
        function controlMenu() {
            document.querySelector('nav.main_nav').classList.toggle("opened");
        }
    
        document.querySelectorAll('[data-scroll]').forEach(function(item) {
            item.addEventListener("click", function (e) {
                e.preventDefault();
    
                var elementToScrollTo = document.querySelector(e.currentTarget.getAttribute("href"));
    
                window.scrollTo(0, elementToScrollTo.offsetTop - 200);
            });
        });
    </script>    <section class="landing" id="landing">
        <div class="spacer"></div>
    
        <div class="center">
            <h1><span>Organizacja</span><br>Mighty Five Esports</h1>
            <a data-tournament="" href="#tournament">Turniej</a>
        </div>
    
        <footer class="social">
            <a href="https://www.facebook.com/MightyVEsports/" target="_blank" rel="noopener noreferrer" class="item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>
                <div class="content">
                    <h2>Facebook</h2>
                    <h3>mightyvesports</h3>
                </div>
            </a>
            
            <a href="https://www.instagram.com/mve.gg/" target="_blank" rel="noopener noreferrer" class="item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                <div class="content">
                    <h2>Instagram</h2>
                    <h3>mve.gg</h3>
                </div>
            </a>
    
    
            <a href="https://twitch.tv/MightyVEsports/" target="_blank" rel="noopener noreferrer" class="item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M391.17,103.47H352.54v109.7h38.63ZM285,103H246.37V212.75H285ZM120.83,0,24.31,91.42V420.58H140.14V512l96.53-91.42h77.25L487.69,256V0ZM449.07,237.75l-77.22,73.12H294.61l-67.6,64v-64H140.14V36.58H449.07Z"></path></svg>
                <div class="content">
                    <h2>Twitch</h2>
                    <h3>mightyvesports</h3>
                </div>
            </a>
    
            <a href="ts3server://ts3.mve.gg/" rel="noopener noreferrer" class="item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M244.2 346.79c2.4-12.3-12-30-32.4-48.7-20.9-19.2-48.2-39.1-63.4-46.6-21.7-12-41.7-1.8-46.3 22.7-5 26.2 0 51.4 14.5 73.9 10.2 15.5 25.4 22.7 43.4 24 11.6.6 52.5 2.2 61.7-1 11.9-4.3 20.1-11.8 22.5-24.3zm205 20.8a5.22 5.22 0 0 0-8.3 2.4c-8 25.4-44.7 112.5-172.1 121.5-149.7 10.5 80.3 43.6 145.4-6.4 22.7-17.4 47.6-35 46.6-85.4-.4-10.1-4.9-26.69-11.6-32.1zm62-122.4c-.3-18.9-8.6-33.4-26-42.2-2.9-1.3-5-2.7-5.9-6.4A222.64 222.64 0 0 0 438.9 103c-1.1-1.5-3.5-3.2-2.2-5 8.5-11.5-.3-18-7-24.4Q321.4-31.11 177.4 13.09c-40.1 12.3-73.9 35.6-102 67.4-4 4.3-6.7 9.1-3 14.5 3 4 1.3 6.2-1 9.3C51.6 132 38.2 162.59 32.1 196c-.7 4.3-2.9 6-6.4 7.8-14.2 7-22.5 18.5-24.9 34L0 264.29v20.9c0 30.8 21 50.4 51.8 49 7.7-.3 11.7-4.3 12-11.5 2-77.5-2.4-95.4 3.7-125.8C92.1 72.39 234.3 5 345.3 65.39 411.4 102 445.7 159 447.6 234.79c.8 28.2 0 56.5 0 84.6 0 7 2.2 12.5 9.4 14.2 24.1 5 49.2-12 53.2-36.7 2.9-17.1 1-34.5 1-51.7zm-159.6 131.5c36.5 2.8 59.3-28.5 58.4-60.5-2.1-45.2-66.2-16.5-87.8-8-73.2 28.1-45 54.9-22.2 60.8z"></path></svg>
                <div class="content">
                    <h2>Teamspeak 3</h2>
                    <h3>ts3.mve.gg</h3>
                </div>
            </a>
        </footer>
    </section>
    
    <script>
        document.querySelector("a[data-tournament]").addEventListener("click", function (e) {
            e.preventDefault();
    
            var elementToScrollTo = document.querySelector(e.currentTarget.getAttribute("href"));
    
            window.scrollTo(0, elementToScrollTo.offsetTop - 200);
        });
    </script>    <section class="sponsors" id="partners">
        <a href="https://marvo-tech.hk/" target="_blank" rel="noreferrer noopener"><img src="/public/images/sponsors/marvo.png" class="actina" alt="actina"></a>
        <a href="https://www.facebook.com/liocatcom/" target="_blank" rel="noreferrer noopener"><img src="/public/images/sponsors/liocat.png" class="zst" alt="liocat"></a>
        <a href="https://titanspace.pl/" target="_blank" rel="noreferrer noopener"><img src="/public/images/sponsors/titanspace.png" alt="stayingame" class="jakubbachorz"></a>
        <a href="https://pl.gaminate.pro/" target="_blank" rel="noreferrer noopener"><img src="/public/images/sponsors/gaminate.png" class="actina" alt="actina"></a>
        <a href="https://www.facebook.com/Moto-Graf-2214486235451944/" target="_blank" rel="noreferrer noopener"><img src="/public/images/sponsors/motograf.png" class="motograf" alt="motograf"></a>
    </section>    <section class="tournament lol" id="tournament">
        <div class="background">
        </div>
        <div class="wrapper">
            <h1>Turniej CSGO</h1>
            <p>Zmierz się z najlepszymi zawodnikami w Polsce i graj o nagrody o wartości ponad <span>5000zł</span>!</p>
            <p>&nbsp;</p>
            <p>Turniej aktywny, trwa faza grupowa!</p>
            <a href="https://mve.gg/turnieje/static/Regulamin-MVM-CSGO-3-edycja.pdf" target="_blank" rel="noopener noreferrer" class="faq">Regulamin</a>
        </div>
    </section>    <section class="tournament_brackets">
        <h1>DRABINKI TURNIEJOWE</h1>
    
        <div class="brackets">
            <div class="stage16">
                <div class="match">
                    <p id="t1">Panica.Gaming</p>
                    <p id="t2">Iltron Esport</p>
                </div>
                <div class="match">
                    <p id="t3">W11 Wydział Śledczy</p>
                    <p id="t4">ADHD</p>
                </div>
                <div class="match">
                    <p id="t5">Provide Gaming</p>
                    <p id="t6">Eonis Gaming</p>
                </div>
                <div class="match">
                    <p id="t7">AceGo e-sports</p>
                    <p id="t8">TaxiTeam</p>
                </div>
                <div class="match">
                    <p id="t9">Rzelastwo</p>
                    <p id="t10">NNG Esport</p>
                </div>
                <div class="match">
                    <p id="t11">Exiled Bears</p>
                    <p id="t12">SATIVE</p>
                </div>
                <div class="match">
                    <p id="t13">Patatajce Zagłady</p>
                    <p id="t14">4LC</p>
                </div>
                <div class="match">
                    <p id="t15">ThunderFlash Yellow</p>
                    <p id="t16">MRZN</p>
                </div>
            </div>
    
            <div class="arr">
                <div class="arrow ss">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                    <div class="four"></div>
                </div>
                <div class="arrow ss">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                    <div class="four"></div>
                </div>
                <div class="arrow ss">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                    <div class="four"></div>
                </div>
                <div class="arrow ss">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                    <div class="four"></div>
                </div>
            </div>
    
            <div class="stage8">
                <div class="match">
                    <p id="s8t1"></p>
                    <p id="s8t2">W11 Wydział Śledczy</p>
                </div>
                <div class="match">
                    <p id="s8t1"></p>
                    <p id="s8t2"></p>
                </div>
                <div class="match">
                    <p id="s8t1"></p>
                    <p id="s8t2"></p>
                </div>
                <div class="match">
                    <p id="s8t1"></p>
                    <p id="s8t2"></p>
                </div>
            </div>
    
            <div class="arr">
                <div class="arrow ff">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                    <div class="four"></div>
                </div>
                <div class="arrow ff">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                    <div class="four"></div>
                </div>
            </div>
    
            <div class="stage4">
                <div class="match">
                    <p id="s8t1"></p>
                    <p id="s8t2"></p>
                </div>
                <div class="match">
                    <p id="s8t1"></p>
                    <p id="s8t2"></p>
                </div>
            </div>
    
            <div class="arr">
                <div class="arrow xx">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                    <div class="four"></div>
                </div>
            </div>
    
            <div class="stage2">
                <div class="match">
                    <p id="s8t1"></p>
                    <p id="s8t2"></p>
                </div>
            </div>
        </div>
    </section>    <div class="tournament_groups">
        <h1>GRUPY TURNIEJOWE</h1>
    
                <div class="group">
                    <h2>GRUPA ALFA</h2>
    
                    
                <div class="team closed">
                    <p onclick="toggleClosed(event)">NNG Esport <span>15</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/kuczkuczu55" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Kuczu</a>
                    <a href="https://www.faceit.com/pl/players/reazonk1ng" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">reazon</a>
                    <a href="https://www.faceit.com/pl/players/OsuPlayer-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Patarika</a>
                    <a href="https://www.faceit.com/pl/players/toudy--" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Toudy</a>
                    <a href="https://www.faceit.com/pl/players/Adamix11" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Haxiu</a>
                    
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">ThunderFlash Yellow<span>10</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/Snejdy-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Snejdy-</a>
                    <a href="https://www.faceit.com/pl/players/Enikace27" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Enikace</a>
                    <a href="https://www.faceit.com/pl/players/EXOK1NG" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">eXo</a>
                    <a href="https://www.faceit.com/pl/players/HtSss" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">HtS</a>
                    <a href="https://www.faceit.com/pl/players/HeyTerek" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">HeyTerek</a>
                    <a href="https://www.faceit.com/pl/players/_bozyy" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">bozyy - standin</a>
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">AtakSpawacza<span>5</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/tommy153" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">GoldSpice153</a>
                    <a href="https://www.faceit.com/pl/players/FeaRzy" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">fearzy</a>
                    <a href="https://www.faceit.com/pl/players/Qiomil" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Qiomil</a>
                    <a href="https://www.faceit.com/pl/players/kuraPiqu" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">kuruHs</a>
                    <a href="https://www.faceit.com/pl/players/SzymekDymek" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">SzymekDymek</a>
                    
                </div>
            
                <div class="team closed">
                    <p class="banned">Punliners<span>0</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/Kadil/stats/csgo" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Kadil</a>
                    <a href="https://www.faceit.com/pl/players/wenglii" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">wengli</a>
                    <a href="https://www.faceit.com/pl/players/MILOSZERO" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">miloszero</a>
                    <a href="https://www.faceit.com/pl/players/kub--" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">kub</a>
                    <a href="https://www.faceit.com/pl/players/Kizzzi" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Kizzzi</a>
                    
                </div>
            
                </div>
            
                <div class="group">
                    <h2>GRUPA BRAVO</h2>
    
                    
                <div class="team closed">
                    <p onclick="toggleClosed(event)">Exiled Bears<span>15</span></p>
                    
                    <a href="https://www.faceit.com/en/players/-mATx" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">mat</a>
                    <a href="https://www.faceit.com/pl/players/--AzzY--" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">AZZY</a>
                    <a href="https://www.faceit.com/en/players/MrLavoX" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">LAVOX</a>
                    <a href="https://www.faceit.com/en/players/j0x-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">JOX</a>
                    <a href="https://www.faceit.com/pl/players/GTLCK" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">GTLCK</a>
                    
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">W11 Wydział Śledczy<span>10</span></p>
                    
                    <a href="https://www.faceit.com/en/players/_Fe1ix" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Fe1ix</a>
                    <a href="https://www.faceit.com/en/players/Nafar" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Nafar</a>
                    <a href="https://www.faceit.com/en/players/PeTeRoOo" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">PeTeRoOo</a>
                    <a href="https://www.faceit.com/en/players/yasssiek" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Yasiek</a>
                    <a href="https://www.faceit.com/en/players/waruzuraw123" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">waruzuraw</a>
                    
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">SATIVE<span>5</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/Mastertukan" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Mastertukan</a>
                    <a href="https://www.faceit.com/pl/players/KanCzesio" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">KanCzesio</a>
                    <a href="https://www.faceit.com/pl/players/Bugii_" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Bugi</a>
                    <a href="https://www.faceit.com/pl/players/Ki3lo" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Ki3lo</a>
                    <a href="https://www.faceit.com/pl/players/VaRoo" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Varo</a>
                    <a href="https://www.faceit.com/pl/players/kamkofvac" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">kamk0F - standin</a>
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">Ice Warriors Esports <span>0</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/Damimek" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">DoM1RaX </a>
                    <a href="https://www.faceit.com/pl/players/1uke--" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">1uke</a>
                    <a href="https://www.faceit.com/pl/players/D3GoT" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">d3got</a>
                    <a href="https://www.faceit.com/pl/players/R_3_X" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">r_e_x</a>
                    <a href="https://www.faceit.com/pl/players/r0liko" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">r0L3nS</a>
                    <a href="https://www.faceit.com/pl/players/DANIELOOOOOO" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Danielo - standin</a>
                </div>
            
                </div>
            
                <div class="group">
                    <h2>GRUPA CHARLIE</h2>
    
                    
                <div class="team closed">
                    <p onclick="toggleClosed(event)">Eonis Gaming<span>15</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/Cuksyyyyk" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Cuksyyyk</a>
                    <a href="https://www.faceit.com/pl/players/Delorr" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Delor</a>
                    <a href="https://www.faceit.com/pl/players/Matez1k" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">MATEZ</a>
                    <a href="https://www.faceit.com/pl/players/ST0RMIKK" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">StorMikk</a>
                    <a href="https://www.faceit.com/pl/players/paffczynhehe" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Paffczyn</a>
                    <a href="https://www.faceit.com/en/players/-Bumek-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Bumek - standin</a>
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">MRZN<span>10</span></p>
                    
                    <a href="https://www.faceit.com/en/players/Quentoo" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Quentoo</a>
                    <a href="https://www.faceit.com/en/players/-aimy-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">aimy</a>
                    <a href="https://www.faceit.com/en/players/mcKxGOD" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">mcK</a>
                    <a href="https://www.faceit.com/en/players/Swiss" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Swiss</a>
                    <a href="https://www.faceit.com/en/players/Sruba" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Sruba</a>
                    
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">soCLOSE esport<span>5</span></p>
                    
                    <a href="https://www.faceit.com/en/players/_dREWNIAK" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">dREWNIAK</a>
                    <a href="https://www.faceit.com/en/players/ZauronPL" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Z4uron</a>
                    <a href="https://www.faceit.com/en/players/DeMek_" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">DeMek</a>
                    <a href="https://www.faceit.com/en/players/-KapitOOO" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">kapitoBiceps</a>
                    <a href="https://www.faceit.com/en/players/-iTALL-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">iTALL</a>
                    
                </div>
            
                <div class="team closed">
                    <p class="banned"> XJudgment<span>0</span></p>
                    
                    <a href="https://www.faceit.com/en/players/K4cz0rr" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">K4czor</a>
                    <a href="https://www.faceit.com/en/players/raks0n" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Raks0n</a>
                    <a href="https://www.faceit.com/en/players/CamoK123" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">DP </a>
                    <a href="https://www.faceit.com/en/players/krez-q" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Krez</a>
                    <a href="https://www.faceit.com/en/players/RoryMercury-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Kuczi</a>
                    
                </div>
            
                </div>
            
                <div class="group">
                    <h2>GRUPA DELTA</h2>
    
                    
                <div class="team closed">
                    <p onclick="toggleClosed(event)">ILTRON<span>15</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/Reqsuu" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Mashete</a>
                    <a href="https://www.faceit.com/pl/players/-B0b3k" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Bobby</a>
                    <a href="https://www.faceit.com/pl/players/rem1i" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Rem1i</a>
                    <a href="https://www.faceit.com/pl/players/BraveeSoul" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Bravesoul</a>
                    <a href="https://steamcommunity.com/profiles/76561198179718593/" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">EmaN</a>
                    <a href="https://www.faceit.com/pl/players/dreaMaker-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Drea[M]aker - standin</a>
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">Provide Gaming<span>5</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/szejkovskyyy" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Szejkovskyyy </a>
                    <a href="https://www.faceit.com/pl/players/PiggyBiggy" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Morfi</a>
                    <a href="https://www.faceit.com/pl/players/zadyma1337" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">E1NFACH</a>
                    <a href="https://www.faceit.com/pl/players/SAPFIRE-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">SapFire</a>
                    <a href="https://www.faceit.com/pl/players/kania-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Kania</a>
                    <a href="https://www.faceit.com/pl/players/NeedNextBlod" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">ScreeT - standin</a>
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">Szpule Esports<span>5</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/11fifi-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Ronaldinho Gaucho</a>
                    <a href="https://www.faceit.com/en/players/looqu" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Roberto Carlos</a>
                    <a href="https://www.faceit.com/en/players/Chmi3lu1" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Kaká</a>
                    <a href="https://www.faceit.com/en/players/Mzimon" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Pelé</a>
                    <a href="https://www.faceit.com/en/players/Xelmo" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Ronaldo Luís Nazário</a>
                    <a href="https://www.faceit.com/en/players/nawie" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Dida - standin</a>
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">Young Tigers E- Sport<span>0</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/Kuprycz" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">kuprycz</a>
                    <a href="https://www.faceit.com/pl/players/Losiu2k" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Łosiu </a>
                    <a href="https://www.faceit.com/pl/players/-HaRnAs-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">HaRnAś </a>
                    <a href="https://www.faceit.com/pl/players/Freshu4" class="link" target="_blank"><img src="/public/images/faceit.png" alt=""> Freshu</a>
                    <a href="https://www.faceit.com/pl/players/Rahimek1K" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">R@him </a>
                    
                </div>
            
                </div>
            
                <div class="group">
                    <h2>GRUPA ECHO</h2>
    
                    
                <div class="team closed">
                    <p onclick="toggleClosed(event)">4LC<span>15</span></p>
                    
                    <a href="https://www.faceit.com/en/players/Macios20" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">makicious</a>
                    <a href="https://www.faceit.com/en/players/W4LL4CEE" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">WALLACE</a>
                    <a href="https://www.faceit.com/en/players/VezQui" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">VezQui</a>
                    <a href="https://www.faceit.com/en/players/suciak" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">suciak</a>
                    <a href="https://www.faceit.com/en/players/BisT-" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">beast</a>
                    
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">Panica Gaming<span>10</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/WiteK_" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">WiteK</a>
                    <a href="https://www.faceit.com/pl/players/ANGE1FIRE" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">ANGE1FIRE</a>
                    <a href="https://www.faceit.com/pl/players/lysyplay" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Liesay</a>
                    <a href="https://www.faceit.com/pl/players/dymoza" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Dymek</a>
                    <a href="https://www.faceit.com/pl/players/Bija12" class="link" target="_blank"><img src="/public/images/faceit.png" alt=""> BIJa </a>
                    <a href="https://www.faceit.com/pl/players/Bronzik" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Bronzik❤K  - standin</a>
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">ADHD<span>5</span></p>
                    
                    <a href="https://www.faceit.com/en/players/Spethy" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Spethy</a>
                    <a href="https://www.faceit.com/en/players/bamek" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Bamek</a>
                    <a href="https://www.faceit.com/en/players/SNEJKUr" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Snejku</a>
                    <a href="https://www.faceit.com/en/players/Gondzior" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Novak</a>
                    <a href="https://www.faceit.com/en/players/73VENN" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">73V3NN</a>
                    
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">ToJestGG<span>0</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/tencodostaje" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">asE</a>
                    <a href="https://www.faceit.com/pl/players/Spajk3r" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Spajk3r</a>
                    <a href="https://www.faceit.com/pl/players/IGC1O" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">igc</a>
                    <a href="https://www.faceit.com/pl/players/DestroyOf" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">exit</a>
                    <a href="https://www.faceit.com/pl/players/piwowar111" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Hamilton</a>
                    
                </div>
            
                </div>
            
                <div class="group">
                    <h2>GRUPA FOXTROT</h2>
    
                    
                <div class="team closed">
                    <p onclick="toggleClosed(event)">AceGo E-sports<span>15</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/WinZisko" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">W1NZ</a>
                    <a href="https://www.faceit.com/pl/players/zibix444" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">zibzera</a>
                    <a href="https://www.faceit.com/pl/players/kodaf" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">kodaf</a>
                    <a href="https://www.faceit.com/pl/players/KYIOO" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">KYIOO</a>
                    <a href="https://www.faceit.com/en/players/P1TBULLK1NG" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">P1TBULLK1NG</a>
                    
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">Rzelastwo<span>10</span></p>
                    
                    <a href="https://www.faceit.com/en/players/vELOzERO" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">vELO0</a>
                    <a href="https://www.faceit.com/pl/players/SYXZJAE" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">SYXZJAE</a>
                    <a href="https://www.faceit.com/pl/players/aqlus" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">yung cat</a>
                    <a href="https://www.faceit.com/en/players/Mix3r00" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">mix3r00</a>
                    <a href="https://www.faceit.com/en/players/Czajav13" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Czajav</a>
                    
                </div>
            
                <div class="team closed">
                    <p class="banned">Avalanchegg<span>0</span></p>
                    
                    <a href="https://www.faceit.com/en/players/SEQU3R" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">SEQU3R</a>
                    <a href="https://www.faceit.com/en/players/Bronzik" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Bronzik</a>
                    <a href="https://www.faceit.com/en/players/wachooo" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Wacho</a>
                    <a href="https://www.faceit.com/en/players/DEXTERhehe" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">DEXTER</a>
                    <a href="https://www.faceit.com/en/players/Skapi0ny" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">nEi</a>
                    
                </div>
            
                <div class="team closed">
                    <p class="banned">LionsOfMomentum<span>0</span></p>
                    
                    <a href="https://www.faceit.com/en/players/MR_Freey" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Freey</a>
                    <a href="https://www.faceit.com/en/players/PAFPAFPAFPAF" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">PAFPAFPAFPAF</a>
                    <a href="https://www.faceit.com/en/players/Sharminte" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Sharminte </a>
                    <a href="https://www.faceit.com/en/players/DarkLethos" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">KraQ</a>
                    <a href="https://www.faceit.com/en/players/niedbix" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Niedbix</a>
                    <a href="https://www.faceit.com/pl/players/Magze" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Magz - standin</a>
                </div>
            
                </div>
            
                <div class="group">
                    <h2>GRUPA GOLF</h2>
    
                    
                <div class="team closed">
                    <p onclick="toggleClosed(event)">Patatajce Zagłady<span>10</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/QwernY" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Qwerny^</a>
                    <a href="https://www.faceit.com/pl/players-modal/maczetka" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">maczetka </a>
                    <a href="https://www.faceit.com/pl/players-modal/zayaNovs" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">zayANNN =DD</a>
                    <a href="https://www.faceit.com/pl/players/blekXD" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">blek</a>
                    <a href="https://www.faceit.com/pl/players/mattyeh" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">mattyeh </a>
                    
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">TaxiTeam<span>5</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/Ventylek" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Veryl</a>
                    <a href="https://www.faceit.com/pl/players/DaVuHD" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">DaVvu</a>
                    <a href="https://www.faceit.com/pl/players/Kosciok" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">4DR1K!</a>
                    <a href="https://www.faceit.com/pl/players/Etfin" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Etfin</a>
                    <a href="https://www.faceit.com/pl/players/YaNoOOO" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">YaNo</a>
                    <a href="https://www.faceit.com/pl/players/MultiKuba" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Kuba - standin</a>
                </div>
            
                <div class="team closed">
                    <p onclick="toggleClosed(event)">Team NOLF Gold<span>0</span></p>
                    
                    <a href="https://www.faceit.com/pl/players/Sutter" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Sutter Kain</a>
                    <a href="https://www.faceit.com/pl/players/sweet_adam" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">RBY</a>
                    <a href="https://www.faceit.com/pl/players/BlackSaigon" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">BlackSaigon</a>
                    <a href="https://www.faceit.com/pl/players/Qubox400" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Deso</a>
                    <a href="https://www.faceit.com/pl/players/woli3006" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Woli</a>
                    <a href="https://www.faceit.com/pl/players/Imielski" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">Imiel - standin</a>
                </div>
            
                </div>
            </div>
    
    <script>
        let ALL_TEAMS = [];
    
        async function fetchTeams() {
            let teams = await fetch("https://mve.gg/turnieje/csgo/teams");
    
            return await teams.json();
        }
    
        function displayGroup(group) {
            let ts = ``;
    
            let sortedTeams = ALL_TEAMS.filter(obj => {
                return group.teams.includes(obj.id);
            });
    
            sortedTeams.sort((a, b) => (a.points < b.points) ? 1 : -1);
    
            sortedTeams.map(t => {
                ts+=displayTeam(t)
            });
    
            let g = `
                <div class="group">
                    <h2>GRUPA ${group.name}</h2>
    
                    ${ts}
                </div>
            `;
    
            document.querySelector('div.tournament_groups').insertAdjacentHTML("beforeend", g);
        }
    
        function toggleClosed(event) {
            event.target.parentNode.classList.toggle("closed");
        }
        
        function displayTeam(team) {
            let t = `
                <div class="team closed">
                    ${team.points == -1 ? `<p class="banned">${team.fields.csgo_team_name}<span>${team.points == -1 ? 0 : team.points}</span></p>` : `<p onclick="toggleClosed(event)">${team.fields.csgo_team_name}<span>${team.points == -1 ? 0 : team.points}</span></p>`}
                    
                    <a href="${team.fields.csgo_captain_faceit}" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">${team.fields.csgo_captain_nick}</a>
                    <a href="${team.fields.csgo_p1_faceit}" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">${team.fields.csgo_p1_nick}</a>
                    <a href="${team.fields.csgo_p2_faceit}" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">${team.fields.csgo_p2_nick}</a>
                    <a href="${team.fields.csgo_p3_faceit}" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">${team.fields.csgo_p3_nick}</a>
                    <a href="${team.fields.csgo_p4_faceit}" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">${team.fields.csgo_p4_nick}</a>
                    ${team.fields.csgo_standin_faceit != "" ? `<a href="${team.fields.csgo_standin_faceit}" class="link" target="_blank"><img src="/public/images/faceit.png" alt="">${team.fields.csgo_standin_nick} - standin</a>` : ''}
                </div>
            `;
    
            return t;
        }
    
    
    
        fetchTeams().then(teams => {
            ALL_TEAMS = teams.teams;
    
            displayGroup({
                name: "ALFA",
                teams: [17, 26, 24, 7]
            });
            displayGroup({
                name: "BRAVO",
                teams: [1,13,8,9]
            });
            displayGroup({
                name: "CHARLIE",
                teams: [12,21,18,3]
            });
            displayGroup({
                name: "DELTA",
                teams: [19,23,6,16]
            });
            displayGroup({
                name: "ECHO",
                teams: [15,14,4,25]
            });
            displayGroup({
                name: "FOXTROT",
                teams: [10,5,0,20]
            });
            displayGroup({
                name: "GOLF",
                teams: [2,11,22]
            });
        });
    </script>    
    <section class="our-team">
        <div class="container">
            <div class="description">
                <h1>Nasz zespół</h1>
    
                <h2>Kim jesteśmy</h2>
                <p>Jesteśmy ekipą, która wkracza na nowy poziom polskiej sceny esportowej. Młodzi i chętni do pracy, podejmujemy się wielu wyzwań by sprostać oczekiwaniom naszych fanów. Naszą ambicją jest stanie się rozpoznawalną marką, wymienianą jednym tchem z takimi sławami jak LEC czy Ultraliga!</p>
    
                <h2>Nasza misja</h2>
                <p>Naszą misją jest podniesienie profesjonalizmu sceny esportowej w Polsce oraz tworzenie nowych możliwości dla młodych ludzi. Projektami które tworzymy, chcemy pokazać, że każdy może odnaleźć się w pełnym emocji i wyzwań świecie esportu!</p>
            </div>
    
            <div class="people">
                <div class="item">
                    <img src="/public/images/logo.png" alt="">
                    <h2>Finrael</h2>
                    <p>Założyciel Organizacji</p>
                </div>
                <div class="item">
                    <img src="/public/images/logo.png" alt="">
                    <h2>Łupaszko</h2>
                    <p>Założyciel Organizacji</p>
                </div>
                <div class="item">
                    <img src="/public/images/logo.png" alt="">
                    <h2>Sajson</h2>
                    <p>Social Media Manager</p>
                </div>
                <div class="item">
                    <img src="/public/images/logo.png" alt="">
                    <h2>Vanilla</h2>
                    <p>Dyrektor Operacyjny</p>
                </div>
                <div class="item">
                    <img src="/public/images/logo.png" alt="">
                    <h2>Remigiusz</h2>
                    <p>Dyrektor SC</p>
                </div>
                <div class="item">
                    <img src="/public/images/logo.png" alt="">
                    <h2>Kuban</h2>
                    <p>Programista</p>
                </div>
                <div class="item">
                    <img src="/public/images/logo.png" alt="">
                    <h2>KäteU</h2>
                    <p>Grafik</p>
                </div>
            </div>
        </div>
    </section>
    <section class="servers" id="servers">
        <div class="description">
            <h1>Nasze serwery</h1>
            <p>Posiadamy własną sieć serwerów przeznaczonych dla naszych drużyn jak i fanów. Wejdź i zmierz się w walce z innymi graczami!</p>
        </div>
    
        <div class="servers_wrapper">
            <div class="server_item ts3">
                <h2>Teamspeak</h2>
                
                <h4>Online</h4>
                <h3>Aktywni użytkownicy <br><span id="ts3_active_users">10/32</span></h3>
    
                <a href="ts3server://ts3.mve.gg/" class="join">Dołącz</a>
            </div>
    
            <div class="server_item discord">
                <h2>Discord</h2>
                
                <h4>Online</h4>
    
                <a href="https://discord.com/invite/jwGvBSK" target="_blank" rel="noopener noreferrer" class="join">Dołącz</a>
            </div>
    
            <div class="server_item csgo-training">
                <h2>CS:GO</h2>
                <h3>Treningowy</h3>
                
                <h4>Online</h4>
                <h3>Gracze na serwerze <br><span class="disabled">0/0</span></h3> */}
    
    
                <a href="#contact" class="join">Poproś o dostęp</a>
            </div>
    
            <div class="server_item csgo-codmod">
                <h2>CS:GO</h2>
                <h3>COD Mod</h3>
                
                <h4 class="offline">Offline</h4>
                <h3>Gracze na serwerze <br><span class="disabled">0/0</span></h3>
    
                <a class="join join--disabled">Dołącz</a>
            </div>
    
    
            
            <div class="server_item mc">
                <h2>Minecraft</h2>
                <h3>Survival Games</h3>
    
                <h4 class="offline">Offline</h4>
                <h3>Gracze na serwerze <br><span class="disabled">0/0</span></h3>
    
                <a class="join join--disabled">Dołącz</a>
            </div>
    
            <div class="server_item terraria">
                <h2>Terraria</h2>
                <h3>Vanilla</h3>
                
                <h4 class="offline">Offline</h4>
                <h3>Gracze na serwerze <br><span class="disabled">0/0</span></h3>
    
                <a class="join join--disabled">Dołącz</a>
            </div>
            
            <div class="server_item rust">
                <h2>Rust</h2>
                <h3>Vanilla</h3>
                
                <h4 class="offline">Offline</h4>
                <h3>Gracze na serwerze <br><span class="disabled">0/0</span></h3>
    
                <a class="join join--disabled">Dołącz</a>
            </div>
        </div>
    </section>
    
    <script>
        fetch(`/api/ts3`)
        .then(resp => resp.json())
        .then(resp => {
            document.querySelector('span#ts3_active_users').innerText = `${resp.online_count}/32`;
        })
        .catch((error) => {
            // console.log(error.message + "   <==== error");
        });
    </script>
    <section class="live" id="live">
        <div class="container">
            <h1>Live</h1>
    
            <div class="streams_wrapper">
                
            
                    <a href="https://twitch.tv/MightyVEsports/" target="_blank" rel="noreferrer noopener" class="main_stream">
                        <img src="https://static-cdn.jtvnw.net/jtv_user_pictures/3e760302-d718-49fa-ae45-409bdabc4e61-channel_offline_image-1024x576.png" class="offline" alt="">
    
                        <div class="stream_info">    
                            <p class="broadcaster broadcaster--offline">MightyVEsports</p>
    
                            <p class="watching">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"></path></svg>
                                0
                            </p>
    
                            
                            
                            <p class="channel_status">Kanał aktualnie offline</p>
                        </div>
                    </a>
                
                    <a href="https://twitch.tv/sajsoneiro/" target="_blank" rel="noreferrer noopener" class="main_stream">
                        <img src="https://static-cdn.jtvnw.net/jtv_user_pictures/b83570ff-6e42-47dd-9e9d-e881eda5a91d-channel_offline_image-1024x576.png" class="offline" alt="">
    
                        <div class="stream_info">    
                            <p class="broadcaster broadcaster--offline">sajsoneiro</p>
    
                            <p class="watching">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"></path></svg>
                                0
                            </p>
    
                            
                            
                            <p class="channel_status">Kanał aktualnie offline</p>
                        </div>
                    </a>
                
                    <a href="https://twitch.tv/Finrael_/" target="_blank" rel="noreferrer noopener" class="main_stream">
                        <img src="https://static-cdn.jtvnw.net/jtv_user_pictures/77513052-6faa-47c4-8193-30398e317c6d-channel_offline_image-1024x576.png" class="offline" alt="">
    
                        <div class="stream_info">    
                            <p class="broadcaster broadcaster--offline">Finrael_</p>
    
                            <p class="watching">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"></path></svg>
                                0
                            </p>
    
                            
                            
                            <p class="channel_status">Kanał aktualnie offline</p>
                        </div>
                    </a>
                
                    <a href="https://twitch.tv/Lupaszko/" target="_blank" rel="noreferrer noopener" class="main_stream">
                        <img src="https://static-cdn.jtvnw.net/jtv_user_pictures/56db495b-deef-499f-b57b-b9597f245279-channel_offline_image-1024x576.png" class="offline" alt="">
    
                        <div class="stream_info">    
                            <p class="broadcaster broadcaster--offline">Lupaszko</p>
    
                            <p class="watching">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"></path></svg>
                                0
                            </p>
    
                            
                            
                            <p class="channel_status">Kanał aktualnie offline</p>
                        </div>
                    </a>
                </div>
        </div>
    </section>
    
    
    
    <script>
        fetch(`/api/twitch`)
        .then(resp => resp.json())
        .then(resp => {
            if(resp.online) document.querySelector('div#online-indicator').classList.add('online');
    
            resp.streamers.map((stream, id) => {
                document.querySelector('div.streams_wrapper').insertAdjacentHTML("beforeend", `
                    <a href=${stream.url} target="_blank" rel="noreferrer noopener" class="main_stream">
                        <img src=${stream.thumbnail_url} class=${stream.online ? null : "offline"} alt=""/>
    
                        <div class="stream_info">    
                            <p class="broadcaster ${stream.online ? "" : "broadcaster--offline"}">${stream.user_name}</p>
    
                            <p class="watching">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"/></svg>
                                ${stream.viewer_count}
                            </p>
    
                            ${stream.online ? '<p class="play_control"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"/></svg></p>' : ""}
                            
                            <p class="channel_status">${stream.title}</p>
                        </div>
                    </a>
                `);
            });
        }).catch((error) => {
            // console.log(error.message + "   <==== error");
        });
    </script>




    <section class="contact" id="contact">
        <div class="container">
            <div class="description">
                <h1>Masz pytanie? <br> Napisz do nas!</h1>
                <div class="spacer"></div>
                <p>Zawsze jesteśmy otwarci na nowe pomysły jak i oferty współpracy. Jeśli chcesz dołączyć do naszego zespołu, napisz do nas wiadomość!</p>
    
                <div class="social_media">
                    <a href="https://www.facebook.com/MightyVEsports/" target="_blank" rel="noreferrer noopener" class="link" aria-label="facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>
                    </a>
                    <a href="https://twitch.tv/MightyVEsports/" target="_blank" rel="noreferrer noopener" class="link" aria-label="twitch">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M391.17,103.47H352.54v109.7h38.63ZM285,103H246.37V212.75H285ZM120.83,0,24.31,91.42V420.58H140.14V512l96.53-91.42h77.25L487.69,256V0ZM449.07,237.75l-77.22,73.12H294.61l-67.6,64v-64H140.14V36.58H449.07Z"></path></svg>
                    </a>
                    <a href="https://instagram.com/mve.gg/" target="_blank" rel="noreferrer noopener" class="link" aria-label="instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                    </a>
                    <a href="mailto:kontakt.mightyfive@gmail.com" target="_blank" rel="noreferrer noopener" class="link" aria-label="email">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
                    </a>
                </div>
            </div>
    
            <form data-content-length="0/500" class="contact_form">
                
                <label htmlfor="name_surname">Imię i nazwisko</label>
                <input aria-label="namesurname" type="text" id="name_surname" placeholder="Imię i nazwisko">
                <label htmlfor="email">Email</label>
                <input aria-label="email" type="email" id="email" placeholder="Adres email">
                <label htmlfor="message">Wiadomość</label>
                <textarea aria-label="message" placeholder="Twoja wiadomość..." rows="5" id="contact-textarea"></textarea>
    
    
    
                    <input type="submit" value="Wyślij" class="disabled">
            </form>
        </div>
    </section>
    
    <script>
    
            document.getElementById("contact-textarea").addEventListener("keydown", function (e) {
                if(e.key === "Backspace" || e.key === "Enter") return;
                if(e.target.value.length > 499) {
                    console.log("ijeee");
                    e.preventDefault();
                    return;
                }
                document.querySelector("form.contact_form").setAttribute("data-content-length", e.target.value.length + 1 + "/500");
            });
    </script>    <section class="copyright">
        <div class="container">
            <p>Copyright © 2020 Mighty Five Esports™</p>
            <p>Made with <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path></svg> by <a href="mailto:piotr.haptas@gmail.com">Piotr Haptaś</a></p>
        </div>
    </div>
@endsection
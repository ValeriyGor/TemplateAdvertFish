<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="css/bundle.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajaxbootstrap.com/files/counter.js"></script>
    <script type="text/javascript" src="http://ajaxbootstrap.com/files/functions.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.7/jquery.inputmask.bundle.min.js"></script>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1246314138741479'); // Insert your pixel ID here.
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1246314138741479&ev=PageView&noscript=1"
    /></noscript>
  </head>
  <body>

    <!-- BEGIN content -->
    <div class="out">
        <div class="block1">
            <div class="block1__in in">
                <div class="block1__form">
                    <div id="form1" class="form_block">
                        <span class="sp white">Hurry up to order with discount <span class="adfh-discount"></span>%!</span>
                        <span class="sp white">Quantity is limited!</span>
                        <span class="sp white free_del">Free Delivery!</span>
                        <span class="sp white old-price">Old price: <span class="adfh-old-price"></span> <span class="adfh-currency"></span></span>
                        <span class="sp new-price">New Price: <span class="adfh-new-price"></span> <span class="adfh-currency"></span></span>
                        <span class="sp white">Time left to buy:</span>
                        <div class="timer">
                            <div id="countdown"></div>
                        </div>
                        <div id="form-wrapper" class="form form-wrapper">
                            <form class="form orderformcdn" action="" method="GET">
                            <input class="form-name name fio" name="name" placeholder="">
                            <input class="form-phone phone tel" name="phone" placeholder="" required="" type="tel">
                            <textarea class="address form-text" name="address" id="" rows="3" placeholder=""></textarea>

                            <input type="hidden" name="_csrf-tds" value="">
                            <input type="hidden" name="referrer" value="">
                            <input type="hidden" name="view_time" value="">
                            <input type="hidden" class="adfsh-ck" name="cookie" value="">
                            <input type="hidden" class="orderViewHash" name="view_hash" value="">
                            <input type="hidden" name="sid" value="">
                            <input type="hidden" name="offer_hash" value="">

                            <button name="button" class="form-btn" type="submit">ORDER NOW</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>














        <div class="reviews">
            <div class="reviews__in in">
                <div class="reviews__caption">Reviews of our customers:</div>
                <div class="reviews__item">
                    <img src="img/rev1.png" alt="">
                    <div class="reviews__text">
                        <p></p>
                        <div class="reviews__name"></div>
                    </div>
                </div>
                <div class="reviews__item">
                    <img src="img/rev2.png" alt="">
                    <div class="reviews__text">
                        <p></p>
                        <div class="reviews__name"></div>
                    </div>
                </div>
                <div class="reviews__item">
                    <img src="img/rev3.png" alt="">
                    <div class="reviews__text">
                        <p></p>
                        <div class="reviews__name"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer__in in">
                <div class="footer__form">
                    <div id="form2" class="form_block">
                        <span class="sp white">Hurry up to order with discount <span class="adfh-discount"></span>%!</span>
                        <span class="sp white">Quantity is limited!</span>
                        <span class="sp white free_del">Free Delivery!</span>
                        <span class="sp white old-price">Old price: <span class="adfh-old-price"></span> <span class="adfh-currency"></span></span>
                        <span class="sp new-price">New Price: <span class="adfh-new-price"></span> <span class="adfh-currency"></span></span>
                        <span class="sp white">Time left to buy:</span>
                        <div class="timer">
                            <div id="countdown1"></div>
                        </div>
                        <div id="form-wrapper2" class="form form-wrapper">
                            <form class="form orderformcdn" action="" method="GET">
                            <input class="form-name name fio" name="name" placeholder="">
                            <input class="form-phone phone tel" name="phone" placeholder="" required="" type="tel">
                            <textarea class="address form-text" name="address" id="" rows="3" placeholder=""></textarea>

                            <input type="hidden" name="_csrf-tds" value="">
                            <input type="hidden" name="referrer" value="">
                            <input type="hidden" name="view_time" value="">
                            <input type="hidden" class="adfsh-ck" name="cookie" value="">
                            <input type="hidden" class="orderViewHash" name="view_hash" value="">
                            <input type="hidden" name="sid" value="">
                            <input type="hidden" name="offer_hash" value="">

                            <button name="button" class="form-btn" type="submit">ORDER NOW</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
     <!-- END content -->

    <!-- END scripts -->
       <script type="text/javascript" src="//tds.advertfish.com/form-handler.js"></script>
<script type="text/javascript">                        
window.onload = function(){ initLanding(73);}                          
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter40324475 = new Ya.Metrika({
                    id:40324475,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/40324475" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->    
  </body>
</html>

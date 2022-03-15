<html class="page" lang="ru">

<head>
    <title>{{title}}</title>
</head>

<body class="page__body">
    <wb-module wb="module=yonger&mode=render&view=header" />
    <div id="viewport-scroll" class="main-wrapper">
      <div class="viewport">
        <div id="scroll-container" class="scroll-container">
            <main class="page__main">
              <section>
                  <wb-module wb="module=yonger&mode=render&view=block-vacancy" />
              </section>

              <section>
                  <wb-module wb="module=yonger&mode=render&view=form-vacancy" />
              </section>    
        
            </main>

            <wb-module wb="module=yonger&mode=render&view=footer" />
        </div>
      </div>
    </div>
    <script src="/assets/scripts/libs/smooth-scroll.js"></script>
    <script>
        /* viewport width */
        function viewport() {
            var e = window,
                a = 'inner';
            if (!('innerWidth' in window)) {
                a = 'client';
                e = document.documentElement || document.body;
            }
            return {
                width: e[a + 'Width'],
                height: e[a + 'Height']
            }
        };
        /* viewport width */
        
        var scroller
        var handler = function () {

            var height_footer = $('footer').height();
            var height_header = $('header').height();
            // $('.content').css({ 'padding-bottom': height_footer + 40, 'padding-top': height_header + 40 });


            var viewport_wid = viewport().width;
            var viewport_height = viewport().height;
            if (viewport_wid <= 1279) {
                staticWidth = 35
            }
            else {
                staticWidth = 195
            }
            if (viewport_wid >= 1024) {
                scroller = new SmoothScroll({
                    target: document.querySelector("#scroll-container"),
                    scrollEase: 0.05,
                });
            }
        }
        $(window).resize(handler);
        handler();
    </script>
  

</body>

</html>
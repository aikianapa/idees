<html class="page" lang="ru">

<head>
    <title>{{title}}</title>
</head>

<body class="page__body">
    <wb-module wb="module=yonger&mode=render&view=header" />
    <main class="page__main">
        <section>
            <wb-module wb="module=yonger&mode=render&view=block-vacancy" />
        </section>

        <section>
            <wb-module wb="module=yonger&mode=render&view=form-vacancy" />
        </section>    

    </main>

    <wb-module wb="module=yonger&mode=render&view=footer" />

    <!-- <div id="viewport-scroll" class="main-wrapper">
        <div class="viewport">
            <div id="scroll-container" class="scroll-container">
                
            </div>
        </div>
    </div> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
    <script>
        $(function(){
        
        var $window = $(window);		//Window object
        
        var scrollTime = 1.2;			//Scroll time
        var scrollDistance = 170;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll
            
        $window.on("mousewheel DOMMouseScroll", function(event){
            
            event.preventDefault();	
                            
            var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
            var scrollTop = $window.scrollTop();
            var finalScroll = scrollTop - parseInt(delta*scrollDistance);
            
            TweenMax.to($window, scrollTime, {
            scrollTo : { y: finalScroll, autoKill:true },
                ease: Power1.easeOut,	//For more easing functions see https://api.greensock.com/js/com/greensock/easing/package-detail.html
                autoKill: true,
                overwrite: 5							
            });
                
        });
        
        });
    </script>
</body>

</html>
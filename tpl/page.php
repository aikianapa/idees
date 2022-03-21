<html class="page" lang="ru">
<head>
    <title>{{header}}</title>
</head>

<body>
    <div class="wrapper">
        <wb-module wb="module=yonger&mode=render&view=header" />
        <wb-module wb="module=yonger&mode=render" />
        <wb-module wb="module=yonger&mode=render&view=footer" />
    </div>
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


        const body = document.querySelector('body')
        const serviceLink = document.createElement('div')
        serviceLink.className = 'service__link'
        serviceLink.innerHTML = 'Подробнее'
        body.append(serviceLink)

        const serviceBlock = document.querySelector('.services-section__list')

        serviceBlock.onmousemove = function (event) {
            serviceLink.style.display = 'block';
            if (event.offsetY > 10) serviceLink.style.top = event.pageY + 20 + 'px';
            if (event.offsetX > 10) serviceLink.style.left = event.pageX + 20 + 'px';
        }
        serviceBlock.onmouseleave = function () {
            serviceLink.style.display = 'none';
        }
    </script>

</body>
</html>
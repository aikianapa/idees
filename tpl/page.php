<html class="page" lang="ru">
<head>
    <title>{{header}}</title>
</head>

<body>
    <div class="main-wrapper">
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
    <script>
        const body = document.querySelector('body')
        const serviceLink = document.createElement('div')
        serviceLink.className = 'service__link'
        serviceLink.innerHTML = 'Подробнее'
        body.append(serviceLink)

        const serviceBlock = document.querySelector('.services-section__list')
        if (serviceBlock) {
            serviceBlock.onmousemove = function (event) {
                serviceLink.style.display = 'block';
                if (event.offsetY > 10) serviceLink.style.top = event.pageY + 20 + 'px';
                if (event.offsetX > 10) serviceLink.style.left = event.pageX + 20 + 'px';
            }
            serviceBlock.onmouseleave = function () {
                serviceLink.style.display = 'none';
            }
        }
    </script>

</body>
</html>
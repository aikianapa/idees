<html class="page" lang="ru">
<head>
    <title>{{title}}</title>
</head>

<body class="page__body">
    <wb-module wb="module=yonger&mode=render&view=header" />
    <wb-module wb="module=yonger&mode=render&view=404" />
    <wb-module wb="module=yonger&mode=render&view=footer" />
</body>
<wb-jq wb-jq="$dom->find('footer.footer')->remove()" />
<wb-jq wb-jq="$dom->find('.menu__container.container')->remove()" />
</html>
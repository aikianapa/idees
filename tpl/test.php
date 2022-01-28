<html>

<body>
    <wb-snippet name="wbapp"></wb-snippet>
    <p id="data">wfqwerqer</p>
</body>
<script type="wbapp">
setTimeout(function(){
wbapp.ractive = Ractive({
  target: '#data',
  template: wbapp.tpl('#tpl').html,
  data: { greeting: 'Hello', name: 'world' }
});
},100)
</script>
<template id="tpl">
    == {{greeting}} {{name}} == 
</template>
</html>
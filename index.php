<html>

<body>


    <script>
        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }
        //alert(getParameterByName('d'));
        if(getParameterByName('d').length>0)
        window.location.href = 'https://filedn.com/lGQxqDqSgANYGgE8J2NgzIV/' + getParameterByName('d');
        //window.open('https://filedn.com/lGQxqDqSgANYGgE8J2NgzIV/' + getParameterByName('d'));
    </script>
</body>

</html>
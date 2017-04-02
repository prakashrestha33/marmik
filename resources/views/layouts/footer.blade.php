<!-- Scripts -->
<script src="{{ asset('js/master/app.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/master/materialize.min.js') }}"></script>
<script src="{{ asset('jquery-2.2.3.min.js') }}"></script>


<script> $(".button-collapse").sideNav();</script>
<script>
    $('.button-collapse').sideNav({
            menuWidth: 300, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        }
    );</script>

<script>
    $(document).ready(function() {
        $('input#input_text, textarea#textarea1').characterCounter();
    });
</script>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
<script>
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
</script>

</body>
</html>























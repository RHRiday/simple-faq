

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>



<script>

    jQuery("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        jQuery(".my_accordian button").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

        });
    });


    var typed = new Typed('.type', {
        strings: ['Have any questions?'],
        typeSpeed: 200,
        loop: true,
    });

</script>
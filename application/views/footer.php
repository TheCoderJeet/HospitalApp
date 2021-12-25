<?php ?>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/popper.min.js">
</script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js">
</script>
<!-- <script>
$(document).ready(function() {

    $(document).on("click", ".delete", function() {
        //alert("Success");
        var $ele = $(this).closest('tr');
        $.ajax({
            url: "<?php // echo base_url("Patient/ajax_delete"); ?>",
            type: "POST",
            cache: false,
            data: {
                type: 2,
                id: $(this).attr("data-id")
            },
            success: function(dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $ele.fadeOut().remove();
                }
            }
        });
        $('.dismiss').trigger('click');
    });

});
</script> -->
</body>

</html>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js" integrity="sha256-1hjUhpc44NwiNg8OwMu2QzJXhD8kcj+sJA3aCQZoUjg=" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>/public/js/datetimepicker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script src="<?php echo base_url();?>/public/js/signature.js"></script>
<script type="text/javascript">
    $('body').on('focus', ".timepicker", function() {
                $(this).datetimepicker({
                    format: "HH : mm",
                    stepping: 30
                });
            });
    $('body').on('focus', ".datepicker", function() {
                $(this).datetimepicker({
                    format: "YYYY / M / D",
                    stepping: 30
                });
            });
    $('body').on('focus', ".datepicker", function() {
                $(this).datetimepicker({
                    format: "YYYY / M / D",
                    stepping: 30
                });
            });
</script>
<script>
	$(document).ready(function(){
    var creative = $("#hours_creative");
    var develop = $("#hours_develop")
    creative.keyup(function(){
        var total = '$'+(parseInt(creative.val()) + parseInt(develop.val())) * 75;
        $("#price").val(total);
    });
    develop.keyup(function(){
        var total = '$'+(parseInt(creative.val()) + parseInt(develop.val())) * 75;
        $("#price").val(total);
    });
});
</script>

</body>


</html>

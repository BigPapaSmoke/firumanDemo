<script type="text/javascript">
    $(document).on('click', '.present', function() {
        $(this).parents('tr').find('.datetime').css('pointer-events', 'none').css('background-color', '#dee2e6')
            .css('color', '#495057');
    });
    $(document).on('click', '.leave', function() {
        $(this).parents('tr').find('.datetime').css('pointer-events', '').css('background-color', 'white').css(
            'color', '#495057');
    });
    $(document).on('click', '.absent', function() {
        $(this).parents('tr').find('.datetime').css('pointer-events', 'none').css('background-color', '#dee2e6')
            .css('color', '#dee2e6');
    });
</script>
<script type="text/javascript">
    $(document).on('click', '.present_all', function() {
        $("input[value=Present]").prop('checked', true);
        $('.datetime').css('ponter-events', 'none').css('background-color', '#dee2e6').css('color', '#495057');
    });
    $(document).on('click', '.leave_all', function() {
        $("input[value=Leave]").prop('checked', true);
        $('.datetime').css('ponter-events', '').css('background-color', 'white').css('color', '#495057');
    });
    $(document).on('click', '.absent_all', function() {
        $("input[value=Absent]").prop('checked', true);
        $('.datetime').css('ponter-events', 'none').css('background-color', '#dee2e6').css('color', '#dee2e6');
    });
</script>

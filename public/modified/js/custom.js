$(document).ready(function() {
    let toggleState = true;
    $('#filter').click(function () {
        if(toggleState){
            $('#filterForm').slideDown();
            toggleState = false;
            $('#filterIcon').removeClass("fa-chevron-down").addClass("fa-chevron-up")
        } else {
            $('#filterForm').slideUp();
            toggleState = true;
            $('#filterIcon').removeClass("fa-chevron-up").addClass("fa-chevron-down")
        }
    });

    $('#filterReset').click(function () {
        $('#filterForm input').prop('checked', false);
        return false;
    });
});
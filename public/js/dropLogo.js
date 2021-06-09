$(document).ready(function() {
    $('#myselection').on('change', function() {
        var demovalue = $(this).val();
        $("div.myDiv").hide();
        $("#show" + demovalue).show();
    });
});

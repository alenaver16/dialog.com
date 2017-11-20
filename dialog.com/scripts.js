$(document).ready(function() {
    $('form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'application.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function (data) {
                $('#myModal').modal('show');
            }    
        });
    });
});
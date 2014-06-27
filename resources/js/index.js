;
$(document).ready(function() {
    //Search
    $('#search-form').submit(function(e) {
        var val = $('#search-textbox').val();
        if (val) {
            localStorage.symbol = val;
            $.ajax({
                url: '/Site/GetStockData',
                method: 'POST',
                data: {
                    symbol: val
                },
                success: function(response) {
                    $('#content').html(response);
                }
            });
        }
        e.preventDefault();
    });
    
    //Email
    $('#email-button').click(function(e) {
        $('#email').modal('hide');
        $.ajax({
            url: '/Site/SendMail',
            method: 'POST',
            data: {
                name: $('#name-textbox').val(),
                email: $('#email-textbox').val(),
                symbol: localStorage.symbol
            }
        });
        e.preventDefault();
    });
});
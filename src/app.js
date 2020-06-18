window.$ = window.jQuery = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function() {
    var template_cd = Handlebars.compile($('#cd-template').html());
    if ($('#option-template').length) {
        var template_option = Handlebars.compile($('#option-template').html());
        $.ajax({
            url: '../database/dischi.php?author=',
            method: 'GET',
            success:
                function(data) {
                    for (var i = 0; i < data.length; i++) {
                        $('.cds-container').append(template_cd(data[i]));
                        $('#author-select').append(template_option(data[i]));
                    }
                },
            error: function() {
                console.log('error');
            }
        })
    }
    $('#author-select').on('change', function() {
        var value = $(this).val();
        $('.cds-container').html('');
        $.ajax({
            url: '../database/dischi.php?author=' + value,
            method: 'GET',
            success:
                function(data) {
                    for (var i = 0; i < data.length; i++) {
                        $('.cds-container').append(template_cd(data[i]));
                    }
                },
            error: function() {
                console.log('error');
            }
        })
    })
})

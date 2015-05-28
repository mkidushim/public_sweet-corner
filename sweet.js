$(document).ready(function() {
    $('body').on('click', '.contact', function() {
        $.ajax({
            url: 'template_contact.html',
            dataType: 'html',
            cache: false,
            success: function(response) {
                console.log('success:', response)
                $('#main_content').html(response)
            }
        })
    })
    $('body').on('touchstart', '.contact', function() {
        $.ajax({
            url: 'template_contact.html',
            dataType: 'html',
            cache: false,
            success: function(response) {
                console.log('success:', response)
                $('#main_content').html(response)
            }
        })
    });
    $('body').on('click', '.home', function() {
        $.ajax({
            url: 'template_home.html',
            dataType: 'html',
            cache: false,
            success: function(response) {
                console.log('success:', response)
                $('#main_content').html(response)
            }
        })
    })
    $('body').on('touchstart', '.home', function() {
        $.ajax({
            url: 'template_home.html',
            dataType: 'html',
            cache: false,
            success: function(response) {
                console.log('success:', response)
                $('#main_content').html(response)
            }
        })
    });
    $('body').on('click', '.services', function() {
        $.ajax({
            url: 'template_services.html',
            dataType: 'html',
            cache: false,
            success: function(response) {
                console.log('success:', response)
                $('#main_content').html(response)
            }
        })
    })
    $('body').on('touchstart', '.services', function() {
        $.ajax({
            url: 'template_services.html',
            dataType: 'html',
            cache: false,
            success: function(response) {
                console.log('success:', response)
                $('#main_content').html(response)
            }
        })
    });

})

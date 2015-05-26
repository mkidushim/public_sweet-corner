$(document).ready(function(){
    $('body').on('click', '.contact', function() {
        $.ajax({
            url: 'template_test.html',
            dataType: 'html',
            cache: false,
            success: function(response) {
                console.log('success:', response)
                $('#main_content').html(response)
            }
        })
    })
        $('body').on('click', '.home', function() {
        $.ajax({
            url: 'template_test2.html',
            dataType: 'html',
            cache: false,
            success: function(response) {
                console.log('success:', response)
                $('#main_content').html(response)
            }
        })
    })

})


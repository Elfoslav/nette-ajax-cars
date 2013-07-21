$(function(){
    $('body').on('click', 'a.ajax', function(e) {
        e.preventDefault();
        $.post($(this).attr('href'));
    });
});

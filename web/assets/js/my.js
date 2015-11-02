$(document).ready(function () {
    $.each($('#navbar').find('li'), function () {
        $(this).toggleClass('active',
            $(this).find('a').attr('href') == window.location.pathname);
    });

    $(document).on('click', '.remove', function (e) {
        e.preventDefault();
        if (confirm("Удалить запись?")) {
            $.ajax({
                url: $(this).attr('href'),
                success: function (data) {
                    var text = $(data).find("table").html();
                    $('table').html(text);
                }
            });
        }
    })
});
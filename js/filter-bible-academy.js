$(function () {
    $('.filter').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        let valor = $(this).attr('category');
        if (valor == 'all') {
            $('.card').show('1000');
        } else {
            $('.card').not('.' + valor).hide('1000');
            $('.card').filter('.' + valor).show('1000');
        }
    });

    let filterBibleAcademy = $('#filter-bible-academy').offsetLeft;

    window.addEventListener('resize', function(){
        let filterBibleAcademy = $('#filter-bible-academy').offsetLeft;
    });
});
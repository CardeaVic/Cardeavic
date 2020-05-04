// $(document).ready(function($) {
//     $(".clickable-row").click(function() {
//         window.document.location = $(this).data("href");
//     });
// });

$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d',
    autoclose: true,
    defaultViewDate: today
});
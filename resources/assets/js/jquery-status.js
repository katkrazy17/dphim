$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="modal"]').tooltip();
    $('[data-toggle-second="tooltip"]').tooltip();

    $("input[name='status']").on('change', function () {
        if (this.checked) {
            $(".custom-control-label").text("Công khai");
            $(this).val("1");
        } else {
            $(".custom-control-label").text("Tạm ẩn");
            $(this).val("0");
        }
    });
});

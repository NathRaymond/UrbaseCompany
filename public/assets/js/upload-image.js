function readURL(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function (e) {
            $('.image-upload-container').hide();

            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();
            $('.remove-csv').show();

            $('.image-title').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload();
    }
}

function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.remove-csv').hide();
    $('.image-upload-container').show();
}
$('.image-upload-container').bind('dragover', function () {
    $('.image-upload-container').addClass('image-dropping');
});
$('.image-upload-container').bind('dragleave', function () {
    $('.image-upload-container').removeClass('image-dropping');
});
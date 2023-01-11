$(document).ready(function () {
    $('.add').click(function () {
        $('.modal-body').before('<div class="testing px-1 "> <div class="bio-data-input-parent-container mx-0 mb-0 d-flex flex-column"><label for="" class="bio-data-name-label fw-semibold mb-2">Enter Email Address</label> <div class="d-flex bio-data-input-child-container mb-0 px-0 justify-content-between align-items-center"> <div class="talent-add-user-modal-input-container"><input type="email" class="bio-data-name-input work-experience-textarea w-100" required></div><iconify-icon icon="fluent:delete-24-filled" class="remove fs-4 talent-add-user-modal-delete-icon me-2"></iconify-icon></div></div </div>')
    });

    $(document).on('click', '.remove', function () {
        $(this).parentsUntil('.testing').remove();
    });
})
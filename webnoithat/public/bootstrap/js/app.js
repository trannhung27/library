$(document).ready(function() {
    $('.d-menu .icon-dropdow').click(function() {
        $(this).parent('li').children('.sub-menu').slideToggle();
        $(this).toggleClass('fa-chevron-down fa-chevron-right');
    });

    $('.d-menu .menu-icon').click(function() {
        $(this).parent('li').children('.sub-menu').slideToggle();
        $(this).toggleClass('fa-chevron-down fa-chevron-right');
    });
});

function showPreview(event) {
    if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-1-preview");
        preview.src = src;
        preview.style.display = "block";
    }
}
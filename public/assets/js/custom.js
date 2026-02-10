// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}
getYear();

// nav menu 
function openNav() {
    document.getElementById("myNav").classList.toggle("menu_width")
    document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
}

$('#mailForm2').submit(function(e) {
    e.preventDefault();
    var formData = $(this).serialize();

    $.ajax({
        url: yourRoute,
        type: 'POST',
        data: formData,
        success: function(response) {
            console.log(response);
        }
    });
});


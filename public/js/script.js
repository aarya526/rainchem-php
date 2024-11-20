$(document).ready(function () {
    $("#sidebar-open").click(function () {
        console.log('adding backdrop...');
        $(".backdrop").toggleClass("close open");
        $('.navbar-sidebar-menu').addClass('navbar-sidebar-menu-open');
    });

    $('#sidebar-close').click(function () {

        console.log('closing sidebar...');
        $('.backdrop').toggleClass('close open');
        $('.navbar-sidebar-menu').removeClass('navbar-sidebar-menu-open');
    });


});


$(document).ready(function () {
    // Listen for changes in the select dropdown
    $('.cart-quantity').on('change', function () {
        var itemId = $(this).data('item-id'); // Get the item ID
        var selectedQuantity = $(this).val(); // Get the selected quantity

        // Show the update button for the corresponding item
        $('.update-button[data-item-id="' + itemId + '"]').show();
    });

    // Optional: Hide the button again when clicked to update
    $('.update-button').on('click', function () {
        var itemId = $(this).data('item-id'); // Get the item ID

        // Perform your update action here, e.g., an AJAX call to update the cart item

        // Hide the button again after updating
        $(this).hide();
    });
});

let skip = 4; // Initial offset

document.getElementById('load-more-categories').addEventListener('click', function () {


    fetch('/categories/load-more', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ skip: skip })
    })
        .then(response => response.json())
        .then(data => {
            skip += 8; // Increase the skip count
            var result = "";
            data.forEach(category => {
                result += "<div class='col-3'>";
                result += "<div class='business-categories-card'>";
                result += "<img src='/img/image 5.png' alt=''/>";
                result += "<div class='business-categories-details'>";
                result += "<h4>" + category.categoryName + "</h4>";
                result += "<a href='/category/'" + category.categoryName + "/" + category.category_id + "'>Read More <i class='fa-solid fa-right-long'></i></a>";
                result += "</div>";
                result += "</div>";
                result += "</div>";
            });
            $('#category-div-paginate').append(result);
            // Hide button if there are no more categories
            if (data.length < 6) {
                document.getElementById('load-more').style.display = 'none';
            }
        });

});
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
                result += "<img src='/storage/" + category.categoryThumbnailImageUrl + "' alt=''/>";
                result += "<div class='business-categories-details'>";
                result += "<h4>" + category.categoryName + "</h4>";
                result += "<a href='/category/" + category.categoryName + "/" + category.category_id + "'>Read More <i class='fa-solid fa-right-long'></i></a>";
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

$(document).ready(function () {
    // Function to animate the counter
    function countUp($element) {
        var target = $element.data('target');
        var current = 0;
        var speed = 200; // The speed at which the numbers count up

        var increment = target / speed;

        function updateCount() {
            current += increment;
            if (current < target) {
                $element.text(Math.floor(current));
                requestAnimationFrame(updateCount);
            } else {
                $element.text(target); // Set the final number to ensure it matches exactly
            }
        }

        updateCount();
    }

    // Check if counter is in view
    function checkInView() {
        $('.counter').each(function () {
            var $this = $(this);
            var offsetTop = $this.offset().top;
            var windowHeight = $(window).height();
            var scrollTop = $(window).scrollTop();

            if (offsetTop < (scrollTop + windowHeight) && !$this.hasClass('counted')) {
                // Animate if in view and not already counted
                countUp($this);
                $this.addClass('counted');
            }
        });
    }

    // Trigger on scroll and on page load
    $(window).on('scroll', checkInView);
    checkInView(); // Also check on page load
});


//Contract Manufacturing Form Submission AJAX Post

$(document).ready(function () {

    // $('#contactSubmitForm').on('submit', function (e) {

    //     e.preventDefault(); // Prevent default form submission

    //     $.ajax({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         url: '/contactUsFormSubmit', // Replace with your route
    //         type: 'POST',
    //         data: $(this).serialize(), // Serialize form data
    //         success: function (response) {
    //             // $('#response').html('<p style="color:green;">' + response.message + '</p>');
    //             $('.career-form-section .form-message').addClass('form-success');
    //             $('.career-form-section .form-message').css({ 'display': 'block' });
    //             $('#contactSubmitForm')[0].reset();
    //         },
    //         error: function (xhr) {
    //             // Handle errors
    //             const errors = xhr.responseJSON.errors;
    //             let errorHtml = '<ul style="color:red;">';
    //             for (const key in errors) {
    //                 errorHtml += '<li>' + errors[key][0] + '</li>';
    //             }
    //             errorHtml += '</ul>';
    //             console.log(errorHtml);
    //             $('.career-form-section .form-message').addClass('form-fail');
    //             $('.career-form-section .form-message').html('Error! Try Again Later.');
    //         }
    //     });
    // });

<<<<<<< HEAD
=======

>>>>>>> a0cdf8c882511000fac8e861652df1ac7876b66b
    $('#contractForm').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        $.ajax({
            url: '/contractManufacturingForm', // Replace with your route
            type: 'POST',
            data: $(this).serialize(), // Serialize form data
            success: function (response) {
                // $('#response').html('<p style="color:green;">' + response.message + '</p>');
                $('.form-section-1 .form-message').addClass('form-success');
                $('.form-section-1 .form-message').css({ 'display': 'block' });
                $('#contractForm')[0].reset();
            },
            error: function (xhr) {
                // Handle errors
                const errors = xhr.responseJSON.errors;
                let errorHtml = '<ul style="color:red;">';
                for (const key in errors) {
                    errorHtml += '<li>' + errors[key][0] + '</li>';
                }
                errorHtml += '</ul>';
                console.log(errorHtml);
                $('.form-section-1 .form-message').addClass('form-fail');
                $('.form-section-1 .form-message').html('Error! Try Again Later.');
            }
        });
    });


});
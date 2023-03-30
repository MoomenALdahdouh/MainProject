<script>
    let form = document.querySelector('#form'),
        submit_button = document.querySelector('#submit_button'),
        errors_el = $('.errors'),
        validator_el = $('.validator');
    $(document).ready(function () {
        submit();
    });

    function submit() {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            errors_el.addClass("d-none");
            validator_el.removeClass("is-invalid is-valid");
            let url = e.target.action,
                type = form.method,
                data = $(this).serializeArray();
            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function (response) {
                    redirect();
                },
                error: function (response) {
                    response = JSON.parse(response.responseText);
                    failed_submit();
                    print_errors(response.errors);
                }
            })
        });
    }

    function success_submit() {
        Swal.fire({
            text: "You have successfully logged in!",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        }).then(function (result) {
            if (result.isConfirmed) {
                //form.querySelector('[name="email"]').value = "";
                //form.querySelector('[name="password"]').value = "";
                form.reset();

                redirect();
            }
        });
    }

    function failed_submit() {
        Swal.fire({
            text: "Sorry, looks like there are some errors detected, please try again.",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
    }

    function print_errors(errors) {
        let i = 0;
        validator_el.addClass("is-valid");
        $.each(errors, function (index, val) {
            if (i == 0) {
                $("#" + index).focus();
                i++;
            }
            $("#" + index + "_error").html(val);
            $("#" + index + "_error").removeClass("d-none");
            $("#" + index).addClass("is-invalid");
        });
    }

    function redirect() {
        var redirectUrl = form.getAttribute('data-kt-redirect-url');
        if (redirectUrl) {
            location.href = redirectUrl;
        }
    }

</script>

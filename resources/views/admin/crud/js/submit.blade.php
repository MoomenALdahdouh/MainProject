<script>
    let form = document.querySelector('#form'),
        submit_button = document.querySelector('#submit_button'),
        errors_el = $('.errors'),
        validator_el = $('.validator'),
        not_validator_el = $('.not_validator');
    $(document).ready(function () {
        submit();
    });

    function submit() {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            errors_el.html("");
            validator_el.removeClass("is-invalid is-valid");
            let url = e.target.action,
                type = form.method,
                data_type = form.getAttribute('data-type'),
                data = $(this).serializeArray();
            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function (response) {
                    success_submit(response.success,data_type);
                },
                error: function (response) {
                    response = JSON.parse(response.responseText);
                    failed_submit();
                    print_errors(response.errors);
                }
            })
        });
    }

    function success_submit(data,data_type) {
        Swal.fire({
            text: "You have successfully submit form!",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        }).then(function (result) {
            if (result.isConfirmed) {
                form.reset();
                switch (data_type){
                    case "render":
                        $('#render_list').html(data);
                        break;
                }
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
        not_validator_el.removeClass("is-valid");
        $.each(errors, function (index, val) {
            if (i == 0) {
                $("#" + index).focus();
                i++;
            }
            $("#" + index + "_error").html(val);
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

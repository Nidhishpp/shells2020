<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Shells is an inter-collegiate fest hosted by 
                Kristu Jayanti College, Dept. of Computer Science [PG]">
    <meta name="author" content="Kristu Jayanti College, Dept. of Computer Science [PG]">
    <meta name="keywords" content="shells, shells2020, kjc, kjc shells, Kristu Jayanti College Shells 2020">
    <title>Shells - Inter-Collegiate Fest</title>
    <?php include('includes/head.php'); ?>
</head>

<body>
    <?php include('includes/header.php'); ?>
    <main>
        <?php include('includes/slider.php'); ?>

        <?php include('includes/about.php'); ?>

        <?php include('includes/team.php'); ?>

        <?php include('includes/timer.php'); ?>

        <?php include('includes/contact-form.php'); ?>

    </main>

    <?php include('includes/footer.php'); ?>
    <?php include('includes/script.php'); ?>
    <script>
        $('#contact-form').on('submit', function (e) {
            e.preventDefault();
            Swal.fire({
                html: 'Loading.',
                timerProgressBar: true,
                showConfirmButton: false,
                allowOutsideClick: false,
                allowEnterKey: false
            })
            $.ajax({
                type: "POST",
                url: "contact-db.php",
                data: $(this).serialize(),
                success: function (response) {
                    // console.log(response);
                    Swal.close();
                    if (response == 0) {
                        $('#contact-form').trigger("reset");
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Error occured! Please contact Shells Team!!!'
                        })
                    } else if (response == 1) {
                        $('#contact-form').trigger("reset");
                        Swal.fire({
                            icon: 'success',
                            title: 'Well Done',
                            text: 'We will get back to you soon!'
                        })
                    } else if (response == 3) {
                        $('#contact-form').trigger("reset");
                        Swal.fire({
                            icon: 'info',
                            title: 'Sorry..',
                            text: 'The email you have provided is not valid!'
                        })
                    } else {
                        $('#contact-form').trigger("reset");
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong! Please contact Shells Team!!!'
                        })
                    }
                }
            });
        })
    </script>
</body>

</html>
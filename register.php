<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Shells is an inter-collegiate fest hosted by 
                Kristu Jayanti College, Dept. of Computer Science [PG]">
    <meta name="author" content="Kristu Jayanti College, Dept. of Computer Science [PG]">
    <title>Register | Shells - Inter-Collegiate Fest</title>
    <?php include('includes/head.php'); ?>
    <script type="text/javascript" defer>
        function onLoad() {
            document.getElementById("part-count").innerText = 1;
            document.getElementById("partcount").value = 1;
        }

        function showNext(part) {
            document.getElementById("add-p" + part).style.visibility = "hidden";
            document.getElementById("add-p" + part).style.display = "none";
            document.getElementById("part-" + part).style.visibility = "visible";
            document.getElementById("part-" + part).style.display = "block";
            return true;
        }

        function blockQuotes(e) {
            var k;
            document.all ? k = e.keyCode : k = e.which;
            return ((k != 34 && k != 96 && k != 39));
        }
    </script>
</head>


<body onload="onLoad()">
    <?php include('includes/header.php'); ?>
    <main>
        <section class="section bg-secondary pb-lg-xl pt-lg-xl pt-6" id="events">
            <div class="container">
                <div class="row justify-content-center text-center mb-md">
                    <div class="col-lg-8">
                        <h2 class="display-3">Register <strong>Now</strong></h2>
                    </div>
                </div>
            </div>
            <div class="container pt-lg-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-white pb-5">
                                <form id="registration" role="form" name="register" method="post">
                                    <div class="form-group focused">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="College Name" autofocus type="text"
                                                required name="college-name" onkeypress="return blockQuotes(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Contact Email" type="email"
                                                required name="contact-email" onkeypress="return blockQuotes(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-mobile-button"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Contact Phone" type="tel" required
                                                name="contact-phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                                                oninvalid="this.setCustomValidity('Enter valid format eg. 9876543210')"
                                                oninput="this.setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 1 *" type="text"
                                                required name="participant-1" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="return showNext(2)" class="btn btn-neutral btn-icon mr-4"
                                            id="add-p2">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-2">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 2" type="text"
                                                name="participant-2" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(3)" class="btn btn-neutral btn-icon mr-4" id="add-p3">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-3">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 3" type="text"
                                                name="participant-3" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(4)" class="btn btn-neutral btn-icon mr-4" id="add-p4">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-4">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 4" type="text"
                                                name="participant-4" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(5)" class="btn btn-neutral btn-icon mr-4" id="add-p5">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-5">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 5" type="text"
                                                name="participant-5" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(6)" class="btn btn-neutral btn-icon mr-4" id="add-p6">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-6">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 6" type="text"
                                                name="participant-6" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(7)" class="btn btn-neutral btn-icon mr-4" id="add-p7">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-7">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 7" type="text"
                                                name="participant-7" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(8)" class="btn btn-neutral btn-icon mr-4" id="add-p8">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-8">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 8" type="text"
                                                name="participant-8" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(9)" class="btn btn-neutral btn-icon mr-4" id="add-p9">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-9">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 9" type="text"
                                                name="participant-9" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(10)" class="btn btn-neutral btn-icon mr-4" id="add-p10">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-10">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 10" type="text"
                                                name="participant-10" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(11)" class="btn btn-neutral btn-icon mr-4" id="add-p11">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-11">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 11" type="text"
                                                name="participant-11" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(12)" class="btn btn-neutral btn-icon mr-4" id="add-p12">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-12">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 12" type="text"
                                                name="participant-12" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(13)" class="btn btn-neutral btn-icon mr-4" id="add-p13">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-13">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 13" type="text"
                                                name="participant-13" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(14)" class="btn btn-neutral btn-icon mr-4" id="add-p14">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-14">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 14" type="text"
                                                name="participant-14" onkeypress="return blockQuotes(event)">
                                        </div>
                                        <a onclick="showNext(15)" class="btn btn-neutral btn-icon mr-4" id="add-p15">
                                            <span class="btn-inner--text"><strong>+</strong> &nbsp;Add
                                                Participant</span>
                                        </a>
                                    </div>
                                    <div class="form-group" style="visibility: hidden; display: none" id="part-15">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control part" placeholder="Participant 15" type="text"
                                                name="participant-15" onkeypress="return blockQuotes(event)">
                                        </div>
                                    </div>

                                    <input type="text" style="visibility:hidden; display:none" name="participants-count"
                                        id="partcount" value="1" />
                                    <div class="text-muted text-center">
                                        <small> Participants: <span id="part-count">1</span></small>
                                    </div>
                                    <div class="text-muted text-center">
                                        <small> *1 Participant compulsary for coding.</small>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-primary mt-4" value="Register"
                                            name="register-button" style="margin-top: 10px !important">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('includes/footer.php'); ?>
    <?php include('includes/script.php'); ?>

    <script>

        $(document).ready(function () {

            $(".part").on('keyup', function () {
                var count = 0;
                $(".part").each(function (i, val) {
                    if (!$(this).val() == null || !$(this).val() == '') {
                        count++;
                    }
                });
                document.getElementById("part-count").innerText = count;
                document.getElementById("partcount").value = count;
            });

            $('#registration').on('submit', function (e) {
                e.preventDefault();
                Swal.fire({
                    html: 'Loading.',
                    timerProgressBar: true,
                    showConfirmButton:false,
                    allowOutsideClick:false,
                    allowEnterKey:false
                })
                $.ajax({
                    type: "POST",
                    url: "registration-db.php",
                    data: $(this).serialize(),
                    success: function (response) {
                        // console.log(response);
                        Swal.close();
                        if (response == 0) {
                            $('#registration').trigger("reset");
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Error occured! Please contact Shells Team!!!'
                            })
                        } else if (response == 1) {
                            $('#registration').trigger("reset");
                            Swal.fire({
                                icon: 'success',
                                title: 'Well Done',
                                text: 'You are now part of Shells 2020!'
                            })
                        } else if (response == 2) {
                            $('#registration').trigger("reset");
                            Swal.fire({
                                icon: 'warning',
                                title: 'Sorry..',
                                text: 'The number or email you have given is already registered!'
                            })
                        } else if (response == 3) {
                            $('#registration').trigger("reset");
                            Swal.fire({
                                icon: 'info',
                                title: 'Sorry..',
                                text: 'The email you have provided is not valid!'
                            })
                        } else {
                            $('#registration').trigger("reset");
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong! Please contact Shells Team!!!'
                            })
                        }
                    }
                });
            })

        });
    </script>
</body>

</html>
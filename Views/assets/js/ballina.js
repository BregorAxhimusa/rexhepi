$(document).ready(function () {

    $(".newPicture").change(function () {

        var image = this.files[0];

        if (image['type'] != 'image/jpeg' && image['type'] != 'image/png') {

            $(".newPicture").val('');
            swal({
                type: 'error',
                title: 'Wrror while opening the image',
                text: 'The image should be PNG or JPEG',
                confirmButtonText: 'Close',
            });

        } else if (image['size'] > 2000000) {

            $(".newPicture").val('');
            swal({
                type: 'error',
                title: 'Wrror while opening the image',
                text: 'The image cant be more than 2MB',
                confirmButtonText: 'Close',
            });

        } else {

            var imageData = new FileReader;
            imageData.readAsDataURL(image);

            $(imageData).on("load", function (event) {

                var imageRoute = event.target.result;
                $(".preview").attr("src", imageRoute);
            })
        }

    })

    $(".btnEditBallina").click(function () {

        var bid = $(this).attr("bid");

        var data = new FormData();
        data.append("bid", bid);

        $.ajax({

            url: "Ajax/ballina.ajax.php",
            method: "POST",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (response) {

                $("#id").val(response['id']);
                $("#editDescription1").val(response['pershkrimi1']);
                $("#editDescription2").val(response['pershkrimi2']);
            }

        });
    })

    //Check if photo exist in the database

    $("#img").change(function (e) {

        $(".alert").remove();
        var photo = e.target.files[0].name;

        var data = new FormData();
        data.append("photo", photo);

        $.ajax({
            url: "Ajax/ballina.ajax.php",
            method: "POST",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (answer) {

                console.log("answer", answer);

                if (answer) {
                    $("#img").parent().after(swal({

                        title: "Kjo fotografi ekziston,provoni nje tjeter.",
                        icon: "warning",
                        buttons: {
                            cancel: false,
                            confirm: true,

                        }
                    }));

                    $(".preview").attr("src", "");
                    $("#img").val("");
                }

            }

        })

    })

    $(".btnEditGallery").click(function () {

        var gid = $(this).attr("gid");

        var data = new FormData();
        data.append("gid", gid);

        $.ajax({

            url: "Ajax/ballina.ajax.php",
            method: "POST",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (response) {

                $("#gid").val(response['id']);
                $("#currentPicture1").val(response['foto']);

                if (response['photo'] != "") {

                    $(".preview").attr("src", "Views/assets/images/gallery/" + response['foto']);

                }
            }

        });
    })

    //delete user

    $(".btnDeleteBallina").click(function () {

        var bid = $(this).attr("bid");
        var foto = $(this).attr("currentPicture");

        swal({

            title: "Are you sure you want to delete this?",
            text: "If not,you can cancel the action",
            icon: "warning",
            buttons: {
                cancel: true,
                confirm: true,

            }
        }).then((result) => {

            if (result) {
                window.location = "index.php?route=ballina&bid=" + bid + "&foto=" + foto;
            }

        })
    })

    $(".btnDeleteGallery").click(function () {

        var gid = $(this).attr("gid");
        var gfoto = $(this).attr("currentPicture");

        swal({

            title: "Are you sure you want to delete this photo?",
            text: "If not,you can cancel the action",
            icon: "warning",
            buttons: {
                cancel: true,
                confirm: true,

            }
        }).then((result) => {

            if (result) {
                window.location = "index.php?route=ballina&gid=" + gid + "&foto=" + gfoto;
            }

        })
    })

});

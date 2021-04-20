$(document).ready(function () {

    $(".editPicture").change(function () {

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

    //Check if photo exist in the database

    $("#editPicture").change(function (e) {

        $(".alert").remove();
        var photo = e.target.files[0].name;

        var data = new FormData();
        data.append("photo", photo);

        $.ajax({
            url: "Ajax/profile.ajax.php",
            method: "POST",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (answer) {

                console.log("answer", answer);

                if (answer) {
                    $("#editPicture").parent().after(swal({

                        title: "Kjo fotografi ekziston,provoni nje tjeter.",
                        icon: "warning",
                        buttons: {
                            cancel: false,
                            confirm: true,

                        }
                    }));

                    $(".preview").attr("src", "");
                    $("#editPicture").val("");
                }

            }

        })

    })

});

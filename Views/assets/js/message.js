 $(document).ready(function () {

     $(".btnDeleteMessage").click(function () {

         var messageId = $(this).attr("messageId");

         swal({

             title: "A jeni te sigurte qe deshironi ta fshini kete mesazh?",
             text: "Nese jo,mund ta ndalni kete procedure",
             icon: "warning",
             buttons: {
                 cancel: true,
                 confirm: true,

             }
         }).then((result) => {

             if (result) {
                 window.location = "index.php?route=mesazhet&messageId=" + messageId;
             }

         })
     })

 });

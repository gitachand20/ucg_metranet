(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation-data-diri');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    console.log("gagal data diri")
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
                // Here you are going to add your ajax call after checking if the form validation is valid
                if (form.checkValidity() === true) {
                    console.log("sukses data diri")
                    event.preventDefault();
                    // To reset the appearance of the form (for instance, in the case of dynamic form submissions using AJAX), remove the .was-validated class from the <form> again after submission. (boostrap doc)
                    form.classList.remove("was-validated");
                    // $.ajax({
                    //     url: "http://127.0.0.1:8000/api/input_data_sales_officer",
                    //     type: "POST",
                    //     dataType: "json",
                    //     data: $(this).serialize(),
                    //     success: function (data) {
                    //         console.log("SUCCESS : ", data);
                    //     }
                    // });
                    $("#simpan_data_diri").modal({backdrop: "static", keyboard: true, show: true});
                    $('.modal-backdrop.in').css('opacity', '0.5');
                }
            }, false);
        });
    }, false);
})();


// $(document).ready(function () {

    // $("#simpan").click(function (event) {

    //     //stop submit the form, we will post it manually.
    //     event.preventDefault();

    //     // Get form
    //     var form_input = $('#form_input_data_diri')[0];

    //     // Create an FormData object 
    //     var data = new FormData(form_input);

    //     // If you want to add an extra field for the FormData
    //     // data.append("CustomField", "This is some extra data, testing");

    //     // disabled the submit button
    //     $("#simpan").prop("disabled", true);

    //     $.ajax({
    //         type: "POST",
    //         enctype: 'multipart/form-data',
    //         url: "http://127.0.0.1:8000/api/input_data_sales_officer",
    //         data: data,
    //         processData: false,
    //         contentType: false,
    //         cache: false,
    //         success: function (data) {

    //             // $("#result").text(data);
    //             console.log("SUCCESS : ", data);
    //             // $("#btnSubmit").prop("disabled", false);

    //         },
    //         error: function (e) {

    //             // $("#result").text(e.responseText);
    //             // console.log("ERROR : ", e);
    //             // $("#btnSubmit").prop("disabled", false);

    //         }
    //     });

    // });

// });
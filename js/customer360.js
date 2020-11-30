let countries = [""];

$(document).on('change', '.select', function () {
    var cif_secondary = $("#cif_secondary").val();
    var year = $("#year").val();
    var month = $("#filter_month").val();
    var period = $("#filter_period").val();
    $.ajax({
        type: "GET",
        url: "api/transaction_status_by_rekening/" + cif_secondary + "/" + year + "/" + month + "/" + period,
        success: function (result2) {
            $('#trans_stats_by_rek').html('');
            for (var i = 0; i < result2.length; i++) {
                $('#trans_stats_by_rek').append(
                    "<tr>" +
                    "<td><b>" + result2[i].rekening + "</b></td>" +
                    "<td></td>" +
                    "<td>" + result2[i].transaksi_seg + "</td>" +
                    "</tr>"
                );
            }
        },
        error: () => {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: 'Data Transaction Status Not Found'
            })
        }
    });

    $.ajax({
        type: "GET",
        url: "api/residual/" + cif_secondary + "/" + year + "/" + month + "/" + period,
        success: function (result) {

            $('#segmentation').html('');
            $('#profiles_seg').html('');
            $('#digital_maturity').html('');
            $('#cif_by_channel_behavior').html('');
            $('#rekening_by_channel_behavior').html('');
            $('#freq_atm').html('');
            $('#freq_mobile').html('');
            $('#freq_teller').html('');
            $('#freq_trx_samebank').html('');
            $('#freq_trx_interbank').html('');
            $('#month').html('');
            $('#period').html('');
            $('#freq_credit').html('');
            $('#freq_debit').html('');
            $('#month_financial_usage_amount').html('');
            $('#period_financial_usage_amount').html('');
            $('#total_amount_debit').html('');
            $('#total_amount_credit').html('');

            for (var i = 0; i < result.length; i++) {
                $('#segmentation').append(result[i].segmentation);
                $('#profiles_seg').append(result[i].profiles_seg);
                $('#digital_maturity').append(result[i].digital_maturity);
                $('#cif_by_channel_behavior').append(result[i].cif_by_channel_behavior);
                $('#rekening_by_channel_behavior').append(result[i].rekening_by_channel_behavior);
                $('#freq_atm').append(result[i].freq_atm);
                $('#freq_mobile').append(result[i].freq_mobile);
                $('#freq_teller').append(result[i].freq_teller);
                $('#freq_trx_samebank').append(result[i].freq_trx_samebank);
                $('#freq_trx_interbank').append(result[i].freq_trx_interbank);
                $('#month_financial_usage_frequency').append(result[i].month);
                $('#period_financial_usage_frequency').append(result[i].period);
                $('#freq_credit').append(result[i].freq_credit);
                $('#freq_debit').append(result[i].freq_debit);
                $('#month_financial_usage_amount').append(result[i].month_financial_usage_amount);
                $('#period_financial_usage_amount').append(result[i].period_financial_usage_amount);
                $('#total_amount_debit').append(result[i].total_amount_debit);
                $('#total_amount_credit').append(result[i].total_amount_credit);
            }
        },
        error: () => {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: 'Data Residual Not Found'
            })
        }
    });
});

function move_value() {
    var cif = document.getElementById("cif");
    var cif_secondary = document.getElementById("cif_secondary");

    cif_secondary.value = cif.value;
}

function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function (e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false; }
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function (e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function (e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
            }
        }
    });
    function addActive(x) {
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }
    function closeAllLists(elmnt) {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
}

/*An array containing all the country names in the world:*/
$.ajax({
    type: "GET",
    url: "http://172.17.62.87:8000/api/get_data_autocomplete",
    success: function (result3) {
        result3.forEach(function (d) {
            countries.push(d.cif);
        });
    },
});

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("cif"), countries);
// PENCARIAN KEPALA REGIONAL
function resetPencarianKRHome() {
  document.getElementById("cabang").value = "";
  document.getElementById("unit").value = "";
  document.getElementById("search_officer").value = "";
  $("#search_by_unit").hide();
  $("#search_by_officer").hide();
  document.getElementById("filter_month").value = "";
  document.getElementById("year").value = "";
  document.getElementById("filter_period").value = "";
  $("#filter_month").attr("disabled", "disabled");
  document.querySelector("#filter_month").classList.remove("border-cus");
  $("#filter_period").attr("disabled", "disabled");
  document.querySelector("#filter_period").classList.remove("border-cus");
  document.getElementById("credit_achievement_rate").textContent = "100%";
  document.getElementById("credit_approval_rate").textContent = "69%";
  document.getElementById("credit_performance_rate").textContent = "99%";
  document.getElementById("total_saving").textContent = "15,000,000";
  document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
  document.getElementById("churn_rate").textContent = "6%";
}

function pilihOfficerKR() {
  if (document.getElementById("search_officer").value === "Officer 1") {
    document.getElementById("credit_achievement_rate").textContent = "99%";
    document.getElementById("credit_approval_rate").textContent = "66%";
    document.getElementById("credit_performance_rate").textContent = "98%";
    document.getElementById("total_saving").textContent = "17,000,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
    document.getElementById("churn_rate").textContent = "5%";

  } else if (document.getElementById("search_officer").value === "Officer 2") {
    document.getElementById("credit_achievement_rate").textContent = "97%";
    document.getElementById("credit_approval_rate").textContent = "68%";
    document.getElementById("credit_performance_rate").textContent = "99%";
    document.getElementById("total_saving").textContent = "13,550,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "5";
    document.getElementById("churn_rate").textContent = "2%";

  } else if (document.getElementById("search_officer").value === "Officer 3") {
    document.getElementById("credit_achievement_rate").textContent = "98%";
    document.getElementById("credit_approval_rate").textContent = "63%";
    document.getElementById("credit_performance_rate").textContent = "97%";
    document.getElementById("total_saving").textContent = "15,750,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "7";
    document.getElementById("churn_rate").textContent = "3%";

  } else if (document.getElementById("search_officer").value === "Officer 4") {
    document.getElementById("credit_achievement_rate").textContent = "96%";
    document.getElementById("credit_approval_rate").textContent = "70%";
    document.getElementById("credit_performance_rate").textContent = "95%";
    document.getElementById("total_saving").textContent = "19,990,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "10";
    document.getElementById("churn_rate").textContent = "7%";

  } else {
    swal({
      icon: 'error',
      title: 'Oops...',
      text: 'Data Officer Tidak Ditemukan'
    })

    document.getElementById("search_officer").value = "";
    document.getElementById("credit_achievement_rate").textContent = "100%";
    document.getElementById("credit_approval_rate").textContent = "69%";
    document.getElementById("credit_performance_rate").textContent = "99%";
    document.getElementById("total_saving").textContent = "15,000,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
    document.getElementById("churn_rate").textContent = "6%";
  }
}

function resetPencarianKRBehavior() {
  document.getElementById("cif_behavior_seg").value = "";
  document.getElementById("cabang").value = "";
  document.getElementById("unit").value = "";
  document.getElementById("search_officer").value = "";
  $("#search_by_unit").hide();
  $("#search_by_officer").hide();
  document.getElementById("filter_month").value = "";
  document.getElementById("year").value = "";
  $("#filter_month").attr("disabled", "disabled");
  document.querySelector("#filter_month").classList.remove("border-cus");
  // $("#recommendation").hide();
  // $("#nrecommendation").hide();
}

function resetPencarianKRCredit() {
  document.getElementById("cabang").value = "";
  document.getElementById("unit").value = "";
  document.getElementById("search_officer").value = "";
  $("#search_by_unit").hide();
  $("#search_by_officer").hide();
  document.getElementById("search_id").value = "";
  document.getElementById("search_by_periode").value = "";
  $("#start_date").hide();
  $("#range_weekly").hide();
  $("#range_monthly").hide();
  $("#end_date").hide();
  $("#txt_garis").hide();
  $("#txt_harian").hide();
  $("#txt_mingguan").hide();
  $("#txt_bulanan").hide();
}

function resetPencarianKRCreditSeg() {
  document.getElementById("cabang_seg").value = "";
  document.getElementById("unit_seg").value = "";
  document.getElementById("search_officer_seg").value = "";
  $("#search_by_unit_seg").hide();
  $("#search_by_officer_seg").hide();
  document.getElementById("search_id_seg").value = "";
  document.getElementById("search_by_periode_seg").value = "";
  $("#start_date_seg").hide();
  $("#range_weekly_seg").hide();
  $("#range_monthly_seg").hide();
  $("#end_date_seg").hide();
  $("#txt_garis_seg").hide();
  $("#txt_harian_seg").hide();
  $("#txt_mingguan_seg").hide();
  $("#txt_bulanan_seg").hide();
}

function resetPencarianCPAKR() {
  document.getElementById("cif_behavior_seg").value = "";
  document.getElementById("cabang").value = "";
  document.getElementById("unit").value = "";
  document.getElementById("search_officer").value = "";
  $("#search_by_unit").hide();
  $("#search_by_officer").hide();
  document.getElementById("filter_month").value = "";
  document.getElementById("year").value = "";
  document.getElementById("filter_period").value = "";
}

function setCif() {
  if (document.getElementById("cif_behavior_seg").value) {
    $("#rekening_churn").removeAttr("disabled");
    document.querySelector("#rekening_churn").classList.add("border-cus");
  } else {
    document.getElementById("filter_month").value = "";
    $("#rekening_churn").attr("disabled", "disabled");
    document.querySelector("#rekening_churn").classList.remove("border-cus");
  }
}

function resetPencarianKRChurn() {
  document.getElementById("cif_behavior_seg").value = "";
  document.getElementById("rekening_churn").value = "";
  $("#rekening_churn").attr("disabled", "disabled");
  document.querySelector("#rekening_churn").classList.remove("border-cus");
  document.getElementById("cabang").value = "";
  document.getElementById("unit").value = "";
  document.getElementById("search_officer").value = "";
  $("#search_by_unit").hide();
  $("#search_by_officer").hide();
  document.getElementById("filter_month").value = "";
  document.getElementById("year").value = "";
  $("#filter_month").attr("disabled", "disabled");
  document.querySelector("#filter_month").classList.remove("border-cus");
}



// PENCARIAN KEPALA CABANG
function resetPencarianKCHome() {
  document.getElementById("unit").value = "";
  document.getElementById("search_officer").value = "";
  $("#search_by_officer").hide();
  document.getElementById("filter_month").value = "";
  document.getElementById("year").value = "";
  document.getElementById("filter_period").value = "";
  $("#filter_month").attr("disabled", "disabled");
  document.querySelector("#filter_month").classList.remove("border-cus");
  $("#filter_period").attr("disabled", "disabled");
  document.querySelector("#filter_period").classList.remove("border-cus");
  document.getElementById("credit_achievement_rate").textContent = "100%";
  document.getElementById("credit_approval_rate").textContent = "69%";
  document.getElementById("credit_performance_rate").textContent = "99%";
  document.getElementById("total_saving").textContent = "15,000,000";
  document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
  document.getElementById("churn_rate").textContent = "6%";
}

function pilihOfficerKC() {
  if (document.getElementById("search_officer").value === "Officer 1") {
    document.getElementById("credit_achievement_rate").textContent = "99%";
    document.getElementById("credit_approval_rate").textContent = "66%";
    document.getElementById("credit_performance_rate").textContent = "98%";
    document.getElementById("total_saving").textContent = "17,000,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
    document.getElementById("churn_rate").textContent = "5%";

  } else if (document.getElementById("search_officer").value === "Officer 2") {
    document.getElementById("credit_achievement_rate").textContent = "97%";
    document.getElementById("credit_approval_rate").textContent = "68%";
    document.getElementById("credit_performance_rate").textContent = "99%";
    document.getElementById("total_saving").textContent = "13,550,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "5";
    document.getElementById("churn_rate").textContent = "2%";

  } else if (document.getElementById("search_officer").value === "Officer 3") {
    document.getElementById("credit_achievement_rate").textContent = "98%";
    document.getElementById("credit_approval_rate").textContent = "63%";
    document.getElementById("credit_performance_rate").textContent = "97%";
    document.getElementById("total_saving").textContent = "15,750,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "7";
    document.getElementById("churn_rate").textContent = "3%";

  } else if (document.getElementById("search_officer").value === "Officer 4") {
    document.getElementById("credit_achievement_rate").textContent = "96%";
    document.getElementById("credit_approval_rate").textContent = "70%";
    document.getElementById("credit_performance_rate").textContent = "95%";
    document.getElementById("total_saving").textContent = "19,990,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "10";
    document.getElementById("churn_rate").textContent = "7%";

  } else {
    swal({
      icon: 'error',
      title: 'Oops...',
      text: 'Data Officer Tidak Ditemukan'
    })

    document.getElementById("search_officer").value = "";
    document.getElementById("credit_achievement_rate").textContent = "100%";
    document.getElementById("credit_approval_rate").textContent = "69%";
    document.getElementById("credit_performance_rate").textContent = "99%";
    document.getElementById("total_saving").textContent = "15,000,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
    document.getElementById("churn_rate").textContent = "6%";
  }
}

function pilihUnitKC() {
  if (document.getElementById("unit").value === "Unit 1") {
    document.getElementById("credit_achievement_rate").textContent = "99%";
    document.getElementById("credit_approval_rate").textContent = "66%";
    document.getElementById("credit_performance_rate").textContent = "98%";
    document.getElementById("total_saving").textContent = "17,000,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
    document.getElementById("churn_rate").textContent = "5%";

  } else if (document.getElementById("unit").value === "Unit 2") {
    document.getElementById("credit_achievement_rate").textContent = "97%";
    document.getElementById("credit_approval_rate").textContent = "68%";
    document.getElementById("credit_performance_rate").textContent = "99%";
    document.getElementById("total_saving").textContent = "13,550,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "5";
    document.getElementById("churn_rate").textContent = "2%";

  } else if (document.getElementById("unit").value === "Unit 3") {
    document.getElementById("credit_achievement_rate").textContent = "98%";
    document.getElementById("credit_approval_rate").textContent = "63%";
    document.getElementById("credit_performance_rate").textContent = "97%";
    document.getElementById("total_saving").textContent = "15,750,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "7";
    document.getElementById("churn_rate").textContent = "3%";

  } else if (document.getElementById("unit").value === "Unit 4") {
    document.getElementById("credit_achievement_rate").textContent = "96%";
    document.getElementById("credit_approval_rate").textContent = "70%";
    document.getElementById("credit_performance_rate").textContent = "95%";
    document.getElementById("total_saving").textContent = "19,990,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "10";
    document.getElementById("churn_rate").textContent = "7%";

  } else {
    swal({
      icon: 'error',
      title: 'Oops...',
      text: 'Data Officer Tidak Ditemukan'
    })

    document.getElementById("search_officer").value = "";
    document.getElementById("credit_achievement_rate").textContent = "100%";
    document.getElementById("credit_approval_rate").textContent = "69%";
    document.getElementById("credit_performance_rate").textContent = "99%";
    document.getElementById("total_saving").textContent = "15,000,000";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
    document.getElementById("churn_rate").textContent = "6%";
  }
}

function resetPencarianKCBehavior() {
  document.getElementById("cif_behavior_seg").value = "";
  document.getElementById("unit").value = "";
  document.getElementById("search_officer").value = "";
  $("#search_by_officer").hide();
  document.getElementById("filter_month").value = "";
  document.getElementById("year").value = "";
  $("#filter_month").attr("disabled", "disabled");
  document.querySelector("#filter_month").classList.remove("border-cus");
}

function resetPencarianKCCredit() {
  document.getElementById("unit").value = "";
  document.getElementById("search_officer").value = "";
  $("#search_by_officer").hide();
  document.getElementById("search_id").value = "";
  document.getElementById("search_by_periode").value = "";
  $("#start_date").hide();
  $("#range_weekly").hide();
  $("#range_monthly").hide();
  $("#end_date").hide();
  $("#txt_garis").hide();
  $("#txt_harian").hide();
  $("#txt_mingguan").hide();
  $("#txt_bulanan").hide();
}

function resetPencarianKCCreditSeg() {
  document.getElementById("unit_seg").value = "";
  document.getElementById("search_officer_seg").value = "";
  $("#search_by_officer_seg").hide();
  document.getElementById("search_id_seg").value = "";
  document.getElementById("search_by_periode_seg").value = "";
  $("#start_date_seg").hide();
  $("#range_weekly_seg").hide();
  $("#range_monthly_seg").hide();
  $("#end_date_seg").hide();
  $("#txt_garis_seg").hide();
  $("#txt_harian_seg").hide();
  $("#txt_mingguan_seg").hide();
  $("#txt_bulanan_seg").hide();
}

function resetPencarianCPAKC() {
  document.getElementById("cif_behavior_seg").value = "";
  document.getElementById("unit").value = "";
  document.getElementById("search_officer").value = "";
  $("#search_by_officer").hide();
  document.getElementById("filter_month").value = "";
  document.getElementById("year").value = "";
  document.getElementById("filter_period").value = "";
}



// KEPALA UNIT CREDIT
$(document).on('click', '#reset_home', function () {
  document.getElementById("search_by_periode").value = "";
  document.getElementById("search_officer").value = "";
  $("#start_date").hide();
  $("#range_weekly").hide();
  $("#range_monthly").hide();
  $("#end_date").hide();
  $("#month_period").hide();
  $("#year_period").hide();
  $("#set_period").hide();
  $("#txt_garis").hide();
  $("#txt_harian").hide();
  $("#txt_mingguan").hide();
  $("#txt_bulanan").hide();
  document.getElementById("credit_achievement_rate").textContent = "100%";
  document.getElementById("credit_approval_rate").textContent = "69%";
  document.getElementById("credit_performance_rate").textContent = "99%";
  document.getElementById("pending_application").textContent = "19%";
  document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
})

function resetPencarianKUCHome() {
  document.getElementById("search_by_periode").value = "";
  document.getElementById("search_officer").value = "";
  $("#start_date").hide();
  $("#range_weekly").hide();
  $("#range_monthly").hide();
  $("#end_date").hide();
  $("#grs_ver").hide();
  document.getElementById("credit_achievement_rate").textContent = "100%";
  document.getElementById("credit_approval_rate").textContent = "69%";
  document.getElementById("credit_performance_rate").textContent = "99%";
  document.getElementById("pending_application").textContent = "19%";
  document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
}

function resetPencarianKUCCredit() {
  document.getElementById("search_officer").value = "";
  document.getElementById("search_id").value = "";
  document.getElementById("search_by_periode").value = "";
  $("#start_date").hide();
  $("#range_weekly").hide();
  $("#range_monthly").hide();
  $("#end_date").hide();
  $("#month_period").hide();
  $("#year_period").hide();
  $("#set_period").hide();
  $("#txt_garis").hide();
  $("#txt_harian").hide();
  $("#txt_mingguan").hide();
  $("#txt_bulanan").hide();
  $("#txt_periode").hide();
}

function resetPencarianKUCCreditSeg() {
  document.getElementById("search_officer_seg").value = "";
  document.getElementById("search_id_seg").value = "";
  document.getElementById("search_by_periode_seg").value = "";
  $("#start_date_seg").hide();
  $("#range_weekly_seg").hide();
  $("#range_monthly_seg").hide();
  $("#end_date_seg").hide();
  $("#txt_garis_seg").hide();
  $("#txt_harian_seg").hide();
  $("#txt_mingguan_seg").hide();
  $("#txt_bulanan_seg").hide();
}

function resetPencarianKUCBehavior() {
  document.getElementById("cif_behavior_seg").value = "";
  document.getElementById("search_officer").value = "";
  document.getElementById("filter_month").value = "";
  document.getElementById("year").value = "";
  $("#filter_month").attr("disabled", "disabled");
  document.querySelector("#filter_month").classList.remove("border-cus");
}

function pilihOfficerKUC() {
  if (document.getElementById("search_officer").value === "Officer 1") {
    document.getElementById("credit_achievement_rate").textContent = "99%";
    document.getElementById("credit_approval_rate").textContent = "66%";
    document.getElementById("credit_performance_rate").textContent = "98%";
    document.getElementById("pending_application").textContent = "4%";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";

  } else if (document.getElementById("search_officer").value === "Officer 2") {
    document.getElementById("credit_achievement_rate").textContent = "97%";
    document.getElementById("credit_approval_rate").textContent = "68%";
    document.getElementById("credit_performance_rate").textContent = "99%";
    document.getElementById("pending_application").textContent = "11%";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "5";

  } else if (document.getElementById("search_officer").value === "Officer 3") {
    document.getElementById("credit_achievement_rate").textContent = "98%";
    document.getElementById("credit_approval_rate").textContent = "63%";
    document.getElementById("credit_performance_rate").textContent = "97%";
    document.getElementById("pending_application").textContent = "14%";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "7";

  } else if (document.getElementById("search_officer").value === "Officer 4") {
    document.getElementById("credit_achievement_rate").textContent = "96%";
    document.getElementById("credit_approval_rate").textContent = "70%";
    document.getElementById("credit_performance_rate").textContent = "95%";
    document.getElementById("pending_application").textContent = "18%";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "10";

  } else {
    swal({
      icon: 'error',
      title: 'Oops...',
      text: 'Data Officer Tidak Ditemukan'
    })

    document.getElementById("search_officer").value = "";
    document.getElementById("credit_achievement_rate").textContent = "100%";
    document.getElementById("credit_approval_rate").textContent = "69%";
    document.getElementById("credit_performance_rate").textContent = "99%";
    document.getElementById("pending_application").textContent = "19%";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
  }
}

function resetPencarianCPAKUC() {
  document.getElementById("cif_behavior_seg").value = "";
  document.getElementById("search_officer").value = "";
  document.getElementById("filter_month").value = "";
  document.getElementById("year").value = "";
  document.getElementById("filter_period").value = "";
}



// OFFICER CREDIT
function resetPencarianOCHome() {
  document.getElementById("search_by_periode").value = "";
  $("#start_date").hide();
  $("#range_weekly").hide();
  $("#range_monthly").hide();
  $("#end_date").hide();
  $("#month_period").hide();
  $("#grs_ver").hide();
}

function resetPencarianOCCredit() {
  document.getElementById("search_id").value = "";
  document.getElementById("search_by_periode").value = "";
  $("#start_date").hide();
  $("#range_weekly").hide();
  $("#range_monthly").hide();
  $("#end_date").hide();
  $("#month_period").hide();
  $("#year_period").hide();
  $("#set_period").hide();
  $("#txt_garis").hide();
  $("#txt_harian").hide();
  $("#txt_mingguan").hide();
  $("#txt_bulanan").hide();
  $("#txt_periode").hide();
}



// KEPALA UNIT (BISNIS)
function resetPencarianKUBHome() {
  document.getElementById("search_officer").value = "";
  document.getElementById("search_by_periode").value = "";
  $("#start_date").hide();
  $("#range_weekly").hide();
  $("#range_monthly").hide();
  $("#end_date").hide();
  $("#grs_ver").hide();
  document.getElementById("credit_achievement_rate").textContent = "100%";
  document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
  document.getElementById("pending_application").textContent = "19%";
  document.getElementById("churn_rate").textContent = "6%";
}

function pilihOfficerKUB() {
  if (document.getElementById("search_officer").value === "Officer 1") {
    document.getElementById("credit_achievement_rate").textContent = "99%";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
    document.getElementById("pending_application").textContent = "4%";
    document.getElementById("churn_rate").textContent = "5%";

  } else if (document.getElementById("search_officer").value === "Officer 2") {
    document.getElementById("credit_achievement_rate").textContent = "97%";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "5";
    document.getElementById("pending_application").textContent = "11%";
    document.getElementById("churn_rate").textContent = "2%";

  } else if (document.getElementById("search_officer").value === "Officer 3") {
    document.getElementById("credit_achievement_rate").textContent = "98%";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "7";
    document.getElementById("pending_application").textContent = "14%";
    document.getElementById("churn_rate").textContent = "3%";

  } else if (document.getElementById("search_officer").value === "Officer 4") {
    document.getElementById("credit_achievement_rate").textContent = "96%";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "10";
    document.getElementById("pending_application").textContent = "18%";
    document.getElementById("churn_rate").textContent = "7%";

  } else {
    swal({
      icon: 'error',
      title: 'Oops...',
      text: 'Data Officer Tidak Ditemukan'
    })

    document.getElementById("search_officer").value = "";
    document.getElementById("credit_achievement_rate").textContent = "100%";
    document.getElementById("total_nasabah_pembukaan_rekening").textContent = "9";
    document.getElementById("pending_application").textContent = "19%";
    document.getElementById("churn_rate").textContent = "6%";
  }
}



// OFFICER BISNIS
function resetPencarianOBHome() {
  document.getElementById("search_by_periode").value = "";
  $("#start_date").hide();
  $("#range_weekly").hide();
  $("#range_monthly").hide();
  $("#end_date").hide();
  $("#txt_garis").hide();
  $("#txt_harian").hide();
  $("#txt_mingguan").hide();
  $("#txt_bulanan").hide();
}

function resetPencarianOBBehavior() {
  document.getElementById("cif_behavior_seg").value = "";
  document.getElementById("filter_month").value = "";
  document.getElementById("year").value = "";
  $("#filter_month").attr("disabled", "disabled");
  document.querySelector("#filter_month").classList.remove("border-cus");
}




function pilihPeriode1() {
  $("#txt_garis").show().removeClass("d-none");
  $("#txt_bulanan").show().removeClass("d-none");
  $("#month_period_awal").show().removeClass("d-none");
  $("#month_period_akhir").show().removeClass("d-none");
}

function pilihPeriode() {
  $("#tanggal_awal").datepicker('setDate', null);
  $("#tanggal_akhir").datepicker('setDate', null);

  if (document.getElementById("search_by_periode").value === "Harian") {
    $("#txt_garis").show().removeClass("d-none");
    $("#txt_harian").show().removeClass("d-none");
    $("#start_date").show().removeClass("d-none");
    $("#end_date").show().removeClass("d-none");
    $("#range_weekly").hide();
    $("#range_monthly").hide();
    $("#month_period").hide();
    $("#year_period").hide();
    $("#set_period").hide();
    $("#txt_mingguan").hide();
    $("#txt_bulanan").hide();
    $("#txt_periode").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value = "";
    document.getElementById("tanggal_akhir").value = "";
    document.getElementById("filter_month").value = "";
    document.getElementById("year").value = "";
    document.getElementById("filter_period").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");

  } else if (document.getElementById("search_by_periode").value === "Mingguan") {
    $("#txt_garis").show().removeClass("d-none");
    $("#txt_mingguan").show().removeClass("d-none");
    $("#start_date").show().removeClass("d-none");
    $("#range_weekly").show().removeClass("d-none");
    $("#end_date").show().removeClass("d-none");
    $("#range_monthly").hide();
    $("#month_period").hide();
    $("#year_period").hide();
    $("#set_period").hide();
    $("#txt_harian").hide();
    $("#txt_bulanan").hide();
    $("#txt_periode").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value ="";
    document.getElementById("tanggal_akhir").value = "";
    document.getElementById("filter_month").value = "";
    document.getElementById("year").value = "";
    document.getElementById("filter_period").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");

  } else if (document.getElementById("search_by_periode").value === "Bulanan") {
    $("#txt_garis").show().removeClass("d-none");
    $("#txt_bulanan").show().removeClass("d-none");
    $("#start_date").show().removeClass("d-none");
    $("#range_monthly").show().removeClass("d-none");
    $("#end_date").show().removeClass("d-none");
    $("#range_weekly").hide();
    $("#month_period").hide();
    $("#year_period").hide();
    $("#set_period").hide();
    $("#txt_harian").hide();
    $("#txt_mingguan").hide();
    $("#txt_periode").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value = "";
    document.getElementById("tanggal_akhir").value = "";
    document.getElementById("filter_month").value = "";
    document.getElementById("year").value = "";
    document.getElementById("filter_period").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");

  } else if (document.getElementById("search_by_periode").value === "Periode") {
    $("#txt_garis").show().removeClass("d-none");
    $("#txt_periode").show().removeClass("d-none");
    $("#start_date").hide();
    $("#range_weekly").hide();
    $("#range_monthly").hide();
    $("#end_date").hide();
    $("#month_period").show().removeClass("d-none");
    $("#year_period").show().removeClass("d-none");
    $("#set_period").show().removeClass("d-none");
    $("#txt_harian").hide();
    $("#txt_mingguan").hide();
    $("#txt_bulanan").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value ="";
    document.getElementById("tanggal_akhir").value = "";
    document.getElementById("filter_month").value = "";
    document.getElementById("year").value = "";
    document.getElementById("filter_period").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");

  } else {
    $("#start_date").hide();
    $("#range_weekly").hide();
    $("#range_monthly").hide();
    $("#end_date").hide();
    $("#month_period").hide();
    $("#year_period").hide();
    $("#set_period").hide();
    $("#txt_garis").hide();
    $("#txt_harian").hide();
    $("#txt_mingguan").hide();
    $("#txt_bulanan").hide();
    $("#txt_periode").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value ="";
    document.getElementById("tanggal_akhir").value = "";
    document.getElementById("filter_month").value = "";
    document.getElementById("year").value = "";
    document.getElementById("filter_period").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");
  }
}

function pilihPeriodeTP() {
  $("#tanggal_awal").datepicker('setDate', null);
  $("#tanggal_akhir").datepicker('setDate', null);

  if (document.getElementById("search_by_periode").value === "Harian") {
    $("#txt_garis").show().removeClass("d-none");
    $("#txt_harian").show().removeClass("d-none");
    $("#start_date").show().removeClass("d-none");
    $("#end_date").show().removeClass("d-none");
    $("#range_weekly").hide();
    $("#range_monthly").hide();
    $("#txt_mingguan").hide();
    $("#txt_bulanan").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value = "";
    document.getElementById("tanggal_akhir").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");

  } else if (document.getElementById("search_by_periode").value === "Mingguan") {
    $("#txt_garis").show().removeClass("d-none");
    $("#txt_mingguan").show().removeClass("d-none");
    $("#start_date").show().removeClass("d-none");
    $("#range_weekly").show().removeClass("d-none");
    $("#end_date").show().removeClass("d-none");
    $("#range_monthly").hide();
    $("#txt_harian").hide();
    $("#txt_bulanan").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value ="";
    document.getElementById("tanggal_akhir").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");

  } else if (document.getElementById("search_by_periode").value === "Bulanan") {
    $("#txt_garis").show().removeClass("d-none");
    $("#txt_bulanan").show().removeClass("d-none");
    $("#start_date").show().removeClass("d-none");
    $("#range_monthly").show().removeClass("d-none");
    $("#end_date").show().removeClass("d-none");
    $("#range_weekly").hide();
    $("#txt_harian").hide();
    $("#txt_mingguan").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value = "";
    document.getElementById("tanggal_akhir").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");

  } else {
    $("#start_date").hide();
    $("#range_weekly").hide();
    $("#range_monthly").hide();
    $("#end_date").hide();
    $("#txt_garis").hide();
    $("#txt_harian").hide();
    $("#txt_mingguan").hide();
    $("#txt_bulanan").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value ="";
    document.getElementById("tanggal_akhir").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");
  }
}

function pilihPeriodeTPSeg() {
  $("#tanggal_awal_seg").datepicker('setDate', null);
  $("#tanggal_akhir_seg").datepicker('setDate', null);

  if (document.getElementById("search_by_periode_seg").value === "Harian") {
    $("#txt_garis_seg").show().removeClass("d-none");
    $("#txt_harian_seg").show().removeClass("d-none");
    $("#start_date_seg").show().removeClass("d-none");
    $("#end_date_seg").show().removeClass("d-none");
    $("#range_weekly_seg").hide();
    $("#range_monthly_seg").hide();
    $("#txt_mingguan_seg").hide();
    $("#txt_bulanan_seg").hide();
    document.getElementById("tanggal_awal_seg").value = "";
    document.getElementById("weekly_option_seg").value = "";
    document.getElementById("monthly_option_seg").value = "";
    document.getElementById("tanggal_akhir_seg").value = "";
    $("#tanggal_akhir_seg").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir_seg").classList.remove("border-cus");

  } else if (document.getElementById("search_by_periode_seg").value === "Mingguan") {
    $("#txt_garis_seg").show().removeClass("d-none");
    $("#txt_mingguan_seg").show().removeClass("d-none");
    $("#start_date_seg").show().removeClass("d-none");
    $("#range_weekly_seg").show().removeClass("d-none");
    $("#end_date_seg").show().removeClass("d-none");
    $("#range_monthly_seg").hide();
    $("#txt_harian_seg").hide();
    $("#txt_bulanan_seg").hide();
    document.getElementById("tanggal_awal_seg").value = "";
    document.getElementById("weekly_option_seg").value = "";
    document.getElementById("monthly_option_seg").value ="";
    document.getElementById("tanggal_akhir_seg").value = "";
    $("#tanggal_akhir_seg").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir_seg").classList.remove("border-cus");

  } else if (document.getElementById("search_by_periode_seg").value === "Bulanan") {
    $("#txt_garis_seg").show().removeClass("d-none");
    $("#txt_bulanan_seg").show().removeClass("d-none");
    $("#start_date_seg").show().removeClass("d-none");
    $("#range_monthly_seg").show().removeClass("d-none");
    $("#end_date_seg").show().removeClass("d-none");
    $("#range_weekly_seg").hide();
    $("#txt_harian_seg").hide();
    $("#txt_mingguan_seg").hide();
    document.getElementById("tanggal_awal_seg").value = "";
    document.getElementById("weekly_option_seg").value = "";
    document.getElementById("monthly_option_seg").value = "";
    document.getElementById("tanggal_akhir_seg").value = "";
    $("#tanggal_akhir_seg").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir_seg").classList.remove("border-cus");

  } else {
    $("#start_date_seg").hide();
    $("#range_weekly_seg").hide();
    $("#range_monthly_seg").hide();
    $("#end_date_seg").hide();
    $("#txt_garis_seg").hide();
    $("#txt_harian_seg").hide();
    $("#txt_mingguan_seg").hide();
    $("#txt_bulanan_seg").hide();
    document.getElementById("tanggal_awal_seg").value = "";
    document.getElementById("weekly_option_seg").value = "";
    document.getElementById("monthly_option_seg").value ="";
    document.getElementById("tanggal_akhir_seg").value = "";
    $("#tanggal_akhir_seg").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir_seg").classList.remove("border-cus");
  }
}

function pilihPeriodeHome() {
  $("#tanggal_awal").datepicker('setDate', null);
  $("#tanggal_akhir").datepicker('setDate', null);

  if (document.getElementById("search_by_periode").value === "Harian") {
    $("#grs_ver").show().removeClass("d-none");
    $("#start_date").show().removeClass("d-none");
    $("#end_date").show().removeClass("d-none");
    $("#range_weekly").hide();
    $("#range_monthly").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value = "";
    document.getElementById("tanggal_akhir").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");

  } else if (document.getElementById("search_by_periode").value === "Mingguan") {
    $("#grs_ver").show().removeClass("d-none");
    $("#start_date").show().removeClass("d-none");
    $("#range_weekly").show().removeClass("d-none");
    $("#end_date").show().removeClass("d-none");
    $("#range_monthly").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value ="";
    document.getElementById("tanggal_akhir").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");

  } else if (document.getElementById("search_by_periode").value === "Bulanan") {
    $("#grs_ver").show().removeClass("d-none");
    $("#start_date").show().removeClass("d-none");
    $("#range_monthly").show().removeClass("d-none");
    $("#end_date").show().removeClass("d-none");
    $("#range_weekly").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value = "";
    document.getElementById("tanggal_akhir").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");

  } else {
    $("#start_date").hide();
    $("#range_weekly").hide();
    $("#range_monthly").hide();
    $("#end_date").hide();
    $("#grs_ver").hide();
    document.getElementById("tanggal_awal").value = "";
    document.getElementById("weekly_option").value = "";
    document.getElementById("monthly_option").value ="";
    document.getElementById("tanggal_akhir").value = "";
    $("#tanggal_akhir").attr("disabled", "disabled");
    document.querySelector("#tanggal_akhir").classList.remove("border-cus");
  }
}

function setStartDate() {
  var awal = document.getElementById("tanggal_awal").value;
  var weekly_option = document.getElementById("weekly_option").value;
  var monthly_option = document.getElementById("monthly_option").value;
  var nol = "0";

  if (document.getElementById("search_by_periode").value === "Harian") {
    if (awal) {
      $("#tanggal_akhir").datepicker("setStartDate", awal);
      $("#tanggal_akhir").datepicker("setEndDate", new Date());

      $("#tanggal_akhir").removeAttr("disabled");
      document.querySelector("#tanggal_akhir").classList.add("border-cus");
    } else {
      $("#tanggal_akhir").attr("disabled", "disabled");
      document.querySelector("#tanggal_akhir").classList.remove("border-cus");
    }
  } else if (document.getElementById("search_by_periode").value === "Mingguan") {
    if (awal && weekly_option) {
      weekly_option = weekly_option * 7;

      var set_awal = $("#tanggal_awal").datepicker("getDate");
      set_awal.setDate(set_awal.getDate() + weekly_option);

      if (set_awal.getDate() < 10) {
        var date = nol + set_awal.getDate();
      } else {
        var date = set_awal.getDate();
      }

      if ((set_awal.getMonth() + 1)< 10) {
        var month = nol + (set_awal.getMonth() + 1);
      } else {
        var month = (set_awal.getMonth() + 1);
      }

      set_akhir = month + "/" + date + "/" + set_awal.getFullYear();

      document.getElementById("tanggal_akhir").value = set_akhir;
    } else {
      $("#tanggal_akhir").attr("disabled", "disabled");
      document.querySelector("#tanggal_akhir").classList.remove("border-cus");
    }
  } else if (document.getElementById("search_by_periode").value === "Bulanan") {
    if (awal && monthly_option) {
      // monthly_option = monthly_option * 30;

      var set_awal = $("#tanggal_awal").datepicker("getDate");

      // set_awal.setDate(set_awal.getDate() + monthly_option);
      set_awal.setMonth(set_awal.getMonth() + parseInt(monthly_option));

      if (set_awal.getDate() < 10) {
        var date = nol + set_awal.getDate();
      } else {
        var date = set_awal.getDate();
      }

      // if ((set_awal.getMonth() + 1) < 10) {
      //   var month = nol + (set_awal.getMonth() + 1 + parseInt(monthly_option));
      // } else {
      //   var month = (set_awal.getMonth() + 1 + parseInt(monthly_option));
      // }

      if ((set_awal.getMonth() + 1) < 10) {
        var month = nol + (set_awal.getMonth() + 1);
      } else {
        var month = (set_awal.getMonth() + 1);
      }

      set_akhir = month + "/" + date + "/" + set_awal.getFullYear();

      document.getElementById("tanggal_akhir").value = set_akhir;
    } else {
      $("#tanggal_akhir").attr("disabled", "disabled");
      document.querySelector("#tanggal_akhir").classList.remove("border-cus");
    }
  }
}

function setStartDateSeg() {
  var awal = document.getElementById("tanggal_awal_seg").value;
  var weekly_option = document.getElementById("weekly_option_seg").value;
  var monthly_option = document.getElementById("monthly_option_seg").value;
  var nol = "0";

  if (document.getElementById("search_by_periode_seg").value === "Harian") {
    if (awal) {
      $("#tanggal_akhir_seg").datepicker("setStartDate", awal);
      $("#tanggal_akhir_seg").datepicker("setEndDate", new Date());

      $("#tanggal_akhir_seg").removeAttr("disabled");
      document.querySelector("#tanggal_akhir_seg").classList.add("border-cus");
    } else {
      $("#tanggal_akhir_seg").attr("disabled", "disabled");
      document.querySelector("#tanggal_akhir_seg").classList.remove("border-cus");
    }
  } else if (document.getElementById("search_by_periode_seg").value === "Mingguan") {
    if (awal && weekly_option) {
      weekly_option = weekly_option * 7;

      var set_awal = $("#tanggal_awal_seg").datepicker("getDate");
      set_awal.setDate(set_awal.getDate() + weekly_option);

      if (set_awal.getDate() < 10) {
        var date = nol + set_awal.getDate();
      } else {
        var date = set_awal.getDate();
      }

      if ((set_awal.getMonth() + 1)< 10) {
        var month = nol + (set_awal.getMonth() + 1);
      } else {
        var month = (set_awal.getMonth() + 1);
      }

      set_akhir = month + "/" + date + "/" + set_awal.getFullYear();

      document.getElementById("tanggal_akhir_seg").value = set_akhir;
    } else {
      $("#tanggal_akhir_seg").attr("disabled", "disabled");
      document.querySelector("#tanggal_akhir_seg").classList.remove("border-cus");
    }
  } else if (document.getElementById("search_by_periode_seg").value === "Bulanan") {
    if (awal && monthly_option) {
      monthly_option = monthly_option * 30;

      var set_awal = $("#tanggal_awal_seg").datepicker("getDate");
      
      set_awal.setDate(set_awal.getDate() + monthly_option);

      if (set_awal.getDate() < 10) {
        var date = nol + set_awal.getDate();
      } else {
        var date = set_awal.getDate();
      }

      if ((set_awal.getMonth() + 1) < 10) {
        var month = nol + (set_awal.getMonth() + 1);
      } else {
        var month = (set_awal.getMonth() + 1);
      }

      set_akhir = month + "/" + date + "/" + set_awal.getFullYear();

      document.getElementById("tanggal_akhir_seg").value = set_akhir;
    } else {
      $("#tanggal_akhir_seg").attr("disabled", "disabled");
      document.querySelector("#tanggal_akhir_seg").classList.remove("border-cus");
    }
  }
}

function pilihTahun() {
  if (document.getElementById("year").value) {
    $("#filter_month").removeAttr("disabled");
    document.querySelector("#filter_month").classList.add("border-cus");
  } else {
    document.getElementById("filter_month").value = "";
    $("#filter_month").attr("disabled", "disabled");
    document.querySelector("#filter_month").classList.remove("border-cus");
  }
}

function pilihBulan() {
  if (document.getElementById("filter_month")) {
    $("#filter_period").removeAttr("disabled");
    document.querySelector("#filter_period").classList.add("border-cus");
  } else {
    $("#filter_period").attr("disabled", "disabled");
    document.querySelector("#filter_period").classList.remove("border-cus");
  }
}

function pilihRegional() {
  if (document.getElementById("regional").value) {
    $("#search_by_cabang").removeClass("d-none");
    $("#search_by_cabang").show();
  } else {
    $("#search_by_cabang").hide();
    $("#search_by_unit").hide();
    $("#search_by_officer").hide();

    document.getElementById("cabang").value = "";
    document.getElementById("unit").value = "";
    document.getElementById("officer").value = "";
  }
}

function pilihCabang() {
  if (document.getElementById("cabang").value) {
    $("#search_by_unit").removeClass("d-none");
    $("#search_by_unit").show();
  } else {
    $("#search_by_unit").hide();
    $("#search_by_officer").hide();
    document.getElementById("unit").value = "";
    document.getElementById("officer").value = "";
  }
}

function pilihUnit() {
  if (document.getElementById("unit").value) {
    $("#search_by_officer").removeClass("d-none");
    $("#search_by_officer").show();
  } else {
    $("#search_by_officer").hide();
    document.getElementById("search_officer").value = "";
  }
}

function pilihCabangSeg() {
  if (document.getElementById("cabang_seg").value) {
    $("#search_by_unit_seg").removeClass("d-none");
    $("#search_by_unit_seg").show();
  } else {
    $("#search_by_unit_seg").hide();
    $("#search_by_officer_seg").hide();
    document.getElementById("unit_seg").value = "";
    document.getElementById("officer_seg").value = "";
  }
}

function pilihUnitSeg() {
  if (document.getElementById("unit_seg").value) {
    $("#search_by_officer_seg").removeClass("d-none");
    $("#search_by_officer_seg").show();
  } else {
    $("#search_by_officer_seg").hide();
    document.getElementById("search_officer_seg").value = "";
  }
}

function resetRegional() {
  document.getElementById("regional").value = "";
  document.getElementById("cabang").value = "";
  document.getElementById("unit").value = "";
  $("#search_by_cabang").hide();
  $("#search_by_unit").hide();
}

function resetPencarian() {
  document.getElementById("cabang").value = "";
  document.getElementById("unit").value = "";
  document.getElementById("search_id").value = "";
  document.getElementById("search_by_periode").value = "";
  $("#search_by_unit").hide();
  $("#start_date").hide();
  $("#range_weekly").hide();
  $("#range_monthly").hide();
  $("#end_date").hide();
  $("#month_period").hide();
  $("#year_period").hide();
  $("#set_period").hide();
  $("#txt_garis").hide();
  $("#txt_harian").hide();
  $("#txt_mingguan").hide();
  $("#txt_bulanan").hide();
  $("#txt_periode").hide();
}

function resetPencarian1() {
  document.getElementById("regional").value = "";
  document.getElementById("cabang").value = "";
  document.getElementById("unit").value = "";
  document.getElementById("search_id").value = "";
  document.getElementById("search_by_periode").value = "";
  $("#search_by_cabang").hide();
  $("#search_by_unit").hide();
  $("#start_date").hide();
  $("#range_weekly").hide();
  $("#range_monthly").hide();
  $("#end_date").hide();
  $("#month_period").hide();
  $("#year_period").hide();
  $("#set_period").hide();
  $("#txt_garis").hide();
  $("#txt_harian").hide();
  $("#txt_mingguan").hide();
  $("#txt_bulanan").hide();
  $("#txt_periode").hide();
}

function resetPencarian2() {
  document.getElementById("filter_month").value = "";
  document.getElementById("year").value = "";
  document.getElementById("filter_period").value = "";
}




// function pilihPeriode() {
    //   $("#tanggal_awal").datepicker('setDate', null);
    //   $("#tanggal_akhir").datepicker('setDate', null);

    //   if (document.getElementById("search_by_periode").value === "Harian") {
    //     $("#start_date").show().removeClass("d-none");
    //     $("#end_date").show().removeClass("d-none");
    //     $("#range_weekly").hide();
    //     $("#range_monthly").hide();
    //     $("#month_period").hide();
    //     $("#year_period").hide();
    //     $("#set_period").hide();
    //     document.getElementById("tanggal_awal").value = "";
    //     document.getElementById("weekly_option").value = "";
    //     document.getElementById("monthly_option").value = "";
    //     document.getElementById("tanggal_akhir").value = "";
    //     document.getElementById("filter_month").value = "";
    //     document.getElementById("year").value = "";
    //     document.getElementById("filter_period").value = "";
    //     $("#tanggal_akhir").attr("disabled", "disabled");
    //     document.querySelector("#tanggal_akhir").classList.remove("border-cus");

    //   } else if (document.getElementById("search_by_periode").value === "Mingguan") {
    //     $("#start_date").show().removeClass("d-none");
    //     $("#range_weekly").show().removeClass("d-none");
    //     $("#end_date").show().removeClass("d-none");
    //     $("#range_monthly").hide();
    //     $("#month_period").hide();
    //     $("#year_period").hide();
    //     $("#set_period").hide();
    //     document.getElementById("tanggal_awal").value = "";
    //     document.getElementById("weekly_option").value = "";
    //     document.getElementById("monthly_option").value ="";
    //     document.getElementById("tanggal_akhir").value = "";
    //     document.getElementById("filter_month").value = "";
    //     document.getElementById("year").value = "";
    //     document.getElementById("filter_period").value = "";
    //     $("#tanggal_akhir").attr("disabled", "disabled");
    //     document.querySelector("#tanggal_akhir").classList.remove("border-cus");

    //   } else if (document.getElementById("search_by_periode").value === "Bulanan") {
    //     $("#start_date").show().removeClass("d-none");
    //     $("#range_monthly").show().removeClass("d-none");
    //     $("#end_date").show().removeClass("d-none");
    //     $("#range_weekly").hide();
    //     $("#month_period").hide();
    //     $("#year_period").hide();
    //     $("#set_period").hide();
    //     document.getElementById("tanggal_awal").value = "";
    //     document.getElementById("weekly_option").value = "";
    //     document.getElementById("monthly_option").value = "";
    //     document.getElementById("tanggal_akhir").value = "";
    //     document.getElementById("filter_month").value = "";
    //     document.getElementById("year").value = "";
    //     document.getElementById("filter_period").value = "";
    //     $("#tanggal_akhir").attr("disabled", "disabled");
    //     document.querySelector("#tanggal_akhir").classList.remove("border-cus");

    //   } else if (document.getElementById("search_by_periode").value === "Periode") {
    //     $("#start_date").hide();
    //     $("#range_weekly").hide();
    //     $("#range_monthly").hide();
    //     $("#end_date").hide();
    //     $("#month_period").show().removeClass("d-none");
    //     $("#year_period").show().removeClass("d-none");
    //     $("#set_period").show().removeClass("d-none");
    //     document.getElementById("tanggal_awal").value = "";
    //     document.getElementById("weekly_option").value = "";
    //     document.getElementById("monthly_option").value ="";
    //     document.getElementById("tanggal_akhir").value = "";
    //     document.getElementById("filter_month").value = "";
    //     document.getElementById("year").value = "";
    //     document.getElementById("filter_period").value = "";
    //     $("#tanggal_akhir").attr("disabled", "disabled");
    //     document.querySelector("#tanggal_akhir").classList.remove("border-cus");

    //   } else {
    //     $("#start_date").hide();
    //     $("#range_weekly").hide();
    //     $("#range_monthly").hide();
    //     $("#end_date").hide();
    //     $("#month_period").hide();
    //     $("#year_period").hide();
    //     $("#set_period").hide();
    //     document.getElementById("tanggal_awal").value = "";
    //     document.getElementById("weekly_option").value = "";
    //     document.getElementById("monthly_option").value ="";
    //     document.getElementById("tanggal_akhir").value = "";
    //     document.getElementById("filter_month").value = "";
    //     document.getElementById("year").value = "";
    //     document.getElementById("filter_period").value = "";
    //     $("#tanggal_akhir").attr("disabled", "disabled");
    //     document.querySelector("#tanggal_akhir").classList.remove("border-cus");
    //   }
    // }

    // function setStartDate() {
    //   var awal = document.getElementById("tanggal_awal").value;
    //   var weekly_option = document.getElementById("weekly_option").value;
    //   var monthly_option = document.getElementById("monthly_option").value;

    //   if (document.getElementById("search_by_periode").value === "Harian") {
    //     if (awal) {
    //       $("#tanggal_akhir").datepicker("setEndDate", awal);

    //       $("#tanggal_akhir").removeAttr("disabled");
    //       document.querySelector("#tanggal_akhir").classList.add("border-cus");
    //       document.getElementById("tanggal_akhir").value = "";
    //     } else {
    //       $("#tanggal_akhir").attr("disabled", "disabled");
    //       document.querySelector("#tanggal_akhir").classList.remove("border-cus");
    //     }
    //   } else if (document.getElementById("search_by_periode").value === "Mingguan") {
    //     if (awal && weekly_option) {
    //       weekly_option = weekly_option * 7;

    //       var set_awal = $("#tanggal_awal").datepicker("getDate");
    //       set_awal.setDate(set_awal.getDate() - weekly_option);

    //       set_akhir = (set_awal.getMonth() + 1) + "/" + set_awal.getDate() + "/" + set_awal.getFullYear();

    //       document.getElementById("tanggal_akhir").value = set_akhir;
    //       console.log(awal);
    //       console.log(document.getElementById("tanggal_akhir").value);
    //     } else {
    //       $("#tanggal_akhir").attr("disabled", "disabled");
    //       document.querySelector("#tanggal_akhir").classList.remove("border-cus");
    //     }
    //   } else if (document.getElementById("search_by_periode").value === "Bulanan") {
    //     if (awal && monthly_option) {
    //       monthly_option = monthly_option * 30;

    //       var set_awal = $("#tanggal_awal").datepicker("getDate");
    //       set_awal.setDate(set_awal.getDate() - monthly_option);

    //       set_akhir = (set_awal.getMonth() + 1) + "/" + set_awal.getDate() + "/" + set_awal.getFullYear();

    //       document.getElementById("tanggal_akhir").value = set_akhir;
    //     } else {
    //       $("#tanggal_akhir").attr("disabled", "disabled");
    //       document.querySelector("#tanggal_akhir").classList.remove("border-cus");
    //     }
    //   }
    // }
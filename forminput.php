
  <form name="form_input" class="needs-validation" method="POST" action="hasil.php" novalidate>
    <div class="modal-header" style="background-color: #EF7A48;">
      <h3 class="modal-title judul">FORM INPUT DEBITUR</h3>
      <a href="hasil_prediksi.php" class="close">
        <span aria-hidden="true" style="color: #fff;">×</span>
      </a>
    </div>
    <div class="modal-body" style="background-color: #DCDCDC;">
      <div class="col-12" style="text-align: right;">
        <span style="color: #FF0000; font-weight: bold; font-size: 11pt;">Semua data harus diisi</span>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Nominal Pinjaman</label>
        <div class="col-lg-8 col-xs-12">
          <input class="form-control" type="text" name="approved_credit" id="approved_credit" onchange="hitung()" required>
          <div class="invalid-feedback">
            Nominal pinjaman tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Precentase Scoring (%)</label>
        <div class="col-lg-8 col-xs-12">
          <input class="form-control" type="number" name="ext_score_2" id="ext_score_2" required min="0" step="0.0000000001" max="100" onchange="handleChange(this)">
          <div class="invalid-feedback">
            Presentase scoring tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Lama Bekerja</label>
        <div class="form-group row col-lg-8 col-xs-12">
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <input class="form-control" type="number" name="year" id="year" required placeholder="Tahun" min="2" onchange="tahunKerja(this)">
            <div class="invalid-feedback">
              Tahun lama bekerja tidak boleh kosong.
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <select class="form-control" name="month" id="month" required>
              <option value="" disabled="disabled" selected="selected">Bulan</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
            </select>
            <div class="invalid-feedback">
              Bulan lama bekerja tidak boleh kosong.
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Pendidikan</label>
        <div class="col-lg-8 col-xs-12">
          <select class="form-control" name="education" id="education" required>
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="Higher education">Higher education</option>
            <option value="Incomplete higher">Incomplete higher</option>
            <option value="Lower secondary">Lower secondary</option>
            <option value="Secondary / secondary special">Secondary / secondary special</option>
            <option value="Academic degree">Academic degree</option>
          </select>
          <div class="invalid-feedback">
            Pendidikan tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Tanggal Lahir</label>
        <div class="col-lg-8 col-xs-12">
          <input class="form-control" type="date" name="day_age" id="day_age" required>
          <div class="invalid-feedback">
            Tanggal lahir tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Jenis Kelamin</label>
        <div class="col-lg-8 col-xs-12">
          <select class="form-control" name="gender" id="gender" required>
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="F">F</option>
            <option value="M">M</option>
          </select>
          <div class="invalid-feedback">
            Jenis kelamin tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Status Perkawinan</label>
        <div class="col-lg-8 col-xs-12">
          <select class="form-control" name="family_status" id="family_status" required>
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="Married">Married</option>
            <option value="Civil marriage">Civil marriage</option>
            <option value="Single / not married">Single / not married</option>
            <option value="Widow">Widow</option>
            <option value="Separated">Separated</option>
          </select>
          <div class="invalid-feedback">
            Status perkawinan tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Jenis Organisasi</label>
        <div class="col-lg-8 col-xs-12">
          <select class="form-control" name="organization_type" id="organization_type" required style="width: 100%;">
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="Advertising">Advertising</option>
            <option value="Agriculture">Agriculture</option>
            <option value="Bank">Bank</option>
            <option value="Business Entity Type 1">Business Entity Type 1</option>
            <option value="Business Entity Type 2">Business Entity Type 2</option>
            <option value="Business Entity Type 3">Business Entity Type 3</option>
            <option value="Cleaning">Cleaning</option>
            <option value="Construction">Construction</option>
            <option value="Culture">Culture</option>
            <option value="Electricity">Electricity</option>
            <option value="Emergency">Emergency</option>
            <option value="Government">Government</option>
            <option value="Hotel">Hotel</option>
            <option value="Housing">Housing</option>
            <option value="Industry: type 1">Industry: type 1</option>
            <option value="Industry: type 2">Industry: type 2</option>
            <option value="Industry: type 3">Industry: type 3</option>
            <option value="Industry: type 4">Industry: type 4</option>
            <option value="Industry: type 5">Industry: type 5</option>
            <option value="Industry: type 6">Industry: type 6</option>
            <option value="Industry: type 7">Industry: type 7</option>
            <option value="Industry: type 8">Industry: type 8</option>
            <option value="Industry: type 9">Industry: type 9</option>
            <option value="Industry: type 10">Industry: type 10</option>
            <option value="Industry: type 11">Industry: type 11</option>
            <option value="Industry: type 12">Industry: type 12</option>
            <option value="Industry: type 13">Industry: type 13</option>
            <option value="Insurance">Insurance</option>
            <option value="Kindergarten">Kindergarten</option>
            <option value="Legal Services">Legal Services</option>
            <option value="Medicine">Medicine</option>
            <option value="Military">Military</option>
            <option value="Mobile">Mobile</option>
            <option value="NA1">NA1</option>
            <option value="Other">Other</option>
            <option value="Police">Police</option>
            <option value="Postal">Postal</option>
            <option value="Realtor">Realtor</option>
            <option value="Religion">Religion</option>
            <option value="Restaurant">Restaurant</option>
            <option value="School">School</option>
            <option value="Security">Security</option>
            <option value="Security Ministries">Security Ministries</option>
            <option value="Self-employed">Self-employed</option>
            <option value="Services">Services</option>
            <option value="Telecom">Telecom</option>
            <option value="Trade: type 1">Trade: type 1</option>
            <option value="Trade: type 2">Trade: type 2</option>
            <option value="Trade: type 3">Trade: type 3</option>
            <option value="Trade: type 4">Trade: type 4</option>
            <option value="Trade: type 5">Trade: type 5</option>
            <option value="Trade: type 6">Trade: type 6</option>
            <option value="Trade: type 7">Trade: type 7</option>
            <option value="Transport: type 1">Transport: type 1</option>
            <option value="Transport: type 2">Transport: type 2</option>
            <option value="Transport: type 3">Transport: type 3</option>
            <option value="Transport: type 4">Transport: type 4</option>
            <option value="University">University</option>
          </select>
          <div class="invalid-feedback">
            Jenis organisasi tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Jenis Pendapatan</label>
        <div class="col-lg-8 col-xs-12">
          <select class="form-control" name="income_type" id="income_type" required>
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="Commercial associate">Commercial associate</option>
            <option value="Working">Working</option>
            <option value="State servant">State servant</option>
            <option value="Pensioner">Pensioner</option>
            <option value="Unemployed">Unemployed</option>
            <option value="Student">Student</option>
            <option value="Businessman">Businessman</option>
          </select>
          <div class="invalid-feedback">
            Jenis pendapatan tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Tanggal Terakhir Update Id (KTP/SIM/dll)</label>
        <div class="col-lg-8 col-xs-12">
          <input class="form-control" type="date" name="last_update" id="last_update" required onchange="cal()">
          <div class="invalid-feedback">
            Tanggal terakhir update Id tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Tanggal Pengajuan</label>
        <div class="col-lg-8 col-xs-12">
          <input class="form-control" type="date" name="submission_date" id="submission_date" required onchange="cal()">
          <div class="invalid-feedback">
            Tanggal pengajuan tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Jenis Kontrak</label>
        <div class="col-lg-8 col-xs-12">
          <select class="form-control" name="contract_type" id="contract_type" required>
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="Cash loans">Cash loans</option>
            <option value="Revolving loans">Revolving loans</option>
          </select>
          <div class="invalid-feedback">
            Jenis kontrak tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Pendapatan (Perbulan)</label>
        <div class="col-lg-8 col-xs-12">
          <input class="form-control" type="text" name="income" id="income" required onchange="cekPendapatan()">
          <div class="invalid-feedback">
            Pendapatan (perbulan) tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Tempat Tinggal Saat Ini</label>
        <div class="col-lg-8 col-xs-12">
          <select class="form-control" name="housing_type" id="housing_type" required>
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="House / apartment">House / apartment</option>
            <option value="Municipal apartment">Municipal apartment</option>
            <option value="Rented apartment">Rented apartment</option>
            <option value="With parents">With parents</option>
            <option value="Office apartment">Office apartment</option>
            <option value="Co-op apartment">Co-op apartment</option>
          </select>
          <div class="invalid-feedback">
            Tempat tinggal saat ini tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Tenor</label>
        <div class="col-lg-8 col-xs-12">
          <!-- <input class="form-control" type="number" name="tenor" id="tenor" onkeyup="hitung()" required min="1"> -->
          <select class="form-control" name="tenor" id="tenor" onchange="hitung()" required>
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="6">6</option>
            <option value="12">12</option>
            <option value="18">18</option>
            <option value="24">24</option>
            <option value="30">30</option>
            <option value="36">36</option>
          </select>
          <div class="invalid-feedback">
            Tenor tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Prediksi Angsuran</label>
        <div class="col-lg-8 col-xs-12">
          <input class="form-control" type="text" name="annuity" id="annuity" required readonly>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Price</label>
        <div class="col-lg-8 col-xs-12">
          <input class="form-control" type="text" name="price" id="price" required min="0">
          <div class="invalid-feedback">
            Price tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Tanggal Join di Bank</label>
        <div class="col-lg-8 col-xs-12">
          <input class="form-control" type="date" name="register_date" id="register_date" onchange="cal2()" required> 
          <div class="invalid-feedback">
            Tanggal join di bank tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-4 col-xs-12 col-form-label labelku">Tanggal Pengajuan Pinjaman</label>
        <div class="col-lg-8 col-xs-12">
          <input class="form-control" type="date" name="submission_date2" id="submission_date2" onchange="cal2()" required>
          <div class="invalid-feedback">
            Tanggal pengauan pinjaman tidak boleh kosong.
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="hasil_prediksi.php" class="btn btn-secondary">Batal</a>
      <input type="submit" class="btn btn-danger" name="simpan" value="Predik">
    </div>
  </form>

  <script type="text/javascript">
    // Menghitung Prediksi Angsuran (Annuity)
    function hitung(){
      var pinjaman = document.getElementById('approved_credit').value,
      split = pinjaman.split(" "),
      uang = split[0],
      nominal = split[1],
      credit = nominal.replace(/[.]+/g, '');

      if (credit < 3000000) {
        // alert('Minimal pinjaman sebesar Rp. 3.000.000');
        swal({
          icon: 'error',
          title: 'Oops...',
          text: 'Minimal pinjaman sebesar Rp. 3.000.000'
        })
        document.getElementById('approved_credit').value = '';
        document.form_input.approved_credit.focus();
      } else if (credit > 30000000) {
        // alert('Maksimal pinjaman sebesar Rp. 30.000.000');
        swal({
          icon: 'error',
          title: 'Oops...',
          text: 'Maksimal pinjaman sebesar Rp. 30.000.000'
        })
        document.getElementById('approved_credit').value = '';
        document.form_input.approved_credit.focus();
      } else {
        var hitung = parseInt(credit) / parseInt(document.getElementById('tenor').value);
        var tampil = thousands_separators(hitung);

        // Untuk memberikan nilai blank pada annuity saat hitung bernilai NaN
        if (isNaN(hitung)) {
          document.getElementById('annuity').value = '';
        } else {
          document.getElementById('annuity').value = uang + ' ' + tampil;
        }  
      }
        
    }

    // Menambahkan titik untuk ribuan
    function thousands_separators(num) {
      var num_parts = num.toString().split(".");
      num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
      return num_parts.join(",");
    }

    var rupiah = document.getElementById('approved_credit');
    rupiah.addEventListener('keyup', function(e){
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    var rupiah1 = document.getElementById('income');
    rupiah1.addEventListener('keyup', function(e){
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah1.value = formatRupiah(this.value, 'Rp. ');
    });

    var rupiah3 = document.getElementById('price');
    rupiah3.addEventListener('keyup', function(e){
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah3.value = formatRupiah(this.value, 'Rp. ');
    });

    // Fungsi format Uang
    function formatRupiah(angka, prefix){
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split       = number_string.split(','),
      sisa        = split[0].length % 3,
      rupiah        = split[0].substr(0, sisa),
      ribuan        = split[0].substr(sisa).match(/\d{3}/gi);

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }

      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' +  rupiah : '');
    }

    // Mengubah format pecahan menjadi desimal
    function handleChange(input) {
      if (input.value < 0) {
        swal({
          icon: 'error',
          title: 'Oops...',
          text: 'Minimal percentase scoring 0'
        })
        document.getElementById('ext_score_2').value = '';
        document.form_input.ext_score_2.focus();
      }

      if (input.value > 100){
        swal({
          icon: 'error',
          title: 'Oops...',
          text: 'Maksimal percentase scoring 100'
        })
        document.getElementById('ext_score_2').value = '';
        document.form_input.ext_score_2.focus();
      }
    }

    function tahunKerja(input) {
      if (input.value < 2) {
        swal({
          icon: 'error',
          title: 'Oops...',
          text: 'Minimal lama bekerja 2 Tahun.'
        })
        document.getElementById('year').value = '';
        document.form_input.year.focus();
      }
    }

    function cekPendapatan() {
      var cek = document.getElementById('income').value,
      split = cek.split(" "),
      uang = split[0],
      nominal = split[1],
      pendapatan = nominal.replace(/[.]+/g, '');

      if (pendapatan < 3000000) {
        // alert('Minimal pendapatan sebesar Rp. 3.000.000');
        swal({
          icon: 'error',
          title: 'Oops...',
          text: 'Minimal pendapatan sebesar Rp. 3.000.000'
        })
        document.getElementById('income').value = '';
        document.form_input.income.focus();
      }
    }

    day_age.max = new Date().toISOString().split("T")[0];
    last_update.max = new Date().toISOString().split("T")[0];
    submission_date.max = new Date().toISOString().split("T")[0];
    days_registration.max = new Date().toISOString().split("T")[0];
    register_date.max = new Date().toISOString().split("T")[0];
    submission_date2.max = new Date().toISOString().split("T")[0];

  </script>
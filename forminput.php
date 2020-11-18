  <style type="text/css">
    .labelku {
      font-weight: bold;
      color: #000;
    }

    .judul {
      font-weight: bold;
      color: #fff;
      width: 100%;
      text-align: center;
    }
  </style>

  <form name="form_input" class="needs-validation" method="POST" action="hasil.php" novalidate>
    <div class="modal-header" style="background-color: #000;">
      <h3 class="modal-title judul">FORM INPUT DEBITUR</h3>
      <a href="cermati.php" class="close">
        <span aria-hidden="true">×</span>
      </a>
    </div>
    <div class="modal-body" style="background-color: #DCDCDC;">
      <div class="col-12" style="text-align: right;">
        <span style="color: #FF0000; font-weight: bold; font-size: 11pt;">Semua data harus diisi</span>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Nominal Pinjaman</label>
        <div class="col-8">
          <input class="form-control" type="text" name="approved_credit" id="approved_credit" onkeyup="hitung()" required min="0">
          <div class="invalid-feedback">
            Nominal pinjaman tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Precentase Scoring</label>
        <div class="col-8">
          <input class="form-control" type="number" name="ext_score_2" id="ext_score_2" required min="0" step="0.0000000001" onchange="handleChange(this)">
          <div class="invalid-feedback">
            Presentase scoring tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Lama Bekerja</label>
        <div class="form-group row col-8">
          <div class="col-6">
            <input class="form-control" type="number" name="days_work" id="days_work" required placeholder="Tahun" min="0">
            <div class="invalid-feedback">
              Tahun lama bekerja tidak boleh kosong.
            </div>
          </div>
          <div class="col-6">
            <select class="form-control" name="bulan" id="bulan" required>
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
              <option value="12">12</option>
            </select>
            <div class="invalid-feedback">
              Bulan lama bekerja tidak boleh kosong.
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Pendidikan</label>
        <div class="col-8">
          <select class="form-control" name="education" id="education" required>
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="Higher education">Higher education</option>
            <option value="Incomplete higher">Incomplete higher</option>
            <option value="Lower secondary">Lower secondary</option>
            <option value="Secondary / secondary special">Secondary / secondary special</option>
          </select>
          <div class="invalid-feedback">
            Pendidikan tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Tanggal Lahir</label>
        <div class="col-8">
          <input class="form-control" type="date" name="day_age" id="day_age" required>
          <div class="invalid-feedback">
            Tanggal lahir tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Jenis Kelamin</label>
        <div class="col-8">
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
        <label class="col-4 col-form-label labelku">Status Perkawinan</label>
        <div class="col-8">
          <select class="form-control" name="family_status" id="family_status" required>
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="Married">Married</option>
            <option value="Civil marriage">Civil marriage</option>
            <option value="Single / not married">Single / not married</option>
            <option value="Widow">Widow</option>
          </select>
          <div class="invalid-feedback">
            Status perkawinan tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Jenis Organisasi</label>
        <div class="col-8">
          <select class="form-control" name="organization_type" id="organization_type" required>
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="NA1">NA1</option>
            <option value="Medicine">Medicine</option>
            <option value="Industry: type 5">Industry: type 5</option>
            <option value="Construction">Construction</option>
            <option value="Business Entity Type 3">Business Entity Type 3</option>
            <option value="University">University</option>
          </select>
          <div class="invalid-feedback">
            Jenis organisasi tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Jenis Pendapatan</label>
        <div class="col-8">
          <select class="form-control" name="income_type" id="income_type" required>
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="Commercial associate">Commercial associate</option>
            <option value="Working">Working</option>
            <option value="State servant">State servant</option>
            <option value="Pensioner">Pensioner</option>
          </select>
          <div class="invalid-feedback">
            Jenis pendapatan tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Tanggal Terakhir Update Id (KTP/SIM/dll)</label>
        <div class="col-8">
          <input class="form-control" type="date" name="days_id_change" id="days_id_change" required>
          <div class="invalid-feedback">
            Tanggal terakhir update Id tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Tanggal Pengajuan</label>
        <div class="col-8">
          <input class="form-control" type="date" name="days_id_change1" id="days_id_change1" required>
          <div class="invalid-feedback">
            Tanggal pengajuan tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Jenis Kontrak</label>
        <div class="col-8">
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
        <label class="col-4 col-form-label labelku">Pendapatan (Perbulan)</label>
        <div class="col-8">
          <input class="form-control" type="text" name="income" id="income" required min="0">
          <div class="invalid-feedback">
            Pendapatan (perbulan) tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Tempat Tinggal Saat Ini</label>
        <div class="col-8">
          <select class="form-control" name="housing_type" id="housing_type" required>
            <option value="" disabled="disabled" selected="selected">Choose option</option>
            <option value="House / apartment">House / apartment</option>
            <option value="Municipal apartment">Municipal apartment</option>
            <option value="Rented apartment">Rented apartment</option>
            <option value="With parents">With parents</option>
          </select>
          <div class="invalid-feedback">
            Tempat tinggal saat ini tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Tenor</label>
        <div class="col-8">
          <input class="form-control" type="number" name="tenor" id="tenor" onkeyup="hitung()" required min="1">
          <div class="invalid-feedback">
            Tenor tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Prediksi Angsuran</label>
        <div class="col-8">
          <input class="form-control" type="text" name="annuity" id="annuity" required readonly>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Price</label>
        <div class="col-8">
          <input class="form-control" type="text" name="price" id="price" required min="0">
          <div class="invalid-feedback">
            Price tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Tanggal Join di Bank</label>
        <div class="col-8">
          <input class="form-control" type="date" name="days_registration" id="days_registration" required> 
          <div class="invalid-feedback">
            Tanggal join di bank tidak boleh kosong.
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4 col-form-label labelku">Tanggal Pengajuan Pinjaman</label>
        <div class="col-8">
          <input class="form-control" type="date" name="days_registration1" id="days_registration1" required>
          <div class="invalid-feedback">
            Tanggal pengauan pinjaman tidak boleh kosong.
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="cermati.php" class="btn btn-secondary">Batal</a>
      <input type="submit" class="btn btn-danger" name="simpan" value="Simpan">
    </div>
  </form>

  <script type="text/javascript">
    // Menghitung Prediksi Angsuran (Annuity)
    function hitung(){
      var pinjaman = document.getElementById('approved_credit').value,
      split = pinjaman.split(" "),
      uang = split[0],
      pinjaman = split[1];
      pinjaman = pinjaman.replace(/[.]+/g, '');
      // if (parseInt(pinjaman) > 5000000) pinjaman = 5000000;
      var hitung = parseInt(pinjaman) / parseInt(document.getElementById('tenor').value);
      var tampil = thousands_separators(hitung);
      if (tampil != null) {
        document.getElementById('annuity').value = uang + " " + tampil;
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
      if (input.value < 0) input.value = 0;
      if (input.value > 100) input.value = 100;
    }
  </script>
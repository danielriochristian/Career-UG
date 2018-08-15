@extends('Home2')
@section('tracer_perusahaan')
<div id="fullscreen_bg" class="fullscreen_bg">
<div class="cardn card-container">
<div class="container">
  <center><h3>Company Survey</h3></center>
  <h4>1. Profile Umum</h4>
  <p>Di bawah ini isian mengenai profile pengisi kuesioner. Kami harap Bapak/Ibu berkenan melengkapi isian di bawah ini.</p>
  <div class="formgroup"><!--Nama_instansi-->
    <h6><label for="exampleFormControlSelect1">Nama Instansi</label></h6>
  <div class="form-group">
    <input type="text" name="Nama_instansi" id="Nama_instansi" class="form-control input-lg" placeholder="Nama Instansi" tabindex="1" style="width:50%">
  </div>
</div><!--end Nama_instansi-->

  <div class="formgroup"><!--alamat-->
    <h6><label for="exampleFormControlSelect1">Alamat</label></h6>
  <div class="form-group">
    <input type="text" name="alamat" id="alamat" class="form-control input-lg" placeholder="Alamat" tabindex="1" style="width:80%">
  </div>
</div><!--end alamat-->

  <div class="formgroup"><!--Telepon-->
    <h6><label for="exampleFormControlSelect1">Telepon</label></h6>
  <div class="form-group">
    <input type="text" name="telepon" id="telepon" class="form-control input-lg" placeholder="Telepon" tabindex="1" style="width:25%">
  </div>
</div><!--end telepon-->

<div class="formgroup"><!--homepage-->
  <h6><label for="exampleFormControlSelect1">Homepage</label></h6>
<div class="form-group">
  <input type="text" name="homepage" id="homepage" class="form-control input-lg" placeholder="Homepage" tabindex="1" style="width:35%">
</div>
</div><!--end homepage-->

<div class="formgroup"><!--contact person-->
  <h6><label for="exampleFormControlSelect1">Nama Contact Person</label></h6>
<div class="form-group">
  <input type="text" name="contact-person" id="contact-person" class="form-control input-lg" placeholder="Nama Contact Person" tabindex="1" style="width:50%">
</div>
</div><!--end contact person-->

<div class="formgroup"><!--Jabatan-->
  <h6><label for="exampleFormControlSelect1">Jabatan</label></h6>
<div class="form-group">
  <input type="text" name="jabatan" id="jabatan" class="form-control input-lg" placeholder="Jabatan" tabindex="1" style="width:35%">
</div>
</div><!--end jabatan-->

<div class="formgroup"><!--email-->
  <h6><label for="exampleFormControlSelect1">Email</label></h6>
<div class="form-group">
  <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="1" style="width:35%">
</div>
</div><!--end Email-->
<br>
<h4>2. Karakteristik Perusahaan</h4>
<p>Di bawah ini adalah pertanyaan-pertanyaan mengenai karakteristik perusahaan. Kami harap Bapak/Ibu berkenan memberikan jawaban dengan memberi tanda checklist atau melingkari jawaban yang tersedia.</p>
<div class="formgroup"><!-- start formgroup 2.1-->
  <h6><label>1. Bentuk Perusahaan</label></h6>
  <table width="80%">
    <tbody>
      <tr>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio1_1" id="radio1_1" value="BUMN"> BUMN</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio1_2" id="radio1_2" value="Perusahaan Terbatas(PT)"> Perusahaan Terbatas(PT)</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio1_3" id="radio1_3" value="Koperasi"> Koperasi</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio1_4" id="radio1_4" value="CV"> CV</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio1_5" id="radio1_5" value="Firma/Perusahaan persoarangan"> Firma/Perusahaan Perseorangan</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio1_6" id="radio1_6" value="lainnya"> Lainnya</label>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div><!--end formgroup 2.1-->
<br>
<div class="formgroup"><!-- start formgroup 2.2-->
  <h6><label>2.	Jumlah pegawai seluruhnya yang bekerja di perusahaan ini:</label></h6>
  <table width="80%">
    <tbody>
      <tr>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio2_1" id="radio2_1" value="< 50 Orang"> < 50 Orang</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio2_2" id="radio2_2" value="51-100 Orang"> 101-150 Orang</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio2_3" id="radio2_3" value="151-300 Orang"> 151-300 Orang</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio2_4" id="radio2_4" value="301-500 Orang"> 301-500 Orang</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio2_5" id="radio2_5" value="> 500 Orang"> >500 Orang</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio2_6" id="radio2_6" value="lainnya"> Lainnya</label>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div><!--end formgroup 2.2-->
<br>
<div class="formgroup"><!-- start formgroup 2.3-->
  <h6><label>3.	Rata-rata standar gaji pertama (per bulan dalam rupiah) yang diberikan perusahaan kepada alumni Universitas Gunadarma:</label></h6>
  <table width="80%">
    <tbody>
      <tr>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio3_1" id="radio3_1" value="1.500.000-2.000.000"> 1.500.000-2.000.000</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio3_2" id="radio3_2" value="3.000.000 - 3.500.000"> 3.000.000 - 3.500.000</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio3_3" id="radio3_3" value="2.000.000-2.500.000"> 2.000.000-2.500.000</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio3_4" id="radio3_4" value="3.500.000 - 4.000.000"> 3.500.000 - 4.000.000</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio3_5" id="radio3_5" value="2.500.000-3.000.000"> 2.500.000-3.000.000</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio3_6" id="radio3_6" value=">4.000.000"> >4.000.000</label>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div><!--end formgroup 2.3-->
<br>
<div class="formgroup"><!-- start formgroup 2.4-->
  <h6><label>4.	Rata-rata jumlah alumni Universitas Gunadarma yang melamar di perusahaan ini setiap tahunnya:</label></h6>
  <table width="80%">
    <tbody>
      <tr>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio4_1" id="radio4_1" value="Tidak ada"> Tidak ada</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio4_2" id="radio4_2" value="< 20 Orang"> < 20 Orang</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio4_3" id="radio4_3" value="21-40 Orang"> 21-40 Orang</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio4_4" id="radio4_4" value="41-60 Orang"> 41-60 Orang</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio4_5" id="radio4_5" value="61-80 Orang"> 61-80 Orang</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio4_6" id="radio4_6" value=">80 Orang"> >80 Orang</label>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div><!--end formgroup 2.4-->
<br>
<div class="formgroup"><!-- start formgroup 2.5-->
  <h6><label>5.	Rata-rata jumlah alumni Universitas Gunadarma yang di terima di perusahaan ini setiap tahunnya:</label></h6>
  <table width="80%">
    <tbody>
      <tr>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio5_1" id="radio5_1" value="< 5 Orang"> < 5 Orang</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio5_2" id="radio5_2" value="6-15 Orang"> 6-15 Orang</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio5_3" id="radio5_3" value="16-20 Orang"> 16-20 Orang</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio5_4" id="radio5_4" value="21-25 Orang"> 21-25 Orang</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio5_5" id="radio5_5" value="26-30 Orang"> 26-30 Orang</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio5_6" id="radio5_6" value=">30 Orang"> >30 Orang</label>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div><!--end formgroup 2.5-->
<br>
<h4>3. Mutu Lulusann</h4>
<p>Di bawah ini adalah pertanyaan / pernyataan mengenai beberapa kriteria mutu lulusan. Kami harap Bapak / Ibu berkenan memberikan jawaban dengan memberi tanda checklist atau melingkari jawaban yang tersedia.</p>
<div class="form-group"> <!--start form 3.0-->
  <h6><label>Lulusan Universitas Gunadarma yang bekerja di Perusahaan Bapak/Ibu adalah berasal dari Program Studi:</label><h6>
  <table width="80%">
    <tbody>
      <tr>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Sistem Informasi"> Sistem Informasi</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Psikologi"> Psikologi</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Magister Manajemen"> Magister Manajemen</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Sistem Komputer"> Sistem Komputer</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Sastra Inggris"> Sastra Inggris</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Magister Teknik Elektro"> Magister Teknik Elektro</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Teknik Informatika"> Teknik Informatika</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Komunikasi"> Komunikasi</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Magister Teknik Sipil"> Magister Teknik Sipil</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Teknik Elektro"> Teknik Elektro</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Akuntansi Komputer (D3)"> Akuntansi Komputer (D3)</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Magister Sastra"> Magister Sastra</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Teknik Mesin"> Teknik Mesin</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Manajemen Keuangan (D3)"> Manajemen Keuangan (D3)</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Magister Psikologi"> Magister Psikologi</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Teknik Industri"> Teknik Industri</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Manajemen Pemasaran (D3)"> Manajemen Pemasaran (D3)</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Magister Teknik Mesin"> Magister Teknik Mesin</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Teknik Sipil"> Teknik Sipil</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Manajemen Informatika (D3)"> Manajemen Informatika (D3)</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Doktor Ilmu Ekonomi"> Doktor Ilmu Ekonomi</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Teknik Arsitektur"> Teknik Arsitektur</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Teknik Komputer (D3)"> Teknik Komputer (D3)</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Doktor Ilmu Komputer"> Doktor Ilmu Komputer</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Akuntansi"> Akuntansi</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Kebidanan (D3)"> Kebidanan (D3)</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Doktor Ilmu Psikologi"> Doktor Ilmu Psikologi</label>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Manajemen"> Manajemen</label>
          </div>
        </td>
        <td>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="ask_1[]" value="Magister Sistem Informasi"> Magister Sistem Informasi</label>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div><!--end form 3.0-->
<br>
  <p style="font-size:24px">A. Motivasi Kerja</p>
  <div class="formgroup"><!-- start formgroup A.1-->
  <h6>1.	Motivasi lulusan dalam menyelesaikan suatu pekerjaan:</h6>
  <table width="80%">
    <tbody>
      <tr>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio6_1" id="radio6_1" value="Sangat Baik"> Sangat Baik</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio6_2" id="radio6_2" value="Baik"> Baik</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio6_3" id="radio6_3" value="Cukup"> Cukup</label>
          </div>
        </td>
        <td>
          <div class="radio">
            <label><input type="radio" name="radio6_4" id="radio6_4 " value="Kurang"> Kurang</label>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div><!--end formgroup A.1-->
<br>
<div class="formgroup"><!-- start formgroup A.2-->
<h6>2. Kreativitas lulusan dalam menyelesaikan suatu pekerjaan:</h6>
<table width="80%">
  <tbody>
    <tr>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio7_1" id="radio7_1" value="Sangat Baik"> Sangat Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio7_2" id="radio7_2" value="Baik"> Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio7_3" id="radio7_3" value="Cukup"> Cukup</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio7_4" id="radio7_4 " value="Kurang"> Kurang</label>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div><!--end formgroup A.2-->
<br>
<div class="formgroup"><!-- start formgroup A.3-->
<h6>3.	Motivasi lulusan dalam peningkatan karir:</h6>
<table width="80%">
  <tbody>
    <tr>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio8_1" id="radio8_1" value="Sangat Baik"> Sangat Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio8_2" id="radio8_2" value="Baik"> Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio8_3" id="radio8_3" value="Cukup"> Cukup</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio8_4" id="radio8_4 " value="Kurang"> Kurang</label>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div><!--end formgroup A.3-->
<br>
<div class="formgroup"><!-- start formgroup A.4-->
<h6>4. Motivasi lulusan dalam menambah pengetahuan / keahlian yang dimilikinya:</h6>
<table width="80%">
  <tbody>
    <tr>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio9_1" id="radio9_1" value="Sangat Baik"> Sangat Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio9_2" id="radio9_2" value="Baik"> Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio9_3" id="radio9_3" value="Cukup"> Cukup</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio9_4" id="radio9_4 " value="Kurang"> Kurang</label>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div><!--end formgroup A.4-->
<br>
<div class="formgroup"><!-- start formgroup A.5-->
<h6>5. Motivasi lulusan dalam menambah pengetahuan / keahlian di luar bidang ilmu yang dimilikinya:</h6>
<table width="80%">
  <tbody>
    <tr>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio10_1" id="radio10_1" value="Sangat Baik"> Sangat Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio10_2" id="radio10_2" value="Baik"> Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio10_3" id="radio10_3" value="Cukup"> Cukup</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio10_4" id="radio10_4 " value="Kurang"> Kurang</label>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div><!--end formgroup A.5-->
<br>
<p style="font-size:24px">B. Kepemimpinan dan Kemampuan Strategik</p>
<div class="formgroup"><!-- start formgroup B.1-->
<h6>1. Kemampuan lulusan dalam melakukan negosiasi:</h6>
<table width="80%">
  <tbody>
    <tr>
      <td>
        <div class="radio">
          <label><input type="radio" name="radi011_1" id="radio11_1" value="Sangat Baik"> Sangat Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio11_2" id="radio11_2" value="Baik"> Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio11_3" id="radio11_3" value="Cukup"> Cukup</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio11_4" id="radio11_4 " value="Kurang"> Kurang</label>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div><!--end formgroup B.1-->
<br>
<div class="formgroup"><!-- start formgroup B.2-->
<h6>2. Kemampuan lulusan dalam memecahkan permasalahan:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio12_1" id="radio12_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio12_2" id="radio12_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio12_3" id="radio12_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio12_4" id="radio12_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup B.2-->
<br>
<div class="formgroup"><!-- start formgroup B.3-->
<h6>3.	Kemampuan lulusan dalam menuangkan ide / inovasi:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio13_1" id="radio13_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio13_2" id="radio13_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio13_3" id="radio13_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio13_4" id="radio13_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup B.3-->
<br>
<div class="formgroup"><!-- start formgroup B.4-->
<h6>4.	Kemampuan lulusan dalam menciptakan suatu lapangan kerja:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio14_1" id="radio14_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio14_2" id="radio14_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio14_3" id="radio14_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio14_4" id="radio14_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup B.4-->
<br>
<div class="formgroup"><!-- start formgroup B.5-->
<h6>5.	Kemampuan lulusan dalam berpikir logis:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio15_1" id="radio15_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio15_2" id="radio15_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio15_3" id="radio15_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio15_4" id="radio15_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup B.5-->
<br>
<p style="font-size:24px">Kemampuan Manajerial</p>
<div class="formgroup"><!-- start formgroup C.1-->
<h6>1. Kemampuan lulusan dalam menyelesaikan pekerjaan:</h6>
<table width="80%">
  <tbody>
    <tr>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio16_1" id="radio16_1" value="Sangat Baik"> Sangat Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio16_2" id="radio16_2" value="Baik"> Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio16_3" id="radio16_3" value="Cukup"> Cukup</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio16_4" id="radio16_4 " value="Kurang"> Kurang</label>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div><!--end formgroup C.1-->
<br>
<div class="formgroup"><!-- start formgroup C.2-->
<h6>2.	Kemampuan lulusan dalam melaporkan hasil pekerjaannya:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio17_1" id="radio17_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio17_2" id="radio17_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio17_3" id="radio17_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio17_4" id="radio17_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup C.2-->
<br>
<div class="formgroup"><!-- start formgroup C.3-->
<h6>3.	Kemampuan lulusan dalam mengoperasikan komputer / alat bantu modern / penggunaan teknologi informasi:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio18_1" id="radio18_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio18_2" id="radio18_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio18_3" id="radio18_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio18_4" id="radio18_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup C.3-->
<br>
<div class="formgroup"><!-- start formgroup C.4-->
<h6>4.	Kemampuan lulusan dalam menangani permasalahan:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio19_1" id="radio19_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio19_2" id="radio19_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio19_3" id="radio19_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio19_4" id="radio19_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup C.4-->
<br>
<div class="formgroup"><!-- start formgroup C.5-->
<h6>5.	Kemampuan lulusan dalam memenuhi segala aturan / petunjuk kerja:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio20_1" id="radio20_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio20_2" id="radio20_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio20_3" id="radio20_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio20_4" id="radio20_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup C.5-->
<br>
<div class="formgroup"><!-- start formgroup C.6-->
<h6>6.	Kemampuan lulusan dalam bekerja mandiri:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio21_1" id="radio21_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio21_2" id="radio21_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio21_3" id="radio21_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio21_4" id="radio21_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup C.6-->
<br>
<div class="formgroup"><!-- start formgroup C.7-->
<h6>7.	Kemampuan lulusan dalam memenuhi pekerjaan diluar pekerjaannya sendiri:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio22_1" id="radio22_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio22_2" id="radio22_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio22_3" id="radio22_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio22_4" id="radio22_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup C.7-->
<br>
<div class="formgroup"><!-- start formgroup C.8-->
<h6>8.	Kemampuan lulusan dalam mengerjakan pekerjaan sesuai bidang ilmu yang dimilikinya:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio23_1" id="radio23_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio23_2" id="radio23_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio23_3" id="radio23_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio23_4" id="radio23_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup C.8-->
<br>
<p style="font-size:24px">Komunikasi dan Adaptasi Lingkungan</p>
<div class="formgroup"><!-- start formgroup D.1-->
<h6>1.	Kemampuan lulusan dalam berkomunikasi dengan pimpinan:</h6>
<table width="80%">
  <tbody>
    <tr>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio24_1" id="radio24_1" value="Sangat Baik"> Sangat Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio24_2" id="radio24_2" value="Baik"> Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio24_3" id="radio24_3" value="Cukup"> Cukup</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio24_4" id="radio24_4 " value="Kurang"> Kurang</label>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div><!--end formgroup D.1-->
<br>
<div class="formgroup"><!-- start formgroup D.2-->
<h6>2.	Kemampuan lulusan dalam berkomunikasi dengan rekan kerja:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio25_1" id="radio25_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio25_2" id="radio25_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio25_3" id="radio25_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio25_4" id="radio25_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup D.2-->
<br>
<div class="formgroup"><!-- start formgroup D.3-->
<h6>3.	Kemampuan lulusan dalam berkomunikasi menggunakan bahasa asing:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio26_1" id="radio26_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio26_2" id="radio26_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio26_3" id="radio26_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio26_4" id="radio26_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup D.3-->
<br>
<div class="formgroup"><!-- start formgroup D.4-->
<h6>4.	Kemampuan lulusan dalam bekerja pada bagian / divisinya:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio27_1" id="radio27_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio27_2" id="radio27_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio27_3" id="radio27_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio27_4" id="radio27_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup D.4-->
<br>
<div class="formgroup"><!-- start formgroup D.5-->
<h6>5.	Integritas (etika dan moral) lulusan di tempat kerja:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio28_1" id="radio28_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio28_2" id="radio28_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio28_3" id="radio28_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio28_4" id="radio28_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup D.5-->
<br>
<p style="font-size:24px">Kerja Sama</p>
<div class="formgroup"><!-- start formgroup E.1-->
<h6>1.	Kemampuan lulusan dalam menyelesaikan pekerjaan rutin:</h6>
<table width="80%">
  <tbody>
    <tr>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio29_1" id="radio29_1" value="Sangat Baik"> Sangat Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio29_2" id="radio29_2" value="Baik"> Baik</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio29_3" id="radio29_3" value="Cukup"> Cukup</label>
        </div>
      </td>
      <td>
        <div class="radio">
          <label><input type="radio" name="radio29_4" id="radio29_4 " value="Kurang"> Kurang</label>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div><!--end formgroup E.1-->
<br>
<div class="formgroup"><!-- start formgroup E.2-->
<h6>2.	Kemampuan lulusan dalam membantu rekan kerja:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio30_1" id="radio30_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio30_2" id="radio30_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio30_3" id="radio30_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio30_4" id="radio30_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup E.2-->
<br>
<div class="formgroup"><!-- start formgroup E.3-->
<h6>3.	Kemampuan lulusan dalam menyelesaikan masalah tim:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio31_1" id="radio31_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio31_2" id="radio31_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio31_3" id="radio31_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio31_4" id="radio31_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup E.3-->
<br>
<div class="formgroup"><!-- start formgroup E.4-->
<h6>4.	Kemampuan lulusan dalam bekerjasama dalam tim:</h6>
<table width="80%">
<tbody>
  <tr>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio32_1" id="radio32_1" value="Sangat Baik"> Sangat Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio32_2" id="radio32_2" value="Baik"> Baik</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio32_3" id="radio32_3" value="Cukup"> Cukup</label>
      </div>
    </td>
    <td>
      <div class="radio">
        <label><input type="radio" name="radio32_4" id="radio32_4 " value="Kurang"> Kurang</label>
      </div>
    </td>
  </tr>
</tbody>
</table>
</div><!--end formgroup E.4-->
<p>
  <strong>Keterangan</strong>
  <br>
  Untuk <input type="radio" disabled> hanya ada satu pilihan
  <br>
  Untuk <input type="checkbox" disabled> bisa lebih dari satu pilihan
  <br>
</p>
<center><strong>Terima Kasih</strong></center>

<button class="btna btn-lg btn-primary btn-block btn-signin" id="btnSubmit" type="submit">Submit</button>
</div><!--end container-->
</div><!--end cardn-->
</div><!--end fullscreen_bg-->


@endsection

<style>
.fullscreen_bg {
    position: static;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: 50% 50%;
    /* background-image: url('assets/dist/img/background-1.jpg'); */
    background-repeat:repeat;
    overflow: auto;
  }
.card-container.cardn {
    /* margin-top: 10%; */
    max-width: 1000px;
    padding: 40px 40px;
}

.btna {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.cardn {
    background-color: rgba(230, 230, 230, 0.8);
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 100px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btna.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(87, 122, 255);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700px;
    font-size: 14px;
    height: 36px;
      width: 20%;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btna.btn-signin:hover,
.btna.btn-signin:active,
.btna.btn-signin:focus {
    background-color: rgb(27, 102, 255);
}

.forgot-password {
    color: rgb(87, 122, 255);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(27, 102, 255);
}
</style>

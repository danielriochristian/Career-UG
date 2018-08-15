@extends('Home2')
@section('tracer_alumni')
    <div id="fullscreen_bg" class="fullscreen_bg">
  <div class="cardn card-container">
  <div class="container">
      <center><h3>Survey Singkat Alumni</h3></center>
      <p class="text-justify">Career Center Universitas Gunadarma, mengadakan Survei mengenai “Profile Alumni”. Kuesioner studi pelacakan lulusan (graduate tracer study) ini ditujukan untuk mendapatkan gambaran tentang profil alumni dan menjaring umpan balik dari lulusan Universitas Gunadarma. Studi pelacakan ini juga sangat berguna untuk menggali informasi penting mengenai relevansi pendidikan tinggi dan dunia kerja, menyediakan informasi bagi pemangku kepentingan dan menjadi salah satu syarat kelengkapan akreditasi pendidikan tinggi. Kegiatan ini menjadi salah satu bukti upaya institusi untuk melakukan perbaikan yang berkelanjutan. Pada saat anda selesai mengisi kueioner dan mengirimkannya, sistem akan memberikan pemberitahuan atas partisipasi anda melalui email. Jika anda memerlukan penjelasan atau menemui masalah dalam pengisian studi pelacakan ini, mohon dapat menyampaikannya kepada kami melalui email: career@gunadarma.ac.id. Terima kasih atas kerjasama yang sudah diberikan.</p>
      <h4>Bagian 1 Identitas Alumni</h4>
      <h5><label for="exampleFormControlSelect1">Nama</label></h5>
    <div class="form-group">
      <input type="text" name="Nama" id="Nama" class="form-control input-lg" placeholder="Nama Lengkap" tabindex="1" style="width:50%">
    </div>
    <h5><label for="exampleFormControlSelect1">Tanggal Lahir</label></h5>
    <div class="form-group">
      <input type="date" name="Tanggal" id="tanggal_lahir" class="form-control input-lg" placeholder="Tanggal Lahir" tabindex="1" style="width:20%">
    </div>
    <h5><label for="exampleFormControlSelect1">Jenis Kelamin</label></h5>
    <div class="form-group">
      <select class="form-control" id="exampleFormControlSelect1" style="width:20%">
        <option>Jenis Kelamin</option>
        <option>Laki-laki</option>
        <option>Perempuan</option>
      </select>
    </div>
    <h5><label for="exampleFormControlSelect1">Alamat Sekarang</label></h5>
    <div class="form-group">
      <input type="text" name="Alamat" id="alamat" class="form-control input-lg" placeholder="Alamat Sekarang" tabindex="1">
    </div>
    <h5><label for="exampleFormControlSelect1">Alamat Tetap</label></h5>
    <div class="form-group">
      <input type="text" name="Alamat_tetap" id="alamat_tetap" class="form-control input-lg" placeholder="Alamat Tetap" tabindex="1">
    </div>
    <h5><label for="exampleFormControlSelect1">Telpon</label></h5>
    <div class="form-group">
      <input type="text" name="Telpon" id="telpon" class="form-control input-lg" placeholder="Telepon" tabindex="1" style="width:25%">
    </div>
    <h5><label for="exampleFormControlSelect1">Email</label></h5>
    <div class="form-group">
      <input type="text" name="Email" id="email" class="form-control input-lg" placeholder="Email" tabindex="1" style="width:30%">
    </div>
    <h5><label for="exampleFormControlSelect1">Program Study</label></h5>
    <div class="form-group">
      <select class="form-control" id="exampleFormControlSelect1" style="width:30%">
        <option>D3-Manajemen Informatika</option>
        <option>D3-Teknik Komputer</option>
        <option>S1-Sistem Informasi</option>
        <option>S1-Sistem Komputer</option>
        <option>S2-Magister Manajemen Sistem Informasi</option>
        <option>S2-Magister Manajemen</option>
        <option>S3-Doktor Ilmu Ekonomi</option>
        <option>S3-Doktor Teknologi Informasi</option>
      </select>
    </div>
    <h5><label for="exampleFormControlSelect1">Tahun Kelulusan</label></h5>
    <div class="form-group">
      <select class="form-control" id="exampleFormControlSelect1" style="width:15%">
        <option>2017</option>
        <option>2018</option>
      </select>
    </div>
    <br>
    <h4>Bagian 2 Tentang Pekerjaan</h4>
    <p>(Jika Anda tidak bekerja atau sedang mencari pekerjaan, langgsung ke BAGIAN 3)</p>
    <div class="form-group"> <!--start form 2.1-->
      <h5><label>1.	Informasi pekerjaan berasal dari (bisa lebih dari 1 pilihan)</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_1[]" value="Pengumuman lowongan pekerjaan pada surat kabar">Pengumuman lowongan pekerjaan pada surat kabar</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_1[]" value="Pengumuman di internet">Pengumuman di internet</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_1[]" value="Informasi internal perusahaan">Informasi internal perusahaan</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_1[]" value="Lamaran langsung ke prusahaan">Lamaran langsung ke prusahaan</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_1[]" value="Career center Universitas Gunadarma">Career center Universitas Gunadarma</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_1[]" value="Alumni">Alumni</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_1[]" value="Perusahaan / agen perekrut tenaga kerja">Perusahaan / agen perekrut tenaga kerja</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_1[]" value="Kontak personal/pribadi">Kontak personal/pribadi</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_1[]" value="Dinas tenaga kerja">Dinas tenaga kerja</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_1[]" value="Bursa kerja">Bursa kerja</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_1[]" value="Informasi teman">Informasi teman</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_1[]" value="Kerabat/keluarga">Kerabat/keluarga</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 2.1-->
    <br>
    <div class="form-group"> <!--start form 2.2-->
      <h5><label>2.	Waktu tunggu sampai mendapatkan pekerjaan pertama</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_2[]" value="Bekerja sebelum lulus">Bekerja sebelum lulus</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_2[]" value="Kurang 3 bulan">Kurang 3 bulan</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_2[]" value="Antara 3 sampai 6 bulan">Antara 3 sampai 6 bulan</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_2[]" value="Antara 7 sampai 9 bulan">Antara 7 sampai 9 bulan</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_2[]" value="10 sampai 12 bulan">10 sampai 12 bulan</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_2[]" value="13 sampai 18 bulan">13 sampai 18 bulan</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_2[]" value="19 sampai 24 bulan">19 sampai 24 bulan</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_2[]" value="Lebih dari 24 bulan">Lebih dari 24 bulan</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 2.2-->
    <br>
    <div class="form-group"> <!--start form 2.3-->
      <h5><label>3.	Jenis pekerjaan pertama</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_3[]" value="Staff">Staff</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_3[]" value="Management trainee">Management trainee</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_3[]" value="Supervisor">Supervisor</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_3[]" value="Manajerial">Manajerial</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_3[]" value="Wirausaha">Wirausaha</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_3[]" value="Lain-lainn">Lain-lain</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 2.3-->
    <br>
    <div class="form-group"> <!--start form 2.4-->
      <h5><label>4.	Status pekerjaan pertama</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_4[]" value="Bekerja penuh waktu">Bekerja penuh waktu</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_4[]" value="Bekerja paruh waktu">Bekerja paruh waktu</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_4[]" value="Bekerja kontrak semenstara">Bekerja kontrak semenstara</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_4[]" value="Tidak bekerja sedang mencari pekerjaan">Tidak bekerja sedang mencari pekerjaan</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_4[]" value="Wirausaha">Wirausaha</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_4[]" value="Tidak bekerja sedang mencari pekerjaan">Tidak bekerja sedang mencari pekerjaan</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 2.4-->
    <br>
    <div class="form-group"> <!--start form 2.5-->
      <h5><label>5.	Tingkat Gaji/pendapatann (x) (Rupiah/per bulan)</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_5[]" value="x < 1 juta">x < 1 juta</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_5[]" value="1 < x ≤ 2 juta">1 < x ≤ 2 juta</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_5[]" value="2 < x ≤ 3 juta">2 < x ≤ 3 juta</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_5[]" value="3 < x ≤ 4 juta">3 < x ≤ 4 juta</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_5[]" value="4 < x ≤ 5 juta">4 < x ≤ 5 juta</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_5[]" value="x > 5 juta">x > 5 juta</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 2.5-->
    <br>
    <div class="form-group"> <!--start form 2.6-->
      <h5><label>6.	Apakah pekerjaan saat ini merupakan pekerjaan pertama setelah lulus</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_6[]" value="Ya">Ya</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_6[]" value="Tidak">Tidak</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 2.6-->
    <br>
    <div class="form-group"> <!--start form 2.7-->
      <h5><label>7.	Bidang Pekerjaan saat ini</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Arsitek">Arsitek</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Sistem Informasi">Sistem Informasi</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Psikologi">Psikologi</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Teknik Komputer">Teknik Komputer</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Sistem Komputer">Sistem Komputer</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Asuransi">Asuransi</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Akuntansi">Akuntansi</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Teknik Informatika">Teknik Informatika</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Penerjemah">Penerjemah</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Manajemen Keuangan">Manajemen Keuangan</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Teknik Elektro">Teknik Elektro</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Ilmu Komunikasi">Ilmu Komunikasi</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Manajemen Pemasaran">Manajemen Pemasaran</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Teknik Mesin">Teknik Mesin</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Pajak">Pajak</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Manajemen Produksi">Manajemen Produksi</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Teknik Industri">Teknik Industri</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Psikologi Profesi">Psikologi Profesi</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Keuangan / Perbankan">Keuangan / Perbankan</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Teknik Sipil">Teknik Sipil</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Bidan">Bidan</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Manajemen SDN">Manajemen SDN</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Teknik Arsitektur">Teknik Arsitektur</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Broadcasting">Broadcasting</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Database Administrator">Database Administrator</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Internal Auditor">Internal Auditor</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Apoteker">Apoteker</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Database Designer">Database Designer</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Penjaminan Mutu">Penjaminan Mutu</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="E-Commerce Consultant">E-Commerce Consultant</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Penulis">Penulis</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Operator">Operator</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Wartawan">Wartawan</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Sistem Administrator">Sistem Administrator</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Guru">Guru</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_7[]" value="Lain-Lain">Lain-Lain</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 2.7-->
    <br>
    <div class="form-group"> <!--start form 2.8-->
      <h5><label>8.	Institusi tempat kerja</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_8[]" value="Industri manufaktur">Industri manufaktur</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_8[]" value="Industri keuangan / Perbankan">Industri keuangan / Perbankan</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_8[]" value="Pendidikan">Pendidikan</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_8[]" value="Lembaga Pemerintah/ PNS">Lembaga Pemerintah/ PNS</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_8[]" value="Wirausaha">Wirausaha</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_8[]" value="BUMN">BUMN</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_8[]" value="Industri Broadcasting">Industri Broadcasting</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_8[]" value="Rumah Sakit">Rumah Sakit</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 2.8-->
    <br>
    <div class="form-group"> <!--start form 2.9-->
      <h5><label>9.	Berapa lama (x) saudara sudah bekerja di tempat kerja saat ini?</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_9[]" value="x < 1 tahun">x < 1 tahun</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_9[]" value="1 < x ≤ 2 tahun">1 < x ≤ 2 tahun</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_9[]" value="2 < x ≤ 3 tahun">2 < x ≤ 3 tahun</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_9[]" value="3 < x ≤ 4 tahun">3 < x ≤ 4 tahun</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_9[]" value="4 < x ≤ 5 tahun">4 < x ≤ 5 tahun</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_9[]" value="x > 5 tahun">x > 5 tahun</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 2.9-->
    <br>
    <div class="form-group"> <!--start form 2.10-->
      <h5><label>10.	Tingkat Gaji/pendapatann (x) (Rupiah/per bulan) saat ini</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_10[]" value="x < 1 juta">x < 1 juta</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_10[]" value="1 < x ≤ 2 juta">1 < x ≤ 2 juta</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_10[]" value="2 < x ≤ 3 juta">2 < x ≤ 3 juta</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_10[]" value="3 < x ≤ 4 juta">3 < x ≤ 4 juta</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_10[]" value="4 < x ≤ 5 juta">4 < x ≤ 5 juta</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_10[]" value="5 < x ≤ 6 juta">5 < x ≤ 6 juta</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_10[]" value="6 < x ≤ 7 juta">6 < x ≤ 7 juta</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_10[]" value="7 < x ≤ 8 juta">7 < x ≤ 8 juta</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_10[]" value="8 < x ≤ 9 juta">8 < x ≤ 9 juta</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_10[]" value="x > 9 juta">x > 9 juta</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 2.10-->
    <br>
    <div class="form-group"> <!--start form 2.11-->
      <h5><label>11.	Jumlah karyawan (x) di tempat kerja saat ini</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_11[]" value="x < 20 orang">x < 20 orang</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_11[]" value="20 < x ≤ 100">20 < x ≤ 100</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_11[]" value="100 < x ≤ 300">100 < x ≤ 300</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_11[]" value="300 < x ≤ 500">300 < x ≤ 500</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_11[]" value="500 < x ≤ 1000">500 < x ≤ 1000</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="ask_11[]" value="x > 1000">x > 1000</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 2.11-->
    <br>
    <div class="form-group"><!--formgroup 2.12-->
        <h5><label>12.	Berikan peniliaian tingkat kepentingan kompetensi berikut dalam bidang pekerjaan Anda saat ini
        <br>
        TP: tidak penting, KP: kurang penting, B:biasa, P: penting, SP: sangat penting
      </label><h5>
        <table width="80%" class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Kompetensi</th>
              <th>TP</th>
              <th>KP</th>
              <th>B</th>
              <th>P</th>
              <th>SP</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>Intergritas (etika dan moral)</td>
              <td><input type="radio" name="radio10_1" id="radio10_1" value="tp"></td>
              <td><input type="radio" name="radio10_1" id="radio10_1" value="kp"></td>
              <td><input type="radio" name="radio10_1" id="radio10_1" value="b"></td>
              <td><input type="radio" name="radio10_1" id="radio10_1" value="p"></td>
              <td><input type="radio" name="radio10_1" id="radio10_1" value="sp"></td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Keahlian berdasarkan bidang ilmu (profesionalisme)</td>
              <td><input type="radio" name="radio10_2" id="radio10_2" value="tp"></td>
              <td><input type="radio" name="radio10_2" id="radio10_2" value="kp"></td>
              <td><input type="radio" name="radio10_2" id="radio10_2" value="b"></td>
              <td><input type="radio" name="radio10_2" id="radio10_2" value="p"></td>
              <td><input type="radio" name="radio10_2" id="radio10_2" value="sp"></td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Bahasa Inggris</td>
              <td><input type="radio" name="radio10_3" id="radio10_3" value="tp"></td>
              <td><input type="radio" name="radio10_3" id="radio10_3" value="kp"></td>
              <td><input type="radio" name="radio10_3" id="radio10_3" value="b"></td>
              <td><input type="radio" name="radio10_3" id="radio10_3" value="p"></td>
              <td><input type="radio" name="radio10_3" id="radio10_3" value="sp"></td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Penggunaan Teknologi Informasi</td>
              <td><input type="radio" name="radio10_4" id="radio10_4" value="tp"></td>
              <td><input type="radio" name="radio10_4" id="radio10_4" value="kp"></td>
              <td><input type="radio" name="radio10_4" id="radio10_4" value="b"></td>
              <td><input type="radio" name="radio10_4" id="radio10_4" value="p"></td>
              <td><input type="radio" name="radio10_4" id="radio10_4" value="sp"></td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Kemampuan Komunikasi</td>
              <td><input type="radio" name="radio10_5" id="radio10_5" value="tp"></td>
              <td><input type="radio" name="radio10_5" id="radio10_5" value="kp"></td>
              <td><input type="radio" name="radio10_5" id="radio10_5" value="b"></td>
              <td><input type="radio" name="radio10_5" id="radio10_5" value="p"></td>
              <td><input type="radio" name="radio10_5" id="radio10_5" value="sp"></td>
            </tr>
            <tr>
              <td>6.</td>
              <td>Kerjasama Tim</td>
              <td><input type="radio" name="radio10_6" id="radio10_6" value="tp"></td>
              <td><input type="radio" name="radio10_6" id="radio10_6" value="kp"></td>
              <td><input type="radio" name="radio10_6" id="radio10_6" value="b"></td>
              <td><input type="radio" name="radio10_6" id="radio10_6" value="p"></td>
              <td><input type="radio" name="radio10_6" id="radio10_6" value="sp"></td>
            </tr>
            <tr>
              <td>7.</td>
              <td>Kewirausahaan</td>
              <td><input type="radio" name="radio10_7" id="radio10_7" value="tp"></td>
              <td><input type="radio" name="radio10_7" id="radio10_7" value="kp"></td>
              <td><input type="radio" name="radio10_7" id="radio10_7" value="b"></td>
              <td><input type="radio" name="radio10_7" id="radio10_7" value="p"></td>
              <td><input type="radio" name="radio10_7" id="radio10_7" value="sp"></td>
            </tr>
            <tr>
              <td>8.</td>
              <td>Pemecahan Masalah</td>
              <td><input type="radio" name="radio10_8" id="radio10_8" value="tp"></td>
              <td><input type="radio" name="radio10_8" id="radio10_8" value="kp"></td>
              <td><input type="radio" name="radio10_8" id="radio10_8" value="b"></td>
              <td><input type="radio" name="radio10_8" id="radio10_8" value="p"></td>
              <td><input type="radio" name="radio10_8" id="radio10_8" value="sp"></td>
            </tr>
            <tr>
              <td>9.</td>
              <td>Hubungan Antar Manusia (human relation)</td>
              <td><input type="radio" name="radio10_9" id="radio10_9" value="tp"></td>
              <td><input type="radio" name="radio10_9" id="radio10_9" value="kp"></td>
              <td><input type="radio" name="radio10_9" id="radio10_9" value="b"></td>
              <td><input type="radio" name="radio10_9" id="radio10_9" value="p"></td>
              <td><input type="radio" name="radio10_9" id="radio10_9" value="sp"></td>
            </tr>
            <tr>
              <td>10.</td>
              <td>Pengembangan diri</td>
              <td><input type="radio" name="radio10_10" id="radio10_10" value="tp"></td>
              <td><input type="radio" name="radio10_10" id="radio10_10" value="kp"></td>
              <td><input type="radio" name="radio10_10" id="radio10_10" value="b"></td>
              <td><input type="radio" name="radio10_10" id="radio10_10" value="p"></td>
              <td><input type="radio" name="radio10_10" id="radio10_10" value="sp"></td>
            </tr>
            <tr>
              <td>11.</td>
              <td>Kemampuan bekerja mandiri</td>
              <td><input type="radio" name="radio10_11" id="radio10_11" value="tp"></td>
              <td><input type="radio" name="radio10_11" id="radio10_11" value="kp"></td>
              <td><input type="radio" name="radio10_11" id="radio10_11" value="b"></td>
              <td><input type="radio" name="radio10_11" id="radio10_11" value="p"></td>
              <td><input type="radio" name="radio10_11" id="radio10_11" value="sp"></td>
            </tr>
            <tr>
              <td>12.</td>
              <td>Kepemimpinan/Kemampuan Berorganisasi</td>
              <td><input type="radio" name="radio10_12" id="radio10_12" value="tp"></td>
              <td><input type="radio" name="radio10_12" id="radio10_12" value="kp"></td>
              <td><input type="radio" name="radio10_12" id="radio10_12" value="b"></td>
              <td><input type="radio" name="radio10_12" id="radio10_12" value="p"></td>
              <td><input type="radio" name="radio10_12" id="radio10_12" value="sp"></td>
            </tr>
            <tr>
              <td>13.</td>
              <td>Kemampuan menulis</td>
              <td><input type="radio" name="radio10_13" id="radio10_13" value="tp"></td>
              <td><input type="radio" name="radio10_13" id="radio10_13" value="kp"></td>
              <td><input type="radio" name="radio10_13" id="radio10_13" value="b"></td>
              <td><input type="radio" name="radio10_13" id="radio10_13" value="p"></td>
              <td><input type="radio" name="radio10_13" id="radio10_13" value="sp"></td>
            </tr>
            <tr>
              <td>14.</td>
              <td>Bekerja di bawah tekanan</td>
              <td><input type="radio" name="radio10_14" id="radio10_14" value="tp"></td>
              <td><input type="radio" name="radio10_14" id="radio10_14" value="kp"></td>
              <td><input type="radio" name="radio10_14" id="radio10_14" value="b"></td>
              <td><input type="radio" name="radio10_14" id="radio10_14" value="p"></td>
              <td><input type="radio" name="radio10_14" id="radio10_14" value="sp"></td>
            </tr>
          </tbody>
        </table>
    </div><!--/end formgroup 2.12-->
    <br>
    <div class="form-group">  <!--start formgroup 2.13-->
      <h5><label>13.	Bagaimana Anda menilai kualifikasi untuk melaksanakan pekerjaan saat ini</label><h5>
        <table width="80%" class="table">
          <tbody>
            <tr>
              <td>1.</td>
              <td>Kualifikasi dalam pekerjaan</td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio11_1" id="radio11_1" value="Over Qualified">Over Qualified</label>
                </div>
              </td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio11_1" id="radio11_1" value="Qualified">Qualified</label>
                </div>
              </td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio11_1" id="radio11_1" value="Under Qualified">Under Qualified</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Kesesuaian bidang ilmu dengan pekerjaan saat ini</td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio11_2" id="radio11_2" value="Over Qualified">Over Qualified</label>
                </div>
              </td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio11_2" id="radio11_2" value="Qualified">Qualified</label>
                </div>
              </td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio11_2" id="radio11_2" value="Under Qualified">Under Qualified</label>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
    </div><!--/end formgroup 2.13-->
    <br>
    <div class="form-group"><!--formgroup 2.14-->
        <h5><label>14. Tingkat perhatian institusi terhadap aspek kompetensi berikut pada saat kuliah
        <br>
        SK: sangat kurang, K: kurang, C: cukup, LC: Lebih dari cukup, SM: sangat memadai
      </label><h5>
        <table width="80%" class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Kompetensi</th>
              <th>SK</th>
              <th>K</th>
              <th>C</th>
              <th>LC</th>
              <th>SM</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>Intergritas (etika dan moral)</td>
              <td><input type="radio" name="radio12_1" id="radio12_1" value="sk"></td>
              <td><input type="radio" name="radio12_1" id="radio12_1" value="k"></td>
              <td><input type="radio" name="radio12_1" id="radio12_1" value="c"></td>
              <td><input type="radio" name="radio12_1" id="radio12_1" value="lc"></td>
              <td><input type="radio" name="radio12_1" id="radio12_1" value="sm"></td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Keahlian berdasarkan bidang ilmu (profesionalisme)</td>
              <td><input type="radio" name="radio12_2" id="radio12_2" value="sk"></td>
              <td><input type="radio" name="radio12_2" id="radio12_2" value="k"></td>
              <td><input type="radio" name="radio12_2" id="radio12_2" value="c"></td>
              <td><input type="radio" name="radio12_2" id="radio12_2" value="lc"></td>
              <td><input type="radio" name="radio12_2" id="radio12_2" value="sm"></td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Bahasa Inggris</td>
              <td><input type="radio" name="radio12_3" id="radio12_3" value="sk"></td>
              <td><input type="radio" name="radio12_3" id="radio12_3" value="k"></td>
              <td><input type="radio" name="radio12_3" id="radio12_3" value="c"></td>
              <td><input type="radio" name="radio12_3" id="radio12_3" value="lc"></td>
              <td><input type="radio" name="radio12_3" id="radio12_3" value="sm"></td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Penggunaan Teknologi Informasi</td>
              <td><input type="radio" name="radio12_4" id="radio12_4" value="sk"></td>
              <td><input type="radio" name="radio12_4" id="radio12_4" value="k"></td>
              <td><input type="radio" name="radio12_4" id="radio12_4" value="c"></td>
              <td><input type="radio" name="radio12_4" id="radio12_4" value="lc"></td>
              <td><input type="radio" name="radio12_4" id="radio12_4" value="sm"></td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Kemampuan Komunikasi</td>
              <td><input type="radio" name="radio12_5" id="radio12_5" value="sk"></td>
              <td><input type="radio" name="radio12_5" id="radio12_5" value="k"></td>
              <td><input type="radio" name="radio12_5" id="radio12_5" value="c"></td>
              <td><input type="radio" name="radio12_5" id="radio12_5" value="lc"></td>
              <td><input type="radio" name="radio12_5" id="radio12_5" value="sm"></td>
            </tr>
            <tr>
              <td>6.</td>
              <td>Kerjasama Tim</td>
              <td><input type="radio" name="radio12_6" id="radio12_6" value="sk"></td>
              <td><input type="radio" name="radio12_6" id="radio12_6" value="k"></td>
              <td><input type="radio" name="radio12_6" id="radio12_6" value="c"></td>
              <td><input type="radio" name="radio12_6" id="radio12_6" value="lc"></td>
              <td><input type="radio" name="radio12_6" id="radio12_6" value="sm"></td>
            </tr>
            <tr>
              <td>7.</td>
              <td>Kewirausahaan</td>
              <td><input type="radio" name="radio12_7" id="radio12_7" value="sk"></td>
              <td><input type="radio" name="radio12_7" id="radio12_7" value="k"></td>
              <td><input type="radio" name="radio12_7" id="radio12_7" value="c"></td>
              <td><input type="radio" name="radio12_7" id="radio12_7" value="lc"></td>
              <td><input type="radio" name="radio12_7" id="radio12_7" value="sm"></td>
            </tr>
            <tr>
              <td>8.</td>
              <td>Pemecahan Masalah</td>
              <td><input type="radio" name="radio12_8" id="radio12_8" value="sk"></td>
              <td><input type="radio" name="radio12_8" id="radio12_8" value="k"></td>
              <td><input type="radio" name="radio12_8" id="radio12_8" value="c"></td>
              <td><input type="radio" name="radio12_8" id="radio12_8" value="lc"></td>
              <td><input type="radio" name="radio12_8" id="radio12_8" value="sm"></td>
            </tr>
            <tr>
              <td>9.</td>
              <td>Hubungan Antar Manusia (human relation)</td>
              <td><input type="radio" name="radio12_9" id="radio12_9" value="sk"></td>
              <td><input type="radio" name="radio12_9" id="radio12_9" value="k"></td>
              <td><input type="radio" name="radio12_9" id="radio12_9" value="c"></td>
              <td><input type="radio" name="radio12_9" id="radio12_9" value="lc"></td>
              <td><input type="radio" name="radio12_9" id="radio12_9" value="sm"></td>
            </tr>
            <tr>
              <td>10.</td>
              <td>Pengembangan diri</td>
              <td><input type="radio" name="radio12_10" id="radio12_10" value="sk"></td>
              <td><input type="radio" name="radio12_10" id="radio12_10" value="k"></td>
              <td><input type="radio" name="radio12_10" id="radio12_10" value="c"></td>
              <td><input type="radio" name="radio12_10" id="radio12_10" value="lc"></td>
              <td><input type="radio" name="radio12_10" id="radio12_10" value="sm"></td>
            </tr>
            <tr>
              <td>11.</td>
              <td>Kemampuan bekerja mandiri</td>
              <td><input type="radio" name="radio12_11" id="radio12_11" value="sk"></td>
              <td><input type="radio" name="radio12_11" id="radio12_11" value="k"></td>
              <td><input type="radio" name="radio12_11" id="radio12_11" value="c"></td>
              <td><input type="radio" name="radio12_11" id="radio12_11" value="lc"></td>
              <td><input type="radio" name="radio12_11" id="radio12_11" value="sm"></td>
            </tr>
            <tr>
              <td>12.</td>
              <td>Kepemimpinan/Kemampuan Berorganisasi</td>
              <td><input type="radio" name="radio12_12" id="radio12_12" value="sk"></td>
              <td><input type="radio" name="radio12_12" id="radio12_12" value="k"></td>
              <td><input type="radio" name="radio12_12" id="radio12_12" value="c"></td>
              <td><input type="radio" name="radio12_12" id="radio12_12" value="lc"></td>
              <td><input type="radio" name="radio12_12" id="radio12_12" value="sm"></td>
            </tr>
            <tr>
              <td>13.</td>
              <td>Kemampuan menulis</td>
              <td><input type="radio" name="radio12_13" id="radio12_13" value="sk"></td>
              <td><input type="radio" name="radio12_13" id="radio12_13" value="k"></td>
              <td><input type="radio" name="radio12_13" id="radio12_13" value="c"></td>
              <td><input type="radio" name="radio12_13" id="radio12_13" value="lc"></td>
              <td><input type="radio" name="radio12_13" id="radio12_13" value="sm"></td>
            </tr>
            <tr>
              <td>14.</td>
              <td>Bekerja di bawah tekanan</td>
              <td><input type="radio" name="radio12_14" id="radio12_14" value="sk"></td>
              <td><input type="radio" name="radio12_14" id="radio12_14" value="k"></td>
              <td><input type="radio" name="radio12_14" id="radio12_14" value="c"></td>
              <td><input type="radio" name="radio12_14" id="radio12_14" value="lc"></td>
              <td><input type="radio" name="radio12_14" id="radio12_14" value="sm"></td>
            </tr>
          </tbody>
        </table>
    </div><!--/end formgroup 2.14-->
    <br>
    <h4>Bagian 3 Alumni Tidak Bekerja / Mencari Pekerjaan</h4>
    <div class="form-group"> <!--start form 3.1-->
      <h5><label>1. Kegiatan Anda Saat ini (bisa lebih dari 1 pilihan)</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_15[]" value="Tidak bekerja dan tidak mencari pekerjaan">Tidak bekerja dan tidak mencari pekerjaan</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_15[]" value="Sedang mencari pekerjaan">Sedang mencari pekerjaan</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_15[]" value="Mengurus rumah tangga">Mengurus rumah tangga</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_15[]" value="Melanjutkan studi">Melanjutkan studi</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div> <!-- end formgroup 3.1-->
    <br>
    <div class="form-group"> <!--start form 3.2-->
      <h5><label>2.	Bagi yang sedang mencari pekerjaan, informasi pekerjaan berasal dari (bisa lebih dari 1 pilihan)</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_16[]" value="Pengumuman lowongan pekerjaan pada surat kabar">Pengumuman lowongan pekerjaan pada surat kabar</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_16[]" value="Pengumuman di internet">Pengumuman di internet</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_16[]" value="Informasi internal perusahaan">Informasi internal perusahaan</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_16[]" value="Lamaran langsung ke prusahaan">Lamaran langsung ke prusahaan</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_16[]" value="Career center Universitas Gunadarma">Career center Universitas Gunadarma</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_16[]" value="Alumni">Alumni</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_16[]" value="Perusahaan / agen perekrut tenaga kerja">Perusahaan / agen perekrut tenaga kerja</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_16[]" value="Kontak personal/pribadi">Kontak personal/pribadi</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_16[]" value="Dinas tenaga kerja">Dinas tenaga kerja</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_16[]" value="Bursa kerja">Bursa kerja</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_16[]" value="Informasi teman">Informasi teman</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_16[]" value="Kerabat / Keluarga">Kerabat / Keluarga</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div> <!-- end formgroup 3.2-->
    <br>
    <div class="form-group"> <!--start form 3.3-->
      <h5><label>3.	Jumlah lamaran kerja yang pernah dikirimkan sampai saat ini</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="radio13" value="≤ 5"> ≤ 5</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="radio13" value="11-15">11-15</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="radio13" value="6-10">6-10</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="radio13" value="16-20">16-20</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="radio13" value="21- 25">21- 25</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="radio13" value=">25"> >25</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 3.3-->
    <br>
    <div class="form-group"> <!--start form 3.4-->
      <h5><label>4.	Jumlah lamaran kerja yang mendapatkan respon</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="radio14" value="≤ 5"> ≤ 5</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="radio14" value="11-15">11-15</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="radio14" value="6-10">6-10</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="radio14" value="16-20">16-20</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="radio14" value="21- 25">21- 25</label>
              </div>
            </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="radio14" value=">25"> >25</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!--end form 3.4-->
    <br>
    <div class="form-group"> <!--start form 3.5-->
      <h5><label>5.	Sumber biaya hidup selama tidak bekerja</label><h5>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_19[]" value="Tabungan"> Tabungan</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_19[]" value="Pinjaman"> Pinjaman</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_19[]" value="Keluarga"> Keluarga</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_19[]" value="Sumber lainnya"> Sumber Lainnya</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div> <!-- end formgroup 3.5-->
    <br>
    <div class="form-group"><!--formgroup 3.6-->
        <h5><label>6. Berikan opini Anda perlunya kegiatan berikut untuk membantu mendapatkan pekerjaan.Isi sebanyak yang anda lakukan.
        <br>
        TP: tidak penting, KP: kurang penting, B:biasa, P: penting, SP: sangat penting
      </label><h5>
        <table width="80%" class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Kegiatan</th>
              <th>TP</th>
              <th>KP</th>
              <th>B</th>
              <th>P</th>
              <th>SP</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>Membuat lamaran pekerjaan</td>
              <td><input type="radio" name="radio15_1" id="radio15_1" value="tp"></td>
              <td><input type="radio" name="radio15_1" id="radio15_1" value="kp"></td>
              <td><input type="radio" name="radio15_1" id="radio15_1" value="b"></td>
              <td><input type="radio" name="radio15_1" id="radio15_1" value="p"></td>
              <td><input type="radio" name="radio15_1" id="radio15_1" value="sp"></td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Mengunjungi Bursa Kerja</td>
              <td><input type="radio" name="radio15_2" id="radio15_2" value="tp"></td>
              <td><input type="radio" name="radio15_2" id="radio15_2" value="kp"></td>
              <td><input type="radio" name="radio15_2" id="radio15_2" value="b"></td>
              <td><input type="radio" name="radio15_2" id="radio15_2" value="p"></td>
              <td><input type="radio" name="radio15_2" id="radio15_2" value="sp"></td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Kursus Bahasa Inggris</td>
              <td><input type="radio" name="radio15_3" id="radio15_3" value="tp"></td>
              <td><input type="radio" name="radio15_3" id="radio15_3" value="kp"></td>
              <td><input type="radio" name="radio15_3" id="radio15_3" value="b"></td>
              <td><input type="radio" name="radio15_3" id="radio15_3" value="p"></td>
              <td><input type="radio" name="radio15_3" id="radio15_3" value="sp"></td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Mengikuti Bimbingan Karir</td>
              <td><input type="radio" name="radio15_4" id="radio15_4" value="tp"></td>
              <td><input type="radio" name="radio15_4" id="radio15_4" value="kp"></td>
              <td><input type="radio" name="radio15_4" id="radio15_4" value="b"></td>
              <td><input type="radio" name="radio15_4" id="radio15_4" value="p"></td>
              <td><input type="radio" name="radio15_4" id="radio15_4" value="sp"></td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Belajar membuat riwayat hidup</td>
              <td><input type="radio" name="radio15_5" id="radio15_5" value="tp"></td>
              <td><input type="radio" name="radio15_5" id="radio15_5" value="kp"></td>
              <td><input type="radio" name="radio15_5" id="radio15_5" value="b"></td>
              <td><input type="radio" name="radio15_5" id="radio15_5" value="p"></td>
              <td><input type="radio" name="radio15_5" id="radio15_5" value="sp"></td>
            </tr>
            <tr>
              <td>6.</td>
              <td>Belajar teknik wawancara kerja</td>
              <td><input type="radio" name="radio15_6" id="radio15_6" value="tp"></td>
              <td><input type="radio" name="radio15_6" id="radio15_6" value="kp"></td>
              <td><input type="radio" name="radio15_6" id="radio15_6" value="b"></td>
              <td><input type="radio" name="radio15_6" id="radio15_6" value="p"></td>
              <td><input type="radio" name="radio15_6" id="radio15_6" value="sp"></td>
            </tr>
            <tr>
              <td>7.</td>
              <td>Kursus keterampilan</td>
              <td><input type="radio" name="radio15_7" id="radio15_7" value="tp"></td>
              <td><input type="radio" name="radio15_7" id="radio15_7" value="kp"></td>
              <td><input type="radio" name="radio15_7" id="radio15_7" value="b"></td>
              <td><input type="radio" name="radio15_7" id="radio15_7" value="p"></td>
              <td><input type="radio" name="radio15_7" id="radio15_7" value="sp"></td>
            </tr>
            <tr>
              <td>8.</td>
              <td>Menghubungi career center</td>
              <td><input type="radio" name="radio15_8" id="radio15_8" value="tp"></td>
              <td><input type="radio" name="radio15_8" id="radio15_8" value="kp"></td>
              <td><input type="radio" name="radio15_8" id="radio15_8" value="b"></td>
              <td><input type="radio" name="radio15_8" id="radio15_8" value="p"></td>
              <td><input type="radio" name="radio15_8" id="radio15_8" value="sp"></td>
            </tr>
          </tbody>
        </table>
    </div><!--/end formgroup 3.6-->
    <br>
    <h4>Bagian 4 Himpunan Alumni</h4>
    <div class="form-group">  <!--start formgroup 4.1-->
      <h6><label>Pertanyaan terkait himpunan Alumni</label><h6>
        <table width="80%" class="table">
          <tbody>
            <tr>
              <td>1.</td>
              <td>Apakah anda merupakan anggota aktif dari Ikatan Alumni Gunadarma (IKADARMA)?</td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio16" id="radio16" value="ya">Ya</label>
                </div>
              </td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio16" id="radio16" value="tidak">Tidak</label>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="6">Kontribusi yang pernah diberikan melalui himpunan alumni </td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Sumbangan dana</td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio17" id="radio17" value="ya">Ya</label>
                </div>
              </td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio17" id="radio17" value="tidak">Tidak</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Fasilitas (alat - buku)</td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio18" id="radio18" value="ya">Ya</label>
                </div>
              </td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio18" id="radio18" value="tidak">Tidak</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Terlibat dalam kegiatan akademik</td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio19" id="radio19" value="ya">Ya</label>
                </div>
              </td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio19" id="radio19" value="tidak">Tidak</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Terlibat dalam kegiatan non akademik</td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio20" id="radio20" value="ya">Ya</label>
                </div>
              </td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio20" id="radio20" value="tidak">Tidak</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>6.</td>
              <td>Membangun jejaring dengan universitas</td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio21" id="radio21" value="ya">Ya</label>
                </div>
              </td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="radio21" id="radio21" value="tidak">Tidak</label>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
    </div><!--/end formgroup 4.1-->
    <br>
    <h4>Bagian 5 Saran</h4>
    <div class="form-group"> <!--start form 5.1-->
      <h6><label>Berdasarkan pengalaman pada pekerjaan Anda saat ini, apa saran yang anda berikan untuk peningkatan kualitas pembelajaran di Universitas Gunadarma?</label><h6>
      <table width="80%">
        <tbody>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_27[]" value="Penambahan bahan pustaka"> Penambahan bahan pustaka</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_27[]" value="Bahan kuliah yang lebih kini"> Bahan kuliah yang lebih kini</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_27[]" value="Pengembangan softskill"> Pengembangan softskill</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_27[]" value="Peningkatan kualitas SDM"> Peningkatan kualitas SDM</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_27[]" value="Menjaga rasio dosen: mahasiswa yang ideal"> Menjaga rasio dosen: mahasiswa yang ideal</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_27[]" value="Peningkatan sarana / prasarana"> Peningkatan sarana / prasarana</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_27[]" value="Bimbingan karir"> Bimbingan karir</label>
              </div>
            </td>
            <td>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="ask_27[]" value="Membangun jejaring dengan industri"> Membangun jejaring dengan industri</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div> <!-- end formgroup 5.1-->
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
      </form><!-- /form -->
  </div><!-- /card-container -->
</div>
</div>
</div>

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

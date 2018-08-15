@extends ('Home2')
@section ('Cv')
<header>
	<div class="header">
		<div class="logo">
			<h1><a href="index.html">CURRICULUM VITAE!</a></h1>
		</div>
	</div>
</header>
<section id="profil">
	<div class="badan">
		<div class="foto">
			<img src="{{url('assets/dist/img/profil.jpg')}}" class="fprofil" alt="Foto profil" width="300" height="300">
		</div>
		<div class="info">
			<h3><span>Profil</span></h3>
			<table cellspacing="0" cellpadding="0" border="0" width="700">
				<tr>
					<td width="30%" class="prt" style="color:#ffffff;">
						<ul>
							<li>Objective</li>
							<li>Age</li>
							<li>Major</li>
							<li>Graduate date</li>
							<li>Tinggi</li>
							<li>Email</li>
						</ul>
					</td>
					<td width="70%" class="kdw" style="color:#ffffff;">
						<ul>
							<li>Al-Fatih</li>
							<li>28 yeard old</li>
							<li>Teknik Informatika</li>
							<li>December, 16 2013</li>
							<li>176CM</li>
							<li>suhada.fatih@gmail.com</li>
						</ul>
					</td>
				</tr>
			</table>
		</div>
	</div>
</section>
<section id="pendidikan" bgcolor="#fff">
	<div class="putih">
		<div class="badan">
			<div class="judul">
				<h2><span>Pendidikan</span></h2>
			</div>
			<div class="isi">
				<ol>
					<li>
						<label>SD Negeri 1</label>
						<ul>
							<li>2004-2010</li>
						</ul>
					</li>
					<li>
						<label>SMP Negeri 2</label>
						<ul>
							<li>2010-2013</li>
						</ul>
					</li>
					<li>
						<label>SMK Komputer</label>
						<ul>
							<li>Teknik Komputer & Jaringan</li>
							<li>2013-2016</li>
						</ul>
					</li>
					<li>
						<label>Universitas Gunadarma</label>
						<ul>
							<li>S1 Informatika</li>
							<li>2016-Sekarang</li>
						</ul>
					</li>
				</ol>
			</div>
		</div>
	</div>
</section>
<section id="skill">
	<div class="putih">
		<div class="badan">
			<div class="judul">
				<h2><span>Keahlian</span></h2>
			</div>
			<ul>
				<li>
					<h4>Office</h4>
					<div class="fill"></div>
					<div class="data" style="width: 820px"></div>
					<label>Microsoft Office, LibreOffice, WPS Office</label>
				</li>
				<li>
					<h4>Jaringan</h4>
					<div class="fill"></div>
					<div class="data" style="width: 720px"></div>
					<label>Cisco, MikroTik, TP-Link, Alcatel, Linux</label>
				</li>
				<li>
					<h4>Pemrograman</h4>
					<div class="fill"></div>
					<div class="data" style="width: 880px"></div>
					<label>CSS, PHP, JS, Aspx, C#, C++, C, HTML</label>
				</li>
				<li>
					<h4>Multimedia</h4>
					<div class="fill"></div>
					<div class="data" style="width: 600px"></div>
					<label>Photoshop, CorelDraw, Illustrator, Fireworks, Camtasia, After Effects</label>
				</li>
			</ul>
		</div>
	</div>
</section>
<section id="kontak">
		<div class="badan">
			<div class="judul">
				<h2><span>Kontak</span></h2>
			</div>
			<form action="" method="post" class="zom">
				<div class="zom">
					<div class="kiri">
						<input type="text" class="text" name="author" placeholder="Nama Lengkap">
						<input type="email" class="text" name="email" placeholder="Email" value="">
						<input type="url" class="text" name="url" placeholder="Website" value="">
						<input type="text" class="text" name="phone" placeholder="Nomor Telfon" value="">
					</div>
					<div class="kanan">
						<textarea rows="9" cols="" class="text" name="comment" placeholder=""></textarea>
					</div>
				</div>
				<p class="kirim">
            		<div class="tombol">
            			<div class="bar"></div>
           				<a href="profil.html">KIRIM</a>
      				</div>
				</p>
			</form>
		</div>
</section>
@endsection
<style>
body {
	background:#000000;
	color:#fff;
	margin:0;
	font-family:"Segoe UI";
	overflow:auto;
	min-width: 1280px;
}

header {
	padding-bottom: 20px;
	margin-top: 5%;
}
textarea {
	font-family:"Segoe UI";
	height: 207px;
	resize: none;
	text-align: justify;
}
h2 {
	letter-spacing: 1.2px;
	font-weight: 400;
	font-size: 26pt;
}
.header {
	position: absolute;
	z-index: 999;
	color: #474747;
	background: #474747;
	border-bottom: 5px solid #a8a7a7;
	right:0;
	left: 0;
	padding: 15px 20px;
	box-shadow: 0 0 4px rgba(0,0,0,0.3);
}
@keyframes logo {
	0% {
		transform: translateX(-400px);
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}
.header .logo {
	float: left;
	animation: logo 0.2s ease;
}

.header .logo h1 {
	margin: 0;
	font-weight: 600;
	padding: 0;
	font-size: 26px;
	line-height: 1;
	letter-spacing: -1.2px;
}
.header .logo h1 a {
	color: #fff;
	background: #474747;
	padding: 12px 15px;
	display: block;
	text-decoration: none;
	transition: color 0.2s ease-in-out, background 0.4s ease-in-out;
}
.header .logo h1 a:hover {
	background: #474747;
	color: #fff
}
.header .menu {
	float: right;
}

.header .menu  ul {
	margin: 0;
	padding: 0;
	margin-right: 10px;
}
@keyframes menu {
	0%{
		transform: scale(0);
	}
	100%{
		transform: scale(1);
	}
}
.header .menu ul li {
	list-style:none;
	transition: all 0.3s ease-in-out;
	float: left;
	margin-left: 5px;
	animation: menu 0.5s ease
}
.header .menu ul li a img {
	width: 30px;
	transition: all 0.2s ease;
}
.header .menu ul li a {
	padding: 10px;
	display: block;
	text-decoration: none;
	color: #fff;
	line-height: 1;
	border-radius: 100px;
	transition: background 0.3s ease-in-out;
}
.header .menu ul li:hover a,.header .menu ul li .act {
	color: #000;
	background: #91B54D;
}
.header .menu ul li label {
	padding: 5px 10px;
	position: absolute;
	background:transparent;
	margin-top: -40px;
	border-radius: 3px;
	font-size: 0;
	transition: all 0.1s ease-in-out;
	margin-left: 55px;
	color: #fff;
}
.header .menu ul li:hover label {
	background:#91B54D;
	font-size: inherit;
}
.header .menu ul li:hover label:hover {
	display: none;
}
section {
    padding: 150px 0;
}
.imgdepan {
	width: 100%;
    height: auto;
    vertical-align: middle;
}
@keyframes joo {
	0%{
		transform: translateY(-140%);
		opacity: 0;
	}
	100% {
		transform: translateY(-50%);
		opacity: 1;
	}
}
.intro {
    width: 100%;
    margin: 0;
    padding: 0;
    left: 0;
    bottom: auto;
    right: auto;
    top: 50%;
    text-align: left;
    transform: translateY(-50%);
    position: absolute;
    z-index: 10;
    line-height: 1;
    animation: joo 0.5s ease;
}
.badan {
	width: 1170px;
	margin-right: auto;
    margin-left: auto;
}
.caption {
	max-width: 610px;
}


.intro-nama {
	color: #fff;
    margin: 0 0 10px;
    font-size: 3.25em;
    font-weight: 600;
    line-height: normal;
}
@keyframes barr {
	0%
	{
		width: 0;
	}
	100% {
		width: 100%;
	}
}
.intro-nama::after {
    content: '';
    background-color: #ffffff;
    display: block;
    height: 3px;
    margin: 0.325em 0 0.5em 0;
    width: 100%;
    animation: barr 1s ease;
    transition: all 0.2s ease-in-out;
}
.intro-nama:hover::after {
    width: 40%;
}
.intro-tentang {
    font-size: 1em;
    margin-bottom: 40px;
    line-height: 26px;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 0.25em;
}

.tombol {
	border:2px solid #fff;
	text-transform: uppercase;
	letter-spacing: 4px;
	font: 600 17px Arial;;
	transition: all 0.2s ease-in-out;
	border-radius: 3px;
	cursor: pointer;
	float: left;
	width: 200px;
	height: 40px;
	background: white
}
.tombol:hover {
	border-color: #fff;
}
.tombol .bar {
	width: 0px;
	height: 40px;
	background: #681ba2;
	transition: width 0.2s ease-in-out
}
.tombol:hover .bar {
	width: 200px;
}
.tombol a {
	display: block;
	position: absolute;
	text-align: center;
	margin-top: -40px;
	width: 200px;
	height: 28px;
	padding-top: 12px;
	text-decoration: none;
	color: #363636;
	transition: color 0.1s ease-in-out
}
.tombol:hover a {
	color: #fff;
}
.tombol.mati {
	background: transparent;
	margin-left: 10px;
}
.tombol.mati a{
	color: #fff
}
.tombol.mati:hover a {
	color: #91B54D
}
.tombol.mati .bar {
	background: transparent;
}
#home {
	padding-bottom: 0;
	padding-top: 0;
	background: linear-gradient(45deg, #474747, #363636 100%);
	animation: putih 1s ease
}
#home img {
	opacity: 0.5;
}
#profil {
	padding: 55px 0 70px;
	border-bottom: 10px solid rgba(255,255,255,0.9);
	border-top: 10px solid rgba(0,0,0,0.2);
	background-color: #363636;
	background-size: cover;
	color: #ffffff;
}
@keyframes scf {
	0% {
		transform: rotate(-80deg);
		opacity: 0;
		border-radius: 100%;
	}
	100% {
		transform: rotate(0deg);
		opacity: 1
	}
}
#profil .badan img {
	border-radius: 100%;
	border:7px solid #474747;
	transition: all 0.3s ease-in-out;
	animation: scf 0.5s ease
}
#profil .badan img:hover {
	border-color:#676767;
}
#profil .badan {
	height: 300px;
	margin-right: auto;
	margin-left: auto;
}
#profil .badan .foto {
	float: left;
	margin-top:3%;
}
#profil .badan .info {
	float: left;
		margin-top:3%;
		margin-left:2%;
}
#profil .badan .info h3 {
	margin: 0;
	font-weight: 600;
	font-size: 24px;
	padding: 15px 25px;

}
#profil .badan .info h3 span {
	float: left;
}
#profil .badan .info h3 span::after {
    content: '';
    background-color: #474747;
    display: block;
    height: 3px;
    margin: 0.325em 0 0.5em 0;
    width: 100%;
    transition: all 0.2s ease-in-out;
}
#profil .badan .info h3 span:hover::after {
    width: 40%;
}

#profil td {
	margin:0;
}
#profil ul {
	margin:0 25px;
	padding:0;
	list-style: none;
}
#profil ul li {
	padding: 5px 0
}
#profil .kdw {
	text-transform: uppercase;
	font-weight: 600;
}

#pendidikan {
	background: url(exper.jpg) fixed;
	background-size: cover;
	color:#363636;
	padding: 0;
}
@keyframes putih {
	0%{
		background: #474747;
	}
}
#pendidikan .putih {
	padding: 80px;
	background-color: #363636;
	animation: putih 1s ease
}
#pengalaman {
	background-color: #fff;
	color:#363636;
}
#pendidikan .judul h2,#pengalaman .judul h2,#kontak .judul h2 {
	margin: 0;
	color:#fff;
}
#pendidikan .judul h2 {
	color: #fff;
}
#pendidikan .judul h2 span::after {
	background: #fff;
}
.judul h2 span::after {
    content: '';
    background-color: #ffffff;
    display: block;
    height: 3px;
    margin: 0.325em 0 0.5em 0;
    animation: barr 1s ease;
    width: 100%;
    transition: all 0.2s ease-in-out;
}
.judul h2 span:hover::after {
    width: 40%;
}
#kontak .judul h2 span::after,#social .judul h2 span::after {
    content: '';
    background-color: #fff;
    display: block;
    height: 3px;
    margin: 0.325em 0 0.5em 0;
    animation: barr 1s ease;
}

#pendidikan .isi ol {
	margin:30px 0 0;
	padding: 0;
	list-style-position: inside;
}
@keyframes ullo {
	0% {
		transform: translateY(-40px);
	}
	100% {
		transform: translateY(0);
	}
}
#pendidikan .isi ol li {
	background: rgba(255,255,255,0.85);
	padding: 10px 15px;
	margin:2px;
	transition: all 0.2s ease-in-out;
	animation: ullo 1.2s ease;
	border-left: 0px solid #681ba2;
	border-radius: 5px;
}
#pendidikan .isi ol li:hover {
	background: #363636;
	color: #fff;
	border-left-width: 10px;
}
#pendidikan .isi ol label {
	font-size: 1em;
	text-transform: uppercase;
	font-weight: bold;
}
#pendidikan .isi ol li ul {
	margin: 10px 0;
	padding: 0;
}
#pendidikan .isi ol li ul li {
	background: rgba(0,0,0,0.1);
}
#pendidikan .isi ol li:hover ul li {
	background: rgba(255,255,255,0.1);
}
@keyframes pengalaman {
	0% {
		transform: scale(0);
		color: #fff;
	}
	100%{
		transform: scale(1);
		color: #fff;
	}
}
#pengalaman .data .first {
	background: #91B54D;
	height: 200px;
	color: #fff;
	border-radius: 5px;
	width: 98%;
	transition: all 0.2s ease-in-out;
	animation: pengalaman 0.25s ease;
}
#pengalaman .data .first h4 {
	font-size: 24px;
	margin:0;
	font-weight: 300;
	padding: 20px 25px;
	width: 200px;
	transition: all 0.2s ease-in-out;
	position: absolute;
	cursor: default;
}
#pengalaman .data .first:hover {
	color: #91B54D;
	background: #474747;
	transform: scale(1.05);
}

#pengalaman .data .first h5 {
	position: absolute;
	background: #474747;
	padding: 10px;
	margin: 110px 0 0;
	width: 150px;
	text-align: center;
	height: 20px;
	cursor: default;
	border-top-right-radius: 5px;
	border-bottom-right-radius: 5px;
}
#pengalaman .data .first:hover h5 {
	background: rgba(255,255,255,0.3);
	color:#474747;
}
#pengalaman .data .first h5 .b, #pengalaman .data .first:hover h5 .a,#pengalaman .data .first h4 .b, #pengalaman .data .first:hover h4 .a {
	font-size: 0;
	transition: font 0.2s ease-in-out;
	opacity: 0;
}
#pengalaman .data .first:hover h5 .b,#pengalaman .data .first:hover h4 .b {
	font-size: inherit;
	opacity: 1;
}
#kontak{
	background-color: #363636;
}
#kontak .text {
	background: rgba(255,255,255,0.1);
	border:1px solid rgba(255,255,255,0.1);
	font-size: 18px;
	outline: none;
	padding: 10px 15px;
	margin:2px;
	color: #fff;
	font-weight: 300;
	width: 95%;
	border-radius: 5px;
	transition: all 0.2s ease-in-out;
}
#kontak .text:-webkit-autofill, #kontak .text:-webkit-autofill:focus {
	-webkit-text-fill-color:#fff;
	-webkit-box-shadow:0 0 0px 1000px #91B54D inset;
	border-color: #fff;
}
#kontak .text::placeholder {
	color: #aaa;
	opacity: 1;
}
#kontak .text:hover,#kontak .text:focus {
	background: #681ba2;
	border-color:#fff;
}
#kontak .text:focus::placeholder {
	color: #fff;
}
#kontak .text:focus {
	transform: scale(1.1);
	box-shadow: 0 0 4px rgba(0,0,0,0.3);
}
#kontak .zom {
	width: 100%;
	height: 240px;
}
#kontak .kiri {
	width: 450px;
	height: 240px;
    min-height: 1px;
    float: left;
    margin-right: 30px;
}
#kontak .kiri .text {
	margin-bottom: 17px;
}
#kontak .kanan .text {
	width: 94.5%
}
#kontak .kanan {
	width: 680px;
	height: 240px;
	float: right;
}

#skill ul {
	padding: 0;
	margin: 0;
	list-style: none;
}
#skill ul li {
	margin:5px 0;
	transition: all 0.3s ease-in-out
}
#skill ul li h4 {
	margin:0;
	padding: 3px
}
#skill ul li .fill {
	width:100%;
	height:40px;
	background: rgba(0,0,0,0.5);
	border-radius: 3px;
}
@keyframes data {
	0%{
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}
#skill {
	background-color: #363636;
	color: #ffffff;
	padding: 50px;
}
#skill ul li:hover {
	transform: scale(1.05);
}
#skill ul li .data {
	height:40px;
	background: #fff;
	border-radius: 3px;
	position: absolute;
	margin-top: -40px;
	border-bottom-right-radius: 0;
	border-top-right-radius: 0;
	animation: data 1s ease-in-out;
	transition: background 0.3s ease-in-out
}
#skill ul li label {
	position: absolute;
	margin-top: -35px;
	padding: 5px 10px;
	font-weight: 400;
	color: white;
	opacity: 0;
	font-size:0;
	transition: all 0.3s ease-in-out;
}
#skill ul li:hover label {
	opacity: 1;
	font-size: inherit;
}
#skill ul li:hover .data {
	background: #681ba2;
}

#social ul {
	list-style: none;
	padding: 0;
	margin: 0;
	height: 320px;
}
@keyframes sc {
	0% {
		transform: scale(0);
		opacity: 0;
	}
	100% {
		transform: scale(1);
		opacity: 1
	}
}
#social ul li {
	background: #5161A0;
	width: 302px;
	height: 302px;
	float: left;
	animation: sc 0.7s ease;
	transition: opacity 0.2s ease-in-out;
}
#social ul li a {
	display: block;
	border:4px solid transparent;
	transition: border 0.1s ease-in-out;
}
#social ul li:hover a {
	border:4px solid rgba(200,200,200,0.3);
}
#social ul li:hover {
	opacity: 0.8
}
#social ul li span {
	position: absolute;
	font-size: 18px;
	margin-top: -35px;
	margin-left: 15px;
	cursor: pointer;
}
#social ul li:hover img {
	transform: scale(1.2);
}
#social ul li img {
	width: 100px;
	height: 100px;
	margin: 97px;
	transition: all 0.1s ease-in-out;
}
#social ul li+li {
	background: rgb(200,10,250);
	width: 306px;
	height: 150px;
	float: left;
	position: absolute;
	margin-left: 304px;
}
#social ul li+li+li {
	background: #1DA1F2;
	margin-top: 152px;
	width: 152px;
}
#social ul li+li+li+li {
	background: #DC4E41;
	margin-left: 458px;
	width: 152px;
}
#social ul li+li+li+li+li {
	margin-top: 0;
	background: #424242;
	margin-left: 655px;
	width: 152px;
}
#social ul li+li+li+li+li+li {
	margin-top: 0;
	background: #1D6FB5;
	margin-left: 809px;
}
#social ul li+li+li+li+li+li+li {
	background: #1B749E;
	width: 306px;
	height: 150px;
	float: left;
	position: absolute;
	margin-left: 655px;
	margin-top: 152px;
}
#social ul li+li+li+li+li+li+li+li {
	margin-top: 0;
	background: #FF2807;
	margin-left: 1009px;
	width: 152px;
}
#social ul li+li+li+li+li+li+li+li+li {
	margin-top: 152px;
	background: #006699;
}
#social ul li+li img,#social ul li+li+li+li+li+li+li img {
	width: 90px;
	height: 90px;
	margin: 26px 99px
}
#social ul li+li+li img,#social ul li+li+li+li+li+li+li+li img {
	margin: 26px
}
#social {
	background: url(scmed.jpg);
	background-size: cover;
	padding: 0;
}
#social .bg {
	padding: 150px 0;
	background: rgba(74,74,74,0.9);
	animation: putih 1s ease;
}
#sertifikat {
	background: #fff;
	color: #6E6E6E;
	padding: 20px 0
}
#sertifikat ul {
	list-style: none;
	padding: 0;
	height: 120px;
}
#sertifikat ul img {
	width: 100px;
}
#sertifikat ul li {
	float: left;
	padding: 5px;
}
#sertifikat ul li:hover {
	float: left;
}
@keyframes sert {
	0% {
		border:2px solid transparent;
		width: 0;
		color:rgba(0,0,0,0);
	}
	100% {
		width: 220px;
		border:2px solid #6E6E6E;
		color:#6E6E6E
	}
}
#sertifikat ul li ul {
	background: #fff;
	border:2px solid #6E6E6E;
	position: absolute;
	margin-top: -112px;
	margin-left: 104px;
	max-width: 250px;
	display: none;
	height: 115px;
}
#sertifikat ul li:hover ul  {
	display: inherit;
	animation: sert 0.3s ease;
}
#sertifikat ul li:hover ul:hover {
	display: none;
}
#sertifikat ul li ul li,#sertifikat ul li ul li:hover {
	float: none;
	padding: 10px 10px;
	width: 200px;
	border:none;
}
#sertifikat h3 {
	float: right;
}
footer h3 {
	font-weight: 300;
}
.sp #profil,#sert {
	margin-top: 55px
}
#sert {
	background: #fff;
	color: #6E6E6E;
	padding: 20px 0
}
#sert ul {
	list-style: none;
	padding: 0;
	height: 750px;
}
#sert ul img {
	width: 100px;
	transition: all 0.2s ease-in-out
}
#sert ul li {
	float: left;
	padding: 5px;
	text-align: center;
	animation: ullo 1.2s ease;
}
#sert ul li:hover img {
	transform: scale(0.6);
}
@keyframes sert {
	0% {
		border:2px solid transparent;
		width: 0;
		color:rgba(0,0,0,0);
	}
	100% {
		width: 220px;
		border:2px solid #6E6E6E;
		color:#6E6E6E
	}
}
#sert ul li ul {
	background: rgba(0,0,0,0.2);
	max-width: 250px;
	height: auto;
	border-radius: 5px;
	margin-top: 5px;
	transition: border 0.1s ease-in-out
}
#sert ul li ul:hover {
	background: #6E6E6E;
	color: #fff;
}
#sert ul li ul li {
	padding: 20px;
	float: none;
	transition: all 0.1s ease-in-out;
	cursor: default;
}
#sert ul li ul li:hover {
	background: #91B54D;
	float: none;
	color: #fff;
	transform: scale(1.3);
	box-shadow: 0 0 4px rgba(0,0,0,0.3);
	border-radius: 5px;
}
#sert ul li ul li ul {
	max-width: 250px;
	height: auto;
	border-radius: 5px;
	margin-top: 5px;
	background: #6E6E6E;
	color: #fff;
	border:none;
}
#sert ul li ul:hover li ul {
	background: #91B54D;
}
#sert ul li ul li:hover ul {
	background: rgba(0,0,0,0.1);
}
#sert ul li ul li ul li {
	padding: 10px 20px;
	float: none;
	text-align: left;
}
#sert ul li ul li ul li:hover {
	background: transparent;
	transform: none;
	box-shadow: none;
	border-radius: none;

}
#sert h3 {
	float: right;
}


</style>

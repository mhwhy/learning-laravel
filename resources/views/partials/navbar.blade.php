<div class=" navbar navbar-expand-lg" style="background-color: #1C6758;">
    <div class=" container">
      <ul class=" ">
        <li class=" d-inline-block text-white pt-2 ps-3 pe-3 me-2"><i class=" fa-solid fa-phone me-2"></i>+62 822-6650-7369</li>
        <li class=" d-inline-block text-white pt-2 ps-3 pe-3 me-2"><i class=" fa-regular fa-envelope me-2"></i>info@smkn2-tglk.sch.id</li>
        <li class=" d-inline-block text-white pt-2 ps-3 pe-3 me-2"><i class=" fa-sharp fa-solid fa-location-dot me-2"></i>Jl. Ronggo Warsito Gg. Sidomukti, Kabupaten Trenggalek, Jawa Timur</li>
      </ul>
    </div>
  </div>


  <header>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="brand">
						<img src="{{ asset ('assets/img/logo_smk_2.png')}}" alt="">
						<div class="brand-name">
							<h1>SMKN 2 TRENGGALEK</h1>
							<h3>Sekolah Pencetak Generasi Teknologi Hebat</h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 searchbox-wrapper">
					<div class="searchbox">
            <form class=" d-flex" role="search">
              <input class=" form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
              <button style="background: #1C6758" class=" btn rounded-pill text-white" type="submit">Search</button>
            </form>
					</div>
				</div>
			</div>
		</div>
	</header>






<nav class=" navbar navbar-expand-lg" style="background-color: #1C6758; font-weight:bold;">
    <div class=" container">
      <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=" navbar-toggler-icon"></span>
      </button>
      <div class=" collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class=" navbar-nav">
        <a class=" nav-link text-white mx-4 " aria-current="page" href="/home">
          Home</a>
        <a class=" nav-link text-white mx-4 "  href="/berita">Berita</a>
        <a class=" nav-link text-white mx-4 "  href="/agenda">Agenda</a>
        <a class=" nav-link text-white mx-4 "  href="/kontak">kontak</a>
        <a class=" nav-link text-white mx-4 "  href="/profile">profile</a>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white mx-5 " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informasi</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/datasiswa/siswa">Data Siswa</a></li>
                <li><a class="dropdown-item" href="/dataguru/guru">Data Guru</a></li>
                <li><a class="dropdown-item" href="/dataloker/loker">Data Loker</a></li>
              </ul>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white mx-5 " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Paket Keahlian</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/komli">Rekayasa Perangkat Lunak</a></li>
            <li><a class="dropdown-item" href="#">Desain Pemodelan dan Informasi Bangunan</a></li>
            <li><a class="dropdown-item" href="#">Tata Boga</a></li>


        </ul>
        </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white mx-5 " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">saya ,{{ auth()->user()->name }}</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/Dashboard">MyDashboard</a></li>

            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </li>
        </ul>
        </li>
        </li>
        </div>
        </div>
      </div>
    </div>
  </nav>

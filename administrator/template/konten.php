<div id="content">
    	<!--dropdown start-->
		    <nav class="navbar-static-top" style="margin-bottom: 0">
		        <ul class="nav navbar-top-links navbar-right">
		            <li class="dropdown">
		                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
		                    <i class="fa fa-user fa-fw"></i> Admin <i class="fa fa-caret-down"></i>
		                </a>
		                <ul class="dropdown-menu dropdown-user">
			                <li>
			                    <a href="profileA.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User Profile</a>
			                </li>
			                <li>
			                    <a href="index.html"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Out</a>
			                </li>
		           	    </ul>
		            </li>
		        </ul>
		    </nav>
		<!--dropdown end-->
			<div class="box-table">
			<h3>Daftar User</h3>
				<div id="btn">
					<a href="tambahuser.html">
						<button type="button" class="btn btn-primary">Tambah User
							<span class="glyphicon glyphicon-plus"></span>
						</button>
					</a>
				</div>
				<table class="table table-bordered">
					<thead align="center">
						<tr>
							<td>No.</td>
							<td>Nama</td>
							<td>Hak Akses</td>
							<td>Jenis Kelamin</td>
							<td>Telepon</td>
							<td>Alamat</td>
							<td>Aksi</td>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>1</td>
							<td>Wulanfadi</td>
							<td>Owner</td>
							<td>Laki-laki</td>
							<td>089612345678</td>
							<td>Jl. Imam Bojol</td>
							<td align="center">
								<button type="button" class="btn btn-danger" onclick="rubah()">
									<span class="glyphicon glyphicon-trash"></span> Hapus</button>
							</td>
						</tr>

						<tr>
							<td>2</td>
							<td>Tiya Indriyani</td>
							<td>Admin1</td>
							<td>Perempuan</td>
							<td>085248908869</td>
							<td>Jl. Daya Nasional no. 42</td>
							<td align="center">
								<button type="button" class="btn btn-danger" onclick="rubah()"">
									<span class="glyphicon glyphicon-trash"></span> Hapus</button>
							</td>
						</tr>

						<tr>
							<td>3</td>
							<td>Nadhira Abimanyu</td>
							<td>Kasir1</td>
							<td>Perempuan</td>
							<td>085310764523</td>
							<td>Jl. Sungai Raya Dalam, Komplek Perdamaian 2, No A3</td>
							<td align="center">
								<button type="button" class="btn btn-danger" onclick="rubah()">
									<span class="glyphicon glyphicon-trash"></span> Hapus</button>
							</td>
						</tr>

						<tr>
							<td>4</td>
							<td>Alden</td>
							<td>Kepala Gudang</td>
							<td>Laki-laki</td>
							<td>081345514153</td>
							<td>Jl. Imam Bonjol gg. Bansir 3 No 23</td>
							<td align="center">
								<button type="button" class="btn btn-danger" onclick="rubah()">
									<span class="glyphicon glyphicon-trash"></span> Hapus</button>
							</td>
						</tr>

						<tr>
							<td>5</td>
							<td>Dava Rianofa</td>
							<td>Admin2</td>
							<td>Perempuan</td>
							<td>08985208516</td>
							<td>Jl. Perdana, Komplek Bali Agung 2</td>
							<td align="center">
								<button type="button" class="btn btn-danger" onclick="rubah()">
									<span class="glyphicon glyphicon-trash"></span> Hapus</button>
							</td>
						</tr>

						<tr>
							<td>6</td>
							<td>Ayu Sera Laudia</td>
							<td>Kasir2</td>
							<td>Perempuan</td>
							<td>085245488558</td>
							<td>Jl. Panglima Aim, No C12</td>
							<td align="center">
								<button type="button" class="btn btn-danger" onclick="rubah()">
									<span class="glyphicon glyphicon-trash"></span> Hapus</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
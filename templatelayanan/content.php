

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
			<div class="box2">
				<h2>Jenis Layanan</h2>
				<div id="btn">
					<a href="tambahlayanan.html">
						<button type="button" class="btn btn-primary">Tambah Layanan
							<span class="glyphicon glyphicon-plus"></span>
						</button>
					</a>
				</div>
				<table class="table table-bordered">
					<thead align="center">
						<tr>
							<th>No.</th>
							<th>Kode Layanan</th>
							<th>Nama Layanan</th>
							<th>Harga/kg</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>1</td>
							<td>KL3584</td>
							<td>Cuci Biasa</td>
							<td>Rp 5.000,-</td>
							<td align="center">
							<a href="editlayanan.html">
								<button type="button" class="btn-sm btn-info"">
									<span class="glyphicon glyphicon-pencil"></span></button>
							</a>
								<button type="button" class="btn-sm btn-danger"  onclick="rubah()">
									<span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>

						<tr>
							<td>2</td>
							<td>KL2345</td>
							<td>Cuci Cepat</td>
							<td>Rp 6.000,-</td>
							<td align="center">
							<a href="editlayanan.html">
								<button type="button" class="btn-sm btn-info"">
									<span class="glyphicon glyphicon-pencil"></span></button>
							</a>
								<button type="button" class="btn-sm btn-danger"  onclick="rubah()">
									<span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>

						<tr>
							<td>3</td>
							<td>KL7548</td>
							<td>Setrika Biasa</td>
							<td>Rp 5.000,-</td>
							<td align="center">
							<a href="editlayanan.html">
								<button type="button" class="btn-sm btn-info"">
									<span class="glyphicon glyphicon-pencil"></span></button>
							</a>
								<button type="button" class="btn-sm btn-danger"  onclick="rubah()">
									<span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>

						<tr>
							<td>4</td>
							<td>KL2013</td>
							<td>Setrika Cepat</td>
							<td>Rp 6.000,-</td>
							<td align="center">
							<a href="editlayanan.html">
								<button type="button" class="btn-sm btn-info"">
									<span class="glyphicon glyphicon-pencil"></span></button>
							</a>
								<button type="button" class="btn-sm btn-danger"  onclick="rubah()">
									<span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>

						<tr>
							<td>5</td>
							<td>KL4031</td>
							<td>Cuci + Setrika Biasa</td>
							<td>Rp 8.000,-</td>
							<td align="center">
							<a href="editlayanan.html">
								<button type="button" class="btn-sm btn-info"">
									<span class="glyphicon glyphicon-pencil"></span></button>
							</a>
								<button type="button" class="btn-sm btn-danger"  onclick="rubah()">
									<span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>

						<tr>
							<td>6</td>
							<td>KL6543</td>
							<td>Cuci + Setrika Cepat</td>
							<td>Rp 10.000,-</td>
							<td align="center">
							<a href="editlayanan.html">
								<button type="button" class="btn-sm btn-info"">
									<span class="glyphicon glyphicon-pencil"></span></button>
							</a>
								<button type="button" class="btn-sm btn-danger"  onclick="rubah()">
									<span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div id="footer">
				<span>
					© 2017 Sistem Informasi Laundry by CISFO
				</span>
		</div>
	</div>
	</div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script>
		function rubah() {
		alert('Anda akan menghapus file sacara permanen!');
		}
	</script>
    
</body>
</html>
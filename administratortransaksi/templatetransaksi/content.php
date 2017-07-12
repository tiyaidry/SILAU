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
			<div class="box">
				<h3>Input Data Pelanggan</h3>
					<form action="inputpakaian.html" method="post">
			            <div class="control-group">
			                <label for="Transaksi">No. Transaksi</label>
			                : <input type="text" name="Transaksi" id="transaksi" value="L001" required>
			            </div>

			            <div class="control-group">
			            	<label for="Telepon">No. Telp</label>
			            	: <input type="tel" maxlength="13" onkeypress="return hanyaAngka(event)" required>
			            	<div class="btn-group" role="group" aria-label="true">
							 	<button type="button" class="btn btn-default" id="telp"><span class="glyphicon glyphicon-search"></span></button>
							</div>
			            </div>

			            <div class="control-group">
			                <label for="Nama">Nama</label>
			                : <input type="text" name="Nama" id="Nama" required>
			            </div>

			            <div class="control-group">
			                <label for="jkel">Jenis Kelamin</label>
			                <div>
				                : <input type="radio" name="jeniskelamin" value="1">Pria
								<input type="radio" name="jeniskelamin" value="0">Wanita________________
			                </div>
			            </div>

			            <div class="control-group">
			                <label for="alamat">Alamat</label>
			                : <textarea name="komenar" id="alamat" required></textarea>
			            </div>

			            <input type="submit" value="Lanjut">
			    </form>
			</div>
		</div>

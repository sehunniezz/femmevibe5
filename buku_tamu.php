<!DOCTYPE html>
<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scele=1.0">
        <title>BrickClothes</title>
        <link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     </head>
    <head>
        <header>
            <a href="toko_online.html" class="logo">Brick<span>Clothes</span></a>
            <div class="container">
				<nav>
					<ul>
						<li><a href="toko_online.html" class="">Home</a></li>
						<li><a href="product.html" class="">Product</a></li>
						<li><a href="About_online.php" class="">About</a></li>
						<li><a href="buku-tamu.html" class="active">Buku Tamu</a></li>

					</ul>
				</nav>
            </div>
        </header>
    </head>
    <body>
        <div class="main-conten" >
            <div class="container">
                <h1>Buku Tamu</h1>
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><input type="text" name="nama_lengkap"></td>
                        </tr>    
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><textarea name="Alamat"></textarea></td>
                        </tr>    
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><input type="text" name="femail"></td>
                        </tr>    
                        <tr>
                            <td>Provinsi</td>
                            <td>:</td>
                            <td>
                                <select name="Provinsi">
                                    <option>--Pilih Provinsi--</option>
                                    <option>Aceh</option>
                                    <option>Sumatra Utara</option>
                                    <option>Sumatra Barat</option>
                                    <option>Riau</option>
                                    <option>Kepulauan Riau</option>
                                    <option>Jambi</option>
                                    <option>Bengkulu</option>
                                    <option>Sumatra Selatan</option>
                                    <option>Kepulauan Bangka Belitung</option>
                                    <option>Lampung</option>
                                    <option>Banten</option>
                                    <option>Jawa Barat</option>
                                    <option>Jakarta</option>
                                    <option>Jawa Tengah</option>
                                    <option>Yogyakarta</option>
                                    <option>Jawa Timur</option>
                                    <option>Bali</option>
                                    <option>Nusa Tenggara Barat</option>                                        
                                    <option>Nusa Tenggara Timur</option>
                                    <option>Kalimantan Barat</option>
                                    <option>Kalimantan Selatan</option>
                                    <option>Kalimantan Tengah</option>
                                    <option>Kalimantan Timur</option>
                                    <option>Kalimantan Utara</option>
                                    <option>Gorontalo</option>
                                    <option>Sulawsi Barat</option>
                                    <option>Sulawsi Selatan</option>
                                    <option>Sulawsi Tengah</option>
                                    <option>Sulawsi Tenggara</option>
                                    <option>Sulawsi Utara</option>
                                    <option>Maluku</option>
                                    <option>Maluku Utara</option>
                                    <option>Papua Barat</option>
                                    <option>Papua</option>
                                </select>
                            </td>
                        </tr>  
                        <tr>
                            <td>Asal Kota</td>
                            <td>:</td>
                            <td><input type="text" name="Asal_kota"></td>
                        </tr>   
                        <tr>
                            <td>Tanggal Berkunjung</td>
                            <td>:</td>
                            <td><input type="date" name="tanggal_berkunjung"></td>
                        </tr>   
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="jkelamin" value="Laki-Laki">Laki-Laki
                                <input type="radio" name="jkelamin" value="Perempuan">Perempuan
                            </td>
                        </tr>    
                        <tr>
                            <td>Komentar</td>
                            <td>:</td>
                            <td>
                                <textarea name="Pesan"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="submit" name="kirim">kirim</button>
                                <button><a link href="toko_online.html">kembali</a></button>
                            </td>
                        </tr>
  
                    </table>
                </form>
            </div>
        </div>
        <div class="isi">
        </div>
        <div class="footertop">
                <div class="medsos">
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=100011744080243"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/muhmmadsafna/"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>  
                </div>                         
            </div>
            <div class="footerbottom">
                <div class="copyright">
                    <h4 style="margin-top: 0px;"><br>Clothes Shop Copyright&copy 2021 </br></h4>
                </div>
            </div>
        </div>  
    </body>
</html>
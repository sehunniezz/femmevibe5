<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrickStore | Website Catalog</title>
    <link rel="stylesheet" href="style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="navbar">            <!-- mengatur menu--> 
            <div class="logo">          <!-- mengatur logo--> 
                <a href="index.html">Brick<span>Clothes</span></a>
            </div>
            <nav>
                <ul id="MenuItems">     <!--id js--> 
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Produk</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="buku-tamu.html">BukuTamu</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()"> 
        </div> 
    </div>

<!------------ buku tamu ----------->
    <div class="offer">
        <div class="small-container about">
            <div class="row">               <!--mengatur penataan--> 
                <div class="col-2">         <!--mengatur isi konten-->
                    <h1>Saran dan Masukan:</h1>
                    <form action="koneksi.php" method="POST" class="form">
                    <table>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><input type="text" name="nama_lengkap" placeholder="Masukkan nama anda" class="input" required/></td>
                        </tr>        
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><input type="text" name="email" placeholder="masukkan Alamat email Anda" class="input" required/></td>
                        </tr> 
						<tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><textarea name="alamat" class="input"></textarea></td>
                        </tr>						
                        <tr>
                            <td>Provinsi</td>
                            <td>:</td>
                            <td>
                                <select class="input" name="provinsi">
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
                            <td><input type="text" name="asal_kota"  placeholder="Masukan asal kota anda" class="input" required/></td>
                        </tr>   
                        <tr>
                            <td>Tanggal Berkunjung</td>
                            <td>:</td>
                            <td><input type="date" name="tanggal_berkunjung" class="input"></td>
                        </tr>   
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="jkelamin" value="Laki-Laki" class="input">Laki-Laki
                                <input type="radio" name="jkelamin" value="Perempuan" class="input">Perempuan
                            </td>
                        </tr>    
                        <tr>
                            <td>Komentar</td>
                            <td>:</td>
                            <td>
                                <textarea name="pesan"  class="input"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn" type="submit" name="kirim">kirim</button>
                            </td>
                        </tr>
                    </table>
                </form>
                </div>
                <div class="col-2">         <!--mengatur isi konten-->
                    <img src="images/gambar1.png" >
                </div>
            </div>
        </div>
    </div>

<!------------ footer ----------->

<div class="footer">
    <div class="container">
        <div class="row">           <!--mengatur isi konten-->
            <div class="footer-col-1">
                <h3>Tentang Kami</h3>
                <p>Webset kami menjual aneka produk pakaian mulai dari kaos,celana, dan jaket dengan kualitas yang pastinya terjamin baiknya. Karna kami menjamin kepuasan dari konsumen serta pengiriman yang cepat dan pastinya gratis ongkir.</p>
            </div>
            <div class="footer-col-2">
                <div class="logo">
                    <a href="index.html">Fresh<span>Clothes</span></a>
                </div>
                <p>Tujuan kami adalah membuat kesenangan dengan style baru dan dapat diakses oleh banyak orang.</p>
            </div>
            <div class="footer-col-3">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Youtube</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2022 - Teknik Komputer</p>
    </div>
</div>

<!------------ js for toggle menu ----------->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight="200px"
                }
            else
                {
                    MenuItems.style.maxHeight = "0px"
                }
        }
    </script>

</body>
</html>
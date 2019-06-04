<?php
session_start();
include("asset/php/connection.php");
include("asset/php/session.php");
include("asset/php/result.php");
include("asset/php/function.php");
include("asset/php/logout.php");
?>

<!-- symbol ✘ ✔ -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lestari Jaya</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <div class="disableDesktop" id="disableDesktop"></div>
    <div class="navbarTop">
        <h1 class="judulWebsite">
            Lestari Jaya
        </h1>

        <form class="form-inline searchBar">
            <input class="form-control form-control-sm mr-sm-2 inputSearch" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="iconUser">
            <img src="asset/img/user.svg" alt="" onclick="imgUserClick()">
        </div>

        <div class="pageIconUser" id="pageIconUser">
            <h1><?= $_SESSION["nameUser"]; ?></h1>
            <form action="" method="post">
                <button type="submit" class="btn btn-sm btn-outline-succes" name="logout">Log Out</button>
            </form>
        </div>
    </div>

    <div class="navbarLeft">
        <ul>
            <li class="menu1">
                <a href="#" onclick="showPage1()">
                    <div class="iconHome">
                        <img src="asset/img/home.svg" alt="">
                    </div>
                    <div class="textHome">
                        <h1>Home</h1>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" onclick="showPage2()">
                    <div class="iconFertilizer">
                        <img src="asset/img/fertilizer.svg" alt="">
                    </div>
                    <div class="textFertilizer">
                        <h1>Fertilizer</h1>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="iconNote" onclick="showPage3()">
                        <img src="asset/img/note.svg" alt="">
                    </div>
                    <div class="textNote">
                        <h1>Note</h1>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" onclick="showPage4()">
                    <div class="iconSetting">
                        <img src="asset/img/setting.svg" alt="">
                    </div>
                    <div class="textSetting">
                        <h1>Setting</h1>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <div class="body">

        <div class="loginPage content" id="loginPage">
            <h1 class="nameLoginPage nameContent">Login</h1>

            <form action="">
                <div class="form-group row formLogin">
                    <label for="inputEmail3" class="col-sm-2 col-form-label labelUsername">Username</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control inputUsername" id="inputEmail3" placeholder="Username">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label labelPassword">Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control inputPassword" id="inputPassword3" placeholder="Password">
                    </div>
                </div>

                <div class="buttonLogin">
                    <button type="reset" class="btn btn-outline-success button1" onclick="closeLoginPage()">Cancel</button>
                    <button type="submit" class="btn btn-outline-success button2">Submit</button>
                </div>
            </form>

        </div>

        <div class="contentHome content" id="contentHome">
            <h1 class="nameContentHome nameContent">Home</h1>
        </div>


        <div class="contentFertilizer content" id="contentFertilizer">
            <h1 class="nameContentFertilizer nameContent">Fertilizer</h1>

            <div class="tempatTable">

                <table border="1px" class="mainTable table1" id="table1">
                    <tr>
                        <th class="nomer"><h1>No</h1></th>
                        <th class="judul1"><h1>Nama</h1></th>
                        <th class="judul2"><h1>Jenis</h1></th>
                        <th class="judul3"><h1>Tersedia</h1></th>
                        <th class="judul4"><h1>Harga</h1></th>
                    </tr>

                    <?php 
                        $a = 1;
                    ?>
                    <?php 
                    while ($row = mysqli_fetch_assoc($result1)) : 
                    $harga = $row["harga"];
                    ?>
                    <tr class="shortByName1" id="shortByName1">
                        <th class="nomerObat obat <?php if ($a % 2 == 0) : echo "colomPutih";?><?php endif; ?>"><h2 style="text-align: center;"><?= $a ?></h2></th>
                        <th class="namaObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= $row["nama"] ?></h2></th>
                        <th class="jenisObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= $row["jenis"] ?></h2></th>
                        <th class="tersediaObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= $row["tersedia"] ?></h2></th>
                        <th class="hargaObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= rupiah($row["harga"]) ?></h2></th>
                    </tr>
                    <?php $a++ ?>
                    <?php endwhile; ?>
                </table>

                <table border="1px" class="mainTable table2" id="table2">
                    <tr>
                        <th class="nomer"><h1>No</h1></th>
                        <th class="judul1"><h1>Nama</h1></th>
                        <th class="judul2"><h1>Jenis</h1></th>
                        <th class="judul3"><h1>Tersedia</h1></th>
                        <th class="judul4"><h1>Harga</h1></th>
                    </tr>

                    <?php 
                        $a = 1;
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($result2)) : ?>
                    <tr class="shortByName1" id="shortByName1">
                        <th class="nomerObat obat <?php if ($a % 2 == 0) : echo "colomPutih";?><?php endif; ?>"><h2 style="text-align: center;"><?= $a ?></h2></th>
                        <th class="namaObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= $row["nama"] ?></h2></th>
                        <th class="jenisObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= $row["jenis"] ?></h2></th>
                        <th class="tersediaObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= $row["tersedia"] ?></h2></th>
                        <th class="hargaObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= rupiah($row["harga"]) ?></h2></th>
                    </tr>
                    <?php $a++ ?>
                    <?php endwhile; ?>
                </table>

                <table border="1px" class="mainTable table3" id="table3">
                    <tr>
                        <th class="nomer"><h1>No</h1></th>
                        <th class="judul1"><h1>Nama</h1></th>
                        <th class="judul2"><h1>Jenis</h1></th>
                        <th class="judul3"><h1>Tersedia</h1></th>
                        <th class="judul4"><h1>Harga</h1></th>
                    </tr>

                    <?php 
                        $a = 1;
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($result3)) : ?>
                    <tr class="shortByName1" id="shortByName1">
                        <th class="nomerObat obat <?php if ($a % 2 == 0) : echo "colomPutih";?><?php endif; ?>"><h2 style="text-align: center;"><?= $a ?></h2></th>
                        <th class="namaObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= $row["nama"] ?></h2></th>
                        <th class="jenisObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= $row["jenis"] ?></h2></th>
                        <th class="tersediaObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= $row["tersedia"] ?></h2></th>
                        <th class="hargaObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= rupiah($row["harga"]) ?></h2></th>
                    </tr>
                    <?php $a++ ?>
                    <?php endwhile; ?>
                </table>

                <table border="1px" class="mainTable table4" id="table4">
                    <tr>
                        <th class="nomer"><h1>No</h1></th>
                        <th class="judul1"><h1>Nama</h1></th>
                        <th class="judul2"><h1>Jenis</h1></th>
                        <th class="judul3"><h1>Tersedia</h1></th>
                        <th class="judul4"><h1>Harga</h1></th>
                    </tr>

                    <?php 
                        $a = 1;
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($result4)) : ?>
                    <tr class="shortByName1" id="shortByName1">
                        <th class="nomerObat obat <?php if ($a % 2 == 0) : echo "colomPutih";?><?php endif; ?>"><h2 style="text-align: center;"><?= $a ?></h2></th>
                        <th class="namaObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= $row["nama"] ?></h2></th>
                        <th class="jenisObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= $row["jenis"] ?></h2></th>
                        <th class="tersediaObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= $row["tersedia"] ?></h2></th>
                        <th class="hargaObat obat <?php if ($a % 2 == 0) : echo "colomPutih"; ?><?php endif; ?>"><h2><?= rupiah($row["harga"]) ?></h2></th>
                    </tr>
                    <?php $a++ ?>
                    <?php endwhile; ?>
                </table>

            </div>

            <div class="input-group input-group-sm urutanList">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Short by</label>
                </div>
                <select class="custom-select" id="shortBy" onchange="showResult();">
                    <option value="1">Name A-Z</option>
                    <option value="2">Name Z-A</option>
                    <option value="3">Price 0-100</option>
                    <option value="4">Price 100-0</option>
                </select>
            </div>

        </div>


        <div class="contentNote content" id="contentNote">
            <h1 class="nameContentNote nameContent">Note</h1>
        </div>


        <div class="contentSetting content" id="contentSetting">
            <h1 class="nameContentSetting nameContent">Setting</h1>
        </div>

    </div>
    <script src="asset/js/javascript.js"></script>
</body>

</html>
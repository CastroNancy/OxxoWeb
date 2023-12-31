<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title> Oxxo Web</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="formss">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#" ><p class="ot"> <img class="im"src="logo.png"> Oxxo Web</p></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn ms-md-4 text-white" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- form Agregar fmoxxo -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- Agregar data -->
            <div class="card-body">
                <h3 class="card-title">Bienveni@ al formulario de empleados de Oxxo</h3>
                <p class="card-text">En OXXO tenemos como objetivo brindar una variedad de productos y servicios que sean útiles y prácticos para la vida cotidiana, por eso cada año nos convertimos en parte del estilo de vida de muchas personas.
Somos la primera pequeña cadena minorista con sucursales en la República Mexicana y Colombia, y con más de 30 años de experiencia, somos capaces de satisfacer las necesidades diarias de nuestros clientes. Somos parte de FEMSA, empresa mexicana fundada en 1890. FEMSA es una empresa líder en la industria de bebidas y controla Coca-Cola. FEMSA, el embotellador público de productos Coca-Cola más grande del mundo; En el sector cervecero, es el segundo accionista de Heineken, uno de los productores de cerveza más importantes del mundo, con presencia en más de 70 países. En el sector minorista, la empresa participa en FEMSA Comercio, que opera varias cadenas más pequeñas, lo que convierte a OXXO en una de las empresas más grandes y de más rápido crecimiento en América. Además, a través de los negocios estratégicos de FEMSA, brindamos servicios de logística, soluciones de refrigeración y soluciones plásticas a empresas FEMSA y clientes externos.</p>

                <!-- tampilkan pesan sukses diAgregar -->
                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'sukses')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>¡Genial!</strong>¡Datos agregados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Agregar¡Los datos agregados fallaron!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="tambah.php" method="POST">

                    <div class="col-12">
                        <label for="NombreEmp" class="form-label">Nombre:</label>
                        <input type="text" name="NombreEmp" class="form-control" placeholder="Juan....." required>
                    </div>
                    <div class="col-md-4">
                        <label for="ApellidoEmp" class="form-label">ApellidoEmp</label>
                        <input type="text" name="ApellidoEmp" class="form-control" placeholder="Perez......" required>
                    </div>

                    <div class="col-md-4">
                    <label for="edit_FechaIng" class="form-label">FechaIng</label>
                                <input type="date" name="edit_FechaIng" class="form-control" id="edit_FechaIng" required>
                                
                      
                    </div>

                    <div class="col-md-4">
                    <label for="IdSuc" class="form-label">IdSuc</label>
                        <select class="form-select" name="edit_IdSuc" id="edit_IdSuc" aria-label="Default select example">
                                    <option value="Oxxo Av. Juarez">Oxxo Av. Juarez</option>
                                    <option value="Oxxo Mision de San José">Oxxo Mision de San José</option>
                                    <option value="Oxxo Mision de San José">Oxxo Mision de San José</option>
                                    <option value="Oxxo Juzgados">Oxxo Juzgados</option>
                                    <option value="Oxxo Yepomera">Oxxo Yepomera</option>
                                    <option value="Oxxo Piña">Oxxo Piña</option>
                                </select>
                    </div>

                    <div class="col-md-6">
                        <label for="FechaNac" class="form-label">FechaNac</label>
                        <input type="date" name="edit_FechaNac" class="form-control" id="edit_FechaNac" required>
                    </div>

                    <div class="col-md-6">
                        <label for="Puesto" class="form-label">Puesto</label>
                        <select class="form-select" name="edit_Puesto" id="edit_Puesto" aria-label="Default select example">
                                    <option value="Cajas">Cajas</option>
                                    <option value="Gerencia">Gerencia</option>
                                    <option value="seguridad">seguridad</option>
                                    <option value="Ayudante de reparto">Ayudante de reparto</option>
                                    <option value="Axiliar contabilidad">Axiliar contabilidad</option>
                                    <option value="Jefe de Almacen">Jefe de Almacen</option>
                                </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn" value="daftar" name="tambah"><i class="fa fa-plus"></i><span class="ms-2">Agregar</span></button>
                    </div>
                </form>
            </div>
        </div>


        <!-- judul tabel -->
        <h5 class="mb-3">Registrate con Oxxo</h5>

        <div class="row my-3">
            <div class="col-md-2 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Mostrar entradas</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Busqueda..." aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- tampilkan pesan sukses dihapus -->
        <?php if (isset($_GET['hapus'])) : ?>
            <?php
            if ($_GET['hapus'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Sukses!</strong> Data berhasil dihapus!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Data gagal dihapus!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tampilkan pesan sukses di edit -->
        <?php if (isset($_GET['update'])) : ?>
            <?php
            if ($_GET['update'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Sukses!</strong> Data berhasil diupdate!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Data gagal diupdate!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>No</th>";
            echo "<th scope='col'>Nombre:</th>";
            echo "<th scope='col'>ApellidoEmp</th>";
            echo "<th scope='col'>IdSuc</th>";
            echo "<th scope='col'>FechaNac</th>";
            echo "<th scope='col'>FechaIng</th>";
            echo "<th scope='col'>Puesto</th>";
            echo "<th scope='col' class='text-center'>Sueldo</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $batas = 10;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($db, "SELECT * FROM fmoxxo");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_mhs = mysqli_query($db, "SELECT * FROM fmoxxo LIMIT $halaman_awal, $batas");
            $no = $halaman_awal + 1;

            // $sql = "SELECT * FROM fmoxxo";
            // $query = mysqli_query($db, $sql);




            while ($fmoxxo = mysqli_fetch_array($data_mhs)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $fmoxxo['idEmp'] . "</td>";
                echo "<td class='text-center'>" . $no++ . "</td>";
                echo "<td>" . $fmoxxo['NombreEmp'] . "</td>";
                echo "<td>" . $fmoxxo['ApellidoEmp'] . "</td>";
                echo "<td>" . $fmoxxo['IdSuc'] . "</td>";
                echo "<td>" . $fmoxxo['FechaNac'] . "</td>";
                echo "<td>" . $fmoxxo['FechaIng'] . "</td>";
                echo "<td>" . $fmoxxo['Puesto'] . "</td>";
                echo "<td>" . $fmoxxo['Sueldo'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // tombol hapus
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($jumlah_data == 0) {
                echo "<p class='text-center'>No hay datos disponibles en esta tabla</p>";
            } else {
                echo "<p>Total de registros... $jumlah_data </p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman > 1) ? "href='?halaman=$previous'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman < $total_halaman) ? "href='?halaman=$next'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Edit Data fmoxxo</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM fmoxxo";
                    $query = mysqli_query($db, $sql);
                    $fmoxxo = mysqli_fetch_array($query);
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='edit_idEmp' id='edit_idEmp'>

                            <div class="col-12 mb-3">
                                <label for="edit_NombreEmp" class="form-label">NombreEmp</label>
                                <input type="text" name="edit_NombreEmp" id="edit_NombreEmp" class="form-control" placeholder="Steve Jobs" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_ApellidoEmp" class="form-label">ApellidoEmp</label>
                                <input type="text" name="edit_ApellidoEmp" id="edit_ApellidoEmp" class="form-control" placeholder="G64190021" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_FechaIng" class="form-label">FechaIng</label>
                                <input type="date" name="edit_FechaIng" class="form-control" id="edit_FechaIng" required>
                                <input type="date" id="edit_FechaIng" name="edit_FechaIng" min="1900-01-01" max="2004-01-01">
                              
                            </div>


                            <div class="col-12 mb-3">
                            <label for="IdSuc" class="form-label">IdSuc</label>
                        <select class="form-select" name="edit_IdSuc" id="edit_IdSuc" aria-label="Default select example">
                                    <option value="Oxxo Av. Juarez">Oxxo Av. Juarez</option>
                                    <option value="Oxxo Mision de San José">Oxxo Mision de San José</option>
                                    <option value="Oxxo Mision de San José">Oxxo Mision de San José</option>
                                    <option value="Oxxo Juzgados">Oxxo Juzgados</option>
                                    <option value="Oxxo Yepomera">Oxxo Yepomera</option>
                                    <option value="Oxxo Piña">Oxxo Piña</option>
                                </select>
                            </div>



                            <div class="col-12 mb-3">
                                <label for="edit_urusan" class="form-label">FechaNac</label>
                                <input type="date" name="edit_FechaNac" class="form-control" id="edit_FechaNac" required>
                            </div>

                            <div class="col-12 mb-3">
                                <select class="form-select" name="edit_Puesto" id="edit_Puesto" aria-label="Default select example">
                                    <option value="Cajas">Cajas</option>
                                    <option value="Gerencia">Gerencia</option>
                                    <option value="seguridad">seguridad</option>
                                    <option value="Ayudante de reparto">Ayudante de reparto</option>
                                    <option value="Axiliar contabilidad">Axiliar contabilidad</option>
                                    <option value="Jefe de Almacen">Jefe de Almacen</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-12 mb-3">
                                <label for="edit_Sueldo" class="form-label">Sueldo</label>
                                <input type="text" name="edit_Sueldo" id="edit_Sueldo" class="form-control" placeholder="2000.00" required>
                            </div>

                        <div class='modal-footer'>
                            <button type='submit' name='edit_data' class='btn'>Ahorrar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmación</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='hapus.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_idEmp' id='delete_idEmp'>
                            <p>Yakin ingin menghapus data ini?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='deletedata' class='btn'>Limpiar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#edit_id').val(data[0]);
                // gak dipake, karena cuma increment number
                // $('#no').val(data[1]);
                $('#edit_NombreEmp').val(data[2]);
                $('#edit_ApellidoEmp').val(data[3]);
                $('#gender').val(data[4]);
                // IdSuc checked
                if (data[4] == "Laki-Laki") {
                    $("#cowok").prop("checked", true);
                } else {
                    $("#cewek").prop("checked", true);
                }

                $('#edit_FechaNac').val(data[5]);
                $('#edit_FechaIng').val(data[6]);
                $('#edit_Puesto').val(data[7]);
                $('#edit_Sueldo').val(data[8]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>
<footer class="ft"><center>
    <p class="ot" style="color: white;">&copy; Oxxo_<?= date("Y"); ?>  <br> Castro Luna Nancy Yazmin 5°I<p>
</center>

</footer>

</html>
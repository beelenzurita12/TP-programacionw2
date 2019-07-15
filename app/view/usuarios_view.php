<section class="full-width section">
	<div class="container">
		<h2 class="title-section-h2">Usuarios habilitados</h2>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0; $i < sizeof($data["habilitados"]); $i++){

                            $usuarios = "<tr>
                                            <th scope='row'>" . $data["habilitados"][$i]['idUsuario'] . "</th>
                                            <td>" . $data["habilitados"][$i]['tipoUsuario'] . "</td>
                                            <td>" . $data["habilitados"][$i]['nombre'] . "</td>
                                            <td>" . $data["habilitados"][$i]['apellido'] . "</td>
                                            <td>" . $data["habilitados"][$i]['email'] . "</td>
                                            // <td><a href='". $GLOBALS['root'] ."admin/bloquearUsuario?idUsuario=". $data["habilitados"][$i]["idUsuario"] ."'><i class='fas fa-user-times icon-admin' style='color: #f15656;'></i></a></td>
                                         </tr>";

                            echo $usuarios;
                        }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
	</div>
    <div class="container">
		<h2 class="title-section-h2">Usuarios deshabilitados</h2>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    for($i = 0; $i < sizeof($data["deshabilitados"]); $i++){

                        $usuarios = "<tr>
                                        <th scope='row'>" . $data["deshabilitados"][$i]['idUsuario'] . "</th>
                                        <td>" . $data["deshabilitados"][$i]['tipoUsuario'] . "</td>
                                        <td>" . $data["deshabilitados"][$i]['nombre'] . "</td>
                                        <td>" . $data["deshabilitados"][$i]['apellido'] . "</td>
                                        <td>" . $data["deshabilitados"][$i]['email'] . "</td>
                                        <td><a href='". $GLOBALS['root'] ."admin/desbloquearUsuario?idUsuario=". $data["deshabilitados"][$i]["idUsuario"] ."'><i class='fas fa-user-check icon-admin' style='color: #529e52;'></i></a></td>
                                        </tr>";

                        echo $usuarios;
                    }
                ?>                  
                </tbody>
                </table>
            </div>
        </div>
	</div>
</section>
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
                        for($i = 0; $i < sizeof($data); $i++){

                            $usuarios = "<tr>
                                            <th scope='row'>" . $data[$i]['idUsuario'] . "</th>
                                            <td>" . $data[$i]['tipoUsuario'] . "</td>
                                            <td>" . $data[$i]['nombre'] . "</td>
                                            <td>" . $data[$i]['apellido'] . "</td>
                                            <td>" . $data[$i]['email'] . "</td>
                                            <td><i class='fas fa-user-times icon-admin' style='color: #f15656;'></i></td>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Tipo</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Email</td>
                        <td><i class="fas fa-user-check icon-admin" style='color: #529e52;'></i></td>
                    </tr>                    
                </tbody>
                </table>
            </div>
        </div>
	</div>
</section>
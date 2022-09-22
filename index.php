<!doctype html>
<html lang="en">

<head>
    <title>Pagina PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <h1>Formulario Estudiantes</h1>
    <div class="container">
<form class="d-flex">
    <div class="col">

        <div class="mb-3">
            <label for="lbl_carne" class="form-label"><b>Carne</b></label>
            <input type="text" name="txt_carne" id="txt_carne" class="form-control" placeholder="" pattern="[([E][000-999])+]" required/>
            <small id="helpId" class="text-muted">Ejemplo: E001</small>
        </div>

        <div class="mb-3">
            <label for="lbl_nombre" class="form-label"><b>Nombre</b></label>
            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder="" required>
            <small id="helpId" class="text-muted">Ejemplo: Juanito</small>
        </div>

        <div class="mb-3">
            <label for="lbl_apellido" class="form-label"><b>Apellido</b></label>
            <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" placeholder="" required>
            <small id="helpId" class="text-muted">Ejemplo: Chacajyos</small>
        </div>

        <div class="mb-3">
            <label for="lbl_direccion" class="form-label"><b>Direccion</b></label>
            <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="" required>
            <small id="helpId" class="text-muted">Ejemplo: Casa No. 51 La Antigua Guatemala Sacatepequez</small>
        </div>

        <div class="mb-3">
            <label for="lbl_telefono" class="form-label"><b>Telefono</b></label>
            <input type="number" name="txt_telefono" id="txt_telefono" class="form-control" placeholder="" required>
            <small id="helpId" class="text-muted">Ejemplo: 00000000</small>
        </div>

        <div class="mb-3">
            <label for="lbl_genero" class="form-label"><b>Genero</b></label>
            <input type="textr" name="txt_genero" id="txt_genero" class="form-control" placeholder="" required>
            <small id="helpId" class="text-muted">M o F</small>
        </div>

        <div class="mb-3">
            <label for="lbl_email" class="form-label"><b>Email</b></label>
            <input type="textr" name="txt_email" id="txt_email" class="form-control" placeholder="" required>
            <small id="helpId" class="text-muted">Ejemplo: atojins@miumg.edu.gt</small>
        </div>

        <div class="mb-3">
            <label for="lbl_fn" class="form-label"><b>Fecha de Nacimiento</b></label>
            <input type="date" name="txt_fn" id="txt_fn" class="form-control" placeholder="" required>
            <small id="helpId" class="text-muted">dd/mm/aaaaa</small>
        </div>

        <div class="mb-3">
        <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value = "Agregar">
                <input type="submit" name="btn_modificar" id="btn_modificar" class="btn btn-success" value = "Modificar">
                <input type="submit" name="btn_eliminar" id="btn_eliminar" class="btn btn-danger" onclick="javascript:if(!confirm('¿Desea Eliminar?'))return false" value = "Eliminar">
                <input type="submit" name="btn_nuevo" id="btn_nuevo" class="btn btn-secondary" onclick="limpiar()" value = "Nuevo">
        </div>

    </div>
</form>  

    <div>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Carne</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Genero</th>
                    <th>Email</th>
                    <th>Fecha de Nacimiento</th>
                </tr>
            </thead>
            <tbody id="tbl_estudiantes">

            </tbody>
        </table>
    </div>
    

        </div>
    <header>
    <!-- place navbar here -->
    </header>
    <main>
    
    </main>
        <footer>
        <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
                integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
            </script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
                integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
            </script>
            <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript">
    function limpiar(){
        $("#txt_id").val(0);
        $("#txt_carne").val('');
        $("#txt_nombre").val('');
        $("#txt_apellido").val('');
        $("#txt_direccion").val('');
        $("#txt_telefono").val('');
        $("#txt_genero").val('');
        $("#txt_email").val('');
        $("#txt_fn").val('');
        
    }
    $('#tbl_empleados').on('click','tr td',function(evt){
        var target,id,idp,codigo,nombre,apellido,direccion,telefono,,genero,email,fecha_nacimiento;
        target = $(event.target);
        id = target.parent().data('id');
        idp = target.parent().data('idp');
        carne = target.parent("tr").find("td").eq(0).html();
        nombre = target.parent("tr").find("td").eq(1).html();
        apellido =  target.parent("tr").find("td").eq(2).html();
        direccion = target.parent("tr").find("td").eq(3).html();
        telefono = target.parent("tr").find("td").eq(4).html();
        genero = target.parent("tr").find("td").eq(4).html();
        email = target.parent("tr").find("td").eq(4).html();
        fecha_nacimiento  = target.parent("tr").find("td").eq(6).html();
        $("#txt_id").val(id);
        $("#txt_carne").val(carne);
        $("#txt_nombre").val(nombre);
        $("#txt_apellido").val(apellido);
        $("#txt_direccion").val(direccion);
        $("#txt_telefono").val(telefono);
        $("#txt_genero").val(genero);
        $("#txt_email").val(email);
        $("#txt_fn").val(fecha_nacimiento));
        $("#modal_estudiates").modal('show');
        
        });
</script>
</body>

</html>
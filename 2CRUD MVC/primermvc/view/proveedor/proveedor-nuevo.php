<div class="container">
    <h1 class="page-header text-center p-5">
        Nuevo Registro
    </h1>
    <ol class="breadcrumb gap-3">
        <button class="btn btn-dark border-0 ">
            <li>
                <a class="text-decoration-none text-white" href="?c=proveedor">Proveedores</a>
            </li>
        </button>
        <li class="active d-flex align-items-center font-weight-bold">Nuevo Registro</li>
    </ol>
    <form id="frm-proveedor" action="?c=proveedor&a=Guardar" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nit</label>
            <input type="text" name="nit" value="<?php echo $pvd->nit; ?>" class="form-control"
                place-holder="Ingrese Nit Proveedor" data-validacion-tipo="requerido|min:20" pattern="[0-9\-]+" title="Ingresa solo números" class="form-control" required/>
        </div>
        <div class="form-group">
            <label>Razón Social</label>
            <input type="text" name="razonS" value="<?php echo $pvd->razonS; ?>" class="form-control"
                placeholder="Ingrese Razón Social" data-validacion-tipo="requerido|min:100"  pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" title="Ingresa solo texto" required/>
        </div>
        <div class="form-group">
            <label>Dirección</label>
            <input type="text" name="dir" value="<?php echo $pvd->dir; ?>" class="form-control"
                place-holder="Ingrese dirección proveedor" data-validacion-tipo="requerido|min:100"  pattern="[A-Za-z0-9\s#\-]+" required/>
        </div>
        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" name="tel" value="<?php echo $pvd->tel; ?>" class="form-control"
                place-holder="Ingrese teléfono proveedor" data-validacion-tipo="requerido|min:10"  pattern="^\+?\d+$" title="Ingresa solo números" required/>
        </div>
        <hr />
        <div class="text-center">
            <button class="btn btn-success btn-dark">Guardar</button>
        </div>
    </form>
</div>
<script>
    $(document).ready(function () {
        $("#frm-proveedor").submit(function () {
            return $(this).validate();
        });
    })
</script>
<div class="container">
    <h1 class="page-header text-center p-5">
        <?php echo $pvd->nit != null ? $pvd->razonS : 'Nuevo Registro'; ?>
    </h1>
    <ol class="breadcrumb gap-3">
        <button class="btn btn-dark border-0 ">
            <li>
                <a class="text-decoration-none text-white" href="?c=proveedor">Proveedores</a>
            </li>
        </button>
        <li class="active d-flex align-items-center font-weight-bold"><?php echo $pvd->nit != null ? $pvd->razonS : 'Nuevo Registro'; ?></li>
    </ol>
    <form id="frm-proveedor" action="?c=proveedor&a=Editar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nit" value="<?php echo $pvd->nit; ?>" />
        <div class="form-group">
            <label>Razón Social</label>
            <div class="form-control border-0">
                <input type="text" name="razonS" value="<?php echo $pvd->razonS; ?>" class="input input-alt input-prov-nue" data-validacion-tipo="requerido|min:100" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" title="Ingresa solo texto" required />
                <span class="input-border input-border-alt"></span>
            </div>
        </div>
        <div class="form-group">
            <label>Dirección</label>
            <div class="form-control border-0">
                <input type="text" name="dir" value="<?php echo $pvd->dir; ?>" class="input input-alt input-prov-nue" data-validacion-tipo="requerido|min:100" pattern="[A-Za-z0-9\s#\-]+" required />
                <span class="input-border input-border-alt"></span>
            </div>
        </div>
        <div class="form-group">
            <label>Teléfono</label>
            <div class="form-control border-0">
                <input type="text" name="tel" value="<?php echo $pvd->tel; ?>" class="input input-alt border-0 input-prov-nue" data-validacion-tipo="requerido|min:10" pattern="^\+?\d+$" title="Ingresa solo números" required />
                <span class="input-border input-border-alt"></span>
            </div>
        </div>
        <div class="text-center">
            <span class="btn btn-success btn-dark"><a href="?c=proveedor" class="text-decoration-none text-white">Volver</a></span>
            <button class="btn btn-success btn-dark">Actualizar</button>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        $("#frm-proveedor").submit(function() {
            return $(this).validate();
        });
    })
</script>
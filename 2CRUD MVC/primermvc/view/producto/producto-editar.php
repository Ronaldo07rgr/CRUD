<div class="container">
    <h1 class="page-header">
        <?php echo $prod->idProducto != null ? $prod->nomprod : 'Nuevo Registro'; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="?c=producto">Productos</a></li>
        <li class="active pl-3">
            <?php echo $prod->idProducto != null ? $prod->nomprod : 'Nuevo Registro';
        ?>
        </li>
    </ol>
    <form id="frm-producto" action="?c=producto&a=Editar" method="post" enctype="multipart/
form-data">
        <input type="hidden" name="idProducto" value="<?php echo $prod->idProducto; ?>" />
        <div class="form-group">
            <div class="form-control border-0">
                <label>Nit Proveedor</label>
                <input type="text" name="nit" value="<?php echo $prod->nit; ?>" class="input input-alt input-prov-nue"
                    data-validacion-tipo="requerido|min:20" pattern="[0-9\-]+" title="Ingresa solo números" required />
                <span class="input-border input-border-alt"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="form-control border-0">
                <label>Nombre Producto</label>
                <input type="text" name="nomprod" value="<?php echo $prod->nomprod; ?>"
                    class="input input-alt input-prov-nue" data-validacion-tipo="requerido|min:100"
                    pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" title="Ingresa solo texto" />
                <span class="input-border input-border-alt"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="form-control border-0">
                <label>Precio Unitario</label>
                <input type="text" name="precioU" value="<?php echo $prod->precioU; ?>"
                    class="input input-alt input-prov-nue" data-validacion-tipo="requerido|min:20"
                    pattern="^\d+(\.\d{1,2})?$" title="ingrese un valor valido" />
                <span class="input-border input-border-alt"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="form-control border-0">
                <label>Descripción del Producto</label>
                <input type="text" name="descrip" value="<?php echo $prod->descrip; ?>"
                    class="input input-alt input-prov-nue" data-validacion-tipo="requerido|min:240"
                    pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" title="Ingresa solo texto" />
                <span class="input-border input-border-alt"></span>
            </div>
        </div>
        <div class="text-center ">
            <span class="btn btn-success btn-dark"><a href="?c=proveedor"
                    class="text-decoration-none text-white">Volver</a></span>
            <button class="btn btn-success btn-dark">Actualizar</button>
        </div>
    </form>
</div>
<script>
$(document).ready(function() {
    $("#frm-producto").submit(function() {
        return $(this).validate();
    });
})
</script>
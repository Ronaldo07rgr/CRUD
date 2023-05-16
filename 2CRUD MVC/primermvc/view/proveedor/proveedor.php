<div class="container">
    <h1 class="page-header">Proveedores</h1>
    <table class="table table-striped border-top-0">
        <thead>
            <tr>
                <th style="width:180px;">NIT</th>
                <th style="width:120px;">Razón Social</th>
                <th style="width:120px;">Dirección</th>
                <th style="width:120px;">Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
                <tr>
                    <td style="border: none;">
                        <?php echo $r->nit; ?>
                    </td>
                    <td style="border: none;">
                        <?php echo $r->razonS; ?>
                    </td>
                    <td style="border: none;">
                        <?php echo $r->dir; ?>
                    </td>
                    <td style="border: none;">
                        <?php echo $r->tel; ?>
                    </td>
                    <td class="text-center bg-white text-dark" style= "width:50px; border: none; ">
                        <a href="?c=proveedor&a=Crud&nit=<?php echo $r->nit; ?>">Editar</a>
                    </td>
                    <td class="text-center bg-white text-dark" style= "width:50px; border: none;">
                        <a onclick="javascript:return confirm(‘¿Seguro de eliminar este registro?’);"href="?c=proveedor&a=Eliminar&nit=<?php echo $r->nit; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="well well-sm text-center">
        <a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
        <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
    </div>
</div>
<script src="https://kit.fontawesome.com/7fa9974a48.js" crossorigin="anonymous"></script>
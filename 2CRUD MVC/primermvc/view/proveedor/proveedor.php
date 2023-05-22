<div class="container">
    <h1 class="page-header text-center p-5">Proveedores</h1>
    <table class="table table-striped border-top-0">
        <thead>
            <tr>
                <th class="border-0" style="width:180px;">NIT</th>
                <th class="border-0" style="width:120px;">Razón Social</th>
                <th class="border-0" style="width:120px;">Dirección</th>
                <th class="border-0" style="width:120px;">Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->model->Listar() as $r): ?>
                <tr>
                    <td class="pt-3 border-0">
                        <?php echo $r->nit; ?>
                    </td>
                    <td class="pt-3 border-0">
                        <?php echo $r->razonS; ?>
                    </td>
                    <td class="pt-3 border-0">
                        <?php echo $r->dir; ?>
                    </td>
                    <td class="pt-3 border-0">
                        <?php echo $r->tel; ?>
                    </td>
                    <td class="text-center  text-dark button-edit" style="width:15px; border: none; ">
                        <span class="btn-edit btn-delete btn btn-dark">
                            <a href="?c=proveedor&a=Crud&nit=<?php echo $r->nit; ?>">
                                <span class="icon-wrapper">
                                    <i class="fa fa-pencil"></i>
                                </span>
                            </a>
                        </span>
                    </td>
                    <td class="text-center text-dark" style="width:15px; border: none;">
                        <span class="btn-delete btn btn-dark">
                            <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');"
                                href="?c=proveedor&a=Eliminar&nit=<?php echo $r->nit; ?>">
                                <span class="icon-wrapper">
                                    <i class="fa fa-trash-o"></i>
                                </span>
                            </a>
                        </span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="well well-sm text-center">
        <a class="btn btn-dark" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
        <a class="btn btn-dark" href="?c=producto&a=Nuevo">Nuevo Producto</a>
    </div>
</div>
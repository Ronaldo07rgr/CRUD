<div class="container">
    <h1 class="page-header text-center p-5">Productos </h1>
    <table class="table table-striped border-top-0">
        <thead>
            <tr>
                <th style="width:180px;">Código Producto</th>
                <th style="width:120px;">NIT Proveedor</th>
                <th style="width:120px;">Nombre Producto</th>
                <th style="width:120px;">Precio Unitario</th>
                <th style="width:120px;">Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->model->Listar() as $r) : ?>
                <tr>
                    <td><?php echo $r->idProducto; ?></td>
                    <td><?php echo $r->nit; ?></td>
                    <td><?php echo $r->nomprod; ?></td>
                    <td><?php echo $r->precioU; ?></td>
                    <td><?php echo $r->descrip; ?></td>
                    <td class="text-center text-dark button-edit" style="width:15px; border: none; ">
                        <span class="btn-edit-product btn-delete-product btn btn-dark">
                            <a href="?c=producto&a=Crud&idProducto=<?php echo $r->idProducto; ?>">
                                <span class="icon-wrapper-product">
                                    <i class="fa fa-pencil"></i>
                                </span>
                            </a>
                        </span>
                    </td>
                    <td class="text-center text-dark" style="width:15px; border: none;">
                        <span class="btn-delete btn btn-dark">
                            <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');"
                                href="?c=producto&a=Eliminar&idProducto=<?php echo $r->idProducto; ?>">
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
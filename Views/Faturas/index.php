    <div class="row min-wh-100 mt-0" style="    background-color:rgba(243,243,244,255);">
        <span class="fs-3">Faturas</span>
    </div>
    <div class="row" style="height:95.3245vh; background-color: #e8e8e9;">
        <div class="row" style="margin-top: 5rem;">
            <div class="col-sm-12">
                <a href="router.php?c=fatura&a=escolher"><button type="button" style="position: absolute;top: 10.5vh; left:90.12vw; transform: translate(-50%, -50%);"class="btn btn-primary">+ Nova Fatura</button></a>
                <table class="table table-stripped">
                    <thead class="table-dark">
                        <th style="border-radius: 10px 0 0 0;"><h3>ID</h3></th>
                        <th><h3>Data</h3></th>
                        <th><h3>Valor total</h3></th>
                        <th><h3>IVA total</h3></th>
                        <th><h3>Estado</h3></th>
                        <th><h3>Cliente</h3></th>
                        <th><h3>Funcionario</h3></th>
                        <th style="border-radius: 0 10px 0 0;"></th>
                    </thead>
                    <tbody>
                        <?php foreach ($faturas as $fatura) { ?>
                        <tr>
                            <td><?=$fatura->id?></td>
                            <td><?=$fatura->data?></td>
                            <td><?=$fatura->valortotal?>€</td>
                            <td><?=$fatura->ivatotal?>€</td>
                            <td><?=$fatura->estado?></td>
                            <td><?=$fatura->cliente->username?></td>
                            <td><?=$fatura->funcionario->username?></td>
                            <?php if($fatura->estado == 'emitida' && $role != 'cliente') { ?>
                                <td>
                                    <i class="fs-4 text-secondary bi bi-check-lg" title="Emitir"></i>
                                    <a href="router.php?c=fatura&a=show&id=<?= $fatura->id ?>" class="text-black" title="Mostrar"><i class="fs-4 bi bi-eye"></i></a>
                                    <i class="fs-4 bi bi-pencil text-secondary pl-2" title="Editar"></i>
                                    <a href="router.php?c=fatura&a=delete&id=<?= $fatura->id ?>" class="text-black" title="Apagar"><i class="fs-4 bi bi-trash"></i></a>
                                </td>
                            <?php }
                            if($fatura->estado == 'em lancamento' && $role != 'cliente') { ?>
                                <td>
                                    <a href="router.php?c=fatura&a=emitir&id=<?= $fatura->id ?>" class="text-black" title="Mostrar"><i class="fs-4 bi bi-check-lg" title="Emitir"></i></a>
                                    <a href="router.php?c=fatura&a=show&id=<?= $fatura->id ?>" class="text-black" title="Mostrar"><i class="fs-4 bi bi-eye"></i></a>
                                    <a href="router.php?c=fatura&a=register&id=<?= $fatura->id ?>" class="text-black" title="Mostrar"><i class="fs-4 bi bi-pencil pl-2" title="Editar"></i>
                                    <a href="router.php?c=fatura&a=delete&id=<?= $fatura->id ?>" class="text-black" title="Apagar"><i class="fs-4 bi bi-trash"></i></a>
                                </td>
                            <?php }
                            if($role == 'cliente'){ ?>
                                <td>
                                    <a href="router.php?c=fatura&a=show&id=<?= $fatura->id ?>" class="text-black" title="Mostrar"><i class="fs-4 bi bi-eye"></i></a>
                                </td>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6">
            </div>
        </div> <!-- /row -->
    </div> <!-- /row -->
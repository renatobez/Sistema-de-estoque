<?php
require __DIR__ . '/pages/header.php';
require __DIR__ . '/pages/footer.php';
require __DIR__ . '/../source/functions.php';
require __DIR__ . "/../controller/cadastraRegistro.php";
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card-body shadow p-3 mt-1 mb-1" style="background-color: #ffffff; color: #343434; border-radius: 5px;">
                <h4 class="card-title display-6 text-center">SIEPI</h4>
                <p class="text-center">Sistema de Estoque para Insumos</p>
            </div>
            <!-- Dashboard-->
            <div class="row  d-flex justify-content-center ">
                <div class="card shadow p-3 mt-3 mb-3" style="width: 30%">
                    <div class="card-header">
                        Total cadastrado
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">No estoque</p>
                    </div>
                </div>

                <div class="card shadow p-3 mt-3 mb-3" style="width: 30%">
                    <div class="card-header">
                        Saídas do mês <?php mostrarMes(); ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">De saídas este Mês</p>
                    </div>
                </div>

                <div class="card shadow p-3 mt-3 mb-3" style="width: 30%">
                    <div class="card-header">
                        Total cadastrado
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>

                
            <!-- card ações-->
            <div class="card-body shadow p-3 mb-3" style="background-color: #ffffff; color: #343434; border-radius: 5px;">
                <p class="p-1 text-center fw-bolder">Painel de administração</p>
                <div class="card-body shadow p-2" style="background-color: #e8e8e8; color: #343434; border-radius: 5px;">

                    <!-- modal adicionar registro-->
                    <!-- Button trigger modal adicionar-->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#adicionar" style="padding:3%; font-size: 16px;">
                    <i class="bi bi-database-add"></i> Cadastrar
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="adicionar" tabindex="-1" aria-labelledby="adicionarLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="adicionarLabel">Registrar novo estoque</h1>
                                </div>
                                <div class="modal-body  m-2" style="background-color: #e8e8e8; color: #343434; border-radius: 5px;">
                                    <form action="" method="post" class=" p-3 mx-auto" style="width: 100%">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-4 p-1">
                                                <label for="tipodeinsumo" class="form-label">Tipo de insumo</label>
                                                <select id="tipodeinsumo" class="form-select" name="tipo" required>
                                                    <option selected></option>
                                                    <option>Memória RAM</option>
                                                    <option>Processador</option>
                                                    <option>Placa de rede</option>
                                                    <option>Roteador</option>
                                                    <option>Placa Wifi</option>
                                                    <option>Placa de vídeo</option>
                                                    <option>Cabo</option>
                                                </select>
                                            </div>
                                            <div class="col-4 p-1">
                                                <label for="nome" class="form-label">Nome do item</label>
                                                <input type="text" class="form-control" aria-label="Last name" id="nome" name="nome" required>
                                            </div>
                                            <div class="col-2 p-1">
                                                <label for="qtd" class="form-label">Quantidade</label>
                                                <input type="number" class="form-control" aria-label="Last name " id="quantidade" name="quantidade" required>
                                            </div>
                                            <div class="col-2 p-1">
                                                <label for="estado" class="form-label">Estado</label>
                                                <select id="estado" class="form-select" name="estado" required>
                                                    <option>Novo</option>
                                                    <option>Usado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success  ">Cadastrar</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- modal consultar registro-->
                    <!-- Button trigger modal adicionar-->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#consultar" style="padding:3%; font-size: 16px;">
                    <i class="bi bi-database-dash"></i> Consultar
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="consultar" tabindex="-1" aria-labelledby="consultarLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="consultarLabel">Consultar estoque</h1>
                                </div>
                                <div class="modal-body m-2" style="background-color: #e8e8e8; color: #343434; border-radius: 5px;">
                                    <form action="" method="post" class=" p-3 mx-auto" style="width: 100%">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-4 p-1">
                                                <label for="tipodeinsumo" class="form-label">Tipo de insumo</label>
                                                <select id="tipodeinsumo" class="form-select" name="tipo" required>
                                                    <option selected></option>
                                                    <option>Memória RAM</option>
                                                    <option>Processador</option>
                                                    <option>Placa de rede</option>
                                                    <option>Roteador</option>
                                                    <option>Placa Wifi</option>
                                                    <option>Placa de vídeo</option>
                                                    <option>Cabo</option>
                                                </select>
                                            </div>
                                            <div class="col-4 p-1">
                                                <label for="nome" class="form-label">Nome do item</label>
                                                <input type="text" class="form-control" aria-label="Last name" id="nome" name="nome" required>
                                            </div>
                                            <div class="col-2 p-1">
                                                <label for="qtd" class="form-label">Quantidade</label>
                                                <input type="number" class="form-control" aria-label="Last name " id="quantidade" name="quantidade" required>
                                            </div>
                                            <div class="col-2 p-1">
                                                <label for="estado" class="form-label">Estado</label>
                                                <select id="estado" class="form-select" name="estado" required>
                                                    <option>Novo</option>
                                                    <option>Usado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success  ">Cadastrar</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- modal relatorio de registro-->
                    <!-- Button trigger modal adicionar-->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#relatorio" style="padding:3%; font-size: 16px;">
                    <i class="bi bi-bar-chart-line"></i> Relatórios
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="relatorio" tabindex="-1" aria-labelledby="relatorioLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="relatorioLabel">Relatório de estoque</h1>
                                </div>
                                <div class="modal-body m-2" style="background-color: #e8e8e8; color: #343434; border-radius: 5px;">
                                    <form action="" method="post" class=" p-3 mx-auto" style="width: 100%">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-4 p-1">
                                                <label for="tipodeinsumo" class="form-label">Tipo de insumo</label>
                                                <select id="tipodeinsumo" class="form-select" name="tipo" required>
                                                    <option selected></option>
                                                    <option>Memória RAM</option>
                                                    <option>Processador</option>
                                                    <option>Placa de rede</option>
                                                    <option>Roteador</option>
                                                    <option>Placa Wifi</option>
                                                    <option>Placa de vídeo</option>
                                                    <option>Cabo</option>
                                                </select>
                                            </div>
                                            <div class="col-4 p-1">
                                                <label for="nome" class="form-label">Nome do item</label>
                                                <input type="text" class="form-control" aria-label="Last name" id="nome" name="nome" required>
                                            </div>
                                            <div class="col-2 p-1">
                                                <label for="qtd" class="form-label">Quantidade</label>
                                                <input type="number" class="form-control" aria-label="Last name " id="quantidade" name="quantidade" required>
                                            </div>
                                            <div class="col-2 p-1">
                                                <label for="estado" class="form-label">Estado</label>
                                                <select id="estado" class="form-select" name="estado" required>
                                                    <option>Novo</option>
                                                    <option>Usado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success  ">Cadastrar</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- últimas entradas-->
            <div class="card-body shadow p-3 mb-3 col-4" style="background-color: #ffffff; color: #343434; border-radius: 5px; width: 40%;">
                <h5 class="card-title">Últimas entradas</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">tipo</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        //obtem os dados enviados pelo formulario
                        $dados = recebeDadosFormulario();

                        // se houver dados, adiciona uma nova linha na tabela
                        if (!empty($dados)) {
                        ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?php echo $dados['tipo'] ?></td>
                                <td><?php echo $dados['nome'] ?></td>
                                <td><?php echo $dados['qtd'] ?></td>
                                <td><?php echo $dados['estado'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- últimas saidas-->
            <div class="card-body shadow p-3 mb-3" style="background-color: #ffffff; color: #343434; border-radius: 5px; width: 40%;">
                <h5 class="card-title">Últimas Saídas</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">tipo</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        //obtem os dados enviados pelo formulario
                        $dados = recebeDadosFormulario();

                        // se houver dados, adiciona uma nova linha na tabela
                        if (!empty($dados)) {
                        ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?php echo $dados['tipo'] ?></td>
                                <td><?php echo $dados['nome'] ?></td>
                                <td><?php echo $dados['qtd'] ?></td>
                                <td><?php echo $dados['estado'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
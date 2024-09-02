<hr class="mt-5 mb-5">
<main class="container">

    <div class="table-responsive pb-5">
        <table class="table">
            <thead class="custom-thead">
                <tr class="text-center">
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>E-mail</th>
                    <th>Celular para contato</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($contatos) && !empty($contatos)): ?>
                    <?php foreach ($contatos as $contato): ?>
                        <tr class="text-center border-bottom border-right">
                            <td><?php echo htmlspecialchars($contato['nome_completo']); ?></td>
                            <td><?php echo htmlspecialchars((new DateTime($contato['data_nascimento']))->format('d-m-Y')); ?></td>
                            <td><?php echo htmlspecialchars($contato['email']); ?></td>
                            <td><?php echo htmlspecialchars($contato['celular_contato']); ?></td>
                            <td>
                                <a href="index.php?action=edit&id=<?php echo $contato['id']; ?>"><img src="assets/editar.png" alt="Editar"></a>
                                <a href="index.php?action=delete&id=<?php echo $contato['id']; ?>"><img src="assets/excluir.png" alt="Excluir"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Nenhum contato encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>
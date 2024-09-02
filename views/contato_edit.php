<main class="container mt-4">
    <div class="container mt-5">
        <form action="index.php?action=update&id=<?php echo $contato['id']; ?>" method="POST">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nome_completo" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control rounded-0" id="nome_completo" name="nome_completo" value="<?php echo htmlspecialchars($contato['nome_completo']); ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control rounded-0" id="data_nascimento" name="data_nascimento" value="<?php echo htmlspecialchars($contato['data_nascimento']); ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control rounded-0" id="email" name="email" value="<?php echo htmlspecialchars($contato['email']); ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="profissao" class="form-label">Profissão</label>
                    <input type="text" class="form-control rounded-0" id="profissao" name="profissao" value="<?php echo htmlspecialchars($contato['profissao']); ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="telefone_contato" class="form-label">Telefone para Contato</label>
                    <input type="tel" class="form-control rounded-0" id="telefone_contato" name="telefone_contato" value="<?php echo htmlspecialchars($contato['telefone_contato']); ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="celular_contato" class="form-label">Celular para Contato</label>
                    <input type="tel" class="form-control rounded-0" id="celular_contato" name="celular_contato" value="<?php echo htmlspecialchars($contato['celular_contato']); ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="whatsapp" name="whatsapp" <?php echo $contato['whatsapp'] ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="whatsapp">Número de celular possui WhatsApp</label>
                </div>
                <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="notificacao_email" name="notificacao_email" <?php echo $contato['notificacao_email'] ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="notificacao_email">Enviar notificações por e-mail</label>
                </div>
                <div class="form-check col-md-6 mt-4">
                    <input type="checkbox" class="form-check-input" id="notificacao_sms" name="notificacao_sms" <?php echo $contato['notificacao_sms'] ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="notificacao_sms">Enviar notificações por SMS</label>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </form>
    </div>
</main>
<script>
<?php require_once 'js/formato_telefone.js'?>
</script>

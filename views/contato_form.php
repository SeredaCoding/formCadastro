
<main class="container mt-4">
    <!-- Formulário de Cadastro -->
    <div class="container">
        <form action="index.php?action=create" method="POST">
            <!-- Campos do formulário -->
            <div class="row mb-3 pt-5">
                <div class="col-md-6">
                    <label for="nome_completo" class="form-label">Nome Completo</label>
                    <input placeholder="Ex.: Letícia Pacheco dos Santos" type="text" class="form-control rounded-0" id="nome_completo" name="nome_completo" required>
                </div>
                <div class="col-md-6">
                    <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control rounded-0" id="data_nascimento" name="data_nascimento" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input placeholder="Ex.: leticia@gmail.com" type="email" class="form-control rounded-0" id="email" name="email" required>
                </div>
                <div class="col-md-6">
                    <label for="profissao" class="form-label">Profissão</label>
                    <input placeholder="Ex.: Desenvolvedora Web" type="text" class="form-control rounded-0" id="profissao" name="profissao" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="telefone_contato" class="form-label">Telefone para Contato</label>
                    <input placeholder="Ex.: (11) 4033-2019" type="tel" class="form-control rounded-0" id="telefone_contato" name="telefone_contato" required>
                </div>
                <div class="col-md-6">
                    <label for="celular_contato" class="form-label">Celular para Contato</label>
                    <input placeholder="Ex.: (11) 98493-2039" type="tel" class="form-control rounded-0" id="celular_contato" name="celular_contato" required>
                </div>
            </div>
            <div class="row mb-3 m-4 pt-5">
                <div class="form-check mb-2 col-md-6">
                    <input type="checkbox" class="form-check-input" id="whatsapp" name="whatsapp">
                    <label class="form-check-label" for="whatsapp">Número de celular possui WhatsApp</label>
                </div>
                <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="notificacao_email" name="notificacao_email">
                    <label class="form-check-label" for="notificacao_email">Enviar notificações por e-mail</label>
                </div>
                <div class="form-check mb-2 col-md-6 mt-4">
                    <input type="checkbox" class="form-check-input" id="notificacao_sms" name="notificacao_sms">
                    <label class="form-check-label" for="notificacao_sms">Enviar notificações por SMS</label>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Cadastrar Contato</button>
            </div>
        </form>
    </div>
    
</main>
<script>
<?php require_once 'js/formato_telefone.js'?>
</script>
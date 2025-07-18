<?php
$titulo_pagina = "Bem-vindo ao nosso website";
$descricao_pagina = "Somos uma empresa de terceirização de serviços de contabilidade, constituída por profissionais com larga experiência nas áreas em que atuamos: Contábil - Tributária - Fiscal e Trabalhista.";
$index = true;
?>
<?php include_once('header.php'); ?>

<section class="bkg">

    <div class="container pt-10"> 
        <!-- <h2 class="text-align-center mb-5"> <span class="font-weight-400">Utilitários</span> Contábeis </h2> -->
        <div class="row text-align-center">
            <div class="col-lg-3 col-md-6 my-1 my-lg-0">
                <i class="fas fa-file-invoice fa-2x cor-c2 ico"></i>
                <h5 class="my-2"> Tabelas <span class="font-weight-400"> Práticas </span> </h5>
                <a href="tabelas.php" target="_self" rel="noopener noreferrer" class="bt bt-b1v"> Acessar </a>
            </div>
            <div class="col-lg-3 col-md-6 my-1 my-lg-0">
                <i class="fas fa-calendar-alt fa-2x cor-c2 ico"></i>
                <h5 class="my-2"> Agenda de <span class="font-weight-400">Obrigações </span> </h5>
                <a href="agendas.php" target="_self" rel="noopener noreferrer" class="bt bt-b1v"> Acessar </a>
            </div>
            <div class="col-lg-3 col-md-6 my-1 my-lg-0">
                <i class="fas fa-folder-open fa-2x cor-c2 ico"></i>
                <h5 class="my-2"> Modelos de<span class="font-weight-400"> Documentos </span> </h5>
                <a href="modelos-documentos.php" target="_self" rel="noopener noreferrer" class="bt bt-b1v"> Acessar </a>
            </div>
            <div class="col-lg-3 col-md-6 my-1 my-lg-0">
                <i class="fas fa-file-invoice-dollar fa-2x cor-c2 ico"></i>
                <h5 class="my-2"> Formulários <span class="font-weight-400"> Diversos </span> </h5>
                <a href="formularios.php" target="_self" rel="noopener noreferrer" class="bt bt-b1v"> Acessar </a>
            </div>
        </div>
    </div>

    <div class="bkg-b1 mt-10">
        <div class="container py-8">
            <h2 class="text-align-center mb-5 cor"> <span class="font-weight-400">Alguns</span> Serviços </h2>
            <div class="owl-cliente owl-carousel owl-theme">
                
                <div class="my-2 text-align-center">
                    <div class="box bkg-bs p-2">
                        <i class="fas fa-comments-dollar fa-3x cor-c2"></i>
                        <h4 class="my-2"> Área <span class="d-block">Contábil</span> </h4>
                        <p> Assessoria de um regime mais adequado para sua empresa através da visão dos custos e fluxo de caixa. </p>
                    </div>
                    <a href="servicos.php" target="_self" rel="noopener noreferrer" class="bt bt-b2 mt-4"> Saiba mais </a>
                </div>
                
                <div class="my-2 text-align-center">
                    <div class="box bkg-bs p-2">
                        <i class="fas fa-file-alt fa-3x cor-c2"></i>
                        <h4 class="my-2"> Obrigações <span class="d-block">Trabalhistas</span> </h4>
                        <p> Área de relações trabalhistas, previdências, contamos com profissionais capacitados e treinados. </p>
                    </div>
                    <a href="servicos.php" target="_self" rel="noopener noreferrer" class="bt bt-b2 mt-4"> Saiba mais </a>
                </div>
                
                <div class="my-2 text-align-center">
                    <div class="box bkg-bs p-2">
                        <i class="fas fa-chart-line fa-3x cor-c2"></i>
                        <h4 class="my-2"> Assessoria <span class="d-block">Empresarial</span> </h4>
                        <p> Fornecendo todas as informações e suporte técnico aos departamentos já existente na empresa. </p>
                    </div>
                    <a href="servicos.php" target="_self" rel="noopener noreferrer" class="bt bt-b2 mt-4"> Saiba mais </a>
                </div>
                
                <div class="my-2 text-align-center">
                    <div class="box bkg-bs p-2">
                        <i class="fas fa-file-signature fa-3x cor-c2"></i>
                        <h4 class="my-2"> Departamento <span class="d-block">Fiscal</span> </h4>
                        <p> Realizamos escrituração dos documentos fiscais a apuraçãos dos impostos e obrigações. </p>
                    </div>
                    <a href="servicos.php" target="_self" rel="noopener noreferrer" class="bt bt-b2 mt-4"> Saiba mais </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-10">
        <h2 class="text-align-center mb-5"> <span class="font-weight-400">Acesso</span> Rápido </h2>
        <div class="row">
            <div class="col-lg-4 my-1 my-lg-0">
                <a href="facilitador.php" target="_self" rel="noopener noreferrer" class="d-flex rapido">
                    <i class="fas fa-calculator fa-3x d-flex align-items-center justify-content-center bkg-b1 cor-c2 p-2"></i>
                    <div class="d-flex flex-column justify-content-center p-2">
                        <p class="m-0"> <big> <strong>Facilitador </strong> Contábil  </big> </p>
                        <p class="m-0"> Clique aqui <i class="fas fa-angle-right ml-1"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 my-1 my-lg-0">
                <a href="certidoes.php" target="_self" rel="noopener noreferrer" class="d-flex rapido">
                    <i class="fas fa-address-book fa-3x d-flex align-items-center justify-content-center bkg-b1 cor-c2 p-2"></i>
                    <div class="d-flex flex-column justify-content-center p-2">
                        <p class="m-0"> <big> <strong>Certidões </strong> Negativas </big> </p>
                        <p class="m-0"> Clique aqui <i class="fas fa-angle-right ml-1"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 my-1 my-lg-0">
                <a href="links.php" target="_self" rel="noopener noreferrer" class="d-flex rapido">
                    <i class="fas fa-mouse-pointer fa-3x d-flex align-items-center justify-content-center bkg-b1 cor-c2 p-2"></i>
                    <div class="d-flex flex-column justify-content-center p-2">
                        <p class="m-0"> <big> <strong>Links </strong> Úteis </big> </p>
                        <p class="m-0"> Clique aqui <i class="fas fa-angle-right ml-1"></i></p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="img img-i1 py-10 mt-10">
        <div class="container">
            <div class="row">
                <div class="col-lg text-align-justify">
                    <h2> Conheça <span class="cor"><?= $escritorio ?></span> </h2>
                    <h4 class="cor font-weight-400"> Veja com funciona os processos do nosso escritório </h4>
                    <p> Contratando nossa contabilidade suas obrigações ficam garantidas e você pode economizar mais do que imagina com custos contábeis. Invista em você e no seu negócio e deixe a contabilidade com a gente. </p>
                    <p> Em nosso escritório, abrimos sua empresa analisando as informações cedidas por você para sabermos em qual tributação que melhor se encaixa ao seu futuro negócio (e não tem problema se você não souber, nossos consultores são capacitados e estarão ao seu auxílio). </p>
                    <p> Para abrir sua empresa, o processo é bem simples: Preencha nossos formulários e depois disso é só aguardar o contato da nossa equipe e enviar os documentos necessários para a conclusão da abertura. </p>
                </div>
                <div class="col-lg">                

                </div>                
            </div>
        </div>
    </div>

    <div class="container pt-10">
        <h2 class="text-align-center mb-5"> <span class="font-weight-400">Notícias</span> Empresariais </h2>

        <div class="row">
        <?php $dados = get_materias('https://sitecontabil.com.br/json/?db=sc_noticias&limite=3'); ?>
        <?php foreach($dados as $item): ?>
            <div class="col-lg-4 d-flex">
                <div class="mt-5 p-4 bkg-bs box">
                    <div class="">
                        <h5 class="m-0 titulo"> <?= limitar_texto($item->titulo, 100)?> </h5>
                    </div>
                    <div class="text-align-justify">
                        <p class="cor-c2"> <i class="far fa-clock fa-fw"></i> [<strong><?= mostra_data($item->pubdate, '%d de %B de %Y'); ?></strong>] </p>
                        <p> <?= limitar_texto(strip_tags(html_entity_decode($item->texto)), 200); ?> </p>
                        <a class="bt bt-b2v" href="noticias-ler.php?id=<?= $item->id ?>">Leia na integra</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
        <a class="bt bt-b1 mt-5" href="noticias.php" target="_self"> Confira todas nossas notícias </a>
    </div>

</section>

<?php include_once('footer.php'); ?>


<?php
    require_once("../include/classes/sessao.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
            CMS - Conteúdo | City Share
		</title>
        <link rel="stylesheet" type="text/css" href="CSS/Style.css">
        <link rel="icon" href="../img/icones/logoCityShareIcon.png">
	</head>
	<body>
        <div id="container">
            <?php
                include("layout/header.php");
            ?>
            <div class="CMS_main" id="pag-home">
                <div class="box-menu-lateral">
                     <div class="menu-lateral">
                        <ul>
                            <li class="botao-menu-lateral">
                                <a href="CMS_home.php">Home</a>
                                <img src="Image/50x50.gif"/>
                            </li>
                            <li class="botao-menu-lateral">
                                <a href="CMS_clientes.php">Clientes</a>
                                <img src="Image/50x50.gif"/>
                            </li>
                            <li class="botao-menu-lateral">
                                <a href="CMS_cityshare.php">City Share</a>
                                <img src="Image/50x50.gif"/>
                            </li>
                            <li class="botao-menu-lateral">
                                <a href="#">Desktop</a>
                                <img src="Image/50x50.gif"/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="box-caminho">
                    <a href="CMS_home.php" class="link-caminho" >Home</a> ><a href="#" class="link-caminho"> City Share</a> 
                </div>
                <?php                
                    $lista_permissoes_usuario = $sessao->get("id_permissoes");
                ?>
                <div class="box-conteudo">
                    <?php if( in_array(7, $lista_permissoes_usuario) ) { ?>                  
                    <div class="box-conteudo-menu">
                        <a class="titulo-conteudo-menu" href="CMS_cityshare_conteudo.php">
                            <img src="Image/content_test.jpg" />
                            Conteudo
                        </a>
                    </div>
                    <?php } ?>
                    <?php if( in_array(8, $lista_permissoes_usuario) ) { ?>
                    <div class="box-conteudo-menu">
                        <a class="titulo-conteudo-menu" href="CMS_cityshare_nivelAcesso.php">
                            <img src="Image/content_test.jpg" />                        
                            Níveis de acesso
                        </a>
                    </div>
                    <?php } ?>
                    <?php if( in_array(9, $lista_permissoes_usuario) ) { ?>                                     
                    <div class="box-conteudo-menu">                        
                        <a class="titulo-conteudo-menu" href="CMS_cityshare_adm.php">
                            <img src="Image/content_test.jpg" />
                            Administradores
                        </a>
                    </div> 
                    <?php } ?>
                    <?php if( in_array(10, $lista_permissoes_usuario) ) { ?>                                      
                    <div class="box-conteudo-menu">                        
                        <a class="titulo-conteudo-menu" href="veiculos.php">
                            <img src="Image/content_test.jpg" />
                            Veiculos
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php
                include("layout/footer.php");
            ?>
        </div>      
	</body>
</html>
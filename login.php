
<?php


//session_start();


include('header.php') ;
if(isset($_SESSION['name']))
{
   echo '<script type="text/javascript"> 
   
   location.replace("index.php");
   
   </script>';
	
}else{
   
}

?>
<div class="conteudo-geral">
    <div class="container">
        <div class="login-container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <form name="loginForm" action="sistem/enter.php" method="post" autocomplete="off">
                        <div>
                            <span class="login-title">
                                Já tem cadastro na loja? 
                            </span>
                            <span class="login-text"> 
                                
                                Se você já tem seu cadastro na loja, informe nos campos abaixo seu email e sua senha de acesso à loja.
                    
                            </span>
                        </div>

                        <div class="login-field-container">
                            <div> Usuário: </div>
                            <input type="text" name="email" id="email">
                        </div>

                        <div class="login-field-container">
                            <div> Sua senha: </div>
                            <input type="password" name="senha" id="senha">
                        </div>


                        <div class="sign-in-button-container" style="display:table;">
                            <button border="0" formaction="sistem/enter.php" type="submit" id="btnLogin" class="login-button"> Entrar </button>
                        </div>

                    </form>
                </div>

                <div class="login-divider">
                    <span> &nbsp; </span>
                </div>

                <div class="col-xs-12 col-md-6">
                    <form name="signupForm" method="post" autocomplete="off">
                 <div>
                        <span class="login-title">
                            Criar uma conta
                        </span>

                        <span class="login-text">
                            
                             Use o formulário abaixo para cadastrar-se na loja. 
                        </span>
                 </div>

                 <div class="login-field-container">
                    <div> Nome Completo: </div>
                    <input type="text" id="txtName" name="txtName">
                 </div>

                 <div class="login-field-container">
                    <div> Usuário: </div>
                    <input type="text" id="txtEmail"  name="txtEmail">
                 </div>

                 <div class="login-field-container">
                    <div> Digite uma senha: </div>
                    <input type="password" id="txtPass"  name="txtPass">
                 </div>

                 <div class="login-field-container">
                    <div> Confirme a senha: </div>
                    <input type="password" id="txtConfPass"  name="txtConfPass">

                 </div>

                 <div class="sign-up-button-container">
                    <div id="btnRegisterLogin" class="login-button" style="margin-bottom:30px"> 
                       <id > Cadastrar </id>
                    </div>
                 </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>

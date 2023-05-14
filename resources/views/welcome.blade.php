<!DOCTYPE html>
<html lang="en">
    
<!--Designed By ALpha-->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <title>Login com ajax</title>
       
        <!-- App styles -->
        <link rel="stylesheet" href="/css/app.min.css">
    </head>

    <body data-sa-theme="1">
        <div class="login">

            <!-- Login -->
            <div class="login__block active" id="l-login">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Olá, Por favor faça login

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register" href="#">Create an account</a>
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password" href="#">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <form name="form-login">
                    @csrf
                    <div class="login__block__body">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control text-center" placeholder="Nome">
                        </div>
    
                        <div class="form-group">
                            <input type="email" id="email" class="form-control text-center" placeholder="Email" name="email">
                        </div>
    
                        <div class="form-group">
                            <input type="password" id="password" class="form-control text-center" placeholder="Palavra-Passe" name="password">
                        </div>

                        <div id="login-div">
                            <button type="submit" class="btn login__block__btn" id="login">Login</button>
                        </div>
                    </div>
                </form>
                
            </div>


            <!-- Register -->
            

            <!-- Forgot Password -->
           
        </div>

        <p><i>Feito por Valentim Loth Simão Prado</i></p>

        <script
        src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>

        <script>

        $(function (){


            $('form[name="form-login"]').on('input', function(event){
                $.ajax({
                    url: '/login/dinamico',
                    type: 'post',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function (response){
                        var ultimaresposta = response.success;
                        
                      if(ultimaresposta == false){ 
                        $('div#login-div').off('mouseenter').mouseenter(function (){
                            if($('div#login-div').css('float') == 'left'){
                                $('div#login-div').css({
                                'float': 'right',
                                'background': 'red',
                            });
                            }else{
                                $('div#login-div').css({
                                'float': 'left',
                                'background': 'red',
                            });
                            }
});
                      }
                      else if(ultimaresposta == true){
                        $('div#login-div').off('mouseenter').mouseenter(function (){
                            event.stopPropagation();
});
                        $('div#login-div').css({
                                'float' : 'none',
                               'display': 'block',
                               'margin-left': 'auto',
                               'margin-right' : 'auto',
                               'background' : 'green',
                            });

                        $('form[name="form-login"]').off('submit').submit(function (event) {
                    event.preventDefault();
                    alert("Ok bem vindo: " + $('#name').val());
                      });
                     

                     }
                     
                    }
                });
            });
            /*
           
            $('form[name="form-login"]').submit(function (event) {
                    event.preventDefault();
                    
                    $.ajax({
                        url: '/login',
                        type: 'post',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function (response){
                            



                        }

                    });
                    
            });
            */

        });

        </script>

        <!-- Vendors -->
        
        <!-- App functions and actions -->
        <script src="/js/app.min.js"></script>
    </body>

    

<!--Designed By ALpha-->
</html>
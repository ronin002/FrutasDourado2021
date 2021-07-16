<!DOCTYPE html>
<html>

<head>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" class="next-head" />
    <meta charSet="utf-8" class="next-head" />
    <title>Frutas Dourado - Recuperar senha</title>
    <!-- <link rel="preload" href="../register/register.js" as="script" /> 
     <link rel="preload" href="https://assets-cdn.inmagine.com/_next/static/wWs51jrH-QY8zL4qFKeDf/pages/_app.js" as="script" />
    <link rel="preload" href="https://assets-cdn.inmagine.com/_next/static/runtime/webpack-f5e50b6b501ccea2a79b.js" as="script" />
    <link rel="preload" href="https://assets-cdn.inmagine.com/_next/static/chunks/commons.17aa3c0be8717670f8e7.js" as="script" />
    <link rel="preload" href="https://assets-cdn.inmagine.com/_next/static/chunks/styles.b7764b24982e27378b63.js" as="script" />
    <link rel="preload" href="https://assets-cdn.inmagine.com/_next/static/runtime/main-1b7293a34bcc89c881b5.js" as="script" />-->
    <link rel="stylesheet" href="../css/login/commons.css" />
    <link rel="stylesheet" href="../css/login/styles.css" /> 
</head>

<body>
    <br/>
   
    <div id="__next"><span class="x-text-regular" lang="US">
            <section class="container-fluid root-container">
                <div class="row mx-0">
                    <div class="layout">
                        <div class="mx-auto position-absolute" style="left:0;right:0;z-index:1;max-width:500px;height:0px;top:-0px"></div>
                        <div class="layout-container">

                            <div class="col-12 col-md-12 col-xl-6 m-0 layout-left-container" style="background-image: url('../images/bg_2.jpg') ;">
                                <div class="x-row layout-logo-row">
                                    <div class="col-12 text-center position-relative layout-logo-container" style="margin-bottom:3.125rem"><img src="../images/trator3.png" class="layout-logo" /></div>
                                </div>
                                <div class="x-row p-0" style="margin-bottom:0.625rem">
                                    <div class="col-12 text-center"><span class="x-text-header" style="color:white;font-size:1.5625rem;line-height:1.5rem;font-weight:lighter">RASTREIO SIMPLES, RÁPIDO, FÁCIL</span></div>
                                </div>
                                <div class="x-row p-0" style="margin-bottom:4.125rem">
                                    <div class="col-12 text-center px-0"><span class="x-text-subtitle" style="color:white;font-size:1rem;line-height:1.125rem;font-weight:lighter;text-transform:none">Faça login para cadastrar seus produtos e seus lotes</span></div>
                                </div>
                                <div class="x-row p-0" style="margin-bottom:1.875rem">
                                    <div class="col-4 px-0"><img src="../images/qrcode.png" style="height:100px; width:100px;" /></div>
                                    <div class="col-8 pr-0">
                                        <div class="x-row"><span class="x-text-subtitle" style="color:white;font-size:1rem;line-height:1.3125rem;text-transform:none;font-weight:normal">Códigos de rastreio QR-Code</span></div>
                                        <div class="x-row"><span class="x-text-subtitle" style="color:white;font-size:1rem;line-height:1.3125rem;text-transform:none;font-weight:lighter">Rastreie e disponibilize para seu cliente o rastreio do produto</span></div>
                                    </div>
                                </div>
                                <div class="x-row p-0">
                                    <div class="col-4 px-0"> <!--<img src="https://assets-cdn.inmagine.com/static/dsai.svg" /> --></div>
                                    <div class="col-8 pr-0">
                                        <div class="x-row"><span class="x-text-subtitle" style="color:white;font-size:1rem;line-height:1.3125rem;text-transform:none;font-weight:normal">Com poucos passos será possível mostrar para o cliente até mesmo o local de produção e plantio do produto</span></div>
                                        <div class="x-row"><span class="x-text-subtitle" style="color:white;font-size:1rem;line-height:1.3125rem;text-transform:none;font-weight:lighter">Obtenha a versão pró sem propagandas</span></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-10 col-sm-10 col-md-10 col-xl-6 layout-content">
                          
                                

                                <div class="container layout-right-container">
                                    <div class="x-row">
                                        <div class="col-12 container text-center layout-text-title-container">
                                            <div class="x-row layout-text-title-row"><span class="x-text-subtitle mx-auto layout-text-title xbold">Recuperação de senha</span></div>
                                            <div class="x-row layout-text-title-row"><span class="x-text-subtitle mx-auto layout-text-platform-title">Frutas Dourado</span></div>
                                        </div>
                                    </div>
                                    <div class="x-row" style="margin-top:2.25rem">
                                        <div class="col-12 px-0">
                                            {{-- <form action="../register/recovery.php" method="POST"> --}}
                                            <form action={{ url('recovery_confere') }} method="POST">
                                                <div class="x-row">
                                                    <div class="col-12 px-0"><span class="x-text-label text-capitalize layout-text-label" for="usuario">Email</span>
                                                        <div class="form-group layout-form-group form-group"><input type="text" id="destinatario" name="destinatario" value="" placeholder="Digite email" class="form-control layout-form-input text-lowercase inputStandard--rVbLh form-control" /></div>
                                                    </div>
                                                </div>
                                              
                                                <div class="x-row layout-btn-row">
                                                    <div class="col-12 px-0 text-center"><button type="submit" id="sign-up-btn" class="btn primary text-nowrap layout-fullsizable-btn btn btn-primary"><span class="x-text-button d-block layout-text-btn light">Recuperar</span></button></div>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                    <div></div>
                                </div>
                                <!-- <div class="x-row layout-image-top-text-platform-row">
                                    <div class="col-6 layout-ecosystem-logo"><img src="https://assets-cdn.inmagine.com/static/pixlr.svg" /></div>
                                    <div class="col-6 layout-ecosystem-logo"><img src="https://assets-cdn.inmagine.com/static/dsai.svg" /></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </span></div>
    
</body>

</html>
<?php


    require "PHPMailer/PHPMailerAutoload.php";

    function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 

        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.leasein.pe';
        $mail->Port = 465;  
        $mail->Username = 'areacomercial@leasein.pe';
        $mail->Password = 'Lima2020*';   

        $mail->IsHTML(true);
        $mail->From="areacomercial@leasein.pe";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        $mail->CharSet = 'UTF-8';

        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }

    if(isset($_POST['validar']))
    {

        $ruc=$_POST['ruc'];
        $correo=$_POST['correo'];
        $celular=$_POST['celular'];

        $llavePrivada='11860B0063BBA816BC7012B2C4084B76';
        $llavePublica='161ED9F4346E210DCBB49C31464DB0EB';
        $usuarioSentinel='71337110';
        $passwordSentinel='CEASyMNGO1711@';
        $urlEncriptacion='https://www2.sentinelperu.com/wsrest/rest/rws_senenc';
        $urlConsulta='https://www2.sentinelperu.com/wsrest/rest/rws_senestlitersa';
        //$asesora="margie.bazan@leasein.pe";
        $asesora="carlos.arango@leasein.pe";

        $body="<!DOCTYPE html>
        <html>
        <head>
            <style>
                body{
                    width: 100%; 
                    margin: 0px;
                }
        
                .headercorreo{
                    width: 100%; 
                    background-color: #f7f7f7;
                }
        
                .imagenheader{
                    width: 50%;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    padding-top: 15px;
                    padding-bottom: 15px;
                }
                
                .divcontenido{
                    width: 70%;
                    text-align: center;
                    margin-left: auto;
                    margin-right: auto;
                    padding-top:25px;
                    padding-bottom: 15px;
                }
        
                .titulogeneral{
                    font-family: 'comfortaa';
                    color: #ff6f27;
                    font-size: 25px;
                    font-weight: bold;   
                }
        
                .textocontenido{
                    font-family: 'comfortaa';
                    font-size: 17px;
                    padding-top:25px; 
                }
        
                .espaciador{
                    margin-top:25px; 
                }
        
                .blogs{
                    display: inline-flex;
                }
        
                .lomasdestacado{
                    font-family: 'comfortaa';
                    color: #ffcc00;
                    font-size: 25px;
                    font-weight: bold; 
                    margin-top:25px;
                }
        
                .Enterate{
                    font-family: 'comfortaa';
                    margin-top:25px;
                    font-size: 17px;
                }
        
                .contenidoblog{
                    width: 50%;
                    margin-left:10px;
                    margin-right:10px;
                    text-align: left;
                }
        
                .imagendeblog{
                    width: 100%;
                    margin-top:25px;
                }
        
                span{
                    font-family: 'comfortaa';
                }
        
                .footerfinal{
                    padding-top: 15px;
                    background-color: #ff6f27;
                    text-align: center;
                    padding-bottom: 15px;
                }
        
                .separadorfinal{
                    width: 80%;
                    border-top: 1px solid white;
                }
        
                .derechos{
                    color: white;
                }
            </style>
            <meta charset='UTF-8'>        
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>        
            <meta name='viewport' content='width=device-width, initial-scale=1'>        
            <title>*|MC:SUBJECT|*</title>     
        </head>
        <body>
            <div class='headercorreo'>
                <img class='imagenheader' src='https://leasein.pe/wp-content/uploads/2020/05/logo-final-leasein2.png'>
            </div>
        
            <div class='divcontenido'>
                <div class='titulogeneral'>
                    ¡Gracias por escribirnos!
                </div>
                <div class='textocontenido'>
        ";
        $body2=    "<br>Mientras tanto te invitamos a visitar nuestro Blog, donde encontrarás contenido interesante sobre tecnología, finanzas, negocios y  actualidad.
                </div>
                <hr class='espaciador'>
                <div class='lomasdestacado'>
                    Lo más destacado
                </div>
                <div class='Enterate'>
                    Enterate de las últimas noticias de tecnología y mundo Fintech
                </div>
                <div class='blogs'>
                    <div class='contenidoblog'>
                        <a href='https://alquilerdelaptops.pe/2020/07/13/lecciones-de-larry-page-para-la-industria-fintech-peruana/'>
                            <img class='imagendeblog' src='https://alquilerdelaptops.pe/wp-content/uploads/2020/07/larry-fintech-leasein.jpg'>
                            <span>Leer más >></span>
                        </a>
                    </div>
                    <div class='contenidoblog'>
                        <a href='https://alquilerdelaptops.pe/2020/07/17/que-haria-elon-musk-si-emprendiera-un-e-commerce-en-el-peru/'>
                            <img class='imagendeblog' src='https://alquilerdelaptops.pe/wp-content/uploads/2020/07/fintech-elon.jpg'>
                            <span>Leer más >></span>
                        </a>
                    </div>
                </div>
            </div>
        
            <div class='footerfinal'>
                <div class='iconossociales'>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse'>
                        <tbody align='center' >
                            <tr align='center' >
                                <td align='center' valign='middle' width='24' style='padding-top:8px;padding-right:13px;padding-bottom:10px;padding-left:12px'>
                                    <a href='https://www.facebook.com/alquilerdelaptops/' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.facebook.com/alquilerdelaptops/&amp;source=gmail&amp;ust=1598463107539000&amp;usg=AFQjCNHj9fxbdM8gk6tryVSwNhmgHGoWbA'><img src='https://ci6.googleusercontent.com/proxy/iZE-48sXvszGHh6MUoqCYHnlP8ohfGJI6V1fj23YRaJHEaKjOb2V7stez03tl97kcCY9ebD52HlFfqGKcTQbPlQaysAL26ZKjUSa5NGX7CU3WUodCbzb-vFMkIXxvIREY4PT879oIw=s0-d-e1-ft#https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png' alt='Facebook' style='display:block;border:0;height:auto;outline:none;text-decoration:none' height='24' width='24' class='CToWUd'></a>
                                </td>
                                <td align='center' valign='middle' width='24' style='padding-top:8px;padding-right:13px;padding-bottom:10px;padding-left:12px'>
                                    <a href='https://www.instagram.com/leaseinperu/?hl=es' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.instagram.com/leaseinperu/?hl%3Des&amp;source=gmail&amp;ust=1598463107539000&amp;usg=AFQjCNGAoaXXp7eJG94UcWS7w3EeJvUasg'><img src='https://ci5.googleusercontent.com/proxy/Ihh9hEwk_36d3lzL_tLmGaqmGhc-dLqZP-II9LpKgUDCh37Kvw1N4-DJsrxuyAA9V1NNx3975BQO5w7DNVWvFHpPM4gkDm8eMVCLYy_PtGWEZAxMuaULgOR-6W0K_1sgXOcwNMtgGVE=s0-d-e1-ft#https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png' alt='Link' style='display:block;border:0;height:auto;outline:none;text-decoration:none' height='24' width='24' class='CToWUd'></a>
                                </td>
                                <td align='center' valign='middle' width='24' style='padding-top:8px;padding-right:13px;padding-bottom:10px;padding-left:12px'>
                                    <a href='https://alquilerdelaptops.pe/' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://alquilerdelaptops.pe/&amp;source=gmail&amp;ust=1598463107539000&amp;usg=AFQjCNFT0i-mZDL0rq9oaExS6Pt1d32c7A'><img src='https://ci6.googleusercontent.com/proxy/uZ0yuxmORppOSAVlAI9An9dTGgd5WLSQ0CBL7MLu_J4uk8Z1QO7RWFmdlkUYkmd_GLhwph5RoVCp9eKrXzEQnDQ91cNlGygasb_4p2fT-TnBvWoJAX8mqJXeyuG36Kto6QrY=s0-d-e1-ft#https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png' alt='Website' style='display:block;border:0;height:auto;outline:none;text-decoration:none' height='24' width='24' class='CToWUd'></a>
                                </td>
                                <td align='center' valign='middle' width='24' style='padding-top:8px;padding-right:13px;padding-bottom:10px;padding-left:12px'>
                                    <a href='https://www.linkedin.com/company/leasein/' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.linkedin.com/company/leasein/&amp;source=gmail&amp;ust=1598463107539000&amp;usg=AFQjCNHJAlkXZXSjyDkxFYLBGfw_CMWl8A'><img src='https://ci3.googleusercontent.com/proxy/FpKC1aFcvfDPI1MS2LGUKplthRlZAG8WmLpjZYlZ2DOVuaiIilo4gVSFwe9gvUOVkuK6WMw2dqEuxy4pfw2A5qShDQXqB56JtSw0EIbTBKiBrCFwkmwFDV8Q4ZB70NkcRlkMJuf5cw=s0-d-e1-ft#https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-linkedin-48.png' alt='LinkedIn' style='display:block;border:0;height:auto;outline:none;text-decoration:none' height='24' width='24' class='CToWUd'></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr class='separadorfinal'>
                    <span class='derechos'>Leasein2020 Todos los derechos reservados</span>
                </div>
            </div>
        </body>
        </html>
        ";



        $url = $urlEncriptacion;
        $ch = curl_init($url);
        //Aqui encriptamos el usuario
        $jsonData = array(
            'keysentinel' => $llavePrivada,
            'parametro' => $usuarioSentinel
        );
        $jsonDataEncoded = json_encode($jsonData);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($ch);
        //decodificamos el json
        $responseData = json_decode($result, TRUE);
        //escojemos el parametro corredor, este nos indica si la encriptacion fue con exito o no
        $coderrorUser=$responseData["coderror"];
        if($coderrorUser==0){
            $usuarioSentinelEncriptado=$responseData["encriptado"]; 
        }
        else{      
            //Aquí se podría redirigir a un link de error en el sistema
        }

        //Aqui encriptamos el password
        $jsonData = array(
            'keysentinel' => $llavePrivada,
            'parametro' => $passwordSentinel
        );
        $jsonDataEncoded = json_encode($jsonData);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($ch);
        //decodificamos el json
        $responseData = json_decode($result, TRUE);
        //escojemos el parametro corredor, este nos indica si la encriptacion fue con exito o no
        $coderrorPass=$responseData["coderror"];
        if($coderrorPass==0){
            $passwordSentinelEncriptado=$responseData["encriptado"];  
        }
        else{     
            //Aquí se podría redirigir a un link de error en el sistema
        }


        //Aqui hacemos la consulta
        $url = $urlConsulta ;
        $ch = curl_init($url);
        $jsonData = array(
            'Gx_UsuEnc' => $usuarioSentinelEncriptado,
            'Gx_PasEnc' => $passwordSentinelEncriptado,
            'Gx_Key' => $llavePublica,
            'TipoDoc' => 'R',
            'NroDoc' => $ruc
        );

        $jsonDataEncoded = json_encode($jsonData);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($ch);
        //decodificamos el json
        $responseData = json_decode($result, TRUE);
        //aqui obtenemos todo el arreglo que nos envia el api en la variable $resultado
        $resultado=$responseData["Resultado"];
        //primero obtener el codigoWs el cual nos indica si ha hábido algún problema en la consulta
        $codigoWS=$resultado["CodigoWS"];

        if($codigoWS==0){//Si está todo okey, haremos las validaciones

            $semaActual=$resultado["SemaActual"];
            $semaPrevio=$resultado["SemaPrevio"];
            $semaPeorMejor=$resultado["SemaPeorMejor"];
            
            //Esta seccion sera para obtener la cantidad de años que tiene la empresa
            //=========================================================================
            date_default_timezone_set('America/Lima');

            $fechaActual = date("Y-m-d");
            $fechaActual = new DateTime($fechaActual);

            $fechIniActv=$resultado["FechIniActv"];
            //Primero verificamos si fechIniActv trajo algun dato
            if(strlen($fechIniActv)>0){
                $separa = explode("/",$fechIniActv);
                $dia = $separa[0]; $mes = $separa[1]; $ano = $separa[2];
                $fechIniActv =$ano."/".$mes."/".$dia;
                $fechIniActv = new DateTime($fechIniActv);
    
                $diff = $fechIniActv->diff($fechaActual);
    
                $cantAnos=$diff->y;
            }else{
                $cantAnos=0;
            }
            //=========================================================================

            //En esta parte ya se hace las validaciones debidas para ver si aplica o no, en ambos se redirigirá a la página debida
            //En el caso de que si aplique, dependera de si su semaforo actual está en verde el cual es el numero 4 y si los años que tiene la empresa es mayor o igual 2 anos, entrara a este condicional
            if($cantAnos>=2 and $semaActual==4){
                //Enviaremos correo
                
                //Correo para el cliente
                //==========================================================================

                $cuerpo= $body;
                $cuerpo.= "Felicidades, tu empresa precalifica para un Leasing Operativo, nos comunicaremos contigo a la brevedad.";
                $cuerpo.= $body2;
				
				$to   = $correo;
				$from = 'areacomercial@leasein.pe';
				$name = 'Leasein - Alquiler de Laptops';
				$subj = '!Felicidades, tu empresa precalifica¡';
				$msg = $cuerpo;
				
				$error=smtpmailer($to,$from, $name ,$subj, $msg);

                //==========================================================================

                //Correo para el asesor
                //==========================================================================
		
				$to   = $asesora;
				$from = 'areacomercial@leasein.pe';
				$name = 'Leasein - Alquiler de Laptops';
				$subj = "Leasing Operativo - Cotizador Web - ".$ruc; 
				
                $msg ="RUC: ".$ruc."<br>";
                $msg.="Correo: ".$correo."<br>";
                $msg.="Celular: ".$celular."<br>";
                $msg.="Felicidades, tu empresa precalifica para un Leasing Operativo, nos comunicaremos contigo a la brevedad.";
                
				$error=smtpmailer($to,$from, $name ,$subj, $msg);

                //==========================================================================
                
                header("Location: https://leasein.pe/aprueba-prevalucacion/");
            }
            else{
                
                //Correo para el cliente
                //==========================================================================

                $cuerpo= $body;
                $cuerpo.= "Lo sentimos, tu empresa no precalifica para un Leasing Operativo, pero no te desanimes en breve una asesora comercial se comunicará contigo.";
                $cuerpo.= $body2;


				$to   = $correo;
				$from = 'areacomercial@leasein.pe';
				$name = 'Leasein - Alquiler de Laptops';
				$subj = 'Lo sentimos tu empresa no precalifica';
				$msg = $cuerpo;
				
				$error=smtpmailer($to,$from, $name ,$subj, $msg);
                //==========================================================================

                //Correo para el asesor
                //==========================================================================

				
				$to   = $asesora;
				$from = 'areacomercial@leasein.pe';
				$name = 'Leasein - Alquiler de Laptops';
				$subj = "Leasing Operativo - Cotizador Web - ".$ruc; 
				
                $msg ="RUC: ".$ruc."<br>";
                $msg.="Correo: ".$correo."<br>";
                $msg.="Celular: ".$celular."<br>";
                $msg.="Lo sentimos, tu empresa no precalifica para un Leasing Operativo, pero no te desanimes en breve una asesora comercial se comunicará contigo.";
                
				$error=smtpmailer($to,$from, $name ,$subj, $msg);

                //==========================================================================
                
                header("Location: https://leasein.pe/noaprueba-prevalucacion/");
            }
        }
        else if($codigoWS==3){
            header("Location: https://leasein.pe/error-numero-documento/");
            //echo "Número de documento inválido";
        }
        else{   
            header("Location: https://leasein.pe/problema-nuestra-web/");
            //echo "Hay un problema en nuestra web, intentelo más tarde";
        }

    }
?>
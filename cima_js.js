        function atualizalogloja() {
            window.location.reload();
        }

        function abriraviso(avi_codigo) {
            x = 600;
            y = 430;
            propriedades = "toolbar=no,menubar=yes,scrollbars=yes,width=" + x + ",height=" + y;
            nurl = "../cadastro/tavisotexto.php?avi_codigo=" + avi_codigo;
            window.open(nurl, 'janela', propriedades);
        }

        var message = "<?=$erphost['site']?>";

        function clickIE() {
            if (document.all) {
                //alert(message);
                return false;
            }
        }

        function clickNS(e) {
            if (document.layers || (document.getElementById && !document.all)) {
                if (e.which == 2 || e.which == 3) {
                    //alert(message);
                    return false;
                }
            }
        }
        if (document.layers) {
            document.captureEvents(Event.MOUSEDOWN);
            document.onmousedown = clickNS;
        } else {
            document.onmouseup = clickNS;
            document.oncontextmenu = clickIE;
        }

		function suportewhats()
		{

	texto = "Atendimento solicitado pela empresa: <?=$emp_cnpj?>";


mensagem = texto.replace(/<b>/g, "*").replace(/<\/b>/g,"*").replace(/<br>/g,'\n');

	//alert(texto);
celular='<?=$erphost['whatsapp']?>';

 mensagem = window.encodeURIComponent(mensagem);

 nurl = "https://api.whatsapp.com/send?phone=55" + celular + "&text=" + mensagem;



        x = 700;
        y = 530;
        propriedades = "toolbar=no,menubar=yes,scrollbars=yes,width=" + x + ",height=" + y;
        window.open(nurl, 'janela_whats', propriedades);



		}



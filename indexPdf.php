<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

    ob_start();
?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
        <meta name="AUTOR" content="D2th3" />
        <title>Molde Boleto Bancário</title>
        <style type="text/css">
            #boleto_parceiro {
                height: 85px;
                width: 666px;
                font-family: Arial, Helvetica, sans-serif;
                margin-bottom: 15px;
                border-bottom-width: 1px;
                border-bottom-style: dashed;
                border-bottom-color: #000000;
            }
            .am {
                font-size: 9px;
                color: #333333;
                height: 10px;
                font-weight: bold;
                margin-bottom: 2px;
                text-align: center;
                width: 320px;
                border-top-width: 1px;
                border-right-width: 2px;
                border-left-width: 2px;
                border-top-style: solid;
                border-right-style: solid;
                border-left-style: solid;
                border-top-color: #000000;
                border-right-color: #000000;
                border-left-color: #000000;
            }
            #boleto{
                height: 416px;
                width: 666px;
                color: #000000;
                font-family: Arial, Helvetica, sans-serif;
            }

            #tb_logo {
                height: 40px;
                width: 666px;
                border-bottom-width: 2px;
                border-bottom-style: solid;
                border-bottom-color: #000000;
            }
            #tb_logo #td_banco {
                height: 22px;
                width: 53px;
                border-right-width: 2px;
                border-left-width: 2px;
                border-right-style: solid;
                border-left-style: solid;
                border-right-color: #000000;
                border-left-color: #000000;
                font-size: 15px;
                font-weight: bold;
                text-align: center;
            }
            .ld {font: bold 15px Arial; color: #000000}
            .td_7_sb {
                height: 26px;
                width: 7px;
            }
            .td_7_cb {
                width: 7px;
                border-left-width: 1px;
                border-left-style: solid;
                border-left-color: #000000;
                height: 26px;
            }
            .td_2 {
                width: 2px;
            }
            .tabelas td{
                border-bottom-width: 1px;
                border-bottom-style: solid;
                border-bottom-color: #000000;
            }
            .direito {
                width: 178px;
            }
            .titulo {
                font-size: 9px;
                color: #333333;
                height: 10px;
                font-weight: bold;
                margin-bottom: 2px;
            }
            .var {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 11px;
                height: 13px;
            }
            .direito .var{
                text-align: right;
            }
        </style>
    </head>

    <body>
    <div id="boleto_parceiro">
        <table style="width:666px; height:28px; border-bottom:solid; border-bottom-color:#000000; border-bottom-width:2px; border-top:solid; border-top-color:#000000; border-top-width:2px; margin-bottom: 5px;" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="td_7_sb">&nbsp;</td>
                <td><div class="titulo">Nosso N&uacute;mero</div>
                    <div class="var">5252525</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td><div class="titulo">Esp&eacute;cie.</div>
                    <div class="var">R$</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td><div class="titulo">Quantidade</div>
                    <div class="var">&nbsp;</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td><div class="titulo">Valor Documento</div>
                    <div class="var">220,00</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td><div class="titulo">Esp&eacute;cie Doc.</div>
                    <div class="var">DS</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td><div class="titulo">Ag&ecirc;ncia / C&oacute;digo Cedente</div>
                    <div class="var" style="text-align:right">5252/5525252-1</div></td>
                <td class="td_2">&nbsp;</td>
            </tr>
        </table>

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="td_7_sb">&nbsp;</td>
                <td><div class="titulo">Sacador / Avalista</div>
                    <div class="var">&nbsp;</div></td>
                <td class="td_7_sb">&nbsp;</td>
                <td valign="top" style="width:320px;"><div class="am">Autentica&ccedil;&atilde;o Mec&acirc;nica</div></td>
                <td class="td_2">&nbsp;</td>
            </tr>
        </table>
    </div>
    <div id="boleto">
        <table border="0" cellpadding="0" cellspacing="0" id="tb_logo">
            <tr>
                <td rowspan="2" valign="bottom" style="width:150px;"><img src="../imagens/logoreal.jpg" alt="Banco Real" width="150" height="40" title="Banco Real" /></td>
                <td align="center" valign="bottom" style="font-size: 9px; border:none;">Banco</td>
                <td rowspan="2" align="right" valign="bottom" style="width:6px;"></td>
                <td rowspan="2" align="right" valign="bottom" style="font-size: 15px; font-weight:bold; width:445px;"><span class="ld">35691.01805 01632.490007 00000.050203 4 22550000015000</span></td>
                <td rowspan="2" align="right" valign="bottom" style="width:2px;"></td>
            </tr>
            <tr>
                <td id="td_banco">356-5</td>
            </tr>
        </table>
        <table class="tabelas" style="width:666px; border-left:solid; border-left-width:2px; border-left-color:#000000;" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="td_7_sb">&nbsp;</td>
                <td style="width: 468px;"><div class="titulo">Local do Pagamento</div>
                    <div class="var">Pag&aacute;vel em qualquer banco at&eacute; a data de vencimento</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td class="direito"><div class="titulo">Vencimento</div>
                    <div class="var">10/08/2009</div></td>
                <td class="td_2">&nbsp;</td>
            </tr>
            <tr>
                <td class="td_7_sb">&nbsp;</td>
                <td><div class="titulo">Cedente</div>
                    <div class="var">Empresa S/A</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td class="direito"><div class="titulo">Ag&ecirc;ncia / C&oacute;digo do Cedente</div>
                    <div class="var">5252/5525252-1</div></td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <table class="tabelas" style="width:666px; border-left:solid; border-left-width:2px; border-left-color:#000000;" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="td_7_sb">&nbsp;</td>
                <td style="width:103px;"><div class="titulo">Data  Documento</div>
                    <div class="var">31/07/2009</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td style="width:133px;"><div class="titulo">N&uacute;mero Documento</div>
                    <div class="var">1717</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td style="width:62px;"><div class="titulo">Esp&eacute;cie Doc.</div>
                    <div class="var">DS</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td style="width:34px;"><div class="titulo">Aceite</div>
                    <div class="var">S</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td style="width:103px;"><div class="titulo">Data Processamento</div>
                    <div class="var">10/08/2009</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td class="direito"><div class="titulo">Nosso N&uacute;mero</div>
                    <div class="var">5252525</div></td>
                <td class="td_2">&nbsp;</td>
            </tr>
        </table>
        <table class="tabelas" style="width:666px; border-left:solid; border-left-width:2px; border-left-color:#000000;" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td class="td_7_sb">&nbsp;</td>
                <td style="width:118px;"><div class="titulo">Uso Banco</div>
                    <div class="var">&nbsp;</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td style="width:55px;"><div class="titulo">Carteira</div>
                    <div class="var">20</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td style="width:55px;"><div class="titulo">Esp&eacute;cie</div>
                    <div class="var">R$</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td style="width:104px;"><div class="titulo">Quantidade</div>
                    <div class="var">&nbsp;</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td style="width:103px;"><div class="titulo">Valor</div>
                    <div class="var">&nbsp;</div></td>
                <td class="td_7_cb">&nbsp;</td>
                <td class="direito"><div class="titulo">Valor do Documento</div>
                    <div class="var">220,00</div></td>
                <td class="td_2">&nbsp;</td>
            </tr>
        </table>
        <table class="tabelas" style="width:666px; border-left:solid; border-left-width:2px; border-left-color:#000000;" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td rowspan="5" class="td_7_sb">&nbsp;</td>
                <td rowspan="5" valign="top"><div class="titulo" style="margin-bottom:18px;">Instru&ccedil;&otilde;es (texto de responsabilidade do Cedente)</div>
                    <div class="var">Juros/Mora ao Dia : R$ 0,35 apos 15/09/2009<br />
                        Multa de 2,00% apos 1 dia(s) do vencimento.</div>
                </td>
                <td class="td_7_cb">&nbsp;</td>
                <td class="direito"><div class="titulo">(-) Desconto / Abatimento</div>
                    <div class="var">&nbsp;</div></td>
                <td class="td_2">&nbsp;</td>
            </tr>
            <tr>
                <td class="td_7_cb">&nbsp;</td>
                <td class="direito"><div class="titulo">(-) Outras Dedu&ccedil;&otilde;es</div>
                    <div class="var">&nbsp;</div></td>
                <td class="td_2">&nbsp;</td>
            </tr>
            <tr>
                <td class="td_7_cb">&nbsp;</td>
                <td class="direito"><div class="titulo">(+) Multa / Mora</div>
                    <div class="var">&nbsp;</div></td>
                <td class="td_2">&nbsp;</td>
            </tr>
            <tr>
                <td class="td_7_cb">&nbsp;</td>
                <td class="direito"><div class="titulo">(+) Outros Acr&eacute;scimos</div>
                    <div class="var">&nbsp;</div></td>
                <td class="td_2">&nbsp;</td>
            </tr>
            <tr>
                <td class="td_7_cb">&nbsp;</td>
                <td class="direito"><div class="titulo">(=) Valor Cobrado</div>
                    <div class="var">&nbsp;</div></td>
                <td class="td_2">&nbsp;</td>
            </tr>
        </table>
        <table class="tabelas" style="width:666px; height:65px; border-left:solid; border-left-width:2px; border-left-color:#000000;" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="td_7_sb">&nbsp;</td>
                <td valign="top"><div class="titulo">Sacado</div>
                    <div class="var" style="margin-bottom:5px; height:auto">Nome do Sacado<br />
                        Rua do Sacado, N&uacute;mero / Complemento<br />
                        Cidade/UF - CEP: 36000-000</div>
                    <div class="titulo">Sacador / Avalista</div></td>
                <td class="td_7_sb">&nbsp;</td>
                <td class="direito" valign="top"><div class="titulo">CPF / CNPJ</div>
                    <div class="var" style="text-align:left;">000.000.000-000&nbsp;</div></td>
                <td class="td_2">&nbsp;</td>
            </tr>
        </table>
        <table style="width:666px; border-top:solid; border-top-width:2px; border-top-color:#000000" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="td_7_sb">&nbsp;</td>
                <td style="width: 417px; height:62px;">[ Imagem do C&oacute;digo de Barras ]</td>
                <td class="td_7_sb">&nbsp;</td>
                <td valign="top"><div class="titulo" style="text-align:left;">Autenticaçao Mecânica / FICHA DE COMPENSAÇAO</div></td>
                <td class="td_2">&nbsp;</td>
            </tr>
        </table>
    </div>
    </body>
    </html>
	


	<?php
	
	$html = ob_get_contents();
	
	// encerrar o buffer e limpar tudo que h� nele.
	ob_end_clean();
	
	$dompdf = new DOMPDF ();
	$dompdf->load_html ( $html );
	$dompdf->set_paper ( 'a4', 'portrait' );
	$dompdf->render ();
	$dompdf->stream ( "teste.pdf" );
?>
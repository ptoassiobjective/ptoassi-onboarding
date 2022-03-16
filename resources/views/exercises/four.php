<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Onboarding</title>

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="hidden top-0 left-0 px-6 py-4 sm:block">

        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm sm:text-right">
            <a href="http://localhost:8080/">
                Voltar
            </a>
        </div>
        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-4">
                    <h1>Exercício 4 - Cálculo de Frete</h1>
                    <p dir="ltr"><span>Em todos os e-commerces, o usu&aacute;rio pode criar um carrinho de compras, adicionar um produto e calcular o valor do frete para a entrega.</span></p>
                    <p dir="ltr"><span>O valor do frete &eacute; calculado a partir do CEP do usu&aacute;rio (destinat&aacute;rio), e geralmente &eacute; provido pelos servi&ccedil;os de fretamento (correios ou particular), muitas vezes sendo invocado uma API que, dado o CEP (dentre outros dados), traz o valor do frete.</span></p>
                    <p dir="ltr"><span>Desenvolva um sistema simplificado do carrinho, com os seguintes requisitos:</span></p>
                    <ul>
                        <li dir="ltr">
                            <p dir="ltr"><span>Um produto possui um nome e um valor</span></p>
                        </li>
                        <li dir="ltr">
                            <p dir="ltr"><span>Um carrinho recebe um conjunto de produtos e a quantidade de itens de cada produto</span></p>
                        </li>
                        <li dir="ltr">
                            <p dir="ltr"><span>Um carrinho pertence &agrave; um usu&aacute;rio, que tem nome e seu endere&ccedil;o de entrega representado por um CEP</span></p>
                        </li>
                        <li dir="ltr">
                            <p dir="ltr"><span>Um servi&ccedil;o que recebe o carrinho, e retorna o valor final para o usu&aacute;rio</span></p>
                        </li>
                    </ul>
                    <p dir="ltr"><span>Esse servi&ccedil;o</span></p>
                    <ul>
                        <li dir="ltr">
                            <p dir="ltr"><span>Faz a soma total de valores de todos os produtos do carrinho</span></p>
                        </li>
                        <li dir="ltr">
                            <p dir="ltr"><span>Caso o valor seja &lt; $100,00, o sistema requisita para um servi&ccedil;o externo o valor do frete de acordo com o CEP do dono do carrinho</span></p>
                        </li>
                        <li dir="ltr">
                            <p dir="ltr"><span>Retorna o valor final do carrinho (com ou sem frete)</span></p>
                        </li>
                    </ul>
                    <p dir="ltr"><span>Sugest&atilde;o de solu&ccedil;&atilde;o:</span></p>
                    <ol>
                        <li dir="ltr">
                            <p dir="ltr"><span>Crie a estrutura necess&aacute;ria para o Carrinho</span></p>
                        </li>
                        <ol>
                            <li dir="ltr">
                                <p dir="ltr"><span>Usu&aacute;rio (nome e CEP)</span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr"><span>Produto (nome e Valor)</span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr"><span>Carrinho (Usu&aacute;rio e lista de Produtos)</span></p>
                            </li>
                        </ol>
                        <li dir="ltr">
                            <p dir="ltr"><span>Fa&ccedil;a o carrinho responder o valor total das compras - com testes</span></p>
                        </li>
                        <ol>
                            <li dir="ltr">
                                <p dir="ltr"><span>Pergunte-se:</span></p>
                            </li>
                            <ol>
                                <li dir="ltr">
                                    <p dir="ltr"><span>Qual o valor se ele estiver vazio?</span></p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr"><span>E se eu adicionar novos produtos?</span></p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr"><span>E se eu adicionar produtos que j&aacute; tinham sido adicionados?</span></p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr"><span>E como eu removo o produto do carrinho?</span></p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr"><span>E se eu adicionar dois produtos ao mesmo tempo?</span></p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr"><span>E se eu adicionar ou remover a quantidade de produtos no carrinho?</span></p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr"><span>E se eu zerar a quantidade de produtos do carrinho?</span></p>
                                </li>
                            </ol>
                            <li dir="ltr">
                                <p dir="ltr"><span>N&atilde;o h&aacute; requisitos formais de como um carrinho deve funcionar, ou suas interfaces</span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr"><span>O DoD &eacute; o carrinho pronto para receber produtos e devolver o valor final</span></p>
                            </li>
                            <ol>
                                <li dir="ltr">
                                    <p dir="ltr"><span>O carrinho </span><span>deve</span><span> ter um m&eacute;todo, que retorne o valor total do carrinho</span></p>
                                </li>
                            </ol></ol>
                        <li dir="ltr">
                            <p dir="ltr"><span>Criem uma interface que representar&aacute; o Servi&ccedil;o do Correios</span></p>
                        </li>
                        <ol>
                            <li dir="ltr">
                                <p dir="ltr"><span>Ele ter&aacute; apenas um m&eacute;todo registrado - recebe o CEP e retorna um valor de Frete</span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr"><span>N&atilde;o precisamos da implementa&ccedil;&atilde;o real (no momento, e para esse exerc&iacute;cio)</span></p>
                            </li>
                        </ol>
                        <li dir="ltr">
                            <p dir="ltr"><span>Crie um classe que representar&aacute; o servi&ccedil;o de c&aacute;lculo</span></p>
                        </li>
                        <ol>
                            <li dir="ltr">
                                <p dir="ltr"><span>Ela receber&aacute; em sua constru&ccedil;&atilde;o uma inst&acirc;ncia da interface do servi&ccedil;o de Correios (inje&ccedil;&atilde;o de depend&ecirc;ncia)</span></p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr"><span>Ela ter&aacute; um m&eacute;todo que recebe um carrinho como par&acirc;metro, e retorna o valor total</span></p>
                            </li>
                        </ol>
                        <li dir="ltr">
                            <p dir="ltr"><span>Crie os testes antes da implementa&ccedil;&atilde;o</span></p>
                        </li>
                        <ol>
                            <li dir="ltr">
                                <p dir="ltr"><span>Qual o valor total, caso a soma total dos produtos do carrinho (feito anteriormente e com seus testes j&aacute; funcionando) seja&lt; $100?</span></p>
                            </li>
                            <ol>
                                <li dir="ltr">
                                    <p dir="ltr"><span>Eu preciso invocar o m&eacute;todo real do Carrinho?</span></p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr"><span>Como eu simulo o retorno do servi&ccedil;o do Correios?</span></p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr"><span>Como eu garanto que a l&oacute;gica decis&oacute;ria est&aacute; correta?</span></p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr"><span>Como eu garanto que eu chamei apenas uma &uacute;nica vez o servi&ccedil;o do correio?</span></p>
                                </li>
                            </ol>
                            <li dir="ltr">
                                <p dir="ltr"><span>E se o valor for &gt;= $100?</span></p>
                            </li>
                            <ol>
                                <li dir="ltr">
                                    <p dir="ltr"><span>Qual ser&aacute; o valor final do c&aacute;lculo?</span></p>
                                </li>
                                <li dir="ltr">
                                    <p dir="ltr"><span>Como eu garanto que eu n&atilde;o precisei chamar os servi&ccedil;os do correio?</span></p>
                                </li>
                            </ol></ol>
                        <li dir="ltr">
                            <p dir="ltr"><span>Crie os testes usando Mocks, mockando tanto o Carrinho quanto o Servi&ccedil;o de Correios</span></p>
                        </li>
                        <ol>
                            <li dir="ltr">
                                <p dir="ltr"><span>A implementa&ccedil;&atilde;o do servi&ccedil;o que calcula valor total com ou sem frete deve ser concreta</span></p>
                            </li>
                        </ol></ol>

                    <h2>Definition of Done</h2>
                    <p>Todos os requisitos devem estar cobertos por testes automatizados.</p>
                    <p>Deve existir pelo menos uma classe de testes para o serviço, e esse deverá cobrir todas <br>
                        as variações das regras do serviço. Além do mais, a comunicação com o serviço do correio <br>
                        deverá ser através de mocks.</p>

                </div>

                <div class="p-8">
                <h2> Produtos </h2>
                <h3> Total <?php echo $cartTotal; ?> </h3>
                    <?php foreach ($cart as $produto): ?>
                    <div class="max-w-3xl mx-auto sm:px-6">
                        <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <div class="grid grid-cols-1 md:grid-cols-1">
                                <div class="p-6">
                                    <h3><?php echo $produto['name']; ?> - <?php echo $produto['price']; ?></h3>

                                    <p><b>Quantidade: </b><?php echo $produto['amount']; ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm sm:text-right">
            <a href="http://localhost:8080/">
                Voltar
            </a>
        </div>
    </div>
</div>
</body>
</html>

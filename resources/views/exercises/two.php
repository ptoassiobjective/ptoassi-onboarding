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
                <div class="p-8">
                    <h1>Exercício 2 - Números felizes</h1>
                    <p>Os números felizes são definidos pelo seguinte procedimento:</p>
                    <p>Começando com qualquer número inteiro positivo, o número é substituído pela soma dos quadrados dos seus <br>
                        dígitos.</p>
                    <p>Repete-se esse processo até que o número seja igual a 1.</p>
                    <p>Tomamos o 7, que é um número feliz:</p>
                    </p>    ● 7² = 49</p>
                    </p>    ● 4² + 9² = 97</p>
                    </p>    ● 9² + 7² = 130</p>
                    </p>    ● 1² + 3² + 0² = 10</p>
                    </p>    ● 1² + 0² = 1</p>
                    <p>Um número não é feliz quando, em seu processo de cálculo, em algum momento ele entra em loop, ou seja,<br>
                        ele passe por um número que ele já passou anteriormente (não é possível determinar um número específico <br>
                        que ele sempre irá passar).</p>
                    <p>Faça um programa que, dado um número natural qualquer, determine se é um número feliz.</p>

                    <h2>Definition of Done</h2>
                    <p>Um trecho de código onde é possível invocar um método checando se o número é feliz ou não, e o sistema
                        consiga responder.</p>
                    <p>A solução final deve ser quebrada em diversas etapas, passos que precisam ser executados para se chegar<br>
                        na solução final, e  cada uma dessas etapas devem estar cobertas com testes automatizados.</p>

                    <h2>Sugestão: </h2>
                    <p>Fazer seguindo TDD.</p>1, 7, 10, 13, 19, 23, 28, 31, 32, 44, 49

                </div>
                <div class="p-4 text-center">
                    <h2>Verifique se o numero é feliz</h2>
                    <form method="get">
                        <input value="<?php echo $number; ?>" type="number" name="numero" style="border: 1px solid #4a5568; height: 25px"/>
                        <p><?php echo $results; ?></p>
                    </form>
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

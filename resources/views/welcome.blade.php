<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <body class="px-5 pb-3" style="background-color: #1e1e24; color: white">
       <nav class="navbar navbar-expand-lg " style="color: white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color: white">Users API</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex">
                        <li class="nav-item" >
                        <a class="nav-link active" style="color: white" aria-current="page" href="#endpoints">Endpoints</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" style="color: white" href="#examples">Examples</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" style="color: white" href="#about">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="container-fluid mt-5 rounded py-3 mx-2" style="background-color: #3c3b47; color: white">
            <h1>Users API</h1>
            <p>Public API for testing and structuring</p>
            <p>
                <a href="#about" class="btn btn-secondary btn-large">
                About
                </a>
            </p>
        </header>

        <section class="container-fluid mt-5">
            <h2 id="endpoints">Endpoints</h2>
            <div style="max-width: 300px">
                <ol class="list-group list-group-numbered" style="background-color: #1e1e24; color: white">
                    <li class="list-group-item"  style="background-color: #3c3b47; color: white">
                        <a class="link-light" href="/users">/users</a>
                    </li>
                   
                </ol>
            </div>
        </section>

        <section class="container-fluid mt-5">
            <h2 id="examples">Examples</h2>
            <div class="card" style="background-color: #3c3b47; color: white">
               <div class="card-body">
                 <div class="btn-example-container btn-group card-title" role="group" aria-label="Basic example">
                    <button type="button" class="btn-example btn btn-outline-secondary active">/users</button>
                   
                </div>
                <div class="card" style="background-color: #3c3b47; color: white">
                    <pre class="p-2" style="white-space: pre-wrap;"><code></code></pre>
                </div>
                
               </div>
            </div>
        </section>

        <section class="container-fluid mt-5">
            <h2 id="about">About</h2>
            <p>Hi! my name is Francesco Alterio, the developer of this API, the goal of creating this API was to introduce me to the Laravel Framework. The project is totally public and its code is completely on my Github.</p>
            <a href="#about" class="btn btn-secondary btn-large">
                Repository
            </a>
            </p>
        </section>

            <script>
                const $container = document.querySelector('.btn-example-container')

                 fetch('/users').then(res => res.json()).then(result => {
                    const $code = document.querySelector('code')
                    $code.textContent = JSON.stringify(result, undefined, 4)
                })

                $container.addEventListener('click', (e) => {
                    if(e.target.classList.contains('btn-example')) {
                        const exampleURL = e.target.textContent
                        console.log(exampleURL)

                        fetch(exampleURL).then(res => res.json()).then(result => {
                            const $code = document.querySelector('code')
                            $code.textContent = JSON.stringify(result, undefined, 4)
                        })

                        const $allExampleButtons = document.querySelectorAll('.btn-example');
                        const $copy = [...$allExampleButtons]
                        $copy.forEach(x => {
                            x.classList.remove('active')
                        })

                        e.target.classList.add('active')
                    }
                    
                })
                
                
            </script>
        
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/Login.css'])
    @vite(['resources/css/style.css'])
    <link    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"    rel="stylesheet"    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"    crossorigin="anonymous"  />

</head>
<body>
    <x-header></x-header>
    <section>
        <h1 class="text-center">Login</h1>
        <form>
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Email</label>
            </div>
        
            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2">Senha</label>
            </div>
        
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Lembrar-me </label>
                    </div>
                </div>
        
                <div class="text-center">
                    <!-- Simple link -->
                    <a href="#!">Esqueceu a senha!</a>
                </div>
            </div>
        
            <!-- Submit button -->
            <div class="text-center">
                <button  type="button-center" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Entar</button>
            </div>
            <div class="text-center">
                </button>
            </div>
        </form>
    </section>
</body>
</html>
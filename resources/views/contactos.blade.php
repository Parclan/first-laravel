<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-brands/css/uicons-brands.css'>
</head>
<body class="bg-black">

    <div class="container mx-auto">

        <br><br>

        <a class="p-3 text-white bg-blue-400 rounded-lg text-center text-xl" href="{{ url('/')}}">Regresar</a>

        <br><br>

        <div class="grid gap-5 grid-cols-4 mt-44">
            <div style="transition:0.8s; hover{transition:0.8s};" class="text-center text-white text-2xl p-5 bg-[#25D366] w-72 flex flex-col rounded-xl hover:shadow-2xl hover:shadow-green-500">
                <a href="https://wa.me/+573213485867" target="_blank" class="mt-7">
                    <i class="fi fi-brands-whatsapp text-4xl"></i>
                    <p class="mt-4">Este es mi numero personal para contactarme</p>
                </a>
            </div>

            <div class="text-center text-2xl p-5 w-72 flex flex-col rounded-xl bg-[#c9caca] hover:shadow-2xl hover:shadow-slate-300" style="transition:0.8s; hover:{transition: 0.8s}">
                <a href="https://github.com/Parclan" target="_blank">
                    <i class="fi fi-brands-github text-4xl"></i>
                    <p class="mt-4">Mi perfil de programador, por si deseas apoyarme en la programacion seguirme</p>
                </a>
            </div>

            <div class="text-center text-white text-2xl p-5 w-72 flex flex-col rounded-xl hover:shadow-2xl hover:shadow-blue-600" style="background-image: url(https://img.freepik.com/vector-gratis/fondo-instagram-colores-degradados_23-2147821883.jpg?w=360); transition:0.8s;  hover:{trasition: 0.8s}">
                <a href="https://www.instagram.com/iamjose_priv/?next=%2F" target="_blank" class="mt-10">
                    <i class="fi fi-brands-instagram text-4xl"></i>
                    <p class= "mt-4">Mi cuenta principal, por si deseas seguirme</p>
                </a>
            </div>

            <div class="text-center text-white text-2xl p-5 w-72 flex flex-col rounded-xl bg-red-500 hover:shadow-2xl hover:shadow-red-600" style="transition: 0.8s; hover:{trasition: 0.8s}">
                <a href="https://youtube.com/@josedanielmolinajimenez2760?si=jQw1fXDSNfgbvrSO" target="_blank" class="mt-10">
                    <i class="fi fi-brands-youtube text-4xl"></i>
                    <p class="mt-4">Por si gusta, pasar por mi canal</p>
                </a>
            </div>

        </div>
    </div>


</body>
</html>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quien soy?</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @vite('resources/css/app.css')
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-brands/css/uicons-brands.css'>
</head>
<body>
    <div class="container mx-auto">
        <br><br>

        <a class="bg-blue-500 text-white p-3 text-xl rounded-lg" href="{{ url ('/') }}">Regresar</a>

        <br><br>

        <center>
            <div class="bg-blue-400 h-[25px] w-56">
                <h1 class="text-center text-4xl">
                    Quien soy?
                </h1>
            </div>
        </center>

        <br><br><br>

        <!--Texto-->
        <div class="flex">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum accusamus natus hic repellat cumque eius quas provident possimus, sed fugit dignissimos officiis esse ipsum veritatis consequuntur recusandae maiores dolore earum.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. At voluptates suscipit debitis similique inventore autem dignissimos veniam asperiores, beatae nesciunt non deleniti sunt illo minima quisquam eum eius quidem possimus!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis, cumque est ut, aliquid, impedit sint architecto vel eaque fugit suscipit atque officiis vitae praesentium non adipisci ipsam perspiciatis harum tempora?<br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti asperiores officia vero quisquam animi sed sint cum nobis sit minus dolor labore delectus maxime, excepturi dolorum minima eos numquam distinctio.
                </p>
            </div>

            <div class="blur-sm w-[520px]">
                <img src="https://miro.medium.com/v2/resize:fit:1240/1*-Rv6cE5sa2yebb7xXuvQbQ.gif" alt="">
            </div>
        </div>
    </div>
    <br>
    <footer class="bg-blue-400 bottom-0 absolute w-full text-3xl p-2 flex justify-between ">
        <div style="margin-left: 30px">
            <p>Jose Molina</p>
        </div>

        <div class="basis-1/4">

                <a href="https://wa.me/+573213485867" target="_blank">
                    <i class="fi fi-brands-whatsapp"></i>
                </a>

                <a href="https://www.instagram.com/iamjose_priv/?next=%2F" target="_blank">
                    <i style="margin-left: 20px" class="fi fi-brands-instagram"></i>
                </a>

                <a href="https://github.com/Parclan" target="_blank">
                    <i style="margin-left: 20px" class="fi fi-brands-github"></i>
                </a>

                <a href="https://youtube.com/@josedanielmolinajimenez2760?si=jQw1fXDSNfgbvrSO" target="_blank">
                    <i style="margin-left: 20px" class="fi fi-brands-youtube"></i>
                </a>

        </div>
    </footer>
</body>
</html>

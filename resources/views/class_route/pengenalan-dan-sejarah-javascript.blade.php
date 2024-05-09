@extends('class_route.layouts.app')

@section('pengenalan-dan-sejarah-javascript')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Baca Materi</title>
</head>

<style>
    .baner img {
      max-width: 100%;
      max-height: 100%;
      width: auto;
      height: auto;
    }
</style>

<body>
   
   <section class="container py-4 " style="width: 100%; max-width: 100%;  height: 78vh; overflow-y: auto; display: flex; flex-direction: column;  ">
      <div class="baner"> 
         <img src={{asset('assets/images/pengenalan-dan-sejarah-javaScript.png')}} alt="">
      </div>
        @include('class_route.layouts.dasar-pemrograman-javascript')
       <div class="row mt-3" >
         <div class="col-md-12">
           <h1>PENGENALAN DAN SEJARAH JAVASCRIPT</h1>
           <div class="article-content md:mt-5">
            <div class=""> 
               <h2>Apa Itu JavaScript</h2>
               <p class="ms-3">JavaScript adalah bahasa pemrograman scripting yang digunakan untuk membuat interaktifitas pada halaman web. Pada awalnya, JavaScript hanya dapat digunakan disisi client, namun seiring dengan berjalannya waktu JavaScript sekarang dapat digunakan disisi back end dengan teknologi Node.js. Hingga saat ini, JavaScript dapat digunakan untuk membuat aplikasi web maupun aplikasi mobile dengan bantuan framework seperti React Native.</p>
            </div>
   
            <div class=""> 
               <h2>Sejarah JavaScript</h2>
               <p class="ms-3">JavaScript dikembangkan pada tahun 1995 oleh Brendan Eich saat bekerja di Netscape Communications Corporation. Awalnya, JavaScript dinamai <span class="fw-bold">Mocha</span> kemudian berubah menjadi <span class="fw-bold">LiveScript</span>. Pada saat itu Java merupakan bahasa pemrograman yang paling populer. Untuk memanfaatkan kepopulerannya, kemudian nama <span class="fw-bold">LiveScript</span>  pun diubah menjadi <span class="fw-bold">JavaScript</span>.</p>
               <p class="ms-3">Setelah diadopsi di luar Netscape, JavaScript distandarisasi oleh European Computer Manufacturers Association (ECMA). Sejak saat itu JavaScript juga dikenal dengan ECMAScript. Meskipun begitu, masih banyak yang menyebutnya dengan JavaScript hingga saat ini.</p>
            </div>
           </div>
         </div>
       </div>
     </section>
</body>
</html>

@endsection


@extends('layouts.template')
@section('content')
<div class="container1 d-flex justify-content-center align-items-center" style="height:50vh; border-radius: 30px; overflow: hidden; position: relative;">
  <div class="col">
    <div class="d-flex flex-column align-items-center fadeIn">
      <br>
      <div class="judul-container">
        <h2 class="judul">Tentang Kami</h2>
      </div>
      <br>
      <br>
      <div class="d-flex flex-column align-items-center" style="background-color: rgba(0, 0, 0, 0.7); padding: 20px; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5); text-align: center;">
        <p style="color: white;">Selamat datang di WEOLAN. Kami adalah sebuah platform yang didedikasikan untuk memudahkan Anda dalam melakukan top up kebutuhan game. Dengan menggunakan metode transaksi otomatis (Auto Transaction Method), kami menyediakan layanan yang cepat, aman, dan dapat diandalkan, sehingga Anda dapat menikmati pengalaman bermain game tanpa gangguan.</p>
      </div>


    </div>
  </div>
</div>
@endsection

<style>
.judul-container {
  position: absolute;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background-color: rgba(0, 0, 0, 0.7);
  padding: 10px 20px;
  border-radius: 10px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
}

.judul {
  color: white;
  margin: 0;
}

h5, p {
  color: white;
}

.container1 {
  background-image: url('/images/BG1.jpeg');
  background-size: cover;
  background-position: top;
  background-repeat: no-repeat;
  border: 2px;
  position: relative;
  margin: 20px;
}

.fadeIn {
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>

@extends('layouts/navbar')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('body')

<section>
    <h1>
        Wisata Guci Tegal
    </h1>

    <p class="">Wisata Guci Tegal, meskipun hanya sebuah desa, namun ternyata menyimpan berbagai pesona keindahan, serta spot wisata alam yang beragam, yang layak untuk dikunjungi.</p>
    <div class="img">
    <div class="mt-5">
        <img src="https://www.javatravel.net/wp-content/uploads/2022/01/Wisata-Guci-Tegal.jpg" height="200rem" alt="">
    </div>
    <div class="mt-5">
        <img src="https://panturapost.com/wp-content/uploads/2020/02/WhatsApp-Image-2020-02-21-at-16.51.40.jpeg" height="200rem" alt="">
    </div>
    <div class="mt-5">
        <img src="https://ksmtour.com/media/images/articles26/Tempat-Wisata-Pemandian-Air-Panas-Guci-Tegal_medium.jpg" height="200rem" alt="">
    </div>
</div>
</section>

<section>
<div class=" mt-5">

    <div class=" mb-5">
        <h3>Lokasi Wisata Guci Tegal</h3>
    </div>

    <div class="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63331.17121245098!2d109.13793039380617!3d-7.218219165949142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8d3974df69b7%3A0x44f89e1f16c24043!2sGuci%2C%20Kecamatan%20Bumijawa%2C%20Kabupaten%20Tegal%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1678433838055!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>
</section>
    {{-- <div class="container align-bottom">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><img src="{{ asset('img/facebook.svg') }}" alt="" width="30px"></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><img src="{{ asset('img/twitter.svg') }}" alt="" width="30px"></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><img src="{{ asset('img/instagram.svg') }}" alt="" width="30px"></a></li>
    </ul>
  </footer>
</div> --}}
@endsection

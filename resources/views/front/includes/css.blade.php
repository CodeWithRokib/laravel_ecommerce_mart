@php
$company = \DB::table('companies')->first();
$favicon = $company ? $company->favicon : null;
@endphp

<!-- Favicon -->
<link href="{{ $favicon ? asset('/').$favicon : ' ' }}" rel="icon">


 <!-- Google Web Fonts -->
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

 <!-- Font Awesome -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

 <!-- Libraries Stylesheet -->
 <link href="{{ asset('/') }}front/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

 <!-- Customized Bootstrap Stylesheet -->
 <link href="{{ asset('/') }}front/assets/css/style.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
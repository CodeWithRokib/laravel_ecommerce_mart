<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}front/assets/lib/easing/easing.min.js"></script>
<script src="{{ asset('/') }}front/assets/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="{{ asset('/') }}front/assets/mail/jqBootstrapValidation.min.js"></script>
<script src="{{ asset('/') }}front/assets/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('/') }}front/assets/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if(Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}");
    </script>
    {{ Session::forget('success') }}
@endif

@if(Session::has('error'))
    <script>
        toastr.error("{{ Session::get('error') }}");
    </script>
    {{ Session::forget('error') }}
@endif
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

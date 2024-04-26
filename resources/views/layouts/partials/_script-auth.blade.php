<!-- *************
			************ Required JavaScript Files *************
		************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="{{ asset('arise/design') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('arise/design') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('arise/design') }}/assets/js/modernizr.js"></script>
<script src="{{ asset('arise/design') }}/assets/js/moment.js"></script>

<!-- *************
			************ Vendor Js Files *************
		************* -->

<!-- Main Js Required -->
<script src="{{ asset('arise/design') }}/assets/js/main.js"></script>

@if (Session::get('text'))
<script>
    Swal.fire({
        title: `{{ Session::get('title') }}`,
        icon: `{{ Session::get('icon') }}`,
        text: `{{ Session::get('text') }}`
    })
</script>
@endif

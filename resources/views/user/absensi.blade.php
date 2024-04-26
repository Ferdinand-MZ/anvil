@extends('layouts._default.app')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row justify-content-center">
        <div class="col-sm-6 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Absensi Program Kerja / Agenda</div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div
                            id="canvas_camera"
                            style="width: 30rem"
                            class="my-3"
                        ></div>
                        <button
                            onclick="handleOpenCamera()"
                            class="btn btn-sm btn-success"
                        >Mulai</button>
                    </div>
                </div>
            </div>
            <!-- Card end -->

        </div>
    </div>
    <!-- Row end -->

</div>
<!-- Content wrapper end -->

<script>
    let html5CodeScanner = new Html5QrcodeScanner(
        "canvas_camera", {
            fps: 30,
            qrbox: 250
            }
        )
    function handleOpenCamera() {
        html5CodeScanner.render(onScanSuccess)
    }

    function onScanError(errorMessage) {
    // handle on error condition, with error message
    console.log(`Error: ${errorMessage}`)
    }

    function onScanSuccess(decodedText, decodedResult) {
        console.log(`Scan Result : OK`)
        $.ajax({
            url: `{{ config('app.url') }}/proker-agenda/absensi/store/${decodedText}`,
            method: `POST`,
            data: {
                _token: `{{ csrf_token() }}`
            },
            success: function(result) {
                Swal.fire({
                    title: result.title,
                    icon: result.icon,
                    text: result.text
                }).then((res) => {
                    if (res.isConfirmed) {
                        window.location.reload()
                    }
                })
            },
            error: function(error) {
                console.error(error)
            }
        })
        html5CodeScanner.clear()
    }
</script>

@endsection

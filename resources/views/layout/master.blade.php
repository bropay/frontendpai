<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

    $(document).change(function (e) {

        $('#image').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.file[0]);
        });
    });
    </script>
    <script>

        $(document).ready(function (er) {
            $('#imageUbah').change(function() {
                let reader2 = new FileReader();
                reader2.onload = (er) => {
                    $('#preview.foto').attr('src', er.target.result);
                }
                reader2.readAsDataURL(this.file[0]);
            });
        });
    </script>
</head>
<body>
    <div class="main-wrapper">
        <div class="px-3 py-2 text-bg-dark">
            <div class="container-fluid">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <h3> STUDENT DATA </h3>
                </div>
            </div>
        </div>
        <div class="main-content"> @yield('content') </div>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">© 2023 RPL, Inc</p>
            </footer>
        </div>
    </div>
    
</body>
</html>
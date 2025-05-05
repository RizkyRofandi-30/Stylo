<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stylo</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <!-- Sweet alert js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    {{-- Lucid Icons --}}
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

    <!-- Additional CSS Files -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @if (session('success'))
        <script>
            swal({
                title: "{{ session('success') }}",
                icon: "success",
                button: "Ok",
            });
        </script>
    @endif
    {{ $slot }}

    @vite(['resources/js/carousel.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        document.getElementById('showAlert').addEventListener('click', function(e) {
            e.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        document.getElementById('logout-form').submit();
                    }
                });
        })
    </script>
</body>

</html>

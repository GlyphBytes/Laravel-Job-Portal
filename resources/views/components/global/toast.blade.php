@if (session('success'))
    <script>
        const notyf = new Notyf();
        const message = '{{session('success')}}'
        notyf.success(message);
    </script>
@endif

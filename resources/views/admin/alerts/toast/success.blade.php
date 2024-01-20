@if (session('toast-success'))

    <section class="toast" data-delay="5000">
        <section class="toast-bady p-3 d-flex bg-success text-white">
            <strong class="ml-auto">
                {{ session('toast-success') }}
            </strong>

        </section>
    </section>

    <script>
        $(document).ready(function(){
            $('.toast').toast('show');
        })
    </script>
@endif

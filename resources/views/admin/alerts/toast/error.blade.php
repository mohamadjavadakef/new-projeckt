@if (session('toast-error'))

    <section class="toast" data-delay="5000">
        <section class="toast-bady py-3 d-flex bg-danger text-white">
            <strong class="ml-auto">
                {{ session('toast-error') }}
            </strong>

        </section>
    </section>

    <script>
        $(document).ready(function(){
            $('.toast').toast('show');
        })
    </script>
@endif

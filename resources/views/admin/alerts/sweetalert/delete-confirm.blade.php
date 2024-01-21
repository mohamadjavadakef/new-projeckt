<script>
    $(document).ready(function(){
        var className = '{{ $className }}';
        var element = $('.' + className);

        element.on('click' , function(e){
            e.preventDefault();

            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success mx-2",
                cancelButton: "btn btn-danger mx-2"
            },
            buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
            title: "آیا از حذف کردن داده مطمعن هستید؟",
            text: "شما می توانید در خواست خود را لغو کنید!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "بله . حذف کنید",
            cancelButtonText: "نه . در خواست لغو شود!",
            reverseButtons: true
            }).then((result) => {
            if (result.value == true) {
                $(this).parent().submit();
            } else if  (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                title: "لغو درخواست",
                text: "درخواست شما لغو شد",
                icon: "error",
                confirmButtonText: "باشه .",
                });
            }
            });
        })

    })
</script>

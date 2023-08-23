<script>
    $(document).ready(function() {
        $('.btn-withdraw').click(function(e) {
            e.preventDefault()
            let href = $(this).attr('href')
            console.log(href)

            swal({
                title: "Apakah Kamu Yakin ?",
                text: "Sistem akan mengirim email permintaan penarikan, Silahkan tunggu informasi berikutnya dari admin.",
                icon: "warning",
                buttons: true,
            }).then((result) => {
                console.log(result)
            })
        })
    })
</script>

    {{-- Panggil file jquery untuk proses reatime --}}
    <script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>

    {{-- ajax untuk realtime --}}
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#suhu").load("{{ url('suhu') }}", function(response) {
                    if (parseInt(response) < 18 || parseInt(response) > 24) {
                        $(this).html('<span class=\'text-danger\'>' + parseInt(response).toString() + '</span>');
                    } else {
                        $(this).html(parseInt(response).toString());
                    }

                    console.log('suhu: ' + parseInt(response).toString());
                });

                $("#ph").load("{{ url('ph') }}", function(response) {
                    if (parseFloat(response) < 5.5 || parseFloat(response) > 6.5) {
                        $(this).html('<span class=\'text-danger\'>' + parseFloat(response).toString() + '</span>');
                    } else {
                        $(this).html(parseFloat(response).toString());
                    }

                    console.log('ph: ' + parseFloat(response).toString());
                });

                $("#tds").load("{{ url('tds') }}", function(response) {
                    if (parseInt(response) < 1000 || parseInt(response) > 1400) {
                        $(this).html('<span class=\'text-danger\'>' + parseInt(response).toString() + '</span>');
                    } else {
                        $(this).html(parseInt(response).toString());
                    }

                    console.log('tds: ' + parseInt(response).toString());
                });

                // $("#pompa").load("{{ url('pompa') }}", function(response) {
                //     if (parseFloat(response) < 5.5 || parseFloat(response) > 6.5) {
                //         $(this).html('<span class=\'text-danger\'>' + parseFloat(response).toString() + '</span>');
                //     } else {
                //         $(this).html(parseFloat(response).toString());
                //     }

                //     console.log('ph: ' + parseFloat(response).toString());
                // });
            }, 1000);
        });
    </script>

    {{-- Panggil file jquery untuk proses reatime --}}
    <script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>

    {{-- ajax untuk realtime --}}
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#ph").load("{{ url('ph') }}", function(response) {
                    if (parseFloat(response) < 5.5 || parseFloat(response) > 6.5) {
                        $(this).html('<span class=\'text-danger\'>' + parseFloat(response).toString() + '</span>');
                    } else {
                        $(this).html(parseFloat(response).toString());
                    }

                    console.log('ph: ' + parseFloat(response).toString());
                });

                $("#kelembaban").load("{{ url('kelembaban') }}", function(response) {
                    if (parseInt(response) < 50 || parseInt(response) > 70) {
                        $(this).html('<span class=\'text-danger\'>' + parseInt(response).toString() + '</span>');
                    } else {
                        $(this).html(parseInt(response).toString());
                    }

                    console.log('kelembaban: ' + parseInt(response).toString());
                });

                $("#temperatur").load("{{ url('temperatur') }}",  function(response) {
                    if (parseInt(response) < 20 || parseInt(response) > 35) {
                        $(this).html('<span class=\'text-danger\'>' + parseInt(response).toString() + '</span>');
                    } else {
                        $(this).html(parseInt(response).toString());
                    }

                    console.log('temperatur: ' + parseInt(response).toString());
                });

                $("#nitrogen").load("{{ url('nitrogen') }}",  function(response) {
                    if (parseFloat(response) < 0.1 || parseFloat(response) > 0.3) {
                        $(this).html('<span class=\'text-danger\'>' + parseFloat(response).toString() + '</span>');
                    } else {
                        $(this).html(parseFloat(response).toString());
                    }

                    console.log('nitrogen: ' + parseFloat(response).toString());
                });

                $("#fosfor").load("{{ url('fosfor') }}",  function(response) {
                    if (parseFloat(response) < 0.05 || parseFloat(response) > 0.15) {
                        $(this).html('<span class=\'text-danger\'>' + parseFloat(response).toString() + '</span>');
                    } else {
                        $(this).html(parseFloat(response).toString());
                    }

                    console.log('fosfor: ' + parseFloat(response).toString());
                });

                $("#kalium").load("{{ url('kalium') }}",  function(response) {
                    if (parseFloat(response) < 0.1 || parseFloat(response) > 0.5) {
                        $(this).html('<span class=\'text-danger\'>' + parseFloat(response).toString() + '</span>');
                    } else {
                        $(this).html(parseFloat(response).toString());
                    }

                    console.log('kalium: ' + parseFloat(response).toString());
                });
            }, 1000);
        });
    </script>

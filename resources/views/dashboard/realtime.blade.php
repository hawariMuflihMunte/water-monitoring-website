    {{-- Panggil file jquery untuk proses reatime --}}
    <script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>

    {{-- ajax untuk realtime --}}
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#ph").load("{{ url('ph') }}");
                $("#kelembabanTanah").load("{{ url('kelembaban-tanah') }}");
                $("#temperaturTanah").load("{{ url('temperatur-tanah') }}");
                $("#kadarNutrisiTanah").load("{{ url('kadar-nutrisi-tanah') }}");
            }, 1000);
        });
    </script>

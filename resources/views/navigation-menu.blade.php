@include('header')
<script>
   var user = {!! json_encode(Auth::user()) !!};
    localStorage.setItem("user", user);
</script>


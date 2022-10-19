<!-- axios -->
@csrf
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.j')}}s"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    axios.defaults.headers.common['X-XSRF-TOKEN'] = $("input[name='_token']").val();
    const throwErr = err => {
      if (err.response.status == 422) {
        let message = err.response.data.errors
        let teks_error = ''
        $.each(message, (i, e) => {
          if (e.length > 1) {
            $.each(e, (id, el) => {
              teks_error += `<p>${el}</p>`
            })
          } else {
            teks_error += `<p>${e}</>`
          }
        })
        swal.fire({
          icon: 'error',
          title: 'Oops...',
          html: teks_error,
        })
      } else {
        let message = err.response.data.message
        swal.fire({
          icon: 'error',
          title: message.head,
          text: message.body,
        })
      }
    };
</script>
@yield('script')

</body>

</html>
<!--===== JS SCRIPT LINK =======-->
<script src="{{ URL::asset('build/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/fontawesome.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/aos.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/counter.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/gsap.min.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/ScrollTrigger.min.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/Splitetext.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/sidebar.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/mobilemenu.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/owlcarousel.min.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/gsap-animation.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/nice-select.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/waypoints.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/slick-slider.js') }}"></script>
<script src="{{ URL::asset('build/js/plugins/circle-progress.js') }}"></script>
<script src="{{ URL::asset('build/js/main.js') }}"></script>

<script>
$(document).ready(function () {
    $("#show_hide_password a").on('click', function (event) {
      event.preventDefault();
      if ($('#show_hide_password input').attr("type") == "text") {
        $('#show_hide_password input').attr('type', 'password');
        $('#show_hide_password i').addClass("bi-eye-slash-fill");
        $('#show_hide_password i').removeClass("bi-eye-fill");
      } else if ($('#show_hide_password input').attr("type") == "password") {
        $('#show_hide_password input').attr('type', 'text');
        $('#show_hide_password i').removeClass("bi-eye-slash-fill");
        $('#show_hide_password i').addClass("bi-eye-fill");
      }
    });
  });
</script>
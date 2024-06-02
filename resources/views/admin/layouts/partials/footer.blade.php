    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src={{asset("vendors/popper/popper.min.js")}}></script>
    <script src="assets/js/flatpickr.js"></script>
    <script src={{asset("vendors/bootstrap/bootstrap.min.js")}}></script>
    <script src={{asset("vendors/anchorjs/anchor.min.js")}}></script>
    <script src={{asset("vendors/is/is.min.js")}}></script>
    <script src={{asset("vendors/chart/chart.min.js")}}></script>
    <script src={{asset("vendors/countup/countUp.umd.js")}}></script>
    <script src={{asset("vendors/echarts/echarts.min.js")}}></script>
    <script src={{asset("vendors/dayjs/dayjs.min.js")}}></script>
    <script src={{asset("vendors/fontawesome/all.min.js")}}></script>
    <script src={{asset("vendors/lodash/lodash.min.js")}}></script>
    <script src={{asset("vendors/choices/choices.min.js")}}></script>
    <script src={{asset("vendors/dropzone/dropzone.min.js")}}></script>
    {{-- <script src={{asset("../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll")}}></script> --}}
    <script src={{asset("vendors/list.js/list.min.js")}}></script>
    <script src={{asset("assets/js/theme.js")}}></script>
    <script src={{asset("assets/js/flatpickr.js")}}></script>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>

    <script>
        document.querySelectorAll('select[multiple]').forEach((el)=>{
            new TomSelect(el, {
                create: true,
                plugins: {
                    remove_button:{
                        title:'Remove this item',
                    }
                },
            })
        });
    </script>
</body>


<!-- Mirrored from prium.github.io/falcon/v3.19.0/dashboard/e-commerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2024 20:09:51 GMT -->
</html>

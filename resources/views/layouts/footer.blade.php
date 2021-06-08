<script src="{{url('assets/vendor/jquery.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{url('assets/vendor/popper.min.js')}}"></script>
<script src="{{url('assets/vendor/bootstrap.min.js')}}"></script>

<!-- Perfect Scrollbar -->
<script src="{{url('assets/vendor/perfect-scrollbar.min.js')}}"></script>

<!-- DOM Factory -->
<script src="{{url('assets/vendor/dom-factory.js')}}"></script>

<!-- MDK -->
<script src="{{url('assets/vendor/material-design-kit.js')}}"></script>

<!-- App -->
<script src="{{url('assets/js/toggle-check-all.js')}}"></script>
<script src="{{url('assets/js/check-selected-row.js')}}"></script>
<script src="{{url('assets/js/dropdown.js')}}"></script>
<script src="{{url('assets/js/sidebar-mini.js')}}"></script>
<script src="{{url('assets/js/app.js')}}"></script>

<!-- App Settings (safe to remove) -->
<script src="{{url('assets/js/app-settings.js')}}"></script>

<!-- Flatpickr -->
<script src="{{url('assets/vendor/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{url('assets/js/flatpickr.js')}}"></script>

<!-- Global Settings -->
<script src="{{url('assets/js/settings.js')}}"></script>

<!-- Moment.js')}} -->
<script src="{{url('assets/vendor/moment.min.js')}}"></script>
<script src="{{url('assets/vendor/moment-range.js')}}"></script>

<!-- Chart.js')}} -->
<script src="{{url('assets/vendor/Chart.min.js')}}"></script>

<!-- App Charts JS -->
<script src="{{url('assets/js/charts.js')}}"></script>
<script src="{{url('assets/js/chartjs-rounded-bar.js')}}"></script>

<!-- Chart Samples -->
<script src="{{url('assets/js/page.dashboard.js')}}"></script>
<script src="{{url('assets/js/progress-charts.js')}}"></script>

<!-- Vector Maps -->
<script src="{{url('assets/vendor/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('assets/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
<script src="{{url('assets/js/vector-maps.js')}}"></script>

<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

{{-- Ajax --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#tableku').DataTable();
	} );
	</script>

{{-- <script>
$(document).ready(function() {
  /**
   * for showing edit item popup
   */

  $(document).on('click', "#editKameraModal", function() {
    $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

    var options = {
      'backdrop': 'static'
    };
    $('#editKameraModal').modal(options)
  })

  // on modal show
  $('#editKameraModal').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
    var row = el.closest(".data-row");

    // get the data
    var kode = el.data('kode');
    var merek = row.children("#id_merek").text();
    var tipe = row.children("#tipe").text();
    var gambar = row.children("#gambar").text();
    var harga_sewa = row.children("#harga_sewa").text();

    // fill the data in the input fields
    $("#kode").val(kode);
    $("#id_merek").val(merek);
    $("#tipe").val(tipe);
    $("#gambar").val(gambar);
    $("#harga_sewa").val(harga_sewa);

  })

  // on modal hide
  $('#editKameraModal').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  })
})
</script> --}}


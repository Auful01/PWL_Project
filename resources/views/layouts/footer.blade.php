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
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script> --}}

{{-- Datetime Picker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#tableku').DataTable();
	} );
	</script>


<script>

    $(document).ready(function() {
        $('.btn-modal-editKamera').on('click', function() {
            let kd = $(this).data('kode');
            let tp = $(this).data('tipe');
            let mrk = $(this).data('merek');
            let gbr = $(this).data('gambar');
            let desc = $(this).data('deskripsi');
            let hrg = $(this).data('harga');
            let url = $(this).data('url');
            $('.kode').val(kd);
            $('.tipe').val(tp);
            $('.merek').val(mrk);
            $('.gambar').attr('src', gbr);
            $('.url').attr('action', url);
            $('.deskripsi').val(desc);
            $('.harga_sewa').val(hrg);

            $.ajax({
                type: "GET",
                url: '/merek-kamera',
                success:function(data, textStatus, jqXHR)
                {
                    let kntl = "";
                    data.forEach(element => {
                        if(element.id_merek == mrk){
                            kntl += `<option value="${element.id_merek}" selected class="merek">${element.nama_merek}</option>`;
                        }else{
                            kntl += `<option value="${element.id_merek}" class="merek">${element.nama_merek}</option>`;
                        }
                    });
                    $('.kntl').append(kntl);
                }
            });
        });



        // let days =
        // let dayStart = start.getTime();

        $('#tanggal_kembali').on('change', function() {
            let start = new Date($('#tanggal_pinjam').val());
            let end = new Date($('#tanggal_kembali').val());
            let days = (end - start) / (1000 * 60 * 60 * 24);

            let harga = $('#harga_sewa').val();
            let total = days * harga;

            $('#harga_akhir').val(total);
        });

    });

</script>


<script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
<script src="../../plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script src='../../plugins/fastclick/fastclick.min.js'></script>
<script src="../../dist/js/app.js" type="text/javascript"></script>
<script src="../../dist/js/demo.js" type="text/javascript"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="../../plugins/money/jquery.mask.js"></script>
<script type="text/javascript" src="../../plugins/autocomplete/jquery.autocomplete.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $( ".integrasi" ).autocomplete({
            serviceUrl: "../../config/kelola-data/matakuliah.php",
            dataType: "JSON",
            onSelect: function (suggestion) {
                $( ".integrasi" ).val(suggestion.kode + " - " + suggestion.matkul);
            }
        });
        $( ".terlibat" ).autocomplete({
            serviceUrl: "../../config/kelola-data/mahasiswa.php",
            dataType: "JSON",
            onSelect: function (suggestion) {
                $( ".terlibat" ).val(suggestion.email + " - " + suggestion.nama);
            }
        });
    })
</script>
<script>
$(document).ready(function(){

    $(".money").mask("000.000.000.000",       {reverse:true});
    $(".phone").mask("0000 0000 0000",       {reverse:true});

}); 
</script>
<script type="text/javascript">
     $(function () {

        var addFormGroup = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
            var $formGroupClone = $formGroup.clone();

            $(this)
                .toggleClass('btn-add btn-danger btn-remove')
                .html('-');

            $formGroupClone.find('input').val('');
            $formGroupClone.insertAfter($formGroup);

            var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
            if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
                $lastFormGroupLast.find('.btn-add').attr('disabled', true);
            }
        };

        var removeFormGroup = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

            var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
            if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
                $lastFormGroupLast.find('.btn-add').attr('disabled', false);
            }

            $formGroup.remove();
        };

        var countFormGroup = function ($form) {
            return $form.find('.form-group').length;
        };

        $(document).on('click', '.btn-add', addFormGroup);
        $(document).on('click', '.btn-remove', removeFormGroup);

    });
    $('.contact-form').bootstrapValidator({
        //live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Name: {
                validators: {
                    notEmpty: {
                        message: 'The Name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not valid'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required and cannot be empty'
                    }
                }
            }
        }
    });
</script>
<script type="text/javascript">
    $(function () {
        $('.datepicker').datepicker({
          autoclose: true
        });
    });
</script>
<script type="text/javascript">
    $(function () {
      $("#example1").dataTable();
      $('#example2').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "Sort": true,
        "bInfo": true,
        "bAutoWidth": false
     });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#myForm').validate({
            rules: {
                product_name: {
                    required: true,
                },
                category_id: {
                    required: true,
                },
                supplier_id: {
                    required: true,
                },
                product_code: {
                    required: true,
                },
                product_store: {
                    required: true,
                },
                buying_date: {
                    required: true,
                },
                expire_date: {
                    required: true,
                },
                buying_price: {
                    required: true,
                },
                selling_price: {
                    required: true,
                },

            },
            messages: {
                product_name: {
                    required: 'Please Enter Product Name',
                },
                category_id: {
                    required: 'Please Select Category',
                },
                supplier_id: {
                    required: 'Please Select Supplier',
                },
                product_code: {
                    required: 'Please Enter Product Code',
                },
                product_garage: {
                    required: 'Please Enter Product Garage',
                },
                product_store: {
                    required: 'Please Enter Product Store',
                },
                buying_date: {
                    required: 'Please Slect Buying Date',
                },
                expire_date: {
                    required: 'Please Slect Expire Date',
                },
                buying_price: {
                    required: 'Please Enter Buying Price',
                },
                selling_price: {
                    required: 'Please Enter Selling Price',
                },
                product_image: {
                    required: 'Please Select Product Image',
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
        });
    });
</script>

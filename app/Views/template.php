<?php 

echo view('layout/header');
echo view('layout/sidenav');

?>
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">CRUD Builder</h5>
                    <div class="form-group mb-0">
                        <select class="form-control mt-4" name="search_table_name" id="search_table_name">
                            <option value="">Select Table</option>
                            <?php foreach ($tables as $table) { ?>
                            <option value="<?php echo $table; ?>"><?php echo $table; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle">With CRUD Builder you can create your system so Fast!</h6>
                    <div class="table-responsive">
                        <table id="default-datatable" class="display table table-bordered">
                            <thead>
                                <tr>
                                    <th>Field Name</th>
                                    <th>Field Type</th>
                                    <th>Validation</th>
                                    <th>Required</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <button type="submit" name="generate_crud" id="generate_crud" class="btn btn-primary">Generate CRUD</button>
            <button type="submit" name="generate_restful_api" id="generate_restful_api" class="btn btn-primary">Generate Restful API</button>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
<!-- Start Footerbar -->
<div class="footerbar">
    <footer class="footer">
        <p class="mb-0">© <?= date('Y'); ?> CRUD Builder - V.1.0</p>
    </footer>
</div>
<!-- End Footerbar -->
</div>
<!-- End Rightbar -->
</div>
<!-- End Containerbar -->




<?php 

echo view('layout/footer');

?>

<script>

    $("#search_table_name").change(function() {
    var tableName = $("#search_table_name").val();
    var tableSanitizeString = tableName.replace(/%20/g, " ");
        $.get("/getTableColumns/" + tableSanitizeString, function(data, status) {
            $('#default-datatable').DataTable().clear().destroy();
            $('#default-datatable').find("tbody").empty();
            $('#default-datatable tbody').append(data);
            var table = $("#default-datatable").DataTable();

        });
    });

    $("#generate_restful_api").click(function() {
        $.get("/generateRestfulAPI", function(data, status) {
            $('#default-datatable').DataTable().clear().destroy();
            $('#default-datatable').find("tbody").empty();
            $('#default-datatable tbody').append(data);
            var table = $("#default-datatable").DataTable();

        });
    });
</script>
</body>

</html>
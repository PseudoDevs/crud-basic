<?php 

echo view('layout/header');
echo view('layout/sidenav');

?>
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Crud Builder</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Table CRUD</h5>
                        <select class="form-control mb-3" name="search_table_name" id="search_table_name">
                            <option value="">Select Table</option>
                            <?php foreach ($tables as $table) { ?>
                            <option value="<?php echo $table; ?>"><?php echo $table; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Field Name</th>
                                    <th>Field Type</th>
                                </tr>
                            </thead>
                            <tbody>

                        </table>
                        <button class="btn btn-success" id="generate_crud">Generate CRUD</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills pull-right" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-restfulapi">Restful API Controller</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab-controller">Controller</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-model">Model</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-view">View</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-routes">Routes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-ajax-crud">AJAX Crud</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-ajax-modal">AJAX Modal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-form">Form</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-form-ajax">Form AJAX</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-sidenav">Sidenav</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-sidenav-dropdown">Sidenav with
                                Dropdown</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="tab-restfulapi" role="tabpanel">
                            restful
                        </div>
                        <div class="tab-pane fade show active" id="tab-controller" role="tabpanel">
                            <pre class='hljs'
                                style='display: block; overflow-x: auto; background: rgb(25, 23, 28); color: rgb(139, 135, 146); padding: 0.5em;'><span class='hljs-comment' style='color: rgb(126, 120, 135);'>/**
        * Create a new resource object, from 'posted' parameters
        *
        * <span class='hljs-doctag'>@return</span> mixed
        */</span>
        <span class='hljs-keyword' style='color: rgb(149, 90, 231);'>public</span> <span class='hljs-function'><span class='hljs-keyword' style='color: rgb(149, 90, 231);'>function</span> <span class='hljs-title' style='color: rgb(87, 109, 219);'>create</span><span class='hljs-params' style='color: rgb(170, 87, 60);'>()</span>
        </span>{
        <span class='hljs-comment' style='color: rgb(126, 120, 135);'>
            <span id="createFunction">
                $<span class="tableClass"></span> = new <span class="tableClassFunction"></span>();
            </span>
        </span>
        }

        <span class='hljs-comment' style='color: rgb(126, 120, 135);'>/**
        * Return the editable properties of a resource object
        *
        * <span class='hljs-doctag'>@return</span> mixed
        */</span>
        <span class='hljs-keyword' style='color: rgb(149, 90, 231);'>public</span> <span class='hljs-function'><span class='hljs-keyword' style='color: rgb(149, 90, 231);'>function</span> <span class='hljs-title' style='color: rgb(87, 109, 219);'>edit</span><span class='hljs-params' style='color: rgb(170, 87, 60);'>($id = null)</span>
        </span>{
        <span class='hljs-comment' style='color: rgb(126, 120, 135);'>//</span>
        }

        <span class='hljs-comment' style='color: rgb(126, 120, 135);'>/**
        * Add or update a model resource, from 'posted' properties
        *
        * <span class='hljs-doctag'>@return</span> mixed
        */</span>
        <span class='hljs-keyword' style='color: rgb(149, 90, 231);'>public</span> <span class='hljs-function'><span class='hljs-keyword' style='color: rgb(149, 90, 231);'>function</span> <span class='hljs-title' style='color: rgb(87, 109, 219);'>update</span><span class='hljs-params' style='color: rgb(170, 87, 60);'>($id = null)</span>
        </span>{
        <span class='hljs-comment' style='color: rgb(126, 120, 135);'>//</span>
        }

        <span class='hljs-comment' style='color: rgb(126, 120, 135);'>/**
        * Delete the designated resource object from the model
        *
        * <span class='hljs-doctag'>@return</span> mixed
        */</span>
        <span class='hljs-keyword' style='color: rgb(149, 90, 231);'>public</span> <span class='hljs-function'><span class='hljs-keyword' style='color: rgb(149, 90, 231);'>function</span> <span class='hljs-title' style='color: rgb(87, 109, 219);'>delete</span><span class='hljs-params' style='color: rgb(170, 87, 60);'>($id = null)</span>
        </span>{
        <span class='hljs-comment' style='color: rgb(126, 120, 135);'>//</span>
        }</pre>';
                        </div>
                        <div class="tab-pane fade" id="tab-model" role="tabpanel">
                            <pre class="hljs"
                                style="display: block; overflow-x: auto; background: rgb(25, 23, 28); color: rgb(139, 135, 146); padding: 0.5em;"><span class="hljs-meta" style="color: rgb(170, 87, 60);">&lt;?php</span>

<span class="hljs-keyword" style="color: rgb(149, 90, 231);">namespace</span> <span class="hljs-title" style="color: rgb(87, 109, 219);">App</span>\<span class="hljs-title" style="color: rgb(87, 109, 219);">Models</span>;

<span class="hljs-keyword" style="color: rgb(149, 90, 231);">use</span> <span class="hljs-title" style="color: rgb(87, 109, 219);">CodeIgniter</span>\<span class="hljs-title" style="color: rgb(87, 109, 219);">Model</span>;

<span class="hljs-class"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">class</span> <span class="hljs-title" style="color: rgb(87, 109, 219);">Crud</span> <span class="hljs-keyword" style="color: rgb(149, 90, 231);">extends</span> <span class="hljs-title" style="color: rgb(87, 109, 219);">Model</span>
</span>{
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $DBGroup          = <span class="hljs-string" style="color: rgb(42, 146, 146);">'default'</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $table            = <span class="hljs-string" style="color: rgb(42, 146, 146);">'cruds'</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $primaryKey       = <span class="hljs-string" style="color: rgb(42, 146, 146);">'id'</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $useAutoIncrement = <span class="hljs-keyword" style="color: rgb(149, 90, 231);">true</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $insertID         = <span class="hljs-number" style="color: rgb(170, 87, 60);">0</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $returnType       = <span class="hljs-string" style="color: rgb(42, 146, 146);">'array'</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $useSoftDeletes   = <span class="hljs-keyword" style="color: rgb(149, 90, 231);">false</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $protectFields    = <span class="hljs-keyword" style="color: rgb(149, 90, 231);">true</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $allowedFields    = <span id="leftBracket"></span><span id="allowedFields"></span>;

    <span class="hljs-comment" style="color: rgb(126, 120, 135);">// Dates</span>
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $useTimestamps = <span class="hljs-keyword" style="color: rgb(149, 90, 231);">false</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $dateFormat    = <span class="hljs-string" style="color: rgb(42, 146, 146);">'datetime'</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $createdField  = <span class="hljs-string" style="color: rgb(42, 146, 146);">'created_at'</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $updatedField  = <span class="hljs-string" style="color: rgb(42, 146, 146);">'updated_at'</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $deletedField  = <span class="hljs-string" style="color: rgb(42, 146, 146);">'deleted_at'</span>;

    <span class="hljs-comment" style="color: rgb(126, 120, 135);">// Validation</span>
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $validationRules      = [];
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $validationMessages   = [];
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $skipValidation       = <span class="hljs-keyword" style="color: rgb(149, 90, 231);">false</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $cleanValidationRules = <span class="hljs-keyword" style="color: rgb(149, 90, 231);">true</span>;

    <span class="hljs-comment" style="color: rgb(126, 120, 135);">// Callbacks</span>
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $allowCallbacks = <span class="hljs-keyword" style="color: rgb(149, 90, 231);">true</span>;
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $beforeInsert   = [];
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $afterInsert    = [];
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $beforeUpdate   = [];
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $afterUpdate    = [];
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $beforeFind     = [];
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $afterFind      = [];
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $beforeDelete   = [];
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">protected</span> $afterDelete    = [];
}
</pre>
                        </div>
                        <div class="tab-pane fade" id="tab-view" role="tabpanel">
                            View
                        </div>
                        <div class="tab-pane fade" id="tab-routes" role="tabpanel">
                            <pre class="hljs"
                                style="display: block; overflow-x: auto; background: rgb(25, 23, 28); color: rgb(139, 135, 146); padding: 0.5em;">$routes-&gt;get(<span class="hljs-string" style="color: rgb(42, 146, 146);">'/official-roles'</span>, <span class="hljs-string" style="color: rgb(42, 146, 146);">'Officialrole::index'</span>); <span class="hljs-comment" style="color: rgb(126, 120, 135);">// ListView Data</span>
$routes-&gt;get(<span class="hljs-string" style="color: rgb(42, 146, 146);">'/fetch-official-roles'</span>, <span class="hljs-string" style="color: rgb(42, 146, 146);">'Officialrole::fetchOfficialRole'</span>); <span class="hljs-comment" style="color: rgb(126, 120, 135);">// Fetching Data for AJAX</span>
$routes-&gt;get(<span class="hljs-string" style="color: rgb(42, 146, 146);">'/delete-official-roles/(:num)'</span>, <span class="hljs-string" style="color: rgb(42, 146, 146);">'Officialrole::deleteOfficialRole/$1'</span>); <span class="hljs-comment" style="color: rgb(126, 120, 135);">// Delete Data</span>
$routes-&gt;get(<span class="hljs-string" style="color: rgb(42, 146, 146);">'/edit-official-view/(:num)'</span>, <span class="hljs-string" style="color: rgb(42, 146, 146);">'Officialrole::editOfficialRoleView/$1'</span>); <span class="hljs-comment" style="color: rgb(126, 120, 135);">// Edit View Data</span>
$routes-&gt;post(<span class="hljs-string" style="color: rgb(42, 146, 146);">'/edit-official-roles/(:num)'</span>, <span class="hljs-string" style="color: rgb(42, 146, 146);">'Officialrole::editOfficialRole/$1'</span>); <span class="hljs-comment" style="color: rgb(126, 120, 135);">// Edit Function</span>
$routes-&gt;post(<span class="hljs-string" style="color: rgb(42, 146, 146);">'/add-official-roles'</span>, <span class="hljs-string" style="color: rgb(42, 146, 146);">'Officialrole::addOfficialRole'</span>); <span class="hljs-comment" style="color: rgb(126, 120, 135);">// Add Function</span></pre>
                        </div>
                        <div class="tab-pane fade" id="tab-ajax-crud" role="tabpanel">
                            <pre class="hljs"
                                style="display: block; overflow-x: auto; background: rgb(25, 23, 28); color: rgb(139, 135, 146); padding: 0.5em;"> <span class="hljs-comment" style="color: rgb(126, 120, 135);">// Fetching Data</span>

$(<span class="hljs-built_in" style="color: rgb(170, 87, 60);">document</span>).ready(<span class="hljs-function"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">function</span>(<span class="hljs-params" style="color: rgb(170, 87, 60);"></span>) </span>{
    $.get(<span class="hljs-string" style="color: rgb(42, 146, 146);">"/fetch-official-roles"</span>, <span class="hljs-function"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">function</span>(<span class="hljs-params" style="color: rgb(170, 87, 60);">data, status</span>) </span>{
        $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#datatable1'</span>).DataTable().clear().destroy();
        $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#datatable1'</span>).find(<span class="hljs-string" style="color: rgb(42, 146, 146);">"tbody"</span>).empty();
        $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#datatable1 tbody'</span>).append(data);
        <span class="hljs-keyword" style="color: rgb(149, 90, 231);">var</span> table = $(<span class="hljs-string" style="color: rgb(42, 146, 146);">"#datatable1"</span>).DataTable();

    });

});

<span class="hljs-comment" style="color: rgb(126, 120, 135);">// Add Data Modal</span>

$(<span class="hljs-built_in" style="color: rgb(170, 87, 60);">document</span>).on(<span class="hljs-string" style="color: rgb(42, 146, 146);">'submit'</span>, <span class="hljs-string" style="color: rgb(42, 146, 146);">'#addRoleForm'</span>, <span class="hljs-function"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">function</span>(<span class="hljs-params" style="color: rgb(170, 87, 60);">e</span>) </span>{
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">const</span> role = $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#roleName'</span>).val();
    e.preventDefault();

    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">if</span> (role == <span class="hljs-string" style="color: rgb(42, 146, 146);">''</span>) {
        <span class="hljs-comment" style="color: rgb(126, 120, 135);">// alert('Please enter a role name');</span>
    } <span class="hljs-keyword" style="color: rgb(149, 90, 231);">else</span> {
        $.post(<span class="hljs-string" style="color: rgb(42, 146, 146);">"/add-official-roles"</span>, {
                roleName: role,
            },
            <span class="hljs-function"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">function</span>(<span class="hljs-params" style="color: rgb(170, 87, 60);">data, status</span>) </span>{
                <span class="hljs-keyword" style="color: rgb(149, 90, 231);">const</span> result = <span class="hljs-built_in" style="color: rgb(170, 87, 60);">JSON</span>.parse(data);
                $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'div.alert-content'</span>).html(result.success);
                <span class="hljs-keyword" style="color: rgb(149, 90, 231);">if</span> (status == <span class="hljs-string" style="color: rgb(42, 146, 146);">'success'</span>) {
                    $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#roleName'</span>).val(<span class="hljs-string" style="color: rgb(42, 146, 146);">''</span>);
                    addRoles.hide();
                    $.get(<span class="hljs-string" style="color: rgb(42, 146, 146);">"/fetch-official-roles"</span>, <span class="hljs-function"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">function</span>(<span class="hljs-params" style="color: rgb(170, 87, 60);">data, status</span>) </span>{
                        $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#datatable1'</span>).DataTable().clear().destroy();
                        $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#datatable1'</span>).find(<span class="hljs-string" style="color: rgb(42, 146, 146);">"tbody"</span>).empty();
                        $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#datatable1 tbody'</span>).append(data);
                        <span class="hljs-keyword" style="color: rgb(149, 90, 231);">var</span> table = $(<span class="hljs-string" style="color: rgb(42, 146, 146);">"#datatable1"</span>).DataTable();
                    });
                }

            });
    }
});

<span class="hljs-comment" style="color: rgb(126, 120, 135);">// Delete Data Modal </span>
<span class="hljs-keyword" style="color: rgb(149, 90, 231);">var</span> isSomethingTrue = <span class="hljs-literal" style="color: rgb(170, 87, 60);">true</span>;
$(<span class="hljs-string" style="color: rgb(42, 146, 146);">"#datatable1"</span>).on(<span class="hljs-string" style="color: rgb(42, 146, 146);">'click'</span>, <span class="hljs-string" style="color: rgb(42, 146, 146);">'.delete'</span>, <span class="hljs-function"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">function</span>(<span class="hljs-params" style="color: rgb(170, 87, 60);"></span>) </span>{
    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">var</span> id = $(<span class="hljs-keyword" style="color: rgb(149, 90, 231);">this</span>).data(<span class="hljs-string" style="color: rgb(42, 146, 146);">'id'</span>);
    $(<span class="hljs-string" style="color: rgb(42, 146, 146);">"#deleteRole"</span>).modal(<span class="hljs-string" style="color: rgb(42, 146, 146);">"show"</span>);
    $(<span class="hljs-string" style="color: rgb(42, 146, 146);">"#deleteRoleData"</span>).click(<span class="hljs-function"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">function</span>(<span class="hljs-params" style="color: rgb(170, 87, 60);"></span>) </span>{
        <span class="hljs-keyword" style="color: rgb(149, 90, 231);">if</span> (isSomethingTrue) {
            $.get(<span class="hljs-string" style="color: rgb(42, 146, 146);">"/delete-official-roles/"</span> + id, {
                    id: id,
                },
                <span class="hljs-function"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">function</span>(<span class="hljs-params" style="color: rgb(170, 87, 60);">data, status</span>) </span>{
                    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">const</span> result = <span class="hljs-built_in" style="color: rgb(170, 87, 60);">JSON</span>.parse(data);
                    $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'div.alert-content'</span>).html(result.success);
                    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">if</span> (status == <span class="hljs-string" style="color: rgb(42, 146, 146);">'success'</span>) {
                        $(<span class="hljs-string" style="color: rgb(42, 146, 146);">"#deleteRole"</span>).modal(<span class="hljs-string" style="color: rgb(42, 146, 146);">"hide"</span>);
                        refreshTable();
                    }
                });
        } <span class="hljs-keyword" style="color: rgb(149, 90, 231);">else</span> {
            <span class="hljs-built_in" style="color: rgb(170, 87, 60);">console</span>.log(<span class="hljs-string" style="color: rgb(42, 146, 146);">"Error Deleting Role!"</span>);
        }
    });
});

<span class="hljs-comment" style="color: rgb(126, 120, 135);">//Edit Data View Modal</span>


$(<span class="hljs-string" style="color: rgb(42, 146, 146);">"#datatable1"</span>).on(<span class="hljs-string" style="color: rgb(42, 146, 146);">'click'</span>, <span class="hljs-string" style="color: rgb(42, 146, 146);">'.edit'</span>, <span class="hljs-function"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">function</span>(<span class="hljs-params" style="color: rgb(170, 87, 60);"></span>) </span>{

    <span class="hljs-keyword" style="color: rgb(149, 90, 231);">var</span> id = $(<span class="hljs-keyword" style="color: rgb(149, 90, 231);">this</span>).data(<span class="hljs-string" style="color: rgb(42, 146, 146);">'id'</span>);
    $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#editRole'</span>).modal(<span class="hljs-string" style="color: rgb(42, 146, 146);">"show"</span>);

    $.get(<span class="hljs-string" style="color: rgb(42, 146, 146);">"/edit-official-view/"</span> + id, <span class="hljs-function"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">function</span>(<span class="hljs-params" style="color: rgb(170, 87, 60);">data, status</span>) </span>{
        <span class="hljs-keyword" style="color: rgb(149, 90, 231);">const</span> result = <span class="hljs-built_in" style="color: rgb(170, 87, 60);">JSON</span>.parse(data);
        $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#roleNameEdit'</span>).val(result.rolename);
        $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#roleIdEdit'</span>).val(result.id);
  
    });
});

<span class="hljs-comment" style="color: rgb(126, 120, 135);">// Edit Function</span>

$(<span class="hljs-string" style="color: rgb(42, 146, 146);">"#editRoleUpdate"</span>).click(<span class="hljs-function"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">function</span>(<span class="hljs-params" style="color: rgb(170, 87, 60);"></span>) </span>{
        <span class="hljs-keyword" style="color: rgb(149, 90, 231);">const</span> id = $(<span class="hljs-string" style="color: rgb(42, 146, 146);">"#roleIdEdit"</span>).val();
        <span class="hljs-keyword" style="color: rgb(149, 90, 231);">const</span> roleEditedName = $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#roleNameEdit'</span>).val();
        $.post(<span class="hljs-string" style="color: rgb(42, 146, 146);">"/edit-official-roles/"</span> + id, {
                roleNameEdit: roleEditedName,
            },
            <span class="hljs-function"><span class="hljs-keyword" style="color: rgb(149, 90, 231);">function</span>(<span class="hljs-params" style="color: rgb(170, 87, 60);">data, status</span>) </span>{
                <span class="hljs-keyword" style="color: rgb(149, 90, 231);">const</span> result = <span class="hljs-built_in" style="color: rgb(170, 87, 60);">JSON</span>.parse(data);
                $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'div.alert-content'</span>).html(result.success);
                <span class="hljs-keyword" style="color: rgb(149, 90, 231);">if</span> (status == <span class="hljs-string" style="color: rgb(42, 146, 146);">'success'</span>) {
                    $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#roleNameEdit'</span>).val(<span class="hljs-string" style="color: rgb(42, 146, 146);">''</span>);
                    $(<span class="hljs-string" style="color: rgb(42, 146, 146);">'#editRole'</span>).modal(<span class="hljs-string" style="color: rgb(42, 146, 146);">"hide"</span>);
                }
                refreshTable();
            });
    });</pre>
                        </div>


                        <div class="tab-pane fade" id="tab-ajax-modal" role="tabpanel">
                            ajax modal
                        </div>
                        <div class="tab-pane fade" id="tab-form" role="tabpanel">
                            form
                        </div>
                        <div class="tab-pane fade" id="tab-form-ajax" role="tabpanel">
                            form-ajax
                        </div>
                        <div class="tab-pane fade" id="tab-sidenav" role="tabpanel">
                            sidenav
                        </div>
                        <div class="tab-pane fade" id="tab-sidenav-dropdown" role="tabpanel">
                            <pre class="hljs"
                                style="display: block; overflow-x: auto; background: rgb(27, 24, 27); color: rgb(171, 155, 171); padding: 0.5em;">&lt;li <span class="hljs-class"><span class="hljs-keyword" style="color: rgb(123, 89, 192);">class</span></span>=<span class="hljs-string" style="color: rgb(145, 139, 59);">"sidebar-item"</span>&gt;
	&lt;a data-bs-target=<span class="hljs-string" style="color: rgb(145, 139, 59);">"#dashboards"</span> data-bs-toggle=<span class="hljs-string" style="color: rgb(145, 139, 59);">"collapse"</span> <span class="hljs-class"><span class="hljs-keyword" style="color: rgb(123, 89, 192);">class</span></span>=<span class="hljs-string" style="color: rgb(145, 139, 59);">"sidebar-link collapsed"</span>&gt;
	&lt;i <span class="hljs-class"><span class="hljs-keyword" style="color: rgb(123, 89, 192);">class</span></span>=<span class="hljs-string" style="color: rgb(145, 139, 59);">"align-middle"</span> data-feather=<span class="hljs-string" style="color: rgb(145, 139, 59);">"sliders"</span>&gt;&lt;/i&gt; &lt;span <span class="hljs-class"><span class="hljs-keyword" style="color: rgb(123, 89, 192);">class</span></span>=<span class="hljs-string" style="color: rgb(145, 139, 59);">"align-middle"</span>&gt;<span class="hljs-type" style="color: rgb(166, 89, 38);">Dashboards</span>&lt;/span&gt;&lt;/a&gt;
	&lt;ul id=<span class="hljs-string" style="color: rgb(145, 139, 59);">"dashboards"</span> <span class="hljs-class"><span class="hljs-keyword" style="color: rgb(123, 89, 192);">class</span></span>=<span class="hljs-string" style="color: rgb(145, 139, 59);">"sidebar-dropdown list-unstyled collapse "</span> data-bs-parent=<span class="hljs-string" style="color: rgb(145, 139, 59);">"#sidebar"</span>&gt;
	&lt;li <span class="hljs-class"><span class="hljs-keyword" style="color: rgb(123, 89, 192);">class</span></span>=<span class="hljs-string" style="color: rgb(145, 139, 59);">"sidebar-item"</span>&gt;&lt;a <span class="hljs-class"><span class="hljs-keyword" style="color: rgb(123, 89, 192);">class</span></span>=<span class="hljs-string" style="color: rgb(145, 139, 59);">"sidebar-link"</span> href=<span class="hljs-string" style="color: rgb(145, 139, 59);">"index.html"</span>&gt;<span class="hljs-type" style="color: rgb(166, 89, 38);">Add</span> &lt;/a&gt;&lt;/li&gt;
	&lt;li <span class="hljs-class"><span class="hljs-keyword" style="color: rgb(123, 89, 192);">class</span></span>=<span class="hljs-string" style="color: rgb(145, 139, 59);">"sidebar-item"</span>&gt;&lt;a <span class="hljs-class"><span class="hljs-keyword" style="color: rgb(123, 89, 192);">class</span></span>=<span class="hljs-string" style="color: rgb(145, 139, 59);">"sidebar-link"</span> href=<span class="hljs-string" style="color: rgb(145, 139, 59);">"index.html"</span>&gt;<span class="hljs-type" style="color: rgb(166, 89, 38);">Manage</span> &lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/li&gt;</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>



<?php 

echo view('layout/footer');

?>

<script>
// function titleCase(str) {
//     var splitStr = str.toLowerCase().split(' ');
//     for (var i = 0; i < splitStr.length; i++) {
//         splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);     
//     }
//         return splitStr.join(''); 
// }


$("#search_table_name").on('change', function() {
    var tableName = $("#search_table_name").val();
    // var tableNameSanitize = tableName.replace(/%20/g, ' ');
    // var controllerName = titleCase(tableName+".php");
    // $("#controller_name").text(controllerName);



    $.get("/getTableColumns/" + tableName, function(data, status) {
        $('#datatables-reponsive').DataTable().clear().destroy();
        $('#datatables-reponsive').find("tbody").empty();
        $('#datatables-reponsive tbody').append(data);
        var table = $("#datatables-reponsive").DataTable();
    });
});

// $(document).ready(function() {
//     var json;

//     function getDataTable() {
//         var tblObject = {};

//         $("#datatables-reponsive tr:gt(0)").each(function(i, items) {

//             var tableColumn = $(this).find("td:eq(0) input[name='tbl_columns']").val();
//             var tableField = $(this).find("td:eq(1) option:selected").val();

//             tblObject['table_column'] = tableColumn;
//             tblObject['table_field'] = tableField;

//             json = JSON.stringify(tblObject);

//         });
//     }



$("#generate_crud").click(function() {
    var tableName = $("#search_table_name").val();
    var leftBracket = "[";
    var rightBracket = "]";
    $.ajax({
        type: 'POST',
        url: '/tableGenerator',
        data: {
            tableName: tableName
        },
        success: function(data) {
            $("#leftBracket").append(leftBracket);
            $("#allowedFields").text(data);
            $("#allowedFields").append(rightBracket);
            $(".tableClass").text(tableName);
            $(".tableClassFunction").text(tableName).charAt(0).toUpperCase() + lower.substring(1);
        }
    });
});
</script>
</body>

</html>
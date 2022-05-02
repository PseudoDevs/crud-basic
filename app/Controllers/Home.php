<?php

namespace App\Controllers;
use Coderatio\SimpleBackup\SimpleBackup;

class Home extends BaseController
{
    public function index()
    {
       
    }

    public function crudBuilder() {
        $db = db_connect();
        $data['tables'] = $db->listTables();
        
        return view('crud', $data);
    }

    public function tableGenerator() {
        $db = db_connect();
        $tableNames = $this->request->getPost('tableName');
        $fields = $db->getFieldData($tableNames);


        // == START == function and loop for table fields
        foreach($fields as $field) {
            $tblFields[] = "'" . $field->name . "'";
        }

        echo implode(',', $tblFields);
         // == END == function and loop for table fields


         // == START == function and loop for table fields create()
            foreach($fields as $field) {
                $tblFieldsCreate[] = $field->name . ' = $data[\'' . $field->name . '\']';
            }


    }

    public function backupAndRestore() {

    }

    public function backupDatabase() {

    }

    public function restoreDatabase() {

    }

    public function generateRestfulAPI() {
        
    }

    public function getTableColumns($tableName) {
        
        $db = db_connect();
        $fields = $db->getFieldNames($tableName);

        foreach ($fields as $field) {
            echo "<tr>
             <td> <input type='text' class='form-control' name='tbl_columns' id='tbl_columns' value='" . $field . "'> </td>
             <td class='field_selection'> 
             <select class='form-control' name='field_type' data-id='field_type_" . $field . "'>
                <option value='hidden'>Hidden</option>
                <option value='text'>Text</option>
                <option value='number'>Number</option>
                <option value='email'>Email</option>
                <option value='textarea'>Textarea</option>
                <option value='select'>Select</option>
                <option value='image'>Image</option>
                <option value='file'>File</option>
                <option value='files'>Multiple Files</option>
                <option value='checkbox'>Checkbox</option>
                <option value='radio'>Radio</option>
                <option value='date'>Date</option>
                <option value='time'>Time</option>
                <option value='datetime'>Date Time</option>
             </select>
             </td>
             </tr>";
        }
    }

    public function generateController() {
       
    }
}
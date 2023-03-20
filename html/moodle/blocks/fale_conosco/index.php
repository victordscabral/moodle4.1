<?php
require_once("../../config.php");
require_once("./searchform.php");
require_once($CFG->dirroot.'/blocks/escola_modelo/classes/util.php');

// Check if user is logged and not guest
require_login();
if (isguestuser()) {
    die();
}

if(!evlHabilitada()) {
  die('Esta funcionalidade requer que a integração com a EVL esteja habilitada!');
}

// Prepare page
$context = context_system::instance();
$PAGE->set_pagelayout('standard');
$PAGE->set_url('/blocks/fale_conosco/index.php');
$PAGE->requires->css(new moodle_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'));
$PAGE->requires->css(new moodle_url('https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'));
$PAGE->requires->css(new moodle_url('https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css'));

$PAGE->set_context($context);

// Get data
$strtitle = get_string('fale_conosco', 'block_fale_conosco');
$user = $USER;
//$icon = $OUTPUT->pix_icon('print', get_string('print', 'block_fale_conosco'), 'block_fale_conosco');

global $DB, $CFG, $USER;

echo $OUTPUT->header();

// Print concluded courses
echo $OUTPUT->box_start('generalbox boxaligncenter');
echo $OUTPUT->heading(get_string('fale_conosco', 'block_fale_conosco'));

//Instantiate simplehtml_form
$mform = new searchform();

//Form processing and displaying is done here
if ($mform->is_cancelled()) {
    //Handle form cancel operation, if cancel button is present on form
} else if ($fromform = $mform->get_data()) {
  //In this case you process validated data. $mform->get_data() returns data posted in form.
} else {
  // this branch is executed if the form is submitted but the data doesn't validate and the form should be redisplayed
  // or on the first display of the form.
  $mform->display();
}
?>
<script>
var arrayReturn = [];
</script>
<?php
 $PAGE->requires->js_call_amd('block_fale_conosco/config', 'init');
 $PAGE->requires->js_call_amd('block_fale_conosco/config', 'getTableContacts');
?>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Contatos</a></li>
    <li><a href="#tabs-2">Detalhes</a></li>
  </ul>
  <div id="tabs-1">
    <table id="tabela_contatos" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Assunto</th>
                <th>CPF</th>
            </tr>
        </thead>
    </table>
  </div>
  <div id="tabs-2">
    <div id="mensagens"></div>
    </table>
  </div>
</div>


<?php
echo $OUTPUT->box_end();
echo $OUTPUT->footer();

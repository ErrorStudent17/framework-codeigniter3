<?php
class Nilai extends CI_Controller {
  
    public function __construct() {
        parent::__construct();
        
        // Load the Nilai_model
        $this->load->model('Nilai_model');
    }
  
    public function hitungNilai() {
        // Call the hitungNilaiAkhir() function from the model to calculate the final scores
        $this->Nilai_model->hitungNilaiAkhir();
        
        echo "Perhitungan nilai berhasil.";
    }
  
    public function index() {
        // Call the getAllNilai() function from the model to retrieve all the scores
        $data['nilai'] = $this->Nilai_model->getAllNilai();
        
        // Pass the data to the view
        $this->load->view('nilai_view', $data);
    }
  
}
?>

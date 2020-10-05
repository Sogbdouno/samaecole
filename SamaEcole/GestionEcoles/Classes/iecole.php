<?php
namespace SamaEcole\GestionEcoles\Classes;
interface IECOLE
{
    public function add_ecole($ecole);
    public function edit_ecole($id);
    public function delete_ecole($id);
    public function get_ecole_by_id($id);
    public function get_all_ecole();
    

}
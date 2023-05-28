<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MootaClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "status" => true,
            "balance_before" => 109666,
            "bank" => [
                "corporate_id" => "",
                "username" => "loream",
                "atas_nama" => "loream kasma",
                "balance" => "0.00",
                "account_number" => "16899030",
                "bank_type" => "bca",
                "pkg" => null,
                "login_retry" => 0,
                "date_from" => "2022-08-03 00:00:00",
                "date_to" => "2022-08-03 00:00:00",
                "meta" => null,
                "interval_refresh" => 15,
                "next_queue" => "2022-08-03 13:31:10",
                "is_active" => true,
                "in_queue" => 0,
                "in_progress" => 0,
                "is_crawling" => 1,
                "recurred_at" => "2022-08-04 13:16:10",
                "created_at" => "2022-08-03 13:16:10",
                "token" => "8aolk43WJxM",
                "bank_id" => "8aolk43WJxM",
                "label" => "BCA",
                "last_update" => "2022-08-03T06:01:10.000000Z",
                "icon" => "http://moota.test/images/icon-bank-bca.png"
            ],
            "balance" => 108166
        ];

        return response()->json($data);
    }

    public function getbanklist(Request $request) 
    {    
        $page = $request->query('page');
        $per_page = $request->query('per_page');
        
        $data = [
            "current_page" => $page, 
            "data" => [
                  [
                     "corporate_id" => null, 
                     "username" => "evangeline12", 
                     "atas_nama" => "Moota", 
                     "balance" => "-", 
                     "account_number" => "85345564000", 
                     "bank_type" => "bca", 
                     "login_retry" => 0, 
                     "date_from" => "2022-05-12 00:00:00", 
                     "date_to" => "2022-05-12 00:00:00", 
                     "meta" => [
                        "activity_summary" => "User gagal login" 
                     ], 
                     "interval_refresh" => 15, 
                     "next_queue" => null, 
                     "is_active" => false, 
                     "in_queue" => 0, 
                     "in_progress" => 0, 
                     "recurred_at" => "2022-05-05 00:36:01", 
                     "created_at" => "2022-02-22 22:36:01", 
                     "token" => "VLagzqBj42D", 
                     "bank_id" => "VLagzqBj42D", 
                     "label" => "BCA", 
                     "last_update" => "2022-02-26T11:48:10.000000Z", 
                     "icon" => "http://moota.test/images/icon-bank-bca.png" 
                  ] 
               ], 
            "first_page_url" => "http://moota.test/api/v2/bank?page=1", 
            "from" => 1, 
            "last_page" => 1, 
            "last_page_url" => "http://moota.test/api/v2/bank?page=1", 
            "links" => [
                           [
                              "url" => null, 
                              "label" => "Sebelumnya", 
                              "active" => false 
                           ], 
                           [
                                 "url" => "http://moota.test/api/v2/bank?page=1", 
                                 "label" => "1", 
                                 "active" => true 
                              ], 
                           [
                                    "url" => null, 
                                    "label" => "Selanjutnya", 
                                    "active" => false 
                                 ] 
                        ], 
            "next_page_url" => null, 
            "path" => "http://moota.test/api/v2/bank", 
            "per_page" => $per_page, 
            "prev_page_url" => null, 
            "to" => 19, 
            "total" => 19 
        ]; 

         return response()->json($data);
    }

    public function updatebank(Request $request) {
        $bank_id = $request->query('bank_id');

        $data = [
            "status" => true, 
            "balance_before" => 109666, 
            "bank" => [
                    "corporate_id" => "", 
                    "username" => "loream", 
                    "atas_nama" => "loream kasma", 
                    "balance" => "0.00", 
                    "account_number" => "16899030", 
                    "bank_type" => "bca", 
                    "pkg" => null, 
                    "login_retry" => 0, 
                    "date_from" => "2022-08-03 00:00:00", 
                    "date_to" => "2022-08-03 00:00:00", 
                    "meta" => null, 
                    "interval_refresh" => 15, 
                    "next_queue" => "2022-08-03 13:31:10", 
                    "is_active" => true, 
                    "in_queue" => 0, 
                    "in_progress" => 0, 
                    "is_crawling" => 1, 
                    "recurred_at" => "2022-08-04 13:16:10", 
                    "created_at" => "2022-08-03 13:16:10", 
                    "token" => "8aolk43WJxM", 
                    "bank_id" => "8aolk43WJxM", 
                    "label" => "BCA", 
                    "last_update" => "2022-08-03T06:01:10.000000Z", 
                    "icon" => "http://moota.test/images/icon-bank-bca.png" 
                ], 
            "balance" => 108166 
        ]; 

        return response()->json($data);
    }

    public function deletebank(Request $request) {
        $bank_id = $request->query('bank_id');

        $data = [
            "message" => "OK" 
         ]; 

        return response()->json($data);
    }
}

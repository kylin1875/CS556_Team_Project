<?php

/*  
 * Student Info: Name=Wei Jin, ID=9983
 * Subject: NPU_2016_Fall_CS556(A)_Team_Project
 * Author: Arvin-tcm 
 * Filename: signin_records.php 
 * Date and Time: Nov 12, 2016 11:46:07 PM 
 * Project Name: CS556_Team_Project 
 */ 
class SigninRecords {
     private $id, $child_id, $parent_signature, $sign_in_timestamp,$sign_out_timestamp;
     function __construct($id, $child_id, $parent_signature, $sign_in_timestamp, $sign_out_timestamp) {
         $this->id = $id;
         $this->child_id = $child_id;
         $this->parent_signature = $parent_signature;
         $this->sign_in_timestamp = $sign_in_timestamp;
         $this->sign_out_timestamp = $sign_out_timestamp;
     }
     function getId() {
         return $this->id;
     }

     function getChild_id() {
         return $this->child_id;
     }

     function getParent_signature() {
         return $this->parent_signature;
     }

     function getSign_in_timestamp() {
         return $this->sign_in_timestamp;
     }

     function getSign_out_timestamp() {
         return $this->sign_out_timestamp;
     }

     function setId($id) {
         $this->id = $id;
     }

     function setChild_id($child_id) {
         $this->child_id = $child_id;
     }

     function setParent_signature($parent_signature) {
         $this->parent_signature = $parent_signature;
     }

     function setSign_in_timestamp($sign_in_timestamp) {
         $this->sign_in_timestamp = $sign_in_timestamp;
     }

     function setSign_out_timestamp($sign_out_timestamp) {
         $this->sign_out_timestamp = $sign_out_timestamp;
     }


}
